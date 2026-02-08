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
                    <h5 class="card-title">Add Schedule</h5>
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
                <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{url('yn-admin/event/schedule')}}">
                    @csrf
                    <input type="hidden" name="gcns" value="2024">
                    <div class="col-12 col-md-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="scheduleDate" class="form-label">Date</label>
                        <input type="date" class="form-control" name="scheduleDate" id="scheduleDate">
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
                    <h5 class="card-title">Schedules</h5>
                </div>
                
                <table class="table table-responsive align-middle">
                    <thead>
                        <tr>
                            <!-- <th>#</th> -->
                            <th>id</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;?>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <!-- <th><?=$count?></th> -->
                                <td> {{ $schedule->id }} </td>
                                <td> {{ $schedule->title }}</td>
                                <td> {{ date('F d Y', strtotime($schedule->scheduleDate)) }}</td>
                                <td>
                                    <a href="{{ url('yn-admin/event/schedule') }}/{{ $schedule->id }}/edit" class="btn btn-primary rounded-pill btn-sm">Edit</a>
                                    <button data-bs-toggle="modal" data-id="{{$schedule->id}}" data-aurl="{{ url('check-category') }}" data-url="{{ url('yn-admin/event/schedule/'.$schedule['id']) }}"
                                    data-bs-target="#category_delete_modal" class="btn btn-danger rounded-pill btn-sm">Delete</button>
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
@include('admin.category.delete')
@endsection