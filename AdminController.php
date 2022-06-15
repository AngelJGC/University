<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(Request $request)
    {
      return $user = User::where('user_id', 3)->get();
    }

    public function store(Request $request)
    {
        
    }
    public function show(Request $request)
    {
       
    }

    public function update(Request $request)
    {
        
       
    }

    public function destroy(Request $request)
    {

    }
}
