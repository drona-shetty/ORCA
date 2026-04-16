<table class="table table-responsive align-middle">
    <thead>
        <tr>
            <th>id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($speakers as $speaker)
            <tr>
                <td> {{ $speaker->id }} </td>
                <td>
                    @if ($speaker->image != null)
                        <img class="" style="height:100px;width:100px;"
                            src="{{ url('images/event/speaker/' . $speaker->image) }}" alt="">
                    @else
                        {{ '-' }}
                    @endif
                </td>
                <td> {{ $speaker->name }}</td>
                <td> {{ $speaker->designation }}</td>
                <td>
                    <a href="{{ url('yn-admin/gcns23/speaker') }}/{{ $speaker->id }}/edit"
                        class="btn btn-primary rounded-pill btn-sm">Edit</a>
                    <button data-bs-toggle="modal" data-id="{{ $speaker->id }}" data-aurl="{{ url('check-category') }}"
                        data-url="{{ url('yn-admin/gcns23/speaker/' . $speaker->id) }}"
                        data-bs-target="#category_delete_modal"
                        class="btn btn-danger rounded-pill btn-sm">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $speakers->links() }}