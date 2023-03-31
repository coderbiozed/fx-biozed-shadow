<!-- Broker Id Field -->
<div class="col-sm-12">
    {!! Form::label('broker_id', 'Broker:') !!}
    @php $broker = DB::table('broker_review')->Where('id',  $userReview->broker_id)->first() @endphp
    <p>{{ $broker->broker_name }}</p>
</div>

<!-- Rating Field -->
<div class="col-sm-12">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $userReview->rating }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $userReview->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $userReview->email }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $userReview->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $userReview->description }}</p>
</div>

<!-- City Field -->
<div class="col-sm-12">
    {!! Form::label('city', 'City:') !!}
    <p>{{ $userReview->city }}</p>
</div>

<!-- Country Field -->
<div class="col-sm-12">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $userReview->country }}</p>
</div>

<!-- Use Service Field -->
<div class="col-sm-12">
    {!! Form::label('use_service', 'Use Service:') !!}
    <p>{{ $userReview->use_service }}</p>
</div>

<!-- Service Time Field -->
<div class="col-sm-12">
    {!! Form::label('service_time', 'Service Time:') !!}
    <p>{{ $userReview->service_time }}</p>
</div>

<!-- Account No Field -->
<div class="col-sm-12">
    {!! Form::label('account_no', 'Account No:') !!}
    <p>{{ $userReview->account_no }}</p>
</div>

<!-- Accept Field -->
<div class="col-sm-12">
    {!! Form::label('accept', 'Accept:') !!}
    <p>{{ $userReview->accept }}</p>
</div>

