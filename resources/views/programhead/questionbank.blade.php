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
              <section class="p-5 antialiased h-full">
                  <!-- Table -->
                  <div class="p-4 bg-white shadow-lg rounded-lg border border-gray-200 h-full">
                    <header class="bg-custom3 text-white border-b border-gray-100">
                      <div class="p-4 flex items-center">
                        <svg width="25" height="25" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M27.0249 24.1337C27.0249 24.4576 26.76 24.7228 26.4361 24.7228H6.56271C6.23863 24.7228 5.97363 24.4577 5.97363 24.1337V23.7413C5.97363 23.4175 6.23851 23.1523 6.56271 23.1523H26.4361C26.7599 23.1523 27.0249 23.4173 27.0249 23.7413V24.1337Z" fill="white"/>
                          <path d="M14.8737 7.82112C14.8737 8.14484 14.6089 8.40996 14.2847 8.40996H6.56271C6.23863 8.40996 5.97363 8.14496 5.97363 7.82112V7.42844C5.97363 7.10459 6.23851 6.83948 6.56271 6.83948H14.2847C14.6087 6.83948 14.8737 7.10447 14.8737 7.42844V7.82112Z" fill="white"/>
                          <path d="M26.7265 29.5716C26.7265 29.8953 26.4614 30.1603 26.1372 30.1603H18.4153C18.0912 30.1603 17.8262 29.8953 17.8262 29.5716V29.1789C17.8262 28.8551 18.091 28.59 18.4153 28.59H26.1372C26.4613 28.59 26.7265 28.855 26.7265 29.1789V29.5716Z" fill="white"/>
                          <path d="M18.9678 13.2585C18.9678 13.5823 18.7029 13.8476 18.379 13.8476H6.56271C6.23863 13.8476 5.97363 13.5825 5.97363 13.2585V12.8661C5.97363 12.5422 6.23851 12.2772 6.56271 12.2772H18.379C18.7028 12.2772 18.9678 12.5422 18.9678 12.8661V13.2585Z" fill="white"/>
                          <path d="M27.0249 18.6961C27.0249 19.02 26.76 19.285 26.4361 19.285H6.56271C6.23863 19.285 5.97363 19.02 5.97363 18.6961V18.3036C5.97363 17.9797 6.23851 17.7146 6.56271 17.7146H26.4361C26.7599 17.7146 27.0249 17.9796 27.0249 18.3036V18.6961Z" fill="white"/>
                          <path d="M30.7814 8.9681L21.2595 1.13772C20.4711 0.488834 19.1067 0 18.0859 0H3.10741C1.81251 0 0.758789 1.05348 0.758789 2.34862C0.758789 2.34862 0.758789 27.6236 0.758789 34.5812C0.758789 37 3.04651 37 3.10103 37C8.91842 37 29.8922 37 29.8922 37C31.1873 37 32.2408 35.9464 32.2408 34.6513V12.0581C32.2408 10.981 31.6132 9.65237 30.7814 8.9681ZM20.6083 3.54712C20.6083 2.97176 21.0848 3.41317 21.0848 3.41317L28.6323 9.86176C28.6323 9.86176 29.1154 10.337 28.2875 10.337C26.5199 10.337 21.2179 10.337 21.2179 10.337C20.8817 10.337 20.6083 10.0637 20.6083 9.72758C20.6083 9.72758 20.6083 5.09232 20.6083 3.54712ZM29.8922 35.2604C29.8922 35.2604 8.34414 35.2604 2.93652 35.2604C2.84012 35.2604 2.49811 35.2329 2.49811 34.7572C2.49811 28.2096 2.49811 2.3485 2.49811 2.3485C2.49811 2.01816 2.77731 1.7392 3.10741 1.7392H18.0858C18.3394 1.7392 18.8692 1.87374 18.8692 2.59821V9.72758C18.8692 11.0226 19.9227 12.0762 21.2179 12.0762H30.0658C30.2273 12.0762 30.5006 12.1872 30.5006 12.5779C30.5006 12.584 30.5016 34.6511 30.5016 34.6511C30.5016 34.9873 30.2283 35.2604 29.8922 35.2604Z" fill="white"/>
                          </svg>
                          <h2 class="ml-4 font-semibold">QUESTIONS</h2>
                      </div>
                    </header>
                    <div class="p-4">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead class="text-xs font-semibold uppercase bg-custom4">
                                    <tr>
                                        <th class="w-1/4 p-2">
                                            <div class="font-semibold text-left">Question</div>
                                        </th>
                                        <th class="w-1/4 p-2">
                                            <div class="font-semibold text-left">Date Added</div>
                                        </th>
                                        <th class="w-1/4 p-2">
                                            <div class="font-semibold text-left">Status</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100">
                                    <tr>
                                        <td class="w-1/4 p-2">
                                          <div class="flex items-center">
                                              <div class="ml-4 font-medium text-gray-800">What is the tax value method?</div>
                                          </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.733398 2.94338C0.733398 2.12782 1.39333 1.46667 2.21011 1.46667H19.79C20.6056 1.46667 21.2667 2.1266 21.2667 2.94338V20.5233C21.2667 21.3388 20.6068 22 19.79 22H2.21011C1.39455 22 0.733398 21.3401 0.733398 20.5233V2.94338ZM2.20007 7.33333H19.8001V20.5333H2.20007V7.33333ZM5.1334 0.733333C5.1334 0.328325 5.44732 0 5.8736 0H7.32653C7.73533 0 8.06673 0.34017 8.06673 0.733333V1.46667H5.1334V0.733333ZM13.9334 0.733333C13.9334 0.328325 14.2473 0 14.6736 0H16.1265C16.5353 0 16.8667 0.34017 16.8667 0.733333V1.46667H13.9334V0.733333Z" fill="black"/>
                                            </svg>
                                            <div class="ml-4 text-left font-medium">7/3/2024</div>
                                          </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M16.5103 2.78239C14.7978 1.06493 12.4218 -0.000519341 9.80713 1.89913e-07C7.19247 -0.000519341 4.81614 1.06493 3.10363 2.78239C1.3898 4.49851 0.326593 6.87982 0.327149 9.5C0.326593 12.1202 1.3898 14.5015 3.10363 16.2177C4.81614 17.9351 7.19247 19.0006 9.80713 19C12.4218 19.0006 14.7978 17.9351 16.5103 16.2177C18.2244 14.5015 19.2876 12.1202 19.2871 9.5C19.2876 6.87982 18.2245 4.49851 16.5103 2.78239ZM15.1201 4.17577C16.4815 5.54139 17.3203 7.41746 17.3209 9.5C17.3203 11.5825 16.4815 13.4586 15.1201 14.8242C13.7571 16.1885 11.885 17.0291 9.80713 17.0296C7.72897 17.0291 5.85686 16.1885 4.49412 14.8242C3.1327 13.4586 2.29391 11.5825 2.29336 9.5C2.29387 7.4175 3.1327 5.54139 4.49408 4.17577C5.85683 2.81152 7.72897 1.97092 9.80709 1.97036C11.885 1.97095 13.7571 2.81152 15.1201 4.17577Z" fill="#2EC05F"/>
                                              <path d="M9.80727 12.3354C9.21589 12.3354 8.73145 12.8212 8.73145 13.4136C8.73145 14.0059 9.21589 14.4914 9.80727 14.4914C10.3984 14.4914 10.8831 14.0059 10.8831 13.4136C10.8831 12.8212 10.3984 12.3354 9.80727 12.3354Z" fill="#2EC05F"/>
                                              <path d="M9.80689 11.5777C10.0488 11.5777 10.3884 10.5067 10.4756 10.1937C10.7469 9.2871 10.9699 8.05151 10.9699 7.02978C10.9699 5.81014 10.6304 4.50879 9.80689 4.50879C8.98287 4.50879 8.64355 5.8101 8.64355 7.02978C8.64355 8.05155 8.86685 9.28714 9.13811 10.1937C9.22535 10.5067 9.56441 11.5777 9.80689 11.5777Z" fill="#2EC05F"/>
                                            </svg>
                                            <div class="ml-4 text-lg text-left">ACTIVE</div>
                                          </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-custom4">
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4 font-medium text-gray-800">Where did the tax value method come from?</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.733398 2.94338C0.733398 2.12782 1.39333 1.46667 2.21011 1.46667H19.79C20.6056 1.46667 21.2667 2.1266 21.2667 2.94338V20.5233C21.2667 21.3388 20.6068 22 19.79 22H2.21011C1.39455 22 0.733398 21.3401 0.733398 20.5233V2.94338ZM2.20007 7.33333H19.8001V20.5333H2.20007V7.33333ZM5.1334 0.733333C5.1334 0.328325 5.44732 0 5.8736 0H7.32653C7.73533 0 8.06673 0.34017 8.06673 0.733333V1.46667H5.1334V0.733333ZM13.9334 0.733333C13.9334 0.328325 14.2473 0 14.6736 0H16.1265C16.5353 0 16.8667 0.34017 16.8667 0.733333V1.46667H13.9334V0.733333Z" fill="black"/>
                                            </svg>
                                            <div class="ml-4 text-left font-medium">7/3/2024</div>
                                          </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M16.5103 2.78239C14.7978 1.06493 12.4218 -0.000519341 9.80713 1.89913e-07C7.19247 -0.000519341 4.81614 1.06493 3.10363 2.78239C1.3898 4.49851 0.326593 6.87982 0.327149 9.5C0.326593 12.1202 1.3898 14.5015 3.10363 16.2177C4.81614 17.9351 7.19247 19.0006 9.80713 19C12.4218 19.0006 14.7978 17.9351 16.5103 16.2177C18.2244 14.5015 19.2876 12.1202 19.2871 9.5C19.2876 6.87982 18.2245 4.49851 16.5103 2.78239ZM15.1201 4.17577C16.4815 5.54139 17.3203 7.41746 17.3209 9.5C17.3203 11.5825 16.4815 13.4586 15.1201 14.8242C13.7571 16.1885 11.885 17.0291 9.80713 17.0296C7.72897 17.0291 5.85686 16.1885 4.49412 14.8242C3.1327 13.4586 2.29391 11.5825 2.29336 9.5C2.29387 7.4175 3.1327 5.54139 4.49408 4.17577C5.85683 2.81152 7.72897 1.97092 9.80709 1.97036C11.885 1.97095 13.7571 2.81152 15.1201 4.17577Z" fill="#2EC05F"/>
                                              <path d="M9.80727 12.3354C9.21589 12.3354 8.73145 12.8212 8.73145 13.4136C8.73145 14.0059 9.21589 14.4914 9.80727 14.4914C10.3984 14.4914 10.8831 14.0059 10.8831 13.4136C10.8831 12.8212 10.3984 12.3354 9.80727 12.3354Z" fill="#2EC05F"/>
                                              <path d="M9.80689 11.5777C10.0488 11.5777 10.3884 10.5067 10.4756 10.1937C10.7469 9.2871 10.9699 8.05151 10.9699 7.02978C10.9699 5.81014 10.6304 4.50879 9.80689 4.50879C8.98287 4.50879 8.64355 5.8101 8.64355 7.02978C8.64355 8.05155 8.86685 9.28714 9.13811 10.1937C9.22535 10.5067 9.56441 11.5777 9.80689 11.5777Z" fill="#2EC05F"/>
                                            </svg>
                                            <div class="ml-4 text-lg text-left">ACTIVE</div>
                                          </div>
                                        </td>
                                    </tr>
                                    <tr>
                                      <td class="p-2 whitespace-nowrap">
                                          <div class="flex items-center">
                                              <div class="ml-4 font-medium text-gray-800">Why introduce the tax value method?</div>
                                          </div>
                                      </td>
                                      <td class="p-2 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.733398 2.94338C0.733398 2.12782 1.39333 1.46667 2.21011 1.46667H19.79C20.6056 1.46667 21.2667 2.1266 21.2667 2.94338V20.5233C21.2667 21.3388 20.6068 22 19.79 22H2.21011C1.39455 22 0.733398 21.3401 0.733398 20.5233V2.94338ZM2.20007 7.33333H19.8001V20.5333H2.20007V7.33333ZM5.1334 0.733333C5.1334 0.328325 5.44732 0 5.8736 0H7.32653C7.73533 0 8.06673 0.34017 8.06673 0.733333V1.46667H5.1334V0.733333ZM13.9334 0.733333C13.9334 0.328325 14.2473 0 14.6736 0H16.1265C16.5353 0 16.8667 0.34017 16.8667 0.733333V1.46667H13.9334V0.733333Z" fill="black"/>
                                            </svg>
                                            <div class="ml-4 text-left font-medium">7/3/2024</div>
                                          </div>
                                      </td>
                                      <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.5103 2.78239C14.7978 1.06493 12.4218 -0.000519341 9.80713 1.89913e-07C7.19247 -0.000519341 4.81614 1.06493 3.10363 2.78239C1.3898 4.49851 0.326593 6.87982 0.327149 9.5C0.326593 12.1202 1.3898 14.5015 3.10363 16.2177C4.81614 17.9351 7.19247 19.0006 9.80713 19C12.4218 19.0006 14.7978 17.9351 16.5103 16.2177C18.2244 14.5015 19.2876 12.1202 19.2871 9.5C19.2876 6.87982 18.2245 4.49851 16.5103 2.78239ZM15.1201 4.17577C16.4815 5.54139 17.3203 7.41746 17.3209 9.5C17.3203 11.5825 16.4815 13.4586 15.1201 14.8242C13.7571 16.1885 11.885 17.0291 9.80713 17.0296C7.72897 17.0291 5.85686 16.1885 4.49412 14.8242C3.1327 13.4586 2.29391 11.5825 2.29336 9.5C2.29387 7.4175 3.1327 5.54139 4.49408 4.17577C5.85683 2.81152 7.72897 1.97092 9.80709 1.97036C11.885 1.97095 13.7571 2.81152 15.1201 4.17577Z" fill="#FF0000"/>
                                            <path d="M9.80727 12.3354C9.21589 12.3354 8.73145 12.8212 8.73145 13.4136C8.73145 14.0059 9.21589 14.4914 9.80727 14.4914C10.3984 14.4914 10.8831 14.0059 10.8831 13.4136C10.8831 12.8212 10.3984 12.3354 9.80727 12.3354Z" fill="#FF0000"/>
                                            <path d="M9.80689 11.5777C10.0488 11.5777 10.3884 10.5067 10.4756 10.1937C10.7469 9.2871 10.9699 8.05151 10.9699 7.02978C10.9699 5.81014 10.6304 4.50879 9.80689 4.50879C8.98287 4.50879 8.64355 5.8101 8.64355 7.02978C8.64355 8.05155 8.86685 9.28714 9.13811 10.1937C9.22535 10.5067 9.56441 11.5777 9.80689 11.5777Z" fill="#FF0000"/>
                                          </svg>
                                          <div class="ml-4 text-lg text-left">INACTIVE</div>
                                        </div>
                                      </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </section>

              <section class="bg-custom2 p-8 antialiased">
                <div class="flex items-center justify-between">
                  <button class="flex items-center text-white rounded-lg p-5 w-24 h-8 bg-custom3">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.1497 5.93991L6.27971 17.8099C5.21971 18.8799 2.04971 19.3698 1.27971 18.6598C0.509711 17.9498 1.06969 14.7799 2.12969 13.7099L13.9997 1.83994C14.5478 1.31795 15.2783 1.03091 16.0351 1.04013C16.7919 1.04936 17.5151 1.35412 18.0503 1.88932C18.5855 2.42451 18.8903 3.14775 18.8995 3.90457C18.9088 4.6614 18.6217 5.39183 18.0997 5.93991H18.1497Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M19 19H10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a class="ml-2">VIEW</a>
                  </button>

                  <button class="flex items-center text-white rounded-lg p-5 w-30 h-8 bg-custom3">
                    <svg width="20" height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M23.3387 14.723H18.6002C17.2002 14.723 16.0156 13.5384 16.0156 12.1384C16.231 8.31534 18.0079 8.09996 18.1695 5.62304C18.331 3.03842 16.7156 0.723036 14.1848 0.184575C10.8464 -0.515425 7.83099 2.01534 7.83099 5.24611C7.83099 8.09996 9.76945 8.09996 9.98484 12.1384C9.98484 13.5384 8.80023 14.723 7.40023 14.723H2.66176C1.26176 14.723 0.0771484 15.8538 0.0771484 17.3077V19.0307C0.0771484 19.5153 0.454071 19.8923 0.938687 19.8923H25.0618C25.5464 19.8923 25.9233 19.5153 25.9233 19.0307V17.3077C25.9233 15.8538 24.7387 14.723 23.3387 14.723ZM23.3925 22.4769H2.60792C2.1233 22.4769 1.80023 22.8538 1.80023 23.2846V23.3384C1.80023 24.7384 2.98484 25.923 4.38484 25.923H21.6695C23.0695 25.923 24.2002 24.7384 24.2002 23.3384V23.2846C24.2002 22.8538 23.8233 22.4769 23.3925 22.4769Z" fill="white"/>
                    </svg>
                    <a class="ml-2">APPROVE</a>
                  </button>

                  <button class="flex items-center text-white rounded-lg p-5 w-35 h-8 bg-custom3">
                    <svg width="20" height="20" viewBox="-4 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>notes</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="People" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Icon-3" transform="translate(-4.000000, 0.000000)" fill="#ffffff">
                      <path d="M37,42 C37.553,42 38,42.448 38,43 C38,43.552 37.553,44 37,44 L23,44 C22.448,44 22,43.552 22,43 C22,42.448 22.448,42 23,42 L37,42 Z M43,38 L23,38 C22.448,38 22,37.552 22,37 C22,36.448 22.448,36 23,36 L43,36 C43.553,36 44,36.448 44,37 C44,37.552 43.553,38 43,38 L43,38 Z M45,32 L23,32 C22.448,32 22,31.552 22,31 C22,30.448 22.448,30 23,30 L45,30 C45.553,30 46,30.448 46,31 C46,31.552 45.553,32 45,32 L45,32 Z M22,25 C22,24.448 22.448,24 23,24 L41,24 C41.553,24 42,24.448 42,25 C42,25.552 41.553,26 41,26 L23,26 C22.448,26 22,25.552 22,25 L22,25 Z M22,19 C22,18.448 22.448,18 23,18 L43,18 C43.553,18 44,18.448 44,19 C44,19.552 43.553,20 43,20 L23,20 C22.448,20 22,19.552 22,19 L22,19 Z M18,43 C18,43.552 17.552,44 17,44 L15,44 C14.448,44 14,43.552 14,43 C14,42.448 14.448,42 15,42 L17,42 C17.552,42 18,42.448 18,43 L18,43 Z M18,37 C18,37.552 17.552,38 17,38 L15,38 C14.448,38 14,37.552 14,37 C14,36.448 14.448,36 15,36 L17,36 C17.552,36 18,36.448 18,37 L18,37 Z M18,31 C18,31.552 17.552,32 17,32 L15,32 C14.448,32 14,31.552 14,31 C14,30.448 14.448,30 15,30 L17,30 C17.552,30 18,30.448 18,31 L18,31 Z M18,25 C18,25.552 17.552,26 17,26 L15,26 C14.448,26 14,25.552 14,25 C14,24.448 14.448,24 15,24 L17,24 C17.552,24 18,24.448 18,25 L18,25 Z M18,19 C18,19.552 17.552,20 17,20 L15,20 C14.448,20 14,19.552 14,19 C14,18.448 14.448,18 15,18 L17,18 C17.552,18 18,18.448 18,19 L18,19 Z M18,5 C18,4.448 18.448,4 19,4 L21,4 C21.552,4 22,4.448 22,5 C22,5.552 21.552,6 21,6 L19,6 C18.448,6 18,5.552 18,5 L18,5 Z M28,5 C28,4.448 28.448,4 29,4 L31,4 C31.553,4 32,4.448 32,5 C32,5.552 31.553,6 31,6 L29,6 C28.448,6 28,5.552 28,5 L28,5 Z M38,5 C38,4.448 38.447,4 39,4 L41,4 C41.553,4 42,4.448 42,5 C42,5.552 41.553,6 41,6 L39,6 C38.447,6 38,5.552 38,5 L38,5 Z M15,8 C15.551,8 16,8.449 16,9 C16,9.551 15.551,10 15,10 C14.449,10 14,9.551 14,9 C14,8.449 14.449,8 15,8 L15,8 Z M12,9 C12,10.654 13.346,12 15,12 C16.654,12 18,10.654 18,9 C18,7.698 17.162,6.599 16,6.184 L16,1 C16,0.448 15.552,0 15,0 C14.448,0 14,0.448 14,1 L14,6.184 C12.838,6.599 12,7.698 12,9 L12,9 Z M45,8 C45.552,8 46,8.449 46,9 C46,9.551 45.552,10 45,10 C44.448,10 44,9.551 44,9 C44,8.449 44.448,8 45,8 L45,8 Z M42,9 C42,10.654 43.346,12 45,12 C46.654,12 48,10.654 48,9 C48,7.698 47.161,6.599 46,6.184 L46,1 C46,0.448 45.553,0 45,0 C44.447,0 44,0.448 44,1 L44,6.184 C42.839,6.599 42,7.698 42,9 L42,9 Z M35,8 C35.552,8 36,8.449 36,9 C36,9.551 35.552,10 35,10 C34.448,10 34,9.551 34,9 C34,8.449 34.448,8 35,8 L35,8 Z M32,9 C32,10.654 33.346,12 35,12 C36.654,12 38,10.654 38,9 C38,7.698 37.161,6.599 36,6.184 L36,1 C36,0.448 35.553,0 35,0 C34.447,0 34,0.448 34,1 L34,6.184 C32.839,6.599 32,7.698 32,9 L32,9 Z M25,8 C25.551,8 26,8.449 26,9 C26,9.551 25.551,10 25,10 C24.449,10 24,9.551 24,9 C24,8.449 24.449,8 25,8 L25,8 Z M22,9 C22,10.654 23.346,12 25,12 C26.654,12 28,10.654 28,9 C28,7.698 27.162,6.599 26,6.184 L26,1 C26,0.448 25.552,0 25,0 C24.448,0 24,0.448 24,1 L24,6.184 C22.838,6.599 22,7.698 22,9 L22,9 Z M51,58 L9,58 C7.878,58 6.714,57.085 6.233,56 L53.767,56 C53.286,57.085 52.122,58 51,58 L51,58 Z M6,54 L54,54 L54,52 L6,52 L6,54 Z M51,4 L49,4 C48.447,4 48,4.448 48,5 C48,5.552 48.447,6 49,6 L51,6 C52.458,6 54,7.542 54,9 L54,50 L6,50 L6,9 C6,7.542 7.542,6 9,6 L11,6 C11.552,6 12,5.552 12,5 C12,4.448 11.552,4 11,4 L9,4 C6.43,4 4,6.43 4,9 L4,55 C4,57.57 6.43,60 9,60 L51,60 C53.57,60 56,57.57 56,55 L56,9 C56,6.43 53.57,4 51,4 L51,4 Z" id="notes"> </path> </g> </g> </g>
                    </svg>
                    <a class="ml-2">FEEDBACK</a>
                  </button>
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
