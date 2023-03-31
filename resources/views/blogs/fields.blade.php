<!-- Author Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author', 'Author:') !!}
    {!! Form::text('author', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publish_date', 'Publish Date:') !!}
    {!! Form::text('publish_date', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'autocomplete'=>'off']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!--Shot Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_description', 'Short Description:') !!}
    {!! Form::textarea('short_description', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    <!-- {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!} -->

    @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="user-image mb-3 text-center">
                <div class="imgPreview"> </div>
            </div>            

            <div class="custom-file">
                <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
                <label class="custom-file-label" for="images">Choose image (Size: 1000x600)</label>
            </div>

</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Top Field -->
<div class="form-group col-sm-6" style="display:none;">
    <div class="form-check">
        {!! Form::hidden('top', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('top', '0', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('top', 'Letest Blog', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- side Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('side', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('side', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('side', 'Side Blog', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('publish', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('publish', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('publish', 'Publish', ['class' => 'form-check-label']) !!}
    </div>
</div>