@extends('layouts.app')

@section('content')
<section class="col-md-3 col-md-offset-5 connectedSortable">
           <div class="box box-danger">
            <div class="box-header"><center>
               <h1 class="box-title">LOGIN</h1>
              <!-- tools box --></center>
            <br>
           
           <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12">
                                <input id="username" type="text" class="form-control" name="username" placeholder="Username">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block  btn-twitter">
                                    <i class="fa fa-btn fa-sign-in">&nbsp; LOGIN</i> 
                                </button>

                              
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>

@endsection