<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('programhead.css')
</head>

<body class="bg-custom2 font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="layout" class="flex">
        @include('programhead.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
          @include('programhead.header')

            <!-- Main content -->
            <div id="main-content" class="h-screen flex-1 transition-all duration-300 ease-in-out">
              <!-- Component -->
              <section class="antialiased border p-5 h-full">
                  <!-- Table -->
                  <div class="p-4 bg-white shadow-lg rounded-lg border border-gray-200 h-full">
                    <section class="p-8 antialiased">
                      <div class="flex items-center justify-end space-x-6">
                        <div class="flex items-center input input-bordered w-50">
                          <svg width="26" height="26" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>search</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-256.000000, -1139.000000)" fill="#000000"> <path d="M269.46,1163.45 C263.17,1163.45 258.071,1158.44 258.071,1152.25 C258.071,1146.06 263.17,1141.04 269.46,1141.04 C275.75,1141.04 280.85,1146.06 280.85,1152.25 C280.85,1158.44 275.75,1163.45 269.46,1163.45 L269.46,1163.45 Z M287.688,1169.25 L279.429,1161.12 C281.591,1158.77 282.92,1155.67 282.92,1152.25 C282.92,1144.93 276.894,1139 269.46,1139 C262.026,1139 256,1144.93 256,1152.25 C256,1159.56 262.026,1165.49 269.46,1165.49 C272.672,1165.49 275.618,1164.38 277.932,1162.53 L286.224,1170.69 C286.629,1171.09 287.284,1171.09 287.688,1170.69 C288.093,1170.3 288.093,1169.65 287.688,1169.25 L287.688,1169.25 Z" id="search" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                          <input type="text" placeholder="Search Faculty" class="ml-2" />
                        </div>

                        <button class="flex items-center text-white border rounded-lg p-5 w-35 h-8 bg-custom3">
                          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M12 4V20" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                          <a href="{{route('ph.addfaculty')}}" class="ml-2">Add Faculty</a>
                        </button>

                        <button class="flex items-center border rounded-lg p-5 w-30 h-8 bg-custom1">
                          <a>Edit</a>
                        </button>
                        <button class="flex items-center border rounded-lg p-5 w-30 h-8 bg-custom1">
                          <a>Assign to Subject</a>
                        </button>
                      </div>
                    </section>

                    <header class="bg-custom3 text-white border-b border-gray-100">
                      <div class="p-4 flex items-center">
                        <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.0495 2.52979L4.02953 6.45979C2.09953 7.71979 2.09953 10.5398 4.02953 11.7998L10.0495 15.7298C11.1295 16.4398 12.9095 16.4398 13.9895 15.7298L19.9795 11.7998C21.8995 10.5398 21.8995 7.72979 19.9795 6.46979L13.9895 2.53979C12.9095 1.81979 11.1295 1.81979 10.0495 2.52979Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M5.62914 13.0801L5.61914 17.7701C5.61914 19.0401 6.59914 20.4001 7.79914 20.8001L10.9891 21.8601C11.5391 22.0401 12.4491 22.0401 13.0091 21.8601L16.1991 20.8001C17.3991 20.4001 18.3791 19.0401 18.3791 17.7701V13.1301" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M21.4004 15V9" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                          <h2 class="ml-4 font-semibold">FACULTY LIST</h2>
                      </div>
                    </header>

                      <div class="overflow-x-auto">
                          <table class="table-auto w-full border">
                              <thead class="text-xs font-semibold uppercase bg-custom4">
                                  <tr>
                                      <th class="w-1/12 p-2">
                                        <div class="font-semibold text-left"></div>
                                      </th>
                                      <th class="w-1/4 p-2">
                                          <div class="font-semibold text-left">Email Address</div>
                                      </th>
                                      <th class="w-1/4 p-2">
                                          <div class="font-semibold text-left">Full name</div>
                                      </th>
                                      <th class="w-1/16 p-2">
                                          <div class="font-semibold text-left">Role</div>
                                      </th>
                                      <th class="w-1/16 p-2">
                                          <div class="font-semibold text-left">Assigned Subjects</div>
                                      </th>
                                      <th class="w-1/16 p-2">
                                          <div class="font-semibold text-left">Status</div>
                                      </th>
                                  </tr>
                              </thead>
                              <tbody class="divide-y divide-gray-100">
                                  <tr>
                                      <td class="w-1/12 p-2">
                                          <input type="checkbox" class="form-checkbox" />
                                      </td>
                                      <td class="w-1/4 p-2">
                                          <div class="text-left">sample@gmail.com</div>
                                      </td>
                                      <td class="p-2 whitespace-nowrap">
                                          <div class="text-left">Sample Name</div>
                                      </td>
                                      <td class="p-2 whitespace-nowrap">
                                          <div class="text-left">Faculty</div>
                                      </td>
                                      <td class="p-2 whitespace-nowrap">
                                          <div class="text-left">Taxation</div>
                                      </td>
                                      <td class="p-2 whitespace-nowrap">
                                          <div class="text-left">Active</div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>

                          <a>Displaying 25 out of 50</a>
                      </div>
                </div>
              </section>
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
