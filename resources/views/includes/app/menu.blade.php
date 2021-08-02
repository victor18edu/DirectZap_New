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
                            data-target="#PixelModal" onclick="showAddPixel()">
                            <!--<i class="icon-sidebar far fa-plus-square"></i>-->
                            <i class="icon-sidebar" data-feather='plus-square'></i>
                            <span class="name-sidebar">Adicionar Pixel</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="btn btn-primary btn-block btn-sidebar" data-toggle="modal"
                            data-target="#gerarCod" onclick="showGerarCod()">
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
