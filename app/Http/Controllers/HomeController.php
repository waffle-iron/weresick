<?php

namespace App\Http\Controllers;

use App\Post;
use App\Journal;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // TODO: show posts for related tags that the user has recently used
        $journal_id = $request->user()->journal_id;
        $journal = Journal::find($journal_id);
        $posts = Post::all();
        return view('home', [
            'posts' => $posts,
            'journal' => $journal
        ]);
    }
}
