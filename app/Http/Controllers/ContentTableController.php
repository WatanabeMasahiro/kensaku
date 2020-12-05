<?php

namespace App\Http\Controllers;

use App\User;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentTableController extends Controller
{

    public function index1(Request $request)
    {
        $search = $request->search;
        $user = Auth::user();
        $userContents = $user->contents;
        $count = 0;
        $issetCount = 0;
        $userInfo = $user->withCount('contents')->get();
        return view('kensaku.home.home1', compact('search', 'user','userContents', 'count', 'issetCount', 'userInfo'));
    }

    public function index2(Request $request)
    {
        $search = $request->search;
        $user = Auth::user();
        $userContents = $user->contents;
        $count = 0;
        $issetCount = 0;
        $userInfo = $user->withCount('contents')->get();
        return view('kensaku.home.home2', compact('search', 'user','userContents', 'count', 'issetCount', 'userInfo'));
    }

    public function index3(Request $request)
    {
        $search = $request->search;
        $user = Auth::user();
        $userContents = $user->contents;
        $count = 0;
        $issetCount = 0;
        $userInfo = $user->withCount('contents')->get();
        return view('kensaku.home.home3', compact('search', 'user','userContents', 'count', 'issetCount', 'userInfo'));
    }

    public function index4(Request $request)
    {
        $search = $request->search;
        $user = Auth::user();
        $userContents = $user->contents;
        $count = 0;
        $issetCount = 0;
        $userInfo = $user->withCount('contents')->get();
        return view('kensaku.home.home4', compact('search', 'user','userContents', 'count', 'issetCount', 'userInfo'));
    }

    public function index5(Request $request)
    {
        $search = $request->search;
        $user = Auth::user();
        $userContents = $user->contents;
        $count = 0;
        $issetCount = 0;
        $userInfo = $user->withCount('contents')->get();
        return view('kensaku.home.home5', compact('search', 'user','userContents', 'count', 'issetCount', 'userInfo'));
    }

    public function detail(Request $request)
    {
        $user = Auth::user();
        $userContents = $user->contents;
        $detail_id = $request->detail_id;
        $selectUserContent = $userContents->where('id', $detail_id)->first();
        return view('kensaku.syousai', compact('user','userContents', 'detail_id' ,'selectUserContent'));
    }

    public function register1(Request $request)
    {
        $user = Auth::user();
        $userInfo = $user->withCount('contents')->get();
        return view('kensaku.touroku', compact('user','userInfo'));
    }

    public function register2(Request $request)
    {
        $this->validate($request, Content::$rules);
        $person = new Content;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/kensaku/home1');
    }

    public function koushin()
    {
        $user = Auth::user();
        $userContents = $user->contents;
        return view('kensaku.koushin.koushin_confirm', compact('user', 'userContents'));
    }

    public function update1(Request $request)
    {
        $user = Auth::user();
        $userContents = $user->contents;
        $contentFind = Content::find($request->id);
        return view('kensaku.koushin.koushin',[
            'user' => $user,
            'userContents' => $userContents,
            'form' => $contentFind]);
    }

    public function update2(Request $request)
    {
        $this->validate($request, Content::$rules);
        $contentFind = Content::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $contentFind->fill($form)->save();
        return redirect('/kensaku/home1');
    }

    public function sakuzyo()
    {
        $user = Auth::user();
        $userContents = $user->contents;
        return view('kensaku.sakuzyo.sakuzyo_confirm', compact('user', 'userContents'));
    }

    public function delete1(Request $request)
    {
        $user = Auth::user();
        $userContents = $user->contents;
        $contentFind = Content::find($request->id);
        return view('kensaku.sakuzyo.sakuzyo', [
            'user' => $user,
            'userContents' => $userContents,
            'form' => $contentFind]);
    }

    public function delete2(Request $request)
    {
        Content::find($request->id)->delete();
        return redirect('/kensaku/home1');
    }


    public function withdrawal1(Request $request)
    {
        $user = Auth::user();
        return view('kensaku.withdrawal', compact('user'));
    }

    public function withdrawal2(Request $request)
    {
        $user = Auth::user();
        Auth::logout();
        $user->where('id', $user->id)->delete();
        Content::where('user_id', $user->id)->delete();

        return redirect('/login');
    }
}
