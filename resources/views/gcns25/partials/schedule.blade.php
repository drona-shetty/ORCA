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
        <div data-current="Tab 1" data-easing="ease-in-out" data-duration-in="300" data-duration-out="300"
            class="tabs-2 w-tabs">
            <div class="tabs-menu-underline-wrapper w-tab-menu">
                <?php $counter = 0; ?>
                @foreach ($scheduleData as $schedule)
                    <a data-w-tab="{{ $counter == 0 ? 'Tab 1' : 'Tab 2' }}"
                        class="{{ $counter == 0 ? 'tabs-nav-item-underline _01 day w--current' : 'tabs-nav-item-underline _02' }} w-inline-block w-tab-link"
                        id="w-tabs-{{ $counter }}" href="#w-tabs-data-w-pane-{{ $counter }}" role="tab"
                        aria-controls="w-tabs-data-w-pane-{{ $counter }}"
                        aria-selected="{{ $counter == 0 ? 'true' : 'false' }}">
                        @if ($counter == 0)
                            <div class="tabs-nav-unterline"></div>
                        @endif
                        <h3 class="cards-title schedule">
                            <?= date_format(date_create($schedule->scheduleDate), 'j F') ?>
                        </h3>
                    </a>
                    <?php $counter++; ?>
                @endforeach
            </div>
            <div class="tabs-content-wrapper w-tab-content">
                <?php $accCounter = 0; ?>
                @foreach ($scheduleData as $schedule)
                    <?php $slug = strtolower(str_replace(' ', '-', $schedule['title'])); ?>
                    <div data-w-tab="{{ $accCounter == 0 ? 'Tab 1' : 'Tab 2' }}"
                        class="tab-content-item w-tab-pane {{ $accCounter == 0 ? 'w--tab-active' : '' }}">
                        <div class="tab-content">
                            <div class="what-outer">
                                <?php $sessionData = App\Models\Event\ScheduleSession::orderBy('startTime', 'asc')->where('scheduleId', $schedule->id)->get(); ?>
                                <?php $sessionCounter = 0; ?>
                                @foreach ($sessionData as $session)
                                    <div data-delay="0" data-hover="false"
                                        data-w-id="w-dropdown-q-{{ $sessionCounter }}" class="what-i-do w-dropdown">
                                        <div class="question-block top w-dropdown-toggle"
                                            id="w-dropdown-toggle-{{ $sessionCounter }}"
                                            aria-controls="w-dropdown-list-{{ $sessionCounter }}" aria-haspopup="menu"
                                            aria-expanded="false" role="button" tabindex="0">
                                            <div class="question-inner">
                                                <h1 class="cards-date-num schedule">{{ $session->title }}</h1>
                                                <div class="div-block-8">
                                                    <?php
                                                    $convertedStartTime = DateTime::createFromFormat('H:i:s', $session->startTime)->format('h:i A');
                                                    $convertedEndTime = DateTime::createFromFormat('H:i:s', $session->endTime)->format('h:i A');
                                                    ?>
                                                    <h3 class="cards-title schedule padding">{{ $convertedStartTime }} - {{ $convertedEndTime }}</h3>
                                                    @if ($session->sessionTag != null)
                                                        <h3 class="cards-title schedule padding session">{{ $session->sessionTag }}</h3>
                                                    @endif
                                                </div>
                                            </div>
                                            <img loading="lazy" alt=""
                                                src="{{ URL::asset('gcns25/images/plus-svgrepo-com.svg') }}"
                                                class="plus-icon">
                                        </div>
                                        <nav class="answer-block w-dropdown-list"
                                            id="w-dropdown-list-{{ $sessionCounter }}"
                                            aria-labelledby="w-dropdown-toggle-{{ $sessionCounter }}">
                                            <div class="what-answer-block">
                                                <p class="body-large text-color-light">{!! $session->description !!}</p>
                                            </div>
                                        </nav>
                                    </div>
                                    <?php $sessionCounter++; ?>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <?php $accCounter++; ?>
                @endforeach
            </div>
        </div>
    </div>
</div>
