<!-- Offer Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('offer_type', 'Offer Type:') !!}
    {!! Form::text('offer_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Annually Pric Field -->
<div class="form-group col-sm-6">
    {!! Form::label('annually_pric', 'Annually Pric:') !!}
    {!! Form::text('annually_pric', null, ['class' => 'form-control']) !!}
</div>

<!-- Monthly Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monthly_price', 'Monthly Price:') !!}
    {!! Form::text('monthly_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Offer Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('offer', 'Offer:') !!}
    {!! Form::textarea('offer', null, ['class' => 'form-control']) !!}
</div>