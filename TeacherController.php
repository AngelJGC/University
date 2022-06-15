<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GuardarTeacherRequest;
use App\Http\Requests\ActualizarTeacherRequest;
use App\Models\User;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
      return $user = User::where('user_id', 2)->get();
    }

    public function store(GuardarTeacherRequest $request)
    {
        $user = User::create(
            $request->only('name', 'email', 'user_id')
            + [
                'role' => 'teacher',
                'password' => bcrypt($request->input('password')),
                'code' => Str::random(10)
            ]
        );
            return response()->json([
            'res' => true,
            'msg' => 'Teacher guardado correctamente'
        ],200);

    }
    public function show(Request $request)
    {
       
    }

    public function update(ActualizarTeacherRequest $request, User $user)
    {
        $user->update($request->all());
        $data = $request->only('name', 'email', 'password', 'user_id');
        $password = $request->input('password');
          if($password)
            $data['password'] = bcrypt($password);


        $user->fill($data);
        $user->save();

        return response()->json([
             'res' => true,
             'mesaje' => 'Teacher Actualizado'
        ],200);
     
    }

    public function destroy(Request $request)
    {

    }

}
