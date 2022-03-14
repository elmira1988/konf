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
    <h2>{{ \App\ChildSection::where('id',"=","1")->get()->first()->name }}</h2>

    @foreach(\App\ChildArticle::where([
                                    ['section_id', '=', '1'],
                                    ['form_id', '<>', '4'],
                                ])->get() as $k=>$article)

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>
                    {{ $article->id }}
                </td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->adress}} </p>
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>

    @endforeach

    <h2 class="mt-5">{{ \App\ChildSection::where('id',"=","2")->get()->first()->name }}</h2>

    @foreach(\App\ChildArticle::where([
                                    ['section_id', '=', '2'],
                                    ['form_id', '<>', '4'],
                                ])->get() as $k=>$article)

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>
                    {{ $article->id }}
                </td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->adress}} </p>
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>

    @endforeach

    <h2 class="mt-5">{{ \App\ChildSection::where('id',"=","3")->get()->first()->name }}</h2>

    @foreach(\App\ChildArticle::where([
                                    ['section_id', '=', '3'],
                                    ['form_id', '<>', '4'],
                                ])->get() as $k=>$article)

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>
                    {{ $article->id }}
                </td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->adress}} </p>
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>

    @endforeach

    <h2 class="mt-5">{{ \App\ChildSection::where('id',"=","4")->get()->first()->name }}</h2>

    @foreach(\App\ChildArticle::where([
                                   ['section_id', '=', '4'],
                                   ['form_id', '<>', '4'],
                               ])->get() as $k=>$article)

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>
                    {{ $article->id }}
                </td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->adress}} </p>
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>

    @endforeach




    <h1 class="mt-5">Все заявки. Слушатели.</h1>
    <h2>{{ \App\ChildSection::where('id',"=","1")->get()->first()->name }}</h2>

    @foreach(\App\ChildArticle::where([
                                    ['section_id', '=', '1'],
                                    ['form_id', '=', '4'],
                                ])->get() as $k=>$article)

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>
                    {{ $article->id }}
                </td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->adress}} </p>
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>

    @endforeach


    <h2 class="mt-5">{{ \App\ChildSection::where('id',"=","2")->get()->first()->name }}</h2>

    @foreach(\App\ChildArticle::where([
                                    ['section_id', '=', '2'],
                                    ['form_id', '=', '4'],
                                ])->get() as $k=>$article)

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>
                    {{ $article->id }}
                </td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->adress}} </p>
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>

    @endforeach


    <h2 class="mt-5">{{ \App\ChildSection::where('id',"=","3")->get()->first()->name }}</h2>

    @foreach(\App\ChildArticle::where([
                                    ['section_id', '=', '3'],
                                    ['form_id', '=', '4'],
                                ])->get() as $k=>$article)

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>
                    {{ $article->id }}
                </td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->adress}} </p>
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>

    @endforeach

    <h2 class="mt-5">{{ \App\ChildSection::where('id',"=","4")->get()->first()->name }}</h2>

    @foreach(\App\ChildArticle::where([
                                    ['section_id', '=', '3'],
                                    ['form_id', '=', '4'],
                                ])->get() as $k=>$article)

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>
                    {{ $article->id }}
                </td>
                <td>
                    @foreach($article->authors as $author)
                        <p> {{$author->adress}} </p>
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>

    @endforeach
</div>


<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ asset('/js/script.js') }}"></script>

</body>
</html>
