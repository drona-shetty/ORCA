@foreach ($articles as $article)
    <?php $category = App\Models\Category::where('id', $article->category)->first();
    $author_id = unserialize($article->author_id);
    $author = App\Models\User::where('id', $author_id)->first();
    ?>
    <div class="col-12 col-md-6 load-more-item">
        <div class="card has-full-image vh-60 small-shadow rounded parent">
            <!-- Image -->
            <div class="image-wrapper hover-up-down">
                <x-webp-image src="{{ URL::asset('images/article/' . $article->title_image) }}" alt="$article->title_image"
                    class="image" />
            </div>
            <!-- Body -->
            <div class="card-body align-v-bottom">
                <div class="holder">
                    <a href="{{ url('category' . $category->slug) }}" class="link">
                        <span class="badge outline primary primary-hover">
                            <span class="badge-text white-75 white-hover">{{ $category->category }}</span>
                        </span>
                    </a>
                    <h1 class="title white"><span
                            class="text-1 text-style-5"><?= date_format(date_create($article->created_at), 'd') ?>
                        </span><br>
                        <span class="text-2 text-style-10"><?= date_format(date_create($article->created_at), 'F Y') ?>
                        </span>

                    </h1>

                    <h3 class="title text-style-11 white">{{ $article->title }}</h3>
                    <p class="description gray line-clamp-2">{{ $article->subtitle }}</p>
                    <hr class="gray-25">

                </div>
                <!-- Overlay -->
                <div class="overlay black"></div>
                <!-- Link -->
                <a href="{{ url('article/' . $article->id . '/' . $article->slug) }}" class="full-link"></a>
            </div>
        </div>
    </div>
@endforeach
