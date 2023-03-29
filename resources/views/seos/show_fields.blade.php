<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $seo->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $seo->description }}</p>
</div>

<!-- Keyword Field -->
<div class="col-sm-12">
    {!! Form::label('keyword', 'Keyword:') !!}
    <p>{{ $seo->keyword }}</p>
</div>

<!-- Url Field -->
<div class="col-sm-12">
    {!! Form::label('url', 'Url:') !!}
    <p>{{ $seo->url }}</p>
</div>

