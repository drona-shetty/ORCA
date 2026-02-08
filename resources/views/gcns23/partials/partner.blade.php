<div class="partners-grid">
    @php
        $partners = App\Models\Gcns\Partner::all();
    @endphp
    @foreach ($partners as $partner)
        <a href="{{ $partner->link }}" class="partners-card w-inline-block">
            <div class="media-wrapper">
                <img loading="lazy" src="{{ URL::asset('images/event/partner/' . $partner->logo) }}"
                    alt="{{ $partner->title }}" class="full-image">
            </div>
            <div class="content-wrapper">
                <div class="text-wrapper">
                    <div class="date-card-div">
                        <h1 class="cards-date-num">{{ $partner->title }}</h1>
                    </div>
                    <h4 class="heading-2 event-title">{{ $partner->content }}<br></h4>
                </div>
                <div class="grow-background"></div>
            </div>
        </a>
    @endforeach
</div>
