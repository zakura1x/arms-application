<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faculty Workspace</title>

    @vite('resources/css/app.css')
    <style>
        #sidebar {
            transition: transform 0.3s ease-in-out, width 0.3s ease-in-out;
            width: 4rem;
        }

        #sidebar.show {
            width: 16rem;
            transform: translateX(0);
        }

        #main-container {
            transition: margin-left 0.3s ease-in-out;
            margin-left: 4rem;
        }

        #main-container.shifted {
            margin-left: 16rem;
        }

        .sidebar-item {
            display: flex;
            align-items: start;
        }

        .sidebar-item .text {
            display: none;
            margin-left: 1rem;
        }

        #sidebar.show .sidebar-item .text {
            display: inline;
        }

        .sidebar-item svg {
            width: 24px;
            height: 24px;
        }

        .bg-custom1 {
            background-color: #D0D9D3;
        }

        .bg-custom2 {
            background-color: #EFF4F6;
        }

        .shadow-right {
            box-shadow: 2px 0 3px #739072;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-poppins bg-custom2 antialiased dark:bg-black text-black">
    <div id="layout" class="flex">
        <!-- Sidebar -->
        @include('programhead.sidebar')

        <!-- Main container -->
        <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
            <!-- Navbar -->
            @include('programhead.navbar')

            <!-- Main content -->
            <div id="main-content" class="p-6 text-black">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-2xl font-semibold mb-6">Faculty List</h2>
                    <div class="flex justify-between mb-4">
                        <div class="relative">
                            <input type="text" class="border rounded p-2" placeholder="Search Faculty">
                        </div>
                        <div class="relative">
                            <input type="text" class="border rounded p-2" placeholder="Search Faculty">
                        </div>
                        <div class="flex space-x-2">
                            <button class="bg-green-500 text-white px-4 py-2 rounded-lg">Add Faculty</button>
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg">Edit</button>
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg">Assign to Subject</button>

                        </div>
                    </div>
                    <table class="min-w-full bg-white border rounded">
                        <thead>
                            <tr class="w-full bg-gray-100">
                                <th class="p-4 text-left">

                                </th>
                                <th class="p-4 text-left">E-mail</th>
                                <th class="p-4 text-left">Full name</th>
                                <th class="p-4 text-left">Role</th>
                                <th class="p-4 text-left">Assigned Subjects</th>
                                <th class="p-4 text-left">Status</th>
                                <th class="p-4 text-left"></th>
                            </tr>
                        </thead>




                        <tbody>
                            @foreach ($faculty as $faculty)
                                <tr class="border-t">
                                    <td class="p-4">
                                        <input type="checkbox" class="form-checkbox h-4 w-4">
                                    </td>
                                    <td class="p-4">{{ $faculty->email }}</td>
                                    <td class="p-4">{{ $faculty->first_name }} {{ $faculty->last_name }}</td>

                                    <td class="p-4">Faculty</td>
                                    <td class="p-4">Math</td>
                                    <td class="p-4">Active</td>

                                    <td class="p-4 text-right">
                                        <button class="text-gray-500 hover:text-gray-700">...</button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="mt-4 text-gray-600">Displaying 25 out of 1721</div>
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

        navButton.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            mainContainer.classList.toggle('shifted');
        });
    });
</script>

</html>
