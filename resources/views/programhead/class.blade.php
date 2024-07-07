<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('programhead.css')
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }
        .modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
    </style>
</head>

<body class="font-sans bg-custom2 antialiased dark:bg-black dark:text-white/50">
    <div id="layout" class="flex">
        @include('programhead.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
          @include('programhead.header')

            <!-- Main content -->
            <div id="main-content" class="h-screen flex-1 transition-all duration-300 ease-in-out">

                <div class="antialiased p-8 h-full">
                    <div id="openModal" class="bg-custom3 rounded-t-lg rounded-b-lg w-1/4 cursor-pointer">
                        <div class="p-4 bg-custom1 border rounded-t-lg w-full h-1/4 flex items-center justify-center">
                            <svg width="147" height="147" viewBox="0 0 147 147" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M80.7913 7.87492C80.7913 3.84788 77.5269 0.583252 73.4997 0.583252C69.4725 0.583252 66.208 3.84788 66.208 7.87492V66.2083H7.87467C3.84763 66.2083 0.583008 69.4727 0.583008 73.4999C0.583008 77.5271 3.84763 80.7916 7.87467 80.7916H66.208V139.125C66.208 143.152 69.4725 146.417 73.4997 146.417C77.5269 146.417 80.7913 143.152 80.7913 139.125V80.7916H139.125C143.152 80.7916 146.416 77.5271 146.416 73.4999C146.416 69.4727 143.152 66.2083 139.125 66.2083H80.7913V7.87492Z" fill="#5E866B"/>
                            </svg>
                        </div>
                        <div class="p-4 bg-white border shadow-lg w-full flex items-center justify-center">
                            <p class="text-center">Add New Class</p>
                        </div>
                    </div>

                    <!-- Modal structure -->
                    <div id="modal" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
                      <div class="bg-white rounded-lg shadow-lg w-1/2">
                          <header class="bg-custom3 text-white border-b border-gray-100 rounded-t-lg">
                            <div class="p-4 flex items-center">
                                <h2 class="font-semibold">Create Class</h2>
                            </div>
                          </header>
                          <div class="p-8">
                            <form id="classForm" action="#" method="#">
                              <input type="text" placeholder="Class Name" required class="bg-custom1 border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                              <input type="text" placeholder="Subject" required class="bg-custom1 border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150"></input>
                              <div class="relative rounded-lg">
                                <div class="flex items-center justify-center rounded-lg bg-custom1 border-dashed border-2 border-black border-opacity-50">
                                  <input type="file" class="inset-0 border-1 text-black border-black border-dashed w-1/2 h-full cursor-pointer p-8" accept="image/*">
                                  <div class="flex items-center justify-center">
                                      <div class="ml-2 text-center">
                                          <p class="text-sm text-black">Select Background</p>
                                          <p class="text-xs text-black">JPG & PNG only up to 5MB</p>
                                      </div>
                                  </div>
                                </div>
                              </div>

                              <div class="flex items-center justify-center space-x-6 p-4">
                                <button type="button" id="closeModal" class="close bg-custom1 font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                  Cancel
                                </button>
                                <button type="submit" class="bg-custom3 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                  Create Class
                                </button>
                              </div>
                            </form>
                          </div>
                      </div>
                    </div>
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

        document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('modal').classList.remove('hidden');
        document.body.classList.add('modal-active');
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
            document.body.classList.remove('modal-active');
        });
    </script>

</html>
