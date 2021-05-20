<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Конференция</title>

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
                    <h6 class="text-center leader">
                            <span class="ml-1 fa fa-circle mr-1"></span> Министерство науки и высшего образования Российской Федерации
                            <span class="ml-1 fa fa-circle mr-1"></span>Академия наук Республики Башкортостан<br>
                            <span class="ml-1 fa fa-circle mr-1"></span>Башкирский государственный университет
                            <span class="ml-1 fa fa-circle mr-1"></span>Самарский государственный технический университет
                            <span class="ml-1 fa fa-circle mr-1"></span>Администрация ГО г. Стерлитамак
                    </h6>


                    <h4 class="text-center mt-3 mb-0">
                    IX Международная научная коференция
                    </h4>
                    <h3 class="text-center font-weight-bold mb-0">«Современные проблемы математики и физики»</h3>
                    <h4 class="text-center mb-1">
                        посвященная 70-летию чл.-корр. АН РБ К.Б. Сабитова
                    </h4>
                    <h6 class="text-center">12 – 15 сентября 2021 года</h6>

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

                <h5 class="mt-4 text-center font-weight-bold">Cекции</h5>

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

                <h5 class="mt-4 text-center font-weight-bold">Представление материалов</h5>
                <p class="text-justify mb-1">Для участия в работе конференции необходимо <b>до 30 июня 2021 года</b> отправить заявку, заполниив все поля формы, указанной ниже (материал доклада прикрепляете тамже)</p>
                <p class="text-justify mb-1">Материалы докладов (tex- и pdf-файлы) объемом <b>до 5 полных страниц</b> должны быть оформленные в соответствии с требованиями в текстовом редакторе LaTeX. <br>
                Статьи, подготовленные в текстовом редакторе Word, рекомендуется транслировать в формат LaTeX с помощью транслятора GrindEQ Math. <br>
                Материалы докладов участников будут опубликованы  в сборнике научных трудов конференции. Сборник будет размещен в системе РИНЦ.<br>
                </p>
                <p class="text-justify mb-1">
                Названия электронных файлов должны соответствовать Вашей фамилии в английской транскрипции и номера секции (Sidorov4.doc, Sidorov4.tex, Sidorov4.pdf).
                    Программный комитет оставляет за собой право не рассматривать статьи, оформленные с нарушением приведенных правил.</p>
                <p class="text-justify mb-1"><b>До 1 августа 2021 года</b> оргкомитет обязуется
                уведомить участников о принятии материалов и включении доклада в программу конференции с приложением электронной версии программы.</p>

            </div>



        </div>

        <script src="{{ mix('/js/app.js') }}"></script>

    </body>
</html>
