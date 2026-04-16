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
                    <h5 class="card-title">Edit EventType</h5>
                </div>
                <form class="row g-3" method="POST" action="{{url('yn-admin/cyp_eventTypes/'.$event_type->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="col-12 col-md-6">
                        <label for="inputNanme4" class="form-label">Category</label>
                        <input type="text" class="form-control" id="inputNanme4" name="event_type" value="{{$event_type->event_type}}">
                    </div>
                    <input type="hidden" name="id" value="{{$event_type->id}}">
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