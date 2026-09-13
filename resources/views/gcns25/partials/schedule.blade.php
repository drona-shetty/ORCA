<style>
    .w--open .plus-icon {
        transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(45deg) skew(0deg, 0deg);
        transform-style: preserve-3d;
    }

    .answer-block.w-dropdown-list {
        height: 0;
    }

    .answer-block.w-dropdown-list.w--open {
        height: auto;
    }
</style>
<?php $scheduleData = App\Models\Event\Schedule::where('gcns', 2025)->orderBy('id', 'asc')->get(); ?>
<div class="faq-groups-wrapper">
    <div class="second-example-with-unterline">
        <div class="tabs-2 w-tabs"
            data-current="Tab 1"
            data-easing="ease-in-out"
            data-duration-in="300"
            data-duration-out="300">
            {{-- Schedule Tabs --}}
            <div class="tabs-menu-underline-wrapper w-tab-menu">
                @foreach ($scheduleData as $counter => $schedule)
                    @php
                        $tabNumber = $counter + 1;
                        $tabName = 'Tab ' . $tabNumber;
                        $tabId = 'w-tabs-' . $counter;
                        $paneId = 'w-tabs-data-w-pane-' . $counter;
                    @endphp
                    <a
                        data-w-tab="{{ $tabName }}"
                        class="tabs-nav-item-underline _{{ str_pad($counter + 1, 2, '0', STR_PAD_LEFT) }} {{ $counter === 0 ? 'day w--current' : '' }} w-inline-block w-tab-link"
                        id="{{ $tabId }}"
                        role="tab"
                        aria-controls="{{ $paneId }}"
                        aria-selected="{{ $counter === 0 ? 'true' : 'false' }}">
                        @if ($counter === 0)
                            <div class="tabs-nav-unterline"></div>
                        @endif
                        <h3 class="cards-title schedule">{{ date_format(date_create($schedule->scheduleDate), 'j F') }}</h3>
                    </a>
                @endforeach
            </div>
            {{-- Schedule Content --}}
            <div class="tabs-content-wrapper w-tab-content">
                @foreach ($scheduleData as $counter => $schedule)
                    @php
                        $tabNumber = $counter + 1;
                        $tabName = 'Tab ' . $tabNumber;
                        $paneId = 'w-tabs-data-w-pane-' . $counter;
                        // Database call kept in Blade as requested
                        $sessionData = App\Models\Event\ScheduleSession::orderBy('startTime', 'asc')
                            ->where('scheduleId', $schedule->id)
                            ->get();
                    @endphp
                    <div
                        data-w-tab="{{ $tabName }}"
                        id="{{ $paneId }}"
                        class="tab-content-item w-tab-pane {{ $counter === 0 ? 'w--tab-active' : '' }}">
                        <div class="tab-content">
                            <div class="what-outer">
                                @foreach ($sessionData as $sessionCounter => $session)
                                    @php
                                        $dropdownId = 'w-dropdown-' . $counter . '-' . $sessionCounter;
                                        $toggleId = 'w-dropdown-toggle-' . $counter . '-' . $sessionCounter;
                                        $listId = 'w-dropdown-list-' . $counter . '-' . $sessionCounter;
                                        $convertedStartTime = date_format(date_create($session->startTime), 'h:i A');
                                        $convertedEndTime = date_format(date_create($session->endTime), 'h:i A');
                                    @endphp
                                    <div
                                        data-delay="0"
                                        data-hover="false"
                                        data-w-id="{{ $dropdownId }}"
                                        class="what-i-do w-dropdown">
                                        {{-- Session Header --}}
                                        <div
                                            class="question-block top w-dropdown-toggle"
                                            id="{{ $toggleId }}"
                                            aria-controls="{{ $listId }}"
                                            aria-haspopup="menu"
                                            aria-expanded="false"
                                            role="button"
                                            tabindex="0">
                                            <div class="question-inner">
                                                <h1 class="cards-date-num schedule">{{ $session->title }}</h1>
                                                <div class="div-block-8">
                                                    <h3 class="cards-title schedule padding">{{ $convertedStartTime }} - {{ $convertedEndTime }}</h3>
                                                    @if ($session->sessionTag != null)
                                                        <h3 class="cards-title schedule padding session">{{ $session->sessionTag }}</h3>
                                                    @endif
                                                </div>
                                            </div>
                                            <img
                                                loading="lazy"
                                                alt=""
                                                src="{{ asset('gcns25/images/plus-svgrepo-com.svg') }}"
                                                class="plus-icon">
                                        </div>
                                        {{-- Session Description --}}
                                        <nav
                                            class="answer-block w-dropdown-list"
                                            id="{{ $listId }}"
                                            aria-labelledby="{{ $toggleId }}">
                                            <div class="what-answer-block">
                                                <p class="body-large text-color-light">{!! $session->description !!}</p>
                                            </div>
                                        </nav>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
