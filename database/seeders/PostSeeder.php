<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample posts
        $posts = [
            [
                'judul' => 'Welcome to Laravel Blog',
                'konten' => 'Laravel adalah framework PHP yang powerful dan elegant. Framework ini menyediakan tools yang dibutuhkan untuk membuat aplikasi web yang robust dan scalable.',
                'tanggal_post' => now()->subDays(2),
            ],
            [
                'judul' => 'Tips Belajar Programming',
                'konten' => 'Belajar programming membutuhkan konsistensi dan praktek yang rutin. Mulailah dengan konsep dasar, kemudian tingkatkan skill secara bertahap.',
                'tanggal_post' => now()->subDays(1),
            ],
            [
                'judul' => 'PHP 8 Features',
                'konten' => 'PHP 8 membawa banyak fitur baru yang menarik, seperti Union Types, Named Arguments, Match Expression, dan masih banyak lagi.',
                'tanggal_post' => now(),
            ],
        ];

        foreach ($posts as $postData) {
            $post = Post::create($postData);
            
            // Add sample comments for each post
            Comment::create([
                'post_id' => $post->id,
                'nama_komentator' => 'John Doe',
                'isi_komentar' => 'Artikel yang sangat menarik dan informatif!'
            ]);
            
            Comment::create([
                'post_id' => $post->id,
                'nama_komentator' => 'Jane Smith',
                'isi_komentar' => 'Terima kasih atas sharing pengetahuannya.'
            ]);
        }
    }
}
