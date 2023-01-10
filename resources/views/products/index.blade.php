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

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Product
                        </button>
                        <br>
                        <br>
                    </div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td><a href="{{route('products.show',['id' =>$product->id])}}">{{$product->name}}</a></td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td><img src="{{url('storage/'.$product->image)}}" alt="image" style="height:70px"></td>
                                    <td>
                                        <div>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{$product->id}}">Edit</button>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$product->id}}">Delete</button>
                                        </div>


                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="editModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('products.update',['id' =>$product->id])}}" method="POST" enctype="multipart/form-data">
                                                            @csrf

                                                            <div class="form-group row">
                                                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Product Name</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" placeholder="Product name" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">price (each)</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}" placeholder="price" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">description</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}" placeholder="description" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">amount in stock</label>
                                                                <div class="col-sm-9">
                                                                    <input type="number" class="form-control" id="amount" name="amount" value="{{$product->amount}}" placeholder="amount" />
                                                                </div>
                                                            </div>



                                                            <div class="form-group row">
                                                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Category</label>
                                                                <div class="col-sm-9">
                                                                    <select name="category" class="form-control">
                                                                        <option value="{{$product->category}}">{{$product->category}}</option>
                                                                        <option value="Electonics">Electornics</option>
                                                                        <option value="Phones">Phones</option>
                                                                        <option value="Fridges">Fridges</option>
                                                                        <option value="Food">Food</option>
                                                                        <option value="Accessories">Accessories</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">image</label>
                                                                <div class="col-sm-9">
                                                                    <input type="file" class="form-control" id="image" name="image" placeholder="image" />
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Modal End -->

                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('products.destroy',['id' =>$product->id])}}" method="POST" enctype="multipart/form-data">
                                                            @csrf

                                                            <h3>Are you sure you want to delete?</h3>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Yes</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Delete Modal end -->


                                    </td>

                                </tr>
                                @endforeach


                                </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Product Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Product name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">price (each)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="price" name="price" placeholder="price" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="description" name="description" placeholder="description" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">amount in stock</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="amount" />
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Category</label>
                            <div class="col-sm-9">
                                <select name="category" class="form-control">
                                    <option value="Electonics">Electornics</option>
                                    <option value="Phones">Phones</option>
                                    <option value="Fridges">Fridges</option>
                                    <option value="Food">Food</option>
                                    <option value="Accessories">Accessories</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image" placeholder="image" />
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>

</div>

</div>
@endsection
