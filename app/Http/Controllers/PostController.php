<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sql="SELECT * FROM `posts`";
        $posts = DB::select($sql);
        return view('admin.post.posts', compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.addPost');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'title'=>'required|string|unique:posts',
            'content'=>'required|string|max:1000',
        ], $messages);
        
        $data['active'] = isset($request->active);
        Post::create($data);
        return redirect('admin/posts')->with('toast_success','Data stored sucssefully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('admin.post.showPost', compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('admin.post.editPost', compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'title'=>'required|string|unique:posts,title,'.$id,
            'content'=>'required|string|max:1000',
        ], $messages);
        
        $data['active'] = isset($request->active);
        Post::where('id', $id)->update($data);
        return redirect('admin/posts')->with('toast_success','Data updated sucssefully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sql="DELETE FROM `posts` WHERE `id` = $id";
        DB::delete($sql);
        return redirect('admin/posts')->with('toast_success','Data deleted sucssefully');
    }

    public function messages()
    {
        return [
            'title.max'=>'max is 3',
        ];
    }
}
