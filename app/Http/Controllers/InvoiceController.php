<?php

namespace App\Http\Controllers;

use TCPDF;
use Illuminate\Support\Facades\View;

class InvoiceController extends Controller
{
    public function jsongeneratePDF()
    {

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
        $html = View::make('invoicejson', $data)->render();
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator('Laravel App');
        $pdf->SetAuthor($data['business_name'] ?? 'Company');
        $pdf->SetTitle($data['invoice_title'] ?? 'Invoice');
        $pdf->SetSubject('Invoice PDF');
        $pdf->SetFont('freeserif', '', 14);
        $pdf->setMargins(0, 0, 0);
        $pdf->setRTL(true);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $pdf->writeHTML($html, true, false, true, false, '');
        return $pdf->Output('invoice.pdf', 'D');
    }
    public function exportExcel()
    {
        $jsonData = file_get_contents(storage_path('app/data/customer.json'));
        $data = json_decode($jsonData, true);
        $headers = [
            'Content-Type' => 'application/vnd.ms-excel; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="invoice.xls"',
        ];
        $output = "\xEF\xBB\xBF";
        $output .= view('invoice_excel', $data)->render();
        return response($output, 200, $headers);
    }
}
