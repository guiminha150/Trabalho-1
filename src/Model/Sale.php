<?php


namespace APP\Model;

class Sale
{

    private int $register;
    private Client $client;
    private Employee $employee;
    private array $products;
    private float $total;

    public function calculateSubtotal():float
    {
        $subtotal = 0;
        foreach($this->products as $product){
            $subtotal += self::calculatetotal($product);
        }
        return $subtotal;
    }

    private function calculatetotal(Product $product):float
    {
        return $product->price * $product->quantity;
    }



}





?>