<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Jop Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jop_description', 'Jop Description:') !!}
    {!! Form::text('jop_description', null, ['class' => 'form-control']) !!}
</div>

<!-- What Say Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('what_say', 'What Say:') !!}
    {!! Form::textarea('what_say', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_url', 'Image Url:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('image_url', ['class' => 'custom-file-input']) !!}
            {!! Form::label('image_url', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>
