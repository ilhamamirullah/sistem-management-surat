@extends('layouts.master')

@section('linkcss')
  <!-- iCheck -->
  <link href="{{asset('/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
  <!-- Datatables -->
  <link href="{{asset('/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('content')
        <!-- page content -->
            <div class="page-title">
              <div class="title_left">
                <h3>Daftar Surat Masuk</h3>
              </div>
            </div>

             <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Client</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <a type="button" class="btn btn-primary btn-md" href="/gl/form_surat">Tambah Surat</a>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nomor Surat</th>
                          <th>Jenis Surat</th>
                          <th>Perihal</th>
                          <th>Client</th>
                          <th>Tanggal</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($surat as $index => $surats)
                          <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$surats->nomor_surat}}</td>
                            <td>
                              {{-- @foreach ($surats->jenis as $jeniss)
                                {{$jeniss->nama}}
                              @endforeach --}}
                            </td>
                            <td>{{$surats->perihal}}</td>
                            <td>

                            </td>
                            <td>{{$surats->tanggal}}</td>
                            <td>
                                <form action="#" method="post">
                                  {{ csrf_field() }}
                                  <a href="{{route('admin.print_surat', $surats->id)}}" target="blank" class="btn btn-info btn-xs">Print</a>
                                  <a href="#" class="btn btn-success btn-xs">Edit</a>
                                  <input type="submit" value="Hapus" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda Yakin Data ini Dihapus?')">
                                </form>
                              </td>
                          </tr>
                         @endforeach

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
        <!-- /page content -->
@endsection
@section('linkjs')
  <!-- iCheck -->
  <script src="/vendors/iCheck/icheck.min.js"></script>
  <!-- Datatables -->
  <script src="{{asset('/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
  <script src="{{asset('/vendors/jszip/dist/jszip.min.js')}}"></script>
  <script src="{{asset('/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
  <script src="{{asset('/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

@endsection
