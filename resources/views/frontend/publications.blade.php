@extends('web')
@section('title','ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')
@section('content')
 <!-- Blog -->
 
   <style>
    .shock-header .navbar .navbar-nav .nav-link {
      color: black !important;
    }
  
  </style>
  


   <!-- Banner -->
    <section class="shock-section has-holder pb-4">
        <div class="container max-w-75">
            <!-- Intro -->
            <?php 
            $opinionCategory = App\Models\Category::where('slug','opinion-pieces')->first(); 
            $opinionArticles = App\Models\Article::select('id', 'tags', 'category', 'title', 'subtitle', 'slug', 'created_at', 'title_image', 'author_id')->where('category', $opinionCategory['id'])->orderBy('created_at', 'desc')->limit(3)->get();
            
            ?>
            <div class="basic-intro text-center">
            <h1 class="title black">
                <span class="text-1 d-block text-style-2">{{$opinionCategory->category}}</span>
                <p class="publicdesc">{{$opinionCategory->title}}</p>
            </h1>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="shock-section pt-2 pb-2">
        <div class="container">
          <!-- Posts -->
          <div class="row g-2" data-display="9" data-columns="3">
            @foreach($opinionArticles as $article)
                <div class="col-12 col-md-6 col-lg-4 load-more-item-2">
                    <div class="card has-full-image vh-65 small-shadow rounded parent">
                    
                        <!-- Image -->
                        <div class="image-wrapper hover-up-down">
                        <img src="{{URL::asset('images/article/'.$article->title_image)}}" alt="Image name" class="image" />
                        </div>
                        <!-- Body -->
                        <div class="card-body align-v-bottom">
                        <div class="holder">
                            <a href="{{url('category/'.$opinionCategory->slug)}}" class="link">
                            <span class="badge outline primary primary-hover">
                                <span class="badge-text white-75 white-hover">{{$opinionCategory->category}}</span>
                            </span>
                            </a>
                            <a href="{{url('article/'.$article->id.'/'.$article->slug)}}">
                                <h3 class="title text-style-9 white">{{$article->title}}</h3>
                            </a>
                            <hr class="gray-25">
                            <!-- Metadata -->
                            <?php 
                            $author_id = unserialize($article->author_id);
                            $author = App\Models\User::where('id',$author_id)->first();
                            $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                            <div class="card-metadata">
                            <div class="item">
                                <a href="{{url('author/'.$author_meta->slug)}}" class="link gray primary-hover"><i class="fa-solid fa-user icon"></i>{{ $author->name }} 
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="link gray primary-hover"><i class="fa-solid fa-calendar-days icon"></i><?=date_format(date_create($article->created_at), "F j, Y")?></a>
                            </div>
                            </div>
                        </div>
                        <!-- Overlay -->
                        <div class="overlay black"></div>
                        <!-- Link -->
                        <!-- <a href="#your-link" class="full-link"></a> -->
                        </div>
                    </div>
                </div>
            @endforeach           
          </div>
          <div class="mt-4 text-center">
            <!-- Button -->
            <a href="{{url('category/'.$opinionCategory->slug)}}" class="link">
                <button class="button border-gradient scheme-1">
                <span class="button-text">More</span>
                </button>
            </a>
          </div>
        </div>
    </section>

     <!-- Banner -->
     <section class="shock-section has-holder pb-2 bg-color black">
      <div class="container max-w-75">
        <!-- Intro -->
        <?php 
            $expertCategory = App\Models\Category::where('slug','expert-speak')->first(); 
            $expertArticles = App\Models\Article::select('id', 'tags', 'category', 'title', 'subtitle', 'slug', 'created_at', 'title_image', 'author_id')->where('category', $expertCategory['id'])->orderBy('created_at', 'desc')->limit(3)->get();
            ?>
        <div class="basic-intro text-center">
          <h1 class="title black">
            <span class="text-1 d-block text-style-2 white">{{$expertCategory->category}}</span>
            <p class="publicdesc">{{$expertCategory->title}}</p>
          </h1>
        </div>
      </div>
    </section>

     <!-- Dark -->
    <section class="shock-section pt-6 pb-6 bg-color black">
        <div class="container">
            <div class="row">
                @foreach($expertArticles as $article)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card parent">
                    <div class="card-body">
                        <a href="{{url('article/'.$article->id.'/'.$article->slug)}}">
                            <h3 class="title text-style-11 white">{{$article->title}}</h3>
                        </a>
                        <p class="description">@if($article->subtitle!=null){{ $article->subtitle }}@endif</p>
                        <hr class="gray-50">
                        <!-- Tag Cloud -->
                        <?php 
                            $author_id = unserialize($article->author_id);
                            $author = App\Models\User::where('id',$author_id)->first();
                            $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                        <div class="tag-cloud">
                        
                        <a href="{{url('author/'.$author_meta->slug)}}" class="link">
                            <span class="badge outline gray-50 tertiary-hover">
                            <span class="badge-text gray white-hover">{{ $author->name }}</span>
                            </span>
                        </a>
                        <a href="#" class="link">                      
                            <span class="badge outline gray-50 tertiary-hover">
                            <span class="badge-text gray white-hover"><?=date_format(date_create($article->created_at), "F j, Y")?></span>
                            </span>
                        </a>
                        </div>
                    </div>
                    <!-- Link -->
                    <a href="{{url('article/'.$article->id.'/'.$article->slug)}}" class="full-link">
                        <div class="overlay shadow magnetic-effect hover-show bg-image" data-bg-image="{{URL::asset('images/article/'.$article->title_image)}}"></div>
                    </a>
                    </div>
                </div>
                @endforeach 
            </div>
            <div class="mt-4 text-center">
              <!-- Button -->
              <a href="{{url('category/'.$expertCategory->slug)}}" class="link">
                  <button class="button border-gradient scheme-1">
                  <span class="button-text">More</span>
                  </button>
              </a>
            </div>
        </div>
    </section>
    
    

    <!-- Banner -->
    <section class="shock-section has-holder pb-2 pt-2">
      <div class="container max-w-75">
        <!-- Intro -->
        <?php 
            $reviewingccCategory = App\Models\Category::where('slug','reviewing-chinese-culture')->first(); 
            $reviewingccArticles = App\Models\Article::select('id', 'tags', 'category', 'title', 'subtitle', 'slug', 'created_at', 'title_image', 'author_id')->where('category', $reviewingccCategory['id'])->orderBy('created_at', 'desc')->limit(3)->get();
            ?>
        <div class="basic-intro text-center">
          <h1 class="title black">
            <span class="text-1 d-block text-style-2">{{$reviewingccCategory->category}}</span>
            <p class="publicdesc">{{$reviewingccCategory->title}}</p>
          </h1>
        </div>
      </div>
    </section>

     <!-- Blog -->
    <section class="shock-section pt-2">
        <div class="container">
            <!-- Posts -->
            <div class="row g-5" data-display="6" data-columns="3">
                @foreach($reviewingccArticles as $article)
                <div class="col-12 col-md-6 col-lg-4 load-more-item-1">
                    <div class="card has-image shadow parent">
                        <!-- Label -->
                        <?php 
                            $author_id = unserialize($article->author_id);
                            $author = App\Models\User::where('id',$author_id)->first();
                            $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                        <span class="label-vertical to-bottom-right-out">
                        <span class="label-line gray"></span>
                        <a href="{{url('author/'.$author_meta->slug)}}" class="link">
                            <span class="label-text gray"><i class="icon fas fa-user-circle"></i>{{ $author->name }}</span>
                        </a>
                        </span>
                        <!-- Image -->
                        <div class="image-wrapper rounded-top hover-zoom">
                        <img src="{{URL::asset('images/article/'.$article->title_image)}}" alt="Image name" class="image" />
                        </div>
                        <!-- Body -->
                        <div class="card-body rounded-bottom bg-color white">
                        <a href="{{url('article/'.$article->id.'/'.$article->slug)}}">
                            <h3 class="title text-style-11 black">{{$article->title}}</h3>
                        </a>
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
                        <a href="{{url('article/'.$article->id.'/'.$article->slug)}}" class="full-link"></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-4 text-center">
                <!-- Button -->
                <a href="{{url('category/'.$reviewingccCategory->slug)}}" class="link">
                    <button class="button double-edge transparent black-hover">
                        <span class="button-text black white-hover">More</span>
                        <span class="overlay gray-50 magnetic-effect"></span>
                    </button>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Banner backgrounder feature article-->
    <section class="shock-section has-holder pb-2">
        <div class="container max-w-75">
        <!-- Intro -->
        <?php 
        $backgroundersCategory = App\Models\Category::where('slug','backgrounders')->first(); 
        $backgroundersArticles = App\Models\Article::select('id', 'tags', 'category', 'title', 'subtitle', 'slug', 'created_at', 'title_image', 'author_id')->where('category', $backgroundersCategory['id'])->orderBy('created_at', 'desc')->limit(4)->get();
        ?>
        <div class="basic-intro text-center">
            <h1 class="title black">
            <span class="text-1 d-block text-style-2">{{$backgroundersCategory->category}}</span>
            <p class="publicdesc">{{$backgroundersCategory->title}}</p>
            </h1>
        </div>
        </div>
    </section>
    
    

    <!-- Blog -->
    <section class="shock-section pt-2 pb-2 gray-10">
        <div class="container">
            <div class="row g-5" data-display="6" data-columns="2">
                @foreach($backgroundersArticles as $article)
                <div class="col-12 col-md-6 load-more-item-3">
                    <div class="card has-image has-metadata is-horizontal shadow parent">
                        
                        <!-- Label -->
                        <?php 
                            $author_id = unserialize($article->author_id);
                            $author = App\Models\User::where('id',$author_id)->first();
                            $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                        <span class="label-vertical to-bottom-right-out">
                        <span class="label-line gray"></span>
                        <a href="{{url('author/'.$author_meta->slug)}}" class="link">
                            <span class="label-text gray"><i class="icon fas fa-user-circle"></i>{{ $author->name }}</span>
                        </a>
                        </span>
                        <!-- Image -->
                        <div class="image-wrapper hover-scale">
                        <a href="{{url($article->slug)}}">
                            <img src="{{URL::asset('images/article/'.$article->title_image)}}" alt="Image name" class="image" />
                        </a>
                        </div>
                        <!-- Body -->
                        <div class="card-body bg-color white">
                        <a href="{{url($article->slug)}}">
                            <h3 class="title text-style-11 black">{{$article->title}}</h3>
                        </a>
                        <p class="description line-clamp-3">@if($article->subtitle!=null){{ $article->subtitle }}@endif</p>
                        <hr class="gray-25">
                        <!-- Tag Cloud -->
                        <div class="tag-cloud">
                            <a href="#" class="link">                      
                                <span class="badge outline gray-50 primary-hover">
                                    <span class="badge-text gray white-hover"><?=date_format(date_create($article->created_at), "F j, Y")?></span>
                                </span>
                            </a>
                            <a href="{{url('category/'.$backgroundersCategory->slug)}}" class="link">                      
                                <span class="badge outline gray-50 primary-hover">
                                    <span class="badge-text gray white-hover">{{$backgroundersCategory->category}}</span>
                                </span>
                            </a>
                        </div>
                        </div>
                        <!-- Link -->
                        <!-- <a href="{{url($article->slug)}}" class="full-link"></a> -->
                    </div>
                </div>
                @endforeach            
            </div>
            <div class="mt-4 text-center">
                <!-- Button -->
                <a href="{{url('category/'.$backgroundersCategory->slug)}}" class="link">
                    <button class="button shadow black primary-hover button-collision">
                        <span class="button-text white white-hover">More</span>
                    </button>
                </a>                
            </div>
        </div>
    </section>
    
     <section class="shock-section bg-color black pt-5 pb-2">
    <div class="container">
      <div class="horizontal-tab mb-3 scheme-2 tertiary">
        <!-- Tab navigation -->
        <?php 
            $cicmCategory = App\Models\Category::where('slug','cicm')->first();
            $cicmArticles = App\Models\Article::select('id', 'tags', 'category', 'title', 'subtitle', 'slug', 'created_at', 'title_image', 'author_id')->where('category', $cicmCategory['id'])->orderBy('created_at', 'desc')->limit(5)->get();

            $cicmInsightCategory = App\Models\Category::where('slug','cicm-insights')->first();
            $cicmInsightArticles = App\Models\Article::select('id', 'tags', 'category', 'title', 'subtitle', 'slug', 'created_at', 'title_image', 'author_id')->where('category', $cicmInsightCategory['id'])->orderBy('created_at', 'desc')->limit(5)->get();
            // dd($cicmInsightCategory);
        ?>
        <ul id="h-tab" class="nav nav-tabs" role="tablist" aria-orientation="horizontal">
          <li class="nav-item" role="presentation">
            <button id="h-1-tab" class="nav-link active" aria-selected="true" aria-controls="h-1" data-bs-target="#h-1" data-bs-toggle="tab" role="tab">
             {{$cicmCategory->category}}
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button id="h-2-tab" class="nav-link" aria-selected="false" aria-controls="h-2" data-bs-target="#h-2" data-bs-toggle="tab" role="tab">
              {{$cicmInsightCategory->category}}
            </button>
          </li>
          
        </ul>
        <!-- Tab content -->
        <div class="tab-content">
          <div id="h-1" class="tab-pane fade show active" role="tabpanel">
              <p style="text-align:center; color:#fff;" class="pb-2 publicdesc">{{$cicmCategory->title}}</p>
            <!-- Posts -->
            <div class="swiper slider stretched has-gap has-navigation has-pagination scheme-2 tertiary" data-columns="3,2,1,1">
              <div class="swiper-wrapper">
                @foreach($cicmArticles as $article)
                <div class="swiper-slide">
                  <div class="card has-full-image vh-65 small-shadow rounded parent">
                    <!-- Image -->
                    <div class="image-wrapper hover-up-down">
                      <img src="{{URL::asset('images/article/'.$article->title_image)}}" alt="Image name" class="image" />
                    </div>
                    <!-- Body -->
                    <div class="card-body align-v-bottom">
                      <div class="holder">
                        <a href="{{url('category/'.$cicmCategory->slug)}}" class="link">                      
                          <span class="badge tertiary-50 tertiary-hover">
                            <span class="badge-text white-75 white-hover">{{$cicmCategory->category}}</span>
                          </span>
                        </a>
                        <a href="{{url('article/'.$article->id.'/'.$article->slug)}}">
                            <h3 class="title text-style-9 white">{{$article->title}}</h3>
                        </a>
                        <hr class="gray-25">
                        <!-- Metadata -->
                        <?php 
                        $author_id = unserialize($article->author_id);
                        $author = App\Models\User::where('id',$author_id)->first();
                        $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                        <div class="card-metadata">
                          <div class="item">
                            <a href="{{url('author/'.$author_meta->slug)}}" class="link gray tertiary-hover"><i class="fa-solid fa-user icon"></i>{{ $author->name }}</a>
                          </div>
                          <div class="item">
                            <a href="#" class="link gray tertiary-hover"><i class="fa-solid fa-calendar-days icon"></i><?=date_format(date_create($article->created_at), "F j, Y")?></a>
                          </div>
                        </div>
                      </div>
                      <!-- Overlay -->
                      <div class="overlay black"></div>
                      <!-- Link -->
                      <!-- <a href="#your-link" class="full-link"></a> -->
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div id="h-2" class="tab-pane fade" role="tabpanel">
                <p style="text-align:center; color:#fff;" class="pb-2 publicdesc">{{$cicmInsightCategory->title}}</p>
            <!-- Posts -->
            <div class="swiper slider stretched has-gap has-navigation has-pagination scheme-2 tertiary" data-columns="3,2,1,1">
              <div class="swiper-wrapper">
                @foreach($cicmInsightArticles as $article)
                <div class="swiper-slide">
                  <div class="card has-full-image vh-65 small-shadow rounded parent">
                    <!-- Image -->
                    <div class="image-wrapper hover-up-down">
                        <img src="{{URL::asset('images/article/'.$article->title_image)}}" alt="Image name" class="image" />
                    </div>
                    <!-- Body -->
                    <div class="card-body align-v-bottom">
                      <div class="holder">
                        <a href="{{url('category/'.$cicmInsightCategory->slug)}}" class="link">
                          <span class="badge tertiary-50 tertiary-hover">
                            <span class="badge-text white-75 white-hover">{{$cicmInsightCategory->category}}</span>
                          </span>
                        </a>
                        <a href="{{url('article/'.$article->id.'/'.$article->slug)}}">
                            <h3 class="title text-style-9 white">{{$article->title}}</h3>
                        </a>
                        <hr class="gray-25">
                        <!-- Metadata -->
                        <?php 
                        $author_id = unserialize($article->author_id);
                        $author = App\Models\User::where('id',$author_id)->first();
                        $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                        <div class="card-metadata">
                          <div class="item">
                            <a href="{{url('author/'.$author_meta->slug)}}" class="link gray tertiary-hover"><i class="fa-solid fa-user icon"></i>{{ $author->name }}</a>
                          </div>
                          <div class="item">
                            <a href="#" class="link gray tertiary-hover"><i class="fa-solid fa-calendar-days icon"></i><?=date_format(date_create($article->created_at), "F j, Y")?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Overlay -->
                    <div class="overlay black"></div>
                    <!-- Link -->
                    <!-- <a href="#your-link" class="full-link"></a> -->
                  </div>
                </div>
                @endforeach
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

    <!-- Featured -->
    <section class="shock-section has-holder pb-4 gray-10">
      <div class="container">
        <!-- Posts -->
        <div class="row g-0">
          <div class="col-12 col-md-12">
            <!-- Intro -->
            <?php 
                $issueCategory = App\Models\Category::where('slug','issue-brief')->first(); 
                $issueArticles = App\Models\Article::select('id', 'tags', 'category', 'title', 'subtitle', 'slug', 'created_at', 'title_image', 'author_id')->where('category', $issueCategory['id'])->orderBy('created_at', 'desc')->limit(3)->get();
                // dd($issueArticles);
                ?>
            <div class="basic-intro text-center mb-35">
              <h1 class="title black">
                <span class="text-1 d-block text-style-2">{{$issueCategory->category}}</span>
                <p class="publicdesc">{{$issueCategory->title}}</p>
              </h1>
            </div>
          </div>
          <div class="col-12 col-lg-7">
            <div class="card has-full-image is-featured-left small-shadow rounded parent">
             
              <!-- Image -->
              <div class="image-wrapper hover-up-down">
                <img src="{{URL::asset('images/article/'.$issueArticles[0]->title_image)}}" alt="Image name" class="image" />
              </div>
              <!-- Body -->
              <div class="card-body align-v-bottom">
                <div class="holder">
                  <a href="{{url('category/'.$issueCategory->slug)}}" class="link">                      
                    <span class="badge primary-50 primary-hover">
                      <span class="badge-text white white-hover">{{$issueCategory->category}}</span>
                    </span>
                  </a>
                    <a href="{{url('article/'.$issueArticles[0]->id.'/'.$issueArticles[0]->slug)}}">
                      <h3 class="title text-style-9 white">{{ $issueArticles[0]->title }}</h3>
                    </a>
                  <hr class="gray-25">
                  <!-- Metadata -->
                  <?php 
                    $author_id = unserialize($issueArticles[0]->author_id);
                    $author = App\Models\User::where('id',$author_id)->first();
                    $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();?>
                  <div class="card-metadata">
                    <div class="item">
                     <a href="{{url('author/'.$author_meta->slug)}}" class="link gray primary-hover"><i class="fa-solid fa-user icon"></i>{{ $author->name }}</a>
                    </div>
                    <div class="item">
                      <a href="#" class="link gray primary-hover"><i class="fa-solid fa-calendar-days icon"></i><?=date_format(date_create($issueArticles[0]->created_at), "F j, Y")?></a>
                    </div>
                    
                  </div>
                </div>
                <!-- Overlay -->
                <div class="overlay black"></div>
                <!-- Link -->
                <!-- <a href="#your-link" class="full-link"></a> -->
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-5">
            <div class="card has-full-image is-featured-right small-shadow rounded parent">
              <!-- Image -->
              <div class="image-wrapper hover-up-down">
                <img src="{{URL::asset('images/article/'.$issueArticles[1]->title_image)}}" alt="Image name" class="image" />
              </div>
              <!-- Body -->
              <div class="card-body align-v-bottom">
                <div class="holder">
                  <a href="{{url('category/'.$issueCategory->slug)}}" class="link">
                    <span class="badge primary-50 primary-hover">
                      <span class="badge-text white white-hover">{{$issueCategory->category}}</span>
                    </span>
                  </a>
                    <a href="{{url('article/'.$issueArticles[1]->id.'/'.$issueArticles[1]->slug)}}">
                         <h3 class="title text-style-9 white">{{ $issueArticles[1]->title }}</h3>
                    </a>
                  <hr class="gray-25">
                  <!-- Metadata -->
                  <?php 
                    $author_id_sec = unserialize($issueArticles[1]->author_id);
                    $author_sec = App\Models\User::where('id',$author_id_sec)->first();
                    $author_sec_meta = App\Models\UserMeta::where('user_id', $author_sec->id)->first();?>
                  <div class="card-metadata">
                    <div class="item">
                      <a href="{{url('author/'.$author_sec_meta->slug)}}" class="link gray primary-hover">
                        <i class="fa-solid fa-user icon"></i>{{ $author_sec->name }}</a>
                    </div>
                    <div class="item">
                      <a href="" class="link gray primary-hover"><i class="fa-solid fa-calendar-days icon"></i><?=date_format(date_create($issueArticles[1]->created_at), "F j, Y")?></a>
                    </div>
                  </div>
                </div>
                <!-- Overlay -->
                <div class="overlay black"></div>
                <!-- Link -->
                <!-- <a href="#your-link" class="full-link"></a> -->
              </div>
            </div>
            <div class="card has-full-image is-featured-right small-shadow rounded parent">
              <!-- Image -->
              <div class="image-wrapper hover-up-down">
                <img src="{{URL::asset('images/article/'.$issueArticles[2]->title_image)}}" alt="Image name" class="image" />
              </div>
              <!-- Body -->
              <div class="card-body align-v-bottom">
                <div class="holder">
                  <a href="{{url('category/'.$issueCategory->slug)}}" class="link">
                    <span class="badge primary-50 primary-hover">
                      <span class="badge-text white white-hover">{{$issueCategory->category}}</span>
                    </span>
                  </a>
                   <a href="{{url('article/'.$issueArticles[2]->id.'/'.$issueArticles[2]->slug)}}">
                         <h3 class="title text-style-9 white">{{ $issueArticles[2]->title }}</h3>
                    </a>
                  <hr class="gray-25">
                  <!-- Metadata -->
                  <?php 
                    $author_id_thrd = unserialize($issueArticles[1]->author_id);
                    $author_thrd = App\Models\User::where('id',$author_id_thrd)->first();
                    $author_thrd_meta = App\Models\UserMeta::where('user_id', $author_thrd->id)->first();?>
                  <div class="card-metadata">
                    <div class="item">
                        <a href="{{url('author/'.$author_thrd_meta->slug)}}" class="link gray primary-hover">
                        <i class="fa-solid fa-user icon"></i>{{ $author_thrd->name }}</a>
                    </div>
                    <div class="item">
                      <a href="#" class="link gray primary-hover"><i class="fa-solid fa-calendar-days icon"></i><?=date_format(date_create($issueArticles[2]->created_at), "F j, Y")?></a>
                    </div>
                  </div>
                </div>
                <!-- Overlay -->
                <div class="overlay black"></div>
                <!-- Link -->
                <!-- <a href="#your-link" class="full-link"></a> -->
              </div>
            </div>
          </div>
         

          
          

          
        </div>
        <div class="mt-4 text-center">
              <!-- Button -->
              <a href="{{url('category/'.$issueCategory->slug)}}" class="link">
                  <button class="button border-gradient scheme-1">
                  <span class="button-text">More</span>
                  </button>
              </a>
            </div>
      </div>
    </section>
@endsection 