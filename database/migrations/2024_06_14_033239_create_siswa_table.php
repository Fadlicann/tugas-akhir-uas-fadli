<?php

use App\Models\Siswa;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->text('alamat');
            $table->integer('nim');
            $table->timestamps();
        });
        Siswa::create([
            'nama_depan' => 'Fadli Satria',
            'nama_belakang' => 'Caniago',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'alamat' => 'Jl Gatot Subroto',
            'nim' => '2109010015',
        ]);
        Siswa::create([
            'nama_depan' => 'Miko',
            'nama_belakang' => 'Ariyandi',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'alamat' => 'Jl azhar',
            'nim' => '2109010018',
        ]);
        Siswa::create([
            'nama_depan' => 'Rizki',
            'nama_belakang' => 'Ramdhani',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'alamat' => 'Jl Bromo',
            'nim' => '2109010012',
        ]);
        Siswa::create([
            'nama_depan' => 'Khairun',
            'nama_belakang' => 'Nisa',
            'jenis_kelamin' => 'P',
            'agama' => 'Islam',
            'alamat' => 'Jl Brayan',
            'nim' => '2109010032',
        ]);
        Siswa::create([
            'nama_depan' => 'Dimas',
            'nama_belakang' => 'Wijayanto',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'alamat' => 'Jl Pakam',
            'nim' => '2109010012',
        ]);
        Siswa::create([
            'nama_depan' => 'Muhammad',
            'nama_belakang' => 'Farhan',
            'jenis_kelamin' => 'P',
            'agama' => 'Islam',
            'alamat' => 'Jl Cendana',
            'nim' => '2109010008',
        ]);
        Siswa::create([
            'nama_depan' => 'Sahdu',
            'nama_belakang' => 'Ramadhan',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'alamat' => 'Jl Gaperta',
            'nim' => '2109010005',
        ]);
        Siswa::create([
            'nama_depan' => 'Faiz',
            'nama_belakang' => 'Amrizal',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'alamat' => 'Jl William',
            'nim' => '2109010016',
        ]);
        Siswa::create([
            'nama_depan' => 'Rizki Perdana',
            'nama_belakang' => 'Putra',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'alamat' => 'Jl Langkat',
            'nim' => '2109010040',
        ]);
        Siswa::create([
            'nama_depan' => 'Arman',
            'nama_belakang' => 'Maulana',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'alamat' => 'Jl Cempaka',
            'nim' => '2109010022',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
