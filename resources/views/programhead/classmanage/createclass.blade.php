<!-- Create Class Modal -->
<div id="myModal" class="modal">
  <div class="modal-content mx-auto my-auto border-1 w-1/2 max-w-screen-sm bg-custom2 rounded-t-lg rounded-b-lg">
      <header class="bg-custom3 text-white border-b border-gray-100 rounded-t-lg">
        <div class="p-4 flex items-center">
            <h2 class="font-semibold">Create Class</h2>
        </div>
      </header>
      <form id="classForm" action="#" method="#">
          <input type="text" placeholder="Class Name" required class="bg-custom1 border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
          <input type="text" placeholder="Subject" required class="bg-custom1 border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150"></input>
          <div class="relative rounded-lg p-4">
            <div class="flex items-center justify-center">
              <input type="file" class="absolute inset-0 border-0 border-black border-dashed w-full h-full opacity-0 cursor-pointer bg-custom1 p-8" accept="image/*">
              <div class="flex items-center justify-center">
                  <div class="ml-2 text-center">
                      <p class="text-sm text-black">Select Background</p>
                      <p class="text-xs text-black">JPG & PNG only up to 5MB</p>
                  </div>
              </div>
            </div>
          </div>


          <div class="flex items-center justify-center space-x-6 p-4">
            <button class="close bg-custom1 font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
              Cancel
            </button>
            <button type="submit" class="bg-custom3 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
              Create Class
            </button>
          </div>
      </form>
  </div>
</div>
