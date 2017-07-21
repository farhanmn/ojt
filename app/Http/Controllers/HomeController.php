<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('auth', ['except' => ['search', 'hasil', 'avability', 'register', 'welcomemob', 'bagasi', 'bayar', 'bayar2', 'daftar', 'isi', 'profil', 'avabilityow']]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function search()
    {
      return view('search');
    }

    public function avability()
    {
        $data = array(
                'dari' => Input::get('inputdari'),
                'ke' => Input::get('inputke'),
                'date_berangkat' => Input::get('date_berangkat'),
                'date_pulang' => Input::get('date_pulang'),
                'jumlah_dewasa' => Input::get('jumlah_dewasa'),
                'jumlah_anak' => Input::get('jumlah_anak'),
                'jumlah_bayi' => Input::get('jumlah_bayi'),
                'dewasa' => Input::get('jumlah_dewasa').' Dewasa',
                'anak' => Input::get('jumlah_anak').' Anak',
                'bayi' => Input::get('jumlah_bayi').' Bayi'
                );

        return view('avability')->with($data);
    }

    public function avabilityow()
    {
        $data = array(
                'dari' => Input::get('dari'),
                'ke' => Input::get('ke'),
                'date_berangkat' => Input::get('date_berangkat'),
                'date_pulang' => Input::get('date_pulang'),
                'jumlah_dewasa' => Input::get('jumlah_dewasa'),
                'jumlah_anak' => Input::get('jumlah_anak'),
                'jumlah_bayi' => Input::get('jumlah_bayi'),
                'dewasa' => Input::get('jumlah_dewasa').' Dewasa',
                'anak' => Input::get('jumlah_anak').' Anak',
                'bayi' => Input::get('jumlah_bayi').' Bayi'
                );

        return view('avability-ow')->with($data);
    }

    public function register()
    {
      return view('register');
    }

    public function welcomemob()
    {
        return view('welcomemob');
    }

    public function bagasi()
    {
        return view('bagasi');
    }

    public function bayar()
    {
        return view('bayar');
    }

    public function bayar2()
    {
        return view('bayar2');
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function isi()
    {
        return view('isi');
    }

    public function profil()
    {
        return view('profil');
    }
}
