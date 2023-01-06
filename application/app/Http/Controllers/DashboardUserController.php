<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class DashboardUserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: isUser');
    }

    public function index()
    {
        $user = Auth::user();
        // dd($user);
        return view('dashboard-user.index', [
            'user' => Auth::user()
        ]);
    }

    public function edit(user $user)
    {
        return view('dashboard-user.edit', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'username' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required',
            // 'image' => 'image|file|max:2000'
        ];
        $validateData = $request->validate($rules);

        // if ($request->file('image')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validateData['image'] = $request->file('image')->store('table-images');
        // }

        // $validateData['password'] = auth()->user()->id;
        // $validateData['image'] = auth()->user()->id;
        // $validateData['email'] = auth()->user()->id;


        User::where('id', $user->id)
            ->update($validateData);

        dd('sukses');

        // return redirect('/dashboard/update/')->with('success', 'Post has been updated!');
    }

    public function store(Request $request)
    {
        return $request->file('image')->store('user-images');
    }
}
