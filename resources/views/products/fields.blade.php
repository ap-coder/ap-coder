<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Short Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short', 'Short:') !!}
    {!! Form::textarea('short', null, ['class' => 'form-control']) !!}
</div>

<!-- Demo Request Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('demo_request_link', 'Demo Request Link:') !!}
    {!! Form::text('demo_request_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Demo Form Field -->
<div class="form-group col-sm-6">
    {!! Form::label('demo_form', 'Demo Form:') !!}
    {!! Form::text('demo_form', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Chicklet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chicklet', 'Chicklet:') !!}
    {!! Form::text('chicklet', null, ['class' => 'form-control']) !!}
</div>

<!-- Published Field -->
<div class="form-group col-sm-6">
    {!! Form::label('published', 'Published:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('published', 0) !!}
        {!! Form::checkbox('published', '1', null) !!}
    </label>
</div>


<!-- Meta Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_title', 'Meta Title:') !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook_title', 'Facebook Title:') !!}
    {!! Form::text('facebook_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('facebook_desc', 'Facebook Desc:') !!}
    {!! Form::textarea('facebook_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Post Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter_post_title', 'Twitter Post Title:') !!}
    {!! Form::text('twitter_post_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Post Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('twitter_post_description', 'Twitter Post Description:') !!}
    {!! Form::textarea('twitter_post_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status Id:') !!}
    {!! Form::number('status_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Industries Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('industries_id', 'Industries Id:') !!}
    {!! Form::number('industries_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-default">Cancel</a>
</div>
