<div class="table-responsive">
    <table class="table" id="bonuses-table">
        <thead>
            <tr>
                <th>Broker Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Bonus</th>
        <th>Link</th>
        <th>Date</th>
        <th>Available</th>
        <th>Requirement</th>
        <th>Withdrawal</th>
        <th>Others Condition</th>
        <th>Info Link</th>
        <th>Deposit Bonus</th>
        <th>Welcome Bonus</th>
        <th>Publish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bonuses as $bonus)
        @php $broker = DB::table('broker_review')->Where('id',  $bonus->broker_id)->first() @endphp
            <tr>
                <td>{{ isset($broker) ? $broker->broker_name : 'Rest of all' }}</td>
            <td>{{ $bonus->title }}</td>
            <td>{!! Str::limit(strip_tags($bonus->description, 200)) !!}</td>
            <td>{{ $bonus->bonus }}</td>
            <td>{{ $bonus->link }}</td>
            <td>{{ $bonus->date }}</td>
            <td>{{ $bonus->available }}</td>
            <td>{{ $bonus->requirement }}</td>
            <td>{{ $bonus->withdrawal }}</td>
            <td>{{ $bonus->others_condition }}</td>
            <td>{{ $bonus->info_link }}</td>
            <td>{{ $bonus->deposit_bonus }}</td>
            <td>{{ $bonus->welcome_bonus }}</td>
            <td>{{ $bonus->publish }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['bonuses.destroy', $bonus->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bonuses.show', [$bonus->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('bonuses.edit', [$bonus->id]) }}" class='btn btn-default btn-xs'>
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
