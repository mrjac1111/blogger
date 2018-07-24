@extends('dashboard.layouts.admin')

@section('content')
<!-- Title -->
<div class="row heading-bg bg-blue">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-light">Create User</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="/">Dashboard</a></li>
            <li><a href="#"><span>users</span></a></li>
            <li class="active"><span>create</span></li>
        </ol>
    </div>
    <!-- /Breadcrumb -->
</div>
<!-- /Title -->
<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="form-wrap">
                        {!! Form::open(['method'=>'POST', 'action'=> 'DashboardUserController@store','files'=>true]) !!}


                                  <div class="form-group">
                                         {!! Form::label('name', 'Name:') !!}
                                         {!! Form::text('name', null, ['class'=>'form-control'])!!}
                                   </div>

                                  <div class="form-group">
                                         {!! Form::label('email', 'Email:') !!}
                                         {!! Form::email('email', null, ['class'=>'form-control'])!!}
                                   </div>
                        <div class="form-group">
                            {!! Form::label('role_id', 'Role:') !!}
                            {!! Form::select('role_id',[''=>'Choose Options'] + $roles, null, ['class'=>'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('is_active', 'Status:') !!}
                            {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'), 0, ['class'=>'form-control'])!!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password', ['class'=>'form-control'])!!}
                        </div>


                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Photo Upload</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="mt-40">
                                        <input type="file" id="input-file-now" name="photo_id" class="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>
                                     <div class="form-group">
                                        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                                     </div>

                            {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->
@endsection