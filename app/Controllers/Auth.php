<?php
namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function doLogin()
    {
        $username = trim($this->request->getPost('username'));
        $password = trim($this->request->getPost('password'));

        if (empty($username) || empty($password)) {
            return redirect()->back()->with('error', 'Username dan Password tidak boleh kosong.');
        }

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('logged_in', true);
            session()->set('username', $username);
            return redirect()->to('/zoom');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function register()
    {
        return view('register');
    }

    public function doRegister()
    {
        $username = trim($this->request->getPost('username'));
        $password = trim($this->request->getPost('password'));

        if (empty($username) || empty($password)) {
            return redirect()->back()->with('error', 'Username dan Password tidak boleh kosong.');
        }

        $userModel = new UserModel();
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
        $userModel->insert($data);
        return redirect()->to('/login');
    }
}
