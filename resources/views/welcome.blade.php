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
            <div class="container content mb-5" @submit="send_form">
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
                <p class="text-justify mb-1">Для участия в работе конференции необходимо <b>до 30 июня 2021 года</b> отправить заявку, заполнив все поля формы, указанной ниже (материал доклада прикрепляете тамже)</p>
                <p class="text-justify mb-1">Материалы докладов (tex- и pdf-файлы) объемом <b>до 5 полных страниц</b> должны быть оформленные в соответствии с требованиями в текстовом редакторе LaTeX. <br>
                Статьи, подготовленные в текстовом редакторе Word, рекомендуется транслировать в формат LaTeX с помощью транслятора GrindEQ Math. <br>
                Материалы докладов участников будут опубликованы  в сборнике научных трудов конференции. Сборник будет размещен в системе РИНЦ.<br>
                </p>
                <p class="text-justify mb-1">
                Названия электронных файлов должны соответствовать Вашей фамилии в английской транскрипции и номера секции (Sidorov4.doc, Sidorov4.tex, Sidorov4.pdf).
                    Программный комитет оставляет за собой право не рассматривать статьи, оформленные с нарушением приведенных правил.</p>
                <p class="text-justify mb-1"><b>До 1 августа 2021 года</b> оргкомитет обязуется
                уведомить участников о принятии материалов и включении доклада в программу конференции с приложением электронной версии программы.</p>


                <h4 class="mt-4 text-center font-weight-bold">Отправить заявку на участие</h4>

                <form class="form-horizontal form-label-left mt-3" action="{{ route('articles.store') }}">
                    <h5 class="text-center">Авторы</h5>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="surname_ru" placeholder="Фамилия (на рус. языке)">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="name_ru" placeholder="Имя (на рус. языке)">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="patronymic_ru" placeholder="Отчество (на рус. языке)">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="work_ru" placeholder="Место работы (на рус. языке)">
                                <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="adress_ru" placeholder="Адрес (на рус. языке)">
                                <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="status_ru" placeholder="Должность (на рус. языке)">
                                <span class="fa fa-star form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12 pr-0 form-group">
                                        <select class="form-control" name="stepen" placeholder="ученая степень">
                                            <option value="">ученая степень</option>
                                            <option value="1">кандидат наук</option>
                                            <option value="2">доктор наук</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="col-lg-12 pl-0 form-group">
                                        <select class="form-control" name="zvaniye" placeholder="ученое звание">
                                            <option value="">ученое звание</option>
                                            <option value="1">доцент</option>
                                            <option value="2">профессор</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="col-lg-6 ">
                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="surname_en" placeholder="Фамилия (на анг. языке)">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="name_en" placeholder="Имя (на анг. языке)">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="patronymic_en" placeholder="Отчество (на анг. языке)">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="work_en" placeholder="Место работы (на анг. языке)">
                                <span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="adress_en" placeholder="Адрес (на анг. языке)">
                                <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="status_en" placeholder="Должность (на анг. языке)">
                                <span class="fa fa-star form-control-feedback left" aria-hidden="true"></span>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12 text-right">
                                <button type="button" class="btn btn-outline-secondary pt-0 pb-0 pl-2 pr-2"><span class="fa fa-plus mr-2"></span>добавить автора</button>
                            </div>
                        </div>
                    </div>


                    <h5 class="text-center mt-4">Статья</h5>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <textarea class="form-control" rows="3" name="article_name_ru" :class="{'error':errors['article_name_ru']}" placeholder="Название статьи (на рус. языке)"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <textarea class="form-control" rows="3" name="article_name_en" :class="{'error':errors['article_name_en']}" placeholder="Название статьи (на англ. языке)"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <textarea class="form-control" rows="3" name="annot_ru" :class="{'error':errors['annot_ru']}" placeholder="Аннотация к  статье (на англ. языке)"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <textarea class="form-control" rows="3" name="annot_en" :class="{'error':errors['annot_en']}" placeholder="Аннотация к  статье (на англ. языке)"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <label>Ключевые слова на русском языке</label>
                                <input type="text" class="form-control" name="word_ru" placeholder="слово на рус. языке">
                                <button type="button" class="btn btn-outline-secondary mt-2 pt-0 pb-0 pl-2 pr-2 pull-right">
                                    <span class="fa fa-plus mr-2"></span>добавить слово</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group">
                                <label>Ключевые слова на английском языке</label>
                                <input type="text" class="form-control" name="word_en" placeholder="слово на англ. языке">
                                <button type="button" class="btn btn-outline-secondary mt-2 pt-0 pb-0 pl-2 pr-2 pull-right">
                                    <span class="fa fa-plus mr-2"></span>добавить слово</button>
                            </div>
                        </div>


                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-3">
                            <div class="col-lg-12 form-group">
                                <input type="text" class="form-control" name="udk" placeholder="Рубрикатор УДК">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="col-lg-12 form-group">
                                <input type="text" class="form-control" name="bbk" placeholder="Рубрикатор ББК">
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="col-lg-12 form-group d-flex">
                                <label class="mr-2">Язык текста статьи</label>
                                <div class="ml-5">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="ru" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">русский</label>
                                    </div>
                                </div>

                                <div class="ml-5">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="en" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">английский</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <h5 class="text-center mt-4">Участие в конференции</h5>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group has-feedback">
                                <select class="form-control" placeholder="секция" name="section">
                                    <option value="">Секция</option>
                                    <option value="1">1. Спектральная теория дифференциальных операторов</option>
                                    <option value="2">2. Теория функций и функционального анализа</option>
                                    <option value="3">3. Краевые задачи для дифференциальных уравнений</option>
                                    <option value="4">4. Обратные и некорректные задачи</option>
                                    <option value="5">5. Уравнения смешанного типа</option>
                                    <option value="6">6. Математические проблемы механики</option>
                                    <option value="7">7. Прикладные задачи термодинамики и теплофизики</option>
                                    <option value="8">8. Математическое моделирование сложных процессов и систем</option>
                                    <option value="9">9. Актуальные проблемы математического и физического образования в Вузе</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group has-feedback">
                                <select class="form-control" placeholder="форма участия" name="form">
                                    <option value="">Форма участия</option>
                                    <option value="1">Выступление с пленарным докладом</option>
                                    <option value="2">Выступление с секционным докладом</option>
                                    <option value="3">Представление стендового доклада</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <h5 class="text-center mt-4">Контактные данные</h5>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="phone" placeholder="Телефон">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="col-lg-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="email" placeholder="E-mail">
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
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

    </body>
</html>
