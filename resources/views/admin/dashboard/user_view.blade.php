@extends('layouts.dashboard')
    @section('title')
        Dashboard | View User 
    @endsection

    @section('content')
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu">
                       <li class="nav-item ">
                            <a href="{{url('/admin/dashboard')}}" class="nav-link ">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/orders')}}" class="nav-link ">
                                <i class="icon-basket"></i>
                                <span class="title">Orders</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('/admin/products')}}" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Products</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('/admin/unit-types')}}" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Unit Types</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('/admin/slots')}}" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Slots</span>
                            </a>
                        </li>
                        <li class="nav-item active open">
                                <a href="{{url('/admin/users')}}" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Users</span>
                                    <span class="selected"></span>
                                </a>
                        </li>
                        <li class="nav-item">
                                <a href="{{url('/admin/create')}}" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Manage Admin</span>
                                    <span class="selected"></span>
                                </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->

                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->

                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Begin: life time stats -->
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject font-dark sbold lowercase"> Viewing {{ucfirst($user->first_name)."'s ". " Details"}} 
                                            <span class="hidden-xs">|  </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs nav-tabs-lg">
                                            <li class="active">
                                                <a href="#tab_1" data-toggle="tab"> Details </a> 
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="portlet yellow-crusta box">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-cogs"></i>User Details</div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="row static-info">
                                                                <div class="col-md-5 name"> Firstname: {{$user->first_name}}</div>
                                                                <div class="col-md-7 value"> 
                                                                </div>
                                                            </div>
                                                            <div class="row static-info">
                                                                <div class="col-md-5 name"> Lastname: {{$user->last_name}}</div>
                                                                <div class="col-md-7 value">
                                                              
                                                                </div>
                                                            </div>
                                                            <div class="row static-info">
                                                                <div class="col-md-5 name"> Email: {{$user->email}} </div>
                                                                <div class="col-md-7 value">
                                                                    
                                                            </div>
                                                                 
                                                            </div>
                                                            <div class="row static-info">
                                                                <div class="col-md-8 name"> Phone:  {{$user->phone}} </div>
                                                                <div class="col-md-7 value"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="portlet blue-hoki box">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-cogs"></i>Address </div>
                                                            <!--<div class="actions">
                                                                <a href="javascript:;" class="btn btn-default btn-sm">
                                                                    <i class="fa fa-pencil"></i> Edit </a>
                                                            </div>-->
                                                        </div>
                                                        <div class="portlet-body">
                                                        <?php $num = 1;?>
                                                        @if(count($user->user_addresses))
                                                            @foreach($user->user_addresses as $address)
                                                                <div class="row static-info">
                                                                    <div class="col-md-10 name"> Address {{$num++ .":"}}  {{$address->address}}</div> <br> <br>
                                                                    <div class="col-md-7 value"> City: {{$address->city}} </div>
                                                                </div> <hr>
                                                            @endforeach
                                                        @else
                                                            {{" No Address Found for this user  "}}
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="portlet grey-cascade box">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-cogs"></i>Order Details </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover table-bordered table-striped">
                                                                    <thead>

                                                                           <tr role="row" class="heading">
                                                                               <th width="10%"> Order&nbsp;# </th>
                                                                               <th width="15%"> Order Date</th>
                                                                               <th width="10%"> Price </th>
                                                                               <th width="15%"> Payment Method</th>
                                                                               <th width="15%"> Payment Satus</th>
                                                                               <th width="15%"> Phone</th>
                                                                           </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @if(count($user->orders))
                                                                            @foreach($user->orders as $item)
                                                                                    <tr>
                                                                                        <td>
                                                                                            {{$item->order_unique_reference}}
                                                                                        <td> 
                                                                                            @if(isset($item->created_at))
                                                                                                {{$item->created_at}} 
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>&#8358;  {{$item->total}}</td>
                                                                                        <td> {{$item->payment_method}} </td>
                                                                                        <td> {{$item->payment_status}} </td>
                                                                                        <td> {{$item->receiver_phone}} </td>
                                                                                    </tr>
                                                                            @endforeach
                                                                        @else 
                                                                            {{" This user has no order"}}
                                                                        @endif
                                                                    </tbody>
                                                                </table>
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
                            <!-- End: life time stats -->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
@endsection
