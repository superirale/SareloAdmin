<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sarelo</title>
        <!--my icons here -->
        <link rel="stylesheet" type="text/css" href="/assets/icon/font-awesome/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
        <!-- Main CSS here -->
        <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper clearfix">
            <header class="p-l-100 pos-fx">
                <!-- ===Nav bar starts here == -->
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand navbar-link" href="index.html">
                                <img src="/assets/img/logo/sarelo2.svg">
                            </a>
                            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav navbar-right">
                                
                                <li role="presentation">
                                    <span>Already have an Account?</span><br>
                                    <a href="/login" class="c-brand-purple"><span> Login</span></a>
                                </li>
                                <li>
                                    <div class="divider"></div>
                                </li>
                                <li role="presentation">
                                    <span>No Account?</span><br>
                                    <a href="/signup">
                                        <span>Sign Up</span>
                                    </a>
                                </li>
                                <li class="p-r-5 p-l-5">
                                    <button class="btn btn_cart btn_action f-18 w-500" id="cart_action">
                                        <i class="fa fa-shopping-basket m-r-5"></i>
                                        <!--<img src="/assets/img/icon/Sarelo-basket.png" width="27px">-->  My Basket
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <!-- ===Nav bar endss here == -->
            </header>
            <section class="p-l-100">
                <div class="contents m-t-160 m-b-100 width-50p">
                    <h1 class="text-left l-spacing-2 fw-900 line-40 w-600">We will buy & deliver <span class="c-brand-green">fresh<br> foodstuff!</span> from the market to you.</h1>
                    <br><br><br>
                    <form class="query pos-rel">
                        <input class="form-control search p-r-20 p-l-40" type="search" placeholder="What do you want to buy?...." id="querySelector">
                        <div class="update"> 
                            
                        </div>
                    </form>
                </div>
            </section>
        </div>

        <!--sidebar menu on the right hand -->
        <aside class="sidebar" id="sidebar">
            <!--<div class="header">
                <h3>MY FOOD BASKET 
                    <span class="pull-right items_container">
                    <span id="items">0</span>
                    <span class="t-u-c">items</span>
                    </span>
                </h3>
            </div>-->
            <div class="full_bag">
                <div class="body" id="basket">
                    <ul class="p-l-0 list-style-none" id="basketList">
                        
                    </ul>
                </div>
                <div class="footer">
                    <ul class="p-l-0 list-style-none">
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
                        <li>
                            <a href="/checkout/billing-address" class="btn btn-block btn_cart">Proceed To Checkout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="empty_bag dis-flex">
                <div class="wrap text-center">
                    <span class="fa fa-shopping-basket m-b-50" style="font-size: 150px;"></span>
                    <!--<img src="/assets/img/icon/Sarelo-basket.png" class="width-200">-->
                    
                    <h4 class="m-b-50 l-spacing-2">Your food basket is empty</h4>
                
                    <h4 class="l-spacing-2">Use the search bar to ﬁnd<br> and add items to your basket</h4>
                </div>
            </div>
        </aside>

        <!--overlay to call -->
        <div id="overlay">
        </div>

        <!-- jQuery -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
        <!-- Main JS -->
        <script src="/assets/js/main.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script>
             $(document).ready(function(){
                app.fecther();
                app.cartCtrl();
                $("#cart_action, #overlay").on("click", function(){
                    $("html").toggleClass("open");
                    //if this is a button toggle it's content....
                    /*if (this.id == "cart_action") {
                       $(this).html("<i class='fa fa-remove'></i> Close");
                       $(this).html("<i class='fa fa-shopping-basket m-r-5'></i> My Basket");
                       true ? a : b;
                    }*/
                });
             });
         </script>
    </body>
</html>