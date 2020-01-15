<?php

use App\Example;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $no = 10;
        for ($i=0; $i < $no; $i++) {
        $example = new Example();
        $example->judul = 'Belajar Pemograman Part ' . $i;
        $example->slug = Str::slug($example->judul, '-');
        $example->deskripsi = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $example->sinopsis = Str::limit($example->deskripsi, 50);
        $example->save();
        }
    }
}
