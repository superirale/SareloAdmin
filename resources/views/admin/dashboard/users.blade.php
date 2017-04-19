@extends('layouts.dashboard')
    @section('title')
<<<<<<< HEAD
        Sarelo | Users
    @endsection
=======
        Dashboard | Users
    @endsection

>>>>>>> template
    @section('content')
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
<<<<<<< HEAD
                                    <!-- BEGIN SIDEBAR MENU -->
                                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                                    
                                        <ul class="page-sidebar-menu ">
                                            <li class="nav-item  ">
                                                <a href="{{url('/admin/index')}}" class="nav-link ">
                                                    <i class="icon-home"></i>
                                                    <span class="title">Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/admin/users')}}" class="nav-link ">
                                                    <i class="icon-user"></i>
                                                    <span class="title">Users</span>
                                                    <span class="selected"></span>
                                                </a>
                                            </li>
                                            <li class="nav-item  ">
                                                <a href="{{url('/admin/orders')}}" class="nav-link ">
                                                    <i class="icon-basket"></i>
                                                    <span class="title">Orders</span>
                                                </a>
                                            </li>
                                            <li class="nav-item  ">
                                                <a href="{{url('/admin/order_view')}}" class="nav-link ">
                                                    <i class="icon-tag"></i>
                                                    <span class="title">Order View</span>
                                                </a>
                                            </li>
                                            <li class="nav-item  ">
                                                <a href="{{url('/admin/products')}}" class="nav-link ">
                                                    <i class="icon-graph"></i>
                                                    <span class="title">Products</span>
                                                </a>
                                            </li>
                                            <li class="nav-item  active open">
                                                <a href="{{url('/admin/product_edit')}}" class="nav-link ">
                                                    <i class="icon-graph"></i>
                                                    <span class="title">Product Edit</span>
                                                    <span class="selected"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    <!-- END SIDEBAR MENU -->
                </div>
               
=======
                        <ul class="page-sidebar-menu">
                            <li class="nav-item  ">
                                <a href="{{url('/admin/index')}}" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item  active open">
                                <a href="{{url('/admin/users')}}" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Users</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/admin/orders')}}" class="nav-link ">
                                    <i class="icon-basket"></i>
                                    <span class="title">Orders</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <!--<li class="nav-item  ">
                                <a href="order_view.html" class="nav-link ">
                                    <i class="icon-tag"></i>
                                    <span class="title">Order View</span>
                                </a>
                            </li>-->
                            <!--<li class="nav-item  ">
                                <a href="product.html" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Products</span>
                                </a>
                            </li>-->
                            <li class="nav-item  ">
                                <a href="{{url('/admin/products')}}" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Products</span>
                                </a>
                            </li>
                        </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
>>>>>>> template
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Users' Profile</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="btn-group pull-right">
                                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> </th>
                                                <th> Username </th>
                                                <th> Email </th>
<<<<<<< HEAD
                                                <th> Expense </th>
                                                <th> Date credit </th>
                                                <th> Status </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> shuxer </td>
                                                <td>
                                                    <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                </td>
                                                <td> 120 </td>
                                                <td class="center"> 12 Jan 2012 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> looper </td>
                                                <td>
                                                    <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                                </td>
                                                <td> 120 </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> userwow </td>
                                                <td>
                                                    <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2012 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> user1wow </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2012 </td>
                                                <td>
                                                    <span class="label label-sm label-default"> Blocked </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> restest </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2012 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> foopl </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 19.11.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> weep </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 19.11.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> coop </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 19.11.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> pppol </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 19.11.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> test </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 19.11.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> userwow </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2012 </td>
                                                <td>
                                                    <span class="label label-sm label-default"> Blocked </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> test </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2012 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> goop </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.11.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> weep </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 15.11.2011 </td>
                                                <td>
                                                    <span class="label label-sm label-default"> Blocked </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> toopl </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 16.11.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> userwow </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 9.12.2012 </td>
                                                <td>
                                                    <span class="label label-sm label-default"> Blocked </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> tes21t </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 14.12.2012 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> fop </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 13.11.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> kop </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 17.11.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> vopl </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 19.11.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> userwow </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2012 </td>
                                                <td>
                                                    <span class="label label-sm label-default"> Blocked </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> wap </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2012 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> test </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 19.12.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> toop </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 17.12.2010 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                <td> weep </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 15.11.2011 </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                            </tr>
=======
                                                <th> Expense (NGN) </th>
                                                <th> Date credit </th>
                                                <th> Phone Number </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($users as $user)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <input type="checkbox" class="checkboxes" value="1" /> </td>
                                                    <td> {{$user->name}} </td>
                                                    <td>
                                                        <a href="mailto:{{$user->email}}"> {{$user->email}} </a>
                                                    </td>
                                                    <td> 120 </td>
                                                    <td class="center"> 12 Jan 2012 </td>
                                                    <td>
                                                        08046738298
                                                    </td>
                                                </tr>
                                            @endforeach
                                            
>>>>>>> template
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
           
            
        </div>
        <!-- END CONTAINER -->
<<<<<<< HEAD
 @endsection
=======
@endsection
>>>>>>> template
