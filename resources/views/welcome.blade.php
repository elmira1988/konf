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
                    <a href="{{ asset('/math-21') }}" type="button" class="btn btn-success m-auto">хорошо</a>
                </div>
            </div>
        </div>
    </div>

<button type="button" class="btn btn-link d-none" data-toggle="modal" data-target="#sendok" id="sendokbtn" >отправлено</button>



@include('orgkomitet')
    @include('program_comitet')
    @include('form_uchastiya')
    @include('pravila')

        <div class="flex-center position-ref full-height" id="app">
            <div class="container content mb-5" @submit="send_form">
                <div class="m-b-md mt-5">
                    <h6 class="text-center leader">
                            <span class="ml-1 fa fa-circle mr-1"></span>Министерство науки и высшего образования Российской Федерации
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
                    <h6 class="text-center">12 – 15 сентября 2021 года<br>
                        <a class="" href="{{ asset('files/Informacionnoye_pismo_ru.pdf') }}">информационное письмо</a> &nbsp;&nbsp;&nbsp;
                        <a class="" href="{{ asset('files/Informacionnoye_pismo_en.pdf') }}">information letter</a>
                    </h6>
                    <a href="{{ asset('files/Spisok_na_09_08_2021.pdf') }}" class="text-center d-block">Список зарегистрированных участников</a>
                    {{--<a href="{{ asset('files/Programma_konferencii.pdf') }}" class="text-center d-block">Программа конференции</a>
                    <a href="https://us02web.zoom.us/j/85063108408?pwd=S3VRa3BJa0xCZXkzTVNERGg5ajhHQT09" class="btn btn-info d-block mt-3 text-white">Ссылка на вход в Zoom</a>
                    <p class="text-center">Код доступа: <b> 232779</b><br> Идентификатор конференции: <b>850 6310 8408</b></p>--}}
                    <h3 class="text-center">Материалы конференции</h3>
                    <div class="d-flex justify-content-center">
                        <h5 class="text-center text-bold">
                            <i class="fa fa-file-pdf-o mr-2 pl-4"  style="color: darkred"></i>Том 1 (<a href="{{ asset('files/Tom_1.pdf') }}" class="d-inline-block">скачать</a>)
                        </h5>
                        <h5 class="text-center text-bold">
                            <i class="fa fa-file-pdf-o mr-2 pl-5" style="color: darkred"></i>Том 2 (<a href="{{ asset('files/Tom_2.pdf') }}" class="d-inline-block">скачать</a>)
                        </h5>
                    </div>


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

                <h4 class="mt-4 text-center font-weight-bold">Представление материалов</h4>
                <p class="text-justify mb-1">Для участия в работе конференции необходимо <b>до 30 июня 2021 года</b> отправить заявку и материалы доклада, оформленные по указнным ниже формам.</p>
                <p class="text-justify mb-1">Материалы докладов (tex- и pdf-файлы) объемом <b>до 5 полных страниц</b> должны быть оформленные в соответствии с требованиями в текстовом редакторе LaTeX. <br>
                Статьи, подготовленные в текстовом редакторе Word, рекомендуется транслировать в формат LaTeX с помощью транслятора GrindEQ Math. <br>
                Материалы докладов участников будут опубликованы  в сборнике научных трудов конференции. Сборник будет размещен в системе РИНЦ.<br>
                </p>
                <p class="text-justify mb-1">
                Названия электронных файлов должны соответствовать Вашей фамилии в английской транскрипции и номера секции (Sidorov4.doc, Sidorov4.tex, Sidorov4.pdf).
                    Программный комитет оставляет за собой право не рассматривать статьи, оформленные с нарушением приведенных правил.</p>
                <p class="text-justify mb-1"><b>До 1 августа 2021 года</b> оргкомитет обязуется
                уведомить участников о принятии материалов и включении доклада в программу конференции с приложением электронной версии программы.</p>
                <p class="font-weight-bold" style="color:red">Заявки и материалы доклада можно присылать до 15 июля!</p>

                <h4 class="mt-4 text-center font-weight-bold">Отправить заявку на участие</h4>

                <div class="row">
                    <div class="col-lg-12">
                        <p class="alert alert-warning" role="alert">
                            <span class="fa fa-exclamation-triangle"></span> Внимание!<br>
                            Все поля, указанные ниже, обязательны к заполнению (кроме поля "Отчество")!<br>
                            В поле "Место работы" указывается только наименование организации, данные о ее местонахождении заполняются в строке "Адрес" (необходимо указать страну и город)<br>
                            Поля "Учёная степень", "Учёное звание", "Должность" автора/авторов  указываются без сокращений (на рус. и англ. яз.)<br>
                            Материалы доклада загружаются в виде архива ( *.zip, *.rar)
                            </p>
                    </div>

                </div>


                <form class="form-horizontal form-label-left mt-3" action="{{ route('articles.store') }}" enctype = 'multipart/form-data' method="POST">
                    <h5 class="text-center">Авторы</h5>
                    <authors-component :degree="{{ json_encode(\App\Degree::get()) }}"
                                       :ranks="{{ json_encode(\App\Rank::get()) }}"
                                       :errors="errors"></authors-component>

                    <h5 class="text-center mt-4">Статья</h5>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <textarea class="form-control"
                                          rows="3"
                                          name="article_name_ru"
                                          :class="{'error':errors['article_name_ru']}"
                                          @focus="$emit('update:errors', removeErrors($event.target))"
                                          placeholder="Название статьи (на рус. языке)"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <textarea class="form-control"
                                          rows="3"
                                          name="article_name_en"
                                          :class="{'error':errors['article_name_en']}"
                                          @focus="$emit('update:errors', removeErrors($event.target))"
                                          placeholder="Название статьи (на англ. языке)"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <textarea class="form-control"
                                          rows="3"
                                          name="annot_ru"
                                          :class="{'error':errors['annot_ru']}"
                                          @focus="$emit('update:errors', removeErrors($event.target))"
                                          placeholder="Аннотация к  статье (на рус. языке)"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <textarea class="form-control"
                                          rows="3"
                                          name="annot_en"
                                          :class="{'error':errors['annot_en']}"
                                          @focus="$emit('update:errors', removeErrors($event.target))"
                                          placeholder="Аннотация к  статье (на англ. языке)"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <label>Ключевые слова на русском языке</label>

                                <list-input-component input_name="word_ru"
                                                      button="добавить слово"
                                                      placeholder="слово на рус. языке"
                                                      :errors="errors"></list-input-component>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <label>Ключевые слова на английском языке</label>
                                <list-input-component input_name="word_en"
                                                      button="добавить слово"
                                                      placeholder="слово на англ. языке"
                                                      :errors="errors"></list-input-component>
                            </div>
                        </div>


                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group d-flex">
                                <span class="w-50" style="line-height: 34px;">Рубрикатор УДК</span>
                                <input type="text"
                                       class="form-control"
                                       name="udk"
                                       :class="{'error':errors['udk']}"
                                       @focus="$emit('update:errors', removeErrors($event.target))"
                                       placeholder="Рубрикатор УДК">
                            </div>
                        </div>


                        <div class="col-lg-12 mt-3">
                            <div class="col-lg-12 form-group d-flex">
                                <label class="mr-2">Язык текста статьи</label>
                                <div class="ml-5">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="language" id="ru" value="ru" checked>
                                        <label class="form-check-label" for="ru" style="cursor:pointer">русский</label>
                                    </div>
                                </div>

                                <div class="ml-5">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="language" id="en" value="en">
                                        <label class="form-check-label" for="en" style="cursor:pointer">английский</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <div class="form-group">
                                    <label for="tex">Материалы доклада ( *.zip, *.rar)</label>
                                    <input type="file" class="form-control-file" id="tex" name="files" :class="{'error':errors['files']}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="text-center mt-4">Участие в конференции</h5>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group has-feedback">
                                <select class="form-control"
                                        placeholder="секция"
                                        name="section"
                                        @focus="$emit('update:errors', removeErrors($event.target))"
                                        :class="{'error':errors['section']}">
                                    <option value="">Секция</option>
                                    @foreach(\App\Section::get() as $section)
                                    <option value="{{ $section->id }}">{{ $section->id.'.  '.$section->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group has-feedback">
                                <select class="form-control"
                                        placeholder="форма участия"
                                        name="form"
                                        @focus="$emit('update:errors', removeErrors($event.target))"
                                        :class="{'error':errors['form']}">
                                    <option value="">Форма участия</option>
                                    @foreach(\App\Form::get() as $form)
                                        <option value="{{ $form->id }}">{{ $form->id.'.  '.$form->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                    <h5 class="text-center mt-4">Контактные данные</h5>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text"
                                       class="form-control has-feedback-left"
                                       data-masked= "(999)999-9999"
                                       :class="{'error':errors['phone']}"
                                       @focus="$emit('update:errors', removeErrors($event.target))"
                                       name="phone"
                                       placeholder="Телефон">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text"
                                       class="form-control has-feedback-left"
                                       :class="{'error':errors['email']}"
                                       @focus="$emit('update:errors', removeErrors($event.target))"
                                       name="email"
                                       placeholder="E-mail">
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12 form-group">
                                <textarea class="form-control"
                                          rows="3"
                                          name="node"
                                          :class="{'error':errors['node']}"
                                          @focus="$emit('update:errors', removeErrors($event.target))"
                                          placeholder="Комментарий"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-12">
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

    </body>
</html>
