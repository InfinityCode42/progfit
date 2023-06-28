    <style>
        /* Import Google font - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /* Pre css */
        .flex {
            display: flex;
            align-items: center;
        }

        .nav_image {
            display: flex;
            min-width: 55px;
            justify-content: center;
        }

        .nav_image img {
            height: 35px;
            width: 35px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 270px;
            background: #fff;
            padding: 15px 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.45);
            transition: all 0.4s ease;
        }

        .sidebar.close {
            width: calc(55px + 20px);
        }

        .logo_items {
            gap: 8px;
        }

        .logo_name {
            font-size: 22px;
            color: #333;
            font-weight: 500px;
            transition: all 0.3s ease;
        }

        .sidebar.close .logo_name,
        .sidebar.close #lock-icon,
        .sidebar.close #sidebar-close {
            opacity: 0;
            pointer-events: none;
        }

        #lock-icon,
        #sidebar-close {
            padding: 10px;
            color: #4070f4;
            font-size: 25px;
            cursor: pointer;
            margin-left: -4px;
            transition: all 0.3s ease;
        }

        #sidebar-close {
            display: none;
            color: #333;
        }

        .menu_container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-top: 40px;
            overflow-y: auto;
            height: calc(100% - 82px);
        }

        .menu_container::-webkit-scrollbar {
            display: none;
        }

        .menu_title {
            position: relative;
            height: 50px;
            width: 55px;
        }

        .menu_title .title {
            margin-left: 15px;
            transition: all 0.3s ease;
        }

        .sidebar.close .title {
            opacity: 0;
        }

        .menu_title .line {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            height: 3px;
            width: 20px;
            border-radius: 25px;
            background: #aaa;
            transition: all 0.3s ease;
        }

        .menu_title .line {
            opacity: 0;
        }

        .sidebar.close .line {
            opacity: 1;
        }

        .item {
            list-style: none;
        }

        .link {
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 8px;
            color: #707070;
        }

        .link:hover {
            color: #fff;
            background-color: #4070f4;
        }

        .link span {
            white-space: nowrap;
        }

        .link i {
            height: 50px;
            min-width: 55px;
            display: flex;
            font-size: 22px;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
        }

        .sidebar_profile {
            padding-top: 15px;
            margin-top: 15px;
            gap: 15px;
            border-top: 2px solid rgba(0, 0, 0, 0.1);
        }

        .sidebar_profile .name {
            font-size: 18px;
            color: #333;
        }

        .sidebar_profile .email {
            font-size: 15px;
            color: #333;
        }

        /* Navbar */
        .navbar {
            max-width: 500px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 60%;
            transform: translateX(-50%);
            background: #fff;
            padding: 10px 20px;
            border-radius: 0 0 8px 8px;
            justify-content: space-between;
        }

        #sidebar-open {
            font-size: 30px;
            color: #333;
            cursor: pointer;
            margin-right: 20px;
            display: none;
        }

        .search_box {
            height: 46px;
            max-width: 500px;
            width: 100%;
            border: 1px solid #aaa;
            outline: none;
            border-radius: 8px;
            padding: 0 15px;
            font-size: 18px;
            color: #333;
        }

        .navbar img {
            height: 40px;
            width: 40px;
            margin-left: 20px;
        }

        /* Responsive */
        @media screen and (max-width: 1100px) {
            .navbar {
                left: 65%;
            }
        }

        @media screen and (max-width: 800px) {
            .sidebar {
                left: 0;
                z-index: 1000;
            }

            .sidebar.close {
                left: -100%;
            }

            #sidebar-close {
                display: block;
            }

            #lock-icon {
                display: none;
            }

            .navbar {
                left: 0;
                max-width: 100%;
                transform: translateX(0%);
            }

            #sidebar-open {
                display: block;
            }
        }

        .sair a:hover {
            background: red;
            color: aliceblue;

        }
    </style>

    <nav class="sidebar locked">
        <div class="logo_items flex">
            <span class="nav_image">
                <img src="{{ auth()->user()->foto }}" alt="logo_img" />
            </span>
            <span class="logo_name">Olá {{ auth()->user()->nome }}</span>
            <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
            <i class="bx bx-x" id="sidebar-close"></i>
        </div>
        <div class="menu_container">
            <div class="menu_items">
                @foreach ($admModulos->groupBy('nome_primario') as $nomePrimario => $itens)
                    <ul class="menu_item">
                        <div class="menu_title flex">
                            <h5 class="title">{{ $nomePrimario }}</h5>
                            <span class="line"></span>
                        </div>
                        @foreach ($itens as $item)
                            <li class="item">
                                <a href="{{ route($item->rota_modulo) }}" class="link flex">
                                    <i class="{{ $item->icone }}"></i>
                                    <span>{{ $item->nome_secundario }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach


                <ul class="menu_item sair">
                    <div class="menu_title flex">
                        <h5 class="title">Logout</h5>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="{{ route('login.destroy') }}" class="link flex">
                            <i class="fa fa-sign-out"></i>
                            <span>Sair</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->


    <script>
        // Selecting the sidebar and buttons
        const sidebar = document.querySelector(".sidebar");
        const sidebarOpenBtn = document.querySelector("#sidebar-open");
        const sidebarCloseBtn = document.querySelector("#sidebar-close");
        const sidebarLockBtn = document.querySelector("#lock-icon");

        // Function to toggle the lock state of the sidebar
        const toggleLock = () => {
            sidebar.classList.toggle("locked");
            // If the sidebar is not locked
            if (!sidebar.classList.contains("locked")) {
                sidebar.classList.add("hoverable");
                sidebarLockBtn.classList.replace("bx-lock-alt", "bx-lock-open-alt");
            } else {
                sidebar.classList.remove("hoverable");
                sidebarLockBtn.classList.replace("bx-lock-open-alt", "bx-lock-alt");
            }
        };

        // Function to hide the sidebar when the mouse leaves
        const hideSidebar = () => {
            if (sidebar.classList.contains("hoverable")) {
                sidebar.classList.add("close");
            }
        };

        // Function to show the sidebar when the mouse enter
        const showSidebar = () => {
            if (sidebar.classList.contains("hoverable")) {
                sidebar.classList.remove("close");
            }
        };

        // Function to show and hide the sidebar
        const toggleSidebar = () => {
            sidebar.classList.toggle("close");
        };

        // If the window width is less than 800px, close the sidebar and remove hoverability and lock
        if (window.innerWidth < 800) {
            sidebar.classList.add("close");
            sidebar.classList.remove("locked");
            sidebar.classList.remove("hoverable");
        }

        // Adding event listeners to buttons and sidebar for the corresponding actions
        sidebarLockBtn.addEventListener("click", toggleLock);
        sidebar.addEventListener("mouseleave", hideSidebar);
        sidebar.addEventListener("mouseenter", showSidebar);
        sidebarOpenBtn.addEventListener("click", toggleSidebar);
        sidebarCloseBtn.addEventListener("click", toggleSidebar);
    </script>
