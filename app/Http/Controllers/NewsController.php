<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\News;

class NewsController extends Controller
{
	public function index()
	{
		$newsList = News::orderBy('created_at', 'desc')->paginate(10);
		return view('news.index', compact('newsList'));
	}

	public function show($id)
	{
		$news = News::findOrFail($id);
		return view('news.show', compact('news'));
	}
}
