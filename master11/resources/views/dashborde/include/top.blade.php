<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    :root {
        --primary-color: #2A5D8A;
        --secondary-color: #3AB0B3;
        --background: #f5f6fa;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
    }

    body {
        display: flex;
        background: var(--background);
    }

    /* Sidebar */
    .sidebar {
        width: 250px;
        height: 100vh;
        background: #fff;
        box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        padding: 20px;
        position: fixed;
    }

    .logo {
        text-align: center;
        margin-bottom: 30px;
    }

    .logo img {
        width: 150px;
    }

    .menu-item {
        padding: 12px;
        margin: 8px 0;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        align-items: center;
    }

    .menu-item:hover {
        background: var(--background);
    }

    .menu-item i {
        margin-right: 10px;
        color: var(--primary-color);
    }

    /* Main Content */
    .main-content {
        margin-left: 250px;
        padding: 30px;
        width: calc(100% - 250px);
    }

    /* Stats Cards */
    .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .stat-card h3 {
        color: var(--primary-color);
        margin-bottom: 10px;
    }

    /* Charts */
    .chart-container {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 30px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    /* Top Bar */
    .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .search-bar {
        background: #fff;
        padding: 10px;
        border-radius: 20px;
        width: 300px;
        display: flex;
        align-items: center;
    }

    .search-bar input {
        border: none;
        outline: none;
        margin-left: 10px;
        width: 100%;
    }

    /* General Styling */
    h1 {
        color: var(--primary-color);
        margin-bottom: 30px;
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 0;
            overflow: hidden;
        }
        .main-content {
            margin-left: 0;
            width: 100%;
        }
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Aqaba Tourism</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>