<!-- Publish Date Field -->
<div class="col-sm-12">
    {!! Form::label('publish_date', 'Publish Date:') !!}
    <p>{{ $blog->publish_date }}</p>
</div>

<!-- Author Field -->
<div class="col-sm-12">
    {!! Form::label('author', 'Author:') !!}
    <p>{{ $blog->author }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $blog->title }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    @foreach(json_decode($blog->image, true) as $images)
    <p><img src="{{ asset('images/' . $images) }}" width="300"/></p>
    @endforeach
</div>

<!--Short  Description Field -->
<div class="col-sm-12">
    {!! Form::label('short_description', 'Short Description:') !!}
    <p>{!! $blog->short_description !!}</p>
</div>


<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $blog->description !!}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-12">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $blog->slug }}</p>
</div>

<!-- Top Field -->
<div class="col-sm-12">
    {!! Form::label('top', 'Top blog:') !!}
    <p>{!! ($blog->top == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

<!-- Side Field -->
<div class="col-sm-12">
    {!! Form::label('side', 'Side blog:') !!}
    <p>{!! ($blog->side == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

<!-- Publish Field -->
<div class="col-sm-12">
    {!! Form::label('publish', 'Publish:') !!}
    <p>{!! ($blog->publish == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

