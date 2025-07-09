<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Welcome <b>{{ auth()->user()->name }}</b></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                        <a class="dropdown-item" href="{{ url('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">HOME</div>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">CORE</div>
                            <a class="nav-link" href="{{ url('mabestni') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-fire"></i></div>
                                MABES TNI
                            </a>

                            <a class="nav-link" href="{{ url('tniad') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-road"></i></div>
                                TNI AD
                            </a>
                            <a class="nav-link" href="{{ url('tnial') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-ship"></i></div>
                                TNI AL
                            </a>
                            <a class="nav-link" href="{{ url('tniau') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-plane"></i></div>
                                TNI AU
                            </a>
                            <div class="sb-sidenav-menu-heading">ADDONS</div>
                            <a class="nav-link" href="{{ url('users') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Users
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
 
            <div id="layoutSidenav_content">
                <main>
 
                    @yield('content')
 
                </main>
 
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Website 2025</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/assets/demo/chart-area-demo.js"></script>
        <script src="/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="/js/datatables-simple-demo.js"></script>

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.2.3/js/dataTables.buttons.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.dataTables.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.html5.min.js"></script>
        
        
        
        
        
        
        
        
        <style>
            #datatablesSimple {
                font-size: 10pt !important;
            }
        </style>
        <script>
            new DataTable('#datatablesSimple', {
                // dom: 'Bftip',
                dom: 'lfrtipB',
                paging : false,
                searching : false,
                info: false,
                ordering: false,
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        className: 'btn btn-primary px-4 mt-2 mb-3 ',
                        text: '<i class="fa fa-file-pdf"></i> Export PDF',
                        titleAttr: 'PDF',

                    }
                ]
                
            });
        </script>
    </body>
</html>