<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('/json/user.json');

         $list = json_decode($json, true);

         foreach ($list as $item) {

             User::query()->updateOrCreate([
                 'id' => $item['id'],
                 'name' => $item['name'],
                 'email' => $item['email'],
                 'email_verified_at' => $item['email_verified_at'],
                 'contact_no' => $item['contact_no'],
                 'password' => $item['password'],
                 'remember_token' => $item['remember_token'],
                 'created_at' => $item['created_at'],
                 'updated_at' => $item['updated_at'],
             ]);
         }
    }
}

