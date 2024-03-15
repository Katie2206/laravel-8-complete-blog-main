<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function store(Request $request){
        
        if(Auth::check()){
            $validator = Validator::make($request->all(),[
                'comment_body' => 'required|string'
            ]);
            if($validator->fails()){
                return redirect()
                ->back('message', 'Please enter a comment');
            }

            $post = Post::where('slug', $request->post_slug)->where('status','0')->first();
            if($post){
                comment::create([
                    'post_id' => $post->id,
                    'user_id' => Auth::user()->id,
                    'comment_body' => $request->comment_body
                ]);
                return redirect()
            ->back('message', 'Commented Successfully');
            }else{
                return redirect()
            ->back('message', 'No post found');
            }
        }else{
            return redirect('login')
            ->back('message', 'You must be logged in to comment!');
        }
    }
}
