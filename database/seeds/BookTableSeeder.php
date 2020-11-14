<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
          'title' => 'Mariposa',
          'author' =>'Luluk HF',
          'publication' =>'Coconut Books',
            'synopsis' => 'Novel ini mengisahkan tentang seseorang perempuan yang bernama Natasha Kay Loovi, biasanya di panggil Acha. Ia sedang berusaha mendekati seorang pria yang bernama Iqbal, iqbal adalah seorang pemuda  yang ganteng dan selalu mengisi relung di hatinya.',
            'year' => '2018',
            ],
            [
          'title' => 'Nanti Kita Cerita Tentang Hari Ini',
          'author' =>'Marchella FP',
          'publication' =>'PT Gramedia Pustaka Utama',
            'synopsis' => 'Buku ini menceritakan tentang sebuah keluarga yang memkiliki konflik di masa lalu,konflik yang belum pernah di publikasikan atau di bicarakan sebelumnya ,karena dapat merusak keharmonisan yang ada di dalam keluarga ini.',
            'year' => '2018',
            ]
      ]);//
    }
}
