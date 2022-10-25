<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ __('Billing Invoice - Faisal') }} </title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


<style>
    * {
        font-family: 'Roboto', sans-serif;
        line-height: 26px;
        font-size: 15px;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    /*=========================================================
      [ Table ]
    =========================================================*/

    .custom--table {
        width: 100%;
        color: inherit;
        vertical-align: top;
        font-weight: 400;
        border-collapse: collapse;
        border-bottom: 2px solid #ddd;
        margin-top: 0;
    }
    .table-title{
        font-size: 24px;
        font-weight: 600;
        line-height: 32px;
        margin-bottom: 10px;
    }
    .custom--table thead {
        font-weight: 700;
        background: inherit;
        color: inherit;
        font-size: 16px;
        font-weight: 500;
    }

    .custom--table tbody {
        border-top: 0;
        overflow: hidden;
        border-radius: 10px;
    }
    .custom--table thead tr {
        border-top: 2px solid #ddd;
        border-bottom: 2px solid #ddd;
        text-align: left;
    }
    .custom--table thead tr th {
        border-top: 2px solid #ddd;
        border-bottom: 2px solid #ddd;
        text-align: left;
        font-size: 16px;
        padding: 10px 0;
    }
    .custom--table tbody tr {
        vertical-align: top;
    }
    .custom--table tbody tr td {
        font-size: 14px;
        line-height: 18px;
        vertical-align: top;
    }
    .custom--table tbody tr td:last-child{
        padding-bottom: 10px;
    }
    .custom--table tbody tr td .data-span {
        font-size: 14px;
        font-weight: 500;
        line-height: 18px;
    }
    .custom--table tbody .table_footer_row {
        border-top: 2px solid #ddd;
        margin-bottom: 10px !important;
        padding-bottom: 10px !important;

    }
    /* invoice area */
    .invoice-area {
        padding: 10px 0;
    }

    .invoice-wrapper {
        max-width: 650px;
        margin: 0 auto;
        box-shadow: 0 0 10px #f3f3f3;
        padding: 0px;
    }

    .invoice-header {
        margin-bottom: 40px;
    }

    .invoice-flex-contents {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
    }

    .invoice-logo {}

    .invoice-logo img {}

    .invoice-header-contents {
        float: right;
    }

    .invoice-header-contents .invoice-title {
        font-size: 40px;
        font-weight: 700;
    }

    .invoice-details {
        margin-top: 20px;
    }

    .invoice-details-flex {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
    }

    .invoice-details-title {
        font-size: 24px;
        font-weight: 700;
        line-height: 32px;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .invoice-single-details {}

    .details-list {
        margin: 0;
        padding: 0;
        list-style: none;
        margin-top: 10px;
    }

    .details-list .list {
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        color: #666;
        margin: 0;
        padding: 0;
        transition: all .3s;
    }
    .details-list .list strong {
        font-size: 14px;
        font-weight: 500;
        line-height: 18px;
        color: #666;
        margin: 0;
        padding: 0;
        transition: all .3s;
    }

    .details-list .list a {
        display: inline-block;
        color: #666;
        transition: all .3s;
        text-decoration: none;
        margin: 0;
        line-height: 18px
    }

    .item-description {
        margin-top: 10px;
    }

    .products-item {
        text-align: left;
    }

    .invoice-total-count {}

    .invoice-total-count .list-single {
        display: flex;
        align-items: center;
        gap: 30px;
        font-size: 16px;
        line-height: 28px;
    }

    .invoice-total-count .list-single strong {}

    .invoice-subtotal {
        border-bottom: 2px solid #ddd;
        padding-bottom: 15px;
    }

    .invoice-total {
        padding-top: 10px;
    }

    .terms-condition-content {
        margin-top: 30px;
    }

    .terms-flex-contents {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }

    .terms-left-contents {
        flex-basis: 50%;
    }

    .terms-title {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        margin: 0;
    }

    .terms-para {
        margin-top: 10px;
    }

    .invoice-footer {}

    .invoice-flex-footer {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 30px;
    }

    .single-footer-item {
        flex: 1;
    }

    .single-footer {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .single-footer .icon {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 30px;
        width: 30px;
        font-size: 16px;
        background-color: #000e8f;
        color: #fff;
    }

    .icon-details {
        flex: 1;
    }

    .icon-details .list {
        display: block;
        text-decoration: none;
        color: #666;
        transition: all .3s;
        line-height: 24px;
    }
</style>

<!-- Invoice area Starts -->
<div class="invoice-area">
    <div class="invoice-wrapper">
        <div class="invoice-header">
            <div class="invoice-flex-contents">
                <div class="invoice-logo">
{{--                    <img src="{{ public_path('img/Intel_logo_(2006-2020).jpg') }}" alt="">--}}
                </div>
                <div class="invoice-header-contents" style="float:right;margin-top:-120px;">
                    <h2 class="invoice-title">{{ __('INVOICE') }}</h2>
                    <h4 class="invoice-details-title">{{ __('Sold By:') }}</h4>
                    <ul class="details-list">
                        <li class="list"> <strong>{{ __('Bill No') }}: </strong> {{ $customer_bill->bill_id }}</li>
                        <li class="list"> <strong>{{ __('Order No') }}: </strong> {{ $customer_bill->order_no }}</li>
                        <li class="list"> <strong>{{ __('Seller Name') }}: </strong> {{ $customer_bill->seller_name }}</li>
                        <li class="list"> <strong>{{ __('Seller Phone') }}: </strong> {{ $customer_bill->seller_phone }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="invoice-details">
            <div class="invoice-details-flex">
                <div class="invoice-single-details">

                </div>
                <div class="invoice-single-details"  style="float:right;margin-top:-120px;">
                    <h4 class="invoice-details-title">{{ __('Bill To:') }}</h4>
                    <ul class="details-list">
                        <li class="list"> <strong>{{ __('Name') }}: </strong> {{ $customer_bill->name }}</li>
                        <li class="list"> <strong>{{ __('Email') }}: </strong> {{ $customer_bill->email }}</li>
                        <li class="list"> <strong>{{ __('Phone') }}: </strong> {{ $customer_bill->phone }}</li>
                    </ul>
                </div>
                <div class="invoice-single-details" style="float:right;margin-top:-120px;">
                    <h4 class="invoice-details-title">{{ __('Ship To:') }}</h4>
                    <ul class="details-list">
                        <li class="list"> <strong>{{ __('Division') }}: </strong> {{ $customer_bill->division }}</li>
                        <li class="list"> <strong>{{ __('District') }}: </strong> {{ $customer_bill->district }}</li>
                        <li class="list"> <strong>{{ __('Address') }}: </strong>{{ $customer_bill->address }} </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="item-description">
            <h5 class="table-title">{{ __('Include Services') }}</h5>
            <table class="custom--table">
                <thead>
                <tr>
                    <th>{{ __('Title') }}</th>
                    <th>{{ __('Unit Price') }}</th>
                    <th>{{ __('Quantity') }}</th>
                    <th>{{ __('Total') }}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $customer_bill->product_name }}</td>
                    <td>{{ $customer_bill->price }}</td>
                    <td>{{ $customer_bill->quantity }}</td>
                    <td>{{ $customer_bill->sub_total }}</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="item-description">
            <div class="table-responsive">
                <h5 class="table-title"> {{ __('Additional Services') }} </h5>
                <table class="custom--table">
                    <thead class="head-bg">
                    <tr>
                        <th>{{ __('Title') }}</th>
                        <th>{{ __('Unit Price') }}</th>
                        <th>{{ __('Quantity') }}</th>
                        <th>{{ __('Total') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ __('Car Cleaning') }}</td>
                        <td>$20</td>
                        <td>2</td>
                        <td>$40</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>{{ __('Extra Service') }}</strong></td>
                        <td><strong>$10</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="item-description page_break">
            <div class="table-responsive table-responsive--md">
                <h5 class="table-title"> {{ __('Coupon Details') }} </h5>
                <table class="custom--table">
                    <thead class="head-bg">
                    <tr>
                        <th>{{ __('Coupon Code') }}</th>
                        <th>{{ __('Coupon Type') }}</th>
                        <th>{{ __('Coupon Amount') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ __('Webjourney') }}</td>
                        <td>{{ __('Percentage') }}</td>
                        <td>$10</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="item-description">
            <div class="table-responsive">
                <h5 class="table-title">{{ __('Orders Details') }}</h5>
                <table class="custom--table">
                    <thead class="head-bg">
                    <tr>
                        <th>{{ __('Buyer Details') }}</th>
                        <th>{{ __('Date & Schedule') }}</th>
                        <th>{{ __('Amount Details') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <span class="data-span"> {{ __('Name: ') }}</span>{{ __('Nazmul Hoque') }} <br>
                            <span class="data-span"> {{ __('Email: ') }}</span>Nazmul@gmail.com <br>
                            <span class="data-span"> {{ __('Phone: ') }}01678985958 <br>
                            <span class="data-span"> {{ __('Address: ') }}</span>{{ __('West Panthapath, Dhanmondi') }}
                        </td>
                        <td>
                            30-9-2022 <br>
                            {{ __('Fri, 10pm') }}
                        </td>
                        <td>
                            <span class="data-span"> {{ __('Package Fee:') }} </span>$80 <br>
                            <span class="data-span"> {{ __('Extra Service:') }} </span>$20 <br>
                            <span class="data-span"> {{ __('Sub Total:') }} </span>$100 <br>
                            <span class="data-span"> {{ __('Tax:') }} </span>$10 <br>
                            <span class="data-span"> {{ __('Coupon Amount:') }} </span>$5 <br>
                            <span class="data-span"> {{ __('Total:') }} </span>$105 <br>
                            <span class="data-span"> {{ __('Payment Status:') }} </span>{{ __('Pending') }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <footer>
            <h3 style="text-align: center">
                {{ $customer_bill }}
            </h3>
        </footer>

    </div>
</div>

<!-- Invoice area end -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
