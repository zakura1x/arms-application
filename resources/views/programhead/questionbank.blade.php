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

      <!-- Main content -->
      <div id="main-content" class="h-screen flex-1 transition-all duration-300 ease-in-out">
        <div class="flex items-end justify-end pr-4 m-2">
          <button id="addButton" class="flex items-center text-white rounded-lg p-4 w-30 h-10 bg-[#42604C]">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M4 12H20M12 4V20" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
            </svg>
            <a class="ml-2">ADD</a>
          </button>
        </div>

        <section class="pl-5 pr-5 antialiased h-1/2">
          <div class="bg-white shadow-lg rounded-lg border border-gray-200 h-full">
            <header class="flex items-center justify-between bg-[#42604C] text-white border-b border-gray-100">
              <div class="p-2 flex items-center">
                <svg width="25" height="25" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M27.0249 24.1337C27.0249 24.4576 26.76 24.7228 26.4361 24.7228H6.56271C6.23863 24.7228 5.97363 24.4577 5.97363 24.1337V23.7413C5.97363 23.4175 6.23851 23.1523 6.56271 23.1523H26.4361C26.7599 23.1523 27.0249 23.4173 27.0249 23.7413V24.1337Z" fill="white"/>
                  <path d="M14.8737 7.82112C14.8737 8.14484 14.6089 8.40996 14.2847 8.40996H6.56271C6.23863 8.40996 5.97363 8.14496 5.97363 7.82112V7.42844C5.97363 7.10459 6.23851 6.83948 6.56271 6.83948H14.2847C14.6087 6.83948 14.8737 7.10447 14.8737 7.42844V7.82112Z" fill="white"/>
                  <path d="M26.7265 29.5716C26.7265 29.8953 26.4614 30.1603 26.1372 30.1603H18.4153C18.0912 30.1603 17.8262 29.8953 17.8262 29.5716V29.1789C17.8262 28.8551 18.091 28.59 18.4153 28.59H26.1372C26.4613 28.59 26.7265 28.855 26.7265 29.1789V29.5716Z" fill="white"/>
                  <path d="M18.9678 13.2585C18.9678 13.5823 18.7029 13.8476 18.379 13.8476H6.56271C6.23863 13.8476 5.97363 13.5825 5.97363 13.2585V12.8661C5.97363 12.5422 6.23851 12.2772 6.56271 12.2772H18.379C18.7028 12.2772 18.9678 12.5422 18.9678 12.8661V13.2585Z" fill="white"/>
                  <path d="M27.0249 18.6961C27.0249 19.02 26.76 19.285 26.4361 19.285H6.56271C6.23863 19.285 5.97363 19.02 5.97363 18.6961V18.3036C5.97363 17.9797 6.23851 17.7146 6.56271 17.7146H26.4361C26.7599 17.7146 27.0249 17.9796 27.0249 18.3036V18.6961Z" fill="white"/>
                  <path d="M30.7814 8.9681L21.2595 1.13772C20.4711 0.488834 19.1067 0 18.0859 0H3.10741C1.81251 0 0.758789 1.05348 0.758789 2.34862C0.758789 2.34862 0.758789 27.6236 0.758789 34.5812C0.758789 37 3.04651 37 3.10103 37C8.91842 37 29.8922 37 29.8922 37C31.1873 37 32.2408 35.9464 32.2408 34.6513V12.0581C32.2408 10.981 31.6132 9.65237 30.7814 8.9681ZM20.6083 3.54712C20.6083 2.97176 21.0848 3.41317 21.0848 3.41317L28.6323 9.86176C28.6323 9.86176 29.1154 10.337 28.2875 10.337C26.5199 10.337 21.2179 10.337 21.2179 10.337C20.8817 10.337 20.6083 10.0637 20.6083 9.72758C20.6083 9.72758 20.6083 5.09232 20.6083 3.54712ZM29.8922 35.2604C29.8922 35.2604 8.34414 35.2604 2.93652 35.2604C2.84012 35.2604 2.49811 35.2329 2.49811 34.7572C2.49811 28.2096 2.49811 2.3485 2.49811 2.3485C2.49811 2.01816 2.77731 1.7392 3.10741 1.7392H18.0858C18.3394 1.7392 18.8692 1.87374 18.8692 2.59821V9.72758C18.8692 11.0226 19.9227 12.0762 21.2179 12.0762H30.0658C30.2273 12.0762 30.5006 12.1872 30.5006 12.5779C30.5006 12.584 30.5016 34.6511 30.5016 34.6511C30.5016 34.9873 30.2283 35.2604 29.8922 35.2604Z" fill="white"/>
                </svg>
                <h2 class="ml-4 font-semibold">LIST OF ASSESSMENT QUESTIONS</h2>
              </div>
            </header>

            <div class="bg-white border border-gray-200 rounded-lg active">
              <div class="overflow-x-auto">
                <table class="table-auto w-full border">
                  <thead class="text-xs font-semibold uppercase bg-[#E1EDE5]">
                    <tr>
                      <th class="w-1/4 p-2">
                        <div class="font-semibold text-left">Question</div>
                      </th>
                      <th class="w-1/4 p-2">
                        <div class="font-semibold text-left">Difficulty Level</div>
                      </th>
                      <th class="w-1/4 p-2">
                        <div class="font-semibold text-left">Sub-Difficulty Level</div>
                      </th>
                      <th class="w-1/4 p-2">
                        <div class="font-semibold text-left">Date Added</div>
                      </th>
                      <th class="w-1/4 p-2">
                        <div class="font-semibold text-left">Approval</div>
                      </th>
                      <th class="w-1/4 p-2">
                        <div class="font-semibold text-left">Status</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="text-sm divide-y divide-gray-100">
                    <tr class="main-row cursor-pointer">
                      <td class="w-1/4 p-2">
                        <div class="flex items-center">
                          <div class="ml-4 font-medium text-gray-800">What is the tax-revenue terms?</div>
                        </div>
                      </td>
                      <td class="w-1/4 p-2">
                        <div class="flex items-center">
                          <div class="font-medium text-gray-800">Moderate</div>
                        </div>
                      </td>
                      <td class="w-1/4 p-2">
                        <div class="flex items-center">
                          <div class="font-medium text-gray-800">Applying</div>
                        </div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                        <div class="flex items-center">
                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.733398 2.94338C0.733398 2.12782 1.39333 1.46667 2.21011 1.46667H19.79C20.6056 1.46667 21.2667 2.1266 21.2667 2.94338V20.5233C21.2667 21.3388 20.6068 22 19.79 22H2.21011C1.39455 22 0.733398 21.3401 0.733398 20.5233V2.94338ZM2.20007 7.33333H19.8001V20.5333H2.20007V7.33333ZM5.1334 0.733333C5.1334 0.328325 5.44732 0 5.8736 0H7.32653C7.73533 0 8.06673 0.34017 8.06673 0.733333V1.46667H5.1334V0.733333ZM13.9334 0.733333C13.9334 0.328325 14.2473 0 14.6736 0H16.1265C16.5353 0 16.8667 0.34017 16.8667 0.733333V1.46667H13.9334V0.733333Z" fill="black"/>
                          </svg>
                          <div class="ml-2 text-left font-medium">7/3/2024</div>
                        </div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                        <div class="flex items-center">
                          <div class="text-lg text-left">Pending</div>
                        </div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                        <div class="flex items-center">
                          <div class="text-lg text-left">Active</div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hidden-row">
                      <td colspan="3" class="p-2">
                        <div class="ml-4">
                          Additional content for "What is the tax value method?" can go here.
                          You can include more details about the question, such as the correct answer, explanation, etc.
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>

        <section class="pt-4 pl-5 pb-5 pr-5 antialiased h-1/2">
          <div class="bg-white shadow-lg rounded-lg border border-gray-200 h-full">
            <header class="flex items-center justify-between bg-[#42604C] text-white border-b border-gray-100">
              <div class="p-2 flex items-center">
                <svg width="25" height="25" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M27.0249 24.1337C27.0249 24.4576 26.76 24.7228 26.4361 24.7228H6.56271C6.23863 24.7228 5.97363 24.4577 5.97363 24.1337V23.7413C5.97363 23.4175 6.23851 23.1523 6.56271 23.1523H26.4361C26.7599 23.1523 27.0249 23.4173 27.0249 23.7413V24.1337Z" fill="white"/>
                  <path d="M14.8737 7.82112C14.8737 8.14484 14.6089 8.40996 14.2847 8.40996H6.56271C6.23863 8.40996 5.97363 8.14496 5.97363 7.82112V7.42844C5.97363 7.10459 6.23851 6.83948 6.56271 6.83948H14.2847C14.6087 6.83948 14.8737 7.10447 14.8737 7.42844V7.82112Z" fill="white"/>
                  <path d="M26.7265 29.5716C26.7265 29.8953 26.4614 30.1603 26.1372 30.1603H18.4153C18.0912 30.1603 17.8262 29.8953 17.8262 29.5716V29.1789C17.8262 28.8551 18.091 28.59 18.4153 28.59H26.1372C26.4613 28.59 26.7265 28.855 26.7265 29.1789V29.5716Z" fill="white"/>
                  <path d="M18.9678 13.2585C18.9678 13.5823 18.7029 13.8476 18.379 13.8476H6.56271C6.23863 13.8476 5.97363 13.5825 5.97363 13.2585V12.8661C5.97363 12.5422 6.23851 12.2772 6.56271 12.2772H18.379C18.7028 12.2772 18.9678 12.5422 18.9678 12.8661V13.2585Z" fill="white"/>
                  <path d="M27.0249 18.6961C27.0249 19.02 26.76 19.285 26.4361 19.285H6.56271C6.23863 19.285 5.97363 19.02 5.97363 18.6961V18.3036C5.97363 17.9797 6.23851 17.7146 6.56271 17.7146H26.4361C26.7599 17.7146 27.0249 17.9796 27.0249 18.3036V18.6961Z" fill="white"/>
                  <path d="M30.7814 8.9681L21.2595 1.13772C20.4711 0.488834 19.1067 0 18.0859 0H3.10741C1.81251 0 0.758789 1.05348 0.758789 2.34862C0.758789 2.34862 0.758789 27.6236 0.758789 34.5812C0.758789 37 3.04651 37 3.10103 37C8.91842 37 29.8922 37 29.8922 37C31.1873 37 32.2408 35.9464 32.2408 34.6513V12.0581C32.2408 10.981 31.6132 9.65237 30.7814 8.9681ZM20.6083 3.54712C20.6083 2.97176 21.0848 3.41317 21.0848 3.41317L28.6323 9.86176C28.6323 9.86176 29.1154 10.337 28.2875 10.337C26.5199 10.337 21.2179 10.337 21.2179 10.337C20.8817 10.337 20.6083 10.0637 20.6083 9.72758C20.6083 9.72758 20.6083 5.09232 20.6083 3.54712ZM29.8922 35.2604C29.8922 35.2604 8.34414 35.2604 2.93652 35.2604C2.84012 35.2604 2.49811 35.2329 2.49811 34.7572C2.49811 28.2096 2.49811 2.3485 2.49811 2.3485C2.49811 2.01816 2.77731 1.7392 3.10741 1.7392H18.0858C18.3394 1.7392 18.8692 1.87374 18.8692 2.59821V9.72758C18.8692 11.0226 19.9227 12.0762 21.2179 12.0762H30.0658C30.2273 12.0762 30.5006 12.1872 30.5006 12.5779C30.5006 12.584 30.5016 34.6511 30.5016 34.6511C30.5016 34.9873 30.2283 35.2604 29.8922 35.2604Z" fill="white"/>
                </svg>
                <h2 class="ml-4 font-semibold">LIST OF PRACTICE QUESTIONS</h2>
              </div>
            </header>

            <div class="">
              <div id="" class=" bg-white border border-gray-200 rounded-lg active">
                <div class="overflow-x-auto">
                  <table class="table-auto w-full border">
                    <thead class="text-xs font-semibold uppercase bg-[#E1EDE5]">
                      <tr>
                        <th class="w-1/4 p-2">
                          <div class="font-semibold text-left">Question</div>
                        </th>
                        <th class="w-1/4 p-2">
                          <div class="font-semibold text-left">Difficulty Level</div>
                        </th>
                        <th class="w-1/4 p-2">
                          <div class="font-semibold text-left">Sub-Difficulty Level</div>
                        </th>
                        <th class="w-1/4 p-2">
                          <div class="font-semibold text-left">Date Added</div>
                        </th>
                        <th class="w-1/4 p-2">
                          <div class="font-semibold text-left">Approval</div>
                        </th>
                        <th class="w-1/4 p-2">
                          <div class="font-semibold text-left">Status</div>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100">
                      <tr class="main-row cursor-pointer">
                        <td class="w-1/4 p-2">
                          <div class="flex items-center">
                            <div class="ml-4 font-medium text-gray-800">What is the tax value method?</div>
                          </div>
                        </td>
                        <td class="w-1/4 p-2">
                          <div class="flex items-center">
                            <div class="font-medium text-gray-800">Easy</div>
                          </div>
                        </td>
                        <td class="w-1/4 p-2">
                          <div class="flex items-center">
                            <div class="font-medium text-gray-800">Remembering</div>
                          </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                          <div class="flex items-center">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.733398 2.94338C0.733398 2.12782 1.39333 1.46667 2.21011 1.46667H19.79C20.6056 1.46667 21.2667 2.1266 21.2667 2.94338V20.5233C21.2667 21.3388 20.6068 22 19.79 22H2.21011C1.39455 22 0.733398 21.3401 0.733398 20.5233V2.94338ZM2.20007 7.33333H19.8001V20.5333H2.20007V7.33333ZM5.1334 0.733333C5.1334 0.328325 5.44732 0 5.8736 0H7.32653C7.73533 0 8.06673 0.34017 8.06673 0.733333V1.46667H5.1334V0.733333ZM13.9334 0.733333C13.9334 0.328325 14.2473 0 14.6736 0H16.1265C16.5353 0 16.8667 0.34017 16.8667 0.733333V1.46667H13.9334V0.733333Z" fill="black"/>
                            </svg>
                            <div class="ml-2 text-left font-medium">7/3/2024</div>
                          </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="text-lg text-left">Pending</div>
                          </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="text-lg text-left">Active</div>
                          </div>
                        </td>
                      </tr>
                      <tr class="hidden-row">
                        <td colspan="3" class="p-2">
                          <div class="ml-4">
                            Additional content for "What is the tax value method?" can go here.
                            You can include more details about the question, such as the correct answer, explanation, etc.
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const navButton = document.getElementById('nav-button');
      const sidebar = document.getElementById('sidebar');
      const mainContainer = document.getElementById('main-container');
      const createquestion = document.getElementById('addButton');

      navButton.addEventListener('click', function () {
        sidebar.classList.toggle('show');
        mainContainer.classList.toggle('shifted');
      });

      // Function to toggle hidden rows
      function toggleHiddenRow(event) {
        const mainRow = event.currentTarget;
        const hiddenRow = mainRow.nextElementSibling;
        if (hiddenRow && hiddenRow.classList.contains('hidden-row')) {
          hiddenRow.style.display = hiddenRow.style.display === 'table-row' ? 'none' : 'table-row';
        }
      }

      // Attach click event listeners to main rows
      const mainRows = document.querySelectorAll('.main-row');
      mainRows.forEach(row => {
        row.addEventListener('click', toggleHiddenRow);
      });

      createquestion.addEventListener('click', function() {
        window.location.href = '{{ route('ph.createquestion') }}';
      });
    });
  </script>
</body>

</html>
