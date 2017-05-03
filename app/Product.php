<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PaypalPayment;

class Product extends Model
{	
	protected $fillable= ["status"];
	public function scopeLatest($query){
		return $query->orderBy("id","desc");
	}
    public function paypalItem(){
    	//$totalUSD = $this->pricing / 3000;
    	return \PaypalPayment::item()->setNAme($this->title)->setDescription($this->description)->setCurrency('USD')->setQuantity(1)->setPrice($this->pricing);
    }
    public function delete_status(){
    	
        
        $this->status= 1;
    }
}
