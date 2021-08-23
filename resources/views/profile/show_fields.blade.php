<!-- Name Field -->
<div class="col-sm-12">
    {{-- {!! Form::label('name', 'Name:') !!} --}}
    <p>{{$data->name}}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {{-- {!! Form::label('description', 'Description:') !!} --}}
    <p>{{$data->email}}</p>
</div>

<div class="col-sm-12">
    <p>{{$data->user_phone}}</p>
</div>

<div class="col-sm-12">
    <p>{{$data->address}}</p>
</div>

<div class="col-sm-12">
    <p>{{$data->gender->type}}</p>
</div>

<div class="col-sm-12">
    <p>{{$data->state->name}}</p>
</div>

<div class="col-sm-12">
    <p>{{$data->patient->blood_group}}</p>
</div>

<div class="col-sm-12">
    <p>{{$data->patient->date_of_birth}}</p>
</div>

<div class="col-sm-12">
    <p>{{$data->patient->height}}</p>
</div>


{{-- <!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $services->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $services->updated_at }}</p>
</div> --}}

{{$data->name}}
{{$data->email}}
{{$data->user_phone}}
{{$data->address}}
{{$data->gender->type}}
{{$data->state->name}}
{{$data->patient->blood_group}}
{{$data->patient->date_of_birth}}
{{$data->patient->height}}
@foreach ($data->weights as $item)
   {{$item->weight}}
   {{$item->date}}
 @endforeach