@extends('admin')
@section('title', 'Consultancies | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')
    <!-- Start #main -->
    <main id="main" class="main">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title">Consultancies</h5>
                    </div>
                    <div id="consultancy-list">
                        @include('admin.consultancy.partial')
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
