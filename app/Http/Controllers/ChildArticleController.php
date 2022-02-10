<?php

namespace App\Http\Controllers;

use App\ChildArticle;
use App\ChildAuthors;
use App\ChildForm;
use App\ChildSection;
use App\Degree;
use App\Http\Requests\ChildArticleRequest;
use App\Rank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ChildArticleController extends Controller
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
    public function store(ChildArticleRequest $request)
    {

        $file = $request->file('files');
        $folder = time();
        $path = 'files/'.$folder;
        $file_name = $file->getClientOriginalName();

        $file->storeAs('public/'.$path, $file_name);

        $article = new ChildArticle();

        $article->name = $request->article_name;
        $article->files = 'storage/'.$path.'/'.$file_name;
        $article->node = $request->node;
        $article->section()->associate(ChildSection::find($request->section));
        $article->form()->associate(ChildForm::find($request->form));
        $article->phone = $request->phone;
        $article->email = $request->email;

        $article->save();




        foreach ($request->surname as $key => $val)
        {
            $author = new ChildAuthors();

            $author->surname = $val;
            $author->name = $request->name[$key];
            $author->patronymic = $request->patronymic[$key];
            $author->work = $request->work[$key];
            $author->adress = $request->adress[$key];
            $author->status = $request->status[$key];

            $author->degree()->associate(Degree::find($request->degree[$key]));
            $author->rank()->associate(Rank::find($request->rank[$key]));
            $author->article()->associate($article);
            $author->save();

        }

        $data = array('email' => $request->email);

        Mail::send('send_email', array(), function($message) use($data)
        {
            $message->to($data['email'])->subject('Международная конференция. Заявка успешно принята!');
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
