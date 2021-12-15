<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Socio;
class SocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Socio::factory()->count(20)->create(); 
    }
}
