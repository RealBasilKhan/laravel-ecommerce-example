<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  //
  public function presentPrice()
  {
    $amount = new \NumberFormatter('us_US', \NumberFormatter::CURRENCY);
    return $amount->format($this->price / 100);
  }
}
