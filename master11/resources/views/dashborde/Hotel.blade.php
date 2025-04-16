<!-- Add this inside main content section -->
<div id="hotels" class="content-section">
    <div class="hotels-container">
        <div class="hotels-header">
            <h2>Hotels Management</h2>
            <button class="add-hotel-btn">
                <i class="fas fa-plus"></i> Add New Hotel
            </button>
        </div>

        <div class="hotel-controls">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search hotels..." id="searchInput">
            </div>
            <div class="filter-group">
                <select class="status-filter" id="statusFilter">
                    <option value="all">All Status</option>
                    <option value="active">Active</option>
                    <option value="maintenance">Under Maintenance</option>
                    <option value="closed">Temporarily Closed</option>
                </select>
            </div>
        </div>

        <div class="hotels-table-container">
            <table class="hotels-table">
                <thead>
                    <tr>
                        <th>Hotel</th>
                        <th>Location</th>
                        <th>Contact</th>
                        <th>Rooms</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="hotelsTableBody">
                    <!-- Data will be populated by JavaScript -->
                </tbody>
            </table>
        </div>

        <div class="pagination">
            <span class="results-count">Showing 1-10 of 45 hotels</span>
            <div class="page-controls">
                <button class="page-btn" id="prevPageBtn"><i class="fas fa-chevron-left"></i></button>
                <span class="page-number" id="pageNumber">Page 1</span>
                <button class="page-btn" id="nextPageBtn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</div>

<style>
/* Hotels Page Styles */
.hotels-container {
    background: #fff;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.hotels-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.add-hotel-btn {
    background: #2563eb;
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.add-hotel-btn:hover {
    background: #1e4a76;
}

.hotel-controls {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
}

.search-box {
    position: relative;
    flex: 1;
}

.search-box input {
    width: 100%;
    padding: 0.75rem 2.5rem;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    font-size: 1rem;
}

.search-box i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
}

.status-filter {
    padding: 0.75rem 1rem;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    min-width: 200px;
}

.hotels-table {
    width: 100%;
    border-collapse: collapse;
}

.hotels-table th,
.hotels-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #f1f5f9;
}

.hotels-table th {
    background: #2563eb;
    color: white;
}

.hotel-info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.hotel-image {
    width: 60px;
    height: 40px;
    border-radius: 4px;
    object-fit: cover;
}

.rating-stars {
    color: #f59e0b;
    display: flex;
    gap: 2px;
}

.status-badge {
    padding: 0.35rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.status-active { background: #dcfce7; color: #166534; }
.status-maintenance { background: #fef9c3; color: #854d0e; }
.status-closed { background: #fee2e2; color: #991b1b; }

.pagination {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 2rem;
}

.pagination .page-controls {
    display: flex;
    gap: 0.5rem;
}

.page-btn {
    background: none;
    border: none;
    font-size: 1.5rem;
    color: #2563eb;
    cursor: pointer;
}

.page-btn:hover {
    color: #1e4a76;
}

@media (max-width: 768px) {
    .hotels-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .hotel-controls {
        flex-direction: column;
    }
    
    .hotels-table-container {
        overflow-x: auto;
    }
    
    .pagination {
        flex-direction: column;
        gap: 1rem;
    }
}
</style>

<script>
// Sample Hotel Data
const hotels = [
    {
        id: 1,
        name: "Aqaba Marina Hotel",
        image: "hotel1.jpg",
        location: "Aqaba City Center",
        contact: "info@marinahotel.com",
        rooms: 120,
        rating: 4.5,
        status: "active"
    },
    {
        id: 2,
        name: "Red Sea Resort",
        image: "hotel2.jpg",
        location: "South Beach Road",
        contact: "reservations@redsearesort.com",
        rooms: 85,
        rating: 4.8,
        status: "active"
    }
];

let currentPage = 1;
const hotelsPerPage = 10;

// Render Hotels Table
function renderHotels() {
    const tbody = document.getElementById('hotelsTableBody');
    tbody.innerHTML = hotels.slice((currentPage - 1) * hotelsPerPage, currentPage * hotelsPerPage).map(hotel => `
        <tr>
            <td>
                <div class="hotel-info">
                    <img src="${hotel.image}" 
                         class="hotel-image"
                         alt="${hotel.name}"
                         onerror="this.src='default-hotel.jpg'">
                    <span>${hotel.name}</span>
                </div>
            </td>
            <td>${hotel.location}</td>
            <td>${hotel.contact}</td>
            <td>${hotel.rooms}</td>
            <td>
                <div class="rating-stars">
                    ${'<i class="fas fa-star"></i>'.repeat(Math.floor(hotel.rating))}
                    ${hotel.rating % 1 !== 0 ? '<i class="fas fa-star-half-alt"></i>' : ''}
                </div>
            </td>
            <td><span class="status-badge status-${hotel.status}">${hotel.status}</span></td>
            <td>
                <div class="action-btns">
                    <button class="action-btn edit-btn" data-id="${hotel.id}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="action-btn delete-btn" data-id="${hotel.id}">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </td>
        </tr>
    `).join('');
    document.getElementById('pageNumber').textContent = `Page ${currentPage}`;
}

// Handle Pagination
document.getElementById('prevPageBtn').addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        renderHotels();
    }
});

document.getElementById('nextPageBtn').addEventListener('click', () => {
    if (currentPage * hotelsPerPage < hotels.length) {
        currentPage++;
        renderHotels();
    }
});

// Search Functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const filteredHotels = hotels.filter(hotel =>
        hotel.name.toLowerCase().includes(searchTerm) ||
        hotel.location.toLowerCase().includes(searchTerm)
    );
    renderFilteredHotels(filteredHotels);
});

// Filter Functionality
document.getElementById('statusFilter').addEventListener('change', function(e) {
    const status = e.target.value;
    const filteredHotels = hotels.filter(hotel =>
        status === 'all' || hotel.status === status
    );
    renderFilteredHotels(filteredHotels);
});

// Render Filtered Hotels
function renderFilteredHotels(filteredHotels) {
    currentPage = 1;
    const tbody = document.getElementById('hotelsTableBody');
    tbody.innerHTML = filteredHotels.slice(0, hotelsPerPage).map(hotel => `
        <tr>
            <td>
                <div class="hotel-info">
                    <img src="${hotel.image}" 
                         class="hotel-image"
                         alt="${hotel.name}"
                         onerror="this.src='default-hotel.jpg'">
                    <span>${hotel.name}</span>
                </div>
            </td>
            <td>${hotel.location}</td>
            <td>${hotel.contact}</td>
            <td>${hotel.rooms}</td>
            <td>
                <div class="rating-stars">
                    ${'<i class="fas fa-star"></i>'.repeat(Math.floor(hotel.rating))}
                    ${hotel.rating % 1 !== 0 ? '<i class="fas fa-star-half-alt"></i>' : ''}
                </div>
            </td>
            <td><span class="status-badge status-${hotel.status}">${hotel.status}</span></td>
            <td>
                <div class="action-btns">
                    <button class="action-btn edit-btn" data-id="${hotel.id}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="action-btn delete-btn" data-id="${hotel.id}">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </td>
        </tr>
    `).join('');
    document.getElementById('pageNumber').textContent = `Page 1`;
}
</script>
