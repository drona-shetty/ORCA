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
                    <h5 class="card-title">Add Convenor</h5>
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
                <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{url('yn-admin/event/convenors')}}">
                    @csrf
                    <input type="hidden" name="gcns" value="2024">
                    <div class="col-12 col-md-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="col-12 col-md-6 th_input_content">
                        <label for="#formFile1" class="form-label">Logo</label>
                        <input accept="image/*" class="form-control" type="file" id="formFile1" name="logo">
                    </div>
                    <div class="col-12">
                        <label for="content" class="form-label">Content</label>
                        <textarea id="content" name="content" class="form-control" style="height: 100px"></textarea>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" id="link" name="link">
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
                    <h5 class="card-title">Convenors</h5>
                </div>                
                <table class="table table-responsive align-middle">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Logo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($convenors as $convenor)
                            <tr>
                                <td> {{ $convenor->id }} </td>
                                <td> {{ $convenor->title }} </td>
                                <td>
                                    @if($convenor->logo != null)
                                        <img width="100" src="{{url('images/event/convenor/'.$convenor->logo)}}" alt="">
                                    @else
                                        {{'-'}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('yn-admin/gcns/convenors') }}/{{ $convenor->id }}/edit" class="btn btn-primary rounded-pill btn-sm">Edit</a>
                                    <button data-bs-toggle="modal" data-id="{{$convenor->id}}" data-aurl="{{ url('check-category') }}" data-url="{{ url('yn-admin/gcns/convenors/'.$convenor->id) }}"
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