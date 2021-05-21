<?php

namespace App\Http\Controllers;

use App\Degree;
use App\Rank;
use Illuminate\Http\Request;
use App\Article;
use App\Section;
use App\Form;
use App\Author;

use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        $tex = $request->file('tex');
        $tex_path = 'public/tex/'.time();

        $tex->storeAs($tex_path,$tex->getClientOriginalName());

        $pdf = $request->file('pdf');
        $pdf_path = 'public/pdf/'.time();

        $tex->storeAs($pdf_path,$pdf->getClientOriginalName());


        $article = new Article();

        $article->name_ru = $request->article_name_ru;
        $article->name_en = $request->article_name_en;
        $article->annot_ru = $request->annot_ru;
        $article->annot_en = $request->annot_en;
        $article->word_ru = json_encode($request->word_ru, JSON_UNESCAPED_UNICODE);
        $article->word_en = json_encode($request->word_en, JSON_UNESCAPED_UNICODE);
        $article->udk = $request->udk;
        $article->tex = $tex_path.'/'.$tex->getClientOriginalName();
        $article->pdf = $pdf_path.'/'.$pdf->getClientOriginalName();
        $article->language = $request->language;
        $article->section()->associate(Section::find($request->section));
        $article->form()->associate(Form::find($request->form));
        $article->phone = $request->phone;
        $article->email = $request->email;

        $article->save();




        foreach ($request->surname_ru as $key => $val)
        {
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

        //Mail::to($request->email);
        Mail::send('send_email', array(), function($message)
        {
            $message->to('elmira.sharapova@yandex.ru')->subject('Международная конференция. Заявка успено отправлена да');
        });

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
}
