<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #38bdf8;
            --pink-color: #ec4899;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
        }

        .main-content {
            padding: 2rem;
        }

        .reservations-container {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-top: 1.5rem;
        }

        .reservations-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .reservations-header h2 {
            font-size: 1.5rem;
            color: var(--primary-color);
            font-weight: 600;
        }

        .auth-button {
            background-color: var(--pink-color);
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            font-size: 1rem;
        }

        .auth-button:hover {
            background-color: #be185d;
        }

        .search-filter {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .filter-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }

        .filter-input:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(58, 176, 179, 0.1);
            outline: none;
        }

        .reservations-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        .reservations-table thead {
            background-color: var(--primary-color);
            color: white;
        }

        .reservations-table th,
        .reservations-table td {
            padding: 1rem;
            text-align: left;
        }

        .reservations-table tbody tr {
            border-bottom: 1px solid #e5e7eb;
        }

        .reservations-table tbody tr:hover {
            background-color: #f9fafb;
        }

        .status-badge {
            display: inline-block;
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            text-transform: capitalize;
        }

        .status-confirmed { background: #dcfce7; color: #166534; }
        .status-pending { background: #fef9c3; color: #854d0e; }
        .status-cancelled { background: #fee2e2; color: #991b1b; }

        .action-btns {
            display: flex;
            gap: 0.5rem;
        }

        .action-btn {
            padding: 0.5rem;
            border: none;
            background: none;
            color: #64748b;
            cursor: pointer;
            border-radius: 6px;
            transition: 0.2s;
        }

        .action-btn:hover {
            background: #f1f5f9;
            color: var(--primary-color);
        }

        @media (max-width: 768px) {
            .search-filter {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="main-content">
        <div id="reservations" class="content-section">
            <div class="reservations-container">
                <div class="reservations-header">
                    <h2>Reservations Management</h2>
                    <button class="auth-button">
                        <i class="fas fa-plus"></i> New Reservation
                    </button>
                </div>

                <div class="search-filter">
                    <input type="text" class="filter-input" placeholder="Search reservations...">
                    <select class="filter-input">
                        <option>All Status</option>
                        <option>Confirmed</option>
                        <option>Pending</option>
                        <option>Cancelled</option>
                    </select>
                    <input type="date" class="filter-input">
                </div>

                <table class="reservations-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Service Type</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1234</td>
                            <td>John Doe</td>
                            <td>2023-08-15</td>
                            <td>Hotel Booking</td>
                            <td><span class="status-badge status-confirmed">Confirmed</span></td>
                            <td class="action-btns">
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>