<div class="table-responsive">
    <table class="table" id="blogs-table">
        <thead>
            <tr>
                <th>Author</th>
        <th>Title</th>
        <th>Short Description</th>
        <th>Description</th>
        <th>Image</th>
        <th>Publish Date</th>
        {{-- <th>Latest/No</th> --}}
        <th>Press release</th>
        <th>Publish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->author }}</td>
            <td>{{ $blog->title }}</td>
            <td>{!! Str::limit(strip_tags($blog->short_description, 200)) !!}</td>
            <td>{!! Str::limit(strip_tags($blog->description, 200)) !!}</td>
            <td><img src="{{ asset('images/' . json_decode($blog->image)[0]) }}" width="150" height="150"/></td>
            <td>{{ $blog->publish_date }}</td>
            {{-- <td>{!! ($blog->top == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td> --}}
            <td>{!! ($blog->side == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
            <td>{!! ($blog->publish == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
                <td width="120">
                    {!! Form::open(['route' => ['blogs.destroy', $blog->id], 'method' => 'delete']) !!}
                    <div class='btn-group' style="display: flex">
                        <a href="{{ route('blogs.show', [$blog->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('blogs.edit', [$blog->id]) }}" class='btn btn-default btn-xs'>
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
