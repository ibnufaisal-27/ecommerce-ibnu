<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="Ibnu Faisal - Ecommerce">
	<meta name="author" content="IbnuFaisal">
  <meta name="keyword" content="aplikasi ecommerce laravel, tutorial laravel basic, belajar laravel, panduan belajar laravel">
    
  	<!-- PERHATIKAN BAGIAN INI, APAPUN YANG DIAPIT OLEH AT@SECTION('TITLE') PADA VIEW YANG MENGGUNAKAN MASTER INI, MAKA AKAN ME-REPLACE CODE DIBAWAH -->
  	<!-- TITLE MENJADI KATA KUNCI, JADI JIKA MENGGUNAKAN KEY TITLE PADA AT@YIELD, MAKA GUNAKAN KEY TITLE PADA AT@SECTION -->
    @yield('title')

  <!-- UNTUK ME-LOAD ASSET DARI PUBLIC, KITA GUNAKAN HELPER ASSET() -->
	<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  
    <!-- AT@INCLUDE SAMA DENGAN FUNGSI AT@INCLUDE DI PHP, HANYA SAJA PENULISAN DIBLADE MENJADI INCLUDE, BERARTI KITA ME-LOAD FILE LAINNYA -->
  	<!-- KENAPA HEADER DIPISAHKAN? AGAR LEBIH RAPI SAJA JADI LEBIH MUDAH MAINTENANCENYA -->
    <!-- KETIKA MELOAD FILE BLADE, MAKA EKSTENSI .BLADE.PHP TIDAK PERLU DITULISKAN -->
    @include('layouts.module.header')
  
    <div class="app-body" id="dw">
        <div class="sidebar">
          
          	<!-- SIDEBAR JUGA KITA PISAHKAN CODENYA MENJADI FILE TERSENDIRI -->
            <!-- KETIKA MELOAD FILE BLADE, MAKA EKSTENSI .BLADE.PHP TIDAK PERLU DITULISKAN -->
            @include('layouts.module.sidebar')
          
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
      
      	<!-- BAGIAN INI AKAN DI-REPLACE SESUAI ISI YANG DIAPIT DARI @SECTION('CONTENT') -->
        @yield('content')
      
    </div>

    <footer class="app-footer">
        <div>
            <a href="https://coreui.io">Ibnu Faisal E-Commerce</a>
            <span>&copy; 2019 salmanWeb</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://coreui.io">CoreUI</a>
        </div>
    </footer>
    
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/coreui.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-tooltips.min.js') }}"></script>
    @yield('js')
</body>
</html>