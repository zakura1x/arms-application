<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('programhead.css')
</head>

<body class="bg-custom2 font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="layout" class="flex">
        @include('programhead.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
          @include('programhead.header')

            <!-- Main content -->
            <div id="main-content" class="h-screen flex-1 transition-all duration-300 ease-in-out">
              <!-- Component -->
              <section class="antialiased border p-5 h-full">
                  <!-- Table -->
                  <div class="p-4 bg-white shadow-lg rounded-lg border border-gray-200 h-full">
                    <header class="bg-custom3 text-white border-b border-gray-100">
                      <div class="p-4 flex items-center">
                        <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.0495 2.52979L4.02953 6.45979C2.09953 7.71979 2.09953 10.5398 4.02953 11.7998L10.0495 15.7298C11.1295 16.4398 12.9095 16.4398 13.9895 15.7298L19.9795 11.7998C21.8995 10.5398 21.8995 7.72979 19.9795 6.46979L13.9895 2.53979C12.9095 1.81979 11.1295 1.81979 10.0495 2.52979Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M5.62914 13.0801L5.61914 17.7701C5.61914 19.0401 6.59914 20.4001 7.79914 20.8001L10.9891 21.8601C11.5391 22.0401 12.4491 22.0401 13.0091 21.8601L16.1991 20.8001C17.3991 20.4001 18.3791 19.0401 18.3791 17.7701V13.1301" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M21.4004 15V9" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                          <h2 class="ml-4 font-semibold">Add Faculty/Instructor</h2>
                      </div>
                    </header>

                    <form>
                      <h6 class="text-xl mt-3 mb-6 font-bold uppercase">
                        Faculty Information
                      </h6>
                      <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                              <label class="block text-l font-medium mb-2" for="grid-password">
                                  First Name
                              </label>
                              <input type="text" class="border-0 rounded-lg text-l shadow w-full h-12 px-3 py-2 ease-linear transition-all duration-150" value="lucky.jesse">
                          </div>
                        </div>


                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label class="block text-l font-medium mb-2" htmlfor="grid-password">
                              Middle Name
                            </label>
                            <input type="text" class="border-0 rounded-lg text-l shadow w-full h-12 px-3 py-2 ease-linear transition-all duration-150" value="Lucky">
                          </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label class="block text-l font-medium mb-2" htmlfor="grid-password">
                              Last Name
                            </label>
                            <input type="text" class="border-0 rounded-lg text-l shadow w-full h-12 px-3 py-2 ease-linear transition-all duration-150" value="Jesse">
                          </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label class="block text-l font-medium mb-2" htmlfor="grid-password">
                              Email Address
                            </label>
                            <input type="email" class="border-0 rounded-lg text-l shadow w-full h-12 px-3 py-2 ease-linear transition-all duration-150" value="jesse@example.com">
                          </div>
                        </div>
                      </div>

                      <h6 class="text-xl mt-3 mb-6 font-bold uppercase">
                        Additional Information
                      </h6>

                      <div class="flex flex-col">
                        <div class="flex flex-wrap">
                          <div class="w-full lg:w-12/12 px-4">
                              <div class="relative w-full mb-3">
                                  <label class="block text-l font-medium mb-2" for="id-number">
                                      ID Number
                                  </label>
                                  <input type="text" id="id-number" name="id-number" class="border-0 rounded-lg text-l shadow w-full h-12 px-3 py-2 ease-linear transition-all duration-150" value="">
                              </div>
                          </div>
                          <div class="w-full lg:w-4/12 px-4">
                              <div class="relative w-full mb-3">
                                  <label class="block text-l font-medium mb-2" for="phone">
                                      Phone Number
                                  </label>
                                  <input type="tel" id="phone" name="phone" class="border-0 rounded-lg text-l shadow w-full h-12 px-3 py-2 ease-linear transition-all duration-150" value="">
                              </div>
                          </div>
                          <div class="w-full lg:w-4/12 px-4">
                              <div class="relative w-full mb-3">
                                  <label class="block text-l font-medium mb-2" for="birthdate">
                                      Birthdate
                                  </label>
                                  <input type="date" id="birthdate" name="birthdate" class="border-0 rounded-lg text-l shadow w-full h-12 px-3 py-2 ease-linear transition-all duration-150">
                              </div>
                          </div>
                        </div>
                        <div class="flex flex-wrap">
                          <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block text-l font-medium mb-2" for="gender">
                                    Gender
                                </label>
                                <select id="gender" name="gender" class="border-0 rounded-lg text-l shadow w-full h-12 px-3 py-2 ease-linear transition-all duration-150">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                          </div>
                          <div class="w-full lg:w-12/12 px-4">
                              <div class="relative w-full mb-3">
                                  <label class="block text-l font-medium mb-2" for="address">
                                      Address
                                  </label>
                                  <input type="text" id="address" name="address" class="border-0 rounded-lg text-l shadow w-full h-12 px-3 py-2 ease-linear transition-all duration-150" value="">
                              </div>
                          </div>
                        </div>
                      </div>

                      <div class="justify-center">
                        <button type="submit" class="bg-custom3 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                          Submit
                        </button>
                      </div>

                    </form>
                </div>
              </section>
            </div>
        </div>
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navButton = document.getElementById('nav-button');
        const sidebar = document.getElementById('sidebar');
        const mainContainer = document.getElementById('main-container');

        navButton.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            mainContainer.classList.toggle('shifted');
        });
    });
</script>

</html>
