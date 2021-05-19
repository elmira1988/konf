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
                <div class="m-b-md">
                    <h4>
                    IX Международная научная коференция  «Современные проблемы математики и физики»
                    <br>
                        посвященная 70-летию чл.-корр. АН РБ К.Б. Сабитова
                    <br>12 – 15 сентября 2021 года
                    </h4>
                </div>

                <h5>
                    СЕКЦИИ КОНФЕРЕНЦИИ
                </h5>
                <ol class="text-left">
                    <li class="text-left">
                        Спектральная теория дифференциальных операторов.
                    </li>
                    <li>
                        Теория функций и функционального анализа.
                    </li>

                    <li>
                        Краевые задачи для дифференциальных уравнений.
                    </li>
                    <li>
                        Обратные и некорректные задачи.
                    </li>

                    <li>
                        Уравнения смешанного типа.
                    </li>
                    <li>
                        Математические проблемы механики.
                    </li>

                    <li>
                        Прикладные задачи термодинамики и теплофизики.
                    </li>

                    <li>
                        Математическое моделирование сложных процессов и систем.
                    </li>

                    <li>
                        Актуальные проблемы математического и физического образования в Вузе.
                    </li>

                </ol>
            </div>
        </div>
    </body>
</html>
