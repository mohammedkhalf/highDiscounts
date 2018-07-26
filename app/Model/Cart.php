<?php

namespace App\Model;



class Cart
{
public $items = 0 ;
public $totalQty = 0;
public $totalPrice = 0;

public function __construct($oldCart)
{
  if($oldCart){
    $this->items = $oldCart->items;
    $this->totalQty = $oldCart->totalQty;
    $this->totalPrice = $oldCart->totalPrice;
  }else {
    $this->items = null;
  }
}
   public function add($item , $id)
  {
    
    $storedItem = ['qty' => 0,'price' => $item->price, 'item' => $item];
    
if ($this->items) {
  if (array_key_exists($id, $this->items)) {
    $storedItem = $this->items['id'];
  }
  
}
    
    $storedItem['qty']++;
    $storedItem['price'] = $item->price * $storedItem['qty'];
    $this->$item[$id] = $storedItem;
    $this->totalQty++;
    $this->totalPrice += $item->price;
  }
} 

