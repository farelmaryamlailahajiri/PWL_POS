<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // tambah data user dengan Eloquent Model
        // $data = [
        //     'level_id' => 4,
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::insert($data); //tambahkan data ke tabel m_user 

        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);//update data user

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama' => 'Manager 2',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);
        //coba akses model usermodel
        // $user = UserModel::all(); //ambil semua data dari tabel m_user
        // $user = UserModel::find(1); //ambil data user dengan id 1
        // $user = UserModel::where('level_id', 1)->first(); // Mengambil satu data pertama dari tabel UserModel yang memiliki level_id = 1
        // $user = UserModel::firstWhere('level_id', 1); // Mengambil satu data pertama dari tabel UserModel yang memiliki level_id = 1 (sama seperti where()->first())

        // Mencari data UserModel dengan id = 1, hanya mengambil kolom 'username' dan 'nama'.
        // Jika data tidak ditemukan, jalankan fungsi abort(404) untuk menampilkan error 404
        // $user = UserModel::findOr(1, ['username', 'nama'], function () {
        //     abort(404);
        // });

        // $user = UserModel::findOr(20, ['username', 'nama'], function(){ //mencari id = 20 tapi tidak ditemukan
        //     abort(404);
        // });

        // Mencari data UserModel dengan id = 1.
        // Jika data tidak ditemukan, otomatis akan menampilkan error 404 (ModelNotFoundException).
        // $user = UserModel::findOrFail(1);

        // Mencari data UserModel dengan username 'manager9'.
        // Jika data tidak ditemukan, otomatis akan menampilkan error 404 (ModelNotFoundException)
        // $user = UserModel::where('username', 'manager9')->firstOrFail();

        // Menghitung jumlah data di tabel UserModel yang memiliki level_id = 2,
        // lalu menampilkan hasilnya menggunakan dd() (dump and die).
        // $user = UserModel::where('level_id', 2)->count();
        // dd($user);
        // return view('user', ['data' => $user]);

        // $jumlahPengguna = UserModel::where('level_id', 2)->count(); //menampilkan sesuai jobsheet
        // return view('user', compact('jumlahPengguna'));

        // Mencari data di tabel UserModel dengan 'username' = 'manager' dan 'nama' = 'Manager'.
        // Jika data ditemukan, akan mengambil data tersebut.
        // Jika data tidak ditemukan, akan membuat (insert) data baru dengan nilai yang diberikan.
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager'
        //     ],
        // );
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );

        // Mencari data pengguna (user) pertama yang memiliki username 'manager' dan nama 'Manager'.
        // Jika tidak ditemukan, maka akan membuat instance baru dari UserModel dengan data tersebut, tanpa menyimpannya ke database.
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        $user->save();
        return view('user', ['data' => $user]);
    }
}
