<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('programhead.css')
</head>

<body class="bg-[#EFF4F6] font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="layout" class="flex">
        @include('programhead.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
          @include('programhead.header')

            <!-- Buttons -->
            <div id="main-content" class="h-screen flex-1 transition-all duration-300 ease-in-out">

              <section class="bg-white p-4 antialiased">
                <div class="flex items-center justify-end space-x-6">
                  <div class="form-control w-1/4 text-white">
                    <div class="flex items-center input input-bordered bg-[#42604C]">
                      <svg width="26" height="26" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>search</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-256.000000, -1139.000000)" fill="#ffffff"> <path d="M269.46,1163.45 C263.17,1163.45 258.071,1158.44 258.071,1152.25 C258.071,1146.06 263.17,1141.04 269.46,1141.04 C275.75,1141.04 280.85,1146.06 280.85,1152.25 C280.85,1158.44 275.75,1163.45 269.46,1163.45 L269.46,1163.45 Z M287.688,1169.25 L279.429,1161.12 C281.591,1158.77 282.92,1155.67 282.92,1152.25 C282.92,1144.93 276.894,1139 269.46,1139 C262.026,1139 256,1144.93 256,1152.25 C256,1159.56 262.026,1165.49 269.46,1165.49 C272.672,1165.49 275.618,1164.38 277.932,1162.53 L286.224,1170.69 C286.629,1171.09 287.284,1171.09 287.688,1170.69 C288.093,1170.3 288.093,1169.65 287.688,1169.25 L287.688,1169.25 Z" id="search" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                      <input type="text" placeholder="Search Lesson Plan Name" class="ml-2"/>
                    </div>
                  </div>

                  <button id="createldp" class="flex items-center text-white rounded-lg p-5 w-39 h-8 bg-[#42604C]">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M12 4V20" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <span class="ml-2">CREATE</span>
                  </button>
                </div>
              </section>

                  <!-- Table -->
                  <div class="p-4 bg-white shadow-lg border border-gray-200 h-full">
                    <header class="bg-[#42604C] text-white border-b border-gray-100">
                      <div class="p-4 flex items-center">
                        <svg width="25" height="25" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M27.0249 24.1337C27.0249 24.4576 26.76 24.7228 26.4361 24.7228H6.56271C6.23863 24.7228 5.97363 24.4577 5.97363 24.1337V23.7413C5.97363 23.4175 6.23851 23.1523 6.56271 23.1523H26.4361C26.7599 23.1523 27.0249 23.4173 27.0249 23.7413V24.1337Z" fill="white"/>
                          <path d="M14.8737 7.82112C14.8737 8.14484 14.6089 8.40996 14.2847 8.40996H6.56271C6.23863 8.40996 5.97363 8.14496 5.97363 7.82112V7.42844C5.97363 7.10459 6.23851 6.83948 6.56271 6.83948H14.2847C14.6087 6.83948 14.8737 7.10447 14.8737 7.42844V7.82112Z" fill="white"/>
                          <path d="M26.7265 29.5716C26.7265 29.8953 26.4614 30.1603 26.1372 30.1603H18.4153C18.0912 30.1603 17.8262 29.8953 17.8262 29.5716V29.1789C17.8262 28.8551 18.091 28.59 18.4153 28.59H26.1372C26.4613 28.59 26.7265 28.855 26.7265 29.1789V29.5716Z" fill="white"/>
                          <path d="M18.9678 13.2585C18.9678 13.5823 18.7029 13.8476 18.379 13.8476H6.56271C6.23863 13.8476 5.97363 13.5825 5.97363 13.2585V12.8661C5.97363 12.5422 6.23851 12.2772 6.56271 12.2772H18.379C18.7028 12.2772 18.9678 12.5422 18.9678 12.8661V13.2585Z" fill="white"/>
                          <path d="M27.0249 18.6961C27.0249 19.02 26.76 19.285 26.4361 19.285H6.56271C6.23863 19.285 5.97363 19.02 5.97363 18.6961V18.3036C5.97363 17.9797 6.23851 17.7146 6.56271 17.7146H26.4361C26.7599 17.7146 27.0249 17.9796 27.0249 18.3036V18.6961Z" fill="white"/>
                          <path d="M30.7814 8.9681L21.2595 1.13772C20.4711 0.488834 19.1067 0 18.0859 0H3.10741C1.81251 0 0.758789 1.05348 0.758789 2.34862C0.758789 2.34862 0.758789 27.6236 0.758789 34.5812C0.758789 37 3.04651 37 3.10103 37C8.91842 37 29.8922 37 29.8922 37C31.1873 37 32.2408 35.9464 32.2408 34.6513V12.0581C32.2408 10.981 31.6132 9.65237 30.7814 8.9681ZM20.6083 3.54712C20.6083 2.97176 21.0848 3.41317 21.0848 3.41317L28.6323 9.86176C28.6323 9.86176 29.1154 10.337 28.2875 10.337C26.5199 10.337 21.2179 10.337 21.2179 10.337C20.8817 10.337 20.6083 10.0637 20.6083 9.72758C20.6083 9.72758 20.6083 5.09232 20.6083 3.54712ZM29.8922 35.2604C29.8922 35.2604 8.34414 35.2604 2.93652 35.2604C2.84012 35.2604 2.49811 35.2329 2.49811 34.7572C2.49811 28.2096 2.49811 2.3485 2.49811 2.3485C2.49811 2.01816 2.77731 1.7392 3.10741 1.7392H18.0858C18.3394 1.7392 18.8692 1.87374 18.8692 2.59821V9.72758C18.8692 11.0226 19.9227 12.0762 21.2179 12.0762H30.0658C30.2273 12.0762 30.5006 12.1872 30.5006 12.5779C30.5006 12.584 30.5016 34.6511 30.5016 34.6511C30.5016 34.9873 30.2283 35.2604 29.8922 35.2604Z" fill="white"/>
                          </svg>
                          <h2 class="ml-4 font-semibold">LIST OF LEARNING DEVELOPMENT PLANS</h2>
                      </div>
                    </header>
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border">
                                <thead class="text-xs font-semibold uppercase bg-[#E1EDE5]">
                                    <tr>
                                        <th class="w-1/4 p-2">
                                            <div class="font-semibold text-left">Name</div>
                                        </th>
                                        <th class="w-1/4 p-2">
                                            <div class="font-semibold text-left">Owner</div>
                                        </th>
                                        <th class="w-1/4 p-2">
                                            <div class="font-semibold text-left">Date</div>
                                        </th>
                                        <th class="w-1/4 p-2">
                                            <div class="font-semibold text-left">Status</div>
                                        </th>
                                        <th class="w-1/4 p-2"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100">
                                    <tr>
                                        <td class="w-1/4 p-2">
                                          <div class="flex items-center">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path opacity="0.5" d="M17 9H12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                                              <path opacity="0.5" d="M9 2H15.5C15.9644 2 16.1966 2 16.3916 2.02567C17.7378 2.2029 18.7971 3.26222 18.9743 4.60842C19 4.80337 19 5.03558 19 5.5" stroke="#1C274C" stroke-width="1.5"/>
                                              <path d="M1 5.94975C1 5.06722 1 4.62595 1.06935 4.25839C1.37464 2.64031 2.64031 1.37464 4.25839 1.06935C4.62595 1 5.06722 1 5.94975 1C6.33642 1 6.52976 1 6.71557 1.01738C7.51665 1.09229 8.27652 1.40704 8.89594 1.92051C9.0396 2.03961 9.1763 2.17633 9.4497 2.44975L10 3C10.8158 3.81578 11.2237 4.22367 11.7121 4.49543C11.9804 4.64471 12.2651 4.7626 12.5604 4.84678C13.0979 5 13.6747 5 14.8284 5H15.2021C17.8345 5 19.1506 5 20.0062 5.76946C20.0849 5.84024 20.1598 5.91514 20.2305 5.99383C21 6.84935 21 8.16554 21 10.7979V13C21 16.7712 21 18.6569 19.8284 19.8284C18.6569 21 16.7712 21 13 21H9C5.22876 21 3.34315 21 2.17157 19.8284C1 18.6569 1 16.7712 1 13V5.94975Z" stroke="#1C274C" stroke-width="1.5"/>
                                            </svg>
                                              <div class="ml-4 font-medium text-gray-800">AUDITING LESSON PLAN 1</div>
                                          </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M11.9997 23.0993C18.0608 23.0993 23.0991 18.072 23.0991 12C23.0991 5.93888 18.0499 0.900635 11.9888 0.900635C5.91681 0.900635 0.900391 5.93888 0.900391 12C0.900391 18.072 5.92772 23.0993 11.9997 23.0993ZM11.9997 5.73213C14.0781 5.73213 15.7321 7.56026 15.7321 9.75837C15.7321 12.0979 14.089 13.8825 11.9997 13.8608C9.89955 13.839 8.2673 12.0979 8.2673 9.75837C8.24553 7.56026 9.91041 5.73213 11.9997 5.73213ZM18.6158 18.442L18.6484 18.5834C16.9727 20.368 14.4916 21.3909 11.9997 21.3909C9.49692 21.3909 7.01587 20.368 5.34012 18.5834L5.37276 18.442C6.31944 17.1361 8.64816 15.7107 11.9997 15.7107C15.3404 15.7107 17.68 17.1361 18.6158 18.442Z" fill="black"/>
                                            </svg>
                                            <div class="ml-4 text-left">Mr. Professor</div>
                                          </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.733398 2.94338C0.733398 2.12782 1.39333 1.46667 2.21011 1.46667H19.79C20.6056 1.46667 21.2667 2.1266 21.2667 2.94338V20.5233C21.2667 21.3388 20.6068 22 19.79 22H2.21011C1.39455 22 0.733398 21.3401 0.733398 20.5233V2.94338ZM2.20007 7.33333H19.8001V20.5333H2.20007V7.33333ZM5.1334 0.733333C5.1334 0.328325 5.44732 0 5.8736 0H7.32653C7.73533 0 8.06673 0.34017 8.06673 0.733333V1.46667H5.1334V0.733333ZM13.9334 0.733333C13.9334 0.328325 14.2473 0 14.6736 0H16.1265C16.5353 0 16.8667 0.34017 16.8667 0.733333V1.46667H13.9334V0.733333Z" fill="black"/>
                                            </svg>
                                            <div class="ml-4 text-left font-medium">7/3/2024</div>
                                          </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-lg text-left">Pending</div>
                                        </td>
                                        <td class="p-2">
                                          <div class="flex items-center justify-end space-x-6">
                                            <button id="editldp" class="flex items-center text-white rounded-lg p-5 w-24 h-8 bg-[#42604C]">
                                              <svg width="26" height="26" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.1497 5.93991L6.27971 17.8099C5.21971 18.8799 2.04971 19.3698 1.27971 18.6598C0.509711 17.9498 1.06969 14.7799 2.12969 13.7099L13.9997 1.83994C14.5478 1.31795 15.2783 1.03091 16.0351 1.04013C16.7919 1.04936 17.5151 1.35412 18.0503 1.88932C18.5855 2.42451 18.8903 3.14775 18.8995 3.90457C18.9088 4.6614 18.6217 5.39183 18.0997 5.93991H18.1497Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M19 19H10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                              <span class="ml-2">EDIT</span>
                                            </button>

                                            <button id="approveldp" class="flex items-center text-white rounded-lg p-5 w-30 h-8 bg-[#42604C]">
                                              <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23.3387 14.723H18.6002C17.2002 14.723 16.0156 13.5384 16.0156 12.1384C16.231 8.31534 18.0079 8.09996 18.1695 5.62304C18.331 3.03842 16.7156 0.723036 14.1848 0.184575C10.8464 -0.515425 7.83099 2.01534 7.83099 5.24611C7.83099 8.09996 9.76945 8.09996 9.98484 12.1384C9.98484 13.5384 8.80023 14.723 7.40023 14.723H2.66176C1.26176 14.723 0.0771484 15.8538 0.0771484 17.3077V19.0307C0.0771484 19.5153 0.454071 19.8923 0.938687 19.8923H25.0618C25.5464 19.8923 25.9233 19.5153 25.9233 19.0307V17.3077C25.9233 15.8538 24.7387 14.723 23.3387 14.723ZM23.3925 22.4769H2.60792C2.1233 22.4769 1.80023 22.8538 1.80023 23.2846V23.3384C1.80023 24.7384 2.98484 25.923 4.38484 25.923H21.6695C23.0695 25.923 24.2002 24.7384 24.2002 23.3384V23.2846C24.2002 22.8538 23.8233 22.4769 23.3925 22.4769Z" fill="white"/>
                                              </svg>
                                              <span class="ml-2">REQUEST APPROVAL</span>
                                            </button>
                                          </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
        const createLdp = document.getElementById('createldp');

        navButton.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            mainContainer.classList.toggle('shifted');
        });

        createLdp.addEventListener('click', function() {
        window.location.href = '{{ route('ph.createplan') }}';
        });
    });
</script>

</html>
