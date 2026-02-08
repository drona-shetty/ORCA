      @extends('web')
      @section('title', 'ORCA | Organisation for Research on China and Asia')
      @section('meta_keywords', 'ORCA')
      @section('meta_description', 'ORCA')

      @section('content')

          <style>
              .shock-header .navbar .navbar-nav .nav-link {
                  color: black !important;
              }

              .black {
                  color: #000 !important;
              }

              .imageheighter {
                  min-height: 13rem;
                  max-height: 13rem;
              }
          </style>

          <!-- Images -->
          <section class="shock-section has-holder pt-4">
              <div class="container max-w-85">
                  <!-- Intro -->
                  <div class="basic-intro text-center mb-5">
                      <h1 class="title black">
                          <span class="text-1 text-style-5">INFOGRAPHICS</span><br>
                          <span class="text-style-12">We present visualisations of quantitative data to track the rise of
                              China and make assessments according to our findings.</span>

                      </h1>
                  </div>

              </div>
          </section>

          <!-- Light -->
          <section class="shock-section has-holder pt-6 pb-6 bg-color gray-10">
              <div class="container">

                  <div class="row g-4">

                      <?php $latest_articles = App\Models\Article::select('id', 'author_id', 'category', 'read_time', 'title', 'slug', 'subtitle', 'title_image', 'created_at')
                          ->whereIn('category', ['35'])
                          ->where('status', 'approved')
                          ->orderBy('created_at', 'desc')
                          ->limit(100)
                          ->get();
                      ?>
                      @foreach ($latest_articles as $article)
                          <?php $category = App\Models\Category::where('id', $article->category)->first();
                          $author_id = unserialize($article->author_id);
                          $author = App\Models\User::where('id', $author_id)->first();
                          ?>
                          <div class="col-12 col-md-6 col-lg-4">
                              <div class="card has-image shadow parent">
                                  <!-- Image -->
                                  <div class="image-wrapper imageheighter hover-zoom">
                                      <img src="{{ URL::asset('images/article/' . $article->title_image) }}" alt="Image name"
                                          class="image" />
                                  </div>
                                  <!-- Body -->
                                  <div class="card-body bg-color white">

                                      <span class="badge outline primary primary-hover">
                                          <span class="badge-text black-75 white-hover">{{ $category->category }}</span>
                                      </span>

                                      <h3 class="title mt-1 text-style-11 black">{{ $article->title }}</h3>
                                      <p class="description black line-clamp-3">{{ $article->subtitle }}</p>
                                      <!-- Button -->

                                  </div>
                                  <!-- Link -->
                                  <a href="{{ url('infographics/' . $article->slug) }}" class="full-link"></a>
                              </div>
                          </div>
                      @endforeach

                      <!-- <div class="mt-4 text-center">
               
                  <button id="load-more" class="button shadow black primary-hover button-collision">
                    <span class="button-text white white-hover">Load more</span>
                    <i class="fa-solid fa-arrow-rotate-right button-icon white white-hover"></i>
                  </button>
                </div> -->

                  </div>
              </div>
          </section>

          <!-----timeline exit -->
          </main>

      @endsection
