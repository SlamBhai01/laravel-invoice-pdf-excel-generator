<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;

            padding: 0;
        }

        table {

            border-collapse: collapse;

        }

        th,
        td {

            padding: 8px;
            font-size: 14px;
        }

        .right {
            text-align: right;
        }
    </style>
</head>

<body>
    <table
        style="background:#003B91; color:white; padding:40px; border-bottom-right-radius:50px; margin-top:-50px; margin-left:-50px;width:800px">
        <tr>

            <td width="50%" style="vertical-align:top; text-align:left; padding-right:20px;">

                <div style="font-size:60px; font-weight:bold; margin-bottom:20px;">
                    Invoice
                </div>

                <div
                    style="
                width:120px;
                height:100px;
                background:white;
                color:#003B91;
                text-align:center;
                line-height:30px;
                font-weight:bold;
                border-radius:5px;
            ">
                    Your Company Logo
                </div>

            </td>

            <!-- RIGHT SIDE -->
            <td width="50%" style="vertical-align:top; text-align:right; padding-left:20px;">
                <br><br><br>
                <div
                    style="display:inline-block; background:rgba(255,255,255,0.25); padding:20px; border-radius:5px; font-size:18px; text-align:right;">
                    <strong style="font-size:20px;">{{ $business_name }}</strong><br>
                    <strong>Address:</strong> {{ $street_1 }} <br>{{ $street_2 }}<br>
                    <strong>Email:</strong> {{ $email }}<br>
                    <strong>Phone:</strong> {{ $phone }}<br>
                    <strong>Website:</strong> {{ $website }}
                </div>

            </td>
        </tr>
    </table>
    <table style="height:auto; width:800px;margin-left:-50px; padding-left:50px;">
        <tr>
            <td>
                <div style="">
                    <b>Invoice details:</b>
                    <br>
                    <strong>Invoice No:</strong> {{ $invoice_no }}<br>
                    <strong>Date of Issue:</strong> {{ $date_issue }}<br>
                    <strong>Due Date:</strong> {{ $due_date }}
                </div>
            </td>
            <td>
                <div style="text-align:right; padding-right:50px;">
                    <b>Bill To:</b>
                    <br>
                    <strong>Customer Name:</strong> {{ $customer_name }}<br>
                    <strong>Address:</strong> {{ $street_1 }}<br>{{ $street_2 }}
                </div>

            </td>
        </tr>
    </table>
    <hr style="border:1.5px solid #000000; width:800px; margin-left:-50px;"></hr>
    <br>
    <table style=" width:700px;   text-align:center; margin-left:10px;">
        <thead>
            <tr style="border-bottom:2px solid #000000;">
                <th>Item / Service</th>
                <th>Description</th>
                <th>QTY/HRS</th>
                <th>Rate</th>
                <th>Amount</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($items as $item)
                <tr style="border-bottom:1px solid #000000;">
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['desp'] }}</td>
                    <td>{{ $item['qty'] }}</td>
                    <td>{{ $item['rate'] }}</td>
                    <td>{{ $item['rate'] * $item['qty'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <table style="width:710px;">
        <tr>
            <td>
                Terms & Conditions Apply
            </td>
            <td style="padding-left:305px">
                <table style="width:200px; text-align:left;">
                    <tr>
                        <td class=""><strong>Subtotal:</strong></td>
                        <td class="">{{ $subtotal }}</td>
                    </tr>
                    <tr>
                        <td class=""><strong>Discount:</strong></td>
                        <td class="">-{{ $discount }}</td>
                    </tr>
                    <tr>
                        <td class=""><strong>Tax Rate:</strong></td>
                        <td class="">{{ $tax_rate }}</td>
                    </tr>
                    <tr>
                        <td class=""><strong>Tax:</strong></td>
                        <td class="">{{ $tax_amount }}</td>
                    </tr>

                    <tr style="border-top:2px solid black">
                        <td class=""><strong>Total:</strong></td>
                        <td class="">{{ $total }}</td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>
    <h5 style="">CONDITIONS / INSTRUCTION</h5>
    <p style="">
        1. Payment is due within 15 days.
    </p>
</body>

</html>
