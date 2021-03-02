<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from atmos.atomui.com/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Feb 2021 16:40:58 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="author" />
    <title>{{env('APP_NAME')}} | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">
    <link rel='stylesheet' href="{{asset('assets/css/pace.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/css/pace.min.js')}}" />
    <!--vendors-->
    <link rel='stylesheet' href="{{asset('assets/css/vendor.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/css/vendor-addon.css')}}" />

    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
    <!-- <link rel='stylesheet' href="{{asset('assets/css/jost.css')}}" /> -->
    <link rel='stylesheet'
        href='https://d33wubrfki0l68.cloudfront.net/css/04cc97dcdd1c8f6e5b9420845f0fac26b54dab84/default/assets/fonts/jost/jost.css' />
    <!--Material Icons-->
    <link rel='stylesheet' type='text/css'
        href='https://d33wubrfki0l68.cloudfront.net/css/548117a22d5d22545a0ab2dddf8940a2e32c04ed/default/assets/fonts/materialdesignicons/materialdesignicons.min.css' />
    <!-- <link rel='stylesheet' href="{{asset('assets/css/materialdesignicons.min')}}" /> -->
    <link rel='stylesheet' href="{{asset('assets/css/admin.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/css/theme-default.min.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/css/datatable.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body class="sidebar-pinned page-home">
    <aside class="admin-sidebar">
        <div class="admin-sidebar-brand">
            <!-- begin sidebar branding-->
            <img class="admin-brand-logo" src="{{url('assets/img/logo.png')}}" width="40" alt="atmos Logo">
            <span class="admin-brand-content font-secondary"><a href='{{url("/home")}}'> {{env('APP_NAME')}}</a></span>
            <!-- end sidebar branding-->
            <div class="ml-auto">
                <!-- sidebar pin-->
                <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
                <!-- sidebar close for mobile device-->
                <a href="#" class="admin-close-sidebar"></a>
            </div>
        </div>
        <div class="admin-sidebar-wrapper js-scrollbar">
            @include('Admin.Layout.sidebar')
        </div>

    </aside>
    <main class="admin-main">
        <!--site header begins-->
        <header class="admin-header">

            <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

            <nav class=" ml-auto">
                <ul class="nav align-items-center">
                    
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-sm avatar-online">
                                <span class="avatar-title rounded-circle bg-dark">V</span>

                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right">
                            <!-- <a class="dropdown-item" href="{{ url('/reset-password') }}"> Add Account -->
                            </a>

                            <a class="dropdown-item" href="{{ url('admin/my-profile') }}"> My Profile </a>
                            <a class="dropdown-item" href="{{ url('admin/reset-password') }}"> Reset Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('logout') }}"> Logout</a>
                        </div>
                    </li>

                </ul>

            </nav>
        </header>
        <!-- Modal -->
        <div class="modal fade modal-slide-right" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="demoLabel">Demos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://atmos.atomui.com/demos.html" height="100%" width="100%" frameborder="0"></iframe>
                    </div>
                    <div class="modal-footer">
                        <div class="text-muted"><i class="mdi mdi-information"></i>Demos will open in new tab</div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')

    </main>


    
    <script src="{{asset('assets/js/vendors.js')}}"></script>

    <!--page specific scripts for demo-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script> -->
    <!-- <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-66116118-3');
    </script> -->
    <script src="{{asset('assets/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/dashboard-01.js')}}"></script>
    <script src="{{asset('assets/js/vendor.js')}}"></script>
    <script src="{{asset('assets/js/jquery.form-validator.min.js')}}"></script>

    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/form-validation.js')}}"></script>
</body>

<!-- Mirrored from atmos.atomui.com/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Feb 2021 16:42:18 GMT -->

</html>