<?php

namespace App\Http\Controllers;

use App\Genre;
use App\PostByGenre;
use Illuminate\Http\Request;

class PostByGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostByGenre  $postByGenre
     * @return \Illuminate\Http\Response
     */
    public function show(PostByGenre $postByGenre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostByGenre  $postByGenre
     * @return \Illuminate\Http\Response
     */
    public function edit(PostByGenre $postByGenre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostByGenre  $postByGenre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostByGenre $postByGenre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostByGenre  $postByGenre
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostByGenre $postByGenre)
    {
        //
    }
}
