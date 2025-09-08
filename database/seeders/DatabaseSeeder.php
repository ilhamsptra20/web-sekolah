<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\AboutCard;
use App\Models\User;
use App\Models\StudyProgram;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'ADMIN',
            'email' => 'admin@email.com',
            'password' => '123456'
        ]);

        About::create([
            'description' => "Sekolah Cerdas Bangsa didirikan dengan visi untuk menciptakan lingkungan belajar yang inspiratif dan transformatif. Kami fokus pada pengembangan akademis, karakter, dan keterampilan hidup agar setiap siswa siap menghadapi tantangan masa depan.",
            'visi' => 'Menjadi sekolah unggulan yang melahirkan pemimpin masa depan berintegritas.',
            'misi' => 'Menyediakan kurikulum inovatif dan fasilitas terbaik untuk memaksimalkan potensi siswa.',
            'nilai' => 'Integritas, inovasi, kolaborasi, dan kepedulian sosial.',
        ]);

        $studyPrograms = [
            [
                "title"=> "Teknik Kendaraan Ringan Otomotif (TKR)",
                "description"=> "Fokus pada perawatan dan perbaikan kendaraan bermotor. Jurusan ini memiliki kerja sama dengan PT Honda untuk kelas industri."
            ],
            [
                "title"=> "Pengembangan Perangkat Lunak dan Gim (PPLG)",
                "description"=> "Berfokus pada pengembangan perangkat lunak dan aplikasi."
            ],
            [
                "title"=> "Teknik Jaringan Komputer dan Telekomunikasi (TJKT)",
                "description"=> "Menangani instalasi dan pemeliharaan jaringan komputer. Jurusan ini diketahui memiliki program Samsung Teknik Institute (STI) untuk pelatihan teknisi dan promotor."
            ],
            [
                "title"=> "Teknik Pengelasan dan Fabrikasi Logam (TP)",
                "description"=> "Mempelajari proses pembuatan, perakitan, dan pengelasan komponen logam. Jurusan ini juga menjalin kerja sama dengan industri besar."
            ]
        ];

        foreach($studyPrograms as $studyProgram) {
            StudyProgram::create([
                "title" => $studyProgram['title'],
                "description" => $studyProgram['description'],
            ]);
        }

        
    }
}
