<div class="table-responsive">
    <table class="table" id="contests-table">
        <thead>
            <tr>
                <th>Broker Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Bonus</th>
        <th>Link</th>
        <th>Prize Fund</th>
        <th>No Of Places</th>
        <th>Contest Duration</th>
        <th>Status</th>
        <th>No Of Participants</th>
        <th>Info Link</th>
        <th>Demo Contests</th>
        <th>Live Contests</th>
        <th>Publish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contests as $contests)
        @php $broker = DB::table('broker_review')->Where('id',  $contests->broker_id)->first() @endphp
            <tr>
                <td>{{ isset($broker) ? $broker->broker_name : 'Rest of all' }}</td>
            <td>{{ $contests->title }}</td>
            <td>{!! Str::limit(strip_tags($contests->description, 200)) !!}</td>
            <td>{{ $contests->bonus }}</td>
            <td>{{ $contests->link }}</td>
            <td>{{ $contests->prize_fund }}</td>
            <td>{{ $contests->no_of_places }}</td>
            <td>{{ $contests->contest_duration }}</td>
            <td>{{ $contests->status }}</td>
            <td>{{ $contests->no_of_participants }}</td>
            <td>{{ $contests->info_link }}</td>
            <td>{{ $contests->demo_contests }}</td>
            <td>{{ $contests->live_contests }}</td>
            <td>{{ $contests->publish }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['contests.destroy', $contests->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contests.show', [$contests->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('contests.edit', [$contests->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
