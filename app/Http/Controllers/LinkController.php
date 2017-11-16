<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
	public function store(Request $request){

		$link = new Link();

		$link->type = $request->type;
		$link->source = $request->source;
		$link->target = $request->target;

		$link->save();

		return response()->json([
			"action"=> "inserted",
			"tid" => $link->id
		]);
	}

	public function update($id, Request $request){
		$link = Link::find($id);

		$link->type = $request->type;
		$link->source = $request->source;
		$link->target = $request->target;

		$link->save();

		return response()->json([
			"action"=> "updated"
		]);
	}

	public function destroy($id){
		$link = Link::find($id);
		$link->delete();

		return response()->json([
			"action"=> "deleted"
		]);
	}
}