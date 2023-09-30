<?php

use Illuminate\Database\Seeder;
use App\tipo_auto;
use App\HasFactory;
class llenar_tipos_autos extends Seeder
{
    
    public function run()
    {
       $name=['deportivo','clasico','campero'];

       foreach ($name as $item) {
           tipo_auto::insert(['name'=>$item]);
       }
    }
}
