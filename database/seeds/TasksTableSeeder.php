<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('tasks')->insert([
			['id'=>1, 'text'=>'Project #1', 'start_date'=>'2017-04-01 00:00:00', 'duration'=>5, 'progress'=>0.8, 'parent'=>0],
			['id'=>2, 'text'=>'Task #1', 'start_date'=>'2017-04-06 00:00:00', 'duration'=>4, 'progress'=>0.5, 'parent'=>1],
			['id'=>3, 'text'=>'Task #2', 'start_date'=>'2017-04-05 00:00:00', 'duration'=>6, 'progress'=>0.7, 'parent'=>1],
			['id'=>4, 'text'=>'Task #3', 'start_date'=>'2017-04-07 00:00:00', 'duration'=>2, 'progress'=>0, 'parent'=>1],
			['id'=>5, 'text'=>'Task #1.1', 'start_date'=>'2017-04-05 00:00:00', 'duration'=>5, 'progress'=>0.34, 'parent'=>2],
			['id'=>6, 'text'=>'Task #1.2', 'start_date'=>'2017-04-11 00:00:00', 'duration'=>4, 'progress'=>0.5, 'parent'=>2],
			['id'=>7, 'text'=>'Task #2.1', 'start_date'=>'2017-04-07 00:00:00', 'duration'=>5, 'progress'=>0.2, 'parent'=>3],
			['id'=>8, 'text'=>'Task #2.2', 'start_date'=>'2017-04-06 00:00:00', 'duration'=>4, 'progress'=>0.9, 'parent'=>3]
		]);
	}
}
