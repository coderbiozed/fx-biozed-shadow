<!-- Broker Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('broker_id', 'Broker Id:') !!}
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

<!-- Prize Fund Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prize_fund', 'Prize Fund:') !!}
    {!! Form::text('prize_fund', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- No Of Places Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_of_places', 'No Of Places:') !!}
    {!! Form::text('no_of_places', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Contest Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contest_duration', 'Contest Duration:') !!}
    {!! Form::text('contest_duration', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- No Of Participants Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_of_participants', 'No Of Participants:') !!}
    {!! Form::text('no_of_participants', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Info Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('info_link', 'Info Link:') !!}
    {!! Form::text('info_link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Demo Contests Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('demo_contests', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('demo_contests', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('demo_contests', 'Demo Contests', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Live Contests Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('live_contests', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('live_contests', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('live_contests', 'Live Contests', ['class' => 'form-check-label']) !!}
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
