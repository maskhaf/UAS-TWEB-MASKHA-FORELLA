<?php
namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController {
    public function login() {
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();
            $user = $userModel->where('username', $username)->first();

            if ($user && md5($password) === $user['password']) {
                session()->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'logged_in' => true,
                ]);
                return redirect()->to('/dashboard');
            }

            return redirect()->back()->with('error', 'Username atau Password salah.');
        }

        return view('auth/login', ['title' => 'Login']);
    }

    public function logout()  {
        session()->destroy();
        return redirect()->to('/home');
    }
}
