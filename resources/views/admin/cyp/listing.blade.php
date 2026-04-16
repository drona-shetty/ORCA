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
                    <h5 class="card-title">CYP Events</h5>
                </div>
                <table class="table table-responsive align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>
                                Event
                            </th>
                            <th>
                                Venue
                            </th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;?>
                        @foreach ($cypEvents as $cyp)
                            <tr>
                                <th><?=$count?></th>
                                <td> {{ $cyp->event }} </td>
                                <td>{{ $cyp->venue }}</td>
                                <td>
                                    <?=date_format(date_create($cyp->date), "d M, Y")?>
                                </td>
                                <td>
                                    <?php $et_ids = unserialize($cyp->event_type);
                                    if($et_ids)
                                    foreach($et_ids as $id) {
                                        $event_type = App\Models\CYPEventType::where('id', (int)$id)->first();
                                        echo $event_type->event_type;
                                        echo(', ');
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="{{ url('yn-admin/cyp') }}/{{ $cyp->id }}/edit"
                                        class="btn btn-primary rounded-pill btn-sm">Edit</a>
                                    <button data-bs-toggle="modal" data-url="{{ url('yn-admin/cyp/'.$cyp->id) }}"
                                        data-bs-target="#cypEvent_delete_modal" class="btn btn-danger rounded-pill btn-sm">Delete</button>
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
<!-- Modals -->
@include('admin.cyp.delete')
@endsection