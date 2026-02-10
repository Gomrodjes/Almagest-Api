<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceViewController extends Controller
{
    public function index()
    {
        $invoices = Invoice::with('deliveryNote')->get();

        return view('invoices.index', compact('invoices'));
    }
}
