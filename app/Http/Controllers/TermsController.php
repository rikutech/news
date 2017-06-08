<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Term;

class TermsController extends Controller
{
	public function index()
	{
		//TODO:絞込機能
		//orderは人気順がいいかも
		$terms = Term::orderBy('created_at', 'desc')->paginate(10);
		return view('terms.index' compact('terms'));
	}

	public function show($id)
	{
		$term = Term::findOrFail($id);
		return view('terms.show', compact('term'));
	}
}
