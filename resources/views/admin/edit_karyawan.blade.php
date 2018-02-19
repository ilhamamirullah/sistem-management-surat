@extends('layouts.master')
@section('linkcss')
  <!-- iCheck -->
  <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-wysiwyg -->
  <link href="/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
  <!-- Switchery -->
  <link href="/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
  <!-- starrr -->
  <link href="/vendors/starrr/dist/starrr.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- bootstrap-datetimepicker -->
  <link href="/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <!-- Ion.RangeSlider -->
  <link href="/vendors/normalize-css/normalize.css" rel="stylesheet">
  <link href="/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
  <link href="/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
  <!-- Bootstrap Colorpicker -->
  <link href="/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
  <link href="/vendors/cropper/dist/cropper.min.css" rel="stylesheet">
@endsection
@section('content')
  <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_panel">
                   <div class="x_title">
                     <h2>Edit Data Karyawan</h2>
                     <div class="clearfix"></div>
                   </div>
                   <div class="x_content">
                     <br/>
                     <form action="{{route('admin.edit_karyawan', $karyawan->id)}}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                       {{ csrf_field() }}
                       <div class="form-group">
                         <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Karyawan <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="nama" class="form-control col-md-7 col-xs-12" required="required" type="text" name="nama" value="{{$karyawan->nama}}">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="nip" class="control-label col-md-3 col-sm-3 col-xs-12">NIP <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="nip" class="form-control col-md-7 col-xs-12" type="text" name="nip" required="required" value="{{$karyawan->nip}}">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="jabatan" class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="jabatan" class="form-control col-md-7 col-xs-12" type="text" name="jabatan" value="{{$karyawan->jabatan}}">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="alamat" class="form-control col-md-7 col-xs-12" type="text" name="alamat" required="required" value="{{$karyawan->alamat}}">
                         </div>
                       </div>

                       <div class="ln_solid"></div>
                       <div class="form-group">
                         <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <button type="submit" class="btn btn-success">Perbaharui</button>
                         </div>
                       </div>
                     </form>
                     <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                     <a class="btn btn-danger" href="/gl/daftar_karyawan">Cancel</a>
                   </div>
                   </div>
                 </div>
               </div>
             </div>
@endsection
@section('linkjs')
  <!-- bootstrap-progressbar -->
  <script src="/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="/vendors/iCheck/icheck.min.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="/vendors/moment/min/moment.min.js"></script>
  <script src="/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap-wysiwyg -->
  <script src="/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
  <script src="/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
  <script src="/vendors/google-code-prettify/src/prettify.js"></script>
  <!-- jQuery Tags Input -->
  <script src="/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
  <!-- Switchery -->
  <script src="/vendors/switchery/dist/switchery.min.js"></script>
  <!-- Select2 -->
  <script src="/vendors/select2/dist/js/select2.full.min.js"></script>
  <!-- Parsley -->
  <script src="/vendors/parsleyjs/dist/parsley.min.js"></script>
  <!-- Autosize -->
  <script src="/vendors/autosize/dist/autosize.min.js"></script>
  <!-- jQuery autocomplete -->
  <script src="/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
  <!-- starrr -->
  <script src="/vendors/starrr/dist/starrr.js"></script>
  <!-- bootstrap-datetimepicker -->
  <script src="/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <!-- Ion.RangeSlider -->
  <script src="/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
  <!-- Bootstrap Colorpicker -->
  <script src="/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <!-- jquery.inputmask -->
  <script src="/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
  <!-- jQuery Knob -->
  <script src="/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- Cropper -->
  <script src="/vendors/cropper/dist/cropper.min.js"></script>
  <!-- Initialize datetimepicker -->
  <script>
  $('#tanggal_awal').datetimepicker({
      format: 'YYYY-MM-DD'
  });

  $(document).ready(function() {
          $('#single_cal3').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_3"
          }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
          });

          $(".select2_single").select2({
            placeholder: "Select a client",
            allowClear: true
          });

          });

  //untuk preview image sebelum upload
  function previewImages() {
      var $preview = $('#preview').empty();
      if (this.files) $.each(this.files, readAndPreview);
      function readAndPreview(i, file) {
        if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
          return alert(file.name +" is not an image");
        } // else...
        var reader = new FileReader();
        $(reader).on("load", function() {
          $preview.append($("<img/>", {src:this.result, height:100}));
        });
        reader.readAsDataURL(file);
      }
    }
    $('#file-input').on("change", previewImages);
  </script>
@endsection
