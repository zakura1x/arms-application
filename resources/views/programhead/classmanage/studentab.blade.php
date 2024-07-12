

<div class="bg-white shadow-lg border border-gray-200 h-screen">
  <header class="flex items-end justify-between bg-[#42604C] text-white border-b border-gray-100">
    <div class="p-4 flex items-center">

        <h2 class="ml-4 font-semibold">Enrolled Students</h2>
    </div>
    <div class="flex items-center justify-center space-x-6 m-2">
      <div class="flex items-center">
        <input type="text" placeholder="Search for Students" class="px-4 py-2 border border-gray-300 rounded-md">
      </div>
      <button class="flex items-center text-black rounded-lg p-5 w-30 h-8 bg-white">
        <svg width="22px" height="22px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="10" cy="6" r="4" stroke="#42604C" stroke-width="1.5"></circle> <path d="M21 10H19M19 10H17M19 10L19 8M19 10L19 12" stroke="#42604C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M17.9975 18C18 17.8358 18 17.669 18 17.5C18 15.0147 14.4183 13 10 13C5.58172 13 2 15.0147 2 17.5C2 19.9853 2 22 10 22C12.231 22 13.8398 21.8433 15 21.5634" stroke="#42604C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
        <a class="ml-2">ADD</a>
      </button>
    </div>
  </header>
  <div class="overflow-x-auto">
      <table class="table-auto w-full border">
          <thead class="text-xs font-semibold uppercase bg-[#E1EDE5]">
              <tr>
                  <th class="w-10 p-2"></th>
                  <th class="w-1/4 p-2">
                      <div class="font-semibold text-left">Student Number</div>
                  </th>
                  <th class="w-1/4 p-2">
                      <div class="font-semibold text-left">Name</div>
                  </th>
                  <th class="w-1/4 p-2">
                      <div class="font-semibold text-left">Email Address</div>
                  </th>
                  <th class="w-1/4 p-2"></th>
              </tr>
          </thead>
          <tbody class="text-sm divide-y divide-gray-100">
              <tr>
                  <td>
                    <div class="w-10 p-2 flex items-center justify-center">
                      <input type="checkbox" id="selectStudent">
                    </div>
                  </td>
                  <td class="w-1/4">
                    <div class="flex items-start justify-start">
                      <div class="ml-2 font-medium text-gray-800">12-34567</div>
                    </div>
                  </td>
                  <td class="p-2 whitespace-nowrap">
                    <div class="flex items-start">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9997 23.0993C18.0608 23.0993 23.0991 18.072 23.0991 12C23.0991 5.93888 18.0499 0.900635 11.9888 0.900635C5.91681 0.900635 0.900391 5.93888 0.900391 12C0.900391 18.072 5.92772 23.0993 11.9997 23.0993ZM11.9997 5.73213C14.0781 5.73213 15.7321 7.56026 15.7321 9.75837C15.7321 12.0979 14.089 13.8825 11.9997 13.8608C9.89955 13.839 8.2673 12.0979 8.2673 9.75837C8.24553 7.56026 9.91041 5.73213 11.9997 5.73213ZM18.6158 18.442L18.6484 18.5834C16.9727 20.368 14.4916 21.3909 11.9997 21.3909C9.49692 21.3909 7.01587 20.368 5.34012 18.5834L5.37276 18.442C6.31944 17.1361 8.64816 15.7107 11.9997 15.7107C15.3404 15.7107 17.68 17.1361 18.6158 18.442Z" fill="black"/>
                      </svg>
                      <div class="ml-2 text-left">May Carla V. Dela Cruz</div>
                    </div>
                  </td>
                  <td class="p-2 whitespace-nowrap">
                    <div class="flex items-center">
                      <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z" fill="#000000"></path> </g></svg>
                      <div class="ml-2 text-left font-medium">maycarla@gmail.com</div>
                    </div>
                  </td>
                  <td class="p-2">
                    <div class="flex items-center justify-end space-x-6">
                      <button id="editldp" class="flex items-center text-white rounded-lg p-5 w-24 h-8 bg-[#42604C]">
                        <svg width="26" height="26" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.1497 5.93991L6.27971 17.8099C5.21971 18.8799 2.04971 19.3698 1.27971 18.6598C0.509711 17.9498 1.06969 14.7799 2.12969 13.7099L13.9997 1.83994C14.5478 1.31795 15.2783 1.03091 16.0351 1.04013C16.7919 1.04936 17.5151 1.35412 18.0503 1.88932C18.5855 2.42451 18.8903 3.14775 18.8995 3.90457C18.9088 4.6614 18.6217 5.39183 18.0997 5.93991H18.1497Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M19 19H10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="ml-2">EDIT</span>
                      </button>
                    </div>
                  </td>
              </tr>
          </tbody>
      </table>
  </div>
</div>
