<table class="table table-responsive align-middle">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Occupation</th>
            <th>Organization</th>
            <th>City</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registerations as $key => $registeration)
            <tr>
                <td> {{ $registerations->firstItem() + $key }} </td>
                <td> {{ $registeration->fname }} {{ $registeration->lname }}</td>
                <td> {{ $registeration->email }}</td>
                <td> {{ $registeration->phonenumber }}</td>
                <td> {{ $registeration->occupation }} </td>
                <td> {{ $registeration->organization }} </td>
                <td> {{ $registeration->city }} </td>
                <td> {{ $registeration->description }} </td>
                <td>
                    <button data-bs-toggle="modal" data-id="{{ $registeration->id }}"
                        data-aurl="{{ url('check-category') }}"
                        data-url="{{ url('yn-admin/gcns/registeration/' . $registeration->id) }}"
                        data-bs-target="#category_delete_modal" class="btn btn-danger rounded-pill btn-sm">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $registerations->links() }}