<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Uncategorized',
            'Opinion',
            'Politics & Government',
            'Economy',
            'Business & Finance',
            'Energy & Environment',
            'Gender & Human Rights',
            'In-depth Africa',
            'Life & Culture',
            'Technology', 'Social issues',
            'Africa in brief'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
