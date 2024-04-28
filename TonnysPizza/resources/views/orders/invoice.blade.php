<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env("APP_NAME")}}</title>
    <meta name="csrf-token" content="vGqvpc8jBfHSSQaDNjUxdqUByfMzO59DAdCCd9uE">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div style="max-width:400px;margin:0 auto">
    <div>
        <table>
            <tbody>
                <tr>
                    <td><a href="{{url('/orders')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back</a></td>
                    <td><button onclick="window.print()" class="btn btn-primary"><i class="dripicons-print"></i> Print</button></td>
                </tr>
            </tbody>
        </table>
        <br>
    </div>

    <div id="receipt-data">
        <div>
            <h2>Tonnys Pizza</h2>
            <p><strong>Order Invoice</strong></p>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <strong>Order Date:</strong> {{date('d-m-Y',strtotime($orders->order_date))}}
</div>
            <div class="col-sm-12">
                <p>
                    <strong>Invoice No:</strong> INV-000{{$orders->id}}
</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-center">
                    <strong>Address:</strong> {{$orders->customer?->address}}
                </p>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$orders->pizza->name}}</td>
                    <td>{{$orders->pizza->price}}</td>
                    <td>1</td>
                    <td>{{$orders->total}}</td>
                </tr>
                <tr>
                    <th colspan="2">Total</th>
                    <th>1</th>
                    <th>{{$orders->total}}</th>
                </tr>
                <tr>
                    <th colspan="3">Grand Total</th>
                    <th>{{$orders->total}}</th>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td>Paid By: Cash</td>
                    <td>Amount: {{$orders->total}}</td>
                    <td>Change: 0.00</td>
                </tr>
                <tr><td colspan="3"><b>No refunds, all sales final.</b></td></tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>