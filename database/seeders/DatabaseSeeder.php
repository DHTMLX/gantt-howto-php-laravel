<?php
 
namespace Database\Seeders;
 
use App\Models\Task;
use App\Models\Link;
use Database\Seeders\TasksTableSeeder;
use Database\Seeders\LinksTableSeeder;
use Illuminate\Database\Seeder;
 
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(TasksTableSeeder::class);
        $this->call(LinksTableSeeder::class);
    }
}