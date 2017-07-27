@extends('layouts.admin')

@section('content')
  <div class="conter-wrapper home-container">
    <div class="row home-row">
      <div class="col-md-6 col-lg-12">
        <ol class="breadcrumb no-bg no-m-t">
    			<li><i class="fa fa-home"></i></li>
    			<li>Administration</li>
    			<li>Ruangan</li>
          <li class="active"><a href="{{url('ruangan/tambah')}}">Tambah Ruangan Baru</a></li>
    		</ol>
      </div>
    </div>
    <div class="row home-row">
      <div class="col-md-4 col-lg-3">
        <div class="home-stats">
          <a href="{{url('ruangan')}}" class="stat hvr-wobble-horizontal">
            <div class=" stat-icon">
              <i class="fa fa-check-square-o fa-4x text-info "></i>
            </div>
            <div class=" stat-label">
              <div class="label-header">
  							{{ $ruangan_count}}
  						</div>
  						<div class="progress-sm progress ng-isolate-scope" value="progressValue" type="info">
  							<div class="progress-bar progress-bar-info" role="progressbar"
  							aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"  style="width: 100%;">
  						  </div>
              </div>
    					<div class="clearfix stat-detail">
    						<div class="label-body pull-right text-muted">
    							<i class="fa fa-check "></i> Ruangan
    						</div>
    					</div>
  				  </div>
          </a>
        </div>
      </div>
      <div class="col-md-8 col-lg-9">
        <div class="home-stats">
          <div class="home-stats">
            <a href="" class="stat disabled_stat">
              <div class=" stat stat-label">
                <div class="">
                  Halaman Ruangan, <br>
                  Halaman untuk <b>"menambah"</b> ruangan yang akan diikuti oleh peserta
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row home-row">
        <div class="panel panel-primary">
          <div class="panel panel-heading">
            <div class="panel-title">Tambah Ruangan</div>
          </div>
          <form class="form-horizontal" action="{{url('ruangan')}}" method="post">
            {{csrf_field()}}
          <div class="panel-body">
            <div class="form-group">
              {!! Form::label('id_card', 'ID Ruangan', ['class' => 'col-md-2 col-lg-2 control-label']) !!}
              <div class="col-md-10 col-lg-10">
                <input type="text" class="form-control" name="id_card" id="id_card" placeholder="ID Ruangan" >
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('nama_ruangan', 'Nama Ruangan', ['class' => 'col-md-2 col-lg-2 control-label']) !!}
              <div class="col-md-10 col-lg-10">
                <input type="text" class="form-control" name="nama_ruangan" id="ruangan" placeholder="Nama Ruangan" >
              </div>
            </div>
          </div>
          <div class="panel-footer clearfix">
              <button type="submit" name="button" class="btn btn-primary ">Tambah Baru</button>
          </div>
          </form>
        </div>
      </div>
  </div>
@endsection
