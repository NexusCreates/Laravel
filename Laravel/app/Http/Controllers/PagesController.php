<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
	public function nexus()
	{
		$twitter = ['NexusCreates'];

		return view('nexus', compact('twitter'));
	}
}