<!-- Add this inside main content section -->
<div id="transport" class="content-section">
    <div class="transport-container">
        <div class="transport-header">
            <h2>Transport Management</h2>
            <button class="add-transport-btn">
                <i class="fas fa-plus"></i> Add New Transport
            </button>
        </div>

        <div class="transport-controls">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search vehicles...">
            </div>
            <div class="filter-group">
                <select class="status-filter">
                    <option value="all">All Status</option>
                    <option value="active">Active</option>
                    <option value="maintenance">In Maintenance</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        </div>

        <div class="transport-table-container">
            <table class="transport-table">
                <thead>
                    <tr>
                        <th>Vehicle</th>
                        <th>Type</th>
                        <th>License Plate</th>
                        <th>Capacity</th>
                        <th>Current Location</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated by JavaScript -->
                </tbody>
            </table>
        </div>

        <div class="transport-stats">
            <div class="stat-card">
                <i class="fas fa-bus"></i>
                <h3>Active Vehicles</h3>
                <p class="active-count">24</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-wrench"></i>
                <h3>In Maintenance</h3>
                <p class="maintenance-count">3</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>On Route</h3>
                <p class="onroute-count">18</p>
            </div>
        </div>
    </div>
</div>

<style>
/* Transport Page Styles */
:root {
    --primary-color: #3498db;
}

.transport-container {
    background: #fff;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.transport-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.add-transport-btn {
    background: var(--primary-color);
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.add-transport-btn:hover {
    background: #1e4a76;
}

.transport-controls {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
}

.transport-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 2rem;
}

.transport-table th,
.transport-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #f1f5f9;
}

.transport-table th {
    background: var(--primary-color);
    color: white;
}

.vehicle-info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.vehicle-icon {
    font-size: 1.5rem;
    width: 40px;
    text-align: center;
}

.vehicle-type {
    padding: 0.35rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    background: #e2e8f0;
    color: #1a365d;
}

.status-badge {
    padding: 0.35rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.status-active { background: #dcfce7; color: #166534; }
.status-maintenance { background: #fef9c3; color: #854d0e; }
.status-inactive { background: #fee2e2; color: #991b1b; }

.transport-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
}

.stat-card {
    background: #f8fafc;
    padding: 1.5rem;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-3px);
}

.stat-card i {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.stat-card h3 {
    color: #4a5568;
    margin-bottom: 0.5rem;
}

.stat-card p {
    font-size: 1.5rem;
    font-weight: bold;
    color: #2d3748;
}

@media (max-width: 768px) {
    .transport-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .transport-controls {
        flex-direction: column;
    }
    
    .transport-table-container {
        overflow-x: auto;
    }
    
    .transport-stats {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Sample Transport Data
const transports = [
    {
        id: 1,
        type: "Bus",
        license: "AQB-1234",
        capacity: 45,
        location: "Aqaba City Center",
        status: "active",
        model: "Mercedes Tourismo"
    },
    {
        id: 2,
        type: "Minivan",
        license: "AQB-5678",
        capacity: 12,
        location: "Marina Station",
        status: "active",
        model: "Toyota Hiace"
    }
];

// Render Transport Table
function renderTransports() {
    const tbody = document.querySelector('.transport-table tbody');
    tbody.innerHTML = transports.map(transport => `
        <tr>
            <td>
                <div class="vehicle-info">
                    <i class="fas ${transport.type === 'Bus' ? 'fa-bus' : 'fa-van-shuttle'} vehicle-icon"></i>
                    <div>
                        <div class="vehicle-model">${transport.model}</div>
                        <div class="vehicle-details">${transport.type}</div>
                    </div>
                </div>
            </td>
            <td><span class="vehicle-type">${transport.type}</span></td>
            <td>${transport.license}</td>
            <td>${transport.capacity} seats</td>
            <td>${transport.location}</td>
            <td><span class="status-badge status-${transport.status}">${transport.status}</span></td>
            <td>
                <div class="action-btns">
                    <button class="action-btn track-btn" data-id="${transport.id}">
                        <i class="fas fa-map-marker-alt"></i>
                    </button>
                    <button class="action-btn edit-btn" data-id="${transport.id}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="action-btn delete-btn" data-id="${transport.id}">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </td>
        </tr>
    `).join('');
}

// Update Statistics
function updateStats() {
    const active = transports.filter(t => t.status === 'active').length;
    const maintenance = transports.filter(t => t.status === 'maintenance').length;
    const onRoute = transports.filter(t => t.location !== 'Depot').length;
    
    document.querySelector('.active-count').textContent = active;
    document.querySelector('.maintenance-count').textContent = maintenance;
    document.querySelector('.onroute-count').textContent = onRoute;
}

// Initial Load
document.addEventListener('DOMContentLoaded', () => {
    renderTransports();
    updateStats();
});

// Search Functionality
document.querySelector('.search-box input').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    document.querySelectorAll('.transport-table tbody tr').forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});

// Filter Functionality
document.querySelector('.status-filter').addEventListener('change', function(e) {
    const status = e.target.value.toLowerCase();
    document.querySelectorAll('.transport-table tbody tr').forEach(row => {
        const rowStatus = row.querySelector('.status-badge').textContent.toLowerCase();
        row.style.display = status === 'all' || rowStatus === status ? '' : 'none';
    });
});

// Add New Transport Handler (add your logic here)
document.querySelector('.add-transport-btn').addEventListener('click', () => {
    // Add your logic to show a form or modal for adding new transport
    console.log('Opening new transport form');
});
</script>
