<div class="table-responsive">
    <table class="table" id="analytics-table">
        <thead>
            <tr>
                <th>Analytics Code</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($analytics as $analytics)
            <tr>
                <td>{{ $analytics->analytics_code }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['analytics.destroy', $analytics->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('analytics.show', [$analytics->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('analytics.edit', [$analytics->id]) }}" class='btn btn-default btn-xs'>
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
