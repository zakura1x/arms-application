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

      <div class="p-8 bg-[#d5e1d8] h-full shadow-lg border">
        <div class="bg-[#f3f3f3] h-full">
          <header class="bg-[#42604C] text-white border-b border-gray-100">
            <div class="p-4 flex items-start justify-between">
              <div class="flex items-center w-full">
                <a href="{{route('ph.plan')}}">
                  <svg width="30px" height="30px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:none;stroke:#ffffff;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px;}</style> </defs> <g data-name="Layer 2" id="Layer_2"> <g data-name="E421, Back, buttons, multimedia, play, stop" id="E421_Back_buttons_multimedia_play_stop"> <circle class="cls-1" cx="256" cy="256" r="246"></circle> <line class="cls-1" x1="352.26" x2="170.43" y1="256" y2="256"></line> <polyline class="cls-1" points="223.91 202.52 170.44 256 223.91 309.48"></polyline> </g> </g> </g></svg>
                </a>
                <h2 class="ml-4 font-semibold">Learning Development Plan Details</h2>
              </div>
            </div>
          </header>
          <div class="flex items-center m-2">
            <div class="w-1/2 mr-5">
              <label for="lessontitle"><b>Lesson Plan Title</b></label>
              <input id="lessontitle" type="text" class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150" value="">
            </div>
            <div class="w-1/2">
              <label for="subject"><b>Subject</b></label>
              <input id="subject" list="subjects" class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150" value="">
            </div>
          </div>

          <div class="m-2 border-2 border-green-700 mt-4 mb-4"></div>

          <div id="openTopicModal" class="m-2">
            <button class="bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">CREATE NEW TOPIC</button>
          </div>

          <div class="bg-[#EFF4F6] border border-gray-600 rounded-lg p-4 m-2">
            <!-- 1ST TOGGLE -->
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
                  <button type="button" class="ml-2 mr-2">ADD MATERIALS</button>
                </div>
              </div>
            </div>

            <!-- 2ND TOGGLE -->
            <div id="panelContent" class="hidden">
              <ul class="uploadedFiles list-disc pl-5">
                <li class="flex items-center">
                  <button id="toggleFileButton" class="text-gray-500 focus:outline-none">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path id="fileToggleIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <span class="ml-4"><a href="#" target="_blank">Sample Material Title</a></span>
                </li>

                <!-- 3RD TOGGLE -->
                <div id="fileContent" class="hidden pl-5">
                  <li class="flex items-center">
                    <button id="toggleInsideFileButton" class="text-gray-500 focus:outline-none">
                      <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path id="fileInsideToggleIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                      </svg>
                    </button>
                    <span class="ml-4"><a href="#" target="_blank">Additional Information here</a></span>
                  </li>
                  <div id="fileInsideContent" class="hidden pl-5">
                    <p>Nested additional content here.</p>
                  </div>
                </div>
              </ul>
            </div>
          </div>

          <!-- Create Topic Modal -->
          @include('programhead.planmanage.topicmodal')

          <!-- Add Materials Modal -->
          @include('programhead.planmanage.materialmodal')
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

      const openTopicModal = document.getElementById('openTopicModal');
      const closeTopicModal = document.getElementById('closeTopicModal');
      const topicModal = document.getElementById('topicModal');

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
        window.location.href = '{{ route('ph.plan') }}';
      });

      openTopicModal.addEventListener('click', function() {
        topicModal.classList.remove('hidden');
      });

      closeTopicModal.addEventListener('click', function() {
        topicForm.reset();
        topicModal.classList.add('hidden');
      });

      openMaterialModal.addEventListener('click', function() {
        materialModal.classList.remove('hidden');
      });

      closeMaterialModal.addEventListener('click', function() {
        materialForm.reset();
        materialModal.classList.add('hidden');
      });

      // Toggle panel content
      togglePanelButton.addEventListener('click', function () {
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
      toggleFileButton.addEventListener('click', function () {
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
      toggleInsideFileButton.addEventListener('click', function () {
        const fileInsideContent = document.getElementById('fileInsideContent');
        const fileInsideToggleIcon = document.getElementById('fileInsideToggleIcon');
        fileInsideContent.classList.toggle('hidden');
        if (fileInsideContent.classList.contains('hidden')) {
          fileInsideToggleIcon.setAttribute('d', 'M19 9l-7 7-7-7');
        } else {
          fileInsideToggleIcon.setAttribute('d', 'M19 15l-7-7-7 7');
        }
      });
    });
  </script>
</body>
</html>
