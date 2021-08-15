<!-- Offer Type Field -->
<div class="col-sm-12">
    {!! Form::label('offer_type', 'Offer Type:') !!}
    <p>{{ $plansPicing->offer_type }}</p>
</div>

<!-- Annually Pric Field -->
<div class="col-sm-12">
    {!! Form::label('annually_pric', 'Annually Pric:') !!}
    <p>{{ $plansPicing->annually_pric }}</p>
</div>

<!-- Monthly Price Field -->
<div class="col-sm-12">
    {!! Form::label('monthly_price', 'Monthly Price:') !!}
    <p>{{ $plansPicing->monthly_price }}</p>
</div>

<!-- Offer Field -->
<div class="col-sm-12">
    {!! Form::label('offer', 'Offer:') !!}
    <p>{{ $plansPicing->offer }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $plansPicing->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $plansPicing->updated_at }}</p>
</div>

