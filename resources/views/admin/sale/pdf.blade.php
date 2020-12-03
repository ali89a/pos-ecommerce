<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $requisition->requisition_number ?? 'সিলিপ' }} </title>

    <style>
        table {
            border-collapse: collapse;
            width: 2.75in;
            padding: 0;
            margin: 0;
        }
        .bb {
            border-bottom: 1px dotted #000;
        }
        .bb-none {
            border-bottom: 2px solid transparent;
        }

        .br-none {
            border-right: 2px solid #fff;
        }

        .bt-none {
            border-top: 2px solid #fff;
        }

        .bl-none {
            border-left: 2px solid #fff;
        }

        .tc {
            text-align: center;
        }

        .tr {
            text-align: right;
        }

        body {
            font-family: bangla;
         
           
        }

        .fs {
            font-size: 8px;
        }

        @page {
            header: page-header;
            footer: page-footer;
        }
    </style>

</head>

<body style="padding:0;margin:0;">

    <htmlpageheader name="page-header">
        <table style="border: 2px solid #fff;">
            <tr>
                <td class="tc bb-none">
                  MS COLLECTION
                </td>
            </tr>
            <tr>
                <td class="tc" style="font-size: 10px;">
                  Master Plaza,Debidwar New Market,Debidwar,Cumilla
                </td>
            </tr>
        </table>
    </htmlpageheader>

    <br>
    <table style="border: 2px solid #fff;">
        <tr>
            <td class="tc bb-none">
               <p style="font-size: 10px;" class="tc">INVOICE NO# {{ $model->invoice_number }}</p>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="tc">
               <p style="font-size: 10px;">D&T: {{ $model->created_at }}</p>
            </td>
        </tr>
        <tr>
            <td class="tc" style="border-bottom: 1px solid #000">
              <p style="font-size: 10px;">Served By: {{ $model->user->name }}</p>
            </td>
        </tr>
    </table>

    <table style="border: 1px solid #000;
    padding: 0px;
            margin: 0px; font-size: 8px;">
        <tr class="bb">
            <th class="tc bb">#</th>
            <th class="tc bb">Item Name</th>
            <th class="tc bb">Qty</th>
            <th class="tc bb">Price</th>
            <th class="tc bb">Item Total</th>
        </tr>
        @foreach ($model->items as $row)
        <tr>
            <td class="tc bb">{{$loop->iteration }}</td>
            <td class="tc bb">{{ $row->product->name ?? '' }}</td>
            <td class="tc bb">{{ $row->quantity ?? '' }} {{ $row->product->unit_of_measurement->name ?? '' }}</td>
            <td class="tc bb">{{ $row->sale_price ?? '' }} TK</td>
            <td class="tr bb">{{ $row->sale_price * $row->quantity ?? '' }} TK</td>
        </tr>
       @endforeach
       <tr>
           <td colspan="2"></td>
           <td colspan="3">
               <table border="none" class="table" style="width:1.2in;font-size:8px;">
                    <tr>
                        <td style="width:70%">Subtotal:</td>
                        <td class="tr">{{ $model->subtotal }} TK</td>
                    </tr>
                    <tr>
                        <td>Discount:</td>
                        <td class="tr">{{ $model->discount }} TK</td>
                    </tr>
                    <tr>
                        <td>Payable Amount:</td>
                        <td class="tr">{{ $model->grandtotal }} TK</td>
                    </tr>
                    <tr>
                        <td>Receive Amount:</td>
                        <td class="tr">{{ $model->receive_amount }} TK</td>
                    </tr>
                    <tr>
                        <td>Change Amount:</td>
                        <td class="tr">{{ $model->change_amount }} TK</td>
                    </tr>
                </table>
           </td>
       </tr>
    </table>
    <br>
   <table style="border: 2px solid #fff;">
        <tr>
            <td class="bb-none">
              <p style="font-size: 10px;"><b>Instraction:</b></p>
                <p style="font-size: 10px;">Here you will find Bengali Rupee sign and their Alt code, Html code, and Hex code. You can copy and paste Bangladeshi
                taka symbol into any documents.Here you will find Bengali Rupee sign and their Alt code, Html code, and Hex code. You can copy and paste Bangladeshi
                taka symbol into any documents.</p>
            </td>
        </tr>
    </table>

    <htmlpagefooter name="page-footer">


    </htmlpagefooter>


</body>

</html>