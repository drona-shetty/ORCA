@extends('admin')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')
    <!-- Start #main -->
    <main id="main" class="main">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title">Add Orcafile</h5>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="row g-3" id="orcafile" enctype="multipart/form-data" method="POST"
                        action="{{ url('yn-admin/orcafiles') }}">
                        @csrf
                        <div class="col-12 col-md-6">
                            <label for="#title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="#description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control" style="height: 100px"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="#embed_code" class="form-label">Embed Code</label>
                            <input type="text" class="form-control" id="embed_code" name="embed_code">
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="#date" class="form-label">Date Added</label>
                            <input type="date" class="form-control" id="date" name="created_at">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
