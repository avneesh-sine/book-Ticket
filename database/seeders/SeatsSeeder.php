<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'A'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'B'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'C'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'D'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'E'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'F'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'G'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'H'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'I'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'J'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'K'.$i,
                'status' => 0,
            ]);
        }for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'L'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'M'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'N'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'O'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'P'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'Q'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'R'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'S'.$i,
                'status' => 0,
            ]);
        }
        for($i=1;$i<11;$i++)
        {
            DB::table('seats')->insert([
                'seat_no' => 'T'.$i,
                'status' => 0,
            ]);
        }
    }
}
