@extends('layouts.master')


@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Daftar Karyawan</h3>
              </div>
            </div>

             <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Karyawan</h2>
                    <a href="{{ route('karyawan.create') }}" class="btn btn-primary pull-right">Tambah</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" >
                      <thead>
                        <tr>
                          <th width="30">No</th>
                          <th>Nama</th>
                          <th>NIP</th>
                          <th>Jabatan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($karyawan as $index => $karyawan)
                          <tr id="karyawan{{ $karyawan->id }}">
                            <td>{{ $index +1 }}</td>
                            <td>{{ $karyawan->nama }}</td>
                            <td>{{ $karyawan->nip }}</td>
                            <td>{{ $karyawan->jabatan }}</td>
                            <td>
                              <button class="btn btn-warning btn-detail open_modal" value="{{$karyawan->id}}">Edit</button>
                              <button class="btn btn-danger btn-delete delete-tag" value="{{$karyawan->id}}">Hapus</button>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection

@section('scripts')

  <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true,
              "columnDefs":[
                {
                "targets": [ 5 ],
                "searchable": false
                }
              ]
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->

@endsection