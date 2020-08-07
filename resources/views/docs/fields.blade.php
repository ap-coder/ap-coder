<!-- Set Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('set_name', 'Set Name:') !!}
    {!! Form::text('set_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Industry Field -->
<div class="form-group col-sm-6">
    {!! Form::label('industry', 'Industry:') !!}
    {!! Form::text('industry', null, ['class' => 'form-control']) !!}
</div>

<!-- Published Field -->
<div class="form-group col-sm-6">
    {!! Form::label('published', 'Published:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('published', 0) !!}
        {!! Form::checkbox('published', '1', null) !!}
    </label>
</div>


<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Config Catalog Filter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('config_catalog_filter', 'Config Catalog Filter:') !!}
    {!! Form::text('config_catalog_filter', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status Id:') !!}
    {!! Form::number('status_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('docs.index') }}" class="btn btn-default">Cancel</a>
</div>
