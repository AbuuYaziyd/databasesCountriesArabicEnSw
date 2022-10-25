<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder {
	
	public function run() 
	{	
        $regions = [
            ['capital_city_id' =>'3', 'code' => 'RD', 'name_en' => 'Riyadh', 'name_en' => 'Riyadh'],
            ['capital_city_id' =>'6', 'code' => 'MQ', 'name_en' => 'Makkah', 'name_en' => 'Makkah'],
            ['capital_city_id' =>'14', 'code' => 'MN', 'name_en' => 'Madinah', 'name_en' => 'Madinah'],
            ['capital_city_id' =>'11', 'code' => 'QA', 'name_en' => 'Qassim', 'name_en' => 'Qassim'],
            ['capital_city_id' =>'13', 'code' => 'SQ', 'name_en' => 'Eastern Province', 'name_en' => 'Eastern Province'],
            ['capital_city_id' =>'15', 'code' => 'AS', 'name_en' => 'Asir', 'name_en' => 'Asir'],
            ['capital_city_id' =>'1', 'code' => 'TB', 'name_en' => 'Tabuk', 'name_en' => 'Tabuk'],
            ['capital_city_id' =>'10', 'code' => 'HA', 'name_en' => 'Hail', 'name_en' => 'Hail'],
            ['capital_city_id' =>'2213', 'code' => 'SH', 'name_en' => 'Northern Borders', 'name_en' => 'Northern Borders'],
            ['capital_city_id' =>'17', 'code' => 'GA', 'name_en' => 'Jazan', 'name_en' => 'Jazan'],
            ['capital_city_id' =>'3417', 'code' => 'NG', 'name_en' => 'Najran', 'name_en' => 'Najran'],
            ['capital_city_id' =>'1542', 'code' => 'BA', 'name_en' => 'Bahah', 'name_en' => 'Bahah'],
            ['capital_city_id' =>'2237', 'code' => 'GO', 'name_en' => 'Jawf', 'name_en' => 'Jawf'],
        ];

		$rgns = DB::table('regions');
		$rgns->insert($regions);
	}
}
