@extends('admin.layoutadmin')
@section('content')
	 <!-- quick email widget -->
         <section class="col-lg-12 connectedSortable" style="background: #ffffff;">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <center><h3 class="box-title"><i class="glyphicon glyphicon-shopping-cart"  style="font-size: 18px;"></i>&nbsp;DATA BARANG</h3></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="kodeMaterial" class="col-sm-2 control-label" style="text-align: left">Kode Material</label>

                  <div class="col-sm-10">
                    <input type="inputKodeMaterial" class="form-control" id="inputKodeMaterial" placeholder="Kode Material">
                  </div>
                </div>
                <div class="form-group">
                  <label for="namaMaterial" class="col-sm-2 control-label" style="text-align: left">Nama Material</label>

                  <div class="col-sm-10">
                    <input type="namaMaterial" class="form-control" id="namaMaterial" placeholder="Nama Material">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Ukuran" class="col-sm-2 control-label" style="text-align: left">Ukuran</label>

                  <div class="col-sm-10">
                    <input type="ukuran" class="form-control" id="ukuran" placeholder="Ukuran">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kodeSatuan" class="col-sm-2 control-label" style="text-align: left">Kode Satuan</label>

                  <div class="col-sm-10">
                    <input type="kodeSatuan" class="form-control" id="kodeSatuan" placeholder="Kode Satuan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="hargaMaterial" class="col-sm-2 control-label" style="text-align: left">Harga Material</label>

                  <div class="col-sm-10">
                    <input type="hargaMaterial" class="form-control" id="hargaMaterial" placeholder="Harga Material">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kodeSusut" class="col-sm-2 control-label" style="text-align: left">Kode Susut</label>

                  <div class="col-sm-10">
                    <input type="kodeSusut" class="form-control" id="kodeSusut" placeholder="Kode Susut">
                  </div>
                </div>
                
              <!-- /.box-body --><center>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-center"><i class="fa fa-plus">&nbsp;TAMBAHKAN</i></button>
              </div>
              <!-- /.box-footer -->
              </center>
            </form>


          </section>
@endsection	