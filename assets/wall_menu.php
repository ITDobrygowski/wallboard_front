<ul class="navbar-nav" id="navbar-nav">
    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
    <li class="nav-item">
        <a class="nav-link menu-link" href="serwisowy?<?php echo 'g='.$grupa_oddzialow.'&o='.$oddzial; ?>" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
            <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Pulpit</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebar_grupa_oddzialow" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar_grupa_oddzialow">
            <i data-feather="command" class="icon-dual"></i> <span data-key="t-grupa_oddzialow">Grupa oddziałów</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebar_oddzialy">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="#sidebar_gdansk" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar_gdansk" data-key="t-email-templates">
                        Gdańsk
                    </a>
                    <div class="collapse menu-dropdown" id="sidebar_gdansk">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_gdansk; ?>" class="nav-link" data-key="t-gdansk"> Gdańsk </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_rebiechowo; ?>" class="nav-link" data-key="t-gdansk_lotnisko"> Gdańsk Rębiechowo </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_olsztyn; ?>" class="nav-link" data-key="t-olsztyn"> Olsztyn </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_bydgoszcz; ?>" class="nav-link" data-key="t-bydgoszcz"> Bydgoszcz </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_koszalin; ?>" class="nav-link" data-key="t-koszalin"> Koszalin </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_gizycko; ?>" class="nav-link" data-key="t-gizycko"> Giżycko </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_grudziadz; ?>" class="nav-link" data-key="t-grudziadz"> Grudziądz </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebar_poznan" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar_poznan" data-key="t-poznan">
                        Poznań
                    </a>
                    <div class="collapse menu-dropdown" id="sidebar_poznan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_poznan; ?>" class="nav-link" data-key="t-poznan"> Poznań </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_pila; ?>" class="nav-link" data-key="t-pila"> Piła </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_szczecin; ?>" class="nav-link" data-key="t-szczecin"> Szczecin </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_goleniow; ?>" class="nav-link" data-key="t-goleniow"> Szczecin Goleniów </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_ostrow_wielkopolski; ?>" class="nav-link" data-key="t-ostrow_wielkopolski"> Ostrów Wielkopolski </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_gorzow_wielkopolski; ?>" class="nav-link" data-key="t-gorzow_wielkopolski"> Gorzów Wielkopolski </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebar_krakow" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar_krakow" data-key="t-krakow">
                        Kraków
                    </a>
                    <div class="collapse menu-dropdown" id="sidebar_krakow">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_krakow; ?>" class="nav-link" data-key="t-krakow"> Kraków </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_krakow_balice; ?>" class="nav-link" data-key="t-krakow_balice"> Kraków Balice </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_rzeszow; ?>" class="nav-link" data-key="t-rzeszow"> Rzeszów </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_kielce; ?>" class="nav-link" data-key="t-kielce"> Kielce </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_tarnow; ?>" class="nav-link" data-key="t-tarnow"> Tarnów </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_nowy_targ; ?>" class="nav-link" data-key="t-nowy_targ"> Nowy Targ </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#sidebar_warszawa" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar_warszawa" data-key="t-warszawa">
                        Warszawa
                    </a>
                    <div class="collapse menu-dropdown" id="sidebar_warszawa">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_warszawa; ?>" class="nav-link" data-key="t-warszawa"> Warszawa </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_warszawa_okecie; ?>" class="nav-link" data-key="t-warszawa_okecie"> Warszawa Okęcie </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_lublin; ?>" class="nav-link" data-key="t-lublin"> Lublin </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_lodz; ?>" class="nav-link" data-key="t-lodz"> Łódź </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_radom; ?>" class="nav-link" data-key="t-radom"> Radom </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_bialystok; ?>" class="nav-link" data-key="t-bialystok"> Białystok </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_plock; ?>" class="nav-link" data-key="t-plock"> Płock </a>
                            </li>
                            <li class="nav-item">
                                <a href="serwisowy?<?php echo $link_id_siedlce; ?>" class="nav-link" data-key="t-siedlce"> Siedlce </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>

    </li>
    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
            <i data-feather="grid" class="icon-dual"></i> <span data-key="t-apps">Wallboard</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarApps">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="serwisowy?<?php echo 'o='.$oddzial; ?>" class="nav-link" data-key="t-calendar"> Serwis </a>
                </li>
                <li class="nav-item">
                    <a href="serwisowy?<?php echo 'o='.$oddzial; ?>" class="nav-link" data-key="t-calendar"> Wydania </a>
                </li>
            </ul>
        </div>

    </li>
</ul>