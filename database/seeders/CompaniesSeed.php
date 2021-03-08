<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Company;

class CompaniesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'website' => Str::random(10) . '.com',
            'logo' => Str::random(10) . '.jpg',
            'password' => bcrypt('secret'),
        ]);
    }
}
