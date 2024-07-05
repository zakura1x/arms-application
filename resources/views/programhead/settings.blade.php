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
            @include('programhead.navbar')

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
