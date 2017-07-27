@extends('layouts.admin')

@section('content')
  <div class="conter-wrapper home-container">
    <div class="row home-row">
      <div class="col-md-6 col-lg-12">
        <ol class="breadcrumb no-bg no-m-t">
    			<li><i class="fa fa-home"></i></li>
    			<li>Administration</li>
    			<li class="active"> <a href="{{ url('ruangan') }}">Ruangan</a></li>
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
                  Halaman untuk <b>"menampilkan"</b> <b>"mengubah"</b> dan <b>"menghapus"</b> ruangan yang sudah tersimpan didalam database.
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row home-row">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="panel-title">List Ruangan</div>
        </div>
        <div class="panel-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>ID Ruangan</th>
                <th>Nama Ruangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            @if(!empty($ruangan_list))
            <tbody>
              <?php $no=1; ?>
              @foreach($ruangan_page as $ruangan)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $ruangan->id_card }}</td>
                <td>{{ $ruangan->nama_ruangan }}</td>
                <td>
                  <a href="{{ url('ruangan/' .$ruangan->id. '/edit' )}}"><i class="fa fa-pencil"></i> Update</a> |
                  <a href="{{ route('ruangan.delete', $ruangan->id) }}"><i class="fa fa-trash"></i> Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
            @else
              Data Masih Kosong, Klik <a href="{{ url('ruangan/tambah') }}">disini</a> untuk menambahkan data kursus.
            @endif
          </table>
          <ul class="clearfix paging  ">
            {{ $ruangan_page->links()  }}
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
