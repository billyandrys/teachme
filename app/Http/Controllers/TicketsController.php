<?php namespace teachme\Http\Controllers;

use teachme\Http\Requests;
use teachme\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TicketsController extends Controller
{

	public function laster()
	{
		dd('last');
	}
	public function popular()
	{
		dd('popular');
	}
	public function details($id)
	{
		dd('datails'. $id);
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
