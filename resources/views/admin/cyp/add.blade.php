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
                    <h5 class="card-title">Add CYP Event</h5>
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
                <form class="row g-3" id="article" enctype="multipart/form-data" method="POST" action="{{url('yn-admin/cyp')}}">
                    @csrf
                    <div class="col-12 col-md-6">
                        <label for="#event" class="form-label">Event</label>
                        <input type="text" class="form-control" id="event" name="event">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="#cyp_multiSelect" class="form-label">Tags</label>
                        <select class="form-select" id="cyp_multiSelect" name="event_type[]" required="" multiple>
                            @foreach($event_types as $event_type)
                            <option value="{{$event_type->id}}">{{$event_type->event_type}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="#venue" class="form-label">Venue</label>
                        <input type="text" class="form-control" id="venue" name="venue">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="#date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="#description" class="form-label">Description</label>
                        <textarea id="description" name="description" class="form-control" style="height: 100px"></textarea>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="#banner" class="form-label">Banner</label>
                        <input accept="image/*" type="file" class="form-control" id="banner" name="banner">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
@endsection