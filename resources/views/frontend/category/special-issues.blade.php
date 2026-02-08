@extends('web')
@section('title', $category->category.' | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')
<style>
  .shock-header .navbar .navbar-nav .nav-link {
    color: black !important;
  }
</style>
    <section class="shock-section has-holder pb-4 pt-2 gray-10">
        <div class="container">
          <!-- Posts -->
          <div class="row g-0">
            <div class="col-12 col-md-12">
              <!-- Intro -->
              <div class="basic-intro text-center">
                <h2 class="title black">
                  <span class="text-1 text-style-5">{{$category->category}}
                </h2>
                <div class="description gray">
                  <p>{{ $category->title }}</p>
                    <p>(Views mentioned in the {{$category->category}} belong to the author(s) alone.)</p>
                </div>
                <?php if(count($articles) < 1) { ?>
                    <span> <?=count($articles)?> posts </span>
                <?php } ?>
              </div>
             
            </div>
          </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="shock-section pt-2 pb-2">
        <div class="container">
            <div id="load-more-1" class="row g-5" data-display="6" data-columns="3">
                <?php $i=0; ?>
                @foreach($articles as $article)
                <div class="col-12 col-md-6 col-lg-4 load-more-item-1">
                    <div class="card has-image shadow parent">
                        <!-- Label -->
                        <span class="label-vertical to-bottom-right-out">
                        <span class="label-line gray"></span>
                        <?php 
                        $author_id = unserialize($article->author_id);
                        $author = App\Models\User::where('id',$author_id)->first();
                        $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                        <a href="{{url('author/'.$author_meta->slug)}}">
                          <span class="label-text gray"><i class="icon fas fa-user-circle"></i> {{ $author->name }}</span>
                        </a>
                        </span>
                        <!-- Image -->
                        <div class="image-wrapper rounded-top hover-zoom">
                        <img src="{{URL::asset('images/article/'.$article->title_image)}}" alt="Image name" class="image" />
                        </div>
                        <!-- Body -->
                        <div class="card-body rounded-bottom bg-color white">
                        <h3 class="title text-style-11 black">{{ $article->title }}</h3>
                        <p class="description line-clamp-3">@if($article->subtitle!=null){{ $article->subtitle }}@endif</p>
                        <!-- Button -->
                        <div class="button-wrapper align-h-right">
                            <span class="arrow-button cross scheme-1 primary">
                            <span class="arrow">
                                <span class="item"></span>
                                <span class="item"></span>
                            </span>
                            <span class="line"></span>
                            <span class="text">READ MORE</span>
                            </span>
                        </div>
                        </div>
                        <!-- Link -->
                        <a href="{{url('article/'.$article->id)}}/{{$article->slug}}" class="full-link"></a>
                    </div>
                </div>
                <?php $i++; ?>
                @endforeach
            </div>
            <div class="mt-4 text-center">
              <!-- Button -->
              <button id="load-more-button-1" class="button shadow black primary-hover button-collision">
                <span class="button-text white white-hover">Load more</span>
                <i class="fa-solid fa-arrow-rotate-right button-icon white white-hover"></i>
              </button>
            </div>
        </div>
    </section>

@endsection