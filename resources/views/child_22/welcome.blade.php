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
                    Ваша заявка успешно отправлена! <br>Ожидайте письмо с подтверждением на указанную почту!
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
                <span class="ml-1 fa fa-circle mr-1"></span>Министерство науки и высшего образования Российской Федерации<br>
                <span class="ml-1 fa fa-circle mr-1"></span>Стерлитамакский филиал ФГБОУ ВО "Башкирский государственный университет"
            </h6>


            <h4 class="text-center mt-3 mb-0">
                Всероссийская научно-практическая конференция
            </h4>
            <h3 class="text-center font-weight-bold mb-0">«Здоровое, ответственное родительство - залог счастливого детства»</h3>
            <h6 class="text-center">15 апреля 2022 года<br>
                <a class="" href="{{ asset('files/Informacionnoye_pismo_child_22.pdf') }}">информационное письмо</a> &nbsp;&nbsp;&nbsp;
            {{--<a href="{{ asset('files/Spisok_na_09_08_2021.pdf') }}" class="text-center d-block">Список зарегистрированных участников</a> --}}
            {{--<a href="{{ asset('files/Programma_konferencii.pdf') }}" class="text-center d-block">Программа конференции</a>--}}
            <a href="https://us02web.zoom.us/j/81882456773" class="btn btn-info d-block mt-3 text-white">Ссылка на вход в Zoom</a><br>
            <p class="text-center"> Идентификатор конференции: <b>818 8245 6773</b><br> Код доступа: <b> 321232</b> </p>
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
                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#pravila">ПРАВИЛА ОФОРМЛЕНИЯ ТЕЗИСОВ</button>
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
                            СЕМЬЯ И РЕЛИГИЯ В ИСТОРИЧЕСКОМ, СОЦИОЛОГИЧЕСКОМ И ПСИХОЛОГИЧЕСКОМ АСПЕКТАХ
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
        <p class="text-justify mb-1">Для участия в работе конференции необходимо <b>до 30 марта 2022 года</b> отправить заявку и материалы доклада, оформленные по указнным ниже формам.</p>
        <p class="text-justify mb-1">Материалы докладов (docx-файлы) объемом <b>до 8 полных страниц</b> должны быть оформленные в соответствии с требованиями в текстовом редакторе.
            <br>Материалы докладов участников будут опубликованы  в сборнике научных трудов конференции. Сборник будет размещен в системе РИНЦ.<br>
        </p>
        <p class="text-justify mb-1">
            Названия электронных файлов должны соответствовать Вашей фамилии в английской транскрипции и номера секции (Ivanovv4.docx).
            Программный комитет оставляет за собой право не рассматривать статьи, оформленные с нарушением приведенных правил.</p>
        <p class="text-justify mb-1"><b>До 10 апреля 2022 года</b> оргкомитет обязуется
            уведомить участников о принятии материалов и включении доклада в программу конференции с приложением электронной версии программы.</p>
        <p class="font-weight-bold" style="color:red">Заявки и материалы доклада можно присылать до 4 апреля!</p>

        <h4 class="mt-4 text-center font-weight-bold">Отправить заявку на участие</h4>

        <div class="row">
            <div class="col-lg-12">
                <p class="alert alert-warning" role="alert">
                    <span class="fa fa-exclamation-triangle"></span> Внимание!<br>
                    Все поля, указанные ниже, обязательны к заполнению (кроме поля "Отчество")!<br>
                    Поля "Учёная степень", "Учёное звание", "Должность" автора/авторов  указываются без сокращений<br>
                    Материалы доклада загружаются в виде файла формата *.docx
                </p>
            </div>

        </div>


        <form class="form-horizontal form-label-left mt-3" action="{{ route('child_articles.store') }}" enctype = 'multipart/form-data' method="POST">
            <h5 class="text-center">Авторы</h5>
            <child-authors-component :degree="{{ json_encode(\App\Degree::get()) }}"
                               :ranks="{{ json_encode(\App\Rank::get()) }}"
                               :errors="errors"></child-authors-component>

            <h5 class="text-center mt-4">Статья</h5>

            <div class="row">
                <div class="col-lg-12 form-group">
                            <textarea class="form-control"
                                      rows="3"
                                      name="article_name"
                                      :class="{'error':errors['article_name']}"
                                      @focus="$emit('update:errors', removeErrors($event.target))"
                                      placeholder="Название статьи"></textarea>
                </div>
            </div>

            <div class="row mt-3">


                <div class="col-lg-6">
                        <label for="tex">Размещение тезиса доклада в сборнике</label>
                        <select class="form-control"
                                placeholder="секция"
                                name="section"
                                @focus="$emit('update:errors', removeErrors($event.target))"
                                :class="{'error':errors['section']}">
                            <option value="1">да</option>
                            <option value="0">нет</option>
                        </select>
                </div>

                <div class="col-lg-6 form-group">
                    <div class="form-group">
                        <label for="tex">Статья ( *.docx)</label>
                        <input type="file" class="form-control-file" id="tex" name="files" :class="{'error':errors['files']}">
                    </div>
                </div>
            </div>

            <h5 class="text-center mt-4">Участие в конференции</h5>

            <div class="row">
                <div class="col-lg-6">
                        <select class="form-control"
                                placeholder="секция"
                                name="section"
                                @focus="$emit('update:errors', removeErrors($event.target))"
                                :class="{'error':errors['section']}">
                            <option value="">Секция</option>
                            @foreach(\App\ChildSection::get() as $section)
                                <option value="{{ $section->id }}">{{ $section->id.'.  '.$section->name }}</option>
                            @endforeach
                        </select>
                </div>

                <div class="col-lg-6">
                        <select class="form-control"
                                placeholder="форма участия"
                                name="form"
                                @focus="$emit('update:errors', removeErrors($event.target))"
                                :class="{'error':errors['form']}">
                            <option value="">Форма участия</option>
                            @foreach(\App\ChildForm::get() as $form)
                                <option value="{{ $form->id }}">{{ $form->id.'.  '.$form->name }}</option>
                            @endforeach
                        </select>
                </div>

            </div>

            <h5 class="text-center mt-4">Контактные данные</h5>

            <div class="row">
                <div class="col-lg-6">
                        <input type="text"
                               class="form-control has-feedback-left"
                               data-masked= "(999)999-9999"
                               :class="{'error':errors['phone']}"
                               @focus="$emit('update:errors', removeErrors($event.target))"
                               name="phone"
                               placeholder="Телефон">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-lg-6">
                        <input type="text"
                               class="form-control has-feedback-left"
                               :class="{'error':errors['email']}"
                               @focus="$emit('update:errors', removeErrors($event.target))"
                               name="email"
                               placeholder="E-mail">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <textarea class="form-control"
                              rows="3"
                              name="node"
                              :class="{'error':errors['node']}"
                              @focus="$emit('update:errors', removeErrors($event.target))"
                              placeholder="Комментарий"></textarea>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12 form-group">
                    <button class="d-none" type="submit" id="send_form"></button>

                    <label class="group-5 btn btn-success pull-right" type="button"  for="send_form">
                        <span class="fa fa-paper-plane"></span> Отправить заявку
                    </label>
                </div>
            </div>

        </form>

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
