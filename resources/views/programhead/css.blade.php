<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Accountancy Review Management</title>

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
            box-shadow: 2px 0 3px #739072;
        }

    </style>


