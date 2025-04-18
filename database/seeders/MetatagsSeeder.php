<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Metatags;

class MetatagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Metatags::create([
            'route_name'=> 'home',
            'meta_title' => 'Home || Advance Power Solution',
            'meta_description' => 'This is the homepage of our awesome website.',
            'meta_keywords' => 'home, welcome, website',
        ]);

        Metatags::create([
            'route_name' => 'about',
            'meta_title' => 'About Us || Advance Power Solution',
            'meta_description' => 'Learn more about our company and team.',
            'meta_keywords' => 'about, company, team',
        ]);

        Metatags::create([
            'route_name' => 'project',
            'meta_title' => 'Project || Advance Power Solution',
            'meta_description' => 'Learn more project our company and team.',
            'meta_keywords' => 'project, company, team',
        ]);
    }
}
