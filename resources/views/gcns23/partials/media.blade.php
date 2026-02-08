@foreach($media_files as $file)
    <a href="#" class="grid-4">
        <div class="media-item">
            <img style="width:100%" loading="lazy" src="{{ asset('images/event/media/' . $file->files) }}" alt="{{ $file->files }}">
        </div>
    </a>
@endforeach