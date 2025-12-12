<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    //  public function generatePDF()
    // {
    //     $data = [
    //         'invoice_no' => 'INV-1001',
    //         'date_issue' => date('m/d/Y'),
    //         'due_date' => date('m/d/Y', strtotime('+7 days')),
    //         'customer_name' => 'Ali Ahmed',
    //         'business_name' => 'Abdul Islam',
    //         'street_1' => 'Street Address 01',
    //         'street_2' => 'Street Address 02',
    //         'email' => 'rehmanhai22@gmail.com',
    //         'phone' => '+923091978389',
    //         'website' => 'www.abdulislam.com',
    //         'items' => [
    //             ['name' => 'Item 1', 'desp' => 'This is a Item 1 desp', 'qty' => 2, 'rate' => 500],
    //             ['name' => 'Item 2', 'desp' => 'This is a Item 2 desp', 'qty' => 3, 'rate' => 300],
    //             ['name' => 'Item 3', 'desp' => 'This is a Item 3 desp', 'qty' => 1, 'rate' => 800],
    //         ],
    //         'discount' => 20,
    //         'tax_rate' => 5,
    //     ];

    //     $subtotal = 0;
    //     foreach ($data['items'] as $item) {
    //         $subtotal += $item['qty'] * $item['rate'];
    //     }
    //     $tax_amount = ($subtotal * $data['tax_rate']) / 100;
    //     $total = $subtotal + $tax_amount - $data['discount'];
    //     $data['subtotal'] = $subtotal;
    //     $data['tax_amount'] = $tax_amount;
    //     $data['total'] = $total;
    //     $html = view('invoice', $data);
    //     $options = new Options();
    //     $options->set('defaultFont', 'DejaVu Sans');
    //     $dompdf = new Dompdf($options);
    //     $dompdf->loadHtml($html);
    //     $dompdf->setPaper('A4', 'portrait');
    //     $dompdf->render();
    //     return $dompdf->stream('final.pdf', ['Attachment' => false]);
    // }
}
