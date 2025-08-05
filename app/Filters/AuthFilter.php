<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
// Jika pengguna belum login karena ada filter 'auth', biasanya pengguna akan diarahkan ke halaman login secara otomatis.
// Daftarkan Filter di app/Config/Filters.php
// 'auth' => \App\Filters\AuthFilter::class

