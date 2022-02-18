<?php 
 
namespace Database\Seeders; 
 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
 
class ProdutosTableSeeder extends Seeder 
{ 
    public function run() 
    { 
        DB::table('produtos')->insert([ 
            'SKU'     => '0001', 
            'nome'    => 'Caneta', 
            'quantidade' => '90', 
            'sistema' => 'Local', 
        ]); 
    } 
}