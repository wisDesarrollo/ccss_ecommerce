<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Product;
class MainController extends Controller{
	public function home(){
		$products = Product::latest()->where("status",0)->simplePaginate(15);

		return view('main.home', ["products" => $products, 'tipo' => 'Todos Los Productos']);
	}

	 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::latest()->where('status',0)->where('product_type',$id)->simplePaginate(15);
        $tipo ="";
        if($id == 0){
            $tipo = "Insumos Médicos";
        }elseif ($id == 1) {
            $tipo = "Instrumental Quirúrgico";
        }elseif ($id == 2) {
            $tipo = "Ayudas Ortopédicas";
        }elseif ($id == 3) {
            $tipo = "Terapia Respiratoria";
        }elseif ($id == 4){
            $tipo = "Salud y Belleza";
        }else $tipo = "Todos Los Productos";
        
        return view("main.home", ["products" => $products, 'tipo' => $tipo]);
    }

}