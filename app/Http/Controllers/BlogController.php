<?php

namespace Deratizacija\Http\Controllers;

use Carbon\Carbon;
use Deratizacija\Photo;
use Illuminate\Http\Request;
use Deratizacija\Blog;

class BlogController extends Controller
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
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => ['required', 'min:5'],
            'body' => ['required', 'min:20']
        ];

        $this -> validate($request, $rules);

        $input = $request -> all();

        $input['slug']=str_slug($request->title);

        if($file= $request->file('photo_id')){
            $name = date('Y-m-d H;i;s').'.'.$file->getClientOriginalName();
            $file->move('img', $name);
            $photo = Photo::create(['photo'=>$name, 'title'=>$name]);
            $input['photo_id']= $photo->id;
        }

        $blog = Blog::create($input);

        return redirect('blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog= Blog::where('slug', $slug)->firstOrFail();

        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $blog=Blog::findOrFail($slug);

        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $input = $request->all();
        $blog = Blog::findOrFail($slug);
        $input['slug']=str_slug($request->title);
        
        $blog->update($input);

        return redirect('blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog ->delete();

        return redirect('blogs');
    }
}
