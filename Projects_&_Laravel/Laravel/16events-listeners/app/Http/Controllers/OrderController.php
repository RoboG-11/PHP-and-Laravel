<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderEvent;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class OrderController extends Controller
{
    public function create()
    {
        Artisan::call('make:order', [
            'user_id' => 75,
            'amount' => 50
        ]);

        return response()->json("Éxito");
    }
}
