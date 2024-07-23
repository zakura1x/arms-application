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

      <div class="p-4 bg-[#EFF4F6] h-full shadow-lg border">
        <header class="bg-[#42604C] text-white border-b border-gray-100">
          <div class="p-4 flex items-start justify-between">
            <div class="flex items-center w-full">
              <a href="{{route('ph.class1')}}">
                <svg width="30px" height="30px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:none;stroke:#ffffff;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px;}</style> </defs> <g data-name="Layer 2" id="Layer_2"> <g data-name="E421, Back, buttons, multimedia, play, stop" id="E421_Back_buttons_multimedia_play_stop"> <circle class="cls-1" cx="256" cy="256" r="246"></circle> <line class="cls-1" x1="352.26" x2="170.43" y1="256" y2="256"></line> <polyline class="cls-1" points="223.91 202.52 170.44 256 223.91 309.48"></polyline> </g> </g> </g></svg>
              </a>
              <h2 class="ml-4 font-semibold">Assessment Details</h2>
            </div>
          </div>
        </header>

        <div class="overflow-x-auto h-screen bg-[#D0D9D3]">
          <div class="border-b-4 border-green-700">
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
                <button type="button" class="ml-2 mr-4 m-2">
                  <svg width="30px" height="30px" viewBox="-102.4 -102.4 1228.80 1228.80" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ff0000" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z"></path></g></svg>
                </button>
              </div>
            </div>
          </div>

          <div id="panelContent">
            <div class="question-container">
              <div class="question-item">
                <div class="flex flex-col border-b border-black rounded-t-lg p-2">
                  <div>
                    <span class="mr-1 font-bold text-sm">Subject Area:</span> <a>Sample Subject Area</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Topic:</span><a>Sample Topic</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Module:</span><a>Sample Module</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Difficulty:</span><a>Sample Difficulty</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Sub-Difficulty:</span><a>Sample Sub-Difficulty</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Point/s:</span><a>Sample Point/s</a>
                  </div>
                </div>
                <div class="flex items-center border-b border-black p-2">
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

              <div class="question-item">
                <div class="flex flex-col border-b border-black rounded-t-lg p-2">
                  <div>
                    <span class="mr-1 font-bold text-sm">Subject Area:</span> <a>Sample Subject Area</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Topic:</span><a>Sample Topic</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Module:</span><a>Sample Module</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Difficulty:</span><a>Sample Difficulty</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Sub-Difficulty:</span><a>Sample Sub-Difficulty</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Point/s:</span><a>Sample Point/s</a>
                  </div>
                </div>
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

              <div class="question-item">
                <div class="flex flex-col border-b border-black rounded-t-lg p-2">
                  <div>
                    <span class="mr-1 font-bold text-sm">Subject Area:</span> <a>Sample Subject Area</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Topic:</span><a>Sample Topic</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Module:</span><a>Sample Module</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Difficulty:</span><a>Sample Difficulty</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Sub-Difficulty:</span><a>Sample Sub-Difficulty</a>
                  </div>
                  <div>
                    <span class="mr-1 font-bold text-sm">Point/s:</span><a>Sample Point/s</a>
                  </div>
                </div>
                <div class="flex items-center border-b border-black rounded-t-lg p-2">
                  <p>3.</p>
                  <p class="ml-2">What is the capital of the Philippines?</p>
                </div>
                <div class="flex flex-col p-2 space-y-2 ml-5">
                  <div class="flex items-center">
                    <input type="radio" name="question3" value="a" disabled>
                    <label for="a" class="ml-2">A. Manila</label>
                  </div>
                  <div class="flex items-center">
                    <input type="radio" name="question3" value="b" disabled>
                    <label for="b" class="ml-2">B. Cebu</label>
                  </div>
                  <div class="flex items-center">
                    <input type="radio" name="question3" value="c" disabled>
                    <label for="c" class="ml-2">C. Davao</label>
                  </div>
                  <div class="flex items-center">
                    <input type="radio" name="question3" value="d" disabled>
                    <label for="d" class="ml-2">D. Quezon City</label>
                  </div>
                </div>
              </div>
              {{-- add question --}}
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
    const mainContainer = document.getElementById('main-container')
    const togglePanelButton = document.getElementById('togglePanelButton');

    navButton.addEventListener('click', function() {
      sidebar.classList.toggle('show');
      mainContainer.classList.toggle('shifted');
    });

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
  });
</script>
</html>
