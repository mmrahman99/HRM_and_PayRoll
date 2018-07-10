<?php

use Illuminate\Database\Seeder;

class departmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'coolio',
            'description' => 'ya ya ya'
        ]);
    }
}
