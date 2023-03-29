<div class="table-responsive">
    <table class="table" id="userReviews-table">
        <thead>
            <tr>
                <th>Broker</th>
        <th>Rating</th>
        <th>Name</th>
        <th>Email</th>
        <th>Title</th>
        <th>Description</th>
        <th>City</th>
        <th>Country</th>
        <!-- <th>Use Service</th>
        <th>Service Time</th>
        <th>Account No</th>
        <th>Accept</th> -->
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($userReviews as $userReview)
        @php $broker = DB::table('broker_review')->Where('id',  $userReview->broker_id)->first() @endphp
            <tr>
                <td>{{ $broker->broker_name }}</td>
            <td>{{ $userReview->rating }}</td>
            <td>{{ $userReview->name }}</td>
            <td>{{ $userReview->email }}</td>
            <td>{{ $userReview->title }}</td>
            <td>{{ $userReview->description }}</td>
            <td>{{ $userReview->city }}</td>
            <td>{{ $userReview->country }}</td>
            <!-- <td>{{ $userReview->use_service }}</td>
            <td>{{ $userReview->service_time }}</td>
            <td>{{ $userReview->account_no }}</td>
            <td>{{ $userReview->accept }}</td> -->
                <td width="120">
                    {!! Form::open(['route' => ['userReviews.destroy', $userReview->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('userReviews.show', [$userReview->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('userReviews.edit', [$userReview->id]) }}" class='btn btn-default btn-xs'>
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
