<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('assets')}}/images/TopAsiaFX.png"
                         class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="{{asset('assets')}}/images/TopAsiaFX.png"
                             class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                            
                            <small>Member since</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 0.0.2
        </div>
        <strong>Copyright © 2016-2023 <a href="\" style="color:#03b97c !important;">TopAsiaFx </a>.</strong> All rights
        reserved.
    </footer>
</div>

<style>
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .imgPreview img {
            padding: 8px;
            max-width: 100px;
        } 
        .imgPreview-main img {
            padding: 8px;
            max-width: 100px;
        }
        .imgPreview-logo img {
            padding: 8px;
            max-width: 100px;
        }
        .imgPreview-banner img {
            padding: 8px;
            max-width: 100px;
        }
</style>

<script src="{{ mix('js/app.js') }}" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    $('#publish_date').datepicker({  
       format: 'dd-mm-yyyy',
       autoclose: true,
     });  
</script> 

<!-- Text Editor -->
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>

<!-- Image Upload -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        $('#main_image').on('change', function() {
            multiImgPreview(this, 'div.imgPreview-main');
        });
        $('#logo_image').on('change', function() {
            multiImgPreview(this, 'div.imgPreview-logo');
        });
        $('#image').on('change', function() {
            multiImgPreview(this, 'div.imgPreview-banner');
        });
        });    
    </script>

<!-- Auto Filled field -->
    <script type="text/javascript">
        $("#title").keyup(function(){
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
                $("#slug").val(Text);        
        });
    </script>

<script src="{{ asset('assets/js/custom.js') }}"></script>

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>
