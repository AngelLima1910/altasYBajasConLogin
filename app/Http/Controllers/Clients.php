<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Clients extends Controller
{
    public function index() {
        $titulo = "Registrar usuarios";
        return view('modules/auth/registrar', compact('titulo'));
    }
    public function agregarUsuario(Request $request) {
        $item = new User();
        $item->name = $request->name;
        $item->password = Hash::make($request->password);
        $item->save();
        return redirect()->route('auth-login');
    }
}
