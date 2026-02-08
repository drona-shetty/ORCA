@extends('web')
@section('title', $article->title)
@section('meta_keywords', $article->keywords)
@section('meta_description', $article->introduction)
@section('meta')
<link rel="canonical" href="{{url()->current()}}">
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$article->title}}" />
<meta property="og:description" content="{{$article->introduction}}" />
<meta property="og:image" content="{{URL::asset('images/article/'.$article->title_image)}}" />
<meta name="twitter:card" content="summary_large_image">
@endsection


  <style>
    p {
        color:#000!important;
    }
    .shock-header .navbar .navbar-nav .nav-link {
      color: black !important;
    }
    .side-widget .float-icon {
    height :auto!important;
}

img {
        max-width: 100%;
    height: auto;
}

ul {
    color:black;
}

li {
    color:black;
}
  
  </style>

@section('content')
    <!-- Banner -->
   
    <section class="shock-section bg-image bg-only-desktop size-50 bg-fixed position-x-left"
      data-bg-image="{{URL::asset('images/article/'.$article->half_image)}}">
      <div class="container-fluid">
        <div class="half-section ms-auto align-v-center">
          <!-- Label -->
          <span class="label-vertical to-top-left opacity-75">
            <span class="label-line gray"></span>
            <a href="{{url('category/'.$category->slug)}}">
              <span class="label-text gray"> {{$category->category}} </span>
          </a>
            <!-- <a href="{{url('category/'.$category->slug)}}">
                {{ $category->category }}
            </a> -->
          </span>
          <!-- Label -->
          <span class="label-vertical to-bottom-right opacity-75">
            <span class="label-line gray"></span>
            <span class="label-text gray"> <?=date_format(date_create($article->created_at), "F j, Y")?></span>
          </span>
          <!-- Intro -->
          <div class="side-intro">
            <h2 class="title black">
              <span class="text-1 text-style-3">{{$article->title}}</span>

            </h2>
            <?php $i=1; ?>
                @foreach($authors as $author)
                <?php $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
            <p>
                by <a style="color:#000;" href="{{url('author/'.$author_meta->slug)}}">{{$author->name}}</a>
            </p>
             <?php $i++;?>
                @endforeach
            <div class="description gray">
              <p>@if($article->subtitle!=null){{ $article->subtitle }}@endif</p>
            </div>
            <!-- Button -->

          </div>
        </div>
      </div>
    </section>

    <!-- Banner -->
    <section class="shock-section bg-image bg-fixed" data-bg-image="{{URL::asset('images/article/'.$article->title_image)}}">
      <div class="holder vh-75"></div>
    </section>

    <!-- Portfolio -->
    <section class="shock-section pt-5 pb-5 has-overlay" style="text-align: justify!important;">
      <div class="container">
        <h4 class="title black" style="color: black;">Summary</h4>
        <p>@if($article->introduction!=null){{ $article->introduction }}@endif</p>
      </div>
      <div class="overlay white-85">&nbsp;</div>
    </section>

    <!-- Banner -->
    @if($article->content_image != null && $article->content_image != '')
      <section class="shock-section bg-image bg-fixed" data-bg-image="{{URL::asset('images/article/'.$article->content_image)}}">
        <div class="holder vh-75">&nbsp;</div>
      </section>
    @endif
    <!-- text editor -->
    <section class="shock-section pt-5 pb-5 has-overlay">
      <div class="container">
        {!! $article->content !!}
        
         <!-- Author -->
            <div class="comments mt-2">
              <h2>Author</span></h2>
              <div class="comments-wrapper">
                <!-- Comment -->
                <?php $i=1; ?>
                @foreach($authors as $author)
                <?php $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                <div id="comment-{{$i}}" class="comment">
                  <div class="comment-metadata">
                    <div class="comment-author">
                      <div class="author-photo">
                        <img src="{{ URL::asset('images/author') }}/{{ $author_meta->avatar }}" class="image shadow" alt="Image name">
                      </div>
                      <a href="{{url('author/'.$author_meta->slug)}}" class="link gray primary-hover">
                      <h5 class="author-name">{{$author->name}}</h5>
                      </a>
                    </div>
                    
                  </div>
                  <div class="comment-content">
                    <p>{{$author_meta->about}}</p>
                  </div>
                </div>
                <?php $i++;?>
                @endforeach
              </div>
             
             
            </div>

              <!-- Tag Cloud -->
              <div class="block-section">
                <h2>Tags</h2>
                <div class="tag-cloud">
                @foreach($tags as $tag)
                  <a href="{{ url('tag/'.$tag['slug']) }}" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">{{$tag['tag']}}</span>
                    </span>
                  </a>
                  @endforeach
                </div>
              </div>
      </div>
    </section>
@endsection
<?php
$art = App\Models\Article::where('id', $article->id);
$art->update([
    'views' => $article->views+1,
]);
?>