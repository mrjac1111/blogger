@extends('dashboard.layouts.admin')

@section('content')
    <!-- Title -->
    <div class="row heading-bg bg-blue">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">User List</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                <li><a href="#"><span>users</span></a></li>
                <li class="active"><span>list</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>
    <!-- /Title -->
<div class="row">
    <!-- Basic Table -->
    <div class="col-sm-12">
        <div class="panel panel-default card-view">

            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap mt-40">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($users)
                                    <?php $count = 1; ?>
                                    @foreach($users as $user)

                                <tr>
                                    <td>{{$count++}}</td>
                                    <td><img height="50" src="{{$user->photo ? $user->photo->fileName : 'http://placehold.it/400x400'}}" ></td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><span class="label @if ($user->role->name==="Administrator")
                                                label-danger
                                            @elseif ($user->role->name==="Author")
                                                label-warning
                                            @elseif ($user->role->name==="Subscriber")
                                                label-info
                                            @endif

                                                ">{{$user->role->name}}</span> </td>
                                    <td>{{$user->is_active==1 ?'Active' : 'Not Active'}}</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                    <td>{{$user->updated_at->diffForHumans()}}</td>
                                    <td class="text-nowrap"><a href="{{route('dashboard.users.edit',$user->id)}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a> </td>
                                </tr>

                                @endforeach

                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Basic Table -->
</div>
@endsection