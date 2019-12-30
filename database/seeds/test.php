<?php

use Illuminate\Database\Seeder;

class test extends Seeder
{
    
    public function run()
    {
        \DB::table('nutritions')->insert(
            $date=[
                  'id' => '1',
                  'name'    => '大根',
                  'kcal' =>'100',
                  'tou' => '50',
                  'shitu'=>' 80',
                  'tanpaku' => '60',
                  'bitaminc' =>'5',
                  'bitaminb1' => '2.5',
                  'bitaminb6' =>'0.5'
                   ]);
      }
    }

