<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('programhead.css')
</head>

<body class="font-sans bg-custom2 antialiased dark:bg-black dark:text-white/50">
    <div id="layout" class="flex">
        @include('programhead.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
            @include('programhead.header')

            <!-- Main content -->
            <div id="main-content" class="h-screen">
                <a>MAIN CONTENT</a>
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
