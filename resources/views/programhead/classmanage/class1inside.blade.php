<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('programhead.css')
  <style>
      .hidden {
        display: none;
      }

      .tab-content {
        display: none;
      }

      .tab-content.active {
        display: block;
      }

      .tabs a {
          border-bottom: 4px solid #cfcfcf;
          transition: border-bottom-color 0.3s ease;
      }

      .tabs a.active {
          border-bottom: 6px solid #678071;
      }
  </style>
</head>

<body class="bg-[#EFF4F6] font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="layout" class="flex">
        @include('programhead.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
            @include('programhead.header')

            <!-- Main content -->
            <div id="main-content" class="h-screen flex-1 transition-all duration-300 ease-in-out">
                <div class="p-8 bg-[#EFF4F6] shadow-lg rounded-lg border border-gray-200 h-full">
                    <header class="flex items-center bg-[#D0D9D3] text-black p-2">
                        <div class="px-4 flex items-center mr-96">
                            <a href="{{route('ph.class')}}">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.7402 28.4805C22.3288 28.4805 28.4805 22.3288 28.4805 14.7402C28.4805 7.15171 22.3288 1 14.7402 1C7.15171 1 1 7.15171 1 14.7402C1 22.3288 7.15171 28.4805 14.7402 28.4805Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.117 14.7402H9.96094" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.948 11.7532L9.96143 14.7403L12.948 17.7274" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <h2 class="ml-4 font-semibold">BSA421k Taxation</h2>
                        </div>

                        <!-- Tabs -->
                        <div class="tabs">
                          <ul class="flex border-b">
                              <li class="mr-1">
                                  <a class="bg-white inline-block py-2 px-4 font-semibold text-gray-800 border-l border-t border-r rounded-t active" href="#tab1">STUDENT</a>
                              </li>
                              <li class="mr-1">
                                  <a class="bg-white inline-block py-2 px-4 text-gray-800 hover:text-gray-600 font-semibold border-l border-t border-r rounded-t" href="#tab2">MODULE</a>
                              </li>
                              <li class="mr-1">
                                  <a class="bg-white inline-block py-2 px-4 text-gray-800 hover:text-gray-600 font-semibold border-l border-t border-r rounded-t" href="#tab3">ASSESSMENT</a>
                              </li>
                          </ul>
                        </div>
                    </header>

                    <!-- Tab Contents -->
                    <div class="tab-contents mt-4">
                        <div id="tab1" class="tab-content bg-white border border-gray-200 rounded-lg active">
                            @include('programhead.classmanage.studentab')
                        </div>

                        <div id="tab2" class="tab-content bg-white border border-gray-200 rounded-lg hidden">
                            @include('programhead.classmanage.moduletab')
                        </div>

                        <div id="tab3" class="tab-content bg-white border border-gray-200 rounded-lg hidden">
                          @include('programhead.classmanage.assessmenttab')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navButton = document.getElementById('nav-button');
            const sidebar = document.getElementById('sidebar');
            const mainContainer = document.getElementById('main-container');
            const createAssessment = document.getElementById('createAssessment');

            navButton.addEventListener('click', function() {
                sidebar.classList.toggle('show');
                mainContainer.classList.toggle('shifted');
            });

            createAssessment.addEventListener('click', function() {
                window.location.href = '{{ route('ph.createtest') }}';
            });

            // Tab functionality
            const tabs = document.querySelectorAll('.tabs a');
            const tabContents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Remove active class from all tabs
                    tabs.forEach(tab => tab.classList.remove('active'));
                    // Hide all tab contents
                    tabContents.forEach(content => content.classList.remove('active'));

                    // Add active class to the clicked tab
                    tab.classList.add('active');

                    // Show the content of the clicked tab
                    const tabContent = document.querySelector(tab.getAttribute('href'));
                    tabContent.classList.add('active');
                });
            });
        });
    </script>
</body>
</html>
