<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('programhead.css')
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
  <div id="layout" class="flex">
    @include('programhead.sidebar')

    <!-- Main container -->
    <div id="main-container" class="h-screen flex-1 transition-all duration-300 ease-in-out">
      @include('programhead.header')

      <div class="p-8 bg-[#E1EDE5] h-full shadow-lg border">
        <div class="w-full">
          <label for="subject"><b>Subject Area</b></label>
          <input id="subject" list="subjects" placeholder="select Subject Area" name="Subjects" required class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
          <datalist id="subjects">
            <option value="Management Advisory Services">
            <option value="Auditing">
            <option value="Regulatory Framework for Business">
            <option value="Taxation">
            <option value="Financial Accounting and Reporting">
            <option value="Advanced Financial Accounting and Reporting">
          </datalist>
        </div>

        <!-- Editable Table -->
        <div class="overflow-x-auto mb-4 bg-white">
          <table id="editableTable" class="editable-table w-full border-collapse items-center justify-center">
            <thead class="text-center text-white text-xs font-semibold uppercase ">
              <tr>
                <th rowspan="2">Topics</th>
                <th rowspan="2">No. of Hours</th>
                <th rowspan="2">%</th>
                <th rowspan="2">No. of Items</th>
                <th class="text-center" colspan="2">EASY (30%)</th>
                <th colspan="1">MODERATE (50%)</th>
                <th colspan="3">DIFFICULT (20%)</th>
              </tr>
              <tr>
                <th>Remembering</th>
                <th>Understanding</th>
                <th>Applying</th>
                <th>Analyzing</th>
                <th>Evaluating</th>
                <th>Creating</th>
              </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
              <tr>
                <td><input type="text"/></td>
                <td><input type="number" min="1" class="sum-column" data-column="1"/></td>
                <td>
                  <div class="inline-flex items-center">
                    <input type="number" min="1" class="sum-column percent-column" data-column="2"/>
                    <span>%</span>
                  </div>
                </td>
                <td><input type="number" min="1" class="sum-column" data-column="3"/></td>
                <td><input type="number" min="1" class="sum-column" data-column="4"/></td>
                <td><input type="number" min="1" class="sum-column" data-column="5"/></td>
                <td><input type="number" min="1" class="sum-column" data-column="6"/></td>
                <td><input type="number" min="1" class="sum-column" data-column="7"/></td>
                <td><input type="number" min="1" class="sum-column" data-column="8"/></td>
                <td><input type="number" min="1" class="sum-column" data-column="9"/></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td class="text-right">Total</td>
                <td id="sum1">0</td>
                <td id="sum2" class="percent-sum">0%</td>
                <td id="sum3">0</td>
                <td id="sum4">0</td>
                <td id="sum5">0</td>
                <td id="sum6">0</td>
                <td id="sum7">0</td>
                <td id="sum8">0</td>
                <td id="sum9">0</td>
              </tr>
            </tfoot>
          </table>
        </div>

        <div class="flex items-center justify-center m-4">
          <button id="addRowButton" class="button uppercase">Add Row</button>
          <button id="saveButton" class="button uppercase">Save</button>
        </div>

        <div class="bg-[#EFF4F6] border border-gray-300 rounded-lg p-4 m-2">
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <button id="togglePanelButton" class="text-gray-500 focus:outline-none">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path id="panelToggleIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <h3 class="font-semibold ml-4">SAMPLE TOPIC TITLE</h3>
            </div>

            <div class="ml-auto flex items-center">
              <div id="openMaterialModal" class="bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                <button type="button" class="ml-2 mr-2">
                  ADD MATERIALS
                </button>
              </div>
              <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-circle avatar">
                  <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(90)" stroke="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <circle cx="5" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle>
                        <circle cx="12" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle>
                        <circle cx="19" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle>
                    </g>
                  </svg>
                </div>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-[#EFF4F6] rounded-box w-52 border border-black border-opacity-50">
                  <li><a>Edit Class</a></li>
                  <li><a>Delete Class</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div id="panelContent" class="">
            <ul class="uploadedFiles list-disc pl-5">
              <li class="flex items-center">
                <button id="toggleFileButton" class="text-gray-500 focus:outline-none">
                  <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path id="fileToggleIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <span class="ml-4"><a href="#" target="_blank">Sample Material Title</a></span>
              </li>
            </ul>
          </div>
        </div>

        <div class="bg-[#EFF4F6] border border-gray-300 rounded-lg p-4 m-2">
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <button id="togglePanelButton" class="text-gray-500 focus:outline-none">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path id="panelToggleIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <h3 class="font-semibold ml-4">SAMPLE TOPIC TITLE</h3>
            </div>

            <div class="ml-auto flex items-center">
              <div id="openMaterialModal" class="bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                <button type="button" class="ml-2 mr-2">
                  ADD MATERIALS
                </button>
              </div>
              <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-circle avatar">
                  <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(90)" stroke="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <circle cx="5" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle>
                        <circle cx="12" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle>
                        <circle cx="19" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle>
                    </g>
                  </svg>
                </div>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-[#EFF4F6] rounded-box w-52 border border-black border-opacity-50">
                  <li><a>Edit Class</a></li>
                  <li><a>Delete Class</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div id="panelContent" class="">
            <ul class="uploadedFiles list-disc pl-5">
              <li class="flex items-center">
                <button id="toggleFileButton" class="text-gray-500 focus:outline-none">
                  <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path id="fileToggleIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <span class="ml-4"><a href="#" target="_blank">Sample Material Title</a></span>
              </li>
            </ul>
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
      const backbtn = document.getElementById('backButton');
      const saveButton = document.getElementById('saveButton');
      const addRowButton = document.getElementById('addRowButton');
      const tableBody = document.querySelector('#editableTable tbody');

      navButton?.addEventListener('click', function() {
        sidebar.classList.toggle('show');
        mainContainer.classList.toggle('shifted');
      });

      backbtn?.addEventListener('click', function() {
        window.location.href = '{{ route('ph.plan') }}';
      });

      addRowButton.addEventListener('click', function() {
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
          <td><input type="text"/></td>
          <td><input type="number" min="1" class="sum-column" data-column="1"/></td>
          <td>
            <div class="inline-flex items-center">
              <input type="number" min="1" class="sum-column percent-column" data-column="2"/>
              <span>%</span>
            </div>
          </td>
          <td><input type="number" min="1" class="sum-column" data-column="3"/></td>
          <td><input type="number" min="1" class="sum-column" data-column="4"/></td>
          <td><input type="number" min="1" class="sum-column" data-column="5"/></td>
          <td><input type="number" min="1" class="sum-column" data-column="6"/></td>
          <td><input type="number" min="1" class="sum-column" data-column="7"/></td>
          <td><input type="number" min="1" class="sum-column" data-column="8"/></td>
          <td><input type="number" min="1" class="sum-column" data-column="9"/></td>
        `;
        tableBody.appendChild(newRow);

        newRow.querySelectorAll('.sum-column').forEach(input => {
          input.addEventListener('input', updateSum);
        });

        updateSum();
      });

      saveButton.addEventListener('click', function() {
        // Add your save logic here
        const rows = tableBody.querySelectorAll('tr');
        const data = [];
        rows.forEach(row => {
          const inputs = row.querySelectorAll('input');
          const rowData = Array.from(inputs).map(input => input.value);
          data.push(rowData);
        });

        window.alert('Saved on Database: ' + JSON.stringify(data));
        window.location.href = '{{ route('ph.plan') }}';
      });

      function updateSum() {
        const columns = 9;
        for (let i = 1; i <= columns; i++) {
          let sum = 0;
          document.querySelectorAll(`.sum-column[data-column="${i}"]`).forEach(input => {
            sum += parseFloat(input.value) || 0;
          });
          const sumCell = document.getElementById(`sum${i}`);
          if (i === 2) { // Check if it's the percentage column
            sumCell.textContent = sum + '%';
            if (sum > 100) {
              sumCell.style.color = 'red';
            } else {              sumCell.style.color = '';
            }
          } else {
            sumCell.textContent = sum;
          }
        }
      }

      document.querySelectorAll('.sum-column').forEach(input => {
        input.addEventListener('input', updateSum);
      });

      updateSum();
    });
  </script>
</body>
</html>
