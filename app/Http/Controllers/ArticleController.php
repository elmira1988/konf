<?php

namespace App\Http\Controllers;

use App\Degree;
use App\Events\SendMail;
use App\Rank;
use Illuminate\Http\Request;
use App\Article;
use App\Section;
use App\Form;
use App\Author;

use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    protected $path = 'files/';
    protected $publicPath = 'public/';
    protected $storagePath = 'storage/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @param ArticleRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ArticleRequest $request)
    {
        $file_name = $this->uploadFile($request->file('files'));

        $article = new Article();
        $article->name_ru = $request->article_name_ru;
        $article->name_en = $request->article_name_en;
        $article->annot_ru = $request->annot_ru;
        $article->annot_en = $request->annot_en;
        $article->word_ru = json_encode($request->word_ru, JSON_UNESCAPED_UNICODE);
        $article->word_en = json_encode($request->word_en, JSON_UNESCAPED_UNICODE);
        $article->udk = $request->udk;
        $article->files = $this->storagePath . $file_name;
        $article->node = $request->node;
        $article->language = $request->language;
        $article->section()->associate(Section::find($request->section));
        $article->form()->associate(Form::find($request->form));
        $article->phone = $request->phone;
        $article->email = $request->email;
        $article->save();

        $this->storeAuthors($request, $article);

        event(new SendMail(['email' => $request->email]));

        return response()->json($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Добавляем авторов статьи
     *
     * @param $request
     * @param $article
     */
    public function storeAuthors($request, $article)
    {
        foreach ($request->surname_ru as $key => $val) {
            $author = new Author();

            $author->surname_ru = $val;
            $author->name_ru = $request->name_ru[$key];
            $author->patronymic_ru = $request->patronymic_ru[$key];
            $author->work_ru = $request->work_ru[$key];
            $author->adress_ru = $request->adress_ru[$key];
            $author->status_ru = $request->status_ru[$key];

            $author->degree()->associate(Degree::find($request->degree[$key]));
            $author->rank()->associate(Rank::find($request->rank[$key]));
            $author->article()->associate($article);

            $author->surname_en = $request->surname_en[$key];
            $author->name_en = $request->name_en[$key];
            $author->patronymic_en = $request->patronymic_en[$key];
            $author->work_en = $request->work_en[$key];
            $author->adress_en = $request->adress_en[$key];
            $author->status_en = $request->status_en[$key];

            $author->save();
        }
    }

    /**
     * @param $file
     * @return string
     */
    public function uploadFile($file)
    {
        $folder = time();
        $path = $this->path . $folder;
        $file_name = $file->getClientOriginalName();
        $file->storeAs($this->publicPath . $path, $file_name);

        return $path . '/'. $file_name;
    }
}
