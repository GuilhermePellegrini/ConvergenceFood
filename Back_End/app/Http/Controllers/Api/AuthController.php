<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Endereco;
use App\Models\Loja;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
            'admin' => 'boolean',
            'address_name' => 'required|string|max:255',
            'cep' => 'required|string|size:8',
            'address' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'number' => 'required|string',
            'complement' => 'string|max:255',
            'cidade_id' => 'required|integer',
            'estado_id' => 'required|integer',
        ]);

        $endereco =  Endereco::create([
            'name' => $request->address_name,
            'cep' => $request->cep,
            'address' => $request->address,
            'district' => $request->district,
            'number' => $request->number,
            'complement' => $request->complement,
            'cidade_id' => $request->cidade_id,
            'estado_id' => $request->estado_id,
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'endereco_id' => $endereco->id
        ]);

        $token = $user->createToken(env('APP_API'))->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function registerAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
            'admin' => 'required|boolean',
            'address_name' => 'required|string|max:255',
            'cep' => 'required|string|size:8',
            'address' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'number' => 'required|string',
            'complement' => 'string|max:255',
            'cidade_id' => 'required|integer',
            'estado_id' => 'required|integer',
            'corporate_name' => 'required|string|max:255',
            'trading_name' => 'required|string|max:20',
            'cnpj' => 'required|string|size:14',
            'web_site' => 'string|max:255',
            'phone' => 'required|string|max:11',
            'cel_phone' => 'size:11',
            'email' => 'required|email|max:255',
            'representante_legal' => 'required|string|max:255',
            'representante_legal_email' => 'required|email|max:255',
        ]);

        $endereco =  Endereco::create([
            'name' => $request->address_name,
            'cep' => $request->cep,
            'address' => $request->address,
            'district' => $request->district,
            'number' => $request->number,
            'complement' => $request->complement,
            'cidade_id' => $request->cidade_id,
            'estado_id' => $request->estado_id,
        ]);

        $loja = Loja::create([
            'corporate_name' => $request->corporate_name,
            'trading_name' => $request->trading_name,
            'cnpj' => $request->cnpj,
            'web_site' => $request->web_site,
            'phone' => $request->phone,
            'cel_phone' => $request->cel_phone,
            'email' => $request->email,
            'representante_legal' => $request->representante_legal,
            'representante_legal_email' => $request->representante_legal_email,
            'endereco_id' => $endereco->id,
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'loja_id' => $loja->id,
            'endereco_id' => $endereco->id,
            'admin' => $request->admin,
        ]);

        $token = $user->createToken(env('APP_API'))->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        //Check email and password
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response([
                'message' => 'Bad credentials'
            ], 401);
        }

        $token = $user->createToken(env('APP_API'))->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 200);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
