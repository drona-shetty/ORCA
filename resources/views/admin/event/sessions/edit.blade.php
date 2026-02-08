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
                        <h5 class="card-title">Edit Session for {{$schedule->title}}</h5>
                    </div>
                    <div class="col-6" style="text-align: right;">
                        <a href="{{ url('yn-admin/event/schedule') }}/{{ $schedule->id }}/edit" type="button"  class="btn btn-primary ">Back</a>
                    </div>
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
                <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{ url('yn-admin/event/schedule') }}/{{ $schedule->id }}/{{$sessionData->id}}/sessionUpdate">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="{{$schedule->id}}" id="scheduleId" name="scheduleId">
                    <div class="col-12 col-md-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" value="{{$sessionData->title}}" name="title">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="startTime" class="form-label">Start Time</label>
                        <input type="time" class="form-control" value="{{$sessionData->startTime}}" id="startTime" name="startTime">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="endTime" class="form-label">End Time</label>
                        <input type="time" class="form-control" value="{{$sessionData->endTime}}" id="endTime" name="endTime">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="sessionTag" class="form-label">Tag</label>
                        <input type="text" class="form-control" value="{{$sessionData->sessionTag}}" id="sessionTag" name="sessionTag">
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" name="description" class="tinymce-editor form-control" style="height: 100px">{{$sessionData->description}}</textarea>
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