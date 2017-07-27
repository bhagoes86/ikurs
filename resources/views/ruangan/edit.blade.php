@extends('layouts.admin')

@section('content')
  <div class="conter-wrapper home-container">
    <div class="row home-row">
      <div class="col-md-6 col-lg-12">
        <ol class="breadcrumb no-bg no-m-t">
    			<li><i class="fa fa-home"></i></li>
    			<li>Administration</li>
    			<li>Ruangan</li>
          <li class="active"><a href="">Update </a></li>
    		</ol>
      </div>
    </div>
    <div class="row home-row">
      <div class="col-md-4 col-lg-3">
        <div class="home-stats">
          <a href="{{url('kursus')}}" class="stat hvr-wobble-horizontal">
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
                  Halaman untuk <b>"update"</b> ruangan yang akan diikuti oleh peserta
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row home-row">
      <div class="col-md-8 col-lg-9">
        <div class="panel panel-primary">
          <div class="panel panel-heading">
            <div class="panel-title">Update Ruangan</div>
          </div>
          {!! Form::model($ruangan, ['method' => 'PATCH', 'action' =>['ruanganController@update', $ruangan->id]]) !!}
            {{csrf_field()}}
          <div class="panel-body">

            <div class="form-group">
              {!! Form::label('id_card', 'ID Ruangan', ['class' => 'col-md-2 col-lg-2 control-label']) !!}
              <div class="col-md-10 col-lg-10">
                {!! Form::text('id_card', null,['class' => 'form-control']) !!}
              </div>
            </div><hr>
            <div class="form-group">
              {!! Form::label('nama_ruangan', 'Nama Ruangan', ['class' => 'col-md-2 col-lg-2 control-label']) !!}
              <div class="col-md-10 col-lg-10">
                {!! Form::text('nama_ruangan', null,['class' => 'form-control']) !!}
              </div>
            </div>
          </div>
          <div class="panel-footer clearfix">
              <button type="submit" name="button" class="btn btn-primary ">Update</button>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
      <div class="col-md-4 col-lg-3">
        <div class="panel panel-success">
          <div class="panel panel-heading">
            <div class="panel-title">List Ruangan Terbaru</div>
          </div>
          <div class="panel-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID Ruangan</th>
                  <th>Nama Ruangan</th>
                </tr>
              </thead>
              @if(!empty($ruangan_limit))
              <tbody>
                @foreach($ruangan_limit as $ruangan)
                <tr>
                  <td>{{ $ruangan->id_card }}</td>
                  <td>{{ $ruangan->nama_ruangan }}</td>
                </tr>
                @endforeach
              </tbody>
              @else
                Data Masih Kosong, Klik <a href="{{ url('ruangan/tambah') }}">disini</a> untuk menambahkan data kursus.
              @endif
            </table>
          </div>
          <div class="panel-footer clearfix">
              <a href="{{ url('ruangan') }}" name="button" class="btn btn-primary btn-outline ">List Ruangan Lengkap</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
