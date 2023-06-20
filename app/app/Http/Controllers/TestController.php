<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('test.index', ['user' => $user]);
    }

    public function start1()
    {
        return view('test.start1');
    }

    public function test1()
    {
        return view('test.test1');
    }

    public function answer1(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        $request->validate([
            'video' => 'mimes:mp4',
        ]);

        // dd($request);

        if ($request->video) {
            $path = public_path('user/video/');

            $videoName = 'video_' . $id . '_' . time() . '.' . $request->video->extension();
            $request->video->move($path, $videoName);

            $user->test1 = $videoName;
        }
        $user->save();

        return redirect()->route('test.start2');
    }

    public function start2()
    {
        return view('test.start2');
    }

    public function test2()
    {
        return view('test.test2');
    }

    public function answer2(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        $request->validate([
            'audio' => 'mimes:mp3',
        ]);

        // dd($request);

        if ($request->audio) {
            $path = public_path('user/audio/');

            $audioName = 'audio_' . $id . '_' . time() . '.' . $request->audio->extension();
            $request->audio->move($path, $audioName);

            $user->test2 = $audioName;
        }
        $user->save();

        return redirect()->route('test.start3');
    }

    public function start3()
    {
        return view('test.start3');
    }

    public function test3()
    {
        return view('test.test3');
    }

    public function answer3(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        // dd($request);

        $user->test3 = $request->test3;
        $user->testFinished = true;
        $user->save();
        return redirect()->route('test.finish');
    }

    public function finish()
    {
        $user = Auth::user();
        return view('test.finish', ['user' => $user]);
    }
}
