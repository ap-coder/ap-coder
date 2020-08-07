<div class="table-responsive">
    <table class="table" id="testimonials-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Body</th>
        <th>Website</th>
        <th>Rating</th>
        <th>Published</th>
        <th>Status Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($testimonials as $testimonials)
            <tr>
                <td>{{ $testimonials->title }}</td>
            <td>{{ $testimonials->body }}</td>
            <td>{{ $testimonials->website }}</td>
            <td>{{ $testimonials->rating }}</td>
            <td>{{ $testimonials->published }}</td>
            <td>{{ $testimonials->status_id }}</td>
                <td>
                    {!! Form::open(['route' => ['testimonials.destroy', $testimonials->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('testimonials.show', [$testimonials->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('testimonials.edit', [$testimonials->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
