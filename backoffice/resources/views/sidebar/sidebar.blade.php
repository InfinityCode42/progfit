<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                @foreach ($admModulos as $nomePrimario => $itens)
                    <li class="submenu">
                        <a href="#" style="text-decoration: none;">
                            <i class="{{ $itens[0]->icone }}"></i>
                            <span> {{ $nomePrimario }}</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            @foreach ($itens as $item)
                                <li><a href="{{ route($item->rota_modulo) }}" style="text-decoration: none;">{{ $item->nome_secundario }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
            <ul>

                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-sign-out"></i>
                        <span>Logout</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="{{ route('login.destroy') }}" class="link flex">
                                Sair
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
