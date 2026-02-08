@extends('web')
@section('title','ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')

<style>
.fit-contain {
    object-fit: contain;
    object-position: center;
}
</style>

    <!-- Banner -->
      <section class="shock-section has-overlay">
        <div class="banner">
          <div class="content-wrapper">
            <!-- Intro -->
            <div class="extended-intro max-w-65 mb-25">
              <h1 class="title text-style-1 text-offset">
                <span class="text-1 filled primary-50" data-lax="inertia-top">Daily Conversations </span>
                <span class="text-1 outline white">Daily Conversations</span>
              </h1>
              <span class="text-2 text-style-4 fw-400 text-outline text-italic white">In Chinese Media</span>
            </div>
          </div>
          <!-- Image -->
          <div class="image-wrapper">
            <img src="assets/images/jpg/a-37.jpg" class="image vh-75 fit-cover" alt="This is an example description for this item." />
          </div>
          <!-- Overlay -->
          <div class="overlay black-50"></div>
        </div>
      </section>

      <!-- Post -->
      <section class="shock-section bg-color black">
        <div class="container max-w-85">
          <div class="holder p-5 climb shadow rounded" data-bg-color="#201f25" data-lax="inertia-top">
            <div class="content max-w-85 scheme-2">
              
              <!-- Breadcrumb -->
              <div class="breadcrumb-nav scheme-2 primary">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item has-icon">
                      <a href="{{URL::asset('/')}}" class="breadcrumb-link"><i class="fa-solid fa-house icon"></i><span class="text">Home</span></a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="{{URL::asset('category/cicm')}}" class="breadcrumb-link">Blog</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Date
                    </li>
                  </ol>
                </nav>
              </div>
        
              <!-- Paragraph -->
              <h3>After all, why is design important?</h3>
              <p>Design is a broad concept that represents the process of creating products based on technical and aesthetic excellence, with the aim of <mark class="animated-underline primary-50 text-white">solving problems</mark> and adding value. Good design delivers the best possible user experience.</p>
              <p>Design is a thought process that comprises the creation of products to solve problems, including functional and <strong>aesthetic aspects</strong>.</p>
              <p>This is the most objective definition possible for the concept, which encompasses numerous forms of idealization, conception, development and specification of objects.</p>
              
              <!-- Paragraph -->
              <h3>Some of the types of designs that exist</h3>
              <ul>
                <li><strong>Graphic design</strong> is the use of images, texts and illustrations for visual communication.</li>
                <li><strong>Game design</strong> focused on the development and <a href="#"><u>creation of games</u></a>.</li>
                <li><strong>Design thinking</strong> can be defined as the way of design thinking applied to the solution of challenges and innovation in business:
                  <ul>
                    <li><u>Immersion:</u> research and understanding of the problem and its context.</li>
                    <li><u>Ideation:</u> generating ideas as a team from the data collected.</li>
                    <li><u>Prototyping:</u> creating prototypes that validate learned content.</li>
                  </ul>
                </li>
                <li><strong>Product design</strong>, works with the <mark class="animated-underline primary-50 text-white">creation of objects</mark> focused on solving problems.</li>
                <li><strong>Web design</strong> is the area that covers the creation of interfaces for software, websites, platforms and applications.</li>
                <li><strong>Interior design</strong> is the area responsible for planning, creating and executing indoor projects.</li>
              </ul>
        
              <!-- Paragraph -->
              <h3>The history of design</h3>
              <p>If we take the term literally, our ancestors already practiced design when creating their chipped stone tools. However, to facilitate understanding, let's place the concept in our age.</p>
              <p>In this case, who deserves the title of first designer in history is <a href="#"><u>Leonardo Da Vinci</u></a>.</p>
              <p>The genius used design principles to design visionary inventions that revolutionized humanity and propelled science forward.</p>
        
              <!-- Image -->
              <div class="stretched-section">
                <figure class="figure">
                  <img src="assets/images/jpg/a-11.jpg" class="image shadow rounded" alt="Image name">
                  <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
                </figure>
              </div>
        
              <!-- Paragraph -->
              <p>Design is fundamental because it optimizes human creation, combining aesthetics with functionality. It is a process capable of adding value and generating more efficient, comfortable, safe and <mark class="animated-underline primary-50 text-white">beautiful solutions</mark>.</p>
              <p>Proof of this is that common sense equates design with something beautiful and well done. For companies, design is one of the key success factors, from <strong>product development</strong> to customer value delivery.</p>
        
              <!-- Blockquote -->
              <div class="blockquote mx-auto">
                <blockquote class="blockquote-body text-style-11 white">
                  <p>"The design is not just what it looks like. The design is how it works".</p>
                </blockquote>
                <div class="blockquote-footer">
                  <cite title="Source Title">Steve Jobs / Apple Founder</cite>
                </div>
                <i class="fas fa-quote-right overlay-icon gray-50"></i>
              </div>
              
              <!-- Paragraph -->
              <p>It's not just about enchanting the product's look, but thinking about the entire process of use and arriving at the best possible solution.</p>
              <p>For this, the designer transforms ideas into products that actually solve problems, designed and executed in the smallest details.</p>
              <h3>Is design considered an art?</h3>
              <p>Personally, I usually say that design is the bridge between what already exists and what is possible to imagine and do.</p>
              <p>Therefore, it is such a complex concept, which goes through art, business, culture, aesthetics, behavior and technology.</p>
        
              <!-- Gallery -->
              <div class="stretched-section">
                <div class="block-section">
                  <div class="gallery stretched-side has-gap">
                    <div class="bricklayer" data-columns="3">
                      <a href="assets/images/jpg/d-1.jpg" class="item lightbox-link">
                        <div class="image-wrapper shadow rounded hover-zoom-rotate">
                          <div class="overlay black-50"></div>
                          <img src="assets/images/jpg/d-1.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                        </div>
                      </a>
                      <a href="assets/images/jpg/d-2.jpg" class="item lightbox-link">
                        <div class="image-wrapper shadow rounded hover-zoom-rotate">
                          <div class="overlay black-50"></div>
                          <img src="assets/images/jpg/d-2.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                        </div>
                      </a>
                      <!-- Video -->
                      <a href="https://vimeo.com/222990241" class="item active lightbox-link">
                        <i class="fa-solid fa-circle-play gallery-icon white floating-item"></i>
                        <div class="image-wrapper shadow rounded hover-zoom-rotate">
                          <div class="overlay black-50"></div>
                          <img src="assets/images/jpg/d-3.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                        </div>
                      </a>
                      <a href="assets/images/jpg/d-4.jpg" class="item lightbox-link">
                        <div class="image-wrapper shadow rounded hover-zoom-rotate">
                          <div class="overlay black-50"></div>
                          <img src="assets/images/jpg/d-4.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                        </div>
                      </a>
                      <a href="assets/images/jpg/d-5.jpg" class="item lightbox-link">
                        <div class="image-wrapper shadow rounded hover-zoom-rotate">
                          <div class="overlay black-50"></div>
                          <img src="assets/images/jpg/d-5.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                        </div>
                      </a>
                      <a href="assets/images/jpg/d-6.jpg" class="item lightbox-link">
                        <div class="image-wrapper shadow rounded hover-zoom-rotate">
                          <div class="overlay black-50"></div>
                          <img src="assets/images/jpg/d-6.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
        
              <!-- Paragraph -->
              <h3>Can you already see design with a new look?</h3>
              <p>As we have seen, it is not a simple term, as it concerns a process, science, profession and even attributes of everything we know.</p>
              <p>No wonder you are surrounded by examples of design: the page of this blog, the decoration of your office, the model of your shirt and even the shape of your chair. That's why design is so important.</p>
              <p>It allows the world we imagine to become reality in the best possible way.</p>
        
              <!-- Post navigation-->
              <div class="block-section">
                <div class="post-navigation">
                  <div class="post-navigation-buttons">
                    <!-- Button -->
                    <a href="#" class="arrow-button prev scheme-2 primary">
                      <span class="arrow">
                        <span class="item"></span>
                        <span class="item"></span>
                      </span>
                      <span class="line"></span>
                      <span class="text">PREV ARTICLE</span>
                    </a>
                    <!-- Button -->
                    <a href="#" class="arrow-button next scheme-2 primary">
                      <span class="arrow">
                        <span class="item"></span>
                        <span class="item"></span>
                      </span>
                      <span class="line"></span>
                      <span class="text">NEXT ARTICLE</span>
                    </a>
                  </div>
                </div>
              </div>
        
              <!-- Divider -->
              <div class="stretched-section">
                <div class="block-section">
                  <span class="zzz scheme-2 gray-75"></span>
                </div>
              </div>
              
              <!-- Tag Cloud -->
              <div class="block-section">
                <h2>Tags</h2>
                <div class="tag-cloud">
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Environment</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Events</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Technology</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Web</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Mobile</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Design</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline active gray-50 primary-hover floating-item-smooth">
                      <span class="badge-text gray white-hover">Branding</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Development</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Artificial</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Intelligence</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Engineering</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Innovation</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Social</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Fashion</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Product</span>
                    </span>
                  </a>
                </div>
              </div>
        
              <!-- Post reference -->
              <div class="stretched-section">
                <div class="block-section">
                  <div class="post-reference" data-lax="inertia-top">
                    <div class="post-reference-container">
                      <div class="image-wrapper">
                        <img src="assets/images/png/b-2.png" alt="Image name" class="image">
                      </div>
                      <div class="text-wrapper">
                        <h5 class="title"><mark class="animated-underline primary-50">John Young</mark></h5>
                        <p class="description">Co-founder of the Company. The Wall Street Journal named him the biggest influencer on the web.</p>
                        <cite title="Source Title">Author of the article "Why design matters to our lives".</cite>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Comments -->
              <div class="comments">
                <h2>Comments <span class="text-outline">(16)</span></h2>
                <div class="comments-wrapper">
                  <!-- Comment -->
                  <div id="comment-1" class="comment">
                    <div class="comment-metadata">
                      <div class="comment-author">
                        <div class="author-photo">
                          <img src="assets/images/jpg/p-1.jpg" class="image shadow" alt="Image name">
                        </div>
                        <h5 class="author-name">Alice Johnson</h5>         
                      </div>
                      <span class="comment-date">
                        <i class="icon fas fa-calendar-alt"></i>
                        <span class="text">14 days ago</span>
                      </span>
                    </div>
                    <div class="comment-content">
                      <p>Hello, this theme is really amazing! It has many features that make my job as a developer much easier. I'm sure my clients will love to see the final result of this project.</p>
                    </div>
                    <div class="comment-action">
                      <!-- Button -->
                      <a href="#comment-1" class="button simple">
                        <span class="button-text white primary-hover">Reply comment</span>
                        <i class="fa-solid fa-arrow-right button-icon white primary-hover"></i>
                      </a>
                      <i class="fa-solid fa-heart like-icon active primary"></i>             
                    </div>
                  </div>
                  <!-- Comment -->
                  <div id="comment-2" class="comment">
                    <div class="comment-metadata">
                      <div class="comment-author">
                        <div class="author-photo">
                          <img src="assets/images/jpg/p-1.jpg" class="image shadow" alt="Image name">
                        </div>
                        <h5 class="author-name">Kaled Ahmad</h5>         
                      </div>
                      <span class="comment-date">
                        <i class="icon fas fa-calendar-alt"></i>
                        <span class="text">17 days ago</span>
                      </span>
                    </div>
                    <div class="comment-content">
                      <p>مرحبًا ، هذا المظهر رائع حقًا! يحتوي على العديد من الميزات التي تجعل عملي كمطور أسهل بكثير. أنا متأكد من أن عملائي سيحبون رؤية موقع الويب الذي أقوم ببنائه لهم.</p>
                    </div>
                    <div class="comment-action">
                      <!-- Button -->
                      <a href="#comment-2" class="button simple">
                        <span class="button-text white primary-hover">Reply comment</span>
                        <i class="fa-solid fa-arrow-right button-icon white primary-hover"></i>
                      </a>
                      <i class="fa-solid fa-heart like-icon primary"></i>             
                    </div>
                  </div>
                  <!-- Comment -->
                  <div id="comment-3" class="comment">
                    <div class="comment-metadata">
                      <div class="comment-author">
                        <div class="author-photo">
                          <img src="assets/images/jpg/p-1.jpg" class="image shadow" alt="Image name">
                        </div>
                        <h5 class="author-name">Laura Garcia</h5>         
                      </div>
                      <span class="comment-date">
                        <i class="icon fas fa-calendar-alt"></i>
                        <span class="text">26 days ago</span>
                      </span>
                    </div>
                    <div class="comment-content">
                      <p>Hola, este tema es realmente increíble! Tiene muchas características que hacen que mi trabajo como desarrollador sea mucho más fácil. Estoy seguro de que a mis clientes les encantará ver el sitio web que estoy creando para ellos.</p>
                    </div>
                    <div class="comment-action">
                      <!-- Button -->
                      <a href="#comment-3" class="button simple">
                        <span class="button-text white primary-hover">Reply comment</span>
                        <i class="fa-solid fa-arrow-right button-icon white primary-hover"></i>
                      </a>
                      <i class="fa-solid fa-heart like-icon primary"></i>             
                    </div>
                  </div>
                  <!-- Comment -->
                  <div id="comment-4" class="comment">
                    <div class="comment-metadata">
                      <div class="comment-author">
                        <div class="author-photo">
                          <img src="assets/images/jpg/p-1.jpg" class="image shadow" alt="Image name">
                        </div>
                        <h5 class="author-name">Dimitri Smirnov</h5>         
                      </div>
                      <span class="comment-date">
                        <i class="icon fas fa-calendar-alt"></i>
                        <span class="text">14 days ago</span>
                      </span>
                    </div>
                    <div class="comment-content">
                      <p>Привет, эта тема действительно потрясающая! Он имеет множество функций, которые значительно облегчают мою работу как разработчика. Я уверен, что моим клиентам понравится конечный результат этого проекта.</p>
                    </div>
                    <div class="comment-action">
                      <!-- Button -->
                      <a href="#comment-4" class="button simple">
                        <span class="button-text white primary-hover">Reply comment</span>
                        <i class="fa-solid fa-arrow-right button-icon white primary-hover"></i>
                      </a>
                      <i class="fa-solid fa-heart like-icon primary"></i>             
                    </div>
                  </div>
                </div>
                <!-- Form -->
                <div class="form-area scheme-2 primary">
                  <h3>Leave a reply</h3>
                  <p>To write a comment you need to <a href="#" target="_blank"><u>login</u></a> to your account.</p>
                  <form class="form-fields needs-validation" novalidate="novalidate">
                    <div class="form-row row">
                      <div class="form-col col-12">
                        <textarea class="form-control rounded-3 form-textarea" id="InputCompactExampleMessage" rows="3" placeholder="Comment" required="required"></textarea>
                        <div class="invalid-feedback">Please type something to post a comment.</div>
                      </div>
                    </div>
                    <div class="form-row row">
                      <div class="form-col col-12">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" required="required">
                          <label class="form-label form-check-label">
                            I agree to the <a href="#your-link" class="link white primary-hover"><u>terms of use</u>.</a>
                          </label>
                          <div class="invalid-feedback">Please accept the terms to continue.</div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row row">
                      <div class="form-col col-12">
                        <!-- Button -->
                        <button class="button shadow rounded-3 primary white-hover button-collision">
                          <span class="button-text white black-hover">Post comment</span>
                          <i class="fa-solid fa-arrow-right button-icon white black-hover"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
        
            </div>
          </div>
        </div>
      </section>
  </main>
    
    @endsection