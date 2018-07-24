@extends('dashboard.layouts.admin')

@section('content')

        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg  bg-yellow">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-light">e-commerce</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index-2.html">Dashboard</a></li>
                        <li><a href="#"><span>e-commerce</span></a></li>
                        <li class="active"><span>e-commerce</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">monthly sales</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="sm-graph-box">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div id="sparkline_1"></div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="counter-wrap text-right">
                                                <span class="counter-cap"><i class="fa  fa-level-up txt-success"></i></span><span class="counter">23</span><span>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">revenue</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="sm-graph-box">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div id="sparkline_2"></div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="counter-wrap text-right">
                                                <span class="counter-cap"><i class="fa  fa-level-up txt-success"></i></span><span class="counter">12</span><span>m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">total sales</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="sm-graph-box">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div id="sparkline_6"></div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="counter-wrap text-right">
                                                <span class="counter-cap"><i class="fa  fa-level-down txt-danger"></i></span><span class="counter">1122</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark"><i class="icon-share mr-10"></i>Visits & revenue</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div id="morris_extra_line_chart" class="morris-chart" style="height:442px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->

            <div class="row">
                <!-- Table Hover -->
                <div class="col-sm-8">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">sales</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Products</th>
                                                <th>Popularity</th>
                                                <th>Sales</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Golden Chair</td>
                                                <td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#3cb878"], "stroke":["#3cb878"]}' data-height="40">0,-3,-2,-4,5,-4,3,-2,5,-1</span> </td>
                                                <td><span class="text-danger text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 28.76%</span> </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pink Chair</td>
                                                <td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#3cb878"], "stroke":["#3cb878"]}' data-height="40">0,-1,1,-2,-3,1,-2,-3,1,-2</span> </td>
                                                <td><span class="text-warning text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 8.55%</span> </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Til Chair</td>
                                                <td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#3cb878"], "stroke":["#3cb878"]}' data-height="40">0,3,6,1,2,4,6,3,2,1</span> </td>
                                                <td><span class="text-success text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 58.56%</span> </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Red Chair</td>
                                                <td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#3cb878"], "stroke":["#3cb878"]}' data-height="40">0,3,6,4,5,4,7,3,4,2</span> </td>
                                                <td><span class="text-info text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 35.76%</span> </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Table Hover -->
                <div class="col-sm-4">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark"><i class=" icon-support mr-10"></i>order breakdown</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div id="morris_donut_chart" class="morris-chart" style="height:360px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Product orders</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table display responsive product-overview mb-30" id="myTable">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Order ID</th>
                                                <th>Photo</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Jens Brincker</td>
                                                <td>#85457898</td>
                                                <td>
                                                    <img src="{{asset('admin/img/chair.jpg')}}" alt="iMac" width="80">
                                                </td>
                                                <td>Square Chair</td>
                                                <td>20</td>
                                                <td>10-10-2016</td>
                                                <td>
                                                    <span class="label label-success font-weight-100">Paid</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Mark Hay</td>
                                                <td>#85457897</td>
                                                <td>
                                                    <img src="{{asset('admin/img/chair2.jpg')}}" alt="iPhone" width="80">
                                                </td>
                                                <td>Semi Circle Chair</td>
                                                <td>15</td>
                                                <td>09-10-2016</td>
                                                <td>
                                                    <span class="label label-warning font-weight-100">Pending</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Anthony Davie</td>
                                                <td>#85457896</td>
                                                <td>
                                                    <img src="{{asset('admin/img/chair3.jpg')}}" alt="apple_watch" width="80">
                                                </td>
                                                <td>Rounded Chair</td>
                                                <td>10</td>
                                                <td>08-10-2016</td>
                                                <td>
                                                    <span class="label label-success font-weight-100">Paid</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>David Perry</td>
                                                <td>#85457895</td>
                                                <td>
                                                    <img src="{{asset('admin/img/chair4.jpg')}}" alt="mac_mouse" width="80">
                                                </td>
                                                <td>Wooden chair</td>
                                                <td>15</td>
                                                <td>02-10-2016</td>
                                                <td>
                                                    <span class="label label-default font-weight-100">Failed</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Anthony Davie</td>
                                                <td>#85457894</td>
                                                <td>
                                                    <img src="{{asset('admin/img/chair.jpg')}}" alt="iMac" width="80">
                                                </td>
                                                <td>Rounded Chair</td>
                                                <td>20</td>
                                                <td>08-10-2016</td>
                                                <td>
                                                    <span class="label label-success font-weight-100">Paid</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Alan Gilchrist</td>
                                                <td>#85457893</td>
                                                <td>
                                                    <img src="{{asset('admin/img/chair2.jpg')}}" alt="iPhone" width="80">
                                                </td>
                                                <td>Wooden Chair</td>
                                                <td>24</td>
                                                <td>06-10-2016</td>
                                                <td>
                                                    <span class="label label-warning font-weight-100">Pending</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Sue Woodger</td>
                                                <td>#85457892</td>
                                                <td>
                                                    <img src="{{asset('admin/img/chair3.jpg')}}" alt="apple_watch" width="80">
                                                </td>
                                                <td>Square Chair</td>
                                                <td>30</td>
                                                <td>05-10-2016</td>
                                                <td>
                                                    <span class="label label-success font-weight-100">Paid</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Barry Croucher</td>
                                                <td>#85457891</td>
                                                <td>
                                                    <img src="{{asset('admin/img/chair4.jpg')}}" alt="mac_mouse" width="80">
                                                </td>
                                                <td>Semi Circle Chair</td>
                                                <td>28</td>
                                                <td>01-10-2016</td>
                                                <td>
                                                    <span class="label label-default font-weight-100">Failed</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
            <!-- Row -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Popularity</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="lg-progress-box">
                                    <i class="icon-badge mb-20 block"></i>
                                    <span class="font-14 head-font txt-dark">People's Choice Product<span class="pull-right">45%</span></span>
                                    <div class="progress mt-10">
                                        <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%" role="progressbar"> <span class="sr-only">45% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">review box</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="streamline review-box">
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 mr-5">Barry Croucher</a>
                                            <span class="inline-block font-12  mb-5">12/10/16</span>
                                            <div class="per-rating inline-block pull-right">
                                                <a href="javascript:void(0);" class="fa fa-star"></a><a href="javascript:void(0);" class="fa fa-star"></a><a href="javascript:void(0);" class="fa fa-star"></a><a href="javascript:void(0);" class="fa fa-star"></a><a href="javascript:void(0);" class="fa fa-star-o"></a>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 mr-5">Anthony Davie</a>
                                            <span class="inline-block font-12  mb-5">12/10/16</span>
                                            <div class="per-rating inline-block pull-right">
                                                <a href="javascript:void(0);" class="fa fa-star"></a><a href="javascript:void(0);" class="fa fa-star"></a><a href="javascript:void(0);" class="fa fa-star"></a><a href="javascript:void(0);" class="fa fa-star"></a><a href="javascript:void(0);" class="fa fa-star-o"></a>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
        </div>

@endsection
