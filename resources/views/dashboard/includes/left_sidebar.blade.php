<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li>
            <a  href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><i class="fa fa-user mr-10"></i>Users <span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
            <ul id="dashboard_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route("dashboard.users.index")}}">User List</a>
                </li>
                <li>
                    <a href="{{route("dashboard.users.create")}}">Create User</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
