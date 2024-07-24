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

    .bg-custom2 {
        /* dae pa nagamit */
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

    .shadow-right {
        box-shadow: 2px 0 3px #739072;
    }

    .uploadedFiles a {
        color: #000000;
        text-decoration: none;
        transition: color 0.3s ease, text-decoration 0.3s ease;
    }

    .uploadedFiles a:hover {
        color: #16a145;
        text-decoration: underline;
    }

    .editable-table th,
    .editable-table td {
        padding: 12px;
        border: 1px solid #e2e8f0;
    }

    .editable-table th {
        background-color: #42604C;
    }

    .editable-table td input,
    .editable-table td select {
        width: 100%;
        padding: 8px;
        border: none;
        background-color: transparent;
        font-size: 14px;
    }

    .editable-table td input:focus,
    .editable-table td select:focus {
        outline: none;
        border-bottom: 2px solid #0eaa42;
    }

    .button {
        background-color: #16a145;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px;
    }

    .button:hover {
        background-color: #0f6b2e;
    }

    .button:focus {
        outline: none;
    }

    .hidden-row {
        display: none;
    }

    /* .modal {
          display: none;
          position: fixed;
          z-index: 1;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
          margin: 15% auto;
        }

        #classForm {
          padding: 20px;
        }

        .close:hover,
        .close:focus {
            color: rgb(226, 45, 45);
            text-decoration: none;
            cursor: pointer;
        } */
</style>
