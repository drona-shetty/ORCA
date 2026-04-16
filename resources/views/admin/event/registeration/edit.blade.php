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
                    <h5 class="card-title">Edit Schedule</h5>
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
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{url('yn-admin/event/schedule/'.$schedule->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="col-12 col-md-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$schedule->title}}">
                    </div>
                    <div class="col-12 col-md-6 th_input_content">
                        <label for="scheduleDate" class="form-label">Date</label>
                        <input type="date" value="{{$schedule->scheduleDate}}" class="form-control" name="scheduleDate" id="scheduleDate">
                    </div>
                    <div class="text-start">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>

                <section class="section" style="margin-top: 50px">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="col-6">
                                    <h5 class="card-title">Speakers</h5>
                                </div>
                                <div class="col-6" style="text-align: right;">
                                    <a href="{{ url('yn-admin/event/schedule') }}/{{ $schedule->id }}/sessionAdd" type="button"  class="btn btn-primary ">Add Session</a>
                                </div>
                            </div>
                            <table class="table table-responsive align-middle">
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Timing</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count = 1;?>
                                    @if(count($scheduleSession) < 1)
                                        <tr><td colspan=4 style="text-align:center">There are no sessions available on this Day.</td></tr>
                                    @endif
                                    @foreach ($scheduleSession as $sessionDetail)
                                        <tr>
                                            <!-- <th><?=$count?></th> -->
                                            <td> {{ $sessionDetail->id }} </td>
                                            <td> {{ $sessionDetail->title }}</td>
                                            <td> {{ $sessionDetail->startTime }} - {{ $sessionDetail->endTime }}</td>
                                            <td>
                                                <a href="{{ url('yn-admin/event/schedule') }}/{{ $schedule->id }}/{{$sessionDetail->id}}/sessionEdit" class="btn btn-primary rounded-pill btn-sm">Edit</a>
                                                
                                                <!-- <button data-bs-toggle="modal" data-id="{{$schedule->id}}" data-aurl="{{ url('check-category') }}" data-url="{{ url('yn-admin/event/schedule/'.$schedule['id']) }}"
                                                data-bs-target="#category_delete_modal" class="btn btn-danger rounded-pill btn-sm">Delete</button> -->

                                                <button data-bs-toggle="modal" data-id="{{$sessionDetail->id}}" data-aurl="{{ url('check-category') }}" data-url="{{ url('yn-admin/event/schedule/'.$schedule['id']).'/'.$sessionDetail->id }}/sessionDestroy" data-bs-target="#category_delete_modal" class="btn btn-danger rounded-pill btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                    <?php $count++;?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
@include('admin.category.delete')
@endsection