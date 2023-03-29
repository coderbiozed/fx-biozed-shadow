<div class="table-responsive">
    <table class="table" id="subscribers-table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Subscription Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subscribers as $subscriber)
            <tr>
                <td>{{ $subscriber->email }}</td>
                <td>{{ $subscriber->created_at }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['subscribers.destroy', $subscriber->id], 'method' => 'delete']) !!}
                    <div class='btn-group' style="display: flex">
                        <a href="{{ route('subscribers.show', [$subscriber->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('subscribers.edit', [$subscriber->id]) }}" class='btn btn-default btn-xs'>
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
