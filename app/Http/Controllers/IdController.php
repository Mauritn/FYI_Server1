<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class IdController extends Controller
{
    public function getId(Request $request)
    {
        $id = $request->id;

        return Drink::find($id);
    }
}
