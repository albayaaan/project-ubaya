<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DetailProfileController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('detailProfile.index', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('detailProfile.edit', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::find($id);


        // dd($request->file('image'));
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,webp,svg|max:2048',
        ]);

        if ($request->image) {
            $path = public_path('user/images/');

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move($path, $imageName);

            $user->image = $imageName;
        }

        $user->username = $request->username;
        $user->status = $request->status;
        $user->alamat = $request->alamat;
        $user->wa = $request->wa;
        $user->phone = $request->phone;
        $user->birthday = $request->birthday;
        $user->website = $request->website;
        $user->github = $request->github;
        $user->twitter = $request->twitter;
        $user->instagram = $request->instagram;
        $user->facebook = $request->facebook;
        $user->save();

        return redirect()->route('profile', [$id]);
    }

    public function storeLetter(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        $request->validate([
            'cv' => 'mimes:pdf',
            'resume' => 'mimes:pdf',
            'ktp' => 'mimes:pdf',
            'ijazah' => 'mimes:pdf',
        ]);

        if ($request->cv) {
            $path = public_path('user/cv/');

            $cvName = 'cv_' . $id . '_' . time() . '.' . $request->cv->extension();
            $request->cv->move($path, $cvName);

            $user->cv = $cvName;
        }

        if ($request->resume) {
            $path = public_path('user/resume/');

            $resumeName = 'resume_' . $id . '_' . time() . '.' . $request->resume->extension();
            $request->resume->move($path, $resumeName);

            $user->resume = $resumeName;
        }

        if ($request->ktp) {
            $path = public_path('user/ktp/');

            $ktpName = 'ktp_' . $id . '_' . time() . '.' . $request->ktp->extension();
            $request->ktp->move($path, $ktpName);

            $user->ktp = $ktpName;
        }

        if ($request->ijazah) {
            $path = public_path('user/ijazah/');

            $ijazahName = 'ijazah_' . $id . '_' . time() . '.' . $request->ijazah->extension();
            $request->ijazah->move($path, $ijazahName);

            $user->ijazah = $ijazahName;
        }

        $user->save();

        return redirect()->back();
    }
}
