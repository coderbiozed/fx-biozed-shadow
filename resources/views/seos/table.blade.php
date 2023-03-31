<div class="table-responsive">
    <table class="table" id="seos-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Description</th>
        <th>Keyword</th>
        <th>Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($seos as $seo)
            <tr>
                <td>{{ $seo->title }}</td>
            <td>{{ $seo->description }}</td>
            <td>{{ $seo->keyword }}</td>
            <td>{{ $seo->url }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['seos.destroy', $seo->id], 'method' => 'delete']) !!}
                    <div class='btn-group' style="display: flex">
                        <a href="{{ route('seos.show', [$seo->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('seos.edit', [$seo->id]) }}" class='btn btn-default btn-xs'>
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
