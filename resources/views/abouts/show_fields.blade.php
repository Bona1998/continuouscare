<!-- Aboutname Field -->
<div class="col-sm-12">
    {!! Form::label('aboutName', 'Aboutname:') !!}
    <p>{{ $about->aboutName }}</p>
</div>

<!-- Aboutcontent Field -->
<div class="col-sm-12">
    {!! Form::label('aboutContent', 'Aboutcontent:') !!}
    <p>{{ $about->aboutContent }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $about->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $about->updated_at }}</p>
</div>

