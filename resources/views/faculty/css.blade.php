<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar Navigation</title>

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

        .bg-custom2 { /* dae pa nagamit */
            background-color: #EFF4F6;
        }

        .bg-custom3 {
            background-color: #42604C;
        }

        .bg-custom4 {
            background-color: #E1EDE5;
        }

        .shadow-right {
            box-shadow: 2px 0 3px #739072; /* Adjust the values as needed */
        }

        .placeholdertext::placeholder {
            colrgb(255, 255, 255)7280; /* Tailwind's gray-500 color */
        }
    </style>
