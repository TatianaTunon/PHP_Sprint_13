

@extends('layouts.partials.head')
@extends('layouts.partials.footer')

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <div class="col-md-12 text-center">
                    <h1 class="text-white">Hotel California</h1>
                </div>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-220">
                        <img src="images/HotelCalifornia.jpg" alt="" />
                    </div>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                        <a href="{{ route('reservas.index') }}">
                                <i class="fas fa-hotel"></i>Reservas</a>
                        </li>
                        <li>
                        <a href="{{ route('empleats.index') }}">
                                <i class="fas fa-user"></i>Empleats</a>
                        </li>
                        <li>
                            <a href="{{ route('departaments.index') }}">
                                <i class="fas fa-briefcase"></i>Departaments</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

<!-- PAGE CONTAINER-->
<div class="page-container2">
<!-- HEADER DESKTOP-->
<header class="header-desktop2">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap2">
                <div class="logo d-block d-lg-none">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                    </a>
                </div>
                <div class="header-button2">
                    <div class="header-button-item js-item-menu">
                        <i class="zmdi zmdi-search"></i>
                        <div class="search-dropdown js-dropdown">
                            <form action="">
                                <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                <span class="search-dropdown__icon">
                                    <i class="zmdi zmdi-search"></i>
                                </span>
                            </form>
                        </div>
                    </div>
                    <div class="header-button-item has-noti js-item-menu">
                        <i class="zmdi zmdi-notifications"></i>
                        <div class="notifi-dropdown js-dropdown">
                            <div class="notifi__title">
                                <p>You have 3 Notifications</p>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c1 img-cir img-40">
                                    <i class="zmdi zmdi-email-open"></i>
                                </div>
                                <div class="content">
                                    <p>You got a email notification</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c2 img-cir img-40">
                                    <i class="zmdi zmdi-account-box"></i>
                                </div>
                                <div class="content">
                                    <p>Your account has been blocked</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c3 img-cir img-40">
                                    <i class="zmdi zmdi-file-text"></i>
                                </div>
                                <div class="content">
                                    <p>You got a new file</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__footer">
                                <a href="#">All notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-button-item mr-0 js-sidebar-btn">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER DESKTOP-->

<!-- BREADCRUMB-->
<section class="au-breadcrumb m-t-75">
<x-app-layout>
    <x-slot name="header"></x-slot>
</x-app-layout>
</section>
<!-- END BREADCRUMB-->
<section class="au-breadcrumb m-t-75">
</section>
            <!-- STATISTIC-->
<section class="statistic">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-md-6 col-lg-4">
                @if(Auth::user()->id <= 2 )
                    <div class="statistic__item">
                       <a href="{{ route('reservas.create') }}">
                        <h2 class="text">Nueva Reserva</h2>
                        <div class="icon">
                            <i class="zmdi zmdi-hotel"></i></a>
                        </div>
                    </div>
                @endif
                </div>
                <div class="col-md-6 col-lg-4">
                @if(Auth::user()->id == 1 )
                    <div class="statistic__item">
                    <a href="{{ route('empleats.create') }}">
                        <h2 class="text">Nuevo Empleado</h2>
                        <div class="icon">
                            <i class="fa fa-user"></i></a>
                        </div>
                    </div>
                @endif
                </div>
                <div class="col-md-6 col-lg-4">
                @if(Auth::user()->id <= 2 )
                    <div class="statistic__item">
                    <a href="{{ route('departaments.create') }}">
                        <h2 class="text">Nuevo Departamento</h2>
                        <div class="icon">
                            <i class="fas fa-briefcase"></i></a>
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</section>
            <!-- END STATISTIC-->

        
</body>

