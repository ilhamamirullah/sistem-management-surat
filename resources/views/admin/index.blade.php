@extends('layouts.master')
@section('linkcss')
  {{-- daterangepicker --}}
  <link href="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
@endsection
@section('content')
        <!-- page content -->
            {{-- <div class="row top_tiles"> --}}
              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-14">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">179</div>
                  <h3>Jumlah Surat</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-14">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count">179</div>
                  <h3>Jumlah Karyawan</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-14">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count">179</div>
                  <h3>Jumlah Client</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                {{-- <div class="x_panel">
                  <div class="x_title">
                    <h2>contoh</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    ksldfhkafhwkjewhfkjwh
                  </div>
                </div> --}}
              </div>
            </div>
            <!-- /page content -->
      @endsection

@section('linkjs')
  <!-- Chart.js -->
  {{-- <script src="/vendors/Chart.js/dist/Chart.min.js"></script> --}}
  <!-- jQuery Sparklines -->
  <script src="{{asset('/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
  <!-- Flot -->
  <script src="{{asset('/vendors/Flot/jquery.flot.js')}}"></script>
  <script src="{{asset('/vendors/Flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('/vendors/Flot/jquery.flot.time.js')}}"></script>
  <script src="{{asset('/vendors/Flot/jquery.flot.stack.js')}}"></script>
  <script src="{{asset('/vendors/Flot/jquery.flot.resize.js')}}"></script>
  <!-- Flot plugins -->
  <script src="{{asset('/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
  <script src="{{asset('/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
  <script src="{{asset('/vendors/flot.curvedlines/curvedLines.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{asset('/vendors/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
@endsection
