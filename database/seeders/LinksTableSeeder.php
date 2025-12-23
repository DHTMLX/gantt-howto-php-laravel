<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinksTableSeeder extends Seeder
{
	public function run(): void
	{
		DB::table('links')->truncate();
		DB::table('links')->insert([
			['id' => 1, 'source' => 2, 'target' => 3, 'type' => 0],
			['id' => 2, 'source' => 3, 'target' => 4, 'type' => 1]
		]);
	}
}