<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
	protected $fillable = ["status","customid"];


    public function approve(){
        $this ->updateCustomID();
    }

    public function generateCustomID(){
        return md5("$this->id $this->update_at");
    }
    public function updateCustomID(){
        $this->status = "approved";
        $this->customid = $this->generateCustomID();
        $this->save();
    }

    public function in_shopping_carts(){
        return $this->hasMany("\
            App\InShoppingCart");
    }

    public function products(){
        return $this->belongsToMany('\App\Product', 'in_shopping_carts');
    }

    public function order(){
        return $this -> hasOne("App\Order")->first();
    }

    public function productsSize(){
        return $this->products()->count();
    }

    public function total(){
        return $this->products()->sum("pricing");
    }

    public function totalUSD(){
        $total = $this->products()->sum("pricing") / 3000;
        return $total;
    }


    public static function findOrCreateBySessionID($shopping_cart_id){

    	if($shopping_cart_id){
    		//biscar carrito de compras con id
    		return ShoppingCart::findBySession($shopping_cart_id);
    	}else 
    		return ShoppingCart:: createWithoutSession();
    	// Crear un carrito de compras
    }
    public static function findBySession($shopping_cart_id){
    	return ShoppingCart::find($shopping_cart_id);
    }


    public static function createWithoutSession(){
    	return ShoppingCart::create(["status" => "incompleted"]);
    	
    }
}
