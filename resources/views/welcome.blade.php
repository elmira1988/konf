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
    @include('program_comitet')
    @include('form_uchastiya')
    @include('pravila')

        <div class="flex-center position-ref full-height" id="app">
            <div class="container content">
                <div class="m-b-md mt-5">
                    <h3 class="text-center">
                    IX Международная научная коференция
                        <br><b>«Современные проблемы математики и физики»</b>
                    <br>посвященная 70-летию чл.-корр. АН РБ К.Б. Сабитова
                    </h3>
                    <h5 class="text-center">12 – 15 сентября 2021 года</h5>

                   {{-- <div class="d-flex justify-content-around">
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#orgkomitet">ОРГКОМИТЕТ</button>
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#program_comitet">ПРОГРАММНЫЙ КОМИТЕТ</button>
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#form_uchastiya">ФОРМЫ УЧАСТИЯ</button>
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#pravila">ПРАВИЛА ОФОРМЛЕНИЯ ТЕЗИСОВ</button>
                    </div>--}}
                     <div class="row ">
                         <div class="col-lg-3 col-md-6 text-center pl-0">
                             <button type="button" class="btn btn-link" data-toggle="modal" data-target="#orgkomitet">ОРГКОМИТЕТ</button>
                         </div>
                         <div class="col-lg-3 col-md-6 text-center">
                             <button type="button" class="btn btn-link" data-toggle="modal" data-target="#program_comitet">ПРОГРАММНЫЙ КОМИТЕТ</button>
                         </div>
                         <div class="col-lg-3 col-md-6 text-center">
                             <button type="button" class="btn btn-link" data-toggle="modal" data-target="#form_uchastiya">ФОРМЫ УЧАСТИЯ</button>
                         </div>
                         <div class="col-lg-3 col-md-6 text-center p-0">
                             <button type="button" class="btn btn-link" data-toggle="modal" data-target="#pravila">ПРАВИЛА ОФОРМЛЕНИЯ ТЕЗИСОВ</button>
                         </div>
                    </div>

                </div>

                <h5 class="mt-4 text-center">Cекции</h5>

                <div class="row">
                    <div class="col-lg-4">

                        <div class="d-flex list-counter-square m-1">
                            <div class="p-2 mr-1">1</div>
                            <div class="w-100 p-1 pl-2" style="height: 54px;">Спектральная теория дифференциальных операторов</div>
                        </div>

                        <div class="d-flex list-counter-square m-1">
                            <div class="p-2 mr-1">2</div>
                            <div class="w-100 p-1 pl-2" style="height: 54px;">Теория функций и функционального анализа</div>
                        </div>

                        <div class="d-flex list-counter-square m-1">
                            <div class="p-2 mr-1">3</div>
                            <div class="w-100 p-1 pl-2" style="height: 54px;">Краевые задачи для дифференциальных уравнений</div>
                        </div>


                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex list-counter-square m-1">
                            <div class="p-2 mr-1">4</div>
                            <div class="w-100 p-1 pl-2" style="height: 54px;">Обратные и некорректные задачи</div>
                        </div>

                        <div class="d-flex list-counter-square m-1">
                            <div class="p-2 mr-1">5</div>
                            <div class="w-100 p-1 pl-2" style="height: 54px;">Уравнения смешанного типа</div>
                        </div>

                        <div class="d-flex list-counter-square m-1">
                            <div class="p-2 mr-1">6</div>
                            <div class="w-100 p-1 pl-2" style="height: 54px;">Математические проблемы механики</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex list-counter-square m-1">
                            <div class="p-2 mr-1">7</div>
                            <div class="w-100 p-1 pl-2" style="height: 54px;">Прикладные задачи термодинамики и теплофизики</div>
                        </div>

                        <div class="d-flex list-counter-square m-1">
                            <div class="p-2 mr-1">8</div>
                            <div class="w-100 p-1 pl-2" style="height: 54px;">Математическое моделирование сложных процессов и систем</div>
                        </div>

                        <div class="d-flex list-counter-square m-1">
                            <div class="p-2 mr-1">9</div>
                            <div class="w-100 p-1 pl-2" style="height: 54px;">Актуальные проблемы математического и физического образования в Вузе</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="{{ mix('/js/app.js') }}"></script>


    </body>
</html>
