@extends('layout.layout')
@section('page-title')
{{__('Form Page')}}
@endsection

@section('content')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Form Page</h4>
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
                   
                    <div class="table-responsive">
                        <form class="form-horizontal">
                            <div class="card-body">
                              <h4 class="card-title">Personal Info</h4>
                              <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">First Name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="fname" placeholder="First Name Here" />
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="lname" placeholder="Last Name Here" />
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Password</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" id="lname" placeholder="Password Here" />
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-end control-label col-form-label">Company</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="email1" placeholder="Company Name Here" />
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Contact No</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="cono1" placeholder="Contact No Here" />
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Message</label>
                                <div class="col-sm-9">
                                  <textarea class="form-control"></textarea>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-md-3 mt-3">Single Select</label>
                                <div class="col-md-9">
                                    <select class="select2 form-select shadow-none" style="width: 100%; height: 36px">
                                        <option>Select</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                          <option value="AK">Alaska</option>
                                          <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                          <option value="CA">California</option>
                                          <option value="NV">Nevada</option>
                                          <option value="OR">Oregon</option>
                                          <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                          <option value="AZ">Arizona</option>
                                          <option value="CO">Colorado</option>
                                          <option value="ID">Idaho</option>
                                          <option value="MT">Montana</option>
                                          <option value="NE">Nebraska</option>
                                          <option value="NM">New Mexico</option>
                                          <option value="ND">North Dakota</option>
                                          <option value="UT">Utah</option>
                                          <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                          <option value="AL">Alabama</option>
                                          <option value="AR">Arkansas</option>
                                          <option value="IL">Illinois</option>
                                          <option value="IA">Iowa</option>
                                          <option value="KS">Kansas</option>
                                          <option value="KY">Kentucky</option>
                                          <option value="LA">Louisiana</option>
                                          <option value="MN">Minnesota</option>
                                          <option value="MS">Mississippi</option>
                                          <option value="MO">Missouri</option>
                                          <option value="OK">Oklahoma</option>
                                          <option value="SD">South Dakota</option>
                                          <option value="TX">Texas</option>
                                          <option value="TN">Tennessee</option>
                                          <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                          <option value="CT">Connecticut</option>
                                          <option value="DE">Delaware</option>
                                          <option value="FL">Florida</option>
                                          <option value="GA">Georgia</option>
                                          <option value="IN">Indiana</option>
                                          <option value="ME">Maine</option>
                                          <option value="MD">Maryland</option>
                                          <option value="MA">Massachusetts</option>
                                          <option value="MI">Michigan</option>
                                          <option value="NH">New Hampshire</option>
                                          <option value="NJ">New Jersey</option>
                                          <option value="NY">New York</option>
                                          <option value="NC">North Carolina</option>
                                          <option value="OH">Ohio</option>
                                          <option value="PA">Pennsylvania</option>
                                          <option value="RI">Rhode Island</option>
                                          <option value="SC">South Carolina</option>
                                          <option value="VT">Vermont</option>
                                          <option value="VA">Virginia</option>
                                          <option value="WV">West Virginia</option>
                                        </optgroup>
                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="border-top">
                              <div class="card-body">
                                <button type="button" class="btn btn-primary">
                                  Submit
                                </button>
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

</div>
@endsection