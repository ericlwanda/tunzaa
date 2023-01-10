@extends('layout.layout')
@section('page-title')
{{__('Tables')}}
@endsection

@section('content')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Products</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Library
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">


        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div>

                     
                    </div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>amount</th>
                                    <th>category</th>
                                    <th>Image</th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                       
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->amount}}</td>
                                    <td>{{$product->category}}</td>
                                    <td><img src="{{url('storage/'.$product->image)}}" alt="image" style="height:70px"></td>
                                  

                                </tr>



                                </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

</div>

</div>
@endsection
