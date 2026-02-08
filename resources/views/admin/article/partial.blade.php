<table class="table table-responsive align-middle">
    <thead>
        <tr>
            <th>#</th>
            <th>
                Title
            </th>
            <th>
                Author
            </th>
            <th>Views</th>
            <th>Downloads</th>
            <th>Category</th>
            <th>Status</th>
            <th>Created</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $count = $articles->firstItem(); ?>
        @foreach ($articles as $article)
            <?php $author = App\Models\User::select('name')
                ->where('id', unserialize($article->author_id)[0])
                ->first(); ?>
            <?php $author_meta = App\Models\UserMeta::select('avatar')
                ->where('user_id', unserialize($article->author_id)[0])
                ->first(); ?>
            <?php $category = App\Models\Category::where('id', $article->category)->first(); ?>
            <tr>
                <th><?= $count ?></th>
                <td> {{ $article->title }} </td>
                <td>
                    <img width="40" height="40" class="rounded-circle"
                        src="{{ URL::asset('images/author/' . $author_meta->avatar) }}" alt="">
                    {{ $author->name }}
                </td>
                <td>{{ $article->views }}</td>
                <td>{{ $article->downloads }}</td>
                <td>
                    {{ $category->category }}
                </td>
                <td>
                    <span class="badge rounded-pill text-bg-info text-white">{{ $article->status }}</span>
                </td>
                <td>
                    <?= date_format(date_create($article->created_at), 'd M, Y') ?>
                </td>
                <td>
                    @if ($article->status == 'approved')
                        <a href="{{ url('/article') }}/{{ $article->id }}/{{ $article->slug }}"
                            class="btn btn-primary rounded-pill btn-sm" target="_blank">View</a>
                    @else
                        <a href="{{ url('/article') }}/{{ $article->id }}/{{ $article->slug }}"
                            class="btn btn-primary rounded-pill btn-sm" target="_blank">Preview</a>
                    @endif
                    <a href="{{ url('yn-admin/articles') }}/{{ $article->id }}/edit"
                        class="btn btn-primary rounded-pill btn-sm">Edit</a>
                    <button data-bs-toggle="modal" data-url="{{ url('yn-admin/articles/' . $article['id']) }}"
                        data-bs-target="#article_delete_modal"
                        class="btn btn-danger rounded-pill btn-sm">Delete</button>
                </td>
            </tr>
            <?php $count++; ?>
        @endforeach
    </tbody>
</table>
{{ $articles->links() }}
