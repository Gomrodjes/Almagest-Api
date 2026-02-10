<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DeliveryNote;

class DeliveryNoteViewController extends Controller
{
    public function index()
    {
        $deliveryNotes = DeliveryNote::with('order')->get();

        return view('deliverynotes.index', compact('deliveryNotes'));
    }
}
