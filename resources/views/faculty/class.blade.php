<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('faculty.css')
</head>

<body class="font-sans bg-custom2 antialiased dark:bg-black dark:text-white/50">
    <div id="layout" class="flex">
        @include('faculty.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
          @include('faculty.header')

            <!-- Main content -->
            <div id="main-content" class="h-screen flex-1 transition-all duration-300 ease-in-out">

                <div class="antialiased p-8 h-full">
                  <a href="{{route('class1')}}">
                    <div class="p-4 bg-custom1 bg-cover bg-center border rounded-t-lg w-1/4 h-1/4 flex items-center" style="background-image: url('public/images/classbg.png');">
                    </div>
                    <div class="flex flex-col p-4 bg-white border rounded-b-lg shadow-lg w-1/4">
                        <p class="text-left"><b>BSA421k - Taxation</b></p>
                        <div class="flex flex-row items-center space-x-2">
                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M16.9981 6.16C16.9381 6.15 16.8681 6.15 16.8081 6.16C15.4281 6.11 14.3281 4.98 14.3281 3.58C14.3281 2.15 15.4781 1 16.9081 1C18.3381 1 19.4881 2.16 19.4881 3.58C19.4781 4.98 18.3781 6.11 16.9981 6.16Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path opacity="0.4" d="M15.9675 13.4402C17.3375 13.6702 18.8475 13.4302 19.9075 12.7202C21.3175 11.7802 21.3175 10.2402 19.9075 9.3002C18.8375 8.59016 17.3075 8.35016 15.9375 8.59016" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path opacity="0.4" d="M4.96656 6.16C5.02656 6.15 5.09656 6.15 5.15656 6.16C6.53656 6.11 7.63656 4.98 7.63656 3.58C7.63656 2.15 6.48656 1 5.05656 1C3.62656 1 2.47656 2.16 2.47656 3.58C2.48656 4.98 3.58656 6.11 4.96656 6.16Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path opacity="0.4" d="M5.9975 13.4402C4.6275 13.6702 3.1175 13.4302 2.0575 12.7202C0.6475 11.7802 0.6475 10.2402 2.0575 9.3002C3.1275 8.59016 4.6575 8.35016 6.0275 8.59016" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.0001 13.6302C10.9401 13.6202 10.8701 13.6202 10.8101 13.6302C9.4301 13.5802 8.33008 12.4502 8.33008 11.0502C8.33008 9.62021 9.4801 8.47021 10.9101 8.47021C12.3401 8.47021 13.4901 9.63021 13.4901 11.0502C13.4801 12.4502 12.3801 13.5902 11.0001 13.6302Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.0907 16.7804C6.6807 17.7204 6.6807 19.2603 8.0907 20.2003C9.6907 21.2703 12.3107 21.2703 13.9107 20.2003C15.3207 19.2603 15.3207 17.7204 13.9107 16.7804C12.3207 15.7204 9.6907 15.7204 8.0907 16.7804Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                          <p class="text-left ml-2">26 students</p>
                          <p class="text-left ml-2">enrolled in this class</p>
                        </div>
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
