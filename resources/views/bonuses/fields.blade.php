
<!-- Broker Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('broker_id', 'Broker Name:') !!}
    {!! Form::select('broker_id', $brokerReviews, null, ['class' => 'form-control','placeholder' => 'Rest all broker']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Bonus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bonus', 'Bonus:') !!}
    {!! Form::text('bonus', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Available Field -->
<div class="form-group col-sm-6">
    {!! Form::label('available', 'Available:') !!}
    {!! Form::text('available', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Requirement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('requirement', 'Requirement:') !!}
    {!! Form::text('requirement', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Withdrawal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('withdrawal', 'Withdrawal:') !!}
    {!! Form::text('withdrawal', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Others Condition Field -->
<div class="form-group col-sm-6">
    {!! Form::label('others_condition', 'Others Condition:') !!}
    {!! Form::text('others_condition', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Info Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('info_link', 'Info Link:') !!}
    {!! Form::text('info_link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Deposit Bonus Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('deposit_bonus', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('deposit_bonus', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('deposit_bonus', 'Deposit Bonus', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Welcome Bonus Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('welcome_bonus', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('welcome_bonus', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('welcome_bonus', 'Welcome Bonus', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Publish Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('publish', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('publish', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('publish', 'Publish', ['class' => 'form-check-label']) !!}
    </div>
</div>
