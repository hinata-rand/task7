<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Gio_task7
                </div>
                <div id="globalArea" style="width:800px;height:420px"></div>
            </div>

            <!-- 必要なリソースの読み込み -->
            <script type="text/javascript" src="{{ asset('js/three.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/gio.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/sampleData.js') }}"></script>
            
            <script>      
    
            //div要素を取得する
            var container = document.getElementById( "globalArea" );

            //3Dの地球を生成する
            var controller = new GIO.Controller( container );

            //JSON形式のデータを読み込む
            controller.addDataAsync('js/sampleData.json', function() {
                controller.init();
            })
            
            </script>
        </div>
        <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    </body>
    
    
</html>
