@foreach ($users as $user)
    <?php $author_meta = $user->meta; ?>
    <div class="col-12 col-md-6 col-xl-4 cosmm" id="author-{{ $user->id }}">
        <a href="{{ url('author/' . $author_meta->slug) }}" class="item hover-zoom">
            <div class="card boxed parent">
                <!-- Image -->
                <div class="image-wrapper cosheight" data-aos="zoom-in-up">
                    <x-webp-image src="{{ URL::asset('images/author') }}/{{ $author_meta->avatar }}" alt="Image name"
                        class="image outline white cosobject" />
                    <div class="image-overlay primary accent-hover"></div>
                </div>
                <!-- Box -->
                <div class="card-body box shadow bg-color black hover-up-down" data-aos="zoom-in-up"
                    data-aos-delay="100">
                    <h3 class="title text-style-11 white">{{ $user->name }}</h3>
                    <p style="color:#b0acac;" class="description gray line-clamp-3">
                        @if ($author_meta->about != null)
                            {{ $author_meta->about }}
                        @endif
                    </p>
                </div>
            </div>
        </a>
    </div>
@endforeach
