<?php

use Illuminate\Database\Seeder;

class SchoolSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('school_sections')->insert([
        ['label' => "高中"],
        ['label' => "初中"],
        ['label' => "小学"],
        ['label' => "幼儿园"],
        ['label' => "其他"],
      ]);
    }
}
