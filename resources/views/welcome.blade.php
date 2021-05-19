<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
    @include('orgkomitet')
        <div class="flex-center position-ref full-height" id="app">
            <div class="container content">
                <div class="m-b-md mt-5">
                    <h3 class="text-center">
                    IX Международная научная коференция
                        <br><b>«Современные проблемы математики и физики»</b>
                    <br>посвященная 70-летию чл.-корр. АН РБ К.Б. Сабитова
                    </h3>
                    <h5 class="text-center">12 – 15 сентября 2021 года</h5>

                    <div class="d-flex justify-content-around">
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#orgkomitet">ОРГКОМИТЕТ</button>
                            <button type="button" class="btn btn-link">ПРОГРАММНЫЙ КОМИТЕТ</button>
                            <button type="button" class="btn btn-link">ФОРМЫ УЧАСТИЯ</button>
                            <button type="button" class="btn btn-link">ПРАВИЛА ОФОРМЛЕНИЯ ТЕЗИСОВ</button>
                    </div>
                </div>

                <h5 class="mt-5">
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

        <script src="{{ mix('/js/app.js') }}"></script>


    </body>
</html>
