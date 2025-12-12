<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/invoice-pdf', [InvoiceController::class, 'generatePDF']);
Route::get('/invoicejson-pdf', [InvoiceController::class, 'jsongeneratePDF']);
Route::get('/testview', function() {
    $jsonData = file_get_contents(storage_path('app/data/customer.json'));
    $data = json_decode($jsonData, true);
    $subtotal = 0;
    foreach ($data['items'] as $item) {
        $subtotal += $item['qty'] * $item['rate'];
    }
    $tax_amount = ($subtotal * $data['tax_rate']) / 100;
    $total = $subtotal + $tax_amount - $data['discount'];
    $data['subtotal'] = $subtotal;
    $data['tax_amount'] = $tax_amount;
    $data['total'] = $total;
    return view('invoicejson', $data);
});

Route::get('/invoice-excel', [InvoiceController::class, 'exportExcel']);
