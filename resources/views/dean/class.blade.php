<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('dean.css')
</head>

<body class="font-sans bg-custom2 antialiased dark:bg-black dark:text-white/50">
    <div id="layout" class="flex">
        @include('dean.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
          @include('dean.header')

            <!-- Main content -->
            <div id="main-content" class="h-screen flex-1 transition-all duration-300 ease-in-out">

                <div class="antialiased p-8 h-full">
                  <a href="#">
                    <div class="p-4 bg-custom1 border rounded-t-lg w-1/4 h-1/4 flex items-center justify-center">
                      <svg width="147" height="147" viewBox="0 0 147 147" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M80.7913 7.87492C80.7913 3.84788 77.5269 0.583252 73.4997 0.583252C69.4725 0.583252 66.208 3.84788 66.208 7.87492V66.2083H7.87467C3.84763 66.2083 0.583008 69.4727 0.583008 73.4999C0.583008 77.5271 3.84763 80.7916 7.87467 80.7916H66.208V139.125C66.208 143.152 69.4725 146.417 73.4997 146.417C77.5269 146.417 80.7913 143.152 80.7913 139.125V80.7916H139.125C143.152 80.7916 146.416 77.5271 146.416 73.4999C146.416 69.4727 143.152 66.2083 139.125 66.2083H80.7913V7.87492Z" fill="#5E866B"/>
                        </svg>
                    </div>
                    <div class="p-4 bg-white border rounded-b-lg shadow-lg w-1/4 flex items-center justify-center">
                        <p class="text-center">Add New Class</p>
                    </div>
                  </a>
                </div>

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
