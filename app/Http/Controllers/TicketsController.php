<?php namespace teachme\Http\Controllers;

use teachme\Http\Requests;
use teachme\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TicketsController extends Controller
{

	public function lastets()
	{
		return view('tickets/list');
	}
	public function popular()
	{
		dd('popular');
	}
	public function details($id)
	{
		return view('tickets/details');
	}
	public function open()
	{
		dd('open');
	}	

	public function closed()
	{
		dd('closed');
	}	

}
