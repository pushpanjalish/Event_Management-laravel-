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
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">AllEvents</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{url('AdminDashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>Add Events</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('ViewUsersList')}}">
                    <span>View Users</span></a>
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
                    <form method="post" class="my-5">
                        @csrf
                        <h1 class="text-danger my-2"><b>Add Event Details</b></h1>
                        <div class="form-outline mb-4">
                            <input type="text" name="event_name" placeholder="Event Name"id="form4Example1" class="form-control" />
                        </div>

                       
                        <div class="form-outline mb-4">
                            <input type="text" name="ticket_price" placeholder="Ticket price" id="form4Example2" class="form-control" />
                        </div>

                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" name="event_des" placeholder="Event Description" id="form4Example3" rows="4"></textarea>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" name="people_no" placeholder="No of peoples" id="form4Example2" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" name="event_pic" placeholder="Enter eventpic url" id="form4Example2" class="form-control" />
                        </div>
                       

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-danger btn-block mb-4">Add to Events</button>
                    </form>
                </div>
            </div>
        </div>          
    </div>
    <!-- End of Page Wrapper -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
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