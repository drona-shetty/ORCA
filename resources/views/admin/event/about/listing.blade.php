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
                    <h5 class="card-title">Add About</h5>
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
                <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{url('yn-admin/event/about')}}">
                    @csrf
                    <input type="hidden" name="gcns" value="2024">
                    <div class="col-12 col-md-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="#image" class="form-label">Image/Video(Optional)</label>
                        <input class="form-control" type="file" id="image" name="image" accept=".jpg, .jpeg, .png, .mp4">
                        <span style="font-size:12px;color:blue">*Please use these file formats only .jpeg, .png, .jpg, .mp4</span>
                    </div>
                    <div class="col-12">
                        <label for="desc" class="form-label">Description(Optional)</label>
                        <textarea id="desc" name="desc" class="form-control" style="height: 100px"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="#content" class="form-label">Content(Optional)</label>
                        <textarea id="content" name="content" class="tinymce-editor form-control"></textarea>
                    </div>
                    <div class="text-start">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="card-title">About</h5>
                </div>
                
                <table class="table table-responsive align-middle">
                    <thead>
                        <tr>
                            <!-- <th>#</th> -->
                            <th>id</th>
                            <th>Title</th>
                            <th>Desciption</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                            <tr>
                                <td width="10%"> {{ $about->id }} </td>
                                <td width="20%"> {{ $about->title }} </td>
                                <td width="50%"> {{ $about->desc }} </td>
                                <td width="20%">
                                    <a href="{{ url('yn-admin/event/about') }}/{{ $about->id }}/edit" class="btn btn-primary rounded-pill btn-sm">Edit</a>
                                    <button data-bs-toggle="modal" data-id="{{$about->id}}" data-aurl="{{ url('check-category') }}" data-url="{{ url('yn-admin/event/about/'.$about['id']) }}"
                                    data-bs-target="#category_delete_modal" class="btn btn-danger rounded-pill btn-sm">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
@include('admin.category.delete')
@endsection