<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('programhead.css')
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
  <div id="layout" class="flex">
    @include('programhead.sidebar')

    <!-- Main container -->
    <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
      @include('programhead.header')

      <div class="p-8 bg-custom2 h-full shadow-lg border">
        <header class="bg-custom3 text-white border-b border-gray-100">
          <div class="p-4 flex items-center">
            <svg width="25" height="25" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M27.0249 24.1337C27.0249 24.4576 26.76 24.7228 26.4361 24.7228H6.56271C6.23863 24.7228 5.97363 24.4577 5.97363 24.1337V23.7413C5.97363 23.4175 6.23851 23.1523 6.56271 23.1523H26.4361C26.7599 23.1523 27.0249 23.4173 27.0249 23.7413V24.1337Z" fill="white"/>
                <path d="M14.8737 7.82112C14.8737 8.14484 14.6089 8.40996 14.2847 8.40996H6.56271C6.23863 8.40996 5.97363 8.14496 5.97363 7.82112V7.42844C5.97363 7.10459 6.23851 6.83948 6.56271 6.83948H14.2847C14.6087 6.83948 14.8737 7.10447 14.8737 7.42844V7.82112Z" fill="white"/>
                <path d="M26.7265 29.5716C26.7265 29.8953 26.4614 30.1603 26.1372 30.1603H18.4153C18.0912 30.1603 17.8262 29.8953 17.8262 29.5716V29.1789C17.8262 28.8551 18.091 28.59 18.4153 28.59H26.1372C26.4613 28.59 26.7265 28.855 26.7265 29.1789V29.5716Z" fill="white"/>
                <path d="M18.9678 13.2585C18.9678 13.5823 18.7029 13.8476 18.379 13.8476H6.56271C6.23863 13.8476 5.97363 13.5825 5.97363 13.2585V12.8661C5.97363 12.5422 6.23851 12.2772 6.56271 12.2772H18.379C18.7028 12.2772 18.9678 12.5422 18.9678 12.8661V13.2585Z" fill="white"/>
                <path d="M27.0249 18.6961C27.0249 19.02 26.76 19.285 26.4361 19.285H6.56271C6.23863 19.285 5.97363 19.02 5.97363 18.6961V18.3036C5.97363 17.9797 6.23851 17.7146 6.56271 17.7146H26.4361C26.7599 17.7146 27.0249 17.9796 27.0249 18.3036V18.6961Z" fill="white"/>
                <path d="M30.7814 8.9681L21.2595 1.13772C20.4711 0.488834 19.1067 0 18.0859 0H3.10741C1.81251 0 0.758789 1.05348 0.758789 2.34862C0.758789 2.34862 0.758789 27.6236 0.758789 34.5812C0.758789 37 3.04651 37 3.10103 37C8.91842 37 29.8922 37 29.8922 37C31.1873 37 32.2408 35.9464 32.2408 34.6513V12.0581C32.2408 10.981 31.6132 9.65237 30.7814 8.9681ZM20.6083 3.54712C20.6083 2.97176 21.0848 3.41317 21.0848 3.41317L28.6323 9.86176C28.6323 9.86176 29.1154 10.337 28.2875 10.337C26.5199 10.337 21.2179 10.337 21.2179 10.337C20.8817 10.337 20.6083 10.0637 20.6083 9.72758C20.6083 9.72758 20.6083 5.09232 20.6083 3.54712ZM29.8922 35.2604C29.8922 35.2604 8.34414 35.2604 2.93652 35.2604C2.84012 35.2604 2.49811 35.2329 2.49811 34.7572C2.49811 28.2096 2.49811 2.3485 2.49811 2.3485C2.49811 2.01816 2.77731 1.7392 3.10741 1.7392H18.0858C18.3394 1.7392 18.8692 1.87374 18.8692 2.59821V9.72758C18.8692 11.0226 19.9227 12.0762 21.2179 12.0762H30.0658C30.2273 12.0762 30.5006 12.1872 30.5006 12.5779C30.5006 12.584 30.5016 34.6511 30.5016 34.6511C30.5016 34.9873 30.2283 35.2604 29.8922 35.2604Z" fill="white"/>
            </svg>
            <h2 class="ml-4 font-semibold">Learning Development Plan Details</h2>
          </div>
        </header>
        <div class="overflow-x-auto h-screen bg-custom1">
          <div class="p-8">
            <form id="ldpForm" action="#" method="#">
              <div class="flex items-center">
                <div class="w-1/2 mr-5">
                  <label for="lessontitle"><b>Lesson Plan Title</b></label>
                  <input id="lessontitle" type="text" placeholder="Enter Lesson Plan Title" required class="bg-custom2 border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                </div>
                <div class="w-1/2">
                  <label for="subject"><b>Subject</b></label>
                  <input id="subject" list="subjects" placeholder="Enter Subject" name="Subjects" required class="bg-custom2 border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                  <datalist id="subjects">
                    <option value="Taxation">
                    <option value="Auditing">
                    <option value="Financial Management">
                  </datalist>
                </div>
              </div>

              <div class="flex items-center">
                <div class="w-1/2 mr-5">
                  <div class="flex items-center justify-center rounded-lg bg-custom2 border-dashed border-2 border-black border-opacity-50">
                    <input id="pdffiles" type="file" class="inset-0 border-1 text-black border-black border-dashed w-1/2 h-full cursor-pointer p-8" accept="image/*">
                    <div class="flex items-center justify-center">
                        <div class="ml-2 text-center">
                            <p class="text-sm text-black">Select Files to Upload</p>
                            <p class="text-xs text-black">PDF Files only</p>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="flex items-end justify-end space-x-6 p-4 w-1/2">
                  <button type="button" id="firstbackButton" class="close bg-custom1 font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                    CANCEL
                  </button>
                  <div id="firstsaveButtonContainer" class="flex items-center justify-center bg-custom3 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                    <svg width="23px" height="23px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1716 1C18.702 1 19.2107 1.21071 19.5858 1.58579L22.4142 4.41421C22.7893 4.78929 23 5.29799 23 5.82843V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H18.1716ZM4 3C3.44772 3 3 3.44772 3 4V20C3 20.5523 3.44772 21 4 21L5 21L5 15C5 13.3431 6.34315 12 8 12L16 12C17.6569 12 19 13.3431 19 15V21H20C20.5523 21 21 20.5523 21 20V6.82843C21 6.29799 20.7893 5.78929 20.4142 5.41421L18.5858 3.58579C18.2107 3.21071 17.702 3 17.1716 3H17V5C17 6.65685 15.6569 8 14 8H10C8.34315 8 7 6.65685 7 5V3H4ZM17 21V15C17 14.4477 16.5523 14 16 14L8 14C7.44772 14 7 14.4477 7 15V21L17 21ZM9 3H15V5C15 5.55228 14.5523 6 14 6H10C9.44772 6 9 5.55228 9 5V3Z" fill="#ffffff"></path> </g></svg>
                    <button id="firstsaveButton" type="button" class="ml-2">
                      SAVE
                    </button>
                  </div>
                </div>
              </div>
            </form>

            <div class="border-2 border-green-700 mt-4 mb-4"></div>

            <!-- Modal -->
            <div id="topicModal" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
              <div class="bg-white rounded-lg shadow-lg w-1/2">
                <header class="bg-custom3 text-white border-b border-gray-100 rounded-t-lg">
                  <div class="p-4 flex items-center">
                    <h2 class="font-semibold">Create New Topic</h2>
                  </div>
                </header>
                <div class="p-4">
                  <form id="topicForm" action="#" method="#">
                    <label for="topicTitle"><b>Add Topic Title</b></label>
                    <input id="topicTitle" type="text" required class="bg-custom1 border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">

                    <div class="flex items-center justify-end space-x-6 p-2">
                      <button type="button" id="closeTopicModal" class="close font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                        CANCEL
                      </button>
                      <div class="flex items-center bg-custom3 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5.71986 1.72855C2.84248 3.13072 0.859863 6.08382 0.859863 9.49999C0.859863 14.2718 4.72812 18.14 9.49986 18.14C14.2716 18.14 18.1399 14.2718 18.1399 9.49999C18.1399 4.72824 14.2716 0.859985 9.49986 0.859985V11.66" stroke="white" stroke-width="1.2"/>
                          <path d="M13.2797 7.88L9.49973 11.66L5.71973 7.88" stroke="white" stroke-width="1.2"/>
                        </svg>
                        <button type="submit" class="ml-2">
                          SAVE
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div id="newButtonContainer" class="flex flex-wrap mt-4 mb-4"></div> <!-- Container for dynamically created buttons -->

            <div id="expansionPanels" class="space-y-4"></div> <!-- Container for expansion panels -->

            <div id="secondButtonsContainer" class="flex items-end justify-end space-x-6 p-4 w-full hidden">
              <button type="button" id="secondbackButton" class="close bg-custom1 font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                CANCEL
              </button>
              <div class="flex items-center justify-center bg-custom3 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                <svg width="23px" height="23px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1716 1C18.702 1 19.2107 1.21071 19.5858 1.58579L22.4142 4.41421C22.7893 4.78929 23 5.29799 23 5.82843V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H18.1716ZM4 3C3.44772 3 3 3.44772 3 4V20C3 20.5523 3.44772 21 4 21L5 21L5 15C5 13.3431 6.34315 12 8 12L16 12C17.6569 12 19 13.3431 19 15V21H20C20.5523 21 21 20.5523 21 20V6.82843C21 6.29799 20.7893 5.78929 20.4142 5.41421L18.5858 3.58579C18.2107 3.21071 17.702 3 17.1716 3H17V5C17 6.65685 15.6569 8 14 8H10C8.34315 8 7 6.65685 7 5V3H4ZM17 21V15C17 14.4477 16.5523 14 16 14L8 14C7.44772 14 7 14.4477 7 15V21L17 21ZM9 3H15V5C15 5.55228 14.5523 6 14 6H10C9.44772 6 9 5.55228 9 5V3Z" fill="#ffffff"></path> </g></svg>
                <button type="submit" class="ml-2" id="secondsaveButton">
                  SAVE
                </button>
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
      const backbtn = document.getElementById('firstbackButton');
      const secondbackbtn = document.getElementById('secondbackButton');
      const saveButton = document.getElementById('firstsaveButton');
      const secondSaveButton = document.getElementById('secondsaveButton');
      const saveButtonContainer = document.getElementById('firstsaveButtonContainer');
      const secondButtonsContainer = document.getElementById('secondButtonsContainer');
      const newButtonContainer = document.getElementById('newButtonContainer');
      const topicModal = document.getElementById('topicModal');
      const expansionPanelsContainer = document.getElementById('expansionPanels');

      navButton.addEventListener('click', function() {
          sidebar.classList.toggle('show');
          mainContainer.classList.toggle('shifted');
      });

      backbtn.addEventListener('click', function() {
          window.location.href = '{{ route('ph.plan') }}';
      });

      secondbackbtn.addEventListener('click', function() {
          window.location.href = '{{ route('ph.plan') }}';
      });

      saveButton.addEventListener('click', function(event) { //LDP upper Part
          const form = document.getElementById('ldpForm');
          if (form.checkValidity()) {
              event.preventDefault();

              if (!document.getElementById('openModal')) { //Showing Topic Modal
                  const newButton = document.createElement('button');
                  newButton.textContent = 'CREATE NEW TOPIC';
                  newButton.className = 'bg-custom3 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline';
                  newButton.id = 'openModal';
                  newButtonContainer.appendChild(newButton);

                  newButton.addEventListener('click', function () {
                      topicModal.classList.remove('hidden');
                      document.body.classList.add('modal-active');
                  });
              }

              backbtn.classList.add('hidden');
              saveButtonContainer.classList.add('hidden');
              secondButtonsContainer.classList.remove('hidden');
              // Optional: Submit the form if needed
              // form.submit();
          } else {
              form.reportValidity();
          }
      });


      const closeTopicModalBtn = document.getElementById('closeTopicModal');
      closeTopicModalBtn.addEventListener('click', function () {
          topicModal.classList.add('hidden');
          document.body.classList.remove('modal-active');
      });

      const topicForm = document.getElementById('topicForm');
      topicForm.addEventListener('submit', function(event) {
          event.preventDefault();

          const topicTitle = document.getElementById('topicTitle').value;

          // Create expansion panel HTML
          const panelHTML = `
              <div class="bg-custom2 border border-gray-300 rounded-lg p-2">
                  <div class="flex items-center justify-between">
                      <div class="flex items-center">
                          <button id="togglePanelButton" class="text-gray-500 focus:outline-none">
                              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path id="panelToggleIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                              </svg>
                          </button>
                          <h3 class="font-semibold ml-4">${topicTitle}</h3>
                      </div>

                      <div class="ml-auto flex items-center">
                          <div class="flex items-center bg-custom3 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                              <input type="file" class="fileInput" accept="application/pdf" style="display: none;">
                              <button type="button" class="ml-2 mr-2" onclick="this.previousElementSibling.click();">
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
                              <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-custom2 rounded-box w-52 border border-black border-opacity-50">
                                  <li><a>Edit Class</a></li>
                                  <li><a>Delete Class</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>

                  <div id="panelContent" class="hidden">
                      <ul class="uploadedFiles list-disc pl-5"></ul>
                  </div>
              </div>
          `;

          // Append panel HTML to expansion panels container
          const panelElement = document.createElement('div');
          panelElement.innerHTML = panelHTML;
          expansionPanelsContainer.appendChild(panelElement);

          // Reset the form and close modal
          topicForm.reset();
          topicModal.classList.add('hidden');

          // Toggle panel content visibility
          const togglePanelButton = panelElement.querySelector('#togglePanelButton');
          const panelContent = panelElement.querySelector('#panelContent');
          togglePanelButton.addEventListener('click', function() {
              panelContent.classList.toggle('hidden');
              const icon = togglePanelButton.querySelector('#panelToggleIcon');
              icon.setAttribute('d', panelContent.classList.contains('hidden') ? 'M19 9l-7 7-7-7' : 'M19 15l-7-7-7 7');
          });

          // Handle file upload
          const fileInput = panelElement.querySelector('.fileInput');
          fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file && file.type === 'application/pdf') {
              const fileURL = URL.createObjectURL(file);
              const listItem = document.createElement('li');
              listItem.classList.add('flex', 'items-center', 'mb-2');
              listItem.innerHTML = `
                <a href="${fileURL}" target="_blank" class="flex items-center H">
                  <svg width="30" height="30" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
                    <path d="M1.33337 10.6666C1.33337 6.18828 1.33337 3.94911 2.72462 2.55787C4.11586 1.16663 6.35503 1.16663 10.8334 1.16663H17.1667C21.645 1.16663 23.8842 1.16663 25.2754 2.55787C26.6667 3.94911 26.6667 6.18828 26.6667 10.6666V23.3333C26.6667 27.8116 26.6667 30.0507 25.2754 31.442C23.8842 32.8333 21.645 32.8333 17.1667 32.8333H10.8334C6.35503 32.8333 4.11586 32.8333 2.72462 31.442C1.33337 30.0507 1.33337 27.8116 1.33337 23.3333V10.6666Z" stroke="#436850" stroke-width="1.5"/>
                    <path d="M26.5049 23.3333H7.50486C6.03241 23.3333 5.29617 23.3333 4.69213 23.4951C3.05294 23.9343 1.77259 25.2147 1.33337 26.8538" stroke="#436850" stroke-width="1.5"/>
                    <path opacity="0.5" d="M7.66675 9.08325H20.3334" stroke="#436850" stroke-width="1.5" stroke-linecap="round"/>
                    <path opacity="0.5" d="M7.66675 14.625H15.5834" stroke="#436850" stroke-width="1.5" stroke-linecap="round"/>
                    <path opacity="0.5" d="M15.5833 23.3333V28.9238C15.5833 29.3602 15.5833 29.5784 15.4331 29.6666C15.283 29.7548 15.0776 29.6572 14.6667 29.462L12.6999 28.5279C12.5609 28.4618 12.4914 28.4287 12.4167 28.4287C12.3419 28.4287 12.2724 28.4618 12.1334 28.5279L10.1666 29.462C9.75576 29.6572 9.55037 29.7548 9.40018 29.6666C9.25 29.5784 9.25 29.3602 9.25 28.9238V24.0458" stroke="#436850" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                  ${file.name}
                </a>
              `;
              panelElement.querySelector('.uploadedFiles').appendChild(listItem);
              panelContent.classList.remove('hidden');
            } else {
              alert('Please upload a valid PDF file.');
            }
          });
      });
  });
</script>

</html>
