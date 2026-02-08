@extends('gcns23.main')

@section('content')
    <style>
        .allspeakers {
            width: 100% !important;
            max-height: 500px;
            min-height: 500px !important;
            object-fit: cover !important;
        }

        .container {
            width: 100% !important;
            padding: 0 !important;
        }

        .slidername {
            color: #000 !important;
        }

        .video-sec-wrap {
            width: 100%;
            min-height: 100vh;
        }

        .video-sec {
            width: 85%;
            margin: 3em auto;
            border-bottom: 2px solid #353535;
            text-align: left;
        }

        .video-sec-middle {
            grid-template-columns: repeat(4, 1fr);
            display: grid;
            justify-content: center;
            align-content: center;
            grid-template-rows: auto;
            grid-row-gap: 15px;
            grid-column-gap: 10px;
            padding: 20px 0;
        }

        .thumb-wrap {
            display: inline;
            cursor: pointer;
        }

        .thumb {
            display: block;
            margin: .4em;
            width: 100%;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            opacity: 1;
            transition: all .2s ease-in-out;
        }

        .thumb:hover {
            opacity: .8;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, .5);
        }

        .thumb-info {
            display: inline-block;
            height: 100%;
            width: 100%;
            padding: .4em;
        }

        .thumb-title {
            color: #f5f5f5;
            margin: 0;
            font-size: 1.2em;
        }

        .thumb-user {
            color: #7e7e7e;
            display: block;
            margin: 0;
            font-size: .9em;
        }

        .thumb-text {
            color: #7e7e7e;
            display: inline-block;
            margin: 0;
            font-size: .8em;
        }

        .video-sec-title {
            font-weight: bolder;
            font-size: 1.4em;
            color: #f5f5f5;
            margin: 5px 0 10px 10px;
        }

        .video-showmore {
            font-weight: bold;
            font-variant: all-petite-caps;
            display: block;
            color: #7e7e7e;
            padding: 10px;
            font-size: 1.2em;
        }

        @media only screen and (max-width: 1456px) {
            .video-sec-middle {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media only screen and (max-width: 1024px) {
            .video-sec-middle {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media only screen and (max-width: 756px) {
            .video-sec-middle {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media only screen and (max-width: 496px) {
            .video-sec-middle {
                grid-template-columns: repeat(1, 1fr);
            }
        }
    </style>

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
                                    <h3 class="subheading">All speakers for ORCA's Global Conference on
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

    <!--SPEAKERS-->
    <section>
        <article class="video-sec-wrap">
            <div class="video-sec">
                <ul class="video-sec-middle" id="vid-grid">
                    <?php $speakerData = App\Models\Gcns\Speaker::orderBy('id', 'asc')->get(); ?>
                    @foreach ($speakerData as $speaker)
                        <li class="thumb-wrap"><a href="{{ url('pages/gcns2023/speaker/') }}/{{ $speaker->id }}">
                                <img class="thumb allspeakers" src="{{ url('images/event/speaker/' . $speaker->image) }}"
                                    alt="{{ $speaker->name }}">
                                <div class="thumb-info">
                                    <h3 class="slidername">{{ $speaker->name }}</h3>
                                    <p class="slidername">{{ $speaker->designation }}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </article>
    </section>
@endsection
