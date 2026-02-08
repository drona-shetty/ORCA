@extends('web')
@section('title', $category->category.' | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')

    <!-- Banner -->
    <section class="shock-section has-holder pb-2 pt-2 bg-color black">
        <div class="container max-w-75">
        <!-- Intro -->
        <div class="basic-intro text-center">
            <h1 class="title black">
            <span class="text-1 d-block text-style-2 white">{{$category->category}}</span>
            
            </h1>
            <div class="description gray">
            <p>{{ $category->title }}</p>
              <p>(Views mentioned in the {{$category->category}} belong to the author(s) alone.)</p>
            </div>
            <?php if(count($articles) < 1) { ?>
            <span> <?=count($articles)?> posts </span>
            <?php } ?>
        </div>
        </div>
    </section>
    
    <!-- Dark -->
    <section class="shock-section pt-6 pb-6 bg-color black">
        <div class="container">
            <div class="row">
                @foreach($articles as $article)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card parent">
                        <div class="card-body">
                        <h3 class="title text-style-11 white">{{ $article->title }}</h3>
                        <p class="description">@if($article->subtitle!=null){{ $article->subtitle }}@endif</p>
                        <hr class="gray-50">
                        <!-- Tag Cloud -->
                        <div class="tag-cloud">
                            <a href="#your-link" class="link">                      
                            <span class="badge outline gray-50 tertiary-hover">
                                <span class="badge-text gray white-hover"><?=date_format(date_create($article->created_at), "F j, Y")?></span>
                            </span>
                            </a>
                            <?php 
                        $author_id = unserialize($article->author_id);
                        $author = App\Models\User::where('id',$author_id)->first();
                        $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                            <a href="{{url('category/'.$category->slug)}}" class="link">                      
                            <span class="badge outline gray-50 tertiary-hover">
                                <span class="badge-text gray white-hover">{{ $author->name }}</span>
                            </span>
                            </a>
                        </div>
                        </div>
                        <!-- Link -->
                        <a href="{{url('article/'.$article->id)}}/{{$article->slug}}" class="full-link">
                        <div class="overlay shadow magnetic-effect hover-show bg-image" data-bg-image="{{URL::asset('images/article/'.$article->title_image)}}"></div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection