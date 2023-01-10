@extends('layout.auth')
@section('page-title')
{{__('Cart')}}
@endsection
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Cart</h1>
        <nav>
            <ol class="breadcrumb">

                <li class="breadcrumb-item active">cart</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif



    <section class="section">
        <div class="container-fluid">


            <!-- ============================================================== -->
            <!-- RECENT SALES -->
            <!-- ============================================================== -->

            <!-- Main content -->
            <section class="content">




                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card-header -->
                            <div class="card">


                                <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <table id="cart" class="table table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th style="width:50%">Product</th>
                                                <th style="width:10%">Price</th>
                                                <th style="width:8%">Quantity</th>
                                                <th style="width:22%" class="text-center">Subtotal</th>
                                                <th style="width:10%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @csrf
                                            @php $total = 0 @endphp
                                            @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                            <tr data-id="{{ $id }}">
                                                <td data-th="Product">
                                                    <div class="row">

                                                        <div class="col-sm-9">
                                                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td data-th="Price"><input type="number" name='price' value="{{ $details['price'] }}" class="form-control price update-price" readonly></td>

                                                <td data-th="Quantity">

                                                    <input type='hidden' value='{{$id}}' name='id'>
                                                    <input type="number" name='quantity' value="{{ $details['quantity'] }}" class="form-control quantity update-quantity" />
                                                </td>
                                                <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }} Tzs</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger remove-from-cart" title="remove from cart">
                                                        <i class="bi bi-trash"></i>Remove
                                                    </button>
                                                </td>
                                            </tr>






                                            @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="5" class="text-right">
                                                    <h3><strong>Total {{ $total }} Tzs</strong></h3>
                                                </td>
                                            </tr>

                                            <tr>


                                                <td><a type="button" href="{{ route('pos')}}" class="btn btn-warning">Add another product</a></td>
                                                <td>
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#checkout">
                                                        Check out
                                                    </button>
                                                </td>

                                                {{-- <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#order">
                                          Order
                </button>
              </td> --}}

                                            </tr>

                                        </tfoot>
                                    </table>


                                    <!-- Check out Modal -->
                                    <div class="modal fade" id="checkout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                    </button>
                                                </div>
                                                <form method='POST' action="{{ route('store.cart') }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <h5>Continue Check out?</h5>
                                                        <center><i class="bi bi-question-circle text-warning fa-5x"></i></center>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" value="{{__('Yes')}}" class="btn btn-success">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->

                                <!-- Order Modal -->
                                <div class="modal fade" id="order" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                </button>
                                            </div>
                                            <form method='POST' action="">
                                                @csrf
                                                <div class="modal-body">
                                                    <h5>Continue Check out?</h5>
                                                    <center><i class="bi bi-question-circle text-warning fa-5x"></i></center>

                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" value="{{__('Yes')}}" class="btn btn-success">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->



                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    </section>
</main><!-- End #main -->
@endsection

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>


<script>
    $(document).ready(function() {
        $('.update-quantity').on('change', function() {
            var id = $(this).closest('tr').data('id');
            var quantity = $(this).val();
            var price = $(this).closest('tr').find('.update-price').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/update-cart'
                , type: 'patch'
                , data: {
                    quantity: quantity,
                    price: price,
                    id:id
                }
                , success: function(response) {
                    window.location.href = "{{ route('cart') }}";
                }
            });
        });
        $('.update-price').on('change', function() {
            var id = $(this).closest('tr').data('id');
            var price = $(this).val();
            var quantity = $(this).closest('tr').find('.update-quantity').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/update-cart'
                , type: 'patch'
                , data: {
                    price: price,
                    quantity: quantity,
                    id:id
                }
                , success: function(response) {
                    window.location.href = "{{ route('cart') }}";
                }
            });
        });
        $('.remove-from-cart').on('click', function() {
            var id = $(this).closest('tr').data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/remove-from-cart'
                , type: 'delete'
                ,data:{
                    id:id
                }
                , success: function(response) {
                    window.location.href = "{{ route('cart') }}";
                }
            });
        });

    });

</script>
