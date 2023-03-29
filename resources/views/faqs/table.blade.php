<div class="table-responsive">
    <table class="table" id="faqs-table">
        <thead>
            <tr>
                <th>Broker</th>
        <th>Q 1</th>
        <th>Ans 1</th>
        <!-- <th>Q 2</th>
        <th>Ans 2</th>
        <th>Q 3</th>
        <th>Ans 3</th>
        <th>Q 4</th>
        <th>Ans 4</th>
        <th>Q 5</th>
        <th>Ans 5</th>
        <th>Q 6</th>
        <th>Ans 6</th>
        <th>Q 7</th>
        <th>Ans 7</th>
        <th>Q 8</th>
        <th>Ans 8</th>
        <th>Q 9</th>
        <th>Ans 9</th>
        <th>Q 10</th>
        <th>Ans 10</th> -->
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faqs as $faq)
        @php $broker = DB::table('broker_review')->Where('id',  $faq->broker_id)->first() @endphp
            <tr>
                <td>{{ isset($broker) ? $broker->broker_name : 'Rest of all' }}</td>
            <td>{{ $faq->q_1 }}</td>
            <td>{!! Str::limit($faq->ans_1, 100) !!}</td>
            <!-- <td>{{ $faq->q_2 }}</td>
            <td>{{ $faq->ans_2 }}</td>
            <td>{{ $faq->q_3 }}</td>
            <td>{{ $faq->ans_3 }}</td>
            <td>{{ $faq->q_4 }}</td>
            <td>{{ $faq->ans_4 }}</td>
            <td>{{ $faq->q_5 }}</td>
            <td>{{ $faq->ans_5 }}</td>
            <td>{{ $faq->q_6 }}</td>
            <td>{{ $faq->ans_6 }}</td>
            <td>{{ $faq->q_7 }}</td>
            <td>{{ $faq->ans_7 }}</td>
            <td>{{ $faq->q_8 }}</td>
            <td>{{ $faq->ans_8 }}</td>
            <td>{{ $faq->q_9 }}</td>
            <td>{{ $faq->ans_9 }}</td>
            <td>{{ $faq->q_10 }}</td>
            <td>{{ $faq->ans_10 }}</td> -->
                <td width="120">
                    {!! Form::open(['route' => ['faqs.destroy', $faq->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faqs.show', [$faq->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('faqs.edit', [$faq->id]) }}" class='btn btn-default btn-xs'>
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
