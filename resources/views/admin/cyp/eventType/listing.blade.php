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
                    <h5 class="card-title">Add EventType</h5>
                </div>
                <form class="row g-3" method="POST" action="{{url('yn-admin/cyp_eventTypes')}}">
                    @csrf
                    <div class="col-12 col-md-6">
                        <label for="inputNanme4" class="form-label">Event Type</label>
                        <input type="text" class="form-control" id="inputNanme4" name="event_type">
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
                    <h5 class="card-title">Event Types</h5>
                </div>
                
                <table class="table table-responsive align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>
                                Type
                            </th>
                            <th>
                                Added
                            </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;?>
                        @foreach ($event_types as $event_type)
                            <tr>
                                <th><?=$count?></th>
                                <td> {{ $event_type->event_type }} </td>
                                <td>
                                    <?=date_format(date_create($event_type->created_at), "d M, Y")?>
                                </td>
                                <td>
                                    <a href="{{ url('yn-admin/cyp_eventTypes') }}/{{ $event_type->id }}/edit"
                                        class="btn btn-primary rounded-pill btn-sm">Edit</a>
                                    <form action="{{url('yn-admin/cyp_eventTypes/'.$event_type->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$event_type->id}}">
                                        <button type="submit" class="btn btn-danger rounded-pill btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php $count++;?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
@endsection