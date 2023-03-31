<div class="table-responsive">
    <table class="table" id="traders-table">
        <thead>
            <tr>
                <th>Image</th>
        <th>Trader</th>
        <th>Lifespan</th>
        <th>Trader Share</th>
        <th>Profitability</th>
        <th>Equity</th>
        <th>Copying Traders</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($traders as $traders)
            <tr>
                <td>{{ $traders->image }}</td>
            <td>{{ $traders->trader }}</td>
            <td>{{ $traders->lifespan }}</td>
            <td>{{ $traders->trader_share }}</td>
            <td>{{ $traders->Profitability }}</td>
            <td>{{ $traders->equity }}</td>
            <td>{{ $traders->copying_traders }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['traders.destroy', $traders->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('traders.show', [$traders->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('traders.edit', [$traders->id]) }}" class='btn btn-default btn-xs'>
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
