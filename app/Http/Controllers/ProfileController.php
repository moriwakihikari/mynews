<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Profile;

class ProfileController extends Controller
{
    //
    public function index(Request $request)
    {
        $posts = Profile::all()->sortByDesc('update_at');
                                   //ソート　（）
        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {                //配列の最初のデータ削除で返す
            $headline = null;
        }
        return view('profile.index',['headline' => $headline, 'posts' => $posts]);
    }
}
