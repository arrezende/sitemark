<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }
    public function upd(ProfileRequest $request)
    {
        dd($request->all());
    }
    public function update(ProfileRequest $request)
    {
        $user = auth()->user();
        $data = $request->validated();

        $user->fill($data)->save();

        return back()->with('message', 'Perfil alterado com sucesso');
    }
}
