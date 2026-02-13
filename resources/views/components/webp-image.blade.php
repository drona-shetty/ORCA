@if($webpExists)
    <picture>
        <source srcset="{{ asset(str_replace(public_path(), '', dirname(public_path($src))) . '/' . pathinfo($src, PATHINFO_FILENAME) . '.webp') }}" type="image/webp">
        <img src="{{ asset($src) }}" {{ $attributes }}>
    </picture>
@else
    <img src="{{ asset($src) }}" {{ $attributes }}>
@endif