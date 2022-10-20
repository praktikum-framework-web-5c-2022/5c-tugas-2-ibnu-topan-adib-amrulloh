<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Mata_kuliah;
use App\Http\Requests\StoreMata_kuliahRequest;
use App\Http\Requests\UpdateMata_kuliahRequest;

class MataKuliahController extends Controller
{
    public function insert(){

        $raw = DB::insert("INSERT INTO mata_kuliahs (kode_mk,nama_mk,created_at,updated_at) VALUES ('000', 'Data Mining',now(),now())");
        dump($raw);

        $query = DB::table('mata_kuliahs')->insert(
            [
                'kode_mk' => '001',
                'nama_mk' => 'PBW',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($query);

        $eloquent = Mata_kuliah::create(
            [
                'kode_mk' => '002',
                'nama_mk' => 'PBM',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
        dump($eloquent);
        return "Sukses Input Data";
    }

    public function select(){
        $raw = DB::select("SELECT * FROM mata_kuliahs");
        dump($raw);

        $eloquent = DB::table('mata_kuliahs')->get();
        dump($eloquent);

        $sql3 = Mata_kuliah::all();
        dump($sql3);
        return "Sukses";
    }

    public function update(){

        $raw = DB::update("UPDATE mata_kuliahs SET nama_mk='Pemrograman Framework',updated_at=now() WHERE id=?",[1]);
        dump($raw);

        $query = DB::table('mata_kuliahs')
        ->where('id','2')->update(['nama_mk' => 'Framework PBW','updated_at' => now()]);
        dump($query);

        $eloquent = Mata_kuliah::where('id','3')->first()->update(['nama_mk' => 'Flutter','updated_at' => now()]);
        dump($eloquent);
        return "Sukses Update Data";
    }

    public function delete(){

        $raw = DB::delete("DELETE FROM mata_kuliahs WHERE id=?",[1]);
        dump($raw);

        $query = DB::table('mata_kuliahs')->where('id',2)->delete();
        dump($query);

        $eloquent = Mata_kuliah::where('id',3)->delete();
        dump($eloquent);
        return "Sukses Hapus Data";
    }
}
