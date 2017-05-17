@extends('layouts.dashboard')
    @section('title')
        Dashboard | Orders
    @endsection
    @section('content')
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                         <ul class="page-sidebar-menu">
                        <li class="nav-item  ">
                            <a href="{{url('/admin/dashboard')}}" class="nav-link ">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item  active open">
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
                        <li class="dropdown ">
                            <a href="{{url('/admin/unit-types')}}" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-basket"></i>
                            Unit Types <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('admin/unit-types/create')}}">Add Unit-Type</a></li>
                                <li><a href="{{url('/admin/unit-types')}}">Edit Product</a></li>
                                <li><a href="{{url('/admin/unit-types')}}">Delete Unit-Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown ">
                            <a href="{{url('/admin/slots')}}" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-basket"></i>
                            Slots <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('admin/slots/create')}}">Add Slot</a></li>
                                <li><a href="{{url('/admin/slots')}}">Edit Slot</a></li>
                                <li><a href="{{url('/admin/slots')}}">Delete Slot</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                                <a href="{{url('/admin/users')}}" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Users</span>
                                    <span class="selected"></span>
                                </a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{url('/admin/show')}}" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-basket"></i>
                            Manage Admin <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('admin/create')}}">Add Admin</a></li>
                                <li><a href="{{url('/admin/show')}}">Edit Admin</a></li>
                                <li><a href="{{url('/admin/show')}}">Delete</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div id="order_message" class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Success:</strong> Order Updated Successfully
                        </div>
                        <div id="payment_message" class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Success:</strong> Payment Updated Successfully
                        </div>
                        @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @elseif(session('delete_message'))
                                <div class="alert alert-danger">
                                    {{ session('delete_message') }}
                                </div>
                                @elseif(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    @foreach($errors->all() as $error)
                                        <strong>Error Upon Submission...</strong> {{ $error }}
                                    @endforeach
                                </div>
                            @endif
                            <div class="col-md-8">
                                <div id="getStatus">

                                </div>
                            </div>
                        <div class="col-md-12">

                            <!-- Begin: life time stats -->
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-green"></i>
                                        <span class="caption-subject font-green sbold uppercase"> Order Listing </span>
                                    </div>
                                   <div class="actions">
                                         <form id="search_text" name="form_search" method="POST" action="{{url('admin/search_order')}}" class="form-inline">

                                         {{csrf_field()}}
                                           <div class="form-group">
                                             <div class="input-group">
                                              <input class="form-control" name="search" placeholder="Search for an order..." type="text">
                                              <span class="input-group-btn">
                                                 <input type="submit" class="btn btn-default"  value="GO!"/> 
                                              </span>
                                            </div>
                                          </div>
                                        </form>
                                    </div>
                                </div>

                                @if(count($orders) <= 0)
                                        <div class="row">
                                            <div class="col-lg-6 col-lg-offset-3">
                                                    
                                                            <div class="row">
                                                                <h3> 
                                                                    <center>
                                                                        NO RESULT FOUND! FOR YOUR SEARCH <a href="{{url('admin/orders')}}"><< back</a>
                                                                    </center>
                                                                </h3>
                                                            </div>
                                            </div>
                                        </div>

                                @else
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <div class="table-actions-wrapper">
                                                <span> </span>
                                            </div>
                                            {{ $orders->links() }}
                                            <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_orders">
                                                <thead>
                                                    <tr role="row" class="heading">
                                                        <th width="10%"> Order&nbsp;# </th>
                                                        <th width="15%"> Order Date</th>
                                                        <th width="10%"> Price </th>
                                                        <th width="15%"> Payment Method</th>
                                                        <th width="15%"> Update Payment</th>
                                                        <th width="15%"> Payment Satus</th>
                                                        <th width="15%"> Phone</th>
                                                        <th width="15%"> Update Status </th>
                                                        <th width="15%"> Current Status </th>
                                                        <th width="5%"> Details </th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <?php $num = 1; ?>
                                                    <form method="POST" action="">
                                                        @foreach($orders as $order)

                                                                <tr>
                                                                    <td>
                                                                       {{$num++}}
                                                                    </td>
                                                                    <td>
                                                                        @if(isset($order->created_at))
                                                                        {{$order->created_at}}
                                                                        @endif
                                                                    </td>
                                                                    <td> {{$order->total}} </td>
                                                                    <td> @if(!empty($order->payment_method))
                                                                        {{ucfirst($order->payment_method)}}
                                                                        @else
                                                                            {{"Bank"}}
                                                                        @endif
                                                                    </td>
                                                                     <td>
                                                                          <select class="paymentStatus" name="paymentStatus" class="form-control form-filter input-sm" data-payload="{{$order->id}}">     
                                                                        @if($order->payment_status ==  "paid")
                                                                        <option value="{{$order->payment_status}}"> {{ ucfirst($order->payment_status)}}</option>
                                                                        <option value="unpaid">Unpaid</option>
                                                                        @elseif($order->payment_status == "unpaid")
                                                                             <option value="{{$order->payment_status}}">{{ucfirst($order->payment_status)}}</option>
                                                                             <option value="paid">Paid</option>
                                                                        @endif

                                                                        </select>
                                                                     </td>
                                                                    <td>
                                                                         <span id="payment{{$order->id}}" class="label payment label-sm" data-payload="{{$order->id}}" style="color:#222;"> {{$order->payment_status}} </span>                                                                   

                                                                    </td>

                                                                    <td> {{$order->receiver_phone}} </td>
                                                                    <td>

                                                                        <select class="updateStatus" name="order_status" class="form-control" data-payload="{{$order->id}}">
                                                                        @if($order->status == "confirmed")
                                                                            <option value="{{$order->status}}">{{ucfirst($order->status)}}</option>
                                                                            <option value="processing">Processing</option>
                                                                            <option value="gone-to-market">Gone to Market</option>
                                                                            <option value="delivered">Delivered</option>
                                                                        @elseif($order->status == "processing")
                                                                            <option value="{{$order->status}}">{{ucfirst($order->status)}}</option>
                                                                            <option value="confirmed">Confirmed</option>
                                                                            <option value="gone-to-market">Gone to Market</option>
                                                                            <option value="delivered">Delivered</option>
                                                                        @elseif($order->status == "gone-to-market")
                                                                            <option value="{{$order->status}}">{{ucfirst($order->status)}}</option>
                                                                            <option value="processing">Processing</option>
                                                                            <option value="confirmed">Confirmed</option>
                                                                            <option value="delivered">Delivered</option>
                                                                       @elseif($order->status == "delivered")
                                                                            <option value="{{$order->status}}">{{ucfirst($order->status)}}</option>
                                                                            <option value="processing">Processing</option>
                                                                            <option value="confirmed">Confirmed</option>
                                                                            <option value="gone-to-market">Gone to Market</option>
                                                                        @endif
                                                                        </select>
                                                                    </td>
                                                                    <td>

                                                                           {{ucfirst($order->status)}}

                                                                    </td>
                                                                </form>
                                                                    <td>
                                                                        <a href="{{url('admin/orders',$order->id)}}"><button class="btn btn-sm btn-success margin-bottom">
                                                                                <i class="fa fa-eye"></i> View</button></a> </br> </br>
                                                                        <a id="a_del1" href="{{url('admin/orders/delete',$order->id)}}"><button class="btn btn-sm btn-danger margin-bottom">
                                                                                <i class="icon-remove-sign"></i> Cancel</button></a>
                                                                    </td>

                                                                </tr>
                                                        @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        {{ $orders->links() }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
                function ConfirmDelete()
              {
              var x = confirm("Are you sure you want to delete?");
              if (x)
                return true;
              else
                return false;
              }

              $("a#a_del").click(function(){
               return ConfirmDelete();
              });
        </script>
@endsection
