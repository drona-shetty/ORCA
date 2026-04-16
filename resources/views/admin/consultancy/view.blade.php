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
                    <h5 class="card-title">Project Details</h5>
                </div>
                <p><strong>Name:</strong> {{ $project->name }}</p>
                <p><strong>Organisation:</strong> {{ $project->organisation }}</p>
                <p><strong>Email:</strong> {{ $project->email }}</p>
                <p><strong>Mobile:</strong> {{ $project->mobile }}</p>
                <p><strong>Product:</strong> {{ $project->product }}</p>
                <p><strong>Details:</strong> {{ $project->project_details }}</p>
                <p><strong>Submitted:</strong> {{ date_format(date_create($project->created_at), 'd F, Y') }}</p>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
@endsection