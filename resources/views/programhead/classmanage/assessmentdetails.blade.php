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
              <a href="{{route('ph.createtest')}}">
                <svg width="30px" height="30px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:none;stroke:#ffffff;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px;}</style> </defs> <g data-name="Layer 2" id="Layer_2"> <g data-name="E421, Back, buttons, multimedia, play, stop" id="E421_Back_buttons_multimedia_play_stop"> <circle class="cls-1" cx="256" cy="256" r="246"></circle> <line class="cls-1" x1="352.26" x2="170.43" y1="256" y2="256"></line> <polyline class="cls-1" points="223.91 202.52 170.44 256 223.91 309.48"></polyline> </g> </g> </g></svg>
              </a>
              <h2 class="ml-4 font-semibold">Assessment Details</h2>
            </div>
          </div >
        </header>
        <div class="overflow-x-auto h-screen bg-[#D0D9D3]">
          <div class="p-4">
              <div class="flex items-center">
                <div class="w-1/2 mr-5">
                  <label for="assessName"><b>Assessment Name</b></label>
                  <input id="assessName" type="text" disabled class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                </div>
                <div class="w-1/2">
                  <label for="assessDescrip"><b>Assessment Description</b></label>
                  <input id="assessDescrip" disabled class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                </div>
              </div>

            <div class="border-2 border-green-700 mt-4 mb-4"></div>

            <button id="openAssessmentModal" class="bg-[#42604C] text-white font-medium m-2 py-2 px-4 mb-4 rounded-lg focus:outline-none focus:shadow-outline">
              <a>GENERATE ASSESSMENT</a>
            </button>

            <div class="bg-[#EFF4F6] border border-gray-300 rounded-lg p-2">
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <button id="togglePanelButton" class="text-gray-500 focus:outline-none">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path id="panelToggleIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <h3 class="font-semibold ml-4">SAMPLE ASSESSMENT NAME</h3>
                </div>

                <div class="ml-auto flex items-center">
                  <div class=" text-white font-medium py-2 px-2 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                    <button type="button" class="ml-2 mr-2">
                      <svg fill="#42604C" width="30px" height="30px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke="#42604C"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M26 0H6a6 6 0 0 0-6 6v20a6 6 0 0 0 6 6h20a6 6 0 0 0 6-6V6a6 6 0 0 0-6-6zm-6 2v3a1 1 0 1 0 2 0V2h1v7H9V2zm10 24a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V6a4 4 0 0 1 4-4h1v8a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2h1a4 4 0 0 1 4 4zM24 14H8a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V15a1 1 0 0 0-1-1zm-1 12H9V16h14zM12 20h8a1 1 0 0 0 0-2h-8a1 1 0 0 0 0 2zM12 24h8a1 1 0 0 0 0-2h-8a1 1 0 0 0 0 2z"></path> </g></svg>
                    </button>
                    <button type="button" class="ml-2 mr-2">
                      <svg width="30px" height="30px" viewBox="-102.4 -102.4 1228.80 1228.80" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ff0000" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z"></path></g></svg>
                    </button>
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

          </div>
        </div>
      </div>

      <!-- Modal -->
      <div id="assessmentModal" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
        <div class="bg-white rounded-lg shadow-lg w-1/2">
          <header class="bg-[#42604C] text-white border-b border-gray-100 rounded-t-lg">
            <div class="p-4 flex items-center">
              <h2 class="font-semibold">Assessment Parameters</h2>
            </div>
          </header>
          <div class="p-4">
            <form id="assessmentForm" action="#" method="#">
              <div id="parametersContainer" class="parameterSet">
                <div class="flex">
                  <div class="flex flex-col">
                    <label for="numItems"><b>Number of Items</b></label>
                    <input id="numItems" type="number" min="1" name="numItems" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-24 h-12 p-5 mr-24 mb-2 ease-linear transition-all duration-150">
                  </div>

                  <div class="flex flex-col">
                    <label for="levelDifficulty"><b>Level of Difficulty</b></label>
                    <input id="levelDifficulty" list=difficulty type="text" name="levelDifficulty" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-36 h-12 p-5 mr-24 mb-2 ease-linear transition-all duration-150">
                    <datalist id="difficulty">
                      <option value="Easy">
                      <option value="Moderate">
                      <option value="Difficult">
                      </datalist>
                  </div>

                  <div id="topicsContainer" class="flex flex-col">
                    <label for="topicCovered"><b>Topic Covered</b></label>
                    <input id="topicCovered" type="text" name="topicCovered" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-96 h-12 p-5 mb-2 ease-linear transition-all duration-150">
                  </div>

                  <button type="button" id="addParameterSet" class="font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline mb-4">
                    <svg width="64px" height="64px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="10" stroke="#42604C" stroke-width="1.5"></circle> <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#42604C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                  </button>
                </div>
              </div>

              <div class="flex items-center justify-center space-x-6 p-2">
                <button type="button" id="closeAssessmentModal" class="close font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">CANCEL</button>
                <div id="generateButton" class="flex items-center bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                  <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.71986 1.72855C2.84248 3.13072 0.859863 6.08382 0.859863 9.49999C0.859863 14.2718 4.72812 18.14 9.49986 18.14C14.2716 18.14 18.1399 14.2718 18.1399 9.49999C18.1399 4.72824 14.2716 0.859985 9.49986 0.859985V11.66" stroke="white" stroke-width="1.2"/>
                    <path d="M13.2797 7.88L9.49973 11.66L5.71973 7.88" stroke="white" stroke-width="1.2"/>
                  </svg>
                  <button type="submit" class="ml-2">GENERATE</button>
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

      const openModal = document.getElementById('openAssessmentModal');
      const closeModal = document.getElementById('closeAssessmentModal');
      const assessModal = document.getElementById('assessmentModal');

      const addParameterSet = document.getElementById('addParameterSet');
      const parametersContainer = document.getElementById('parametersContainer');

      const assessmentForm = document.getElementById('assessmentForm');

      navButton.addEventListener('click', function() {
        sidebar.classList.toggle('show');
        mainContainer.classList.toggle('shifted');
      });

      openModal.addEventListener('click', function() {
        assessModal.classList.remove('hidden');
      });

      closeModal.addEventListener('click', function() {
      const dynamicSets = parametersContainer.querySelectorAll('.parameterSet:not(:first-child)');
      dynamicSets.forEach(set => set.remove());

        assessmentForm.reset();
        assessModal.classList.add('hidden');
      });

      addParameterSet.addEventListener('click', function() {
      const parameterSet = document.createElement('div');
      parameterSet.classList.add('parameterSet', 'mb-4', 'flex');
      parameterSet.innerHTML = `
        <div class="flex flex-col">
          <label for="numItems"><b>Number of Items</b></label>
          <input id="numItems" type="number" min="1" name="numItems" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-24 h-12 p-5 mr-24 mb-2 ease-linear transition-all duration-150">
        </div>

        <div class="flex flex-col">
          <label for="levelDifficulty"><b>Level of Difficulty</b></label>
          <input id="levelDifficulty" list=difficulty type="text" name="levelDifficulty" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-36 h-12 p-5 mr-24 mb-2 ease-linear transition-all duration-150">
          <datalist id="difficulty">
            <option value="Easy">
            <option value="Moderate">
            <option value="Difficult">
            </datalist>
        </div>

        <div id="topicsContainer" class="flex flex-col">
          <label for="topicCovered"><b>Topic Covered</b></label>
          <input id="topicCovered" type="text" name="topicCovered" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-96 h-12 p-5 mb-2 ease-linear transition-all duration-150">
        </div>
      `;
        parametersContainer.appendChild(parameterSet);
      });


      assessmentForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const parameterSets = document.querySelectorAll('.parameterSet');
        const assessmentParameters = [];

        parameterSets.forEach(set => {
          const numItems = set.querySelector('input[name="numItems"]').value;
          const levelDifficulty = set.querySelector('input[name="levelDifficulty"]').value;
          const topicCovered = set.querySelector('input[name="topicCovered"]').value;

          const parameter = {
            numItems,
            levelDifficulty,
            topicCovered
          };

          assessmentParameters.push(parameter);
        });

        console.log(assessmentParameters);
      });
  });
</script>

</html>
