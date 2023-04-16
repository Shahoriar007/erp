<?php

namespace App\Modules\Inventory\Http\Controllers\sell;

use App\Http\Controllers\Controller;
use App\Modules\Inventory\Models\Customer;
use App\Modules\Inventory\Models\Seller;
use Illuminate\Http\Request;

class SellController extends Controller
{
    public function sell()
    {
        return view('Inventory::sales.sell.sell');
    }

    public function sellAdd()
    {
        $sellers = Seller::orderBy('id', 'desc')->select('id', 'name')->get();
        $customers = Customer::orderBy('id', 'desc')->select('id', 'name')->get();
        return view('Inventory::sales.sell.add-sell', compact('sellers', 'customers'));
    }
}
