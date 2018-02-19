@extends('layouts.master')

@section('content')
  <div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="x_panel">
         <div class="x_title">
           <h2>Tambah Surat Masuk</h2>
           <div class="clearfix"></div>
         </div>
         <div class="x_content">
           <br/>

           <form action="/gl/form_surat_masuk" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
             {{ csrf_field() }}
                <div class="form-group">
                  <label for="tanggal" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <p>07-11-1994</p>
                  </div>
                </div>
             <div class="form-group">
               <label for="keterangan" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan<span class="required">*</span></label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                <p>ini adalah isi keterangan</p>
               </div>
             </div>
             <div class="form-group">
               <label for="ket" class="control-label col-md-3 col-sm-3 col-xs-12">image<span class="required">*</span></label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <img src="{{asset('image/rajonet.png')}}" class="img-responsive" alt="Responsive image">
               </div>
             </div>
             <div class="ln_solid"></div>
             <div class="form-group">
               <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                 <button class="btn btn-primary" type="reset">Reset</button>
                 <button type="submit" class="btn btn-success">Simpan</button>
               </div>
             </div>
           </form>
           <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
           <a class="btn btn-danger" href="/gl/daftar_surat_masuk">Cancel</a>
         </div>
         </div>
       </div>
     </div>
   </div>
@endsection
