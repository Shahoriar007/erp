<?php

namespace App\Modules\Inventory\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function Purchaseadd($request)
    {
        Purchase::create([
            'purchase_date' => $request->purchase_date,
            'quantity' => $request->quantity,
        ]);
    }

}
