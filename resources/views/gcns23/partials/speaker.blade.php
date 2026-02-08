<div class="team-slider_cms_list swiper-wrapper">
    @php
        $speakers = App\Models\Gcns\Speaker::paginate(6);
    @endphp
    @foreach($speakers as $speaker)
        <div class="team-slider_cms_item swiper-slide">
            <a data-w-id="70526055-b2ed-4e7e-c089-c78f48128a1e" href="{{ url('pages/gcns2023/speaker/') }}/{{ $speaker->id }}"
                class="scroll-card w-inline-block">
                <div class="media-wrapper">
                    <img loading="lazy" src="{{ URL::asset('images/event/speaker/' . $speaker->image) }}"
                        alt="{{ $speaker->name }}" class="full-image">
                </div>
                <div class="content-wrapper">
                    <div class="text-wrapper">
                        <div class="date-card-div">
                            <h1 class="cards-date-num">{{ $speaker->name }}</h1>
                        </div>
                        <h4 class="heading-2 event-title">{{ $speaker->designation }}</h4>
                    </div>
                    <div data-w-id="70526055-b2ed-4e7e-c089-c78f48128a2e" class="grow-background"></div>
                </div>
            </a>
        </div>
    @endforeach
</div>
@if ($speakers->hasMorePages())
    <a class="rdf-button-1 editions w-button load-more" href="{{ url('pages/gcns2023/all-speakers') }}">View All</a>
@endif