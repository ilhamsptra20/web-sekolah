<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\AboutCard;
use App\Models\User;
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
    }
}
