<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- In the <head> section -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSkt71NrN8Dx+1l6lObyJMZJ8zYu51eTV7f6Bcf8+" crossorigin="anonymous">

        <!-- At the end of the <body> section -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76A2YpOJ6EwQGiRnOJuu6iGKtF3b6prcOc2R1HArz5Z5G1Q1h6k8W7Kr1tB8H7+" crossorigin="anonymous"></script>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

        </div>
    </body>
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            plugins: 'image media link code',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | code',
            file_picker_callback: function(callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                let y = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

                let cmsURL = '/file-manager?editor=' + meta.fieldname;
                if (meta.filetype === 'image') {
                    cmsURL += '&type=Images';
                } else {
                    cmsURL += '&type=Files';
                }

                tinymce.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'File Manager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: 'yes',
                    close_previous: 'no'
                });
            }
        });
    </script>

</html>