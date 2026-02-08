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
                    <h5 class="card-title">Add Graph</h5>
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
                <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{url('yn-admin/graphsPage')}}">
                    @csrf
                    <div class="col-12 col-md-6">
                        <label for="sequence" class="form-label">Sequence No</label>
                        <input type="number" class="form-control" id="sequence" name="sequence">
                    </div>
                    <div class="col-12 col-md-6 th_input_content">
                        <label for="#formFile1" class="form-label">Image</label>
                        <input accept="image/*" class="form-control" type="file" id="formFile1" name="image">
                    </div>
                    <div class="col-12">
                        <label for="content" class="form-label">Content</label>
                        <textarea id="content" name="content" class="form-control" style="height: 100px"></textarea>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="facebook" class="form-label">Facebook(Link)(Optional)</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" value="#">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="twitter" class="form-label">Twitter(Link)(Optional)</label>
                        <input type="text" class="form-control" id="twitter" name="twitter" value="#">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="instagram" class="form-label">Author Publication(Link)(Required)</label>
                        <input type="text" class="form-control" id="instagram" name="instagram" value="#">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="linkedin" class="form-label">Linkedin(Link)(Optional)</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="#">
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
                    <h5 class="card-title">Graphs</h5>
                </div>
                
                <table class="table table-responsive align-middle">
                    <thead>
                        <tr>
                            <!-- <th>#</th> -->
                            <th>Sequence</th>
                            <th>Image</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;?>
                        @foreach ($graphs as $graph)
                            <tr>
                                <!-- <th><?=$count?></th> -->
                                <td> {{ $graph->sequence_no }} </td>
                                <td>
                                    @if($graph->image != null)
                                        <img class="" style="height:100px;width:100px;" src="{{url('images/graph/'.$graph->image)}}" alt="">
                                    @else
                                        {{'-'}}
                                    @endif
                                </td>
                                <td>
                                    @if($graph->content != null)
                                        {{ $graph->content }}
                                    @else
                                        {{'-'}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('yn-admin/graphsPage') }}/{{ $graph->id }}/edit" class="btn btn-primary rounded-pill btn-sm">Edit</a>
                                    <button data-bs-toggle="modal" data-id="{{$graph->id}}" data-aurl="{{ url('check-category') }}" data-url="{{ url('yn-admin/graphsPage/'.$graph['id']) }}"
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