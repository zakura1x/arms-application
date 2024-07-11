<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('programhead.css')
</head>

<body class="font-sans bg-[#EFF4F6] antialiased dark:bg-black dark:text-white/50">
    <div id="layout" class="flex">
        @include('programhead.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
          @include('programhead.header')

            <!-- Main content -->
            <div id="main-content" class="h-screen flex-1 transition-all duration-300 ease-in-out">

                <div class="antialiased p-8 h-full"> <!-- SAMPLE CLASS CARD ONLY FOR ROUTING -->
                    <div id="class1" class="flex flex-wrap gap-10 justify-start mb-28">
                      <div class="rounded-t-lg rounded-b-lg w-1/4 cursor-pointer">
                        <div class="p-4 bg-[#D0D9D3] border rounded-t-lg h-40 flex items-center justify-center" style="background-image: url('{{ asset('images/classbg.png') }}'); background-size: cover; background-position: center;"></div>
                          <div class="p-4 bg-white border rounded-b-lg shadow-lg w-full items-center justify-center">
                            <div class="flex items-center justify-between">
                              <div class="flex-col">
                                <p class="text-left"><b>BSA421k - Taxation</b></p>
                                <p class="text-left italic">Taxation</p>
                              </div>
                              <div class="flex-col">
                                <div class="dropdown dropdown-end">
                                  <div tabindex="0" role="button" class="btn btn-circle avatar">
                                      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(90)" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="5" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> <circle cx="12" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> <circle cx="19" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> </g></svg>
                                  </div>
                                  <ul tabindex="0"
                                      class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-[#D0D9D3] rounded-box w-52">
                                      <li><a>Edit Class</a></li>
                                      <li><a>Delete Class</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="openModal" class="rounded-t-lg rounded-b-lg w-1/4 cursor-pointer">
                          <div class="p-4 bg-[#D0D9D3] border rounded-t-lg w-ful h-40 flex items-center justify-center">
                                <svg width="120" height="120" viewBox="0 0 147 147" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M80.7913 7.87492C80.7913 3.84788 77.5269 0.583252 73.4997 0.583252C69.4725 0.583252 66.208 3.84788 66.208 7.87492V66.2083H7.87467C3.84763 66.2083 0.583008 69.4727 0.583008 73.4999C0.583008 77.5271 3.84763 80.7916 7.87467 80.7916H66.208V139.125C66.208 143.152 69.4725 146.417 73.4997 146.417C77.5269 146.417 80.7913 143.152 80.7913 139.125V80.7916H139.125C143.152 80.7916 146.416 77.5271 146.416 73.4999C146.416 69.4727 143.152 66.2083 139.125 66.2083H80.7913V7.87492Z" fill="#5E866B"/>
                                </svg>
                          </div>
                            <div class="p-4 bg-white border rounded-b-lg shadow-lg w-full flex items-center justify-center">
                              <p class="text-center">Add New<br>Class</p>
                          </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div id="modal" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
                      <div class="bg-white rounded-lg shadow-lg w-1/2">
                          <header class="bg-[#42604C] text-white border-b border-gray-100 rounded-t-lg">
                            <div class="p-4 flex items-center">
                                <h2 class="font-semibold">Create Class</h2>
                            </div>
                          </header>
                          <div class="p-8">
                            <form id="classForm" action="#" method="#">
                              <input id="className" type="text" placeholder="Class Name" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                              <input id="classSubject" type="text" placeholder="Subject" required class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150"></input>
                              <div class="relative rounded-lg">
                                <div class="flex items-center justify-center rounded-lg bg-[#D0D9D3] border-dashed border-2 border-black border-opacity-50">
                                  <input id="bgImage" type="file" class="inset-0 border-1 text-black border-black border-dashed w-1/2 h-full cursor-pointer p-8" accept="image/*">
                                  <div class="flex items-center justify-center">
                                      <div class="ml-2 text-center">
                                          <p class="text-sm text-black">Select Background</p>
                                          <p class="text-xs text-black">JPG & PNG only up to 5MB</p>
                                      </div>
                                  </div>
                                </div>
                              </div>

                              <div class="flex items-center justify-center space-x-6 p-4">
                                <button type="button" id="closeModal" class="close bg-[#D0D9D3] font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                  Cancel
                                </button>
                                <button type="submit" class="bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                  Create Class
                                </button>
                              </div>
                            </form>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navButton = document.getElementById('nav-button');
            const sidebar = document.getElementById('sidebar');
            const mainContainer = document.getElementById('main-container');
            const class1 = document.getElementById('class1');

            navButton.addEventListener('click', function() {
                sidebar.classList.toggle('show');
                mainContainer.classList.toggle('shifted');
            });

            const classForm = document.getElementById('classForm');
            const classContainer = document.getElementById('classContainer');
            const modal = document.getElementById('modal');
            const openModalBtn = document.getElementById('openModal');
            const closeModalBtn = document.getElementById('closeModal');

            classForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const className = document.getElementById('className').value;
                const classSubject = document.getElementById('classSubject').value;
                const bgImage = document.getElementById('bgImage').files[0];

                const newCard = document.createElement('div');
                newCard.classList.add('rounded-t-lg', 'rounded-b-lg', 'w-1/4', 'cursor-pointer');

                if (bgImage) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const bgImageUrl = e.target.result;
                        newCard.innerHTML = `
                            <div class="rounded-t-lg rounded-b-lg w-full cursor-pointer">
                              <div class="p-4 bg-[#D0D9D3] border rounded-t-lg h-40 flex items-center justify-center" style="background-image: url('${bgImageUrl}'); background-size: cover; background-position: center;"></div>
                                <div class="p-4 bg-white border rounded-b-lg shadow-lg w-full items-center justify-center">
                                  <div class="flex items-center justify-between">
                                    <div class="flex-col">
                                      <p class="text-left"><b>${className}</b></p>
                                      <p class="text-left italic">${classSubject}</p>
                                    </div>
                                    <div class="flex-col">
                                      <div class="dropdown dropdown-end">
                                        <div tabindex="0" role="button" class="btn btn-circle avatar">
                                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(90)" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="5" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> <circle cx="12" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> <circle cx="19" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> </g></svg>
                                        </div>
                                        <ul tabindex="0"
                                            class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-[#D0D9D3] rounded-box w-52">
                                            <li><a>Edit Class</a></li>
                                            <li><a>Delete Class</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        `;
                        classContainer.appendChild(newCard);
                        modal.classList.add('hidden');
                        classForm.reset();
                    }
                    reader.readAsDataURL(bgImage);
                } else {
                    newCard.innerHTML = `
                        <div class="rounded-t-lg rounded-b-lg w-full cursor-pointer">
                          <div class="p-4 bg-[#D0D9D3] border rounded-t-lg w-full h-40 flex items-center justify-center"></div>
                            <div class="p-4 bg-white border rounded-b-lg shadow-lg w-full items-center justify-center">
                              <div class="flex items-center justify-between">
                                <div class="flex-col">
                                  <p class="text-left"><b>${className}</b></p>
                                  <p class="text-left italic">${classSubject}</p>
                                </div>
                                <div class="flex-col">
                                  <div class="dropdown dropdown-end">
                                    <div tabindex="0" role="button" class="btn btn-circle avatar">
                                        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(90)" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="5" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> <circle cx="12" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> <circle cx="19" cy="12" r="2" stroke="#117325" stroke-width="0.648"></circle> </g></svg>
                                    </div>
                                    <ul tabindex="0"
                                        class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-[#D0D9D3] rounded-box w-52">
                                        <li><a>Edit Class</a></li>
                                        <li><a>Delete Class</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                    `;
                    classContainer.appendChild(newCard);
                    modal.classList.add('hidden');
                    classForm.reset();
                }
            });

            openModalBtn.addEventListener('click', function() {
                modal.classList.remove('hidden');
                document.body.classList.add('modal-active');
            });

            closeModalBtn.addEventListener('click', function() {
                modal.classList.add('hidden');
                document.body.classList.remove('modal-active');
                classForm.reset();
            });

            class1.addEventListener('click', function() {
            window.location.href = '{{ route('ph.class1') }}';
            });
        });
    </script>
</body>

</html>
