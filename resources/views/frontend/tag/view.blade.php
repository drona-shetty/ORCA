@extends('web')
@section('title',$tag['tag'].' | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')

<style>
  .shock-header .navbar .navbar-nav .nav-link {
    color: black !important;
  }
</style>

<!-- Banner -->
<section class="pt-6 shock-section has-holder pb-2">
    <div class="container max-w-75">
        <!-- Intro -->
        <div class="basic-intro text-center">
        <h1 class="title black">
            <span class="text-1 d-block text-style-2">{{$tag['tag']}}</span>
            
        </h1>
        <div class="description gray">
            <p><?=count($a)?> posts</p>
        </div>
        </div>
    </div>
</section>

   <!-- Blog -->
   <section class="shock-section pt-5 pb-5">
        <div class="container">
            <!-- Posts -->
            <div id="load-more-2" class="row g-2" data-display="9" data-columns="3">
                @foreach($a as $article)
               
                <?php $category = App\Models\Category::where('id', $article->category)->first();?>
                <div class="col-12 col-md-6 col-lg-4 load-more-item-2">
                    <div class="card has-full-image vh-65 small-shadow rounded parent">
                        <!-- Image -->
                        <div class="image-wrapper hover-up-down">
                        <img src="{{URL::asset('images/article/'.$article->title_image)}}" alt="Image name" class="image" />
                        </div>
                        <!-- Body -->
                        <div class="card-body align-v-bottom">
                        <div class="holder">
                            <a href="{{url('category/'.$category->slug)}}" class="link">                      
                            <span class="badge outline primary primary-hover">
                                <span class="badge-text white-75 white-hover">{{$category->category}}</span>
                            </span>
                            </a>
                            <h3 class="title text-style-9 white">{{ $article->title }}</h3>
                            <hr class="gray-25">
                            <!-- Metadata -->
                            <div class="card-metadata">
                            <?php 
                            $author_id = unserialize($article->author_id);
                            
                            $author = App\Models\User::where('id',$author_id)->first();
                            $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                            <div class="item">
                                <a href="{{url('author/'.$author_meta->slug)}}" class="link gray primary-hover"><i class="fa-solid fa-user icon"></i>{{ $author->name }}</a>
                            </div>
                            <div class="item">
                                <a href="#your-link" class="link gray primary-hover"><i class="fa-solid fa-calendar-days icon"></i><?=date_format(date_create($article->created_at), "F j, Y")?></a>
                            </div>
                            </div>
                        </div>
                        <!-- Overlay -->
                        <div class="overlay black"></div>
                        <!-- Link -->
                        <a href="{{url('article/'.$article->id)}}/{{$article->slug}}" class="full-link"></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-4 text-center">
                <!-- Button -->
                <button id="load-more-button-2" class="button border-gradient scheme-1">
                <span class="button-text">Load more</span>
                <i class="fa-solid fa-arrow-rotate-right button-icon secondary primary-hover"></i>
                </button>
            </div>
        </div>
    </section>

@endsection