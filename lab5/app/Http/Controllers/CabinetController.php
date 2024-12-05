<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function index()
    {
        $user = Auth::user();
    
        if ($user->role === 'admin') {
            $users = \App\Models\User::all(); 
            return view('cabinet.admin', compact('users'));
        }
    
        return view('cabinet.index', compact('user')); 
    }
    
