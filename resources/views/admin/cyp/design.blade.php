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
                    <h5 class="card-title">Design CYP HomePage</h5>
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
                <form class="row g-3" id="article" enctype="multipart/form-data" method="POST" action="{{url('yn-admin/cyp_banner')}}">
                    @csrf
                    <div class="col-12 col-md-6">
                        <label for="#cypBanner_multiSelect" class="form-label">Tags</label>
                        <select class="form-select" id="cypBanner_multiSelect" name="articleId[]" required="" multiple>
                        <?php $ids = unserialize(App\Http\Controllers\DashboardController​::get_meta('cyp_banner'));?>
                            @foreach($articles as $article)
                                @if($ids !=null && in_array(strval($article->id), $ids))
                                <option value="{{$article->id}}" selected>{{$article->title}}</option>
                                @else
                                <option value="{{$article->id}}">{{$article->title}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
@endsection