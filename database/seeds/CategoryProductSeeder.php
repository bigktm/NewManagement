<?php

use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake  = Faker\Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('tbl_category_product')->insert([
                'category_name' => $fake->name,
                'category_status' => $fake->numberBetween($min = 0, $max = 1),
                'category_desc' => $fake->sentence(15),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'category_slug' => $fake->rtrim(str_replace('--', '-', strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', trim($fake->sentence(5))))),'-')
            ]);
        }
    }
}
