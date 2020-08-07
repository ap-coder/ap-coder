<div class="table-responsive">
    <table class="table" id="whitePapers-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($whitePapers as $whitePaper)
            <tr>
                
                <td>
                    {!! Form::open(['route' => ['whitePapers.destroy', $whitePaper->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('whitePapers.show', [$whitePaper->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('whitePapers.edit', [$whitePaper->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
