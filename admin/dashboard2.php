<?php
include('inc/header.php');

?>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
<?php
include('inc/nav.php');

?>




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                   <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <!-- <li class="hide-phone app-search">
                                <form>
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li> -->

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">1</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                       <!--  <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Notification</h5> -->
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>

                                      
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-speech-bubble noti-icon"></i>
                                    <span class="badge badge-custom badge-pill noti-icon-badge">1</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                       <!--  <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Chat</h5> -->
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>

                                       
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/photo.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Emmanuel John <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-help"></i> <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-lock"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item active">Welcome to Highdmin admin panel !</li> -->
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Manage Tickets</h4>

                                    <div class="text-center mt-4 mb-4">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box widget-flat border-custom bg-custom text-white">
                                                    <i class="fi-tag"></i>
                                                    <h3 class="m-b-10">25563</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Total tickets</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-primary widget-flat border-primary text-white">
                                                    <i class="fi-archive"></i>
                                                    <h3 class="m-b-10">6952</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Pending Tickets</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box widget-flat border-success bg-success text-white">
                                                    <i class="fi-help"></i>
                                                    <h3 class="m-b-10">18361</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Closed Tickets</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-danger widget-flat border-danger text-white">
                                                    <i class="fi-delete"></i>
                                                    <h3 class="m-b-10">250</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Deleted Tickets</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <table class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap" cellspacing="0" width="100%" id="datatable">
                                        <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>Requested By</th>
                                            <th>Subject</th>
                                            <th>Assignee</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Due Date</th>
                                            <th class="hidden-sm">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td><b>#1256</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">George A. Llanes</span>
                                                </a>
                                            </td>

                                            <td>
                                                Support for theme
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-secondary">Low</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-success">Open</span>
                                            </td>

                                            <td>
                                                2017/04/28
                                            </td>

                                            <td>
                                                2017/04/28
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#2542</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Jose D. Delacruz</span>
                                                </a>
                                            </td>

                                            <td>
                                                New submission on your website
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-9.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-warning">Medium</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-secondary">Closed</span>
                                            </td>

                                            <td>
                                                2008/04/25
                                            </td>

                                            <td>
                                                2008/04/25
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#320</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Phyllis K. Maciel</span>
                                                </a>
                                            </td>

                                            <td>
                                                Verify your new email address!
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-danger">High</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-success">Open</span>
                                            </td>

                                            <td>
                                                2017/04/20
                                            </td>

                                            <td>
                                                2017/04/25
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#1254</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Margeret V. Ligon</span>
                                                </a>
                                            </td>

                                            <td>
                                                Your application has been received!
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-danger">High</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-secondary">Closed</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#1020</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-9.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Erwin E. Brown</span>
                                                </a>
                                            </td>

                                            <td>
                                                A new rating has been received
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-1.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-warning">Medium</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-secondary">Closed</span>
                                            </td>

                                            <td>
                                                2013/08/11
                                            </td>

                                            <td>
                                                2013/08/30
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#854</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">William L. Trent</span>
                                                </a>
                                            </td>

                                            <td>
                                                Your Profile has been accepted
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-danger">High</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-success">Open</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#9501</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Amy R. Barnaby</span>
                                                </a>
                                            </td>

                                            <td>
                                                Homeworth for your property increased
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-secondary">Low</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-success">Open</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#3652</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Jessica T. Phillips</span>
                                                </a>
                                            </td>

                                            <td>
                                                Item Support Message sent
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-9.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-warning">Medium</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-secondary">Closed</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#9852</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Debra J. Wilson</span>
                                                </a>
                                            </td>

                                            <td>
                                                Your item has been updated!
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-danger">High</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-success">Open</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#3652</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Luke J. Sain</span>
                                                </a>
                                            </td>

                                            <td>
                                                Your password has been reset
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-secondary">Low</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-success">Open</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#1352</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Karen R. Doyle</span>
                                                </a>
                                            </td>

                                            <td>
                                                Question regarding your Bootstrap Theme
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-danger">High</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-success">Open</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#3562</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Freddie J. Plourde</span>
                                                </a>
                                            </td>

                                            <td>
                                                Security alert for my account
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-secondary">Low</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-success">Open</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#3658</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-9.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Darrell J. Cook</span>
                                                </a>
                                            </td>

                                            <td>
                                                Christopher S. Ahmad
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-warning">Medium</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-secondary">Closed</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#2251</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Mark C. Diaz</span>
                                                </a>
                                            </td>

                                            <td>
                                                Verify your new email address!
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-danger">High</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-success">Open</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>#3654</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                    <span class="ml-2">Robert K. Joseph</span>
                                                </a>
                                            </td>

                                            <td>
                                                Support for theme
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                                </a>
                                            </td>

                                            <td>
                                                <span class="badge badge-secondary">Low</span>
                                            </td>

                                            <td>
                                                <span class="badge badge-success">Open</span>
                                            </td>

                                            <td>
                                                01/04/2017
                                            </td>

                                            <td>
                                                21/05/2017
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
            });
        </script>

    </body>

<!-- Mirrored from coderthemes.com/highdmin/default/apps-tickets.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 10:32:38 GMT -->
</html>