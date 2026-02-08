@extends('admin')
@section('title','ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')
<!-- Start #main -->
<main id="main" class="main">
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="col-6">
                        <h5 class="card-title">Registration list</h5>
                    </div>
                    <div class="col-6" style="text-align: right;">
                        <a href="{{ url('yn-admin/gcns/download-csv/2025') }}" class="btn btn-primary">Download CSV</a>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-body">                
                @include('admin.gcns.registeration.partial')
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
@include('admin.category.delete')
@endsection