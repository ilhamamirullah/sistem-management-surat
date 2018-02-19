<!-- Modal (Pop up when detail button clicked) -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Detail Data Client</h4>
            </div>
            <div class="modal-body">
                <form id="frmclients" name="frmclients" class="form-horizontal" novalidate="">
                    <div class="form-group error">
                        <label for="nama" class="col-sm-3 control-label">Nama :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="nama" name="nama" placeholder="client" value="">
                        </div>
                    </div>
                    <div class="form-group error">
                        <label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="tanggal_lahir" name="tanggal_lahir" placeholder="client" value="">
                        </div>
                    </div>
                    <div class="form-group error">
                        <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="jenis_kelamin" name="jenis_kelamin" placeholder="client" value="">
                        </div>
                    </div>
                    <div class="form-group error">
                        <label for="agama" class="col-sm-3 control-label">Agama :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="nama" name="agama" placeholder="client" value="">
                        </div>
                    </div>
                    <div class="form-group error">
                        <label for="no_identitas" class="col-sm-3 control-label">No Identitas :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="no_identitas" name="no_identitas" placeholder="client" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-3 control-label">Alamat :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Description" value="">
                        </div>
                    </div>
                    <div class="form-group error">
                        <label for="no_telp" class="col-sm-3 control-label">No Telepon/HP :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="no_telp" name="no_telp" placeholder="client" value="">
                        </div>
                    </div>
                    <div class="form-group error">
                        <label for="email" class="col-sm-3 control-label">Email :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="email" name="email" placeholder="client" value="">
                        </div>
                    </div>
                    <div class="form-group error">
                        <label for="instansi" class="col-sm-3 control-label">Nama Instansi :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="instansi" name="instansi" placeholder="client" value="">
                        </div>
                    </div>
                    <div class="form-group error">
                        <label for="jabatan" class="col-sm-3 control-label">Jabatan :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="jabatan" name="jabatan" placeholder="client" value="">
                        </div>
                    </div>
                    <div class="form-group error">
                        <label for="alamat_instansi" class="col-sm-3 control-label">Alamat Instansi :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="alamat_instansi" name="alamat_instansi" placeholder="client" value="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
