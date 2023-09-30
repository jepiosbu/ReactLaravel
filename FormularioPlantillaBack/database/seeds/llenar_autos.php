<?php

use App\auto;
use Illuminate\Database\Seeder;

class llenar_autos extends Seeder
{

    public function run()
    {
        $name=['Honda Crb600 rr','Harley Davinson','Xtz 250'];
        $tipo_auto=[1,2,3];
        $precio=[48950000,89999999,10950999];
        $imagen=['https://comotos.co/wp-content/uploads/2022/07/Honda-CBR-600RR-2007-2008-caracteristicas.jpg','https://img.remediosdigitales.com/b68d7c/sportster-china-3-2023/1366_2000.jpeg','https://www.fpmoto.com/media/catalog/product/cache/26c9519530ea7d00ac31665297e99cab/x/t-150-3509-150-3509/pechera-para-yamaha-xtz-250-y-xtz-250-new.png'];
        
        for ($i=0; $i < 4; $i++) { 
            $auto = new auto;
            $auto->name=$name[$i];
            $auto->tipo_auto_id=$tipo_auto[$i];
            $auto->precio= $precio[$i];
            $auto->imagen=$imagen[$i];
            $auto->save();
        }
    
    }
}
