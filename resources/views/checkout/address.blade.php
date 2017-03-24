<!DOCTYPE html>
<html class="sidebar-lg ">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" href="/assets/css/default.time.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <style type="text/css">
            html, body, .wrapper{height: 100%; width: 100%;}

        .login-page, .signup-page {
            background: #00BCD4;
        }

        .logo{
          text-align: center;
        }

        .flex-container{
        padding-left: 0;
        overflow-x: hidden;
        display: flex;
        justify-content: center;
        align-content: center;
        align-items: center;
        }

        a, a:hover{
          outline: 0;
          text-decoration: none;
          color: #FFFFFF;
          font-weight: bold;
        }

        .align-right{
          text-align: right;
        }
        /*.login-box, .signup-box{
          width: 25%;
        }*/
        .login-page .login-box .msg {
          color: #555;
          text-align: center;
        }
        .login-page .login-box{
          font-size: 14px;
          text-decoration: none;
          color: #FFFFFF;
        }
        .login-page .login-box .logo {
          margin-bottom: 20px;
        }
        .login-page .login-box .logo a,
        .signup-page .signup-box .logo a
        {
        font-size: 36px;
        display: block;
        width: 100%;
        text-align: center;
        color: #fff;
        }
        .login-page .login-box .logo small {
        display: block;
        width: 100%;
        text-align: center;
        color: #fff;
        margin-top: -5px;
        }

        .card {
          background: #fff;
          min-height: 50px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
          position: relative;
          margin-bottom: 30px;
        }
        .card .body {
          font-size: 14px;
          color: #555;
          padding: 20px;
        }

        .input {
          position: relative;
          z-index: 1;
          display: inline-block;
          width: 100%;
          vertical-align: top;
        }

        .input-field {
          position: relative;
          display: block;
          float: right;
          padding: 0.8em;
          width: 60%;
          border: none;
          border-radius: 0;
          background: #f0f0f0;
          color: #aaa;
          font-weight: bold;
          font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
          -webkit-appearance: none; /* for box shadows to show on iOS */
        }

        .input-field:focus {
          outline: none;
        }

        .input-label {
          display: inline-block;
          float: right;
          padding: 0 1em;
          width: 40%;
          color: #6a7989;
          font-weight: bold;
          font-size: 70.25%;
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
          -webkit-touch-callout: none;
          -webkit-user-select: none;
          -khtml-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        .input-label-content {
          position: relative;
          display: block;
          padding: 1.6em 0;
          width: 100%;
        }

        

        .social-login a.btn {
          background-size: 100%;
          font-size: 12px;
          text-align: center;
          color: #FFF;
          text-shadow: 1px 1px 1px #333;
          margin: 5px auto;
          padding: 5px;
        }

        /*STYLING OF SWITCH FORMS*/
        .form-box{
          width: 60%;
          margin: 40px auto;
        }
        #switchForm {
         /* width: 80%;
          margin: 50px auto;*/
          text-align: center;
          position: relative;
        }
        #switchForm fieldset {
          background: rgba(255,255,255,0.8);
          border: 0 none;
          border-radius: 0px;
          box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
          padding: 20px 30px;
          box-sizing: border-box;
          width: 80%;
          margin: 0 10%;
          margin-bottom: 40px;
          /*stacking fieldsets above each other*/
          position: absolute;
        }
        /*Hide all except first fieldset*/
        #switchForm fieldset:not(:first-of-type) {
          display: none;
        }

        /*buttons*/
        #switchForm .action-button {
          width: 100px;
          background: #27AE60;
          font-weight: bold;
          color: white;
          border: 0 none;
          border-radius: 1px;
          cursor: pointer;
          padding: 10px 5px;
          margin: 10px 5px;
        }
        #switchForm .action-button:hover, #switchForm .action-button:focus {
          box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
          background-color:white ;
          color: #27AE60;
        }
        /*headings*/
        .fs-title {
          font-size: 15px;
          text-transform: uppercase;
          color: #2C3E50;
          margin-bottom: 10px;
        }
        .fs-subtitle {
          font-weight: normal;
          font-size: 13px;
          color: #666;
          margin-bottom: 20px;
        }
        /*progressbar*/
        #progressbar {
          margin-bottom: 30px;
          overflow: hidden;
          padding-left: 0px;
          /*CSS counters to number the steps*/
          counter-reset: step;
          /*margin-left: 50px;*/
        }
        #progressbar li {
          list-style-type: none;
          color:#2C3E50 ;
          text-transform: uppercase;
          font-size: 9px;
          width: 33.33%;
          float: left;
          position: relative;
        }
        #progressbar li:before {
          content: counter(step);
          counter-increment: step;
          width: 20px;
          line-height: 20px;
          display: block;
          font-size: 10px;
          color: #333;
          background: #ddd;
          border-radius: 3px;
          margin: 0 auto 5px auto;
        }
        /*progressbar connectors*/
        #progressbar li:after {
          content: '';
          width: 100%;
          height: 2px;
          background: #ddd;
          position: absolute;
          left: -50%;
          top: 9px;
          z-index: -1; /*put it behind the numbers*/
        }
        #progressbar li:first-child:after {
          /*connector not needed before the first step*/
          content: none;
        }
        /*marking active/completed steps green*/
        /*The number of the step and the connector before it = green*/
        #progressbar li.active:before,  #progressbar li.active:after{
          background: #27AE60;
          color: white;
        }

        .text-left{
          text-align: left;
        }

        .others{
          width: 40px;
          border-color: #eee;
        }
        .radio input[type=radio], .others{
          margin-left: 20px;
        }


        .current {
        -webkit-animation: moveToLeft .6s ease both;
        animation: moveToLeft .6s ease both;
        }

        .outClass {
        -webkit-animation: moveFromLeft .6s ease both;
        animation: moveFromLeft .6s ease both;
        }

        @-webkit-keyframes moveToLeft {
        from {-webkit-transform: translateX(100%); display: block; }
        to { -webkit-transform: translateX(0); display: block;}
        }
        @keyframes moveToLeft {
        from { -webkit-transform: translateX(100%); display: block;}
        to { -webkit-transform: translateX(0); transform: translateX(0);}
        }

        @-webkit-keyframes moveFromLeft {
        0% { }
        40% { -webkit-transform: rotateX(-15deg); transform: rotateX(-15deg); opacity: .8; -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; }
        100% { -webkit-transform: scale(0.8) translateZ(-200px); transform: scale(0.8) translateZ(-200px); opacity:0; }
        }
        @keyframes moveFromLeft {
        0% { }
        40% { -webkit-transform: rotateX(-15deg); transform: rotateX(-15deg); opacity: .8; -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; }
        100% { -webkit-transform: scale(0.8) translateZ(-200px); transform: scale(0.8) translateZ(-200px); opacity:0; }
        }
        .checkout-label{
            font-weight: normal;
            font-size: 13px;
            color: #666;   
        }
        
    </style>
