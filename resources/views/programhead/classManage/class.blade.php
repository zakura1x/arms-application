<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('programhead.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }

        .modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
    </style>
</head>

<body class="font-poppins bg-custom2 antialiased text-black no-scrollbar">
    <div id="layout" class="flex">
        @include('programhead.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
            @include('programhead.navbar')

            <!-- Main content -->
            <div id="main-content" class="h-screen flex-1 transition-all duration-300 ease-in-out">
                <div class="antialiased p-8 h-full">
                    <div id="classContainer" class="flex flex-wrap gap-10 justify-start mb-28">
                        <!-- Add New Class Button -->
                        <div id="openModal" class="rounded-t-lg rounded-b-lg w-1/4 cursor-pointer">
                            <div
                                class="p-4 bg-custom1 border rounded-t-lg w-full h-40 flex items-center justify-center">
                                <svg width="120" height="120" viewBox="0 0 147 147" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M80.7913 7.87492C80.7913 3.84788 77.5269 0.583252 73.4997 0.583252C69.4725 0.583252 66.208 3.84788 66.208 7.87492V66.2083H7.87467C3.84763 66.2083 0.583008 69.4727 0.583008 73.4999C0.583008 77.5271 3.84763 80.7916 7.87467 80.7916H66.208V139.125C66.208 143.152 69.4725 146.417 73.4997 146.417C77.5269 146.417 80.7913 143.152 80.7913 139.125V80.7916H139.125C143.152 80.7916 146.416 77.5271 146.416 73.4999C146.416 69.4727 143.152 66.2083 139.125 66.2083H80.7913V7.87492Z"
                                        fill="#5E866B" />
                                </svg>
                            </div>
                            <div
                                class="p-4 bg-white border rounded-b-lg shadow-lg w-full flex items-center justify-center">
                                <p class="text-center">Add New<br>Class</p>
                            </div>
                        </div>

                        <!-- Loop through classes and display each class -->
                        @foreach ($classes as $class)
                            <a href="{{ route('ph.class-view', ['classID' => $class->id]) }}"
                                class="rounded-t-lg rounded-b-lg w-1/4 cursor-pointer block">
                                <div class="p-4 bg-custom1 border rounded-t-lg h-40 flex items-center justify-center"
                                    @if ($class->background_image) style="background-image: url('{{ asset('class_background/' . $class->background_image) }}'); background-size: cover; background-position: center;" @endif>
                                </div>
                                <div
                                    class="p-4 bg-white border rounded-b-lg shadow-lg w-full flex items-center justify-center">
                                    <div class="flex items-center justify-between w-full">
                                        <div class="flex-col">
                                            <p class="text-left"><b>{{ $class->name }}</b></p>
                                            <p class="text-left italic">{{ $class->class_school_year }}</p>
                                        </div>
                                        <div class="flex-col">
                                            <div class="dropdown dropdown-end">
                                                <div tabindex="0" role="button" class="btn btn-circle avatar">
                                                    <svg width="30px" height="30px" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        transform="rotate(90)" stroke="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <circle cx="5" cy="12" r="2" stroke="#117325"
                                                                stroke-width="0.648"></circle>
                                                            <circle cx="12" cy="12" r="2" stroke="#117325"
                                                                stroke-width="0.648"></circle>
                                                            <circle cx="19" cy="12" r="2" stroke="#117325"
                                                                stroke-width="0.648"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                {{-- <ul tabindex="0"
                                                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-custom1 rounded-box w-52">
                                                    <li><a href="{{ route('class.edit', ['class' => $class->id]) }}">Edit
                                                            Class</a></li>
                                                    <li>
                                                        <form
                                                            action="{{ route('class.destroy', ['class' => $class->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-500">Delete
                                                                Class</button>
                                                        </form>
                                                    </li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>

                    <!-- Modal -->
                    <div id="modal"
                        class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
                        <div class="bg-white rounded-lg shadow-lg w-1/2">
                            <header class="bg-custom3 text-white border-b border-gray-100 rounded-t-lg">
                                <div class="p-4 flex items-center">
                                    <h2 class="font-semibold">Create Class</h2>
                                </div>
                            </header>
                            <div class="p-8">
                                <form id="classForm" action="{{ route('ph.add-class') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="name" placeholder="Class Name" required
                                        class="bg-custom1 border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                                    <input type="text" name="class_school_year" placeholder="Class School Year"
                                        required
                                        class="bg-custom1 border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                                    <div class="relative rounded-lg">
                                        <div
                                            class="flex items-center justify-center rounded-lg bg-custom1 border-dashed border-2 border-black border-opacity-50">
                                            <input type="file" name="background_image"
                                                class="inset-0 border-1 text-black border-black border-dashed w-1/2 h-full cursor-pointer p-8"
                                                accept="image/*">
                                            <div class="flex items-center justify-center">
                                                <div class="ml-2 text-center">
                                                    <p class="text-sm text-black">Select Background</p>
                                                    <p class="text-xs text-black">JPG & PNG only up to 5MB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-center space-x-6 p-4">
                                        <button type="button" id="closeModal"
                                            class="close bg-custom1 font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                            Cancel
                                        </button>
                                        <button type="submit"
                                            class="bg-custom3 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
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

            navButton.addEventListener('click', function() {
                sidebar.classList.toggle('show');
                mainContainer.classList.toggle('shifted');
            });

            const classForm = document.getElementById('classForm');
            const classContainer = document.getElementById('classContainer');
            const modal = document.getElementById('modal');
            const openModalBtn = document.getElementById('openModal');
            const closeModalBtn = document.getElementById('closeModal');

            openModalBtn.addEventListener('click', function() {
                modal.classList.remove('hidden');
                document.body.classList.add('modal-active');
            });

            closeModalBtn.addEventListener('click', function() {
                modal.classList.add('hidden');
                document.body.classList.remove('modal-active');
                classForm.reset();
            });
        });
    </script>

</body>

</html>
