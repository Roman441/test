<!doctype html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php
$ip=$_SERVER['REMOTE_ADDR'];
echo '<input id="ip" type="hidden" value='.$ip.'/>';
?>
<html lang="{{ app()->getLocale() }}">
    <head>
         <script >
            function show(){
                var loc = location.hostname;
                $('#url').val(loc);
		$('#url').append('sss');
		    $(".links").append("<a href='/'>"+loc+"</a>");

            }
            function add_link(){
                var url = $('#url').val();
                var ip = $('#ip').val();
            	$.ajax({
                   type: 'post',
		   url: "links",
                   data: {"link":url, "user":ip, "_token":"{{ Session::token() }}"},
		   success: function(data){
		      $(this).addClass("done");
             	      $(".links").append("<a id='new_link' href='/links'>Cтатистикa переходов</a>");         
                      setTimeout(func, 10000);
                   }
	        });   
            }
            function func() {
                $('#new_link').remove();
            }
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
		   <input id="url" name="url" type="url"/>
		   <button onclick="show()">Уменьшить</button>
                   <button onclick="add_link()">Cоздать свою короткую ссылку</button>
                </div>
                <div id='li'></div>
            </div>
        </div>
    </body>
</html>
