<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(Request $request)
    {
        try {
            $this->validate($request, [
                'nickname'=> 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string'
            ]);
            $password = Hash::make($request->inputr('password'));
            $user = new User();
            $user->nickname = $request->input('nickname');
            $user->email = $request->input('email');
            // $user->native_language = $request->input('native_language');
            $user->password = $password;
            $user->save();
            // $lid = DB::table('users')->insertGetId([
            //     'nickname' => $request->input('nickname'),
            //     'email' => $request->input('email'),
            // ]);
            // $userSaved = DB::table('users')->where('id',$lid)->first();
            $user->id = md5($user->id);
            return response()->json([
                'message' => 'Usuario guardado correctamente',
                'success' => true,
                'user' => $user
            ], 200);
        } catch (ValidationException $ex) {
            return response()->json([
                'message' => 'Error al registrar el nuevo usuario',
                'error' => $ex,
                'success' => false
            ], 422);
        }catch (\Throwable $th) {
            return response()->json([
                'message' => 'Error al registrar el nuevo usuario',
                'error' => $th->getMessage(),
                'success' => false
            ], 500);
        }
    }

    public function getByEmail(Request $request)
    {
        try {
            $this->validate($request, [
                'nickname' => 'nullable|string',
                'email' => 'exclude_unless:nickname,true|required|email',
                'password' => 'required|string'
            ]);

            $user = User::where('nickname', $request->nickname)->orWhere('email', $request->email)->with('language')->first();

            if ($user) {
                if (Hash::check($request->input('password'), $user->password)) {
                    $user->id = md5($user->id);
                    return response()->json([
                        'message' => "Usuario encontrado",
                        'success' => true,
                        'user' => $user,
                    ], 200);
                } else {
                    return response()->json([
                        'message'=>'Error en las credenciales',
                        'success' => false,
                         'error' => 'Parece que ha tenido un error en el password'
                    ], 200);
                }
            } else {
                return response()->json([
                    'message'=>'Error en las credenciales',
                    'success' => false,
                    'error' =>'Parece que el usuario no existe'
                ], 200);
            }
        } catch (ValidationException $ex) {
            return response()->json([
                'message' => 'Error al obtener el nuevo usuario',
                'error' => $ex,
                'success' => false
            ], 422);
        }catch (\Throwable $th) {
            return response()->json([
                'message' => 'Error al obtener el nuevo usuario',
                'error' => $th->__toString(),
                'success' => false
            ], 500);
        }
    }

    public function unregister(Request $request)
    {

    }
}
