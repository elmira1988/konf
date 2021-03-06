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
<body>
<div class="container mt-5 mb-5 artciles-all">
    <h1>Все заявки. Докладчики.</h1>

    @for($i=1;$i<=4;$i++)
        <h2 class="mt-5">{{ \App\ChildSection::where('id',"=",$i)->get()->first()->name }} / всего: {{ \App\ChildArticle::where([
                                            ['section_id', '=', $i],
                                            ['form_id', '<>', '4'],
                                        ])->get()->count() }}</h2>

        <table class="table table-bordered">
            <tbody>
            @foreach(\App\ChildArticle::where([
                                            ['section_id', '=', $i],
                                            ['form_id', '<>', '4'],
                                        ])->get() as $k=>$article)
                <tr>
                    <td style="width: 45px;">
                        {{ $article->id }}
                    </td>

                    <td>
                        @foreach($article->authors as $author)
                            <p> {{$author->surname.' '.$author->name.' '.$author->patronymic}} </p>
                        @endforeach
                    </td>

                    <td>
                        @foreach($article->authors as $author)
                            <p> {{$author->adress}} </p>
                        @endforeach
                    </td>

                    <td>
                        {{ $article->email}}
                    </td>

                    <td>
                        {{ $article->phone }}
                    </td>

                    <td>
                        <p> Материалы доклада <a href="{{ asset($article->files) }}">скачать</a></p>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    @endfor

    <h1 class="mt-5">Все заявки. Слушатели.</h1>
    @for($i=1;$i<=4;$i++)
        <h2>{{ \App\ChildSection::where('id',"=",$i)->get()->first()->name }} / всего: {{ \App\ChildArticle::where([
                                            ['section_id', '=', $i],
                                            ['form_id', '=', '4'],
                                        ])->get()->count() }}</h2>

        <table class="table table-bordered">
            <tbody>
            @foreach(\App\ChildArticle::where([
                                            ['section_id', '=', $i],
                                            ['form_id', '=', '4'],
                                        ])->get() as $k=>$article)
                <tr>
                    <td style="width: 45px;">
                        {{ $article->id }}
                    </td>

                    <td>
                        @foreach($article->authors as $author)
                            <p> {{$author->surname.' '.$author->name.' '.$author->patronymic}} </p>
                        @endforeach
                    </td>

                    <td>
                        @foreach($article->authors as $author)
                            <p> {{$author->adress}} </p>
                        @endforeach
                    </td>

                    <td>
                        {{ $article->email}}
                    </td>

                    <td>
                        {{ $article->phone }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endfor
</div>

<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ asset('/js/script.js') }}"></script>

</body>
</html>
