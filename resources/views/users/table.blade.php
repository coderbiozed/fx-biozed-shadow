<div class="table-responsive">
    <table class="table" id="subscribers-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admin_users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group' style="display: flex">                        
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
