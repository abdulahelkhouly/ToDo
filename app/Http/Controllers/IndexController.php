<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class IndexController extends Controller
{
	
    public function Index() {
    	$results = Test::all();

    	return view('index')->with("results", $results);
    }

    public function Show($id) {
    	$results = Test::find($id);

    	return view('show', ['results'=> $results]);
    }

    public function Create() {

    	return view('create');
    }

    public function Store(Request $request) {

    	$request->validate([
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	$test = new Test();

    	$test->title = $request->title;

    	$test->description = $request->description;

    	$test->save();

        $request->session()->flash('success', 'Your Test Created Successfly');

    	return redirect('/index');
    }

    public function Edit($id) {

    	$test = Test::find($id);

    	return view('edit')->with('test', $test);
    }

    public function Update(Request $request, $id) {

    	$request->validate([
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	$test = Test::find($id);

    	$test->title = $request->title;

    	$test->description = $request->description;

    	$test->save();

    	return redirect('/index');
    }

    public function Destroy($id) {

        $test = Test::find($id);

        $test->delete();

        return redirect('/index');
    }
}
