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

      <div class="p-8 bg-[#EFF4F6] h-full shadow-lg border">
        <header class="bg-[#42604C] text-white border-b border-gray-100">
          <div class="p-4 flex items-start justify-between">
            <div class="flex items-center w-full">
              <a href="{{route('ph.plan')}}">
                <svg width="30px" height="30px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:none;stroke:#ffffff;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px;}</style> </defs> <g data-name="Layer 2" id="Layer_2"> <g data-name="E421, Back, buttons, multimedia, play, stop" id="E421_Back_buttons_multimedia_play_stop"> <circle class="cls-1" cx="256" cy="256" r="246"></circle> <line class="cls-1" x1="352.26" x2="170.43" y1="256" y2="256"></line> <polyline class="cls-1" points="223.91 202.52 170.44 256 223.91 309.48"></polyline> </g> </g> </g></svg>
              </a>
              <h2 class="ml-4 font-semibold">Learning Development Plan Details</h2>
            </div>
          </div >
        </header>
        <div class="overflow-x-auto h-screen bg-[#D0D9D3]">
          <div class="p-8">
              <div class="flex items-center">
                <div class="w-1/2 mr-5">
                  <label for="lessontitle"><b>Lesson Plan Title</b></label>
                  <input id="lessontitle" type="text" disabled class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150" value="">
                </div>
                <div class="w-1/2">
                  <label for="subject"><b>Subject</b></label>
                  <input id="subject" list="subjects"disabled class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150" value="">
                </div>
              </div>

            <div class="border-2 border-green-700 mt-4 mb-4"></div>

            <button id="openModal" class="bg-[#42604C] text-white font-medium m-2 py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
              <a>CREATE NEW TOPIC</a>
            </button>

            <div class="bg-[#EFF4F6] border border-gray-300 rounded-lg p-4">
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
                  <div id="fileContent" class="hidden">
                    <p>Description: Sample Material Description</p>
                  </div>
                </ul>
              </div>
            </div>

            <div id="expansionPanels" class="space-y-4"></div>

          </div>
        </div>
      </div>

      <!-- Modal -->
      <div id="topicModal" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
        <div class="bg-white rounded-lg shadow-lg w-1/2">
          <header class="bg-[#42604C] text-white border-b border-gray-100 rounded-t-lg">
            <div class="p-4 flex items-center">
              <h2 class="font-semibold">Create New Topic</h2>
            </div>
          </header>
          <div class="p-4">
            <form id="topicForm" action="#" method="#">
              <label for="topicTitle"><b>Topic Title</b></label>
              <input id="topicTitle" type="text" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
              <label for="topicDescription"><b>Topic Description</b></label>
              <input id="topicDescription" type="text" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">

              <div class="flex items-center justify-end space-x-6 p-2">
                <button type="button" id="closeTopicModal" class="close font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                  CANCEL
                </button>
                <div id="createButton" class="flex items-center bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                  <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.71986 1.72855C2.84248 3.13072 0.859863 6.08382 0.859863 9.49999C0.859863 14.2718 4.72812 18.14 9.49986 18.14C14.2716 18.14 18.1399 14.2718 18.1399 9.49999C18.1399 4.72824 14.2716 0.859985 9.49986 0.859985V11.66" stroke="white" stroke-width="1.2"/>
                    <path d="M13.2797 7.88L9.49973 11.66L5.71973 7.88" stroke="white" stroke-width="1.2"/>
                  </svg>
                  <button type="submit" class="ml-2">
                    CREATE
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Add Materials Modal -->
      <div id="materialModal" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
        <div class="bg-white rounded-lg shadow-lg w-1/2">
            <header class="bg-[#42604C] text-white border-b border-gray-100 rounded-t-lg">
                <div class="p-4 flex items-center justify-between">
                    <h2 class="font-semibold">Add New Materials</h2>
                </div>
            </header>
            <div class="p-4">
                <form id="materialForm" action="#" method="#" enctype="multipart/form-data">
                    <label for="materialTitle"><b>Material Title</b></label>
                    <input id="materialTitle" type="text" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                    <input id="materialDescription" type="text" placeholder="Material Description" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                    <label for="materialFile"><b>Attach File</b></label>
                    <input id="materialFile" type="file" accept="application/pdf" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-15 p-2 ease-linear transition-all duration-150">

                    <div class="flex items-center justify-end space-x-6 p-2">
                        <button type="button" id="closeMaterialModal" class="font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                            CANCEL
                        </button>
                        <div class="flex items-center bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                          <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.71986 1.72855C2.84248 3.13072 0.859863 6.08382 0.859863 9.49999C0.859863 14.2718 4.72812 18.14 9.49986 18.14C14.2716 18.14 18.1399 14.2718 18.1399 9.49999C18.1399 4.72824 14.2716 0.859985 9.49986 0.859985V11.66" stroke="white" stroke-width="1.2"/>
                            <path d="M13.2797 7.88L9.49973 11.66L5.71973 7.88" stroke="white" stroke-width="1.2"/>
                          </svg>
                          <button type="submit" class="ml-2">
                            ADD
                          </button>
                        </div>
                    </div>
                </form>
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

      const backbtn = document.getElementById('backButton');
      const createbtn = document.getElementById('createButton');

      const openModalButton = document.getElementById('openModal');
      const closeModalButton = document.getElementById('closeTopicModal');
      const topicModal = document.getElementById('topicModal');

      const openMaterialModal = document.getElementById('openMaterialModal');
      const closeMaterialModal = document.getElementById('closeMaterialModal');
      const materialModal = document.getElementById('materialModal');

      const panelContentToggle = document.getElementById('togglePanelButton');
      const fileContentToggle = document.getElementById('toggleFileButton');

      navButton.addEventListener('click', function() {
        sidebar.classList.toggle('show');
        mainContainer.classList.toggle('shifted');
      });

      backbtn.addEventListener('click', function() {
        window.location.href = '{{ route('ph.plan') }}';
      });

      openModalButton.addEventListener('click', function() {
        topicModal.classList.remove('hidden');
      });

      closeModalButton.addEventListener('click', function() {
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
      panelContentToggle.addEventListener('click', function () {
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
      fileContentToggle.addEventListener('click', function () {
          const fileContent = document.getElementById('fileContent');
          const fileToggleIcon = document.getElementById('fileToggleIcon');
          fileContent.classList.toggle('hidden');
          if (fileContent.classList.contains('hidden')) {
            fileToggleIcon.setAttribute('d', 'M19 9l-7 7-7-7');
          } else {
            fileToggleIcon.setAttribute('d', 'M19 15l-7-7-7 7');
          }
      });
  });
</script>

</html>