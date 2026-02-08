@extends('web')
@section('title','ORCA | Organisation for Research on China and Asia')
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
          <div class="description gray">
          <p>Search Results for</p>
        </div>
        <h1 class="title black">
          <span class="text-1 d-block text-style-2">"{{$key}}"</span>
          
        </h1>
        
      </div>
    </div>
  </section>
  
  
  
  <section class="shock-section pt-5 pb-5 gray-10">
    <div class="container">
      <div class="row g-5" data-display="6" data-columns="2">
   
   @foreach($articles as $article)
                            <?php $category = App\Models\Category::where('id',$article->category)->first();?>
   
   <div class="col-12 col-md-12 load-more-item-3">
          <div class="card has-image has-metadata is-horizontal shadow parent">
           
            <!-- Label -->
            
            <!-- Image -->
            <div class="image-wrapper hover-scale">
              <img src="{{URL::asset('images/article/'.$article->title_image)}}" alt="Image name" class="image" />
            </div>
            <!-- Body -->
            <div class="card-body bg-color white">
              <a href="{{url('article/'.$article->id.'/'.$article->slug)}}">
                 <h3 class="title text-style-11 black"> {{ $article->title }}</h3>
               </a>
              <p class="description line-clamp-3">{{ $article->subtitle }}</p>
              <hr class="gray-25">
              <!-- Tag Cloud -->
              <div class="tag-cloud">
                                 
                  <span class="badge outline gray-50 primary-hover">
                    <span class="badge-text gray white-hover"> <?=date_format(date_create($article->created_at), "F j, Y")?></span>
                  </span>
         
                <a href="{{url('category/'.$category->slug)}}" class="link">                      
                  <span class="badge outline gray-50 primary-hover">
                    <span class="badge-text gray white-hover">{{$category->category}}</span>
                  </span>
                </a>
                 <?php 
                        $author_id = unserialize($article->author_id);
                        $author = App\Models\User::where('id',$author_id)->first();
                        $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                 <a href="{{url('author/'.$author_meta->slug)}}" class="link">                      
                  <span class="badge outline gray-50 primary-hover">
                    <span class="badge-text gray white-hover">{{ $author->name }}</span>
                  </span>
                </a>
                
              </div>
            </div>
            <!-- Link -->
         <!--  <a href="{{url('article/')}}/{{$article->slug}}" class="full-link"></a> -->
          </div>
        </div>
            @endforeach
        
</div>
</div>
</div>
        
        
 
@endsection