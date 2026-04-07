<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->has('user_id')) {
            return redirect()->to('/');
        }
        
        if ($this->request->getMethod() === 'POST') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            
            $model = new UserModel();
            $user = $model->where('username', $username)->first();
            
            if ($user && password_verify($password, $user->password)) {
                session()->set([
                    'user_id' => $user->id,
                    'username' => $user->username
                ]);
                return redirect()->to('/');
            } else {
                return view('auth/login', ['error' => 'Identifiant ou mot de passe incorrect']);
            }
        }
        
        return view('auth/login');
    }
    
    public function register()
    {
        if (session()->has('user_id')) {
            return redirect()->to('/');
        }
        
        if ($this->request->getMethod() === 'POST') {
            $model = new UserModel();
            
            $existing = $model->where('username', $this->request->getPost('username'))->first();
            if ($existing) {
                return view('auth/register', ['error' => 'Ce nom d\'utilisateur existe déjà']);
            }
            
            $model->insert([
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password')
            ]);
            
            return redirect()->to('/login')->with('success', 'Inscription réussie');
        }
        
        return view('auth/register');
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}