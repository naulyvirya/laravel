<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Menikah Cepat', 'content'=>'lorem ipsum doler sit amet'],
            ['title'=>'Kenapa Harus Menikah', 'content'=>'lorem ipsum doler sit amet'],
            ['title'=>'Haruskah Menundah Nikah?', 'content'=>'lorem ipsum doler sit amet'],
            ['title'=>'Visi Misi Berkeluarga', 'content'=>'lorem ipsum doler sit amet']
        ];

        // masukkan data ke database
        DB::table('posts')->insert($posts);
    }
}
