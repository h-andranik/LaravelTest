<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use App\Usertoblog;
use Illuminate\Http\Request;
//use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class BlogController extends Controller
{
    public function create()
    {
        return view('createBlogs');
    }

    public function newblog(Request $request)
    {
        $blog = Blog::insert(
            ['title' => $request->title, 'text' => $request->text, 'image' => $request->image, 'authorId' => Auth::user()->id]
        );
    }

    public function blogs()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('blogs', ['blogs' => $blogs, 'users' => $users]);
    }

    public function blog($id)
    {
        $blog = Blog::find($id);
        return view('show', ['blog' => $blog]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('editblog', ['blog' => $blog]);
    }

    public function savethis(Request $request)
    {
        Blog::where('id', $request->id)
            ->update(['title' => $request->title, 'text' => $request->text]);
    }

    public function deleteblog(Request $request)
    {
        Blog::where('id', $request->id)->delete();
    }

    public function linktome()
    {
        $blogs = Blog::join('usertoblogs', 'blogs.id', '=', 'usertoblogs.blogId')
            ->where('usertoblogs.userId', '=', Auth::user()->id)
            ->paginate(10);
        return view('linktome', ['blogs' => $blogs]);
    }

    public function myblogs()
    {
        $blogs = Blog::where('authorId', Auth::user()->id)
            ->paginate(10);
        return view('myblogs', ['blogs' => $blogs]);
    }

    public function linkto(Request $request)
    {
        $checkUser = Usertoblog::where('userId',$request->userid)
            ->where('blogId',$request->blogid)
            ->get();

        $blogs = false;
        if (!$checkUser->count()) {
            $blogs = Usertoblog::insert(['userId' => $request->userid, 'blogId' => $request->blogid]);
        }

        return Response::json(array('data' => $blogs));
    }
}
