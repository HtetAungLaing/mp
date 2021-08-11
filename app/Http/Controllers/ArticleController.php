<?php

namespace App\Http\Controllers;

use App\Article;
use App\PostGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy("id", "desc")->get();
        return view("article.index", compact('articles'));
        $this->middleware("auth");
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("article.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "og_photo" => "mimes:png,jpg,jpeg"
        // ]);
        // return $request;
        $article = new Article();
        $article->title = $request->title;
        $dir2 = "public/poster";
        $poster = $request->file('poster');
        $pname = uniqid() . "_" . $poster->getClientOriginalName();
        Storage::putFileAs($dir2, $poster, $pname);
        $article->poster = $pname;
        $article->download = $request->download;
        $article->content = $request->content;
        $article->category_id = $request->category_id;
        $article->viewers = $request->viewers;
        $article->ratings = $request->ratings;
        $article->user_id = Auth::id();
        $article->save();
        foreach ($request->genre as $g) {
            $pg = new PostGenre();
            $pg->post_id = $article->id;
            $pg->genre_id = $g;
            $pg->save();
        }
        return redirect()->route("article.create")->with('status', '<p class="alert alert-success">Article is created successfully</p>');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function aaa($a)
    {
        unlink("storage/photo/" . $a);
    }
    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->download = $request->download;
        $article->content = $request->content;
        if ($request->hasFile('poster')) {
            unlink("storage/poster/" . $article->poster);
            $file = $request->file('poster');
            $dir = "public/poster";
            $fileName = uniqid() . "_" . $file->getClientOriginalName();
            Storage::putFileAs($dir, $file, $fileName);
            $article->poster = $fileName;
        }
        // if ($request->hasFile('thumbnail')) {
        //     $this->aaa($article->thumbnail);
        //     $file = $request->file('thumbnail');
        //     $dir = "public/photo";
        //     $tname = uniqid() . "_" . $file->getClientOriginalName();
        //     Storage::putFileAs($dir, $file, $tname);
        //     $article->thumbnail = $tname;
        // }
        $article->category_id = $request->category_id;
        $article->update();
        return redirect()->route("article.show", $article->id)->with('edit-status', "<p class='alert alert-success'>Successfully Edited</p>");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        // return $article;
        // $this->aaa($article->thumbnail);
        unlink("storage/poster/" . $article->poster);
        $article->delete();
        return redirect()->route("article.index")->with('del-status', "<p class='alert alert-warning'>Deleted Successfully</p>");
    }
}
