<!-- Broker Id Field -->
<div class="col-sm-12">
    {!! Form::label('broker_id', 'Broker:') !!}
    @php $broker = DB::table('broker_review')->Where('id',  $faq->broker_id)->first() @endphp
    <p>{{ isset($broker) ? $broker->broker_name : 'Rest of all' }}</p>
</div>

<!-- Q 1 Field -->
<div class="col-sm-12">
    {!! Form::label('q_1', 'Q 1:') !!}
    <p>{{ $faq->q_1 }}</p>
</div>

<!-- Ans 1 Field -->
<div class="col-sm-12">
    {!! Form::label('ans_1', 'Ans 1:') !!}
    <p>{!! $faq->ans_1 !!}</p>
</div>

<!-- Q 2 Field -->
<div class="col-sm-12">
    {!! Form::label('q_2', 'Q 2:') !!}
    <p>{{ $faq->q_2 }}</p>
</div>

<!-- Ans 2 Field -->
<div class="col-sm-12">
    {!! Form::label('ans_2', 'Ans 2:') !!}
    <p>{!! $faq->ans_2 !!}</p>
</div>

<!-- Q 3 Field -->
<div class="col-sm-12">
    {!! Form::label('q_3', 'Q 3:') !!}
    <p>{{ $faq->q_3 }}</p>
</div>

<!-- Ans 3 Field -->
<div class="col-sm-12">
    {!! Form::label('ans_3', 'Ans 3:') !!}
    <p>{!! $faq->ans_3 !!}</p>
</div>

<!-- Q 4 Field -->
<div class="col-sm-12">
    {!! Form::label('q_4', 'Q 4:') !!}
    <p>{{ $faq->q_4 }}</p>
</div>

<!-- Ans 4 Field -->
<div class="col-sm-12">
    {!! Form::label('ans_4', 'Ans 4:') !!}
    <p>{!! $faq->ans_4 !!}</p>
</div>

<!-- Q 5 Field -->
<div class="col-sm-12">
    {!! Form::label('q_5', 'Q 5:') !!}
    <p>{{ $faq->q_5 }}</p>
</div>

<!-- Ans 5 Field -->
<div class="col-sm-12">
    {!! Form::label('ans_5', 'Ans 5:') !!}
    <p>{!! $faq->ans_5 !!}</p>
</div>

<!-- Q 6 Field -->
<div class="col-sm-12">
    {!! Form::label('q_6', 'Q 6:') !!}
    <p>{{ $faq->q_6 }}</p>
</div>

<!-- Ans 6 Field -->
<div class="col-sm-12">
    {!! Form::label('ans_6', 'Ans 6:') !!}
    <p>{!! $faq->ans_6!!}}</p>
</div>

<!-- Q 7 Field -->
<div class="col-sm-12">
    {!! Form::label('q_7', 'Q 7:') !!}
    <p>{{ $faq->q_7 }}</p>
</div>

<!-- Ans 7 Field -->
<div class="col-sm-12">
    {!! Form::label('ans_7', 'Ans 7:') !!}
    <p>{!! $faq->ans_7!!}}</p>
</div>

<!-- Q 8 Field -->
<div class="col-sm-12">
    {!! Form::label('q_8', 'Q 8:') !!}
    <p>{{ $faq->q_8 }}</p>
</div>

<!-- Ans 8 Field -->
<div class="col-sm-12">
    {!! Form::label('ans_8', 'Ans 8:') !!}
    <p>{!! $faq->ans_8 !!}</p>
</div>

<!-- Q 9 Field -->
<div class="col-sm-12">
    {!! Form::label('q_9', 'Q 9:') !!}
    <p>{{ $faq->q_9 }}</p>
</div>

<!-- Ans 9 Field -->
<div class="col-sm-12">
    {!! Form::label('ans_9', 'Ans 9:') !!}
    <p>{!! $faq->ans_9 !!}</p>
</div>

<!-- Q 10 Field -->
<div class="col-sm-12">
    {!! Form::label('q_10', 'Q 10:') !!}
    <p>{{ $faq->q_10 }}</p>
</div>

<!-- Ans 10 Field -->
<div class="col-sm-12">
    {!! Form::label('ans_10', 'Ans 10:') !!}
    <p>{!! $faq->ans_10 !!}</p>
</div>

