@extends('gcns23.main')
@section('content')
    <style>
        #load-more {
            margin-inline: auto;
            display: block;
        }
    </style>
    <!--BANNER-->
    <section>
        <div class="lgx-banner"
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ URL::asset('gcns25/images/Image_GCNS Speaker Section.jpg') }}') top center no-repeat;background-size: cover;">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">GCNS 2023 Media</h2>
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
        <section class="media" id="media" style="height:auto">
            <div class="black-wrapper">
                <div class="media-grid" id="media-grid">
                    @php
                        $media_files = App\Models\Gcns\Media::orderBy('sequence_no', 'asc')
                            ->paginate(6);
                    @endphp
                    @include('gcns23.partials.media', ['media_files' => $media_files])
                </div>
                @if ($media_files->hasMorePages())
                    <button id="load-more" data-page="{{ $media_files->currentPage() + 1 }}"
                        class="rdf-button-1 editions w-button">Load More</button>
                @endif
            </div>
        </section>
    </main>
@endsection
