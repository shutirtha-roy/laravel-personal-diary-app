<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Personal Diary App - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select-toggle').each(function(){    
                var select = $(this), values = {};    
                $('option',select).each(function(i, option){
                    values[option.value] = option.selected;        
                }).click(function(event){        
                    values[this.value] = !values[this.value];
                    $('option',select).each(function(i, option){            
                        option.selected = values[option.value];        
                    });    
                });
            });
        });
    </script>


    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
</head>
<body>
    <div id="app">

        @include('layouts.nav')

        <main class="py-4 container">
            @include('layouts.partials.validation-error')
            @include('layouts.partials.success')
            @yield('content')
        </main>
        
    </div>
</body>



<script>
    CKEDITOR.replace('content');
</script>


</html>
