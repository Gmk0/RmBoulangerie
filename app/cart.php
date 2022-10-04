<?php
    namespace App;

    class Cart{

        public $items = null;
        public $totalQty = 0;
        public $totalPrice = 0;


        public function __construct($oldCart){
            
            if($oldCart){
                $this->items = $oldCart->items;
                $this->totalQty = $oldCart->totalQty;
                $this->totalPrice = $oldCart->totalPrice;
            }

        }

        public function add($item, $id){

            $storedItem = ['quantity' => 0, 'id' => 0, 'name' => $item->name,
        'price' => $item->price, 'image' => $item->image, 'item' =>$item];

        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['quantity']++;
        $storedItem['id'] = $item->id;
        $storedItem['name'] = $item->name;
        $storedItem['price'] = $item->price;
        $storedItem['image'] = $item->image;
        $this->totalQty++;
        $this->totalPrice += $item->price;
        $this->items[$id] = $storedItem;

        }

        public function updateQty($id, $qty){
            $this->totalQty -= $this->items[$id]['quantity'];
            $this->totalPrice -= $this->items[$id]['price'] * $this->items[$id]['quantity'];
            $this->items[$id]['quantity'] = $qty;
            $this->totalQty += $qty;
            $this->totalPrice += $this->items[$id]['price'] * $qty;

        }

        public function removeItem($id){
            $this->totalQty -= $this->items[$id]['quantity'];
            $this->totalPrice -= $this->items[$id]['price'] * $this->items[$id]['quantity'];
            unset($this->items[$id]);
        }


    }
?>