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
          <div class="p-4 flex items-center">
            <svg width="25" height="25" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M27.0249 24.1337C27.0249 24.4576 26.76 24.7228 26.4361 24.7228H6.56271C6.23863 24.7228 5.97363 24.4577 5.97363 24.1337V23.7413C5.97363 23.4175 6.23851 23.1523 6.56271 23.1523H26.4361C26.7599 23.1523 27.0249 23.4173 27.0249 23.7413V24.1337Z" fill="white"/>
                <path d="M14.8737 7.82112C14.8737 8.14484 14.6089 8.40996 14.2847 8.40996H6.56271C6.23863 8.40996 5.97363 8.14496 5.97363 7.82112V7.42844C5.97363 7.10459 6.23851 6.83948 6.56271 6.83948H14.2847C14.6087 6.83948 14.8737 7.10447 14.8737 7.42844V7.82112Z" fill="white"/>
                <path d="M26.7265 29.5716C26.7265 29.8953 26.4614 30.1603 26.1372 30.1603H18.4153C18.0912 30.1603 17.8262 29.8953 17.8262 29.5716V29.1789C17.8262 28.8551 18.091 28.59 18.4153 28.59H26.1372C26.4613 28.59 26.7265 28.855 26.7265 29.1789V29.5716Z" fill="white"/>
                <path d="M18.9678 13.2585C18.9678 13.5823 18.7029 13.8476 18.379 13.8476H6.56271C6.23863 13.8476 5.97363 13.5825 5.97363 13.2585V12.8661C5.97363 12.5422 6.23851 12.2772 6.56271 12.2772H18.379C18.7028 12.2772 18.9678 12.5422 18.9678 12.8661V13.2585Z" fill="white"/>
                <path d="M27.0249 18.6961C27.0249 19.02 26.76 19.285 26.4361 19.285H6.56271C6.23863 19.285 5.97363 19.02 5.97363 18.6961V18.3036C5.97363 17.9797 6.23851 17.7146 6.56271 17.7146H26.4361C26.7599 17.7146 27.0249 17.9796 27.0249 18.3036V18.6961Z" fill="white"/>
                <path d="M30.7814 8.9681L21.2595 1.13772C20.4711 0.488834 19.1067 0 18.0859 0H3.10741C1.81251 0 0.758789 1.05348 0.758789 2.34862C0.758789 2.34862 0.758789 27.6236 0.758789 34.5812C0.758789 37 3.04651 37 3.10103 37C8.91842 37 29.8922 37 29.8922 37C31.1873 37 32.2408 35.9464 32.2408 34.6513V12.0581C32.2408 10.981 31.6132 9.65237 30.7814 8.9681ZM20.6083 3.54712C20.6083 2.97176 21.0848 3.41317 21.0848 3.41317L28.6323 9.86176C28.6323 9.86176 29.1154 10.337 28.2875 10.337C26.5199 10.337 21.2179 10.337 21.2179 10.337C20.8817 10.337 20.6083 10.0637 20.6083 9.72758C20.6083 9.72758 20.6083 5.09232 20.6083 3.54712ZM29.8922 35.2604C29.8922 35.2604 8.34414 35.2604 2.93652 35.2604C2.84012 35.2604 2.49811 35.2329 2.49811 34.7572C2.49811 28.2096 2.49811 2.3485 2.49811 2.3485C2.49811 2.01816 2.77731 1.7392 3.10741 1.7392H18.0858C18.3394 1.7392 18.8692 1.87374 18.8692 2.59821V9.72758C18.8692 11.0226 19.9227 12.0762 21.2179 12.0762H30.0658C30.2273 12.0762 30.5006 12.1872 30.5006 12.5779C30.5006 12.584 30.5016 34.6511 30.5016 34.6511C30.5016 34.9873 30.2283 35.2604 29.8922 35.2604Z" fill="white"/>
            </svg>
            <h2 class="ml-4 font-semibold">Assessment Details</h2>
          </div>
        </header>
        <div class="overflow-x-auto h-screen bg-[#D0D9D3]">
          <div class="p-8">
            <form id="assessmentForm">
              <div class="flex items-center">
                <div class="w-1/2 mr-5">
                  <label for="assessName"><b>Assessment Name</b></label>
                  <input id="assessName" type="text" placeholder="Enter Assessment Name" required class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                </div>
                <div class="w-1/2">
                  <label for="assessDescrip"><b>Assessment Description</b></label>
                  <input id="assessDescrip" placeholder="Enter Assessment Description" required class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                </div>
              </div>

              <div class="flex items-center">
                <div class="w-1/2 mr-5">
                  <label for="subject"><b>Subject Area</b></label>
                  <input id="subject" list="subjects" placeholder="Select Subject Area" name="Subjects" required class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                  <datalist id="subjects">
                    <option value="Management Advisory Services">
                    <option value="Auditing">
                    <option value="Regulatory Framework for Business">
                    <option value="Taxation">
                    <option value="Financial Accounting and Reporting">
                    <option value="Advanced Financial Accounting and Reporting">
                  </datalist>
                </div>
                <div class="w-1/2 mr-5">
                  <label for="assessmenttype"><b>Assessment Type</b></label>
                  <input id="assessmenttype" list="types" placeholder="Select Assessment Type" name="Types" required class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                  <datalist id="types">
                    <option value="Pre-Test">
                    <option value="Post-Test">
                    <option value="Custom Test">
                  </datalist>
                </div>
                <div class="w-1/4">
                  <label><b>Jumbled Items</b></label>
                    <div class="flex items-center justify-evenly">
                      <div class="flex items-center mb-4 mt-4">
                        <input type="radio" id="includeJumbledYes" name="includeJumbled" value="yes" class="mr-2">
                        <label for="includeJumbledYes">Yes</label>
                      </div>
                      <div class="flex items-center mb-4 mt-4">
                        <input type="radio" id="includeJumbledNo" name="includeJumbled" value="no" class="mr-2">
                        <label for="includeJumbledNo">No</label>
                      </div>
                    </div>
                </div>
              </div>

              <div class="flex items-end justify-between mt-2">
                <div class="flex">
                  <div id="openTopicModal" class="bg-[#42604C] text-white font-medium py-2 px-4 mr-2 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                    <button type="button" class="ml-2 mr-2">ADD TOPIC</button>
                  </div>
                  <div id="previewButton" class="bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                    <button type="button" class="">PREVIEW ASSESSMENT</button>
                  </div>
                </div>
                <div>
                  <button type="button" id="backButton" class="close bg-[#D0D9D3] font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                    CANCEL
                  </button>
                  <button type="button" id="saveButton" class="bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                    SAVE
                  </button>
                </div>
              </div>
            </form>
            <div class="border-2 border-green-700 mt-4 mb-4"></div>
          </div>
        </div>
        @include('programhead.classmanage.topicmodal')
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

      const openTopicModal = document.getElementById('openTopicModal');
      const closeTopicModal = document.getElementById('closeTopicModal');
      const topicModal = document.getElementById('topicModal');

      navButton.addEventListener('click', function() {
          sidebar.classList.toggle('show');
          mainContainer.classList.toggle('shifted');
      });

      backbtn.addEventListener('click', function() {
          window.location.href = '{{ route('ph.class1') }}';
      });

      openTopicModal.addEventListener('click', function() {
        topicModal.classList.remove('hidden');
      });

      closeTopicModal.addEventListener('click', function() {
        topicForm.reset();
        topicModal.classList.add('hidden');
      });
  });
</script>
</html>
