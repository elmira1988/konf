<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Конференция</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
</head>
<body style="background: #d4e8de!important;">
<div class="modal modal-preloader" tabindex="-1" aria-modal="true">
    <div class="modal-dialog" style="margin-top:20%">
        <div class="alert alert-info mt-1" role="alert">
            <span class="alert-icon fa fa-hand-o-up"></span>
            <span>Пожалуйста, подождите, идет загрузка данных ... </span>
            <br>
        </div>
    </div>
</div>


<!-- Модальное окно -->
<div class="modal" tabindex="-1" role="dialog" id="sendok" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body pb-0 text-center">
                <div class="alert alert-success mt-1" role="alert">
                    <span class="alert-icon fa fa-thumbs-up"></span>
                    Ваша заявка успешно отправлена!
                    {{-- <br>Ожидайте письмо с подтверждением на указанную почту! --}}
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ asset('/child-22') }}" type="button" class="btn btn-success m-auto">хорошо</a>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-link d-none" data-toggle="modal" data-target="#sendok" id="sendokbtn" >отправлено</button>



@include('child_22.orgkomitet')
@include('child_22.program_comitet')
@include('child_22.form_uchastiya')
@include('child_22.pravila')

@include('child_22.section1')
@include('child_22.section2')
@include('child_22.section3')
@include('child_22.section4')

