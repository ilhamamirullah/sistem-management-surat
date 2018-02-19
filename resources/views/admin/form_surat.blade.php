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
                     <h2>Tulis Surat</h2>
                     <div class="clearfix"></div>
                   </div>
                   <div class="x_content">
                     <br/>
                     <form id="demo-form2" action="/gl/form_surat" method="post" data-parsley-validate class="form-horizontal form-label-left">
                       {{ csrf_field() }}
                      <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_surat">Jenis Surat<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">

                           <select class="select2_single form-control" id="jenis_surat" name="jenis_surat">
                             <option></option>
                             @foreach($macam as $jenis)
                              <option value="{{ $jenis->kode }}">{{ $jenis->nama }}</option>
                             @endforeach
                           </select>
                        </div>
                       </div>
                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lingkup-surat">Lingkup Surat<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <!-- <textarea name="isis" id="isis"></textarea> -->
                           <select class="select2_single form-control" id="lingkup_surat" name="lingkup_surat">
                            <option></option>
                             <option value="A">Internal</option>
                             <option value="B">External</option>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_perusahaan">Nama Perusahaan <span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <select class="select2_single form-control" id="nama_perusahaan" name="nama_perusahaan">
                            <option></option>
                             <option value="RJI">Rajonet Indonesia</option>
                             <option value="SCH">Skularsi</option>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="nomor_surat" class="control-label col-md-3 col-sm-3 col-xs-12">No. Surat</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="nomor_surat" value="null" class="form-control col-md-7 col-xs-12" type="text" name="nomor_surat" readonly="">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="perihal" class="control-label col-md-3 col-sm-3 col-xs-12">Perihal</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="perihal" class="form-control col-md-7 col-xs-12" type="text" name="perihal">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="lampiran" class="control-label col-md-3 col-sm-3 col-xs-12">Lampiran</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="lampiran" class="form-control col-md-7 col-xs-12" type="text" name="lampiran">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="client" class="control-label col-md-3 col-sm-3 col-xs-12">Client</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <select id="client" class="select2_single form-control" tabindex="-1" name="client">
                            <option></option>
                            @foreach($clients as $client)
                              <option value="{{ $client->id }}">{{ $client->nama }}</option>
                            @endforeach
                          </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="asal_client" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Instansi Client</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="asal_client" class="form-control col-md-7 col-xs-12" type="text" name="asal_instansi" readonly="">
                         </div>
                       </div>
                          <div class="form-group">
                            <label for="tanggal_awal" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              {{-- <div class="input-group date" id="tanggal_awal">
                                  <input type="text" class="form-control" name="tanggal" id="tgl" value="2012-12-12">
                                  <span class="input-group-addon">
                                     <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                              </div> --}}

                              <select name='tanggal' id="tgl" class="day form-control" style="width: auto; display: inline-block;">
                                      <option value='{{date("d")}}' selected>{{date("d")}}</option>
                                      @for($n=1; $n<=31; $n++)
                                        <option value='{{$n}}'>{{$n}}</option>
                                      @endfor
                              </select>&nbsp;&nbsp;
                              <select name='bulan' id="bln" class="month form-control" style="width: auto; display: inline-block;">
                                      <option value='{{$rmw_bln[date("n")]}}' selected>{{$bln[date("n")]}}</option>
                                      @for($n=1; $n<=12; $n++)
                                        <option value='{{$rmw_bln[$n]}}'>{{$bln[$n]}}</option>
                                      @endfor
                              </select>&nbsp;&nbsp;
                              <select name='tahun' id="thn" class="year form-control" style="width: auto; display: inline-block;">
                                      <option value='{{date("Y")}}' selected>{{date("Y")}}</option>
                                      @for($n=2000; $n<=date("Y"); $n++)
                                        <option value='{{$n}}'>{{$n}}</option>
                                      @endfor
                              </select>&nbsp;&nbsp;

                            </div>
                          </div>

                        <div class="form-group">
                         <label for="isi" class="control-label col-md-3 col-sm-3 col-xs-12">Isi Surat</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea class="resizable_textarea form-control" name="isi_surat" id="isi_surat" placeholder="Masukan Isi surat" style="margin: 0px -28px 0px 0px; height: 80px; width: 572px;"></textarea>
                         </div>
                       </div>

{{--
                          <div class="form-group">
                            <label for="tanggal_awal" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Akhir</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="input-group date" id="tanggal_akhir">
                                  <input type="text" class="form-control" disabled="disabled">
                                  <span class="input-group-addon" disabled="disabled">
                                     <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                              </div>
                            </div>
                          </div> --}}

                       <div class="ln_solid"></div>
                       <div class="form-group">
                         <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <button class="btn btn-primary" type="button">Cancel</button>
                           <button class="btn btn-primary" type="reset">Reset</button>
                           <button type="submit" class="btn btn-success">Simpan</button>
                         </div>
                       </div>
                     </form>
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
      format: 'YYYY-MM-DD',
    //   onSelect: function(dateText, inst) {
    //   $("input[name='tanggal']").val(dateText);
    // }
  });

  $(document).ready(function() {
          $('#single_cal3').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_3"
          }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
          });

          $(".select2_single").select2({
            // placeholder: "Select a client",
            allowClear: true
          });

          $(document).on('change','#client',function(){
            // console.log("coba");

            var id_client=$(this).val();
            var div=$(this).parent().parent().parent();
            var b=$(this).parent().parent().parent();

            $.ajax({
              type:'get',
              url:'{!! URL::to('gl/asalClient') !!}',
              data:{'id':id_client},
              dataType:'json',
              success:function(data){
                // console.log("isinya");
                // console.log(data.instansi);

                b.find('#asal_client').val(data.instansi);
              },
              error:function(){

              }
            });


          });

          $(document).on('change','#jenis_surat',function(){
            var id_jenis=$(this).val();
            var a=$(this).parent().parent().parent();

            var op="";

            $.ajax({
              type:'get',
              url:'{!! URL::to('gl/isiSurat') !!}',
              data:{'kode':id_jenis},
              dataType:'json',
              success:function(data){
                // console.log("isinya");
                // console.log(data.ket);

                a.find('#isi_surat').val(data.ket);
              },
              error:function(){

              }
            });
            // console.log(id_jenis);
          });

          $(document).on('change','#nama_perusahaan',function(){
            var id_perusahaan=$(this).val();
            // console.log(id_perusahaan);
          });

          $(document).on('change','#tgl',function(){
            var id_tgl=$(this).val();
            $("input[name='tanggal']").val(id_tgl);
          });

          var $nomor = $('#lingkup_surat,#jenis_surat,#nama_perusahaan,#tgl,#bln,#thn');
         $nomor.on('change',function(){
           $('#nomor_surat').val($nomor.eq(1).val()+'-'+'1'+'/'+$nomor.eq(0).val()+'/'+$nomor.eq(2).val()+'/'+$nomor.eq(3).val()+'/'+$nomor.eq(4).val()+'-'+$nomor.eq(5).val());
         });
         });


  //untuk preview image sebelum upload
  // function previewImages() {
  //     var $preview = $('#preview').empty();
  //     if (this.files) $.each(this.files, readAndPreview);
  //     function readAndPreview(i, file) {
  //       if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
  //         return alert(file.name +" is not an image");
  //       } // else...
  //       var reader = new FileReader();
  //       $(reader).on("load", function() {
  //         $preview.append($("<img/>", {src:this.result, height:100}));
  //       });
  //       reader.readAsDataURL(file);
  //     }
  //   }
  //   $('#file-input').on("change", previewImages);
  </script>
@endsection
