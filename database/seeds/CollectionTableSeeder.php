<?php

use Illuminate\Database\Seeder;

class CollectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert([
            'reference' => 'COMPH',
            'name' => 'Board of Trade: Companies Registration Office: Files of Dissolved Companies',
            'department_id' => 1
        ]);

        DB::table('collections')->insert([
            'reference' => 'NAUSSF',
            'name' => 'Nautical Assessors Unit: Symbol Files',
            'department_id' => 1
        ]);

        DB::table('collections')->insert([
            'reference' => 'FMNS',
            'name' => 'Factory and Mines Files',
            'department_id' => 1
        ]);
    }
}
