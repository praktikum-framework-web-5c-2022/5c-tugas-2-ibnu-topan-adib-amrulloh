<?php
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;



Route::controller(DosenController::class)->group(function () {
    Route::get('/insert-dosen', 'insert');
    Route::get('/select-dosen', 'select');
    Route::get('/update-dosen', 'update');
    Route::get('/delete-dosen', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert-mahasiswa', 'insert');
    Route::get('/select-mahasiswa', 'select');
    Route::get('/update-mahasiswa', 'update');
    Route::get('/delete-mahasiswa', 'delete');
});

Route::controller(MataKuliahController::class)->group(function () {
    Route::get('/insert-matkul', 'insert');
    Route::get('/select-matkul', 'select');
    Route::get('/update-matkul', 'update');
    Route::get('/delete-matkul', 'delete');
});




Route::get('/', function () {
    $students=[
        [
            'npm'=> '20001',
            'name' => 'Ibnu Topan',
            'genders' => 'Laki-Laki',
            'email' => 'dotallggwp@gmail.com',
            'phone' => '0812xxxxxxxx',
            'address' => 'Indramayu',
            'birthplace' => 'Indramayu',
            'faculties' => 'MIPA',
            'studies' => 'Matematika'
        ],
        [
            'npm'=> '20002',
            'name' => 'Japrak',
            'genders' => 'Laki-Laki',
            'email' => 'japrak123@gmail.com',
            'phone' => '0812xxxxxxxx',
            'address' => 'Indramayu',
            'birthplace' => 'Indramayu',
            'faculties' => 'MIPA',
            'studies' => 'Matematika'
        ],
        [
            'npm'=> '20003',
            'name' => 'Rizki Ahmed',
            'genders' => 'Laki-Laki',
            'email' => 'rizkiaguero@gmail.com',
            'phone' => '0812xxxxxxxx',
            'address' => 'Indramayu',
            'birthplace' => 'Indramayu',
            'faculties' => 'Ilmu Komputer',
            'studies' => 'Informatika'
        ],
        [
            'npm'=> '20004',
            'name' => 'Magha Lefand',
            'genders' => 'Laki-Laki',
            'email' => 'maghalefand@gmail.com',
            'phone' => '0812xxxxxxxx',
            'address' => 'Indramayu',
            'birthplace' => 'Indramayu',
            'faculties' => 'MIPA',
            'studies' => 'Matematika'
        ],
        [
            'npm'=> '20005',
            'name' => 'Rifky Maulana',
            'genders' => 'Laki-Laki',
            'email' => 'rifkymaul@gmail.com',
            'phone' => '0812xxxxxxxx',
            'address' => 'Indramayu',
            'birthplace' => 'Indramayu',
            'faculties' => 'Ilmu Komputer',
            'studies' => 'Informatika'
        ],
        [
            'npm'=> '20006',
            'name' => 'Awan Gunawan',
            'genders' => 'Laki-Laki',
            'email' => 'memethofus@gmail.com',
            'phone' => '0812xxxxxxxx',
            'address' => 'Indramayu',
            'birthplace' => 'Indramayu',
            'faculties' => 'MIPA',
            'studies' => 'Fisika'
        ],
        [
            'npm'=> '20007',
            'name' => 'Saripudin',
            'genders' => 'Laki-Laki',
            'email' => 'baharsyahsarip@gmail.com',
            'phone' => '0812xxxxxxxx',
            'address' => 'Indramayu',
            'birthplace' => 'Indramayu',
            'faculties' => 'MIPA',
            'studies' => 'Matematika'
        ],
        [
            'npm'=> '20008',
            'name' => 'Devi Melati',
            'genders' => 'Perempuan',
            'email' => 'devi0405@gmail.com',
            'phone' => '0812xxxxxxxx',
            'address' => 'Indramayu',
            'birthplace' => 'Indramayu',
            'faculties' => 'MIPA',
            'studies' => 'Matematika'
        ],
        [
            'npm'=> '20009',
            'name' => 'Abdul Manaf',
            'genders' => 'Laki-Laki',
            'email' => 'aldous@gmail.com',
            'phone' => '0812xxxxxxxx',
            'address' => 'Indramayu',
            'birthplace' => 'Indramayu',
            'faculties' => 'Pertanian',
            'studies' => 'Agribisnis'
        ],
        [
            'npm'=> '20010',
            'name' => 'Rani Amrulloh',
            'genders' => 'Perempuan',
            'email' => 'ranipermata@gmail.com',
            'phone' => '0812xxxxxxxx',
            'address' => 'Kuningan',
            'birthplace' => 'Kuningan',
            'faculties' => 'FISIP',
            'studies' => 'HI'
        ],
    ];
    return view('mahasiswa',[
        'title' => 'Mahasiswa',
        'students' => $students
        
    ]);

});
Route::get('/dosen', function () {
    $lecturers=[
        [
            'id'=>'1',
            'name'=> 'Mukidi',
            'study' => 'Kalkulus',
            'email'=>'kalkulus@gmail.com',
            'phone'=>'0812xxxxxxxx',
            'address'=>'Jl Ngasal,Kel Ngasal, Ngasal',
            'image'=>'1.png'
        ],
        [
            'id'=>'2',
            'name'=> 'Jo',
            'study' => 'Bahasa Inggris',
            'email'=>'jo123@gmail.com',
            'phone'=>'0812xxxxxxxx',
            'address'=>'Jl Ngasal,Kel Ngasal, Ngasal',
            'image'=>'1.png'
        ],
        [
            'id'=>'3',
            'name'=> 'Maemunah',
            'study' => 'Machine Learning',
            'email'=>'munah123@gmail.com',
            'phone'=>'0812xxxxxxxx',
            'address'=>'Jl Ngasal,Kel Ngasal, Ngasal',
            'image'=>'2.png'
        ],
        [
            'id'=>'4',
            'name'=> 'Ngadimun',
            'study' => 'Agama',
            'email'=>'ngadimun@gmail.com',
            'phone'=>'0812xxxxxxxx',
            'address'=>'Jl Ngasal,Kel Ngasal, Ngasal',
            'image'=>'1.png'
        ],
        [
            'id'=>'5',
            'name'=> 'Sukiman',
            'study' => 'PBW',
            'email'=>'sukiman@gmail.com',
            'phone'=>'0812xxxxxxxx',
            'address'=>'Jl Ngasal,Kel Ngasal, Ngasal',
            'image'=>'1.png'
        ],
        [
            'id'=>'6',
            'name'=> 'Sukijan',
            'study' => 'PBM',
            'email'=>'sukijan@gmail.com',
            'phone'=>'0812xxxxxxxx',
            'address'=>'Jl Ngasal,Kel Ngasal, Ngasal',
            'image'=>'1.png'
        ],
        [
            'id'=>'7',
            'name'=> 'Sutarman',
            'study' => 'Filsafat',
            'email'=>'sutarman@gmail.com',
            'phone'=>'0812xxxxxxxx',
            'address'=>'Jl Ngasal,Kel Ngasal, Ngasal',
            'image'=>'1.png'
        ],
        [
            'id'=>'8',
            'name'=> 'Surtijem',
            'study' => 'Kajian Strategis',
            'email'=>'surtijem@gmail.com',
            'phone'=>'0812xxxxxxxx',
            'address'=>'Jl Ngasal,Kel Ngasal, Ngasal',
            'image'=>'2.png'
        ],
        [
            'id'=>'9',
            'name'=> 'Karnawi',
            'study' => 'Aljabar Linier',
            'email'=>'karnawi@gmail.com',
            'phone'=>'0812xxxxxxxx',
            'address'=>'Jl Ngasal,Kel Ngasal, Ngasal',
            'image'=>'1.png'
        ],
        [
            'id'=>'10',
            'name'=> 'Suyono',
            'study' => 'Aljabar Matriks',
            'email'=>'suyono@gmail.com',
            'phone'=>'0812xxxxxxxx',
            'address'=>'Jl Ngasal,Kel Ngasal, Ngasal',
            'image'=>'1.png'
        ]

    ];
    


    return view('dosen',[
        'title' => 'Dosen',
        'lecturers' => $lecturers
    ]);

});
Route::get('/matakuliah', function () {
    $subjects=[
        [
            'id'=>'1',
            'name'=> 'Basis data',
            'sks' => '3',
            'dosen' => 'Tarwadi',
            'waktu' => '2 jam',
            'jadwal' => 'Senin 14:00'
        ],
        [
            'id'=>'2',
            'name'=> 'Pemrograman Web',
            'sks' => '3',
            'dosen' => 'Sukiman',
            'waktu' => '2 jam',
            'jadwal' => 'Senin 16:30'
        ],
        [
            'id'=>'3',
            'name'=> 'Framework Pemrograman Web',
            'sks' => '3',
            'dosen' => 'Maya',
            'waktu' => '2 jam',
            'jadwal' => 'Selasa 08:00'
        ],
        [
            'id'=>'4',
            'name'=> 'Pemrograman Mobile',
            'sks' => '3',
            'dosen' => 'Sukijan',
            'waktu' => '2 jam',
            'jadwal' => 'Selasa 11:00'
        ],
        [
            'id'=>'5',
            'name'=> 'Pemrograman Berorientasi Objek',
            'sks' => '3',
            'dosen' => 'Karsani',
            'waktu' => '2 jam',
            'jadwal' => 'Selasa 15:00'
        ],
        [
            'id'=>'6',
            'name'=> 'Machine Learning',
            'sks' => '3',
            'dosen' => 'Maemunah',
            'waktu' => '2 jam',
            'jadwal' => 'Rabu 07:30'
        ],
        [
            'id'=>'7',
            'name'=> 'Algoritma dan Pemrograman',
            'sks' => '3',
            'dosen' => 'Romi antonius',
            'waktu' => '2 jam',
            'jadwal' => 'Rabu 14:00'
        ],
        [
            'id'=>'8',
            'name'=> 'Restful API',
            'sks' => '3',
            'dosen' => 'Ridwan',
            'waktu' => '2 jam',
            'jadwal' => 'Kamis 14:00'
        ],
        [
            'id'=>'9',
            'name'=> 'Unit Testing',
            'sks' => '3',
            'dosen' => 'Putri',
            'waktu' => '2 jam',
            'jadwal' => 'Jumat 14:00'
        ],
        [
            'id'=>'10',
            'name'=> 'Data Mining',
            'sks' => '3',
            'dosen' => 'Tarwadi',
            'waktu' => '2 jam',
            'jadwal' => 'Jumat 19:00'
        ],
    ];


    return view('matkul',[
        'title' => 'MataKuliah',
        'subjects'=> $subjects
    ]);

});
