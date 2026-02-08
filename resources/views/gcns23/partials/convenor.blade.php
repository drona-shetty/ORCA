<div class="partners-grid">
    @php
        $convenors = App\Models\Event\Convenor::where('gcns', 2023)->get();
    @endphp
    @foreach ($convenors as $convenor)
        <a href="{{ $convenor->link }}" class="partners-card w-inline-block">
            <div class="media-wrapper">
                <img loading="lazy" src="{{ URL::asset('images/event/convenor/' . $convenor->logo) }}" alt=""
                    class="full-image">
            </div>
            <div class="content-wrapper">
                <div class="text-wrapper">
                    <div class="date-card-div">
                        <h1 class="cards-date-num">{{ $convenor->title }}</h1>
                    </div>
                    <h4 class="heading-2 event-title">{{ $convenor->content }}<br></h4>
                </div>
                <div class="grow-background"></div>
            </div>
        </a>
    @endforeach
</div>
