<!-- Broker Id Field -->
<div class="col-sm-12">
    {!! Form::label('broker_id', 'Broker Id:') !!}
    @php $broker = DB::table('broker_review')->Where('id',  $bonus->broker_id)->first() @endphp
    <p>{{ isset($broker) ? $broker->broker_name : 'Rest of all' }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $bonus->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $bonus->description }}</p>
</div>

<!-- Bonus Field -->
<div class="col-sm-12">
    {!! Form::label('bonus', 'Bonus:') !!}
    <p>{{ $bonus->bonus }}</p>
</div>

<!-- Link Field -->
<div class="col-sm-12">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $bonus->link }}</p>
</div>

<!-- Date Field -->
<div class="col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $bonus->date }}</p>
</div>

<!-- Available Field -->
<div class="col-sm-12">
    {!! Form::label('available', 'Available:') !!}
    <p>{{ $bonus->available }}</p>
</div>

<!-- Requirement Field -->
<div class="col-sm-12">
    {!! Form::label('requirement', 'Requirement:') !!}
    <p>{{ $bonus->requirement }}</p>
</div>

<!-- Withdrawal Field -->
<div class="col-sm-12">
    {!! Form::label('withdrawal', 'Withdrawal:') !!}
    <p>{{ $bonus->withdrawal }}</p>
</div>

<!-- Others Condition Field -->
<div class="col-sm-12">
    {!! Form::label('others_condition', 'Others Condition:') !!}
    <p>{{ $bonus->others_condition }}</p>
</div>

<!-- Info Link Field -->
<div class="col-sm-12">
    {!! Form::label('info_link', 'Info Link:') !!}
    <p>{{ $bonus->info_link }}</p>
</div>

<!-- Deposit Bonus Field -->
<div class="col-sm-12">
    {!! Form::label('deposit_bonus', 'Deposit Bonus:') !!}
    <p>{{ $bonus->deposit_bonus }}</p>
</div>

<!-- Welcome Bonus Field -->
<div class="col-sm-12">
    {!! Form::label('welcome_bonus', 'Welcome Bonus:') !!}
    <p>{{ $bonus->welcome_bonus }}</p>
</div>

<!-- Publish Field -->
<div class="col-sm-12">
    {!! Form::label('publish', 'Publish:') !!}
    <p>{{ $bonus->publish }}</p>
</div>

