<table class="table table-responsive align-middle">
    <thead>
        <tr>
            <th>ID</th>
            <th>Schdeule</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Occupation</th>
            <th>Organization</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registerations as $registeration)
            <tr>
                <td> {{ $registeration->id }} </td>
                <?php
                $schedule = 'Session ' . implode(', ', json_decode($registeration->schedule_id));
                ?>
                <td> {{ $schedule }}</td>
                <td> {{ $registeration->fname }} {{ $registeration->lname }}</td>
                <td> {{ $registeration->email }}</td>
                <td> {{ $registeration->phonenumber }}</td>
                <td> {{ $registeration->occupation }} </td>
                <td> {{ $registeration->organization }} </td>
                <td>
                    <button data-bs-toggle="modal" data-id="{{ $registeration->id }}"
                        data-aurl="{{ url('check-category') }}"
                        data-url="{{ url('yn-admin/gcns23/registeration/' . $registeration->id) }}"
                        data-bs-target="#category_delete_modal" class="btn btn-danger rounded-pill btn-sm">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $registerations->links() }}