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
    <h1 class="mt-5">Все заявки. Докладчики. Emails</h1>
    @for($i=1;$i<=4;$i++)
        <div style="margin-top: 55px;">
            <h2 class="mt-5">{{ \App\ChildSection::where('id',"=",$i)->get()->first()->name }} / всего: {{ \App\ChildArticle::where([
                                            ['section_id', '=', $i],
                                            ['form_id', '<>', '4'],
                                        ])->get()->count() }}</h2>

            <form action="push" method="post" class="mt-5">
                @csrf
                <div class="form-group">
                    <textarea name="text" id="text" cols="30" rows="5" class="form-control"></textarea>
                </div>


                <div class="form-group">
                    <textarea name="emails" id="emails" cols="30" rows="10" class="form-control">@foreach(\App\ChildArticle::where([['section_id', '=', $i], ['form_id', '<>', '4']])->get() as $k=>$article){{ $article->email }}, @endforeach</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Отправить</button>
                </div>
            </form>
        </div>
    @endfor
    <br>

    <hr>


    <h1 class="mt-5">Все заявки. Слушатели. Emails</h1>
    @for($i=1;$i<=4;$i++)
        <div style="margin-top: 55px;">
            <h2>{{ \App\ChildSection::where('id',"=",$i)->get()->first()->name }} / всего: {{ \App\ChildArticle::where([
                                                ['section_id', '=', $i],
                                                ['form_id', '=', '4'],
                                            ])->get()->count() }}</h2>

            <!--
                @foreach(\App\ChildArticle::where([
                            ['section_id', '=', $i],
                            ['form_id', '=', '4']
                        ])->get() as $k=>$article)
                    {{ $article->email }},
                @endforeach
            -->

            <form action="push" method="post" class="mt-5">
                @csrf
                <div class="form-group">
                    <textarea name="text" id="text" cols="30" rows="5" class="form-control"></textarea>
                </div>


                <div class="form-group">
                    <textarea name="emails" id="emails" cols="30" rows="10" class="form-control">@foreach(\App\ChildArticle::where([['section_id', '=', $i], ['form_id', '=', '4']])->get() as $k=>$article){{ $article->email }}, @endforeach</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Отправить</button>
                </div>
            </form>
        </div>
    @endfor
</div>

<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ asset('/js/script.js') }}"></script>

</body>
</html>
