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
                    <h5 class="card-title">Add Media Files</h5>
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
                <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{url('yn-admin/event/media')}}">
                    @csrf
                    <input type="hidden" name="gcns" value="2024">
                    <div class="col-12 col-md-6">
                        <label for="sequence" class="form-label">Sequence No</label>
                        <input type="number" class="form-control" id="sequence" name="sequence">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="#formFile1" class="form-label">File</label>
                        <input class="form-control" type="file" id="formFile1" name="fileToUpload" accept=".jpg, .jpeg, .png">
                        <span style="font-size:12px;color:blue">*Please use these file formats only jpeg,png,jpg</span>
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
                    <h5 class="card-title">Merdia Files</h5>
                </div>
                
                <table class="table table-responsive align-middle">
                    <thead>
                        <tr>
                            <th>Sequence</th>
                            <th>Files</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mediaFiles as $media)
                            <tr>
                                <td> {{ $media['sequence_no'] }} </td>
                                <td>
                                    <img style="width:100px;" src="{{url('images/event/media/'.$media['files'])}}" alt="">
                                </td>
                                <td>
                                    <a href="{{ url('yn-admin/event/media') }}/{{ $media['id'] }}/edit" class="btn btn-primary rounded-pill btn-sm">Edit</a>
                                    <button data-bs-toggle="modal" data-id="{{$media['id']}}" data-aurl="{{ url('check-category') }}" data-url="{{ url('yn-admin/event/media/'.$media['id']) }}"
                                    data-bs-target="#category_delete_modal" class="btn btn-danger rounded-pill btn-sm">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $mediaFiles->links() }}
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
@include('admin.category.delete')
@endsection

<script>
    function copyText() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
    }
</script>
