<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Arona',
            'email' => 'arona@gmail.com',
            'kelas' => 'Schale Admin',
            'password' => Hash::make('AronaAdminOSSchale2287!'),
            'role' => 'admin',
        ]);

        $questions = [
            ['nomor' => 1, 'soal' => 'Apakah Anda sering merasa sakit kepala?'],
            ['nomor' => 2, 'soal' => 'Apakah Anda kehilangan nafsu makan?'],
            ['nomor' => 3, 'soal' => 'Apakah tidur Anda tidak nyenyak?'],
            ['nomor' => 4, 'soal' => 'Apakah Anda mudah merasa takut?'],
            ['nomor' => 5, 'soal' => 'Apakah Anda merasa cemas, tegang, atau khawatir?'],
            ['nomor' => 6, 'soal' => 'Apakah tangan Anda gemetar?'],
            ['nomor' => 7, 'soal' => 'Apakah Anda mengalami gangguan pencernaan?'],
            ['nomor' => 8, 'soal' => 'Apakah Anda merasa sulit berpikir jernih?'],
            ['nomor' => 9, 'soal' => 'Apakah Anda merasa tidak bahagia?'],
            ['nomor' => 10, 'soal' => 'Apakah Anda lebih sering menangis?'],
            ['nomor' => 11, 'soal' => 'Apakah Anda merasa sulit untuk menikmati aktivitas sehari-hari?'],
            ['nomor' => 12, 'soal' => 'Apakah Anda mengalami kesulitan untuk mengambil keputusan?'],
            ['nomor' => 13, 'soal' => 'Apakah aktivitas/tugas sehari-hari Anda terbengkalai?'],
            ['nomor' => 14, 'soal' => 'Apakah Anda merasa tidak mampu berperan dalam kehidupan ini?'],
            ['nomor' => 15, 'soal' => 'Apakah Anda kehilangan minat terhadap banyak hal?'],
            ['nomor' => 16, 'soal' => 'Apakah Anda merasa tidak berharga?'],
            ['nomor' => 17, 'soal' => 'Apakah Anda mempunyai pikiran untuk mengakhiri hidup Anda?'],
            ['nomor' => 18, 'soal' => 'Apakah Anda merasa lelah sepanjang waktu?'],
            ['nomor' => 19, 'soal' => 'Apakah Anda merasa tidak enak di perut?'],
            ['nomor' => 20, 'soal' => 'Apakah Anda mudah lelah?'],
            ['nomor' => 21, 'soal' => 'Apakah Anda minum alkohol lebih banyak dari biasanya atau menggunakan narkoba?'],
            ['nomor' => 22, 'soal' => 'Apakah Anda yakin bahwa seseorang mencoba mencelakai Anda dengan cara tertentu?'],
            ['nomor' => 23, 'soal' => 'Apakah ada yang mengganggu atau hal yang tidak biasa dalam pikiran Anda?'],
            ['nomor' => 24, 'soal' => 'Apakah Anda pernah mendengar suara tanpa tahu sumbernya atau yang orang lain tidak dapat mendengar?'],
            ['nomor' => 25, 'soal' => 'Apakah Anda mengalami mimpi yang mengganggu tentang suatu bencana/musibah atau adakah saat-saat Anda seolah mengalami kembali kejadian bencana itu?'],
            ['nomor' => 26, 'soal' => 'Apakah Anda menghindari kegiatan, tempat, orang, atau pikiran yang mengingatkan Anda akan bencana tersebut?'],
            ['nomor' => 27, 'soal' => 'Apakah minat Anda terhadap teman dan kegiatan yang biasa Anda lakukan berkurang?'],
            ['nomor' => 28, 'soal' => 'Apakah Anda merasa sangat terganggu jika berada dalam situasi yang mengingatkan Anda akan bencana atau jika Anda berpikir tentang bencana itu?'],
            ['nomor' => 29, 'soal' => 'Apakah Anda kesulitan memahami atau mengekspresikan perasaan Anda?'],
        ];

        foreach ($questions as $question) {
            DB::table('kuis')->insert([
                'nomor' => $question['nomor'],
                'soal' => $question['soal'],
                'is_yn' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
