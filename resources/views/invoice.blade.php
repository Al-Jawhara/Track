@extends('layouts.project')
{{-- @section('title', 'Phones') --}}
@section('content')

<style>
body{margin-top:20px;
background-color:#eee;
}

.card {
box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}
.card {
position: relative;
display: flex;
flex-direction: column;
min-width: 0;
word-wrap: break-word;
background-color: #fff;
background-clip: border-box;
border: 0 solid rgba(0,0,0,.125);
border-radius: 1rem;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<body>
    <div class="container p-5 fs-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="invoice-title">
                                <h4 class="float-end font-size-15 fs-1">Invoice #{{$user->id}} <span class="badge bg-success font-size-12 ms-2">Paid</span></h4>
                                <div class="mb-4">
                                   <h2 class="mb-1 text-muted fs-1">THANK YOU</h2>
                                </div>
                            </div>
            
                            <hr class="my-4">
            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-muted">
                                        <h5 class="font-size-16 mb-3 fs-2">Billed To:</h5>
                                        <h5 class="font-size-15 mb-2 fs-4">TRACK</h5>
                                        <p class="mb-1 fs-4">4068 Post Avenue Newfolden, MN 56738</p>
                                        <p class="mb-1 fs-4">track@gmail.com</p>
                                        <p class="fs-4">001-234-5678</p>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-sm-6">
                                        <div class="text-muted">
                                            <h5 class="font-size-16 mb-3 fs-2">Customer:</h5>
                                            <h5 class="font-size-15 mb-2 fs-4">{{$invoice['Full_name']}}</h5>
                                            <p class="mb-1 fs-4">Phone number: {{$user->phone}}</p>
                                            <p class="mb-1 fs-4">Email: {{$user->email}}</p>
                                            <p class="fs-4">Date: {{$invoice['date']}}</p>
                                        </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            
                            <div class="py-2">
                                <h5 class="font-size-15 fs-3 pt-5">Order Summary</h5>
            
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 70px;">No.</th>
                                                <th >Item</th>
                                                <th>Price</th>
                                                <th></th>
                                                <th class="text-end" style="width: 120px;">Total</th>
                                            </tr>
                                        </thead><!-- end thead -->
                                        <tbody>
                                            <tr>
                                                <th scope="row">01</th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14 mb-1 fs-3">{{Session::get('product')->name}}</h5>
                                                        {{-- <p class="text-muted mb-0"></p> --}}
                                                    </div>
                                                </td>
                                                <td>$ {{Session::get('product')->price}}</td>
                                                <td></td>
                                                <td class="text-end fs-3">$ {{Session::get('product')->price}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="4" class="text-end">Discount :</th>
                                                <td class="text-end">- $0.50</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="4" class="border-0 text-end">Total :</th>
                                                <td class="border-0 text-end"><h4 class="m-0 fw-semibold fs-2">${{Session::get('product')->price -0.50}}</h4></td>
                                            </tr>
                                            <!-- end tr -->
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div><!-- end table responsive -->
                                <div class="d-print-none mt-4">
                                    <div class="float-end">
                                        <a href="javascript:window.print()" class="btn btn-success me-1 fs-3"><i class="fa fa-print"></i></a>
                                        <a href="#" class="btn btn-primary w-md fs-3">Send</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            </div>
    </div>
</body>

@endsection