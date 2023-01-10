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

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div>
                        
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Product
                    </button>
                    </div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>amount</th>
                                    <th>Image</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>

                                </tr>
                              
                              
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
            <form  action="{{route('products.store')}}" method="POST">
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Product Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Product name" />
                </div>
            </div>

            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">amount</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="amount" name="amount" placeholder="amount" />
                </div>
            </div>

            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">price</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="price" name="price" placeholder="price" />
                </div>
            </div>

            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Category</label>
                <div class="col-sm-9">
                    <select name="category" class="form-control">
                        <option value="Electonics">Electornics</option>
                        <option value="Phones">Phones</option>
                        <option value="Fridges">Fridges</option>

                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">price</label>
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
