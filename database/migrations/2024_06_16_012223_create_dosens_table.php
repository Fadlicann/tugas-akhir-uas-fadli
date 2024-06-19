<?php

use App\Models\Dosen;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('no_hp');
            $table->string('nip');
            $table->string('gelar');
            $table->timestamps();
        });
        Dosen::create([
            'nama_depan' => 'Dr. Al - Khowarizmi',
            'nama_belakang' => '',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'no_hp' => '-',
            'nip' => '0127099201',
            'gelar' => ' S.Kom., M.Kom',
        ]);
        Dosen::create([
            'nama_depan' => 'Halim Maulana',
            'nama_belakang' => '',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'no_hp' => '-',
            'nip' => '0121119102',
            'gelar' => 'ST.,M.Kom',
        ]);
        Dosen::create([
            'nama_depan' => 'Amrullah',
            'nama_belakang' => '',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'no_hp' => '-',
            'nip' => '0121119102',
            'gelar' => 'S.Kom.,M.Kom',
        ]);
        Dosen::create([
            'nama_depan' => 'Andi Zulherry',
            'nama_belakang' => '',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'no_hp' => '-',
            'nip' => '0121119102',
            'gelar' => 'S.Kom.,M.Kom',
        ]);
        Dosen::create([
            'nama_depan' => 'Mhd. Basri',
            'nama_belakang' => '',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'no_hp' => '-',
            'nip' => '0121119102',
            'gelar' => 'S.Si, M.Kom',
        ]);
        Dosen::create([
            'nama_depan' => 'Ferdy Riza',
            'nama_belakang' => '',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'no_hp' => '-',
            'nip' => '0121119102',
            'gelar' => 'ST, M.Kom',
        ]);
        Dosen::create([
            'nama_depan' => 'Fatma Sari Hutagalung',
            'nama_belakang' => '',
            'jenis_kelamin' => 'P',
            'agama' => 'Islam',
            'no_hp' => '-',
            'nip' => '0121119102',
            'gelar' => 'M.Kom',
        ]);
        Dosen::create([
            'nama_depan' => 'Ardiansyah',
            'nama_belakang' => '',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'no_hp' => '-',
            'nip' => '0121119102',
            'gelar' => 'M.Kom',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen');
    }
}
