@extends('admin.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-cube text-danger icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="card-text text-right">Total Revenue</p>
                  <div class="fluid-container">
                    <h3 class="card-title font-weight-bold text-right mb-0">$65,650</h3>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3">
                <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-receipt text-warning icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="card-text text-right">Orders</p>
                  <div class="fluid-container">
                    <h3 class="card-title font-weight-bold text-right mb-0">3455</h3>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3">
                <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-poll-box text-teal icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="card-text text-right">Sales</p>
                  <div class="fluid-container">
                    <h3 class="card-title font-weight-bold text-right mb-0">5693</h3>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3">
                <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
          <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-account-location text-info icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="card-text text-right">Employees</p>
                  <div class="fluid-container">
                    <h3 class="card-title font-weight-bold text-right mb-0">246</h3>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3">
                <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Targets</h5>
              <canvas id="dashoard-area-chart" height="100px"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Orders</h5>
              <div class="table-responsive">
                <table class="table center-aligned-table">
                  <thead>
                    <tr>
                      <th class="border-bottom-0">Order No</th>
                      <th class="border-bottom-0">Product Name</th>
                      <th class="border-bottom-0">Purchased On</th>
                      <th class="border-bottom-0">Shipping Status</th>
                      <th class="border-bottom-0">Payment Method</th>
                      <th class="border-bottom-0">Payment Status</th>
                      <th class="border-bottom-0"></th>
                      <th class="border-bottom-0"></th>
                      <th class="border-bottom-0"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>034</td>
                      <td>Iphone 7</td>
                      <td>12 May 2017</td>
                      <td>Dispatched</td>
                      <td>Credit card</td>
                      <td><label class="badge badge-teal">Approved</label></td>
                      <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                      <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a></td>
                    </tr>
                    <tr>
                      <td>035</td>
                      <td>Galaxy S8</td>
                      <td>15 May 2017</td>
                      <td>Dispatched</td>
                      <td>Internet banking</td>
                      <td><label class="badge badge-warning">Pending</label></td>
                      <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                      <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a></td>
                    </tr>
                    <tr>
                      <td>036</td>
                      <td>Amazon Echo</td>
                      <td>17 May 2017</td>
                      <td>Dispatched</td>
                      <td>Credit card</td>
                      <td><label class="badge badge-teal">Approved</label></td>
                      <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                      <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a></td>
                    </tr>
                    <tr>
                      <td>037</td>
                      <td>Google Pixel</td>
                      <td>17 May 2017</td>
                      <td>Dispatched</td>
                      <td>Cash on delivery</td>
                      <td><label class="badge badge-danger">Rejected</label></td>
                      <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                      <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a></td>
                    </tr>
                    <tr>
                      <td>038</td>
                      <td>Mac Mini</td>
                      <td>19 May 2017</td>
                      <td>Dispatched</td>
                      <td>Debit card</td>
                      <td><label class="badge badge-teal">Approved</label></td>
                      <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                      <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Global Sales by Top Locations</h5>
              <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="../images/flags/US.png">
                          </div>
                        </td>
                        <td>USA</td>
                        <td class="text-right">
                          2.920
                        </td>
                        <td class="text-right">
                          53.23%
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="../images/flags/DE.png">
                          </div>
                        </td>
                        <td>Germany</td>
                        <td class="text-right">
                          1.300
                        </td>
                        <td class="text-right">
                          20.43%
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="../images/flags/AU.png">
                          </div>
                        </td>
                        <td>Australia</td>
                        <td class="text-right">
                          760
                        </td>
                        <td class="text-right">
                          10.35%
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="../images/flags/GB.png">
                          </div>
                        </td>
                        <td>United Kingdom</td>
                        <td class="text-right">
                          690
                        </td>
                        <td class="text-right">
                          7.87%
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="../images/flags/RO.png">
                          </div>
                        </td>
                        <td>Romania</td>
                        <td class="text-right">
                          600
                        </td>
                        <td class="text-right">
                          5.94%
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="../images/flags/BR.png">
                          </div>
                        </td>
                        <td>Brasil</td>
                        <td class="text-right">
                          550
                        </td>
                        <td class="text-right">
                          4.34%
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12">
                  <div class="rounded" id="map" style="min-height:300px;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Manage Tickets</h5>
              <div class="fluid-container">
                <div class="row ticket-card mt-3 pb-2 border-bottom">
                  <div class="col-1">
                    <img class="img-sm rounded-circle" src="images/faces/face1.jpg" alt="profile image">
                  </div>
                  <div class="ticket-details col-9">
                    <div class="d-flex">
                      <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">James :</p>
                      <p class="font-weight-medium mr-1 mb-0">[#23047]</p>
                      <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                    <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sequi a, nostrum.</p>
                    <div class="row text-muted d-flex">
                      <div class="col-4 d-flex">
                        <p class="mb-0 mr-2">Last responded :</p>
                        <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                      </div>
                      <div class="col-4 d-flex">
                        <p class="mb-0 mr-2">Due in :</p>
                        <p class="Last-responded mr-2 mb-0">2 Days</p>
                      </div>
                    </div>
                  </div>
                  <div class="ticket-actions col-2">
                    <div class="btn-group dropdown">
                      <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manage
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ticket-card mt-3 pb-2 border-bottom">
                  <div class="col-1">
                    <img class="img-sm rounded-circle" src="images/faces/face2.jpg" alt="profile image">
                  </div>
                  <div class="ticket-details col-9">
                    <div class="d-flex">
                      <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">Stella :</p>
                      <p class="font-weight-medium mr-1 mb-0">[#23135]</p>
                      <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente.</p>
                    </div>
                    <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptates fuga quae?</p>
                    <div class="row text-muted d-flex">
                      <div class="col-4 d-flex">
                        <p class="mb-0 mr-2">Last responded :</p>
                        <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                      </div>
                      <div class="col-4 d-flex">
                        <p class="mb-0 mr-2">Due in :</p>
                        <p class="Last-responded mr-2 mb-0">2 Days</p>
                      </div>
                    </div>
                  </div>
                  <div class="ticket-actions col-2">
                    <div class="btn-group dropdown">
                      <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manage
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ticket-card mt-3 pb-2 border-bottom">
                  <div class="col-1">
                    <img class="img-sm rounded-circle" src="images/faces/face3.jpg" alt="profile image">
                  </div>
                  <div class="ticket-details col-9">
                    <div class="d-flex">
                      <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">John Doe :</p>
                      <p class="font-weight-medium mr-1 mb-0">[#23246]</p>
                      <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="row text-muted d-flex">
                      <div class="col-4 d-flex">
                        <p class="mb-0 mr-2">Last responded :</p>
                        <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                      </div>
                      <div class="col-4 d-flex">
                        <p class="mb-0 mr-2">Due in :</p>
                        <p class="Last-responded mr-2 mb-0">2 Days</p>
                      </div>
                    </div>
                  </div>
                  <div class="ticket-actions col-2">
                    <div class="btn-group dropdown">
                      <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manage
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ticket-card mt-3 pb-2 border-bottom">
                  <div class="col-1">
                    <img class="img-sm rounded-circle" src="images/faces/face4.jpg" alt="profile image">
                  </div>
                  <div class="ticket-details col-9">
                    <div class="d-flex">
                      <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">Marques Brownlee :</p>
                      <p class="font-weight-medium mr-1 mb-0">[#23047]</p>
                      <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                    <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sequi a, nostrum.</p>
                    <div class="row text-muted d-flex">
                      <div class="col-4 d-flex">
                        <p class="mb-0 mr-2">Last responded :</p>
                        <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                      </div>
                      <div class="col-4 d-flex">
                        <p class="mb-0 mr-2">Due in :</p>
                        <p class="Last-responded mr-2 mb-0">2 Days</p>
                      </div>
                    </div>
                  </div>
                  <div class="ticket-actions col-2">
                    <div class="btn-group dropdown">
                      <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manage
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ticket-card mt-3 pb-2">
                  <div class="col-1">
                    <img class="img-sm rounded-circle" src="images/faces/face5.jpg" alt="profile image">
                  </div>
                  <div class="ticket-details col-9">
                    <div class="d-flex">
                      <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">Marina John :</p>
                      <p class="font-weight-medium mr-1 mb-0">[#23034]</p>
                      <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi amet totam, dignissimos fugiat voluptates, ab magni, necessitatibus excepturi inventore, mollitia ipsa quaerat aliquam.</p>
                    </div>
                    <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae animi omnis, a?</p>
                    <div class="row text-muted d-flex">
                      <div class="col-4 d-flex">
                        <p class="mb-0 mr-2">Last responded :</p>
                        <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                      </div>
                      <div class="col-4 d-flex">
                        <p class="mb-0 mr-2">Due in :</p>
                        <p class="Last-responded mr-2 mb-0">2 Days</p>
                      </div>
                    </div>
                  </div>
                  <div class="ticket-actions col-2">
                    <div class="btn-group dropdown">
                      <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manage
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
@endsection
