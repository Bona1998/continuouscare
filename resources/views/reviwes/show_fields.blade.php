<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $reviwes->name }}</p>
</div>

<!-- Jop Description Field -->
<div class="col-sm-12">
    {!! Form::label('jop_description', 'Jop Description:') !!}
    <p>{{ $reviwes->jop_description }}</p>
</div>

<!-- What Say Field -->
<div class="col-sm-12">
    {!! Form::label('what_say', 'What Say:') !!}
    <p>{{ $reviwes->what_say }}</p>
</div>

<!-- Image Url Field -->
<div class="col-sm-12">
    {!! Form::label('image_url', 'Image Url:') !!}
    <p>{{ $reviwes->image_url }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $reviwes->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $reviwes->updated_at }}</p>
</div>

