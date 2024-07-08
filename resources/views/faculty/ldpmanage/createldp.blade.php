<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('faculty.css')
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
  <div id="layout" class="flex">
    @include('faculty.sidebar')

    <!-- Main container -->
    <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
      @include('faculty.header')

      <div class="p-8 bg-custom2 h-full shadow-lg border">
        <header class="bg-custom3 text-white border-b border-gray-100">
          <div class="p-4 flex items-center">
            <svg width="25" height="25" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <!-- SVG paths -->
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
                  <button type="button" id="backbtn" class="close bg-custom1 font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                    CANCEL
                  </button>
                  <div id="saveButton" class="flex items-center justify-center bg-custom3 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                    <svg width="23px" height="23px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1716 1C18.702 1 19.2107 1.21071 19.5858 1.58579L22.4142 4.41421C22.7893 4.78929 23 5.29799 23 5.82843V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H18.1716ZM4 3C3.44772 3 3 3.44772 3 4V20C3 20.5523 3.44772 21 4 21L5 21L5 15C5 13.3431 6.34315 12 8 12L16 12C17.6569 12 19 13.3431 19 15V21H20C20.5523 21 21 20.5523 21 20V6.82843C21 6.29799 20.7893 5.78929 20.4142 5.41421L18.5858 3.58579C18.2107 3.21071 17.702 3 17.1716 3H17V5C17 6.65685 15.6569 8 14 8H10C8.34315 8 7 6.65685 7 5V3H4ZM17 21V15C17 14.4477 16.5523 14 16 14L8 14C7.44772 14 7 14.4477 7 15V21L17 21ZM9 3H15V5C15 5.55228 14.5523 6 14 6H10C9.44772 6 9 5.55228 9 5V3Z" fill="#ffffff"></path> </g></svg>
                    <button type="submit" class="ml-2">
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
                    <input id="topicTitle" type="text" placeholder="" required class="bg-custom1 border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">

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

            <div id="expansionPanels" class="space-y-4 space-x-4"></div> <!-- Container for expansion panels -->

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
      const backbtn = document.getElementById('backbtn');
      const saveButton = document.getElementById('saveButton');
      const newButtonContainer = document.getElementById('newButtonContainer');
      const topicModal = document.getElementById('topicModal');
      const expansionPanelsContainer = document.getElementById('expansionPanels');

      navButton.addEventListener('click', function() {
        sidebar.classList.toggle('show');
        mainContainer.classList.toggle('shifted');
      });

      backbtn.addEventListener('click', function() {
        window.location.href = '{{ route('f.plan') }}';
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

        if (topicTitle.trim() === '') {
          alert('Please enter a topic title');
          return;
        }

        // Create expansion panel HTML
        const panelHTML = `
          <div class="bg-custom2 border border-gray-300 rounded-lg p-4">
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <button id="togglePanelButton" class="text-gray-500 focus:outline-none">
                  <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path id="panelToggleIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <h3 class="font-semibold ml-2">${topicTitle}</h3>
              </div>

              <div class="ml-auto flex items-center">
                <div id="addMats" class="flex items-center bg-custom3 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                  <button type="submit" class="ml-2">
                    ADD MATERIALS
                  </button>
                </div>
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(90)" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="5" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> <circle cx="12" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> <circle cx="19" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> </g></svg>
              </div>
            </div>

            <div id="panelContent" class="hidden">
              <p class="text-gray-600">Panel content goes here.</p>
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
          // const icon = togglePanelButton.querySelector('#panelToggleIcon');
          // icon.classList.toggle('rotate-180');
        });
      });
    });
  </script>
</body>

</html>
