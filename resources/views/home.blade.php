<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="X-CSRF-TOKEN" content="{{csrf_token()}}">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.33/sweetalert2.all.js"></script>
    <style>

        a.btn.btn-sm.btn-outline-warning.rounded-circle:hover{
            color: #f7fafc;
        }
        a.btn.btn-sm.btn-outline-warning.rounded-circle i{
            font-size: 17px;
        }
        a.btn.btn-sm.btn-outline-info.rounded-circle:hover {
            color: #f7fafc;
        }
        a.btn.btn-sm.btn-outline-secondary.rounded-circle {
            font-size: 15px;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card card-body">
                <div class="responsive">
                    <table class="table table-bordered table-striped" id="example">
                        <thead class="bg-info text-white">
                        <tr>
                            <th>Bill ID</th>
                            <th>Order No</th>
                            <th>Date</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bill as $values)
                            <tr>
                               <td>{{$values->bill_id}}</td>
                               <td>{{$values->order_no}}</td>
                               <td>{{$values->date}}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-info rounded-circle" id="viewData" data-bs-toggle="modal" data-modalValue="{{$values->id}}" onclick="viewModalData({{$values->id}})"  data-bs-target="#cardModal"><i class="fa-regular fa-eye"></i> </a>
                                    <a href="#" class="btn btn-sm btn-outline-success rounded-circle" onclick="editData({{$values->id}})"><i class=" bx bx-edit "></i> </a>
                                    <button class="btn btn-sm btn-outline-danger rounded-circle" onclick="deleteData({{$values->id}})"><i class='bx bx-trash'></i> </button>
                                    <a href="{{ route('generate.pdf') }}" target="_blank" class="btn btn-sm btn-outline-warning rounded-circle"><i class="bx bx-printer"></i></a>
                                    <button class="btn btn-sm btn-outline-secondary rounded-circle" onclick="downloadBtn()"><i class='bx bx-download '></i> </button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-info text-light">
                    <h5 class="card-title" id="billGenerate">Bill Generate</h5>
                    <h5 class="card-title" id="billEdit">Edit Bill</h5>
                </div>
                <div class="card-body">
                    <div class="from-group mb-2 row">
                        <div class="col-md-6">
                            <label for="bill_id">Bill ID*</label>
                            <input type="text" class="form-control" name="bill_id" id="bill_id"
                                   placeholder="GT-XX-XXXX" />
                        </div>
                        <div class="col-md-6">
                            <label for="order_no">Order No*</label>
                            <input type="text" class="form-control" name="order_no" id="order_no"
                                   placeholder="FR-XXX-AC"/>
                        </div>
                    </div>
                    <div class="from-group mb-2 row">
                        <div class="col-md-6">
                            <label for="date">Date*</label>
                            <input type="date" class="form-control" name="date" id="date"/>
                        </div>

                        <div class="col-md-6">
                            <label for="phone">Phone*</label>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="+88 01XXXXXXXXXX"/>
                        </div>
                    </div>
                    <div class="from-group mb-2 ">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="xyz@xxx.com"/>
                    </div>
                    <div class="form-group mb-2">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name"/>
                    </div>
                    <div class="from-group mb-2 row">
                        <div class="col-md-6">
                            <label for="division">Division</label>
                            <select name="division" id="division" class="form-control" >
                                <option value="" selected disabled>------  Select  ------</option>
{{--                                @foreach($divisions as $division)--}}
{{--                                    <option value="{{$division->id}}">{{$division->name}}</option>--}}
{{--                                @endforeach--}}
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="district">District</label>
                            <select name="district" id="district" class="form-control">
                                <option value="" selected disabled>------  Select  ------</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="10" rows="3" class="form-control" placeholder="Write Here...."></textarea>
                    </div>
                    <div class="from-group mb-2 row">
                        <div class="col-md-6">
                            <label for="seller_name">Seller Name*</label>
                            <input type="text" class="form-control" name="seller_name" id="seller_name" placeholder="Name"/>
                        </div>
                        <div class="col-md-6">
                            <label for="seller_phone">Seller Phone</label>
                            <input type="tel" class="form-control" name="seller_phone" id="seller_phone" placeholder="+88 01XXXXXXXXXX"/>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Product Name"/>
                    </div>
                    <div class="form-group mb-2">
                        <label for="product_description">Product Description</label>
                        <textarea name="product_description" id="product_description"  cols="10" rows="3" class="form-control" placeholder="Write Here...."></textarea>
                    </div>
                    <div class="form-group row mb-2">
                        <div class="col-md-6">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" id="price" placeholder="Product Price"/>
                        </div>
                        <div class="col-md-6">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Product Quantity"/>
                        </div>
                    </div>
                    <div class="from-group mb-2">
                        <label for="sub_total">Sub Total</label>
                        <input type="number" class="form-control" name="sub_total" id="sub_total" placeholder="Sub total Price"/>
                    </div>
                    <div class="form-group row mb-2">
                        <div class="col-md-6">
                                <label for="vat_tax">Vat. & Tax.</label>
                                <input type="number" class="form-control" name="vat_tax" id="vat_tax" placeholder="Product Vat Tax"/>
                        </div>
                        <div class="col-md-6">
                            <label for="discount">Discount</label>
                            <input type="number" class="form-control" name="discount" id="discount" placeholder="Product Discount"/>
                        </div>
                    </div>
                    <div class="from-group mb-2">
                        <label for="grand_total">Grand Total</label>
                        <input type="number" class="form-control" name="grand_total" id="grand_total" placeholder="Grand total Price"/>
                    </div>
                    <div class="from-group d-md-flex justify-content-md-end">
                            <input type="hidden" class="form-control" id="id" />
                            <button class="btn btn-info text-light" id="billGenerateBtn" type="button" onclick="addData()">Generate</button>
                            <button class="btn btn-info text-light" id="billUpdateBtn" type="button" onclick="updateData()" >Update</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="cardModals" data-bs-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal">x</button>
                </div>
                <div class="modal-body">
                    <div class="card card-body">
                        <!-- <div class="card-body"> -->
                        <div class="row">
                            <div class="col-md-6">
                                <img src="img/5.jpg" alt="img">
                            </div>
                            <div class="col-md-6">
                                <h5>Product Name: T-Shirt</h5>
                                <h5>Price: TK. 670</h5>
                                <p></p>
                                <h5>Size: L</h5>
                                <p></p>
                                <h5>Brand: Arong</h5>
                                <p></p>
                            </div>
                            <div class="col-md-12 mt-5">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed voluptatum alias optio
                                    ut eum, veritatis exercitationem, in ipsa enim, necessitatibus quam. Numquam alias
                                    voluptatem corporis! Aut cumque enim praesentium libero?</p>
                                <a href="" class="btn btn-info float-right">Add to Card</a>
                            </div>
                        </div>

                        <!-- </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>


    <!-- Button trigger modal -->
{{--    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
{{--        Launch demo modal--}}
{{--    </button>--}}

    <!-- Modal -->
    <div class="modal fade" id="cardModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Bill Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <div class="card card-body">
                       <div class="row">
                           <div class="col-md-6">
                              <div class="form-group row">
                                  <div class="col-md-4">
                                      <label for="">Bill ID</label>
                                  </div>
                                  <div class="col-md-8">
                                      <input  type="text" readonly class="form-control" id="bill_ids"/>
                                  </div>
                              </div>
                               <div class="form-group row">
                                  <div class="col-md-4">
                                      <label for="">Order NO.</label>
                                  </div>
                                  <div class="col-md-8">
                                      <input  type="text" readonly class="form-control" id="order_nos"/>
                                  </div>
                              </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <label for="">Date</label>
                                   </div>
                                   <div class="col-md-8">
                                       <input  type="text" readonly class="form-control" id="dates"/>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6"></div>
                       </div>
                   </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

    $("#billGenerate").show();
    $("#billEdit").hide();
    $("#billGenerateBtn").show();
    $("#billUpdateBtn").hide();
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' } });

    function downloadBtn(){
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/download-pdf",
            success: function (data){
                console.log(data)
            }
        })
    }

    function view(){
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/all-customer-bill",
            success:function (response){
                // var data ="";
                // $.each(response, function (key,value){
                //     data = data + "<tr>"
                //     data = data + "<td>"+value.bill_id+"</td>"
                //     data = data + "<td>"+value.order_no+"</td>"
                //     data = data + "<td>"+value.date+"</td>"
                //     data = data + "<td>"
                //     data = data + "<button class='btn btn-info text-light' onclick='editData("+value.id+")'>Edit</button>"
                //     data = data + "<button class='btn btn-danger m-2' onclick='deleteData("+value.id+")'>  Delete</button>"
                //     data = data + "</td>"
                //     data = data + "</tr>"
                // })
                // $('tbody').html(data);
            }
        })
    }
    // view();

    function viewModalData(id){
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/modal-view-data/"+id,
            success: function (data){
                // alert(data.id)
                // alert(data.bill_id);
                // $('#id').val(data.id);
                $('#bill_ids').val(data.bill_id);
                $('#order_nos').val(data.order_no);
                $('#dates').val(data.date);
                $("#cardModal").modal('show')
                // $('#order_no').val(data.order_no);
                // $('tbody').html(data);
            }
        })
    }

    function addData(){

        let bill_id             = $('#bill_id').val();
        let order_no            = $('#order_no').val();
        let date                = $('#date').val();
        let phone               = $('#phone').val();
        let email               = $('#email').val();
        let name                = $('#name').val();
        let division            = $('#division').val();
        let district            = $('#district').val();
        let address             = $('#address').val();
        let seller_name         = $('#seller_name').val();
        let seller_phone        = $('#seller_phone').val();
        let product_name        = $('#product_name').val();
        let product_description = $('#product_description').val();
        let price               = $('#price').val();
        let quantity            = $('#quantity').val();
        let sub_total           = $('#sub_total').val();
        let vat_tax             = $('#vat_tax').val();
        let discount            = $('#discount').val();
        let grand_total         = $('#grand_total').val();

        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                bill_id:                bill_id,
                order_no:               order_no,
                date:                   date,
                phone:                  phone,
                email:                  email,
                name:                   name,
                division:               division,
                district:               district,
                address:                address,
                seller_name:            seller_name,
                seller_phone:           seller_phone,
                product_name:           product_name,
                product_description:    product_description,
                price:                  price,
                quantity:               quantity,
                sub_total:              sub_total,
                vat_tax:                vat_tax,
                discount:               discount,
                grand_total:            grand_total
            },
            url: "/generateBill-store",
            success: function (data){
                const Msg = Swal.mixin({
                    toast:'true',
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1800
                });
                Msg.fire({
                    type: 'success',
                    title: 'Bill Generate Successfully'
                })
            }

        })
    }
    function editData(id){
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/generate-bill-edit/"+id,
            success: function (data){
                $("#billGenerate").hide();
                $("#billEdit").show();
                $("#billGenerateBtn").hide();
                $("#billUpdateBtn").show();

                $('#id').val(data.id);
                $('#bill_id').val(data.bill_id);
                $('#order_no').val(data.order_no);
                $('#date').val(data.date);
                $('#phone').val(data.phone);
                $('#email').val(data.email);
                $('#name').val(data.name);
                $('#division').val(data.division);
                $('#district').val(data.district);
                $('#address').val(data.address);
                $('#seller_name').val(data.seller_name);
                $('#seller_phone').val(data.seller_phone);
                $('#product_name').val(data.product_name);
                $('#product_description').val(data.product_description);
                $('#price').val(data.price);
                $('#quantity').val(data.quantity);
                $('#sub_total').val(data.sub_total);
                $('#vat_tax').val(data.vat_tax);
                $('#discount').val(data.discount);
                $('#grand_total').val(data.grand_total);
            }
        })
    }
    function updateData(){

        let id                  = $('#id').val();
        let bill_id             = $('#bill_id').val();
        let order_no            = $('#order_no').val();
        let date                = $('#date').val();
        let phone               = $('#phone').val();
        let email               = $('#email').val();
        let name                = $('#name').val();
        let division            = $('#division').val();
        let district            = $('#district').val();
        let address             = $('#address').val();
        let seller_name         = $('#seller_name').val();
        let seller_phone        = $('#seller_phone').val();
        let product_name        = $('#product_name').val();
        let product_description = $('#product_description').val();
        let price               = $('#price').val();
        let quantity            = $('#quantity').val();
        let sub_total           = $('#sub_total').val();
        let vat_tax             = $('#vat_tax').val();
        let discount            = $('#discount').val();
        let grand_total         = $('#grand_total').val();

        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                bill_id:                bill_id,
                order_no:               order_no,
                date:                   date,
                phone:                  phone,
                email:                  email,
                name:                   name,
                division:               division,
                district:               district,
                address:                address,
                seller_name:            seller_name,
                seller_phone:           seller_phone,
                product_name:           product_name,
                product_description:    product_description,
                price:                  price,
                quantity:               quantity,
                sub_total:              sub_total,
                vat_tax:                vat_tax,
                discount:               discount,
                grand_total:            grand_total
            },
            url: "/generate-bill-update/"+id,
            success: function (data) {
                $("#billGenerate").show();
                $("#billEdit").hide();
                $("#billGenerateBtn").show();
                $("#billUpdateBtn").hide();


                // Alert
                const Msg = Swal.mixin({
                    toast: 'true',
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1800
                });
                Msg.fire({
                    type: 'success',
                    title: 'Data Updated Successfully'
                })
                // End Alert
                console.log('Successfully Data Update');
            }
        })
    }
    function deleteData(id){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        })
            .then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        dataType: "json",
                        url: "/generate-bill-remove/"+id,
                        success: function (data){
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    })
                }
                this.view();
            })
    }

    $("#division").change(function(e){
        e.preventDefault();
        var ddlDistrict=$("#district");

        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' } });

        $.ajax({
            type : 'POST',
            url : '/district-by-division',
            data:{_token:$('input[name=_token]').val(),division:$(this).val()},
            success:function(response){
                $('option', ddlDistrict).remove();
                $('#district').append('<option value="" selected disabled>------ Select ------</option>');
                $.each(response, function(){
                    $('<option/>', {
                        'value': this.id,
                        'text': this.name
                    }).appendTo('#district');
                });
            }
        })

    });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