<div class="flex-center position-ref full-height" id="app">
    <div class="container content mb-5" @submit="send_form">
        <div class="m-b-md mt-5">
            <h6 class="text-center leader">
                <span class="ml-1 fa fa-circle mr-1"></span>Башкирский государственный университет (Стерлитамакский филиал)
                <span class="ml-1 fa fa-circle mr-1"></span>Салаватская епархия Русской Православной Церкви<br>
                <span class="ml-1 fa fa-circle mr-1"></span>Центр трансграничных правовых исследований Белгородского государственного, национального исследовательского университета
                <span class="ml-1 fa fa-circle mr-1"></span>Межрегиональная просветительская общественная организация «Объединение православных ученых»<br>
                <span class="ml-1 fa fa-circle mr-1"></span>Администрация муниципального района Куюргазинский район Республики Башкортостан
            </h6>

            <h4 class="text-center mt-3 mb-0">
                Всероссийская научно-практическая конференция
            </h4>
            <h3 class="text-center font-weight-bold mb-0">«Здоровое, ответственное родительство - залог счастливого детства»</h3>
            <h6 class="text-center">15 апреля 2022 года<br>
                <a class="" href="{{ asset('files/Informacionnoye_pismo_child_22.pdf') }}">информационное письмо</a> &nbsp;&nbsp;&nbsp;|
                <a class="" href="{{ asset('files/program.pdf') }}">программа конференции</a> &nbsp;&nbsp;&nbsp;
            {{--<a href="{{ asset('files/Spisok_na_09_08_2021.pdf') }}" class="text-center d-block">Список зарегистрированных участников</a> --}}
            {{--<a href="{{ asset('files/Programma_konferencii.pdf') }}" class="text-center d-block">Программа конференции</a>--}}
            <!--<a href="https://us02web.zoom.us/j/81882456773" class="btn btn-info d-block mt-3 text-white">Ссылка на вход в Zoom</a><br>-->

            <a href="https://youtu.be/Nt06mutVe5g" class="btn btn-info d-block mt-3 text-white" target="_blank">
                Трансляция пленарного заседания <i>(начало в 12:00 по Екб)</i>
            </a><br>
            <a href="https://youtu.be/ZhWFoP6STwk" class="btn btn-info d-block mt-3 text-white" target="_blank">
                Трансляция секции #1 <i>(начало в 15:00 по Екб)</i>
            </a><br>
            <a href="https://youtu.be/oNTcAVN3Egg" class="btn btn-info d-block mt-3 text-white" target="_blank">
                Трансляция секции #2 <i>(начало в 15:00 по Екб)</i>
            </a><br>
            <a href="https://youtu.be/ZYwASJy1e_Y" class="btn btn-info d-block mt-3 text-white" target="_blank">
                Трансляция секции #3 <i>(начало в 15:00 по Екб)</i>
            </a><br>
            <a href="https://youtu.be/64yYDRl1OGE" class="btn btn-info d-block mt-3 text-white" target="_blank">
                Трансляция секции #4 <i>(начало в 15:00 по Екб)</i>
            </a><br>

                <!--
            <p class="text-center"> Идентификатор конференции: <b>818 8245 6773</b><br> Код доступа: <b> 321232</b> </p>
            -->
                <p class="text-center">Начало:<b> 10:00 мск (12:00 екб)</b></p>
            {{--
                <h3 class="text-center">Материалы конференции</h3>
            <div class="d-flex justify-content-center">
                <h5 class="text-center text-bold">
                    <i class="fa fa-file-pdf-o mr-2 pl-4"  style="color: darkred"></i>Том 1 (<a href="{{ asset('files/Tom_1.pdf') }}" class="d-inline-block">скачать</a>)
                </h5>
                <h5 class="text-center text-bold">
                    <i class="fa fa-file-pdf-o mr-2 pl-5" style="color: darkred"></i>Том 2 (<a href="{{ asset('files/Tom_2.pdf') }}" class="d-inline-block">скачать</a>)
                </h5>
            </div>
--}}

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
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#pravila">ПРАВИЛА ОФОРМЛЕНИЯ СТАТЬИ</button>
                </div>
            </div>

        </div>

        <h4 class="mt-4 text-center font-weight-bold">Cекции</h4>

        <div class="row">
            <div class="col-lg-6">

                <div class="d-flex list-counter-square m-1">
                    <div class="p-2 mr-1">1</div>
                    <div class="w-100 p-1 pl-2" style="height: 54px;">
                        <button type="button" class="btn btn-section" data-toggle="modal" data-target="#section1">
                            СЕМЬЯ И РЕЛИГИЯ В ИСТОРИЧЕСКОМ, СОЦИОЛОГИЧЕСКОМ И ФИЛОСОФСКОМ АСПЕКТАХ
                        </button>

                    </div>
                </div>

                <div class="d-flex list-counter-square m-1">
                    <div class="p-2 mr-1">2</div>
                    <div class="w-100 p-1 pl-2" style="height: 54px;">
                        <button type="button" class="btn btn-section" data-toggle="modal" data-target="#section2">
                        АКТУАЛЬНЫЕ ПРОБЛЕМЫ СООТНОШЕНИЯ ПРАВА И МОРАЛИ В ОБЩЕСТВЕ
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="d-flex list-counter-square m-1">
                    <div class="p-2 mr-1">3</div>
                    <div class="w-100 p-1 pl-2" style="height: 54px;">
                        <button type="button" class="btn btn-section" data-toggle="modal" data-target="#section3">
                        ЗДОРОВОЕ ДОЛГОЛЕТИЕ И ПСИХОЛОГИЯ СЕМЕЙНЫХ ОТНОШЕНИЙ
                        </button>
                    </div>
                </div>

                <div class="d-flex list-counter-square m-1">
                    <div class="p-2 mr-1">4</div>
                    <div class="w-100 p-1 pl-2" style="height: 54px;">
                        <button type="button" class="btn btn-section" data-toggle="modal" data-target="#section4">
                            СЕМЬЯ И ТРАНСФОРМАЦИЯ ОТНОШЕНИЙ В УСЛОВИЯХ ЦИФРОВИЗАЦИИ ОБЩЕСТВА
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="mt-4 text-center font-weight-bold">Представление материалов</h4>
        <p class="text-justify mb-1">Для участия в работе конференции необходимо отправить заявку и материалы доклада, оформленные по указнным ниже формам.</p>
        <p class="text-justify mb-1">Материалы докладов (docx-файлы) объемом <b>до 8 полных страниц</b> должны быть оформленные в соответствии с требованиями в текстовом редакторе.
            <br>Материалы докладов участников будут опубликованы  в сборнике научных трудов конференции. Сборник будет размещен в системе РИНЦ.<br>
        </p>
        <p class="text-justify mb-1">
            Названия электронных файлов должны соответствовать Вашей фамилии в английской транскрипции и номера секции (Ivanovv4.docx).
            Программный комитет оставляет за собой право не рассматривать статьи, оформленные с нарушением приведенных правил.</p>
        <p class="text-justify mb-1"><b>До 11 апреля 2022 года</b> оргкомитет обязуется
            уведомить участников о принятии материалов и включении доклада в программу конференции с приложением электронной версии программы.</p>
        <p class="font-weight-bold" style="color:red">Заявки и материалы доклада можно присылать до 8 апреля!</p>

        <h4 class="mt-4 text-center font-weight-bold">Отправить заявку на участие</h4>

        <div class="row">
            <div class="col-lg-12">
                <p class="alert alert-warning" role="alert">
                    <span class="fa fa-exclamation-triangle"></span> Внимание!<br>
                    Все поля, указанные ниже, обязательны к заполнению (кроме полей "Отчество")<br>
                    Материалы доклада загружаются в виде файла формата *.docx
                    {{--Все поля, указанные ниже, обязательны к заполнению (кроме полей "Отчество" и "Статья", в том случае если в поле "Форма участия" указано "Слушатель")!<br>
                    Поля "Учёная степень", "Учёное звание", "Должность" автора/авторов  указываются без сокращений<br>
                    Материалы доклада загружаются в виде файла формата *.docx--}}
                </p>
            </div>

        </div>


        <form class="form-horizontal form-label-left mt-3" action="{{ route('child_articles.store') }}" enctype = 'multipart/form-data' method="POST">

            <child-request-component :forms="{{ json_encode(\App\ChildForm::get()) }}"
                                     :sections="{{ json_encode(\App\ChildSection::get()) }}"
                                     :degree="{{ json_encode(\App\Degree::get()) }}"
                                     :ranks="{{ json_encode(\App\Rank::get()) }}"
                                     :errors="errors"
            ></child-request-component>
            <div class="row mt-4">
                <div class="col-lg-12 form-group">
                    <button class="d-none" type="submit" id="send_form"></button>

                    <label class="group-5 btn btn-success pull-right" type="button"  for="send_form">
                        <span class="fa fa-paper-plane"></span> Отправить заявку
                    </label>
                </div>
            </div>

        </form>

        <div class="row mt-5">
            <div class="col-lg-3">
                <img src="{{ asset('files/BashGU.png') }}" class="img-fluid m-auto d-block p-2" style="max-height: 120px;">
            </div>

            <div class="col-lg-3">
                <img src="{{ asset('files/prosvet_org.png') }}" class="img-fluid m-auto d-block p-2" style="max-height: 120px;">
            </div>

            <div class="col-lg-6">

                <img src="{{ asset('files/belgorod.png') }}" class="img-fluid m-auto d-block p-2" style="max-height: 120px;">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-3">
                <img src="{{ asset('files/Eparhiya.png') }}" class="img-fluid m-auto d-block p-2" style="max-height: 120px;">
            </div>

            <div class="col-lg-9">
                <img src="{{ asset('files/kr.png') }}" class="img-fluid m-auto d-block p-2" style="max-height: 120px;">
            </div>
        </div>




        {{--
        http://library.gpntb.ru/cgi-bin/irbis64r_simplesite/cgiirbis_64.exe?C21COM=S&I21DBN=UDC&Z21ID=&S21FMT=UDC&S21ALL=%3C.%3EU=33%3C.%3E&P21DBN=IBIS&S21COLORTERMS=0
        --}}

        {{--
        http://library.gpntb.ru/cgi-bin/irbis64r_simplesite/cgiirbis_64.exe?C21COM=F&I21DBN=BBK&S21FMT=bbk&S21ALL=%3C.%3EU=..%3C.%3E&P21DBN=IBIS&Z21ID=
        --}}

    </div>



</div>

<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ asset('/js/script.js') }}"></script>
<style>
    a{
        color:#16a15b!important;
    }

    a.btn-success{
        color:white!important;
    }

    .btn-info {
        color: #212529;
        background-color: #16a15b;
        border-color: #16a15b;
    }

    .btn-info:hover {
        color: #fff;
        background-color: #0f8b4c;
        border-color: #0f8b4c;
    }

    .btn-link {
        color: #16a15b;
    }

    .btn-link:hover {
        color: #0f8b4c;
        text-decoration: underline;
    }

    .list-counter-square div {
        background: #0f8b4c;
        color: white;
    }

    .btn-section{
        color: white;
        text-align: left;
        padding: 0px;
    }

</style>
</body>
</html>
