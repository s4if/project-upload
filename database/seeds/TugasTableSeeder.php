<?php

use Illuminate\Database\Seeder;

class TugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tugas1 = new \App\Tugas;
        $tugas1->nama_tugas = "Tugas DHCP";
        $tugas1->kelas = "XI TKJ 2";
        $tugas1->mapel = "ASJ";
        $tugas1->waktu_buka = new DateTime('now');
        $tugas1->waktu_tutup = new DateTime('now');
        $tugas1->nama_guru = "Saiful Habib, S.Pd";
        $tugas1->save();
    }
}
