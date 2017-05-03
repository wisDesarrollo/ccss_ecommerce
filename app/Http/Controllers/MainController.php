<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Product;
class MainController extends Controller{
	public function home(){
		$products = Product::latest()->where("status",0)->simplePaginate(1);

		return view('main.home', ["products" => $products]);
	}
}