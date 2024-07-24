<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('programhead.css')
</head>

<body class="font-poppins antialiased text-black">
    <div id="layout" class="flex">
        @include('programhead.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
            @include('programhead.navbar')

            <div class="p-8 bg-[#EFF4F6] h-full shadow-lg border">
                <header class="bg-[#42604C] text-white border-b border-gray-100">
                    <div class="p-4 flex items-start justify-between">
                        <div class="flex items-center w-full">
                            <svg width="25" height="25" viewBox="0 0 33 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- SVG content -->
                            </svg>
                            <h2 class="ml-4 font-semibold">Learning Development Plan Details</h2>
                        </div>
                        <div class="flex items-end justify-end space-x-6 w-full">
                            <button type="button" id="backButton"
                                class="close bg-[#D0D9D3] text-black font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer">
                                CANCEL
                            </button>
                        </div>
                    </div>
                </header>
                <div class="overflow-x-auto h-screen bg-[#D0D9D3] p-8">
                    <div>
                        <div class="flex items-center">
                            <div class="w-1/2 mr-5">
                                <label for="lessontitle"><b>Lesson Plan Title</b></label>
                                <input id="lessontitle" type="text" disabled
                                    class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150"
                                    value="{{ $ldp->plan_name }}">
                            </div>
                            <div class="w-1/2">
                                <label for="subject"><b>Subject</b></label>
                                <input id="subject" list="subjects" disabled
                                    class="bg-[#EFF4F6] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150"
                                    value="{{ $ldp->subject->name }}">
                            </div>
                        </div>

                        <div class="border-2 border-green-700 mt-4 mb-4"></div>

                        <button id="openTopicModal"
                            class="bg-[#42604C] text-white font-medium m-2 py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                            <a>CREATE NEW TOPIC</a>
                        </button>



                        @foreach ($ldp->topics as $topic)
                            <div class="bg-[#EFF4F6] border border-gray-300 rounded-lg p-4 mt-2">
                                <!-- 1ST TOGGLE -->
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <button class="text-gray-500 focus:outline-none toggleTopicButton"
                                            data-target="#topicContent{{ $topic->id }}">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path id="panelToggleIcon" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                        <h3 class="font-semibold ml-4">{{ $topic->topic_name }}</h3>
                                    </div>
                                    <div class="ml-auto flex items-center">
                                        <div class="material-modal-trigger bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer"
                                            data-target="#materialModal{{ $topic->id }}">
                                            <button type="button" class="ml-2 mr-2">
                                                ADD MATERIALS
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <button class="text-gray-500 focus:outline-none toggleTopicButton"
                                            data-target="#topicContent{{ $topic->id }}">
                                            <svg class="h-5 w-5 panelToggleIcon" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                        <h3 class="font-semibold ml-4">{{ $topic->topic_name }}</h3>
                                    </div>

                                    <div class="ml-auto flex items-center">
                                        <div class="material-modal-trigger bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline cursor-pointer"
                                            data-target="#materialModal{{ $topic->id }}">
                                            <button type="button" class="ml-2 mr-2">
                                                ADD MATERIALS
                                            </button>
                                        </div>
                                    </div>
                                </div> --}}

                                <!-- Modules for the current topic -->
                                <div id="topicContent{{ $topic->id }}" class="hidden">
                                    @foreach ($topic->modules as $module)
                                        <div class="flex items-center mb-2">
                                            <button class="text-gray-500 focus:outline-none toggleModuleButton"
                                                data-target="#moduleContent{{ $module->id }}">
                                                <svg class="h-5 w-5 moduleToggleIcon" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </button>
                                            <span class="ml-4">{{ $module->module_name }}</span>
                                        </div>
                                        <!-- Panel content for the module -->
                                        <div id="moduleContent{{ $module->id }}" class="hidden">
                                            <ul class="uploadedFiles list-disc pl-5">
                                                @foreach ($module->attachments as $attachment)
                                                    <li class="flex items-center">
                                                        <a href="{{ asset('Attachments/' . $attachment->attachment_path) }}"
                                                            target="_blank" class="text-blue-500 hover:underline">
                                                            {{ $attachment->attachment_name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                    </div>

                    @include('programhead.ldpManage.topicmodal')

                    <!-- Modal for adding materials -->
                    <div id="materialModal{{ $topic->id }}"
                        class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
                        <div class="bg-white rounded-lg shadow-lg w-1/2">
                            <header class="bg-[#42604C] text-white border-b border-gray-100 rounded-t-lg">
                                <div class="p-4 flex items-center">
                                    <h2 class="font-semibold">Upload New Material</h2>
                                </div>
                            </header>
                            <div class="p-4">
                                <form id="materialForm" action="{{ route('ph.module.store') }}"
                                    enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <input type="hidden" name="topic_id" value="{{ $topic->id }}">
                                    <input type="hidden" name="ldp_id" value="{{ $ldp->id }}">
                                    <label for="materialTitle"><b>Material Title</b></label>
                                    <input name="module_name" id="materialTitle" type="text" required
                                        class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                                    <label for="materialDescription"><b>Material Description</b></label>
                                    <input name="module_description" id="materialDescription" type="text" required
                                        class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                                    <label for="materialFile"><b>Material File</b></label>
                                    <input name="attachment_path" id="materialFile" type="file" required
                                        class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">

                                    <div class="flex items-center justify-end space-x-6 p-2">
                                        <button type="button" id="closeMaterialModal{{ $topic->id }}"
                                            class="close font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                            CANCEL
                                        </button>
                                        <div id="uploadButton"
                                            class="flex items-center bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.778 18.056c-.882 0-1.72-.343-2.345-.968l-5.778-5.779c-1.291-1.29-1.291-3.398 0-4.688L6.3.977a3.313 3.313 0 0 1 4.688 0l5.778 5.778a3.313 3.313 0 0 1 0 4.688l-5.778 5.779a3.308 3.308 0 0 1-2.344.968zm-3.467-3.01l5.778-5.778 2.344 2.343-5.778 5.779a1.656 1.656 0 0 1-2.344-2.344zm10.156-5.467L9.69 4.845 12.034 2.5l3.778 3.779a1.656 1.656 0 0 1 0 2.344l-2.345 2.345z"
                                                    fill="#fff" />
                                            </svg>
                                            <button type="submit">UPLOAD</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
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

        const backbtn = document.getElementById('backButton');
        const createbtn = document.getElementById('createButton');

        const openTopicModal = document.getElementById('openTopicModal');
        const closeTopicModal = document.getElementById('closeTopicModal');
        const topicModal = document.getElementById('topicModal');

        const materialModal = document.getElementById('materialModal');
        const closeMaterialModal = document.getElementById('closeMaterialModal');

        // Event listener for toggling topic content
        const toggleTopicButtons = document.querySelectorAll('.toggleTopicButton');
        toggleTopicButtons.forEach(button => {
            button.addEventListener('click', function() {
                const topicContentId = this.getAttribute('data-target');
                const topicContent = document.querySelector(topicContentId);
                const toggleIcon = this.querySelector('.panelToggleIcon');

                if (topicContent) {
                    topicContent.classList.toggle('hidden');
                    if (topicContent.classList.contains('hidden')) {
                        toggleIcon.setAttribute('d', 'M19 9l-7 7-7-7');
                    } else {
                        toggleIcon.setAttribute('d', 'M19 15l-7-7-7 7');
                    }
                }
            });
        });

        // Event listener for toggling module content
        const toggleModuleButtons = document.querySelectorAll('.toggleModuleButton');
        toggleModuleButtons.forEach(button => {
            button.addEventListener('click', function() {
                const moduleContentId = this.getAttribute('data-target');
                const moduleContent = document.querySelector(moduleContentId);
                const toggleIcon = this.querySelector('.moduleToggleIcon');

                if (moduleContent) {
                    moduleContent.classList.toggle('hidden');
                    if (moduleContent.classList.contains('hidden')) {
                        toggleIcon.setAttribute('d', 'M19 9l-7 7-7-7');
                    } else {
                        toggleIcon.setAttribute('d', 'M19 15l-7-7-7 7');
                    }
                }
            });
        });

        navButton.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            mainContainer.classList.toggle('shifted');
        });

        backbtn.addEventListener('click', function() {
            window.location.href = '{{ route('ph.ldp-list') }}';
        });

        openTopicModal.addEventListener('click', function() {
            topicModal.classList.remove('hidden');
        });

        closeTopicModal.addEventListener('click', function() {
            topicForm.reset();
            topicModal.classList.add('hidden');
        });

        // Show the material modal
        document.querySelectorAll('.material-modal-trigger').forEach(button => {
            button.addEventListener('click', function() {
                const targetModal = document.querySelector(button.getAttribute('data-target'));
                if (targetModal) {
                    targetModal.classList.remove('hidden');
                }
            });
        });

        // Close the material modal
        document.querySelectorAll('.close').forEach(button => {
            button.addEventListener('click', function() {
                const modal = button.closest('.fixed');
                if (modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    });
</script>

</html>
