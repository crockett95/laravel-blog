<?php

class PostsController extends \BaseController {

    public function __construct()
    {
        $this->beforeFilter('auth', [ 'only' => ['create', 'store', 'edit', 'update', 'destroy'] ]);
        $this->beforeFilter('csrf', [ 'only' => ['store', 'update', 'destroy'] ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        $canEdit = Auth::check();
        return /*"Hello world"*/ View::make('blog.home', ['posts' => $posts, 'canEdit' => $canEdit]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = Auth::user();
        return "Hello world" /*View::make('blog.edit')->with('user', $user)*/;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
        return;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $post = Post::with('user')->find($id)->firstOrFail();
        $canEdit = Auth::check();
        return 'Hello world' /*View::make('blog.post', ['post' => $posts, 'canEdit' => $canEdit])*/;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        return "hello world";
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
        return;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        return;
    }


}
