<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
	public function store(Request $request)
	{
	$data = $request->only(['text', 'start_date', 'duration', 'parent']);
	$data['progress'] = $request->input('progress', 0);
	$data['sortorder'] = Task::max('sortorder') + 1;

	$task = Task::create($data);

	return response()->json([
		'action' => 'inserted',
		'tid' => $task->id,
	]);
	}

	public function update(Request $request, $id)
	{
	$task = Task::findOrFail($id);

	$data = $request->only(['text', 'start_date', 'duration', 'parent']);
	$data['progress'] = $request->input('progress', 0);

	$task->update($data);

	if ($request->has('target')) {
		$this->updateOrder($id, $request->input('target'));
	}

	return response()->json([
		'action' => 'updated',
	]);
	}

	private function updateOrder($taskId, $target)
	{
	$nextTask = false;
	$targetId = $target;

	if (str_starts_with($target, 'next:')) { 
		$targetId = substr($target, strlen('next:'));
		$nextTask = true;
	}

	if ($targetId === 'null') {
		return;
	}

	$targetTask = Task::find($targetId);
	if (!$targetTask) {
		return;
	}

	$targetOrder = $targetTask->sortorder;
	if ($nextTask) {
		$targetOrder++;
	}

	Task::where('sortorder', '>=', $targetOrder)->increment('sortorder');

	$updatedTask = Task::find($taskId);
	$updatedTask->sortorder = $targetOrder;
	$updatedTask->save();
	}

	public function destroy($id)
	{
	$task = Task::findOrFail($id);
	$task->delete();
	
	return response()->json([
		'action' => 'deleted',
	]);
	}
}