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
    <div class="container mt-5 mb-5 artciles-all">
        <h1>Все заявки</h1>
        @foreach(\App\Article::get() as $k=>$article)
            <h4 class="mt-5">Заявка №{{($k+1)}} от {{$article->created_at->format('d.m.Y h:i')}}</h4>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>Авторы</td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->surname_ru.' '.$author->name_ru.' '.$author->patronymic_ru}} </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Название статьи</td>
                <td>
                    <p>{{ $article->name_ru }}</p>
                    <p>{{ $article->name_en }}</p>
                </td>
            </tr>
            <tr>
                <td>Рубрикатор УДК</td>
                <td>
                    <p>{{ $article->udk }}</p>
                </td>
            </tr>

            <tr>
                <td>Ключевые слова</td>
                <td>

                    @if(json_decode($article->word_ru))
                    <p> @foreach(json_decode($article->word_ru) as $key => $word)
                            @if($key>0), @endif {{$word}}
                        @endforeach
                    </p>
                    @endif

                    @if(json_decode($article->word_en))
                    <p> @foreach(json_decode($article->word_en) as $key => $word)
                            @if($key>0), @endif {{$word}}
                        @endforeach
                    </p>
                        @endif
                </td>
            </tr>

            <tr>
                <td>Аннотация к статье</td>
                <td>
                    <p>{{ $article->annot_ru }}</p>
                    <p>{{ $article->annot_en }}</p>
                </td>
            </tr>

            <tr>
                <td>Место работы автора/авторов</td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->work_ru}} </p>
                        <p> {{$author->work_en}} </p>
                    @endforeach
                </td>
            </tr>

            <tr>
                <td>Адрес</td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->adress_ru}} </p>
                        <p> {{$author->adress_en}} </p>
                    @endforeach
                </td>
            </tr>

            <tr>
                <td>Ученая степень, ученое звание,<br> должность/авторов</td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->degree->name. ', '.$author->rank->name }} <br> {{ $author->status_ru.'/'.$author->status_en }}</p>
                    @endforeach
                </td>
            </tr>

            <tr>
                <td>Контакты</td>
                <td>
                    {{ $article->email}} <br> {{ $article->phone }}
                </td>
            </tr>

            <tr>
                <td>Язык текста статьи</td>
                <td>
                    {{ $article->language }}
                </td>
            </tr>

            <tr>
                <td>Секция конференции</td>
                <td>
                    {{ $article->section->id }}
                </td>
            </tr>

            <tr>
                <td>Форма участия </td>
                <td>
                    {{ $article->form->name }}
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <p> Материалы доклада <a href="{{ $article->files }}">скачать</a></p>
                </td>
            </tr>

            @if($article->node!='')
                <tr>
                    <td colspan="2" class="font-italic font-weight-normal">
                        <p> {{ $article->node }}</p>
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
        @endforeach
    </div>


<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ asset('/js/script.js') }}"></script>

</body>
</html>
