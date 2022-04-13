<?php

namespace App\Http\Controllers;

use App\ChildArticle;
use App\ChildAuthors;
use App\ChildForm;
use App\ChildSection;
use App\Degree;
use App\Http\Requests\ChildArticleRequest;
use App\Jobs\SendEmailToConferenceJob;
use App\Rank;
use Illuminate\Http\Request;
use App\Events\SendMail;
use Illuminate\Support\Facades\Mail;

class ChildArticleController extends Controller
{
    protected $storagePath = 'storage/';
    protected $publicPath = 'public/';
    protected $filesPath = 'files/';

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
     * @param ChildArticleRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ChildArticleRequest $request)
    {
        $article = new ChildArticle();
        if($request->file('files')){
            $article->files = $this->uploadFile($request->file('files'));
        }else {
            $article->files = '/';
        }
        $article->name = $request->article_name;
        $article->node = $request->node;
        $article->section()->associate(ChildSection::find($request->section));
        $article->form()->associate(ChildForm::find($request->form));
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
        foreach ($request->surname as $key => $val)
        {
            $author = new ChildAuthors();

            $author->surname = $val;
            $author->name = $request->name[$key];
            $author->patronymic = $request->patronymic[$key];
            $author->adress = $request->adress[$key];

            if($request->form !== 4)
            {
                $author->work = $request->work[$key];
                $author->status = $request->status[$key];

                $author->degree()->associate(Degree::find($request->degree[$key]));
                $author->rank()->associate(Rank::find($request->rank[$key]));
            }
            else{
                $author->degree=0;
                $author->rank=0;
            }
            $author->article()->associate($article);
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
        $path = $this->filesPath . $folder;
        $file_name = $file->getClientOriginalName();

        $file->storeAs($this->publicPath . $path, $file_name);

        return $this->storagePath . $path . '/' . $file_name;
    }

    /**
     * @param Request $request
     */
    public function push(Request $request)
    {
        //event(new SendMail(['emails' => $request->emails]));
        //$details['email'] = 'your_email@gmail.com';
        //$details['email'] = $request->emails;

        $users_temp = explode(', ', $request->emails);
        $users = [];
        foreach($users_temp as $key => $ut){
            $users[$key] = $ut;
        }

        foreach ($users as $email) {
            dispatch(new SendEmailToConferenceJob($email));
        }
    }
}
