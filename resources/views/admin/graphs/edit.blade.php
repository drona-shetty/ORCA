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
                    <h5 class="card-title">Edit Graph</h5>
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
                <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{url('yn-admin/graphsPage/'.$graph->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="col-12 col-md-6">
                        <label for="sequence" class="form-label">Sequence No</label>
                        <input type="number" class="form-control" id="sequence" name="sequence" value="{{$graph->sequence_no}}">
                    </div>
                    <div class="col-12 col-md-6 th_input_content">
                        <label for="#formFile1" class="form-label">Image</label>
                        <input accept="image/*" class="form-control" type="file" id="formFile1" name="image">
                        <img class="w-100" src="{{url('images/graph/'.$graph->image)}}" alt="">
                    </div>
                    <div class="col-12">
                        <label for="content" class="form-label">Content</label>
                        <textarea id="content" name="content" class="form-control" style="height: 100px">{{$graph->content}}</textarea>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$graph->name}}">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" value="{{$graph->designation}}">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="facebook" class="form-label">Facebook(Link)(Optional)</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{$graph->facebook}}">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="twitter" class="form-label">Twitter(Link)(Optional)</label>
                        <input type="text" class="form-control" id="twitter" name="twitter" value="{{$graph->twitter}}">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="instagram" class="form-label">Author Publication(Link)(Required)</label>
                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{$graph->instagram}}">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="linkedin" class="form-label">Linkedin(Link)(Optional)</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$graph->linkedin}}">
                    </div>
                    <div class="text-start">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
@endsection