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
            'question' => 'どのようにあなた自身を表現するものだと思いますか？',
            'kind_number' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => 'どの程度まで考えを深めることができましたか？',
            'kind_number' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => '取り組むべき最初のステップは何だと思いますか？',
            'kind_number' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => '最も重要なことは何だと思いますか？',
            'kind_number' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => '最も困難だと感じる部分は何だと思いますか？',
            'kind_number' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => '周りの人たちはどのようにあなたを見ると思いますか？',
            'kind_number' => 3,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => '知識や情報源は何ですか？',
            'kind_number' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => 'あなたが真に望むものは何ですか？',
            'kind_number' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => '理想の未来像はどのようなものですか？',
            'kind_number' => 3,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => '興味を持ったきっかけは何ですか？',
            'kind_number' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => 'どのようなことに興味を持ちましたか？',
            'kind_number' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => 'もっと深く理解するためには、どのようなことが必要だと思いますか？',
            'kind_number' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => '周りの人に熱く語れるところはどこですか？',
            'kind_number' => 3,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => '一番こだわりたいところはどこですか？',
            'kind_number' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ],
        [
            'question' => '最も大切なことは何だと思いますか？',
            'kind_number' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ],
    ]);
    }
}
