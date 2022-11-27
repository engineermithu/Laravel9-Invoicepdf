<!DOCTYPE html>
<html>
<head>

</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="width: 100%;">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-logo">
                        <img src="{{ public_path('img/Intel_logo_(2006-2020).jpg') }}" alt="Not Found!" height="70"
                             width="70"/>
                    </div>
                    <small class="fw-bold">Shop: 838, Level: 08, Computer City Center, New Elephant Road, Dhaka: 1205
                        Phone: 9672391,
                        e-mail.gterdbd@gmail.com
                    </small>
                    <hr>
                    <div style="float: left ; width:1500px">
                        <strong>Bill No.</strong><span>{{' '.$customer_bill->bill_id.' '.' '  }}</span>
                        <strong>Order No.</strong><span>{{' '.$customer_bill->order_no.' ' }}</span>
                        <strong>Sold By:</strong><span>{{' '.$customer_bill->seller_name.' ' }}</span>
                        <strong>Date:</strong> {{'  '. $customer_bill->date.' ' }}
                    </div>
                    <br>
                    <br>
                    <strong>Sold To.</strong><span>{{' '.$customer_bill->name }}</span>
                    <strong>Mobile:</strong> {{' '.$customer_bill->phone }}<br>
                    <strong>Address.</strong><span>{{' '.$customer_bill->address }}</span>
                </div>
            </div>
        </div>
        <div style="width: 100%; height: 400px; margin-top: 40px; display: flex;">
            <div style="width: 100%; height: 100px; float: left; padding: 12px;">
                <table class="table" style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;">
                    <thead>
                    <tr>
                        <th style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">Sl. No.</th>
                        <th style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">Product</th>
                        <th style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">Product Description</th>
                        <th style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">Unit Price</th>
                        <th style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">Qty.</th>
                        <th style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">Total Price</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr >
                        <td style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">{{' '.$customer_bill->id }}</td>
                        <td style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">{{' '.$customer_bill->product_name }}</td>
                        <td style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">{{' '.$customer_bill->product_description }}</td>
                        <td style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">{{' '.$customer_bill->price }}</td>
                        <td style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">{{' '.$customer_bill->quantity }}</td>
                        <td style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">{{' '.$customer_bill->sub_total }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>


            {{--            <div style="width: 45%; float: left;  padding: 12px;">--}}
            {{--                Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering the source--}}
            {{--                behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was piqued by--}}
            {{--                consectetur—a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a--}}
            {{--                passage from De Finibus Bonorum et Malorum (“On the Extremes of Good and Evil”), a first-century B.C.--}}
            {{--                text from the Roman philosopher Cicero.--}}
            {{--            </div>--}}
        </div>
        <div class="col-md-2" style="float: right; width: 90px;">
            <div class="card">
                <div class="card-body">
                    <h4>Invoice/Bill</h4>
                    <div style="float: right; width: 110px;">
                        <small>Contact Number :</small>
                        <small> {{''.  $customer_bill->seller_phone }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
