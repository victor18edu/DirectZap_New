<!DOCTYPE html>
<html class="loading dark-layout" lang="pt-br" data-layout="dark-layout" data-textdirection="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direct Zap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="sortcut icon" href="{{ asset('assets/images/logo/LogoSite.png') }}" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <script src="https://kit.fontawesome.com/2f204339a4.js" crossorigin="anonymous"></script>

    <!--
        <link rel="stylesheet" href="{{ asset('assets/themes/dark-layout.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/pages/dashboard-ecommerce.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugin/tables/table-ag-grid.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/core/menu/vertical-overlay-menu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/components.css') }}">
        -->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/charts/apexcharts.css') }}">



    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')}}"> --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/core/menu/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/charts/chart-apex.css') }}">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS--
    <link rel="stylesheet" type="text/css" href="../../../assets/style.css">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/custom.css') }}">

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> --}}


</head>

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu ficon">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block">
                        <h4>Bem Vindo {{ auth()->user()->name }}</h4>
                    </li>
                </ul>

            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name font-weight-bolder">{{ auth()->user()->name }}</span>
                            <!--<span class="user-status">Admin</span>-->
                        </div>
                        <span class="avatar">
                            <img class="round" src="{{ asset('assets/images/profile/userPlaceholder.png') }}"
                                alt="avatar" height="40" width="40">
                            <!--<span class="avatar-status-online"></span>-->
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item user-itens" href="{{ route('user.index') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user mr-50">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>Perfil</a>
                        <!--<a class="dropdown-item" href="app-email.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail mr-50"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Inbox</a>
                        <a class="dropdown-item" href="app-todo.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square mr-50"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg> Task</a>
                        <a class="dropdown-item" href="app-chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square mr-50"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Chats</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="page-account-settings.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-50"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings</a>
                        <a class="dropdown-item" href="page-pricing.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-50"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg> Pricing</a>-->
                        <a class="dropdown-item user-itens" href="{{ route('faq.index') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-help-circle mr-50">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg> FAQ</a>
                        <a class="dropdown-item user-itens" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-power mr-50">
                                <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                <line x1="12" y1="2" x2="12" y2="12"></line>
                            </svg>Sair</a>
                    </div>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <!--<li>
                    <a href="">
                        Sair
                        <svg width="1em"
                            height="1em"
                            viewBox="0 0 16 16"
                            class="bi bi-box-arrow-right"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">

                            <path fill-rule="evenodd"
                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />

                            <path fill-rule="evenodd"
                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                    </a>
                </li> -->
            </ul>
        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dashboard.index') }}"><span
                            class="brand-logo">
                            <img class="text-center logo-sidebar"
                                src="{{ asset('assets/images/logo/LogoSite.png') }}" alt="">
                            <h2 class="brand-text">Direct Zap</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4 fas fa-times"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary fas fa-bars"></i>


                    </a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


                <a class=" btn btn-primary btn-block btn-sidebar" href="{{ route('dashboard.index') }}">
                    <!--<i class="icon-sidebar fas fa-tachometer-alt"></i>-->
                    <i class="icon-sidebar" data-feather='airplay'></i>
                    <span class="name-sidebar">Dashboard</span>

                </a>
                <a class="btn btn-primary btn-block btn-sidebar" href="{{ route('colaboradores.index') }}">
                    <!-- <i class="icon-sidebar fas fa-users"></i>-->
                    <i class="icon-sidebar" data-feather='users'></i>
                    <span class="name-sidebar">Colaboradores</span>

                </a>

                <li class=" has-sub ">
                    <button class="btn btn-primary btn-block btn-sidebar d-flex align-items-center" href="#">
                        <!--<i class="icon-sidebar fas fa-link"></i>-->
                        <i class="icon-sidebar" data-feather='link'></i>
                        <span class="name-sidebar menu-title text-truncate" data-i18n="Menu Levels">Config
                            Colaboradores</span>
                    </button>
                    <ul class="menu-content">
                        <li>
                            <button type="button" class="btn btn-primary btn-block btn-sidebar" data-toggle="modal"
                                data-target="#PixelModal">
                                <!--<i class="icon-sidebar far fa-plus-square"></i>-->
                                <i class="icon-sidebar" data-feather='plus-square'></i>
                                <span class="name-sidebar">Adicionar Pixel</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary btn-block btn-sidebar" data-toggle="modal"
                                data-target="#gerarCod">
                                <!--<i class="icon-sidebar fas fa-code"></i>-->
                                <i class="icon-sidebar" data-feather='code'></i>
                                <span class="name-sidebar">Gerar Código</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" id="distriBtn" class="btn btn-primary btn-block btn-sidebar"
                                onclick="showDistriCod()">
                                <!--<i class="icon-sidebar fas fa-sitemap"></i>-->
                                <i class="icon-sidebar" data-feather='share-2'></i>
                                <span class="name-sidebar">Distribuição </span>
                            </button>
                        </li>
                    </ul>
                </li>
                <a class=" btn btn-primary btn-block btn-sidebar" href="{{ route('sales.index') }}">
                    <!--<i class="icon-sidebar fas fa-shopping-cart"></i>-->
                    <i class="icon-sidebar" data-feather='shopping-bag'></i>
                    <span class="name-sidebar">Vendas</span>

                </a>
                <a class="btn btn-primary btn-block btn-sidebar" href="{{ route('commissions.index') }}">
                    <i class="icon-sidebar fas fa-comments-dollar"></i>
                    <span class="name-sidebar">Comissões</span>

                </a>


                <li class=" has-sub ">
                    <button class="btn btn-primary btn-block btn-sidebar d-flex align-items-center" href="#">
                        <!--<i class="icon-sidebar fas fa-link"></i>-->
                        <i class="icon-sidebar" data-feather='link'></i>

                        <span class="name-sidebar menu-title text-truncate" data-i18n="Menu Levels">Links</span>
                    </button>
                    <ul class="menu-content">
                        <li>
                            <input class="link-copy form-control" id="link-face-ads"
                                style="text-decoration: none; font-weight: bold;" value="">
                            <button class="btnCopy btn btn-outline-primary btn-block btn-sidebar-secund links"
                                target="__blank" style="text-decoration: none; font-weight: bold;" data-toggle="tooltip"
                                data-placement="top" onclick="copyCodFace()"> Link Facebook Ads
                            </button>
                        </li>
                        <li>
                            <div class="form-group">
                                <input class="link-copy form-control" id="link-parceria"
                                    style="text-decoration: none; font-weight: bold;" value="">
                                <button class="btnCopy btn btn-outline-primary btn-block btn-sidebar-secund links"
                                    target="__blank" style="text-decoration: none; font-weight: bold;"
                                    data-toggle="tooltip" data-placement="top" onclick="copyCodParceria()"> Link
                                    Parceria
                                </button>
                            </div>
                        </li>

                    </ul>
                </li>
                @if (auth()->user()->type == 'admin')
                    <a href="{{ route('admin.index') }}" class="btn btn-primary btn-block btn-sidebar adm-btn">
                        <i class="icon-sidebar fas fa-user-cog"></i>
                        <span class="name-sidebar">Área Administrativa</span>
                    </a>

                @endif

            </ul>
        </div>
    </div>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row mb-2">

            </div>
            <div class="content-body">

                <section class="" id="background-flutuante">
                    <div class="card principal-row">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Modais -->
    <div class="modal fade" id="modal_colaboradores" tabindex="-1" aria-labelledby="modal_colaboradores"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id=""> Cadastrar Novo Colaborador </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form method="POST" action="">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nome</label>

                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome e Sobrenome"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="message">Mensagem</label>

                            <input type="text" class="form-control" id="message" name="message"
                                placeholder="ex: Olá, John!" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefone</label>

                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="ex: 21911112222" required>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">
                                Adicionar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="PixelModal" tabindex="-1" aria-labelledby="PixelModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="configModal">
                        Adicionar Pixel
                    </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="post" action="">
                        @csrf

                        <div class="form-group">
                            <p class="p-1">Insira abaixo seu Pixel</p>

                            <input type="number" class="form-control" id="pixel" name="pixel"
                                placeholder="Ex: 1282707308773467" required>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_colaboradores" tabindex="-1" aria-labelledby="modal_colaboradores"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_colaboradores">Colaborador</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('colaboradores.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nome</label>

                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Nome e Sobrenome">
                        </div>

                        <div class="form-group">
                            <label for="message">Mensagem</label>

                            <input type="text" class="form-control" id="message" name="message"
                                placeholder="ex: Olá, John!">
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefone</label>

                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="ex: 21911112222">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">
                                Adicionar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="distriCod" tabindex="-1" aria-labelledby="distriCod" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="configModal"> Configurações</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group">
                            <p class="p-1">
                                Olá, insira no campo abaixo o número de vezes que um colaborador será solicitado
                                antes de passar a vez para outro colaborador.
                            </p>

                            <input type="number" class="form-control" id="times" name="times" placeholder="Ex: 1"
                                required>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="gerarCod" tabindex="-1" aria-labelledby="gerarCod" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="configModal">Adicionar Código</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-info btn-block mt-2" id="gera-codigo"
                                    onclick="makeCod()">Gerar Código</button>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="code" name="code" value="" placeholder="Ex: dr89f"
                            minlength="1">



                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mudarSenha" tabindex="-1" aria-labelledby="mudarSenha" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="configModal">Trocar senha</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form method="POST" action="">
                        @csrf

                        <div class="form-group">
                            <label for="name">Senha Antiga</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Senha antiga">
                        </div>

                        <div class="form-group">
                            <label for="name">Nova Senha</label>
                            <input type="password" class="form-control" id="new-password" name="new-password"
                                placeholder="Senha nova">
                        </div>

                        <div class="form-group">
                            <label for="name">Confirme a Senha</label>
                            <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                                placeholder="Confirme a senha nova">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Trocar senha</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ativarConta" tabindex="-1" aria-labelledby="ativarConta" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="configModal">Ativar Conta</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">




                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="links" tabindex="-1" aria-labelledby="links" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="configModal">Clique nos Links Para copiar</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label for="">Link Facebook Ads</label>
                            <input class="link-copy form-control" id="link-face-ads" target="__blank"
                                style="text-decoration: none; font-weight: bold;" href="" data-toggle="tooltip"
                                data-placement="top" title="Link Face ads" value="">
                            <button type="button" class="btn btn-primary btn-block" onclick="copyCodFace()">Copiar Link
                                do face ads</button>
                        </div>

                        <div class="form-group">
                            <label for="">Link Parceria</label>
                            <input class="form-control link-copy" id="link-parceria" target="__blank"
                                style="text-decoration: none; font-weight: bold;" href="" data-toggle="tooltip"
                                data-placement="top" title="Link Parceria" value="">
                            <button type="button" class="btn btn-primary btn-block" onclick="copyCodParceria()">Copiar
                                Link De Parceria</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!------>
    <script>
        function showDistriCod() {
            $('#distriCod').modal('show');
        }
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', 'PIXELAQUI');
        fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=PIXELAQUI&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!--- Script Gerar Código aleatório  -->
    <script>
        function makeCod() {
            let chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*_-?/"
            let idLength = 25;
            let codigo = "";

            for (let i = 0; i < idLength; i++) {
                let randomNumber = Math.floor(Math.random() * idLength);
                codigo += chars.substring(randomNumber, randomNumber + 1);
            }
            document.getElementById("code").value = codigo;
        }
    </script>

    <!--- Script Copiar Links  -->
    <script>
        function copyCodFace() {
            let copyCodText = document.querySelector('#link-face-ads');
            copyCodText.select();
            copyCodText.setSelectionRange(0, 9999);
            document.execCommand("copy");
        }

        function copyCodParceria() {
            let copyCodText = document.querySelector('#link-parceria');
            copyCodText.select();
            copyCodText.setSelectionRange(0, 9999);
            document.execCommand("copy");
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!--- Script Talk Api --->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6028aaec9c4f165d47c311fc/1eufdnb4p';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <!--- Script datatable --->
    <script>
        $(document).ready(function() {
            $.noConflict();
            $('#colabs-table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
                }
            });
            $('#admin-table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
                }
            });
        });
    </script>

    <script>
        const check = document.querySelector('.btn-sidebar')
            ('.btn-sidebar').on('click', function() {
                $(this).addClass('active');
                console.log('Ativou');
            });
    </script>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 18,
                    height: 18
                });
            }
        })
    </script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>

    <!-- BEGIN Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <!-- End Bootstrap -->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    {{-- <script src="{{asset('assets/js/scripts/tables/table-datatables-basic.js')}}"></script> --}}
    <script src="{{ asset('assets/js/scripts/components/components-dropdowns.js') }}"></script>
    <!-- END: Page JS-->


</body>

</html>
