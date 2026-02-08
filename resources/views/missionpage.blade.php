      @extends('web')
      @section('title', 'ORCA | Organisation for Research on China and Asia')
      @section('meta_keywords', 'ORCA')
      @section('meta_description', 'ORCA')

      @section('content')

          <!-- Banner -->
          <section class="shock-section bg-image bg-fixed position-x-left"
              data-bg-image="{{ URL::asset('images/jpg/AdobeStock_90152948.jpeg') }}">
              <div class="container">
                  <div class="holder vh-100 align-h-right align-v-center">
                      <!-- Intro -->
                      <div class="side-intro max-w-50">
                          <h2 class="title">
                              <span class="text-1 text-style-1 scheme-2 white">ORCA’s</span>
                              <span class="text-2 text-style-2 text-italic  scheme-2">Mission</span>
                          </h2>

                      </div>
                  </div>
              </div>
          </section>

          <!-- Card outline -->
          <section class="shock-section pt-5 pb-5" data-bg-color="#16161b">
              <div class="container">
                  <div class="horizontal-tab mb-3 scheme-2 tertiary" data-aos="fade-up">
                      <!-- Tab navigation -->
                      <ul id="h-tab" class="nav nav-tabs" role="tablist" aria-orientation="horizontal">
                          <li class="nav-item" role="presentation">
                              <button id="h-1-tab" class="nav-link active" aria-selected="true" aria-controls="h-1"
                                  data-bs-target="#h-1" data-bs-toggle="tab" role="tab">
                                  Our Mission
                              </button>
                          </li>

                      </ul>
                      <!-- Tab content -->
                      <div class="tab-content">
                          <div id="h-1" class="tab-pane fade show active" role="tabpanel">
                              <div class="max-w-75 mx-auto text-style-12 text-center">

                              </div>
                          </div>

                      </div>
                  </div>
                  <div class="row g-2">
                      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                          <div class="card has-icon parent">
                              <div class="card-body">
                                  <i class="fas fa-3x fa-users-cog" style="color: #fff;"></i>

                                  <h3 class="title text-style-11 white">To build</h3>
                                  <p class="description">Knowledge, interest and understanding across sectors, professionals
                                      and laypeople regarding China’s innate perceptions of —and responses to—Asia and
                                      especially India</p>
                                  <!-- Button -->
                                  <div class="button-wrapper align-h-right">

                                  </div>
                              </div>
                              <!-- Link -->
                              <a href="#your-link" class="full-link">
                                  <div class="overlay secondary-25 magnetic-effect"></div>
                              </a>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                          <div class="card has-icon parent">
                              <div class="card-body">
                                  <i class="fas fa-3x fa-chart-line" style="color: #fff;"></i>
                                  <h3 class="title text-style-11 white">To assess</h3>
                                  <p class="description">Data/resources that narrate the daily ‘chatter’ of China’s domestic
                                      circles on happenings both within China and involving China beyond its own borders.
                                  </p>
                                  <!-- Button -->
                                  <div class="button-wrapper align-h-right">

                                  </div>
                              </div>
                              <!-- Link -->
                              <a href="#your-link" class="full-link">
                                  <div class="overlay secondary-25 magnetic-effect"></div>
                              </a>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                          <div class="card has-icon parent">
                              <div class="card-body">
                                  <i class="fas fa-3x fa-link" style="color: #fff;"></i>
                                  <h3 class="title text-style-11 white">To link</h3>
                                  <p class="description">Data with the broader political, diplomatic, cultural, economic and
                                      social developments taking place and their impact on India’s national security,
                                      regional power, and India-China ties. </p>
                                  <!-- Button -->
                                  <div class="button-wrapper align-h-right">

                                  </div>
                              </div>
                              <!-- Link -->
                              <a href="#your-link" class="full-link">
                                  <div class="overlay secondary-25 magnetic-effect"></div>
                              </a>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                          <div class="card has-icon parent">
                              <div class="card-body">
                                  <i class="fas fa-3x fa-user-shield" style="color: #fff;"></i>
                                  <h3 class="title text-style-11 white">To ensure</h3>
                                  <p class="description">The venture emerges as a go-to resource tool for policymakers,
                                      scholars, students and enthusiasts alike.</p>
                                  <!-- Button -->
                                  <div class="button-wrapper align-h-right">

                                  </div>
                              </div>
                              <!-- Link -->
                              <a href="#your-link" class="full-link">
                                  <div class="overlay secondary-25 magnetic-effect"></div>
                              </a>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                          <div class="card has-icon parent">
                              <div class="card-body">
                                  <i class="fas fa-3x fa-cogs" style="color: #fff;"></i>
                                  <h3 class="title text-style-11 white">To implement</h3>
                                  <p class="description">Research and data from social media ‘chatter’ in China to dedicated
                                      subsections focused on India and its concerns</p>
                                  <!-- Button -->
                                  <div class="button-wrapper align-h-right">

                                  </div>
                              </div>
                              <!-- Link -->
                              <a href="#your-link" class="full-link">
                                  <div class="overlay secondary-25 magnetic-effect"></div>
                              </a>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                          <div class="card has-icon parent">
                              <div class="card-body">
                                  <i class="fas fa-3x fa-laptop" style="color: #fff;"></i>
                                  <h3 class="title text-style-11 white">To publish</h3>
                                  <p class="description">Daily newsletters, monthly reports and frequent publications that
                                      are dedicated to deciphering broader strategic chatter and data</p>
                                  <!-- Button -->
                                  <div class="button-wrapper align-h-right">

                                  </div>
                              </div>
                              <!-- Link -->
                              <a href="#your-link" class="full-link">
                                  <div class="overlay secondary-25 magnetic-effect"></div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          </main>

          </main>

      @endsection
