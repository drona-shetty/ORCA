@extends('gcns23.main')
@section('content')
    <!--BANNER-->
    <section>
        <div class="lgx-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ URL::asset('gcns25/images/Image_GCNS Speaker Section.jpg') }}') top center no-repeat;background-size: cover;">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">Who’s Speaking</h2>
                                    <h3 class="subheading">Our speaker {{ $speaker->name }} for ORCA's Global Conference on
                                        New Sinology 2023</h3>
                                </div>

                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section> <!--//.Banner Inner-->
    <!--END BANNER-->

    <main>
        <div class="lgx-post-wrapper">
            <!--News-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <article>
                                <header>
                                    <figure>
                                        <img class="newspeaker" src="{{ url('images/event/speaker/' . $speaker->image) }}"
                                            alt="{{ $speaker->name }}" />
                                    </figure>
                                    <div class="text-area">
                                        <div class="speaker-info">
                                            <h1 class="title">{{ $speaker->name }}</h1>
                                            <h4 class="subtitle">{{ $speaker->designation }}</h4>
                                        </div>

                                    </div>
                                </header>
                                <section>
                                    <p class="textjustify">
                                        {{ $speaker->content }}
                                    </p>
                                </section>
                            </article>
                        </div>
                    </div>
                </div><!-- //.CONTAINER -->
            </section>
            <!--News END-->
        </div>
    </main>
@endsection
