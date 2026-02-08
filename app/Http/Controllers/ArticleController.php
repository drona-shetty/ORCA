<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::select('id','downloads', 'status','title_image', 'views', 'author_id', 'title', 'created_at', 'category', 'slug', 'p_color', 'a_color', 'section_bg')
            
            ->orderBy('created_at', 'desc')
            ->paginate(10); // or any number per page

        return view('admin.article.listing', compact('articles'));
    }

    public function search_article(Request $request)
    {
        $query = $request->get('query');
        $articles = Article::select('id', 'status','title_image', 'views', 'author_id', 'title', 'created_at', 'category', 'slug', 'p_color', 'a_color', 'section_bg')
                    ->where('title', 'LIKE', "%$query%")
                    ->orderBy('created_at', 'desc')
                    ->paginate(10); // Set desired per-page count

        if ($request->ajax()) {
            return view('admin.article.partial', compact('articles'))->render();
        }

        return view('admin.article.listing', compact('articles'));
    }

    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.article.add', compact('tags', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'title_image' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'content' => 'required',
            'wordcount' => 'required'
        ]);

        $read_time = max(1, round((int)$request['wordcount'] / 200));

        $tmpFile = $_FILES['title_image']['tmp_name'];
        $newFile = 'images/article/' . $_FILES['title_image']['name'];
        $result = move_uploaded_file($tmpFile, $newFile);

        $halfImageName = '';
        if(isset($_FILES['half_image']) && $_FILES['half_image']['error'] === UPLOAD_ERR_OK){
            $tmpFile1 = $_FILES['half_image']['tmp_name'];
            $newFile1 = 'images/article/' . $_FILES['half_image']['name'];
            $result1 = move_uploaded_file($tmpFile1, $newFile1);
            if($result1){
                $halfImageName = $_FILES['half_image']['name'];
            }
        }

        $contentImageName = '';
        if(isset($_FILES['content_image'])){
            $tmpFile2 = $_FILES['content_image']['tmp_name'];
            $newFile2 = 'images/article/' . $_FILES['content_image']['name'];
            $result2 = move_uploaded_file($tmpFile2, $newFile2);
            $contentImageName = $_FILES['content_image']['name'];
        }

        $createdDate = $request->filled('created_at') ? date("Y-m-d H:i:s", strtotime($request['created_at'])) : now();

        $slug = Str::slug($request['title']);

        $article = Article::create([
            'title' => $request['title'],
            'subtitle' => $request['subtitle'],
            'content' => $request['content'],
            'tags' => serialize($request['tags']),
            'category' => $request['category'],
            'slug' => $slug,
            'title_image' => $_FILES['title_image']['name'],
            'half_image' => $halfImageName,
            'content_image' => $contentImageName,
            'image_caption' => $request['image_caption'],
            'introduction' => $request['introduction'],
            'read_time' => $read_time,
            'keywords' => $request['keywords'],
            'author_unserialized_id' => $request['author_id'],
            'author_id' => serialize($request['author_id']),
            'created_at' => $createdDate,
            'p_color' => $request->p_color ?? '#ffffff',
            'a_color' => $request->a_color ?? '#e41e25',
            'section_bg' => $request['section_bg'] ?? '#000000',

        ]);

        return redirect('yn-admin/articles')->with('success', 'Article created successfully.');
    }

    public function show($id)
    {
        $article = Article::find($id);
        if (!$article) return abort(404);

        $tag_ids = unserialize($article->tags ?? '') ?? [];
        $author_ids = unserialize($article->author_id ?? '') ?? [];

        $authors = User::whereIn('id', $author_ids)->get();
        $category = Category::find($article->category);
        $tags = Tag::whereIn('id', $tag_ids)->get();

        if (!$category) return abort(404);

        $slug = $category->slug;
        $viewMap = [
            'backgrounders' => "/{$article->slug}",
            'cicm' => "/article/{$article->slug}",
            'events' => "/events/{$article->slug}",
            'central-committee' => "/centralcommittee/20cc/{$article->slug}",
            'infographics' => "/infographics/{$article->slug}",
            'special-report' => "/specialreport/{$article->slug}",
        ];

        return isset($viewMap[$slug]) ? redirect($viewMap[$slug]) : view('frontend.article.view', compact('article', 'tags', 'authors', 'category'));
    }

    public function edit($id)
    {
        $article = Article::find($id);
        if (!$article) return abort(404);

        $tags = Tag::all();
        $categories = Category::all();
        $authors = User::whereIn('role', ['author', 'administrator'])->get();

        $tag_ids = unserialize($article->tags ?? '') ?? [];
        $author_ids = unserialize($article->author_id ?? '') ?? [];

        return view('admin.article.edit', compact('tags', 'tag_ids', 'categories', 'article', 'authors', 'author_ids'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'content' => 'required',
            'wordcount' => 'required',
        ]);

        $article = Article::find($id);
        if (!$article) return abort(404);

        $read_time = max(1, round((int)$request['wordcount'] / 200));

        $article->title_image = $request->file('title_image') ? basename($request->file('title_image')->store('images/article', 'public')) : $article->title_image;
        $article->half_image = $request->file('half_image') ? basename($request->file('half_image')->store('images/article', 'public')) : $article->half_image;
        $article->content_image = $request->file('content_image') ? basename($request->file('content_image')->store('images/article', 'public')) : $article->content_image;

        $article->update([
            'title' => $request['title'],
            'subtitle' => $request['subtitle'],
            'content' => $request['content'],
            'tags' => serialize($request['tags']),
            'category' => $request['category'],
            'slug' => Str::slug($request['title']),
            'title_image' => $article->title_image,
            'half_image' => $article->half_image,
            'content_image' => $article->content_image,
            'image_caption' => $request['image_caption'],
            'introduction' => $request['introduction'],
            'read_time' => $read_time,
            'keywords' => $request['keywords'],
            'author_unserialized_id' => $request['author_id'][0] ?? null,
            'author_id' => serialize($request['author_id']),
            'created_at' => $request['created_at'],
            'p_color' => $request->input('p_color', $article->p_color),
            'a_color' => $request->input('a_color', $article->a_color),
            'section_bg' => $request->input('section_bg', $article->section_bg),

        ]);

        return redirect('yn-admin/articles')->with('success', 'Article updated successfully');
    }

    public function update_status_processing(Request $request)
    {
        Article::where('id', $request['id'])->update(['status' => 'processing']);
        return redirect('yn-author/articles')->with('success', 'Send for approval');
    }

    public function update_status_approved(Request $request)
    {
        Article::where('id', $request['id'])->update(['status' => 'approved']);
        return redirect('yn-admin/articles')->with('success', 'Send for approval');
    }

    public function destroy($id)
    {
        Article::where('id', $id)->delete();
        return redirect('yn-admin/articles');
    }

    public function featured($slug)
    {
        return $this->renderBySlugAndView($slug, 'frontend.article.featured', 'backgrounders');
    }

    public function cicmnews($slug)
    {
        return $this->renderBySlugAndView($slug, 'frontend.article.cicmdesign', 'cicm');
    }

    public function viewevent($slug)
    {
        return $this->renderBySlugAndView($slug, 'frontend.article.viewevents', 'events');
    }

    public function twentycc($slug)
    {
        return $this->renderBySlugAndView($slug, 'frontend.article.centralcommittee', 'central-committee');
    }

    public function graphics($slug)
    {
        return $this->renderBySlugAndView($slug, 'frontend.article.infographics', 'infographics');
    }

    public function specialreport($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $tag_ids = unserialize($article->tags ?? '') ?? [];
        $author_ids = unserialize($article->author_id ?? '') ?? [];

        $authors = User::whereIn('id', $author_ids)->get();
        $category = Category::find($article->category);
        $tags = Tag::whereIn('id', $tag_ids)->get();

        return view('frontend.article.special-report', compact('article', 'tags', 'authors', 'category'));
    }

    private function renderBySlugAndView($slug, $view, $categorySlug)
    {
        $article = Article::where('slug', $slug)->first();
        if (!$article) return abort(404);

        $category = Category::find($article->category);
        if (!$category || $category->slug !== $categorySlug) return redirect('/');

        $tag_ids = unserialize($article->tags ?? '') ?? [];
        $author_ids = unserialize($article->author_id ?? '') ?? [];

        $tags = Tag::whereIn('id', $tag_ids)->get();
        $authors = User::whereIn('id', $author_ids)->get();

        return view($view, compact('article', 'tags', 'authors', 'category'));
    }

    public function search(Request $request)
    {
        $key = $request->s;
        $articles = DB::table('articles')
            ->join('users', 'articles.author_unserialized_id', '=', 'users.id')
            ->select('articles.id', 'articles.title_image', 'articles.status', 'articles.views', 'articles.author_id', 'articles.title', 'articles.subtitle', 'articles.created_at', 'articles.category', 'articles.slug', 'articles.content', 'users.name')
            ->where('articles.status', 'approved')
            ->where(function($query) use ($key) {
                $query->where('articles.title', 'LIKE', "%$key%")
                      ->orWhere('articles.content', 'LIKE', "%$key%")
                      ->orWhere('users.name', 'LIKE', "%$key%")
                      ;
            })
            ->orderBy('articles.created_at', 'desc')
            ->get();

        return view('frontend.search', compact('articles', 'key'));
    }

    public function ajax_search(Request $request)
    {
        $key = $request->s;
        return Article::select('id','title_image', 'status', 'views', 'author_id', 'title', 'created_at', 'category', 'slug')
            ->where('status', 'approved')
            ->where('title', 'LIKE', "%$key%")
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
    }

    public function ajax_loadmore(Request $request)
    {
        $articles = Article::select('id','title','subtitle','title_image','slug','read_time','created_at','category')
            ->where('status', 'approved')
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('frontend.loadmore',compact('articles'));
    }

    public function pdfCounter(Request $request)
    {
        $art = Article::where('id', $request->id);
        $art->update([
            'downloads' => $art->first()->downloads + 1,
        ]);
    }
}
