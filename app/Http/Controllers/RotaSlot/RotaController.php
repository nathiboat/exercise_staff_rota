<?php

namespace App\Http\Controllers\RotaSlot;

use App\Models\RotaSlotStaff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RotaController extends Controller
{

    public function index(RotaSlotStaff $rotaSlotStaff)
    {
        return $rotaSlotStaff::all();
    }
}
