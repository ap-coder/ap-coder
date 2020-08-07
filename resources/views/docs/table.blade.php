<div class="table-responsive">
    <table class="table" id="docs-table">
        <thead>
            <tr>
                <th>Set Name</th>
        <th>Industry</th>
        <th>Published</th>
        <th>Slug</th>
        <th>Config Catalog Filter</th>
        <th>Status Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($docs as $doc)
            <tr>
                <td>{{ $doc->set_name }}</td>
            <td>{{ $doc->industry }}</td>
            <td>{{ $doc->published }}</td>
            <td>{{ $doc->slug }}</td>
            <td>{{ $doc->config_catalog_filter }}</td>
            <td>{{ $doc->status_id }}</td>
                <td>
                    {!! Form::open(['route' => ['docs.destroy', $doc->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('docs.show', [$doc->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('docs.edit', [$doc->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
