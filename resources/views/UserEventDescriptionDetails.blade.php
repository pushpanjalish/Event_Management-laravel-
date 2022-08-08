<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('UserDashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">AllEvents</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>View Events</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>View Booked Tickets</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">
                    <span>logout</span></a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row my-5">
                        <div class="col-12 text-center">
                            <img src="../{{$data1->event_pic}}" height="500px">
                        </div>
                        <div class="col-12 text-start">
                            <h1 class="my-2"><u>"{{$data1->event_name}}"</u></h1>
                            <p>Price:- <b class="text-danger">{{$data1->ticket_price}}</b></p>
                            <p>No of peoples accommodated:- <b class="text-danger">{{$data1->people_no}}</b></p>
                            <pre>{{$data1->event_des}}</pre>
                            <a class="w-100 btn btn-warning pay_now" type="submit" href="javascript:void(0)">Pay Now</a>
                            <!-- <button type="submit" class="pay_now">Pay Now</button> -->
                            <!-- <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="1280" data-id="2">Order Now</a>  -->
                            <!-- <a class="btn btn-primary pay_now" type="submit" href="javascript:void(0)">Pay Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
    $('body').on('click', '.pay_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_SX4SnqFa333Bol",
    "amount":`{{$data1->ticket_price}}`*100, // 2000 paise = INR 20
    "name": "Razorpay",
    "description": "Payment for "+`{{$data1->event_name}}`,
    "image": "//www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
    "handler": function (response){
    $.ajax({
    url: 'https://www.tutsmake.com/Demos/php/razorpay/payment-proccess.php',
    type: 'post',
    dataType: 'json',
    data: {
    razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
    },

    success: function (msg) {
    window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
    }
    });
    },
    "theme": {
    "color": "#528FF0"
    }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
    e.preventDefault();
    });
    </script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    
    <!-- font awesome script link -->
    <script src="https://kit.fontawesome.com/7bacdca6ee.js"></script>

</body>

</html>