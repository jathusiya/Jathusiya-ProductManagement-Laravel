<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $material=new \App\Models\Product([
            'image'=>'https://content.bnshardware.lk/2466-home_default/small-bricks.jpg',
            'name'=>'small-bricks',
            'description'=>' B N S HARDWARE',
            'price'=>'15.00',
           ]);
           $material->save();
           $material=new \App\Models\Product([
            'image'=>'https://content.bnshardware.lk/2465-home_default/large-bricks.jpg',
            'name'=>'large-bricks',
            'description'=>'Brand B N S HARDWARE',
            'price'=>'28.50',
           ]);
           $material->save();
           $material=new \App\Models\Product([
            'image'=>'https://content.bnshardware.lk/226-home_default/tokyo-super-ordinary-portland-cement-50kg-bags.jpg',
            'name'=>'tokyo cement',
            'description'=>'Brand TOKYO CEMENT GROUP',
            'price'=>'1000.00',
           ]);
           $material->save();
           $material=new \App\Models\Product([
            'image'=>'https://content.bnshardware.lk/2273-home_default/samudra-cement.jpg',
            'name'=>'SAMUDRA CEMENT',
            'description'=>'SAMUDRA CEMENT 50KG BAG',
            'price'=>'1005.00',
           ]);
           $material->save();
           $material=new \App\Models\Product([
            'image'=>'https://content.bnshardware.lk/2466-home_default/small-bricks.jpg',
            'name'=>'small-bricks',
            'description'=>' B N S HARDWARE',
            'price'=>'15.00',
           ]);
           $material->save();
           $material=new \App\Models\Product([
            'image'=>'https://content.bnshardware.lk/4302-home_default/anton-garden-hose-roll.jpg',
            'name'=>'anton-garden-hose-roll',
            'description'=>'super',
            'price'=>'977.00',
           ]);
           $material->save();
           $material=new \App\Models\Product([
            'image'=>'https://content.bnshardware.lk/3038-home_default/anton-solvent-cement.jpg',
            'name'=>'anton-solvent-cement',
            'description'=>' anton',
            'price'=>'165.00',
           ]);
           $material->save();
           $material=new \App\Models\Product([
            'image'=>'https://content.bnshardware.lk/2002-home_default/anton-reducing-rftee-25-x-20-mm.jpg',
            'name'=>'anton-reducing-rftee-25-x-20-mm',
            'description'=>'anton-reducing-rftee',
            'price'=>'60.00',
           ]);
           $material->save();
           $material=new \App\Models\Product([
            'image'=>'https://content.bnshardware.lk/2004-home_default/anton-reducing-rftee-32-x-20-mm.jpg',
            'name'=>'anton-reducing-rftee-32-x-20-mm',
            'description'=>'anton ',
            'price'=>'64.00',
           ]);
           $material->save();
           $material=new \App\Models\Product([
            'image'=>'https://content.bnshardware.lk/2006-home_default/anton-reducing-rftee-32-x-25-mm.jpg',
            'name'=>'anton-reducing-rftee-32-x-25-mm',
            'description'=>'anton-reducing-rftee ',
            'price'=>'96.00',
           ]);
           $material->save();
    }
}
