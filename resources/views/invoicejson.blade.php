<!DOCTYPE html>
<html lang="ur">

<head>
    <meta charset="utf-8">
    <title>Invoice</title>
</head>

<body style="text-align:right; font-family:freeserif; font-size:14px; padding:0;">


    <table style="width:100%;  background-color:#003B91; color:#ffffff; padding:20px; margin-left:-50px;">
        <tr>
            <td width="50%" style="text-align:right; vertical-align:top;">
                <div style="font-size:36px; font-weight:bold; margin-bottom:10px;">
                    {{ $invoice_title }}
                </div>
                <div
                    style="width:50px; height:80px; background-color:#ffffff; color:#003B91; text-align:center; font-weight:bold; line-height:25px;">
                    {{ $company_logo }}
                </div>

            </td>
            <td width="50%" style="text-align:left; vertical-align:top;">
                <div style="padding:10px; font-size:14px; background-color:#738baf;">
                    <strong style="font-size:16px;">{{ $business_name }}</strong><br>
                    <strong>{{ $address }}</strong> {{ $street_1 }}<br>{{ $street_2 }}<br>
                    <strong>{{ $email_name }}</strong> {{ $email }}<br>
                    <strong>{{ $phone_name }}</strong> {{ $phone }}<br>
                    <strong>{{ $website_name }}</strong> {{ $website }}
                </div>
            </td>
        </tr>
    </table>
    <br>
    <table style="width:100%; border-collapse:collapse; padding:10px 30px 0px 30px;">
        <tr>
            <td style="vertical-align:top;">
                <b>{{ $invoice_details_name }}</b><br>
                <strong>{{ $invoice_no_name }}</strong> {{ $invoice_no }}<br>
                <strong>{{ $date_of_issue_name }}</strong> {{ $date_issue }}<br>
                <strong>{{ $due_date_name }}</strong> {{ $due_date }}
            </td>
            <td style="vertical-align:top; text-align:left;">
                <b>{{ $bill_to_name }}</b><br>
                <strong>{{ $customer_name }}</strong><br>
                <strong>{{ $address }}</strong> {{ $street_1 }}<br>{{ $street_2 }}
            </td>
        </tr>
    </table>
    <br>
    <hr style="border:2px solid #000000; width:800px; ">
    </hr>
    <br>

    <table style="width:100%;  font-size:13px; margin-right:20px">
        <thead>
            <tr style="border-bottom:2px solid #000000;">
                   <th width="35"></th>
                <th style=" ">{{ $item_service }}</th>
                <th style="width:150px;">{{ $description }}</th>
                <th style="">{{ $quantity }}</th>
                <th style="">{{ $rate }}</th>
                <th style="">{{ $amount }}</th>

            </tr>
        </thead>


        <tbody>
   <td width="35" style="background-color: #003B91"></td>
            @foreach ($items as $item)
                <tr>
                     <td width="35"></td>
                    <td style="border-bottom:1px solid #000; border-top:1px solid #000;  padding:0px 5px 0px 5px;">
                        {{ $item['name'] }}</td>
                    <td
                        style="border-bottom:1px solid #000;  border-top:1px solid #000; padding:0px 5px 0px 5px; width:150px;">
                        {{ $item['desp'] }}</td>
                    <td style="border-bottom:1px solid #000;  border-top:1px solid #000; padding:0px 5px 0px 5px;">
                        {{ $item['qty'] }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="border-bottom:1px solid #000; border-top:1px solid #000; padding:0px 5px 0px 5px;">
                        {{ $item['rate'] }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="border-bottom:1px solid #000; border-top:1px solid #000; padding:0px 5px 0px 5px;">
                        {{ $item['rate'] * $item['qty'] }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                </tr>
            @endforeach

        </tbody>
    </table>
    <br><br>
    <table>
        <tr>
            <td width="30"></td>

            <td width="180">

                <table style="width:180px; text-align:left; margin-top:10px;">
                    <tr>
                        <td style="padding:5px;"><strong>{{ $subtotal_name }}</strong></td>
                        <td style="padding:5px;">{{ $subtotal }}</td>
                    </tr>
                    <tr>
                        <td style="padding:5px;"><strong>{{ $discount_name }}</strong></td>
                        <td style="padding:5px;">-{{ $discount }}</td>
                    </tr>
                    <tr>
                        <td style="padding:5px;"><strong>{{ $tax_rate_name }}</strong></td>
                        <td style="padding:5px;">{{ $tax_rate }}%</td>
                    </tr>
                    <tr>
                        <td style="padding:5px;"><strong>{{ $tax_name }}</strong></td>
                        <td style="padding:5px;">{{ $tax_amount }}</td>
                    </tr>

                    <tr style="">
                        <td style="padding:5px; border-top:1px solid #000;"><strong>{{ $total_name }}</strong></td>
                        <td style="padding:5px; border-top:1px solid #000;">{{ $total }}</td>
                    </tr>
                </table>
            </td>

            <td width="330" style="text-align:left;">
             <br>  <h5>{{ $conditions_title }}</h5>
            </td>


        </tr>
    </table>

    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $conditions_title }}</h5>

    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $notes }}</p>

</body>

</html>
