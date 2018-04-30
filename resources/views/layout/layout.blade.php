<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<title>Hotsale</title>

<!-- vendor css -->
<link href="./lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="./lib/Ionicons/css/ionicons.css" rel="stylesheet" />
<link href="./lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
<link href="./lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet" />
<link href="./lib/select2/css/select2.min.css" rel="stylesheet" />

<!-- Bracket CSS -->
<link rel="stylesheet" href="./css/bracket.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

  <body class="br-simple-white">

    @yield('content')

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="pd-15 bg-purple bg-mantle rounded" style="width: 100%">
        <ul class="nav nav-white-800 flex-column flex-md-row">
          <h4 class="mg-b-0 tx-uppercase tx-bold tx-spacing--2 tx-inverse mg-r-20 mg-l-10 pd-y-6 tx-poppins">HOTSALE</h4>
          <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('produk')}}">Produk</a></li>
        </ul>
      </div>
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <script src="./lib/jquery/jquery.js"></script>
    <script src="./lib/popper.js/popper.js"></script>
    <script src="./lib/bootstrap/bootstrap.js"></script>
    <script src="./lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="./lib/moment/moment.js"></script>
    <script src="./lib/jquery-ui/jquery-ui.js"></script>
    <script src="./lib/peity/jquery.peity.js"></script>
    <script src="./lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="./lib/select2/js/select2.min.js"></script>

    <script src="./js/bracket.js"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1199px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1199px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1200px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>
</html>