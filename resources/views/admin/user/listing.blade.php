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
                        <h5 class="card-title">Authors</h5>
                        <input type="text" id="search" placeholder="Search Authors..." class="form-control ms-auto" style="width: 280px;">
                    </div>
                    <div id="user-list">
                        @include('admin.user.partial')
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            function fetchUsers(query = '', page = 1) {
                $.ajax({
                    url: "{{ route('authors.search') }}",
                    type: "GET",
                    data: {
                        query: query,
                        page: page
                    },
                    success: function(data) {
                        $('#user-list').html(data);
                    }
                });
            }

            $('#search').on('keyup', function() {
                let query = $(this).val();
                fetchUsers(query);
            });

            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                let query = $('#search').val();
                fetchUsers(query, page);
            });
        });
    </script>
@endsection
