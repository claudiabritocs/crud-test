<?php 
 
namespace Database\Seeders; 
 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
 
class CalendarioTableSeeder extends Seeder 
{ 
    public function run() 
    { 
        DB::table('calendario')->insert([ 
            'dia'     => '2022-02-17', 
        ]); 
    } 
}