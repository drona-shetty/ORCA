<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DMArticle;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Category;

class DMArticleController extends Controller
{
    public function index()
    {
        $articles = DMArticle::select('id', 'status','title_image', 'views', 'author_id', 'title', 'created_at', 'category', 'slug')->where('status', 'approved')->orWhere('status', 'processing')->orderBy('created_at', 'desc')->get();
        return view('admin.episodesofexchanges.listing', compact('articles'));
    }

    public function list()
    {
        $articles = DMArticle::select('id', 'status','title_image', 'views', 'author_id', 'title', 'subtitle', 'created_at', 'category', 'slug')->where('status', 'approved')->orderByRaw('CAST(SUBSTRING_INDEX(subtitle, " ", -1) AS UNSIGNED) ASC')->get();
        return view('frontend.article.dm', compact('articles'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('admin.episodesofexchanges.add', compact('tags'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'title_image' => 'required',
            'tags' => 'required',
            'content' => 'required',
            'wordcount' => 'required'
        ]);

        $read_time = round((int)$request['wordcount']/200);
        if($read_time < 1) {
            $read_time = 1;
        }

        $tmpFile = $_FILES['title_image']['tmp_name'];
        $newFile = 'images/article/' . $_FILES['title_image']['name'];
        $result = move_uploaded_file($tmpFile, $newFile);

        $halfImageName = '';
        if(isset($request['half_image']) && !empty($request['half_image'])){
            $tmpFile1 = $_FILES['half_image']['tmp_name'];
            $newFile1 = 'images/article/' . $_FILES['half_image']['name'];
            $result1 = move_uploaded_file($tmpFile1, $newFile1);
            $halfImageName = $_FILES['half_image']['name'];;
        }
        
        $contentImageName = '';
        if(isset($request['content_image']) && !empty($request['content_image'])){
            $tmpFile2 = $_FILES['content_image']['tmp_name'];
            $newFile2 = 'images/article/' . $_FILES['content_image']['name'];
            $result2 = move_uploaded_file($tmpFile2, $newFile2);
            $contentImageName = $_FILES['content_image']['name'];
        }

        $createdDate = date("Y-m-d H:i:s");
        if(isset($request['created_at']) && !empty($request['created_at']))
        {
            $createdDate = date("Y-m-d H:i:s", strtotime($request['created_at']));
        }

        $request = request()->all();
        $slug = Str::of($request['title'])->slug('-');
        $tags = serialize($request['tags']);
        $request['author_unserialized_id'] = $request['author_id'];
        $authors = serialize($request['author_id']);
        $request['author_id'] = $authors;
        $request['tags'] = $tags;
        $request['title_image'] = $_FILES['title_image']['name'];
        $request['half_image'] = $halfImageName;
        $request['content_image'] = $contentImageName;
        $request['slug'] = $slug;
        $request['read_time'] = $read_time;
        $request['created_at'] = $createdDate;
        DMArticle::create($request);

        return redirect('yn-admin/episodesofexchanges')
            ->with('success', 'Article created successfully.');
    }

    public function show($id)
    {
        $article = DMArticle::where('id', $id)->first();
        DMArticle::where('id', $id)->update(['views' => (int)$article->views + 1]);
        $tag_ids = unserialize($article->tags);
        $author_ids = unserialize($article->author_id);
        $authors = [];
        foreach($author_ids as $a_id){
            $authors[] = User::where('id', $a_id)->first();
        }
        $category = Category::where('id', $article->category)->first();
        $tags = [];
        foreach($tag_ids as $id) {
            $tag = Tag::where('id', (int)$id)->first();
            $tags[] = $tag;
        }

        return view('frontend.article.episodesofexchanges', compact('article', 'tags', 'authors', 'category'));
    }

    public function edit($id)
    {
        $tags = Tag::all();
        $authors = User::where('role', 'author')->orWhere('role', 'administrator')->get();
        $article = DMArticle::where('id', $id)->first();
        $tag_ids = unserialize($article->tags);
        $author_ids = unserialize($article->author_id);
        return view('admin.episodesofexchanges.edit', compact('tags', 'tag_ids', 'article', 'authors', 'author_ids'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'content' => 'required',
            'wordcount' => 'required',
        ]);

        $read_time = round((int)$request['wordcount']/200);
        if($read_time < 1) {
            $read_time = 1;
        }
        $article = DMArticle::where('id', $id);
        
        if($_FILES['title_image']['name'] != ''){
            $tmpFile = $_FILES['title_image']['tmp_name'];
            $newFile = 'images/article/' . $_FILES['title_image']['name'];
            $result = move_uploaded_file($tmpFile, $newFile);
            $title_image = $_FILES['title_image']['name'];
        } else {
            $title_image = $article->first()->title_image;
        }

        if($_FILES['half_image']['name'] != ''){
            $tmpFile1 = $_FILES['half_image']['tmp_name'];
            $newFile1 = 'images/article/' . $_FILES['half_image']['name'];
            $result1 = move_uploaded_file($tmpFile1, $newFile1);
            $half_image = $_FILES['half_image']['name'];
        } else {
            $half_image = $article->first()->half_image;
        }

        if($_FILES['content_image']['name'] != ''){
            $tmpFile2 = $_FILES['content_image']['tmp_name'];
            $newFile2 = 'images/article/' . $_FILES['content_image']['name'];
            $result2 = move_uploaded_file($tmpFile2, $newFile2);
            $content_image = $_FILES['content_image']['name'];
        } else {
            $content_image = $article->first()->content_image;
        }
        
        $slug = Str::of($request['title'])->slug('-');

        $article->update([
            'title' => $request['title'],
            'content' => $request['content'],
            'tags' => serialize($request['tags']),
            'slug' => $slug,
            'subtitle' => $request['subtitle'],
            'title_image' => $title_image,
            'half_image' => $half_image,
            'content_image' => $content_image,
            'image_caption' => $request['image_caption'],
            'introduction' => $request['introduction'],
            'read_time' => $read_time,
            'keywords' => $request['keywords'],
            'author_unserialized_id' => $request['author_id'][0],
            'author_id' => serialize($request['author_id']),
            'created_at' => $request['created_at']
        ]);

        return redirect('yn-admin/episodesofexchanges')
            ->with('success', 'Article updated successfully');
    }

    public function update_status_processing(Request $request)
    {
        $article = DMArticle::where('id', $request['id']);
        $article->update(['status' => 'processing']);
        return redirect('yn-author/episodesofexchanges')
            ->with('success', 'Send for approval');
    }

    public function update_status_approved(Request $request)
    {
        $article = DMArticle::where('id', $request['id']);
        $article->update(['status' => 'approved']);
        return redirect('yn-admin/episodesofexchanges')
            ->with('success', 'Send for approval');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = DMArticle::where('id', $id);
        $article->delete();

        return redirect('yn-admin/episodesofexchanges');
    }
}
