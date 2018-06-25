<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Blog::create($input);

//        $blog = new Blog();
//        $blog->title = $request->title;
//        $blog->body = $request->body;
//        $blog->save();
        Session::flash("success", "Your information successfully created");
        return redirect('/blogs');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $blog = Blog::findOrFail($id);
        $blog->update($input);
        Session::flash("success", "Your information successfully updated");
        return redirect()->back();
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        Session::flash("success", "Data Deleted Sucessfully");
        return redirect('blogs');
    }

    public function trash(){
        $trashed = Blog::onlyTrashed()->get();
        return view('blogs.trash', compact('trashed'));
    }

    public function restore($id){
        $restored = Blog::onlyTrashed()->findOrFail($id);
        $restored->restore();
        Session::flash("success", "Data Sucessfully Restored");
        return back();
    }

    public function permanentDelete($id){
        $permanentdelete = Blog::onlyTrashed()->findOrFail($id);
        $permanentdelete->forceDelete();
        Session::flash("success", "Data Sucessfully Permanently Deleted");
        return back();
    }

}
