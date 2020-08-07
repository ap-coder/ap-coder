<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Short</th>
        <th>Demo Request Link</th>
        <th>Demo Form</th>
        <th>Slug</th>
        <th>Type</th>
        <th>Chicklet</th>
        <th>Published</th>
        <th>Meta Title</th>
        <th>Meta Description</th>
        <th>Facebook Title</th>
        <th>Facebook Desc</th>
        <th>Twitter Post Title</th>
        <th>Twitter Post Description</th>
        <th>Status Id</th>
        <th>Industries Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $products)
            <tr>
                <td>{{ $products->name }}</td>
            <td>{{ $products->description }}</td>
            <td>{{ $products->short }}</td>
            <td>{{ $products->demo_request_link }}</td>
            <td>{{ $products->demo_form }}</td>
            <td>{{ $products->slug }}</td>
            <td>{{ $products->type }}</td>
            <td>{{ $products->chicklet }}</td>
            <td>{{ $products->published }}</td>
            <td>{{ $products->meta_title }}</td>
            <td>{{ $products->meta_description }}</td>
            <td>{{ $products->facebook_title }}</td>
            <td>{{ $products->facebook_desc }}</td>
            <td>{{ $products->twitter_post_title }}</td>
            <td>{{ $products->twitter_post_description }}</td>
            <td>{{ $products->status_id }}</td>
            <td>{{ $products->industries_id }}</td>
                <td>
                    {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$products->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('products.edit', [$products->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
