<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();
        $data=[
            [
                'name'=> 'Daniel',
                'email'=>'daniel@example.com',
                'password'=>'123'
            ],
            [
                'name'=> 'Philippe',
                'email'=>'philippe@example.com',
                'password'=>'123'
            ],        [
                'name'=> 'Marius',
                'email'=>'marius@example.com',
                'password'=>'123',
            ],        
        ];
        //Insert data in the table
        /*foreach($data as $artist){
            Artist::create($artist);
        }*/

        DB::table('users')->insert($data);
    }
}
