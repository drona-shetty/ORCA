@extends('admin')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')
    <!-- Start #main -->
    <main id="main" class="main">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title">Orcafiles</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>Embed</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1; ?>
                            @foreach ($orcafiles as $orcafile)
                                <tr>
                                    <th><?= $count ?></th>
                                    <td> {{ $orcafile->title }} </td>
                                    <td>
                                        {{ $orcafile->description }}
                                    </td>
                                    <td>
                                        {{ $orcafile->embed_code }}
                                    </td>
                                    <td>
                                        <?= date_format(date_create($orcafile->created_at), 'd M, Y') ?>
                                    </td>
                                    <td>
                                        <a href="{{ url('yn-admin/orcafiles') }}/{{ $orcafile->id }}/edit"
                                            class="btn btn-primary rounded-pill btn-sm">Edit</a>
                                        <button data-bs-toggle="modal"
                                            data-url="{{ url('yn-admin/orcafiles/' . $orcafile->id) }}"
                                            data-bs-target="#orcafile_delete_modal"
                                            class="btn btn-danger rounded-pill btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <?php $count++; ?>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
    <!-- Modals -->
    @include('admin.orcafile.delete')
@endsection
