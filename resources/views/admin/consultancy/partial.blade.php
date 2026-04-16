<table class="table table-responsive align-middle">
    <thead>
        <tr>
            <th>#</th>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Organisation
            </th>
            <th>
                Added
            </th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $count = $projects->firstItem(); ?>
        @foreach ($projects as $project)
            @if ($project != null)
                <tr>
                    <th data-id="{{ $project->id }}"><?= $count ?></th>
                    <td>
                        {{ $project->name }}
                    </td>
                    <td>
                        {{ $project->email }}
                    </td>
                    <td>
                        {{ $project->organisation }}
                    </td>
                    <td>
                        <?= date_format(date_create($project->created_at), 'd F, Y') ?>
                    </td>
                    <td>
                        <a href="{{ route('consultancy.view', $project->id) }}" class="btn btn-primary rounded-pill btn-sm"
                            target="_blank">View</a>
                    </td>
                </tr>
                <?php $count++; ?>
            @endif
        @endforeach
    </tbody>
</table>
{{ $projects->links() }}
