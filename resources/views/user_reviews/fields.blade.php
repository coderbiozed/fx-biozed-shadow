<!-- Broker Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('broker_id', 'Broker Id:') !!}
    {!! Form::number('broker_id', null, ['class' => 'form-control']) !!}
</div> --}}
<div class="form-group col-sm-6">
    {!! Form::label('broker_id', 'Broker Name:') !!}
    {!! Form::select('broker_id', $brokerReviews, null, ['class' => 'form-control','placeholder' => 'Rest all broker']) !!}
</div>

<!-- Rating Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rating', 'Rating:') !!}
    {!! Form::number('rating', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Use Service Field -->
<div class="form-group col-sm-6">
    {!! Form::label('use_service', 'Use Service:') !!}
    {!! Form::number('use_service', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_time', 'Service Time:') !!}
    {!! Form::text('service_time', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Account No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('account_no', 'Account No:') !!}
    {!! Form::text('account_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Accept Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('accept', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('accept', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('accept', 'Accept', ['class' => 'form-check-label']) !!}
    </div>
</div>
