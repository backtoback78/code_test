<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>

        <div class="row">
            <div class="col s12"> 
        @include ('back.partials.admin_nav') 
            </div>
        </div>   
        <div class="row">
                <div class="col s10">
                    @yield('content')
                </div>
        </div>
    
    
          
          <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script><!-- Compiled and minified JavaScript -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
          <script>
         (function($){
            $(".button-collapse").sideNav();
            $('select').material_select();
            $('#textarea1').val('New Text');
            $('#textarea1').trigger('autoresize');
            $('.modal').modal();
            $('.flash').delay(1000).css({

                position: 'fixed',

                top: '0.5%',

                left: '40%',

                width: '15%',

                height: '50px',

                backgroundColor: 'orange',

                display: 'flex',

                textAlign: 'center',

                alignItems: 'center',

                color: '#fff',

                fontWeight: '800',

                borderRadius: '10px'

       }).fadeOut(1000);
             
            })(jQuery);
          </script>

    </body>
</html>