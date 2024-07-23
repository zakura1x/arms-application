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
                  <button type="button" id="closeMaterialModal" class="font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">CANCEL</button>
                  <div class="flex items-center bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.71986 1.72855C2.84248 3.13072 0.859863 6.08382 0.859863 9.49999C0.859863 14.2718 4.72812 18.14 9.49986 18.14C14.2716 18.14 18.1399 14.2718 18.1399 9.49999C18.1399 4.72824 14.2716 0.859985 9.49986 0.859985V11.66" stroke="white" stroke-width="1.2"/>
                      <path d="M13.2797 7.88L9.49973 11.66L5.71973 7.88" stroke="white" stroke-width="1.2"/>
                    </svg>
                    <button type="submit" class="ml-2">ADD</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>
