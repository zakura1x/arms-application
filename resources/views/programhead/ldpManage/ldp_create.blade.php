<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('programhead.css')
</head>

<body class="font-poppins antialiased text-black">
    <div id="layout" class="flex">
        @include('programhead.sidebar')

        <!-- Main container -->
        <div id="main-container" class="h-screen flex-1 transition-all duration-300 ease-in-out">
            @include('programhead.navbar')

            <form id="editableTableForm" method="POST" action="{{ route('ph.add-ldp') }}">
                @csrf
                <div class="p-8 bg-[#E1EDE5] h-full shadow-lg border">
                    <div class="w-full">
                        <label for="subject"><b>Subject Area</b></label>
                        <input id="subject" list="subject_name" placeholder="select Subject Area" name="subject_name"
                            required
                            class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                        <datalist id="subject_name">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->subject_name }}">
                            @endforeach
                        </datalist>
                    </div>

                    <!-- Editable Table -->
                    <div class="overflow-x-auto mb-4 bg-white">
                        <table id="editableTable"
                            class="editable-table w-full border-collapse items-center justify-center">
                            <thead class="text-center text-white text-xs font-semibold uppercase ">
                                <tr>
                                    <th rowspan="2">Topics</th>
                                    <th rowspan="2">No. of Hours</th>
                                    <th rowspan="2">%</th>
                                    <th rowspan="2">No. of Items</th>
                                    <th class="text-center" colspan="2">EASY (30%)</th>
                                    <th colspan="1">MODERATE (50%)</th>
                                    <th colspan="4">DIFFICULT (20%)</th>
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
                                    <td><input type="text" name="topic_name[]" /></td>
                                    <td><input type="number" min="1" class="sum-column" data-column="1"
                                            name="no_of_hours[]" /></td>
                                    <td>
                                        <div class="inline-flex items-center">
                                            <input type="number" min="1" class="sum-column percent-column"
                                                data-column="2" name="percentages[]" />
                                            <span>%</span>
                                        </div>
                                    </td>
                                    <td><input type="number" min="1" class="sum-column" data-column="3"
                                            name="no_of_items[]" /></td>
                                    <td><input type="number" min="1" class="sum-column" data-column="4"
                                            name="easy_remembering[]" /></td>
                                    <td><input type="number" min="1" class="sum-column" data-column="5"
                                            name="easy_understanding[]" /></td>
                                    <td><input type="number" min="1" class="sum-column" data-column="6"
                                            name="moderate_applying[]" /></td>
                                    <td><input type="number" min="1" class="sum-column" data-column="7"
                                            name="difficult_analyzing[]" /></td>
                                    <td><input type="number" min="1" class="sum-column" data-column="8"
                                            name="difficult_evaluating[]" /></td>
                                    <td><input type="number" min="1" class="sum-column" data-column="9"
                                            name="difficult_creating[]" /></td>
                                    <td><button type="button" class="remove-row-button">Remove</button></td>
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
                        <button type="submit" id="saveButton" class="button uppercase">Save</button>
                    </div>
            </form>


            <div class="bg-[#EFF4F6] border border-gray-300 rounded-lg p-4 m-2">
                <!-- 1ST TOGGLE -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <button id="togglePanelButton" class="text-gray-500 focus:outline-none">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="panelToggleIcon" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <h3 class="font-semibold ml-4">SAMPLE TOPIC TITLE</h3>
                    </div>
                    <div class="ml-auto flex items-center">
                        <div id="openMaterialModal"
                            class="bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                            <button type="button" class="ml-2 mr-2">ADD MATERIALS</button>
                        </div>
                    </div>
                </div>

                <!-- 2ND TOGGLE -->
                <div id="panelContent" class="hidden">
                    <ul class="uploadedFiles list-disc pl-5">
                        <li class="flex items-center">
                            <button id="toggleFileButton" class="text-gray-500 focus:outline-none">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="fileToggleIcon" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <span class="ml-4"><a href="#" target="_blank">Sample Material
                                    Title</a></span>
                        </li>

                        <!-- 3RD TOGGLE -->
                        <div id="fileContent" class="hidden pl-5">
                            <li class="flex items-center">
                                <button id="toggleInsideFileButton" class="text-gray-500 focus:outline-none">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path id="fileInsideToggleIcon" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                        </path>
                                    </svg>
                                </button>
                                <span class="ml-4"><a href="#" target="_blank">Additional Information
                                        here</a></span>
                            </li>
                            <div id="fileInsideContent" class="hidden pl-5">
                                <p>Nested additional content here.</p>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>



            <!-- Add Materials Modal -->
            <div id="materialModal"
                class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
                <div class="bg-white rounded-lg shadow-lg w-1/2">
                    <header class="bg-[#42604C] text-white border-b border-gray-100 rounded-t-lg">
                        <div class="p-4 flex items-center justify-between">
                            <h2 class="font-semibold">Add New Materials</h2>
                        </div>
                    </header>
                    <div class="p-4">
                        <form id="materialForm" action="#" method="#" enctype="multipart/form-data">
                            <label for="materialTitle"><b>Material Title</b></label>
                            <input id="materialTitle" type="text" required
                                class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                            <input id="materialDescription" type="text" placeholder="Material Description"
                                required
                                class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                            <label for="materialFile"><b>Attach File</b></label>
                            <input id="materialFile" type="file" accept="application/pdf" required
                                class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-15 p-2 ease-linear transition-all duration-150">

                            <div class="flex items-center justify-end space-x-6 p-2">
                                <button type="button" id="closeMaterialModal"
                                    class="font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">CANCEL</button>
                                <div
                                    class="flex items-center bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.71986 1.72855C2.84248 3.13072 0.859863 6.08382 0.859863 9.49999C0.859863 14.2718 4.72812 18.14 9.49986 18.14C14.2716 18.14 18.1399 14.2718 18.1399 9.49999C18.1399 4.72824 14.2716 0.859985 9.49986 0.859985V11.66"
                                            stroke="white" stroke-width="1.2" />
                                        <path d="M13.2797 7.88L9.49973 11.66L5.71973 7.88" stroke="white"
                                            stroke-width="1.2" />
                                    </svg>
                                    <button type="submit" class="ml-2">ADD</button>
                                </div>
                            </div>
                        </form>
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
            const backbtn = document.getElementById('backButton');

            const saveButton = document.getElementById('saveButton');
            const addRowButton = document.getElementById('addRowButton');
            const tableBody = document.querySelector('#editableTable tbody');

            const openMaterialModal = document.getElementById('openMaterialModal');
            const closeMaterialModal = document.getElementById('closeMaterialModal');
            const materialModal = document.getElementById('materialModal');

            const togglePanelButton = document.getElementById('togglePanelButton');
            const toggleFileButton = document.getElementById('toggleFileButton');
            const toggleInsideFileButton = document.getElementById('toggleInsideFileButton');

            navButton?.addEventListener('click', function() {
                sidebar.classList.toggle('show');
                mainContainer.classList.toggle('shifted');
            });

            backbtn?.addEventListener('click', function() {
                window.location.href = '{{ route('ph.ldp-list') }}';
            });

            openMaterialModal.addEventListener('click', function() {
                materialModal.classList.remove('hidden');
            });

            closeMaterialModal.addEventListener('click', function() {
                materialForm.reset();
                materialModal.classList.add('hidden');
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
          <td><button type="button" class="remove-row-button">Remove</button></td>
        `;
                tableBody.appendChild(newRow);

                newRow.querySelectorAll('.sum-column').forEach(input => {
                    input.addEventListener('input', updateSum);
                });

                newRow.querySelector('.remove-row-button').addEventListener('click', function() {
                    newRow.remove();
                    updateSum();
                });

                updateSum();
            });

            // saveButton.addEventListener('click', function() {
            //     // Add your save logic here
            //     const rows = tableBody.querySelectorAll('tr');
            //     const data = [];
            //     rows.forEach(row => {
            //         const inputs = row.querySelectorAll('input');
            //         const rowData = Array.from(inputs).map(input => input.value);
            //         data.push(rowData);
            //     });

            //     window.alert('Saved on Database: ' + JSON.stringify(data));
            //     window.location.href = '{{ route('ph.ldp-list') }}';
            // });

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
                        } else {
                            sumCell.style.color = '';
                        }
                    } else {
                        sumCell.textContent = sum;
                    }
                }
            }

            document.querySelectorAll('.sum-column').forEach(input => {
                input.addEventListener('input', updateSum);
            });

            document.querySelectorAll('.remove-row-button').forEach(button => {
                button.addEventListener('click', function() {
                    button.closest('tr').remove();
                    updateSum();
                });
            });

            updateSum();
        });

        // Toggle panel content
        togglePanelButton.addEventListener('click', function() {
            const panelContent = document.getElementById('panelContent');
            const panelToggleIcon = document.getElementById('panelToggleIcon');
            panelContent.classList.toggle('hidden');
            if (panelContent.classList.contains('hidden')) {
                panelToggleIcon.setAttribute('d', 'M19 9l-7 7-7-7');
            } else {
                panelToggleIcon.setAttribute('d', 'M19 15l-7-7-7 7');
            }
        });

        // Toggle file content
        toggleFileButton.addEventListener('click', function() {
            const fileContent = document.getElementById('fileContent');
            const fileToggleIcon = document.getElementById('fileToggleIcon');
            fileContent.classList.toggle('hidden');
            if (fileContent.classList.contains('hidden')) {
                fileToggleIcon.setAttribute('d', 'M19 9l-7 7-7-7');
            } else {
                fileToggleIcon.setAttribute('d', 'M19 15l-7-7-7 7');
            }
        });

        // Toggle inside file content
        toggleInsideFileButton.addEventListener('click', function() {
            const fileInsideContent = document.getElementById('fileInsideContent');
            const fileInsideToggleIcon = document.getElementById('fileInsideToggleIcon');
            fileInsideContent.classList.toggle('hidden');
            if (fileInsideContent.classList.contains('hidden')) {
                fileInsideToggleIcon.setAttribute('d', 'M19 9l-7 7-7-7');
            } else {
                fileInsideToggleIcon.setAttribute('d', 'M19 15l-7-7-7 7');
            }
        });
    </script>
</body>

</html>
