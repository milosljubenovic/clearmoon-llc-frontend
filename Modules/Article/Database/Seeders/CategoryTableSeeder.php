<?php

namespace Modules\Article\Database\Seeders;

use Modules\Article\Entities\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [
                'id' => 1,
                'name' => "Networking",
                'slug' => "networking",
                'parent_category_id' => null
            ],
            [
                'id' => 2,
                'name' => "On-site Systems",
                'slug' => "on-site-systems",
                'parent_category_id' => null
            ],
            [
                'id' => 3,
                'name' => "Management",
                'slug' => "management",
                'parent_category_id' => null
            ],
            [
                'id' => 4,
                'name' => "Software as a Service",
                'slug' => "software-as-a-service",
                'parent_category_id' => null
            ],
            [
                'id' => 5,
                'name' => "Monitoring",
                'slug' => "monitoring",
                'parent_category_id' => null
            ],
            [
                'id' => 6,
                'name' => "Computer Asset Management",
                'slug' => "computer-asset-management",
            ],
            [
                'id' => 7,
                'name' => "Other Services",
                'slug' => "other-services",
            ]
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['id' => $category['id']],
                $category
            );
        }
    }
}
