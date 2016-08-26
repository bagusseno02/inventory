@extends('user.layoutuser')
@section('content')
		 <!-- quick email widget -->
         <section class="col-lg-12 connectedSortable" style="background: #ffffff;">
           <div class="box box-info">
            <div class="box-header"><center>
              <i class="glyphicon glyphicon-save" style="font-size: 18px;"></i>

              <h3 class="box-title">Penerimaan Barang</h3>
              <!-- tools box --></center>
           
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>
          
          </section>
@endsection	