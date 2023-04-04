<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         $now = date('Y-m-d H:i:s', strtotime('+9 hours')); // +9時間で日本時間に変換
         DB::table('question__boxes')->insert([
        [
            'question' => '周囲からどんな反応があると予想しますか？',
            'kind_number' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => 'あなたが取り組むべき最初のステップは何だと思いますか？',
            'kind_number' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => 'あなたにとって最も重要なことは何だと思いますか？',
            'kind_number' => 3,
            'created_at' => $now,
            'updated_at' => $now,
        ],
    ]);
    }
}
