      @extends('web')
      @section('title', 'ORCA | Organisation for Research on China and Asia')
      @section('meta_keywords', 'ORCA')
      @section('meta_description', 'ORCA')

      @section('content')

          <style>
              .shock-header .navbar .navbar-nav .nav-link {
                  color: black !important;
              }

              .modal-dialog {
                  max-width: 75%;
                  margin-right: auto;
                  margin-left: auto;
              }
          </style>

          <!-- Portfolio scrolling -->
          <section class="shock-section has-holder pt-5 pb-5">
              <div class="container">
                  <!-- Intro -->
                  <div class="extended-intro max-w-65">
                      <h1 class="title text-style-1 text-offset">
                          <span class="text-1 filled primary-50" data-lax="inertia-top">Team ORCA</span>
                          <span class="text-1 outline black">Team ORCA</span>
                      </h1>
                      <!-- <span class="text-2 text-style-4 fw-400 text-outline text-italic black">Team<mark
                  class="animated-underline primary-50">Members</mark></span> -->
                  </div>
                  <!-- Portfolio -->
                  <div class="gallery stretched has-gap scrolling-grid">
                      <div class="bricklayer" data-columns="4">

                          <div class="card">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-eerishika"
                                  class="item hover-zoom">
                                  <div class="image-wrapper small-shadow rounded-top">
                                      <img src="{{ URL::asset('images/team/Eerishika-Formal-Pic-490x560.jpg') }}"
                                          class="image" alt="Eerishika Pankaj" />

                                  </div>
                              </a>
                              <div class="small-shadow rounded-bottom cardcontainer">
                                  <h4><b>Eerishika Pankaj</b></h4>
                                  <p class="mgtneg-15">Head of Research & Operations Director</p>
                                  <div class="mt-social-1">
                                      <a class="link primary-hover" href="https://twitter.com/eerishika"><i
                                              class="icon fab fab fa-twitter"></i></a>
                                      <a class="link primary-hover"
                                          href="https://www.linkedin.com/in/eerishika-pankaj-17507914b/"><i
                                              class="icon fab fa-linkedin-in"></i></a>

                                  </div>
                              </div>
                          </div>

                          <div class="card">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-rahul"
                                  class="item hover-zoom">
                                  <div class="image-wrapper small-shadow rounded-top">
                                      <img src="{{ URL::asset('images/team/Screenshot-2022-04-11-at-1.31.14-PM-490x560.png') }}"
                                          class="image" alt="Rahul Karan Reddy" />

                                  </div>
                              </a>
                              <div class="small-shadow rounded-bottom cardcontainer">
                                  <h4><b>Rahul Karan Reddy</b></h4>
                                  <p class="mgtneg-15">Senior Research Associate</p>
                                  <div class="mt-social-1">
                                      <a class="link primary-hover" href="https://twitter.com/RahulKaranRedd1"><i
                                              class="icon fab fab fa-twitter"></i></a>
                                      <a class="link primary-hover" href="https://www.linkedin.com/in/rahulkaranreddy"><i
                                              class="icon fab fa-linkedin-in"></i></a>

                                  </div>
                              </div>
                          </div>

                          <div class="card">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-ahana"
                                  class="item hover-zoom">
                                  <div class="image-wrapper small-shadow rounded-top">
                                      <img src="{{ URL::asset('images/team/1-490x560.png') }}" class="image"
                                          alt="Ahana Roy" />

                                  </div>
                              </a>
                              <div class="small-shadow rounded-bottom cardcontainer">
                                  <h4><b>Ahana Roy</b></h4>
                                  <p class="mgtneg-15">Research Associate and Chief Operations Officer</p>
                                  <div class="mt-social-1">
                                      <a class="link  primary-hover" href="https://twitter.com/ahanaworks"><i
                                              class="icon fab fab fa-twitter"></i></a>
                                      <a class="link  primary-hover" href="http://linkedin.com/in/royahana/"><i
                                              class="icon fab fa-linkedin-in"></i></a>

                                  </div>
                              </div>
                          </div>

                          <div class="card">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-omkar"
                                  class="item hover-zoom">
                                  <div class="image-wrapper small-shadow rounded-top">
                                      <img src="{{ URL::asset('images/team/WhatsApp-Image-2022-09-06-at-9.23.38-AM-894x1024.jpeg') }}"
                                          class="image" alt="Omkar Bhole" />

                                  </div>
                              </a>
                              <div class="small-shadow rounded-bottom cardcontainer">
                                  <h4><b>Omkar Bhole</b></h4>
                                  <p class="mgtneg-15">Research Associate</p>
                                  <div class="mt-social-1">
                                      <a class="link  primary-hover" href="https://twitter.com/bhole_omkar"><i
                                              class="icon fab fab fa-twitter"></i></a>
                                      <a class="link  primary-hover"
                                          href="https://www.linkedin.com/in/omkar-bhole-065067153/"><i
                                              class="icon fab fa-linkedin-in"></i></a>

                                  </div>
                              </div>
                          </div>

                          <div class="card">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-ratish"
                                  class="item hover-zoom">
                                  <div class="image-wrapper small-shadow rounded-top">
                                      <img src="{{ URL::asset('images/team/WhatsApp-Image-2022-11-03-at-12.28.32-490x560.jpeg') }}"
                                          class="image" alt="Ratish Mehta" />

                                  </div>
                              </a>
                              <div class="small-shadow rounded-bottom cardcontainer">
                                  <h4><b>Ratish Mehta</b></h4>
                                  <p class="mgtneg-15">Research Associate</p>
                                  <div class="mt-social-1">
                                      <a class="link  primary-hover" href="https://twitter.com/ratish_mehta"><i
                                              class="icon fab fab fa-twitter"></i></a>
                                      <a class="link  primary-hover"
                                          href="https://www.linkedin.com/in/ratish-mehta-7172271ab/"><i
                                              class="icon fab fa-linkedin-in"></i></a>

                                  </div>
                              </div>
                          </div>

                          <div class="card">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-goki"
                                  class="item hover-zoom">
                                  <div class="image-wrapper small-shadow rounded-top">
                                      <img src="{{ URL::asset('images/team/20210908_124307-490x560.jpg') }}"
                                          class="image" alt="Gokireddy Hima Bindu" />

                                  </div>
                              </a>
                              <div class="small-shadow rounded-bottom cardcontainerred">
                                  <h4><b>Gokireddy Hima Bindu</b></h4>
                                  <p class="mgtneg-15black">Research Intern</p>
                                  <div class="mt-social-1">
                                      <a class="link  primary-hover" href="https://twitter.com/bindubliss"><i
                                              class="icon fab fab fa-twitter"></i></a>
                                      <a class="link  primary-hover"
                                          href="https://www.linkedin.com/in/hima-bindu-gokireddy-a33b59115"><i
                                              class="icon fab fa-linkedin-in"></i></a>

                                  </div>
                              </div>
                          </div>

                          <div class="card">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-shinde"
                                  class="item hover-zoom">
                                  <div class="image-wrapper small-shadow rounded-top">
                                      <img src="{{ URL::asset('images/team/Shinde_headshot.jpeg') }}" class="image"
                                          alt="Dhananjay Shinde" />

                                  </div>
                              </a>
                              <div class="small-shadow rounded-bottom cardcontainerred">
                                  <h4><b>Dhananjay Shinde</b></h4>
                                  <p class="mgtneg-15black">Research Intern</p>
                                  <div class="mt-social-1">
                                      <a class="link  primary-hover"
                                          href="http://www.linkedin.com/in/dhananjay-shinde-0185b4224"><i
                                              class="icon fab fa-linkedin-in"></i></a>
                                      <a class="link  primary-hover" href="#"><i
                                              class="icon fab fab fa-twitter"></i></a>

                                  </div>
                              </div>
                          </div>

                          <div class="card">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-bhuvesha"
                                  class="item hover-zoom">
                                  <div class="image-wrapper small-shadow rounded-top">
                                      <img src="{{ URL::asset('images/team/WhatsApp-Image-2023-04-18-at-13.14.51-490x560.jpeg') }}"
                                          class="image" alt="B. K. Bhuvesha" />

                                  </div>
                              </a>
                              <div class="small-shadow rounded-bottom cardcontainerred">
                                  <h4><b>B. K. Bhuvesha</b></h4>
                                  <p class="mgtneg-15black">Research Intern</p>
                                  <div class="mt-social-1">
                                      <a class="link  primary-hover"
                                          href="https://www.linkedin.com/in/bhuvesha-bhaskaran-315751246"><i
                                              class="icon fab fa-linkedin-in"></i></a>
                                      <a class="link  primary-hover"
                                          href="https://twitter.com/BhuveshaB84833?t=wDJCbdIcBYRqosKk7y0JLQ&s=08"><i
                                              class="icon fab fab fa-twitter"></i></a>

                                  </div>
                              </div>
                          </div>

                          <div class="card">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-bhaavya"
                                  class="item hover-zoom">
                                  <div class="image-wrapper small-shadow rounded-top">
                                      <img src="{{ URL::asset('images/team/WhatsApp-Image-2023-03-15-at-10.58.35-PM-490x414.jpeg') }}"
                                          class="image" alt="Bhaavya Gupta" />

                                  </div>
                              </a>
                              <div class="small-shadow rounded-bottom cardcontainerred">
                                  <h4><b>Bhaavya Gupta</b></h4>
                                  <p class="mgtneg-15black">Research Intern</p>
                                  <div class="mt-social-1">
                                      <a class="link  primary-hover"
                                          href="http://www.linkedin.com/in/bhaavya-gupta-585330227"><i
                                              class="icon fab fa-linkedin-in"></i></a>
                                      <a class="link  primary-hover" href="https://twitter.com/bhaavya934"><i
                                              class="icon fab fab fa-twitter"></i></a>

                                  </div>
                              </div>
                          </div>

                          <div class="card">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-nisarg"
                                  class="item hover-zoom">
                                  <div class="image-wrapper small-shadow rounded-top">
                                      <img src="{{ URL::asset('images/team/WhatsApp-Image-2023-04-03-at-11.33.41-490x560.jpeg') }}"
                                          class="image" alt="Nisarg Jani" />

                                  </div>
                              </a>
                              <div class="small-shadow rounded-bottom cardcontainerred">
                                  <h4><b>Nisarg Jani</b></h4>
                                  <p class="mgtneg-15black">Research Intern</p>
                                  <div class="mt-social-1">
                                      <a class="link  primary-hover" href="https://www.linkedin.com/in/nisarg-jani/"><i
                                              class="icon fab fa-linkedin-in"></i></a>
                                      <a class="link  primary-hover"
                                          href="https://twitter.com/Nisarg61686629?t=d-P4OV-HUxpqakVpBQDGEQ&s=09"><i
                                              class="icon fab fab fa-twitter"></i></a>

                                  </div>
                              </div>
                          </div>

                          <div class="card">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#modal-debendra"
                                  class="item hover-zoom">
                                  <div class="image-wrapper small-shadow rounded-top">
                                      <img src="{{ URL::asset('images/team/WhatsApp-Image-2023-04-18-at-13.56.06.jpeg') }}"
                                          class="image" alt="Debendra Sanyal" />

                                  </div>
                              </a>
                              <div class="small-shadow rounded-bottom cardcontainerred">
                                  <h4><b>Debendra Sanyal</b></h4>
                                  <p class="mgtneg-15black">Research Intern</p>
                                  <div class="mt-social-1">
                                      <a class="link  primary-hover"
                                          href="https://www.linkedin.com/in/debendra-sanyal-7865891b0"><i
                                              class="icon fab fa-linkedin-in"></i></a>
                                      <a class="link  primary-hover"
                                          href="https://twitter.com/DebendraSanyal8?t=oOS_DnDLl3NGWJlCmlbgNA&s=09"><i
                                              class="icon fab fab fa-twitter"></i></a>

                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </section>

          <!-- Vertical Lines -->
          <div class="vertical-lines scheme-1 primary">
              <div class="container">
                  <div class="row">
                      <div class="col-12 col-md-6 col-lg-3 align-h-center">
                          <span class="line"></span>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 align-h-center">
                          <span class="line"></span>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 align-h-center">
                          <span class="line"></span>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 align-h-center">
                          <span class="line"></span>
                      </div>
                  </div>
              </div>
          </div>

          <!-- pop up modal -->

          <!-- Modal eerishika -->
          <div id="modal-eerishika" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">Eerishika</span>
                                                  <span class="text-2 text-style-6">Pankaj</span>
                                              </h2>
                                              <p>Head of Research & Operations Director</p>
                                              <a class="link gray primary-hover" href="https://twitter.com/eerishika"><i
                                                      class="icon fa-2x fab fab fa-twitter"></i></a>
                                              <a class="link gray primary-hover"
                                                  href="https://www.linkedin.com/in/eerishika-pankaj-17507914b/"><i
                                                      class="icon fa-2x fab fa-linkedin-in"></i></a>
                                              <div class="description gray">
                                                  <p>Eerishika Pankaj is the Director of New Delhi based think-tank, the
                                                      Organisation for Research
                                                      on China and Asia (ORCA), which focuses on decoding domestic Chinese
                                                      politics and its impact
                                                      on Beijing’s foreign policymaking. She is also an Editorial and
                                                      Research Assistant to the
                                                      Series Editor for Routledge Series on Think Asia; a Young Leader in
                                                      the 2020 cohort of the
                                                      Pacific Forum’s Young Leaders Program; a Commissioning Editor with
                                                      E-International Relations
                                                      for their Political Economy section; a Member of the Indo-Pacific
                                                      Circle and a Council Member
                                                      of the WICCI’s India-EU Business Council. Primarily a China and East
                                                      Asia scholar, her
                                                      research focuses on Chinese elite/party politics, the India-China
                                                      border, water and power
                                                      politics in the Himalayas, Tibet, the Indo-Pacific and India’s
                                                      bilateral ties with Europe and
                                                      Asia.</p>
                                              </div>
                                          </div>
                                          <div class="mt-social-1 mt-1">

                                              <a href="{{ URL::asset('/author/eerishika-pankaj') }}"
                                                  class="button mt-1 outline rounded primary primary-hover hover-up">

                                                  <span class="button-text primary white-hover">View Publications</span>

                                              </a>

                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/Eerishika-Formal-Pic-490x560.jpg') }}"
                                              class="image" alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>

                  </div>
              </div>

          </div>
          <!--pop up modal close-->

          <!-- Modal RAHUL KARAN REDDY -->
          <div id="modal-rahul" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">Rahul Karan</span>
                                                  <span class="text-2 text-style-6">Reddy</span>
                                              </h2>
                                              <p>Senior Research Associate</p>
                                              <a class="link gray primary-hover"
                                                  href="https://twitter.com/RahulKaranRedd1"><i
                                                      class="icon fab fab fa-twitter"></i></a>
                                              <a class="link gray primary-hover"
                                                  href="https://www.linkedin.com/in/rahulkaranreddy"><i
                                                      class="icon fab fa-linkedin-in"></i></a>
                                              <div class="description gray">
                                                  <p>Rahul Karan Reddy is an international relations analyst with a Masters
                                                      degree from O.P
                                                      Jindal Global University in Diplomacy, Law and Business. He is the
                                                      author of ‘Islands on
                                                      the Rocks’, a monograph detailing the Senkaku/Diaoyu island dispute
                                                      between China and
                                                      Japan. His research focus is China and East Asia. He was a research
                                                      analyst at the Chennai
                                                      Center for China Studies (C3S) and an intern at the Institute for
                                                      Peace and Conflict
                                                      Studies (IPCS), writing articles and reports on China’s foreign policy
                                                      and domestic
                                                      politics. His blog, Asian Drama, follows the rise of India and China
                                                      as they navigate the
                                                      Asian Century.</p>
                                              </div>
                                          </div>
                                          <div class="mt-social-1 mt-1">

                                              <a href="{{ URL::asset('/author/rahul-karan-reddy') }}"
                                                  class="button mt-1 outline rounded primary primary-hover hover-up">

                                                  <span class="button-text primary white-hover">View Publications</span>

                                              </a>

                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/Screenshot-2022-04-11-at-1.31.14-PM-490x560.png') }}"
                                              class="image" alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>

                  </div>
              </div>

          </div>
          <!--pop up modal close-->

          <!-- Modal ahana -->
          <div id="modal-ahana" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">Ahana</span>
                                                  <span class="text-2 text-style-6">Roy</span>
                                              </h2>
                                              <p>Research Associate and Chief Operations Officer</p>
                                              <a class="link gray primary-hover" href="https://twitter.com/ahanaworks"><i
                                                      class="icon fab fab fa-twitter"></i></a>
                                              <a class="link gray primary-hover"
                                                  href="http://linkedin.com/in/royahana/"><i
                                                      class="icon fab fa-linkedin-in"></i></a>
                                              <div class="description gray">
                                                  <p>Ahana Roy is a Research Associate and Chief Operations Officer at
                                                      Organisation for Research on China and Asia (ORCA). She is a
                                                      postgraduate in Political Science with International Relations from
                                                      Jadavpur University. Her areas of interest include security studies,
                                                      international relations and geopolitics. She can be reached on Twitter
                                                      @ahanaworks</p>
                                              </div>
                                          </div>
                                          <div class="mt-social-1 mt-1">

                                              <a href="{{ URL::asset('/author/ahana-roy') }}"
                                                  class="button mt-1 outline rounded primary primary-hover hover-up">

                                                  <span class="button-text primary white-hover">View Publications</span>

                                              </a>

                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/1-490x560.png') }}" class="image"
                                              alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

          </div>
          <!--pop up modal close-->

          <!-- Modal omkar -->
          <div id="modal-ahana" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">Omkar</span>
                                                  <span class="text-2 text-style-6">Bhole</span>
                                              </h2>
                                              <p>Research Associate</p>
                                              <a class="link gray primary-hover" href="https://twitter.com/bhole_omkar"><i
                                                      class="icon fab fab fa-twitter"></i></a>
                                              <a class="link gray primary-hover"
                                                  href="https://www.linkedin.com/in/omkar-bhole-065067153/"><i
                                                      class="icon fab fa-linkedin-in"></i></a>
                                              <div class="description gray">
                                                  <p>Omkar Bhole is a Research Associate at Organization for Research on
                                                      China and Asia (ORCA). He is a Chinese language student and completed
                                                      Masters in China Studies from Somaiya University, Mumbai. He has
                                                      completed the HSK 4 level of Chinese language proficiency and works as
                                                      a Chinese language instructor. His research interests are China’s
                                                      foreign policy in Asia, China’s economic transformation and China’s
                                                      domestic politics. He has previously done an internship at the
                                                      Institute of Chinese Studies (ICS). He has also presented a paper at
                                                      the 1st All India Conference of East Asian Studies. He can be reached
                                                      @bhole_omkar on Twitter</p>
                                              </div>
                                          </div>
                                          <div class="mt-social-1 mt-1">

                                              <a href="{{ URL::asset('/author/omkar-bhole') }}"
                                                  class="button mt-1 outline rounded primary primary-hover hover-up">

                                                  <span class="button-text primary white-hover">View Publications</span>

                                              </a>

                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/WhatsApp-Image-2022-09-06-at-9.23.38-AM-894x1024.jpeg') }}"
                                              class="image" alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

          </div>
          <!--pop up modal close-->

          <!-- Modal shinde -->
          <div id="modal-shinde" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">Dhananjay</span>
                                                  <span class="text-2 text-style-6">Shinde</span>
                                              </h2>
                                              <p>Research Intern</p>
                                              <a class="link gray primary-hover"
                                                  href="http://www.linkedin.com/in/dhananjay-shinde-0185b4224"><i
                                                      class="icon fab fa-linkedin-in"></i></a>
                                              <a class="link gray primary-hover" href="#"><i
                                                      class="icon fab fab fa-twitter"></i></a>

                                              <div class="description gray">
                                                  <p>Having recently graduated with a degree in Computer Applications,
                                                      Dhananjay Shinde is keenly interested in topics related to Politics,
                                                      Foreign Policy and Security and has written several articles on these
                                                      subjects. His curiosity lies in the workings of the International
                                                      Relations domain and what goes into formulating policies. In his spare
                                                      time, Dhananjay can be found revelling in literature and philosophy.
                                                  </p>
                                              </div>
                                          </div>
                                          <div class="mt-social-1 mt-1">

                                              <a href="{{ URL::asset('/author/dhananjay-shinde') }}"
                                                  class="button mt-1 outline rounded primary primary-hover hover-up">

                                                  <span class="button-text primary white-hover">View Publications</span>

                                              </a>

                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/Shinde_headshot.jpeg') }}" class="image"
                                              alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

          </div>
          <!--pop up modal close-->

          <!-- Modal shinde -->
          <div id="modal-bhuvesha" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">B. K.</span>
                                                  <span class="text-2 text-style-6">Bhuvesha</span>
                                              </h2>
                                              <p>Research Intern</p>
                                              <a class="link gray primary-hover"
                                                  href="https://www.linkedin.com/in/bhuvesha-bhaskaran-315751246"><i
                                                      class="icon fab fa-linkedin-in"></i></a>
                                              <a class="link gray  primary-hover"
                                                  href="https://twitter.com/BhuveshaB84833?t=wDJCbdIcBYRqosKk7y0JLQ&s=08"><i
                                                      class="icon fab fab fa-twitter"></i></a>
                                              <div class="description gray">
                                                  <p>B. K. Bhuvesha is a Master’s student at the Department of Geopolitics
                                                      and International Relations, Manipal Academy of Higher Education.</p>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/WhatsApp-Image-2023-04-18-at-13.14.51-490x560.jpeg') }}"
                                              class="image" alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

          </div>
          <!--pop up modal close-->

          <!-- Modal bhaavya -->
          <div id="modal-bhaavya" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">Bhaavya</span>
                                                  <span class="text-2 text-style-6">Gupta</span>
                                              </h2>
                                              <p>Research Intern</p>
                                              <a class="link gray primary-hover"
                                                  href="http://www.linkedin.com/in/bhaavya-gupta-585330227"><i
                                                      class="icon fab fa-linkedin-in"></i></a>
                                              <a class="link gray primary-hover" href="https://twitter.com/bhaavya934"><i
                                                      class="icon fab fab fa-twitter"></i></a>

                                              <div class="description gray">
                                                  <p>Bhaavya Gupta is a Third Year Student in OP Jindal Global University
                                                      pursuing BALLB (Honors). She has a keen interest in International
                                                      Relations and is working towards gaining more insight in the subject.
                                                  </p>
                                              </div>
                                          </div>
                                          <div class="mt-social-1 mt-1">

                                              <a href="{{ URL::asset('/author/bhavya-gupta') }}"
                                                  class="button mt-1 outline rounded primary primary-hover hover-up">

                                                  <span class="button-text primary white-hover">View Publications</span>

                                              </a>

                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/WhatsApp-Image-2023-03-15-at-10.58.35-PM-490x414.jpeg') }}"
                                              class="image" alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

          </div>
          <!--pop up modal close-->

          <!-- Modal bhaavya -->
          <div id="modal-nisarg" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">Nisarg</span>
                                                  <span class="text-2 text-style-6">Jani</span>
                                              </h2>
                                              <p>Research Intern</p>
                                              <a class="link gray primary-hover"
                                                  href="https://www.linkedin.com/in/nisarg-jani/"><i
                                                      class="icon fab fa-linkedin-in"></i></a>
                                              <a class="link gray primary-hover"
                                                  href="https://twitter.com/Nisarg61686629?t=d-P4OV-HUxpqakVpBQDGEQ&s=09"><i
                                                      class="icon fab fab fa-twitter"></i></a>
                                              <div class="description gray">
                                                  <p>Nisarg Jani is an undergraduate in International Relations, currently
                                                      seeking a master’s degree in Politics and International Relations. His
                                                      research interest lies in South Asia studies, Chinese studies with the
                                                      sub themes on cultural and security studies of the given region. He
                                                      aims to work as a lingua franca between academia and policy making.
                                                  </p>
                                              </div>
                                          </div>
                                          <div class="mt-social-1 mt-1">

                                              <a href="{{ URL::asset('/author/nisarg-jain') }}"
                                                  class="button mt-1 outline rounded primary primary-hover hover-up">

                                                  <span class="button-text primary white-hover">View Publications</span>

                                              </a>

                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/WhatsApp-Image-2023-04-03-at-11.33.41-490x560.jpeg') }}"
                                              class="image" alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

          </div>
          <!--pop up modal close-->

          <!-- Modal debendra -->
          <div id="modal-debendra" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">Debendra</span>
                                                  <span class="text-2 text-style-6">Sanyal</span>
                                              </h2>
                                              <p>Research Intern</p>
                                              <a class="link gray primary-hover"
                                                  href="https://www.linkedin.com/in/debendra-sanyal-7865891b0"><i
                                                      class="icon fab fa-linkedin-in"></i></a>
                                              <a class="link gray primary-hover"
                                                  href="https://twitter.com/DebendraSanyal8?t=oOS_DnDLl3NGWJlCmlbgNA&s=09"><i
                                                      class="icon fab fab fa-twitter"></i></a>

                                              <div class="description gray">
                                                  <p>Debendra Sanyal graduated with a BA (Hons.) degree in Political Science
                                                      from Ashoka University in Sonepat, and is currently pursuing his
                                                      Master’s in Political Science with International Relations at Jadavpur
                                                      University, Kolkata. His main research interest is in the field of
                                                      Sino-Indian relations, and he has professional experience in doing
                                                      research on China.</p>
                                              </div>
                                          </div>
                                          <div class="mt-social-1 mt-1">

                                              <a href="{{ URL::asset('/author/debendra-sanyal') }}"
                                                  class="button mt-1 outline rounded primary primary-hover hover-up">

                                                  <span class="button-text primary white-hover">View Publications</span>

                                              </a>

                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/WhatsApp-Image-2023-04-18-at-13.56.06.jpeg') }}"
                                              class="image" alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

          </div>
          <!--pop up modal close-->

          <!-- Modal omkar -->
          <div id="modal-omkar" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">Omkar</span>
                                                  <span class="text-2 text-style-6">Bhole</span>
                                              </h2>
                                              <p>Research Associate</p>
                                              <a class="link gray primary-hover" href="https://twitter.com/bhole_omkar"><i
                                                      class="icon fab fab fa-twitter"></i></a>
                                              <a class="link gray primary-hover"
                                                  href="https://www.linkedin.com/in/omkar-bhole-065067153/"><i
                                                      class="icon fab fa-linkedin-in"></i></a>
                                              <div class="description gray">
                                                  <p>Omkar Bhole is a Research Associate at Organization for Research on
                                                      China and Asia (ORCA). He is a Chinese language student and completed
                                                      Masters in China Studies from Somaiya University, Mumbai. He has
                                                      completed the HSK 4 level of Chinese language proficiency and works as
                                                      a Chinese language instructor. His research interests are China’s
                                                      foreign policy in Asia, China’s economic transformation and China’s
                                                      domestic politics. He has previously done an internship at the
                                                      Institute of Chinese Studies (ICS). He has also presented a paper at
                                                      the 1st All India Conference of East Asian Studies. He can be reached
                                                      @bhole_omkar on Twitter</p>
                                              </div>
                                          </div>
                                          <div class="mt-social-1 mt-1">

                                              <a href="{{ URL::asset('/author/omkar-bhole') }}"
                                                  class="button mt-1 outline rounded primary primary-hover hover-up">

                                                  <span class="button-text primary white-hover">View Publications</span>

                                              </a>

                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/WhatsApp-Image-2022-09-06-at-9.23.38-AM-894x1024.jpeg') }}"
                                              class="image" alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

          </div>
          <!--pop up modal close-->

          <!-- Modal ratish -->
          <div id="modal-ratish" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">Ratish</span>
                                                  <span class="text-2 text-style-6">Mehta</span>
                                              </h2>
                                              <p>Research Associate</p>
                                              <a class="link gray primary-hover"
                                                  href="https://twitter.com/ratish_mehta"><i
                                                      class="icon fab fab fa-twitter"></i></a>
                                              <a class="link gray primary-hover"
                                                  href="https://www.linkedin.com/in/ratish-mehta-7172271ab/"><i
                                                      class="icon fab fa-linkedin-in"></i></a>
                                              <div class="description gray">
                                                  <p>Ratish Mehta is a post-graduate in Global Studies from Ambedkar
                                                      University and holds a Bachelor’s degree in Political Science Hons
                                                      from Delhi University. His research interests include understanding
                                                      the role of narratives in geopolitical relations and deconstructing
                                                      narratives in international affairs as well as in domestic politics
                                                      within India. He was previously associated with the Pranab Mukherjee
                                                      Foundation as a Research Associate and is currently a Research
                                                      Associate at the Organization for Research on China and Asia.</p>
                                              </div>
                                          </div>
                                          <div class="mt-social-1 mt-1">

                                              <a href="{{ URL::asset('/author/ratish-mehta') }}"
                                                  class="button mt-1 outline rounded primary primary-hover hover-up">

                                                  <span class="button-text primary white-hover">View Publications</span>

                                              </a>

                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/WhatsApp-Image-2022-11-03-at-12.28.32-490x560.jpeg') }}"
                                              class="image" alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

          </div>
          <!--pop up modal close-->

          <!-- Modal ratish -->
          <div id="modal-goki" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content br-0375">
                      <!-- Image -->
                      <section class="shock-section p-3 bg-color gray-10">
                          <div class="container">
                              <div class="row g-4">
                                  <div class="col-12 col-md-7 align-v-center">
                                      <div class="holder">
                                          <!-- Intro -->
                                          <div class="basic-intro">
                                              <h2 class="title black">
                                                  <span class="text-1 text-style-5">Gokireddy Hima</span>
                                                  <span class="text-2 text-style-6">Bindu</span>
                                              </h2>
                                              <p>Research Intern</p>
                                              <a class="link gray primary-hover" href="https://twitter.com/bindubliss"><i
                                                      class="icon fab fab fa-twitter"></i></a>
                                              <a class="link gray primary-hover"
                                                  href="https://www.linkedin.com/in/hima-bindu-gokireddy-a33b59115"><i
                                                      class="icon fab fa-linkedin-in"></i></a>
                                              <div class="description gray">
                                                  <p>Gokireddy Hima Bindu is a postgraduate research scholar pursuing
                                                      Masters in Geopolitics and International Relations at the Department
                                                      of Geopolitics and International Relations, Manipal Academy of Higher
                                                      Education, Manipal. She takes special interest in China Studies with a
                                                      focus on its History and Strategy, the PLA, and the like.

                                                      • Areas of Research: China’s Military Strategy, The PLA Reforms,
                                                      China’s Diplomacy

                                                      • Other areas of interests: Confucian Culture, India’s Foreign Policy,
                                                      India’s National Security</p>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  <div class="col-12 col-md-5">
                                      <!-- Image -->
                                      <div class="image-wrapper" data-lax="inertia-top">
                                          <img style="border-radius: 0.375rem;"
                                              src="{{ URL::asset('images/team/20210908_124307-490x560.jpg') }}"
                                              class="image" alt="Image name" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

          </div>
          <!--pop up modal close-->

      @endsection
