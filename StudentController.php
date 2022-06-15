<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GuardarStudentRequest;
use App\Models\User;

class StudentController extends Controller
{
    public function index(Request $request)
    {
      return $user = User::where('user_id', 1)->get();
    }

    public function store(GuardarStudentRequest $request)
    {
            $user = User::create(
            $request->only('name', 'email', 'user_id')
            + [
                'role' => 'student',
                'password' => bcrypt($request->input('password')),
                'code' => $rand = range(1, 13)
            ]
        );
            return response()->json([
            'res' => true,
            'msg' => 'Student guardado correctamente'
        ],200);  
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
