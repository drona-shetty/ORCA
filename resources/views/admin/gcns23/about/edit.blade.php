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
                    <h5 class="card-title">Edit About</h5>
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
                <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{url('yn-admin/gcns23/about/'.$about->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="col-12 col-md-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$about->title}}">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="#image" class="form-label">Image</label>
                        <input class="form-control" type="file" id="image" name="image" accept=".jpg, .jpeg, .png">
                        <span style="font-size:12px;color:blue">*Please use these file formats only .jpeg, .png, .jpg</span>
                        @if($about->image != null)
                            <img class="w-100" src="{{url('images/event/media/'.$about->image)}}" alt="{{ $about->image }}">
                        @endif
                    </div>
                    <div class="col-12">
                        <label for="desc" class="form-label">Description(Optional)</label>
                        <textarea id="desc" name="desc" class="form-control" style="height: 100px">{{$about->desc}}</textarea>
                    </div>
                    <div class="col-12">
                        <label for="#content" class="form-label">Content(Optional)</label>
                        <textarea id="content" name="content" class="tinymce-editor form-control">{{$about->content}}</textarea>
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