<!-- Banner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner', 'Banner:') !!}
    {!! Form::select('banner', array('Small Banner' => 'Small  Banner', 'Top Banner' => 'Top Banner', 'Left Banner' => 'Left Banner', 'Right Banner' => 'Right Banner'), null, ['class' => 'form-control','placeholder' => 'Choose Section']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6" style="margin-top: 16px;">
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
                <div class="imgPreview-banner"> </div>
            </div>            

            <div class="custom-file">
                <input type="file" name="imageBanner[]" class="custom-file-input" id="image" multiple="multiple">
                <label class="custom-file-label" for="image">Choose image</label>
            </div>

</div>

<!-- Image Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_link', 'Image Link:') !!}
    {!! Form::text('image_link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<div class="form-group col-sm-6" style="text-align: center;">
    <code>Small Banner 300x90</code><br>
    <code>Featured Banner Size : 970x90</code><br>
    <code>Right Up Size : 300x600</code><br>
    <code>Right Down Banner Size : 300x600</code>
</div>