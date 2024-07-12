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
              <a href="{{route('ph.class1')}}">
                <svg width="30px" height="30px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:none;stroke:#ffffff;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px;}</style> </defs> <g data-name="Layer 2" id="Layer_2"> <g data-name="E421, Back, buttons, multimedia, play, stop" id="E421_Back_buttons_multimedia_play_stop"> <circle class="cls-1" cx="256" cy="256" r="246"></circle> <line class="cls-1" x1="352.26" x2="170.43" y1="256" y2="256"></line> <polyline class="cls-1" points="223.91 202.52 170.44 256 223.91 309.48"></polyline> </g> </g> </g></svg>
              </a>
              <h2 class="ml-4 font-semibold">Assessment Details</h2>
            </div>
          </div >
        </header>

        <div class="overflow-x-auto h-screen bg-[#D0D9D3]">
            <div class="border-b-8 border-green-700">
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <button id="togglePanelButton" class="ml-4 text-gray-500 focus:outline-none">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path id="panelToggleIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <h3 class="font-semibold ml-4">SAMPLE ASSESSMENT NAME</h3>
                </div>

                <div class="flex items-center justify-center">

                  <button id="openAssessmentModal" class="bg-[#42604C] text-white font-medium cursor-pointer m-2 py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                    <a>SELECT PARAMETERS</a>
                  </button>

                  <button type="button" class="ml-2 mr-4">
                    <svg width="30px" height="30px" viewBox="-102.4 -102.4 1228.80 1228.80" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ff0000" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z"></path></g></svg>
                  </button>

                </div>
              </div>
            </div>

            <div id="panelContent" class="">
              <header class="bg-[#42604C] text-white border-b border-gray-100 mb-1">
                <div class="p-2 flex items-start justify-start">
                  <h2 class="ml-4 font-semibold">
                    Topic: TAXATION
                  </h2>
                  <h2 class="ml-4 font-semibold">
                    Items: 2
                  </h2>
                  <h2 class="ml-4 font-semibold">
                    Difficulty: EASY
                  </h2>
                </div>
              </header>

              <div class="flex flex-wrap justify-center space-x-2">
                <div class="bg-white rounded-lg border border-black w-2/5 mb-4">
                  <div class="flex items-center border-b border-black rounded-t-lg p-2">
                    <p>1.</p>
                    <p class="ml-2">What is the capital of the Philippines?</p>
                  </div>
                  <div class="flex flex-col p-2 space-y-2 ml-5">
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="a" disabled>
                      <label for="a" class="ml-2">A. Manila</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="b" disabled>
                      <label for="b" class="ml-2">B. Cebu</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="c" disabled>
                      <label for="c" class="ml-2">C. Davao</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="d" disabled>
                      <label for="d" class="ml-2">D. Quezon City</label>
                    </div>
                  </div>
                </div>

                <div class="bg-white rounded-lg border border-black w-2/5 mb-4">
                  <div class="flex items-center border-b border-black rounded-t-lg p-2">
                    <p>2.</p>
                    <p class="ml-2">What is the capital of the Philippines?</p>
                  </div>
                  <div class="flex flex-col p-2 space-y-2 ml-5">
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="a" disabled>
                      <label for="a" class="ml-2">A. Manila</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="b" disabled>
                      <label for="b" class="ml-2">B. Cebu</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="c" disabled>
                      <label for="c" class="ml-2">C. Davao</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="d" disabled>
                      <label for="d" class="ml-2">D. Quezon City</label>
                    </div>
                  </div>
                </div>
              </div>

              <header class="bg-[#42604C] text-white border-b border-gray-100 mb-1">
                <div class="p-2 flex items-start justify-between">
                  <div class="p-2 flex items-start justify-start">
                    <h2 class="ml-4 font-semibold">
                      Topic: TAXATION
                    </h2>
                    <h2 class="ml-4 font-semibold">
                      Items: 2
                    </h2>
                    <h2 class="ml-4 font-semibold">
                      Difficulty: MODERATE
                    </h2>
                  </div>
                </div>
              </header>
              <div class="flex flex-wrap justify-center space-x-2">
                <div class="bg-white rounded-lg border border-black w-2/5 mb-4">
                  <div class="flex items-center border-b border-black rounded-t-lg p-2">
                    <p>1.</p>
                    <p class="ml-2">What is the capital of the Philippines?</p>
                  </div>
                  <div class="flex flex-col p-2 space-y-2 ml-5">
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="a" disabled>
                      <label for="a" class="ml-2">A. Manila</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="b" disabled>
                      <label for="b" class="ml-2">B. Cebu</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="c" disabled>
                      <label for="c" class="ml-2">C. Davao</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="d" disabled>
                      <label for="d" class="ml-2">D. Quezon City</label>
                    </div>
                  </div>
                </div>

                <div class="bg-white rounded-lg border border-black w-2/5 mb-4">
                  <div class="flex items-center border-b border-black rounded-t-lg p-2">
                    <p>2.</p>
                    <p class="ml-2">What is the capital of the Philippines?</p>
                  </div>
                  <div class="flex flex-col p-2 space-y-2 ml-5">
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="a" disabled>
                      <label for="a" class="ml-2">A. Manila</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="b" disabled>
                      <label for="b" class="ml-2">B. Cebu</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="c" disabled>
                      <label for="c" class="ml-2">C. Davao</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="d" disabled>
                      <label for="d" class="ml-2">D. Quezon City</label>
                    </div>
                  </div>
                </div>
              </div>

              <header class="bg-[#42604C] text-white border-b border-gray-100 mb-1">
                <div class="p-2 flex items-start justify-between">
                  <div class="p-2 flex items-start justify-start">
                    <h2 class="ml-4 font-semibold">
                      Topic: TAXATION
                    </h2>
                    <h2 class="ml-4 font-semibold">
                      Items: 2
                    </h2>
                    <h2 class="ml-4 font-semibold">
                      Difficulty: DIFFICULT
                    </h2>
                  </div>
                </div>
              </header>
              <div class="flex flex-wrap justify-center space-x-2">
                <div class="bg-white rounded-lg border border-black w-2/5 mb-4">
                  <div class="flex items-center border-b border-black rounded-t-lg p-2">
                    <p>1.</p>
                    <p class="ml-2">What is the capital of the Philippines?</p>
                  </div>
                  <div class="flex flex-col p-2 space-y-2 ml-5">
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="a" disabled>
                      <label for="a" class="ml-2">A. Manila</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="b" disabled>
                      <label for="b" class="ml-2">B. Cebu</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="c" disabled>
                      <label for="c" class="ml-2">C. Davao</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question1" value="d" disabled>
                      <label for="d" class="ml-2">D. Quezon City</label>
                    </div>
                  </div>
                </div>

                <div class="bg-white rounded-lg border border-black w-2/5 mb-4">
                  <div class="flex items-center border-b border-black rounded-t-lg p-2">
                    <p>2.</p>
                    <p class="ml-2">What is the capital of the Philippines?</p>
                  </div>
                  <div class="flex flex-col p-2 space-y-2 ml-5">
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="a" disabled>
                      <label for="a" class="ml-2">A. Manila</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="b" disabled>
                      <label for="b" class="ml-2">B. Cebu</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="c" disabled>
                      <label for="c" class="ml-2">C. Davao</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="question2" value="d" disabled>
                      <label for="d" class="ml-2">D. Quezon City</label>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

      <!-- Modal -->
      <div id="assessmentModal" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
        <div class="bg-white rounded-lg shadow-lg">
          <header class="bg-[#42604C] text-white border-b border-gray-100 rounded-t-lg">
            <div class="p-4 flex items-center">
              <h2 class="font-semibold">Assessment Parameters</h2>
            </div>
          </header>
          <div class="p-4">
            <form id="assessmentForm" action="#" method="#">
              <div id="parametersContainer">
                <div class="flex items-center justify-center">
                  <div class="flex flex-col mr-4">
                    <label for="numItems"><b>Number of Items</b></label>
                    <input id="numItems" type="number" min="1" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-2 ease-linear transition-all duration-150">
                  </div>

                  <div class="flex flex-col mr-4">
                    <label for="levelDifficulty"><b>Level of Difficulty</b></label>
                    <input id="levelDifficulty" list=difficulty type="text" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-2 ease-linear transition-all duration-150">
                    <datalist id="difficulty">
                      <option value="Easy">
                      <option value="Moderate">
                      <option value="Difficult">
                      </datalist>
                  </div>

                  <div class="flex flex-col">
                    <label for="topicCovered"><b>Topic Covered</b></label>
                    <input id="topicCovered" type="text" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-2 ease-linear transition-all duration-150">
                  </div>
                </div>
              </div>

              <div class="flex items-center justify-center space-x-6 p-2">
                <button type="button" id="closeAssessmentModal" class="close font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">CANCEL</button>
                <div id="generateButton" class="flex items-center bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                  <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.72003 1.72868C2.84265 3.13084 0.860031 6.08394 0.860031 9.50011C0.860031 14.2719 4.72829 18.1401 9.50003 18.1401C14.2718 18.1401 18.14 14.2719 18.14 9.50011C18.14 4.72837 14.2718 0.860107 9.50003 0.860107V11.6601" stroke="white" stroke-width="1.2"/>
                    <path d="M13.28 7.88013L9.50003 11.6601L5.72003 7.88013" stroke="white" stroke-width="1.2"/>
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
        assessmentForm.reset();
        assessModal.classList.add('hidden');
      });

      assessmentForm.addEventListener('submit', function(event) {
      });
  });
</script>

</html>
