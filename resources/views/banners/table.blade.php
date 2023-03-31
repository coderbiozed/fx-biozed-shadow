<div class="table-responsive">
    <table class="table" id="banners-table">
        <thead>
            <tr>
                <th>Banner</th>
        <th>Image</th>
        <th>Image Link</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($banners as $banner)
            <tr>
                <td>{{ $banner->banner }}</td>
            <td><img src="{{ asset('images/' . json_decode($banner->image)[0]) }}" width="150" height="150"/></td>
            <td>{{ $banner->image_link }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['banners.destroy', $banner->id], 'method' => 'delete']) !!}
                    <div class='btn-group' style="display: flex">
                        <a href="{{ route('banners.show', [$banner->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('banners.edit', [$banner->id]) }}" class='btn btn-default btn-xs'>
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
