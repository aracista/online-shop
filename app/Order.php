<?php

namespace App;

use Darryldecode\Cart\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $fillable = [
    	'total',
    	'delivered'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
    	return $this->belongsToMany(Product::class)->withPivot('quantity','total');
    }

    

    public static function createOrder()
    {
    	$user = Auth::user();
        $order = $user->orders()->create([
            'total' => Cart::getTotal(),
            'delivered' => 0
        ]);

        $cartItems= Cart::getContent();
        foreach ($cartItems as $cartItem) {
            $order->orderitems()->attach($cartItem->id,[
                'quantity' => $cartItem->quantity,
                'total' => $cartItem->quantity*$cartItem->price
            ]);
        }
    }

}
