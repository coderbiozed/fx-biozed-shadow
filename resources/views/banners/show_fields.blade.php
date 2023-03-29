<!-- Banner Field -->
<div class="col-sm-12">
    {!! Form::label('banner', 'Banner:') !!}
    <p>{{ $banner->banner }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    @foreach(json_decode($banner->image, true) as $images)
    <p><img src="{{ asset('images/' . $images) }}" width="150"/></p>
    @endforeach
</div>

<!-- Image Link Field -->
<div class="col-sm-12">
    {!! Form::label('image_link', 'Image Link:') !!}
    <p>{{ $banner->image_link }}</p>
</div>

