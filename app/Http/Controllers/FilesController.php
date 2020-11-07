<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    private static $upload_dir = '/upload';
    private static $passw_cookie = '^Cwvfo8ygoPCzCsQRIRj@Cb@UMHh8R*bhv8E@YJmoFJhaDBLCk';

    public function index() {
        return $this->is_auth() ? view('welcome') : view('auth');
    }

    public function login(Request $request) {
        if ($request->isMethod('post')) {
            if ($request->input('password') === 'snatch') {
                setcookie('auth', self::$passw_cookie, time() + 3600);
            }
        }

        return redirect('/');
    }

    public static function is_auth() {
        if (isset($_COOKIE['auth']) && $_COOKIE['auth'] === self::$passw_cookie) {
            return true;
        }

        return false;
    }

    public function logout() {
        setcookie('auth', self::$passw_cookie, 1);

        return redirect('/');
    }

    public function upload(Request $request) {
        if ($request->isMethod('post')){
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $file_name = $file->getClientOriginalName();
                $file->move(public_path() . self::$upload_dir, $file_name);

                return view('welcome', ['file_name' => $file_name]);
            }
        }

        return redirect('/');
    }

    public function list() {
        if ($this->is_auth()) {
            $items = [];
            dd(public_path());
            $files = array_diff(scandir(public_path() . self::$upload_dir), ['..', '.']);

            foreach ($files as $file) {
                $items[] = [
                    'link' => self::$upload_dir . '/' . $file,
                    'name' => $file,
                    'remove' => '/files/remove/' . $file,
                ];
            }

            return view('files', ['items' => $items]);
        }

        return redirect('/');
    }

    public function remove($name) {
        $path = public_path() . self::$upload_dir . '/' . $name;

        if (file_exists($path)) unlink($path);

        return redirect('files');
    }
}
