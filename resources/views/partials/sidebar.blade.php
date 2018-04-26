@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>
            
            @can('users_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.permissions.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.users.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
           @endcan

            
            <!-- Menu Bar -->
             <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{url('/configuration')}}">
                    <i class="fa fa-cog"></i>
                    <span class="title">Configrution</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{url('/locations')}}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Location</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{url('/member')}}">
                    <i class="fa fa-users"></i>
                    <span class="title">Members</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{url('/voucher')}}">
                    <i class="fa fa-gift"></i>
                    <span class="title">Voucher</span>
                </a>
            </li>
            
             <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{url('/payment')}}">
                    <i class="fa fa-credit-card"></i>
                    <span class="title">Payment Update</span>
                </a>
            </li>
             <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{url('/amc')}}">
                    <i class="fa fa-cc-mastercard"></i>
                    <span class="title">AMC Update</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{url('/holiday')}}">
                    <i class="fa fa-plane"></i>
                    <span class="title">Holiday Request</span>
                </a>
            </li>
             <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{url('admin/customersupport')}}">
                    <i class="fa fa-commenting"></i>
                    <span class="title">Customer Support</span>
                </a>
            </li>

           <!--  Report Details -->

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-binoculars"></i>
                    <span class="title">All Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="#">
                            <i class="fa fa-child"></i>
                            <span class="title">
                                Member Report
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="#">
                            <i class="fa fa-credit-card"></i>
                            <span class="title">
                                AMC Report
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="#">
                            <i class="fa fa-credit-card-alt"></i>
                            <span class="title">
                                Payment Report
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
           <!--  end Report -->

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>
 
            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
