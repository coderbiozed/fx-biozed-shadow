<!-- Broker Id Field -->
<div class="col-sm-12">
    {!! Form::label('broker_id', 'Broker Id:') !!}
    @php $broker = DB::table('broker_review')->where('id', $contests->broker_id) @endphp
    {{-- <p>{{ isset($broker) ? $broker->broker_name : 'Rest of all' }}</p> --}}

</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $contests->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $contests->description }}</p>
</div>

<!-- Bonus Field -->
<div class="col-sm-12">
    {!! Form::label('bonus', 'Bonus:') !!}
    <p>{{ $contests->bonus }}</p>
</div>

<!-- Link Field -->
<div class="col-sm-12">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $contests->link }}</p>
</div>

<!-- Prize Fund Field -->
<div class="col-sm-12">
    {!! Form::label('prize_fund', 'Prize Fund:') !!}
    <p>{{ $contests->prize_fund }}</p>
</div>

<!-- No Of Places Field -->
<div class="col-sm-12">
    {!! Form::label('no_of_places', 'No Of Places:') !!}
    <p>{{ $contests->no_of_places }}</p>
</div>

<!-- Contest Duration Field -->
<div class="col-sm-12">
    {!! Form::label('contest_duration', 'Contest Duration:') !!}
    <p>{{ $contests->contest_duration }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $contests->status }}</p>
</div>

<!-- No Of Participants Field -->
<div class="col-sm-12">
    {!! Form::label('no_of_participants', 'No Of Participants:') !!}
    <p>{{ $contests->no_of_participants }}</p>
</div>

<!-- Info Link Field -->
<div class="col-sm-12">
    {!! Form::label('info_link', 'Info Link:') !!}
    <p>{{ $contests->info_link }}</p>
</div>

<!-- Demo Contests Field -->
<div class="col-sm-12">
    {!! Form::label('demo_contests', 'Demo Contests:') !!}
    <p>{{ $contests->demo_contests }}</p>
</div>

<!-- Live Contests Field -->
<div class="col-sm-12">
    {!! Form::label('live_contests', 'Live Contests:') !!}
    <p>{{ $contests->live_contests }}</p>
</div>

<!-- Publish Field -->
<div class="col-sm-12">
    {!! Form::label('publish', 'Publish:') !!}
    <p>{{ $contests->publish }}</p>
</div>

