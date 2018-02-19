<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
	{!! Form::label('nama', 'Nama', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('nama', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
	{!! Form::label('nip', 'NIP', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('nip', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
	{!! Form::label('jabatan', 'Jabatan', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('jabatan', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
	{!! Form::label('alamat', 'Alamat', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('alamat', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-3">
		{!! Form::submit('Simpan', ['class'=>'btn btn-success']) !!}
		<a href="{{ url('/admin/karyawan') }}"><button type="button" class="btn btn-danger">Batal</button></a>
	</div>
</div>