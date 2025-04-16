



<div id="adventures" class="content-section">
    <div class="adventures-container">
        <div class="adventures-header">
            <h2>Adventure Management</h2>
            <button class="add-adventure-btn">
                <i class="fas fa-plus"></i> Add New Adventure
            </button>
        </div>

        <div class="adventure-controls">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search adventures...">
            </div>
            <div class="filter-group">
                <select class="type-filter">
                    <option value="all">All Types</option>
                    <option value="desert">Desert Safari</option>
                    <option value="diving">Scuba Diving</option>
                    <option value="hiking">Mountain Hiking</option>
                </select>
                <select class="difficulty-filter">
                    <option value="all">All Levels</option>
                    <option value="easy">Easy</option>
                    <option value="medium">Medium</option>
                    <option value="hard">Hard</option>
                </select>
            </div>
        </div>

        <div class="adventures-table-container">
            <table class="adventures-table">
                <thead>
                    <tr>
                        <th>Adventure</th>
                        <th>Type</th>
                        <th>Difficulty</th>
                        <th>Duration</th>
                        <th>Price</th>
                        <th>Bookings</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated by JavaScript -->
                </tbody>
            </table>
        </div>

        <div class="adventure-stats">
            <div class="stat-card">
                <i class="fas fa-calendar-check"></i>
                <h3>Total Adventures</h3>
                <p class="total-count">0</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <h3>Active Bookings</h3>
                <p class="bookings-count">0</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-star"></i>
                <h3>Top Rated</h3>
                <p class="top-rated">N/A</p>
            </div>
        </div>
    </div>
</div>

<style>
/* General Styles */
.content-section {
    padding: 3rem 1.5rem;
    background-color: #f4f7fa;
}

/* Adventures Container */
.adventures-container {
    background: #fff;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.adventures-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.add-adventure-btn {
    background: #4CAF50;
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.add-adventure-btn:hover {
    background: #388E3C;
}

/* Adventure Controls */
.adventure-controls {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
}

.search-box {
    display: flex;
    align-items: center;
    background-color: #f1f5f9;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    width: 250px;
}

.search-box input {
    border: none;
    outline: none;
    background-color: transparent;
    margin-left: 0.5rem;
    width: 100%;
}

.filter-group select {
    padding: 0.5rem;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: 0.875rem;
}

.adventures-table-container {
    overflow-x: auto;
}

.adventures-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 2rem;
}

.adventures-table th,
.adventures-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #f1f5f9;
}

.adventures-table th {
    background: #4CAF50;
    color: white;
}

/* Adventure Info */
.adventure-info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.adventure-image {
    width: 60px;
    height: 40px;
    border-radius: 4px;
    object-fit: cover;
}

.type-badge, .difficulty-badge, .status-badge {
    padding: 0.35rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.type-desert { background: #f6e05e; color: #744210; }
.type-diving { background: #63b3ed; color: #2c5282; }
.type-hiking { background: #68d391; color: #22543d; }

.difficulty-easy { background: #c6f6d5; color: #22543d; }
.difficulty-medium { background: #fef9c3; color: #744210; }
.difficulty-hard { background: #fed7d7; color: #742a2a; }

.status-active { background: #dcfce7; color: #166534; }
.status-inactive { background: #fee2e2; color: #991b1b; }

/* Stats Cards */
.adventure-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
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
    color: #4CAF50;
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
    .adventures-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .adventure-controls {
        flex-direction: column;
    }

    .adventure-stats {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Sample Adventure Data
const adventures = [
    {
        id: 1,
        name: "Wadi Rum Desert Safari",
        image: "adventure1.jpg",
        type: "desert",
        difficulty: "medium",
        duration: "4 hours",
        price: "75 JOD",
        bookings: 42,
        status: "active"
    },
    {
        id: 2,
        name: "Red Sea Scuba Diving",
        image: "adventure2.jpg",
        type: "diving",
        difficulty: "easy",
        duration: "3 hours",
        price: "120 JOD",
        bookings: 28,
        status: "active"
    }
];

// Render Adventures Table
function renderAdventures() {
    const tbody = document.querySelector('.adventures-table tbody');
    tbody.innerHTML = adventures.map(adventure => `
        <tr>
            <td>
                <div class="adventure-info">
                    <img src="${adventure.image}" 
                         class="adventure-image"
                         alt="${adventure.name}"
                         onerror="this.src='default-adventure.jpg'">
                    <span>${adventure.name}</span>
                </div>
            </td>
            <td><span class="type-badge type-${adventure.type}">${adventure.type}</span></td>
            <td><span class="difficulty-badge difficulty-${adventure.difficulty}">${adventure.difficulty}</span></td>
            <td>${adventure.duration}</td>
            <td>${adventure.price}</td>
            <td>${adventure.bookings}</td>
            <td><span class="status-badge status-${adventure.status}">${adventure.status}</span></td>
            <td>
                <div class="action-btns">
                    <button class="action-btn view-btn" data-id="${adventure.id}">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="action-btn edit-btn" data-id="${adventure.id}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="action-btn delete-btn" data-id="${adventure.id}">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </td>
        </tr>
    `).join('');
}

// Update Statistics
function updateStats() {
    document.querySelector('.total-count').textContent = adventures.length;
    const totalBookings = adventures.reduce((sum, a) => sum + a.bookings, 0);
    document.querySelector('.bookings-count').textContent = totalBookings;
    const topRated = adventures.reduce((max, a) => a.bookings > max.bookings ? a : max, adventures[0]);
    document.querySelector('.top-rated').textContent = topRated?.name || 'N/A';
}

// Initial Load
document.addEventListener('DOMContentLoaded', () => {
    renderAdventures();
    updateStats();
});

// Search Functionality
document.querySelector('.search-box input').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    document.querySelectorAll('.adventures-table tbody tr').forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});

// Filter Functionality
function applyFilters() {
    const type = document.querySelector('.type-filter').value;
    const difficulty = document.querySelector('.difficulty-filter').value;
    
    document.querySelectorAll('.adventures-table tbody tr').forEach(row => {
        const rowType = row.querySelector('.type-badge').textContent.toLowerCase();
        const rowDifficulty = row.querySelector('.difficulty-badge').textContent.toLowerCase();
        
        const typeMatch = type === 'all' || rowType === type;
        const difficultyMatch = difficulty === 'all' || rowDifficulty === difficulty;
        
        row.style.display = typeMatch && difficultyMatch ? '' : 'none';
    });
}

document.querySelectorAll('.type-filter, .difficulty-filter').forEach(filter => {
    filter.addEventListener('change', applyFilters);
});

// Add New Adventure Handler
document.querySelector('.add-adventure-btn').addEventListener('click', () => {
    // Add logic for new adventure form
    console.log('Opening new adventure form');
});
</script>
