<!-- Set Name Field -->
<div class="form-group">
    {!! Form::label('set_name', 'Set Name:') !!}
    <p>{{ $doc->set_name }}</p>
</div>

<!-- Industry Field -->
<div class="form-group">
    {!! Form::label('industry', 'Industry:') !!}
    <p>{{ $doc->industry }}</p>
</div>

<!-- Published Field -->
<div class="form-group">
    {!! Form::label('published', 'Published:') !!}
    <p>{{ $doc->published }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $doc->slug }}</p>
</div>

<!-- Config Catalog Filter Field -->
<div class="form-group">
    {!! Form::label('config_catalog_filter', 'Config Catalog Filter:') !!}
    <p>{{ $doc->config_catalog_filter }}</p>
</div>

<!-- Status Id Field -->
<div class="form-group">
    {!! Form::label('status_id', 'Status Id:') !!}
    <p>{{ $doc->status_id }}</p>
</div>

