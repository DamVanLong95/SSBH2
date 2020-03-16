<?php

use Illuminate\Database\Seeder;

class PunishmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Punishment::class, 10)->create();
    }
}
