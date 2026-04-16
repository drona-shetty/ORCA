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
                    <h5 class="card-title">CYP Volunteers</h5>
                </div>
                <table class="table table-responsive align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Mobile
                            </th>
                            <th>
                                Age
                            </th>
                            <th>
                                Event
                            </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;?>
                        @foreach ($volunteers as $volunteer)
                            <tr>
                                <th><?=$count?></th>
                                <td> {{ $volunteer->name }} </td>
                                <td>{{ $volunteer->email }}</td>
                                <td>
                                    {{ $volunteer->mobile }}
                                </td>
                                <td>
                                    {{ $volunteer->age }}
                                </td>
                                <td>
                                    <?php $event = App\Models\CYPEvent::where('id', $voulnteer->event_id)->first(); ?>
                                    {{ $event->event }}
                                </td>
                                <td>
                                    <form action="{{url('yn-admin/cyp_volunteers/'.$volunteer->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$volunteer->id}}">
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