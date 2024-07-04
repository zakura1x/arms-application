<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar Navigation</title>

    @vite('resources/css/app.css')
    <style>
        #sidebar {
            transition: transform 0.3s ease-in-out, width 0.3s ease-in-out;
            width: 4rem;
        }

        #sidebar.show {
            width: 16rem;
            transform: translateX(0);
        }

        #main-container {
            transition: margin-left 0.3s ease-in-out;
            margin-left: 4rem;
        }

        #main-container.shifted {
            margin-left: 16rem;
        }

        .sidebar-item {
            display: flex;
            align-items: start;
        }

        .sidebar-item .text {
            display: none;
            margin-left: 1rem;
        }

        #sidebar.show .sidebar-item .text {
            display: inline;
        }

        .sidebar-item svg {
            width: 24px;
            height: 24px;
        }

        .bg-custom1 {
            background-color: #D0D9D3;
        }

        .bg-custom2 {
            /* dae pa nagamit */
            background-color: #EFF4F6;
        }

        .shadow-right {
            box-shadow: 2px 0 3px #739072;
            /* Adjust the values as needed */
        }
    </style>
</head>

<body class="font-sans bg-custom2 antialiased dark:bg-black dark:text-white/50">
    <div id="layout" class="flex">
        <!-- Sidebar -->
        @include('programhead.sidebar')


        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
            <!-- Navbar -->
            <div class="navbar mx-50 bg-custom1 transition-all duration-300 ease-in-out w-[100%]">
                <div class="flex-1">
                    <b><a class="text-xl">ARMS - Program Head's Workspace</a></b>
                </div>
                <div class="flex-none gap-2">
                    <div class="form-control">
                        <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
                    </div>
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS Navbar component"
                                    src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                        </div>
                        <ul tabindex="0"
                            class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                            <li>
                                <a class="justify-between">
                                    Profile
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a href="{{ route('login') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div id="main-content">
                <a> SETTINGS </a>
            </div>
        </div>
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navButton = document.getElementById('nav-button');
        const sidebar = document.getElementById('sidebar');
        const mainContainer = document.getElementById('main-container');

        navButton.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            mainContainer.classList.toggle('shifted');
        });
    });
</script>

</html>