</head>

<body class="clearfix">
    <div class="main  clearfix m-l-450">
        <div class="overlay">
            <!-- ===Nav bar starts here == -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!--<div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="index.html">
                            <img src="/assets/img/logo/sarelo2.svg"></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>-->
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav navbar-right">
                            
                            @if(Auth::user()->id)
                            <li role="presentation">
                                <span></span><br>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span>Sign Out</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            @else
                            <li role="presentation">
                                <span>Already Have an account</span><br>
                                <a href="/sign-in" class="c-brand-purple"><span> Sign In</span></a>
                            </li>
                            <li>
                                <div class="divider"></div>
                            </li>
                            <li role="presentation">
                                <span>No Account?</span><br>
                                <a href="/sign-up">
                                    <span>Sign Up</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    
                </div>
            </nav>
            <!-- ===Nav bar endss here == -->

            <!-- ===Main contents begins here ==-->
            <div class="container-fluid clearfix">
                <!-- <div class="contents m-auto width-30p"> -->
                    <!-- Order details section -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h3 class="align-right"><strong>Billing Address</strong></h3>
                            <div>
                                <br>
                            </div>
                            <form method="post" action="/checkout/billing-address">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Full Name:</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                                     @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{old('phone')}}">
                                     @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="address">Delivery Address:</label>
                                    <input type="text" class="form-control" name="address" id="address" value="{{old('address')}}">
                                     @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="date">Delivery Date:</label>
                                    <input type="text" class="form-control" name="date" id="date" value="{{old('date')}}">
                                    @if ($errors->has('date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                 <div class="form-group">
                                    <label for="date">Delivery Slot:</label>
                                    <select name="delivery_slot_id" id="" class="form-control">
                                        @if(isset($slots))
                                            <option value=""> Select a delivery slot</option>
                                            @foreach($slots as $slot)
                                                <option value="{{$slot->id}}">Delivery Time {{$slot->time_range}}</option>
                                            @endforeach
                                        @else
                                            <option value=""> No Slot Available</option>
                                        @endif
                                    </select>
                                  
                                    @if ($errors->has('delivery_slot_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('delivery_slot_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                
                                <button type="submit" class="btn btn-success btn-cart pull-right">Next</button>
                            </form>
                             
                        </div>
                              
                            
                    <!--Checkout details ends here -->
                </div>
            </div>
            <!-- ===Main contents ends here ==-->

            <!-- ===Page footer begins here == -->
           <!--  <div class="footy">
                <ul>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms and Condition</a></li>
                    <li><a href="#">Feedbacks</a></li>
                </ul>
            </div> -->
            <!-- ===Page footer ends here == -->
        </div>
    </div>
    <nav id="menu-right" class="l-0  border-right">
        <div class="header">
            <h3>MY FOOD BASKET 
                <span class="pull-right items_container">
                <span id="items">0</span>
                <span class="t-u-c">items</span>
                </span>
            </h3>
        </div>
        <div class="full_bag">
            <div class="body" id="basket">
                <ul class="p-l-0 list-type-none" id="basketList">
                    <!--<li class="pos-rel animated slideInDown">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="row">
                                    <div class="col-xs-6 p-r-0">
                                        <div class="thumbnail">
                                            <img src="/assets/img/loaders/map-loader.gif">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 p-l-0">
                                        <div class="pr-text">
                                            <h4 class="m-b-0 m-t-5">Beans</h4>
                                            <small>Paint bucket</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                m
                            </div>
                            <div class="col-xs-3">
                                m
                            </div>
                        </div>
                        <span class="fa fa-remove pos-abs"></span>
                    </li>-->
                </ul>
            </div>
            <div class="footer dis-flex">
                <ul class="p-l-0 width-100p">
                    <li>
                        <p class="menus">
                            <span>
                                TOTAL
                            </span>
                            <span class="pull-right">&#8358; <span id="totalP">9480</span></span>
                        </p>
                    </li>
                    <li>
                        <p class="menus">
                            <span>
                                10% Service Charge
                            </span>
                            <span class="pull-right">&#8358; <span id="serviceCharge">9480</span></span>
                        </p>
                        <small>Cost for service & packaging</small>
                    </li>
                    <li>
                        <p class="menus">
                            <span>
                                Delivery Fee
                            </span>
                            <span class="pull-right">&#8358; <span id="deliveryFee">9480</span></span>
                        </p>
                        <small>Cost for delivering your product</small>
                    </li>
                    <li>
                        <p class="menus fw-700">
                            <span>
                                TOTAL
                            </span>
                            <span class="pull-right">&#8358; <span id="grandTP">9480</span></span>
                        </p>
                    </li>
                    <!--<li>
                        <a href="checkout.html" class="btn btn-success btn-block btn-cart btn-larger">Proceed To Checkout</a>
                    </li>-->
                </ul>
            </div>
        </div>
        <div class="empty_bag dis-flex">
            <div class="wrap text-center">
                <span class="fa fa-shopping-basket m-b-50" style="font-size: 150px;"></span>
                
                <h4 class="m-b-50 l-spacing-2">Your food basket is empty</h4>
            
                <h4 class="l-spacing-2">Use the search bar to ﬁnd<br> and add items to your basket</h4>
            </div>
        </div>
    </nav>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="/assets/js/picker.js"></script>
    <script src="/assets/js/picker.time.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>
        app.fecther();
        app.cartCtrl();
        app.switchForm();
    </script>
</body>

</html>