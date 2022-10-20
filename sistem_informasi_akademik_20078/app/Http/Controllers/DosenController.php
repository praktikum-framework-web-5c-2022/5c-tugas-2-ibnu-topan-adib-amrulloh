<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreDosenRequest;
use App\Http\Requests\UpdateDosenRequest;

class DosenController extends Controller
{
    public function insert(){
        
        $raw = DB::insert("INSERT INTO dosens (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('2000', 'Ngadimun','lk','Jl Ngasal Kecamatan Ngasal','Solo','1980-08-08','ngadimun.jpg',now(),now())");
        dump($raw);

        $query = DB::table('dosens')->insert(
            [
                'nidn' => '2001',
                'nama' => 'Mukidi',
                'jenis_kelamin' => 'lk',
                'alamat' => 'Jl Ngasal Kecamatan Ngasal',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '1986-05-20',
                'photo' => 'mukidi.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($query);

        $eloquent = Dosen::create(
            [
                'nidn' => '2002',
                'nama' => 'Markonah',
                'jenis_kelamin' => 'pr',
                'alamat' => 'Jl Ngasal Kecamatan Ngasal',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '1985-08-21',
                'photo' => 'markonah.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($eloquent);
        return "Sukses Input Data";
    }

    public function select(){

        $raw = DB::select("SELECT * FROM dosens");
        dump($raw);

        $query = DB::table('dosens')->get();
        dump($query);

        $eloquent = Dosen::all();
        dump($eloquent);
        return "Sukses";
    }

    public function update(){

        $raw = DB::update("UPDATE dosens SET nama='Rani',updated_at=now() WHERE nama=?",['Markonah']);
        dump($raw);

        $query = DB::table('dosens')->where('nama','Ngadimun')->update(['photo' => 'ngadimun1.jpg','updated_at' => now(),]);
        dump($query);

        $eloquent = Dosen::where('nama','mukidi')->first()->update(['alamat' => 'Jl S.parman','updated_at' => now(),]);
        dump($eloquent);

        return "Sukses Update Data";

    }

    public function delete(){

        $raw = DB::delete("DELETE FROM dosens WHERE nama=?",['Mukidi']);
        dump($raw);

        $query = DB::table('dosens')->where('nama','Ngadimun')->delete();
        dump($query);

        $eloquent = Dosen::where('nidn','2002')->delete();
        dump($eloquent);

        return "Sukses Hapus Data";
    }

    
}
