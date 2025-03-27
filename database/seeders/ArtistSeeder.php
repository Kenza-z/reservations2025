<?php

namespace Database\Seeders;
use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->truncate();
        $data=[
            [
                'firstname'=> 'Daniel',
                'lastname'=>'Marcelin'
            ],
            [
                'firstname'=> 'Philippe',
                'lastname'=>'Laurent'
            ],        [
                'firstname'=> 'Marius',
                'lastname'=>'Von Mayenburg'
            ],        
        ];
        //Insert data in the table
        /*foreach($data as $artist){
            Artist::create($artist);
        }*/

        DB::table('artists')->insert($data);

    }

    }

