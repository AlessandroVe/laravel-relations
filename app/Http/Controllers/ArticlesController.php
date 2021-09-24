<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Author;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allArticles = Article::all();

        return view('Articles_views.articles_index',compact('allArticles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        return view('Articles_views.articles_create',compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'url',
            'description'=>'string',
            'title'=>'string',
        ]);

        /* $data = $request->all();
        
        $postDetail = new Author();
        $postDetail->form_factor = $data['form_factor'];
        $postDetail->publisher = $data['publisher'];
        $postDetail->publication_year = $data['publication_year'];
        $postDetail->save();


        $newPost = new Article();
        $newPost->cover = $data['cover'];
        $newPost->description = $data['description'];
        $newPost->likes = $data['likes'];
        
        $newPost->post_detail_id = $postDetail->id;

        $newPost->category_id = $data['category_id'];

        $newPost->save();

        

        return redirect()->route('posts.show',['post' => $newPost->id]); */




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('Articles_views.articles_show',compact('article'));

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
