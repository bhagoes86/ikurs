@extends('layouts.admin')

@section('content')
<div class="conter-wrapper home-container">
	<div class="row home-row">
		<div class="col-md-4 col-lg-3">
			<div class="home-stats">
				<a href="c3chart.html" class="stat hvr-wobble-horizontal">
					<div class=" stat-icon">
						<i class="fa fa-user-o fa-4x text-info "></i>
					</div>
					<div class=" stat-label">
						<div class="label-header">
							8
						</div>
						<div class="progress-sm progress ng-isolate-scope" value="progressValue" type="info">
							<div class="progress-bar progress-bar-info" role="progressbar"
							aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"  style="width: 100%;">
						</div>
					</div>
					<div class="clearfix stat-detail">
						<div class="label-body">
							<i class="fa fa-arrow-circle-o-right pull-right text-muted"></i>Pengajar
						</div>
					</div>
				</div>
			</a>					<a href="c3chart.html" class="stat hvr-wobble-horizontal">
			<div class=" stat-icon">
				<i class="fa fa-group fa-4x text-success "></i>
			</div>
			<div class=" stat-label">
				<div class="label-header">
					9
				</div>
				<div class="progress-sm progress ng-isolate-scope" value="progressValue" type="info">
					<div class="progress-bar progress-bar-success" role="progressbar"
					aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"  style="width: 100%;">
				</div>
			</div>
			<div class="clearfix stat-detail">
				<div class="label-body">
					<i class="fa fa-arrow-circle-o-right pull-right text-muted"></i>Peserta
				</div>
			</div>
		</div>
	</a>
  <a href="inbox.html" class="stat hvr-wobble-horizontal">
  	<div class=" stat-icon">
  		<i class="fa fa-archive fa-4x text-danger "></i>
  	</div>
  	<div class=" stat-label">
  		<div class="label-header">
  			4
  		</div>
  		<div class="progress-sm progress ng-isolate-scope" value="progressValue" type="info">
  			<div class="progress-bar progress-bar-danger" role="progressbar"
  			aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"  style="width: 100%;">
  		</div>
    	</div>
    	<div class="clearfix stat-detail">
    		<div class="label-body">
    			<i class="fa fa-arrow-circle-o-right pull-right text-muted"></i>Ruangan
    		</div>
    	</div>
    </div>
  </a>
</div>
</div>
<div class="col-md-4 col-lg-6">
	<div class="panel panel-primary">
    <div class="panel-heading ">
      <h3 class="panel-title"><i class="fa fa-calculator"></i> Transaksi Terbaru</h3>
    </div>
    <div class="panel-body bg-primary">
      <table class="table" >
        <thead>
          <th>No.</th>
          <th>ID Card</th>
          <th>Nama</th>
          <th>Tanggal Bayar</th>
          <th>Jumlah Bayar</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>IKU001</td>
            <td>Elise</td>
            <td>17/07/2017</td>
            <td>50.000</td>
          </tr>
          <tr>
            <td>2</td>
            <td>IKU002</td>
            <td>Xely</td>
            <td>17/07/2017</td>
            <td>100.000</td>
          </tr>
          <tr>
            <td>3</td>
            <td>IKU003</td>
            <td>Kely</td>
            <td>17/07/2017</td>
            <td>125.000</td>
          </tr>
          <tr>
            <td>4</td>
            <td>IKU004</td>
            <td>Elise</td>
            <td>17/07/2017</td>
            <td>75.000</td>
          </tr>
        </tbody>
      </table>
    </div>
	</div>
</div>
<div class="col-md-4 col-lg-3">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title"><i class="fa fa-archive"></i> Ruang</h3>
    </div>
    <div class="panel-body ">
      <table class="table">
        <thead>
          <th>No.</th>
          <th>ID</th>
          <th>Nama Ruangan</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>Ruang 1</td>
          </tr>
          <tr>
            <td>2</td>
            <td>2</td>
            <td>Ruang 2</td>
          </tr>
          <tr>
            <td>3</td>
            <td>3</td>
            <td>Ruang 3</td>
          </tr>
          <tr>
            <td>4</td>
            <td>4</td>
            <td>Ruang 4</td>
          </tr>
        </tbody>
      </table>
    </div>
	</div>
</div>
</div>
<div class="row home-row">
	<div class="col-lg-10 col-md-8">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title"> <i class="fa fa-user-o"></i> Peserta</h4>
      </div>
      <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th>No.</th>
              <th>ID Card</th>
              <th>Nama</th>
              <th>JK</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
              <th>No. Telp</th>
              <th>Kursus</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>IKU0001</td>
              <td>Elise Kreiss</td>
              <td>Wanita</td>
              <td>17/07/2017</td>
              <td>Jl. Pelabuan II No. 329 RT.01/02</td>
              <td>083818220137</td>
              <td>Akuntansi</td>
            </tr>
            <tr>
              <td>2</td>
              <td>IKU0002</td>
              <td>Xely Kreiss</td>
              <td>Pria</td>
              <td>17/07/2017</td>
              <td>Jl. Pelabuan II No. 329 RT.01/02</td>
              <td>083818220136</td>
              <td>Pajak</td>
            </tr>
          </tbody>
        </table>
      </div>
  	</div>
	</div>
  <div class="col-lg-2 col-md-4">
		<div class="todo-container panel panel-danger">
			<div class="panel-heading">

					<h4><i class="fa fa-tasks"></i>&nbsp;Kursus</h4>
			</div>
			<div class="panel-body bg-danger">
				<div class="todo-body">
					<div class="todo-list-wrap">
						<ul class="todo-list">
							<li class="">
								<label class="checkbox1" for="option1">
									<input id="option1" type="checkbox" class="">
									<span></span>
								</label>
								<span class="done-false">akuntansi.</span>
							</li>
							<li class="">
								<label class="checkbox1" for="option3">
									<input id="option3" type="checkbox" class="">
									<span></span>
								</label>
								<span class="done-false">ekonomi.</span>
							</li>
							<li class="">
								<label class="checkbox1" for="option4">
									<input id="option4" type="checkbox" class="">
									<span></span>
								</label>
								<span class="done-false">ekonomi islam.</span>
							</li>
							<li class="">
								<label class="checkbox1" for="option5">
									<input id="option5" type="checkbox" class="">
									<span></span>
								</label>
								<span class="done-false">pajak.</span>
							</li>
							<li class="">
								<label class="checkbox1" for="option2">
									<input id="option2" type="checkbox" class="">
									<span></span>
								</label>
								<span class="done-false">pajak 2</span>
							</li>
						</ul>
					</div>
					<form class="form-horizontal todo-from-bottom">
						<div class="row">
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="">
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit">Add</button>
									</span>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
