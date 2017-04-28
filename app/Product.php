<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PaypalPayment;

class Product extends Model
{
	public function scopeLatest($query){
		return $query->orderBy("id","desc");
	}
    public function paypalItem(){
    	return \PaypalPayment::item()->setNAme($this->title)->setDescription($this->description)->setCurrency('USD')->setQuantity(1)->setPrice($this->pricing / 3000);
    }
}
