<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $services->name }}</p>
</div>

<!-- Descption Field -->
<div class="col-sm-12">
    {!! Form::label('descption', 'Descption:') !!}
    <p>{{ $services->descption }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $services->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $services->updated_at }}</p>
</div>

