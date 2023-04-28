<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="{{ route('dashboard') }}"><img src="{{ asset('backend') }}/img/logo.png"
                alt=""></a>
        <a class="small_logo" href="{{ route('dashboard') }}"><img src="{{ asset('backend') }}/img/logo.png" alt=""
                style="width: 100px;"></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
{{--        <li class="">--}}
{{--            <a class="has-arrow" href="#" aria-expanded="false">--}}
{{--                <div class="nav_icon_small">--}}
{{--                    <img src="{{ asset('backend') }}/img/menu-icon/3.svg" alt="">--}}
{{--                </div>--}}
{{--                <div class="nav_title">--}}
{{--                    <span>Admin Info</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.auth.createAdmin') }}">Create Admin</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.auth.adminList') }}">Admin List</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}



        @if(Auth()->user()->access_label == 1)

        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('backend') }}/img/menu-icon/3.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Service Section</span>
                </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('create.service')}}">Create Service</a>
                </li>
                <li>
                    <a href="">Manage Service</a>
                </li>
            </ul>
        </li>
        @endif

    </ul>
</nav>
