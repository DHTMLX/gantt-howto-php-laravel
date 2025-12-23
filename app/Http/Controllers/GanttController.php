<?php
namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use App\Models\Task;
use App\Models\Link;

class GanttController extends Controller
{
	public function get(): JsonResponse
	{
		$tasks = Task::orderBy('sortorder')->get();
		$links = Link::all();

		return response()->json([
			"tasks" => $tasks,
			"links" => $links
		]);
	}
}