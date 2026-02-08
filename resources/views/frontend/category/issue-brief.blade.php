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
    <!-- Banner -->
    <section class="shock-section has-holder pb-2 pt-2">
        <div class="container max-w-75">
        <!-- Intro -->
        <div class="basic-intro text-center">
            <h1 class="title black">
                <span class="text-1 d-block text-style-2">{{$category->category}}</span>
            </h1>
            <div class="description gray">
            <p> {{ $category->title }}</p>
              <p>(Views mentioned in the {{$category->category}} belong to the author(s) alone.)</p>
            </div>
            <?php if(count($articles) < 1) { ?>
            <span> <?=count($articles)?> posts </span>
            <?php } ?>
        </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="shock-section pt-5 pb-5 gray-10">
        <div class="container">
            <div id="load-more-3" class="row g-5" data-display="6" data-columns="2">
                <?php $i=0; ?>
                @foreach($articles as $article)
                <div class="col-12 col-md-6 load-more-item-3">
                    <div class="card has-image has-metadata is-horizontal shadow parent">
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
                        <div class="image-wrapper hover-scale">
                        <img src="{{URL::asset('images/article/'.$article->title_image)}}" alt="Image name" class="image" />
                        </div>
                        <!-- Body -->
                        <div class="card-body bg-color white">
                        <h3 class="title text-style-11 black">{{ $article->title }}</h3>
                        <p class="description line-clamp-3"> @if($article->subtitle!=null){{ $article->subtitle }}@endif</p>
                        <hr class="gray-25">
                        <!-- Tag Cloud -->
                        <div class="tag-cloud">
                            <a href="#" class="link">                      
                            <span class="badge outline gray-50 primary-hover">
                                <span class="badge-text gray white-hover"> <?=date_format(date_create($article->created_at), "F j, Y")?></span>
                            </span>
                            </a>
                            <a href="{{url('category/'.$category->slug)}}" class="link">                      
                            <span class="badge outline gray-50 primary-hover">
                                <span class="badge-text gray white-hover">{{$category->category}}</span>
                            </span>
                            </a>
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
              <button id="load-more-button-3" class="button shadow black primary-hover button-collision">
                <span class="button-text white white-hover">Load more</span>
                <i class="fa-solid fa-arrow-rotate-right button-icon white white-hover"></i>
              </button>
            </div>
        </div>
    </section>

@endsection