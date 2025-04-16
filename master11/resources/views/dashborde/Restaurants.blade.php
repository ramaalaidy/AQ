<!-- Add this inside main content section -->
<div id="restaurants" class="content-section">
    <div class="restaurants-container">
        <div class="restaurants-header">
            <h2>Restaurants Management</h2>
            <button class="add-restaurant-btn">
                <i class="fas fa-plus"></i> Add New Restaurant
            </button>
        </div>

        <div class="restaurant-controls">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search restaurants...">
            </div>
            <div class="filter-group">
                <select class="cuisine-filter">
                    <option value="all">All Cuisines</option>
                    <option value="arabic">Arabic</option>
                    <option value="international">International</option>
                    <option value="seafood">Seafood</option>
                    <option value="fusion">Fusion</option>
                </select>
            </div>
        </div>

        <div class="restaurants-table-container">
            <table class="restaurants-table">
                <thead>
                    <tr>
                        <th>Restaurant</th>
                        <th>Cuisine</th>
                        <th>Location</th>
                        <th>Rating</th>
                        <th>Opening Hours</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated by JavaScript -->
                </tbody>
            </table>
        </div>

        <div class="pagination">
            <span class="results-count">Showing 1-10 of 32 restaurants</span>
            <div class="page-controls">
                <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                <span class="page-number">Page 1</span>
                <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</div>

<style>
/* Restaurants Page Styles */
.restaurants-container {
    background: #fff;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.restaurants-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.add-restaurant-btn {
    background: var(--primary-color);
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.add-restaurant-btn:hover {
    background: #1e4a76;
}

.restaurant-controls {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
}

.restaurants-table {
    width: 100%;
    border-collapse: collapse;
}

.restaurants-table th,
.restaurants-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #f1f5f9;
}

.restaurants-table th {
    background: var(--primary-color);
    color: white;
}

.restaurant-info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.restaurant-image {
    width: 60px;
    height: 40px;
    border-radius: 4px;
    object-fit: cover;
}

.cuisine-tag {
    display: inline-block;
    padding: 0.35rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    background: #e2e8f0;
    color: #1a365d;
}

.rating-stars {
    color: #f59e0b;
    display: flex;
    gap: 2px;
}

.opening-hours {
    font-family: monospace;
    color: #4a5568;
}

.status-badge {
    padding: 0.35rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.status-open { background: #dcfce7; color: #166534; }
.status-closed { background: #fee2e2; color: #991b1b; }
.status-renovation { background: #fef9c3; color: #854d0e; }

@media (max-width: 768px) {
    .restaurants-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .restaurant-controls {
        flex-direction: column;
    }
    
    .restaurants-table-container {
        overflow-x: auto;
    }
    
    .pagination {
        flex-direction: column;
        gap: 1rem;
    }
}
</style>

<script>
// Sample Restaurant Data
const restaurants = [
    {
        id: 1,
        name: "Aladdin's Palace",
        image: "rest1.jpg",
        cuisine: "Arabic",
        location: "City Center",
        rating: 4.7,
        hours: "08:00 - 23:00",
        status: "open"
    },
    {
        id: 2,
        name: "Red Sea Grill",
        image: "rest2.jpg",
        cuisine: "Seafood",
        location: "Marina Area",
        rating: 4.9,
        hours: "10:00 - 01:00",
        status: "open"
    }
];

// Render Restaurants Table
function renderRestaurants() {
    const tbody = document.querySelector('.restaurants-table tbody');
    tbody.innerHTML = restaurants.map(restaurant => `
        <tr>
            <td>
                <div class="restaurant-info">
                    <img src="${restaurant.image}" 
                         class="restaurant-image"
                         alt="${restaurant.name}"
                         onerror="this.src='default-restaurant.jpg'">
                    <span>${restaurant.name}</span>
                </div>
            </td>
            <td><span class="cuisine-tag">${restaurant.cuisine}</span></td>
            <td>${restaurant.location}</td>
            <td>
                <div class="rating-stars">
                    ${'<i class="fas fa-star"></i>'.repeat(Math.floor(restaurant.rating))}
                    ${restaurant.rating % 1 !== 0 ? '<i class="fas fa-star-half-alt"></i>' : ''}
                </div>
            </td>
            <td class="opening-hours">${restaurant.hours}</td>
            <td><span class="status-badge status-${restaurant.status}">${restaurant.status}</span></td>
            <td>
                <div class="action-btns">
                    <button class="action-btn edit-btn" data-id="${restaurant.id}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="action-btn delete-btn" data-id="${restaurant.id}">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </td>
        </tr>
    `).join('');
}

// Initial Load
document.addEventListener('DOMContentLoaded', renderRestaurants);

// Search Functionality
document.querySelector('.search-box input').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    document.querySelectorAll('.restaurants-table tbody tr').forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});

// Filter Functionality
document.querySelector('.cuisine-filter').addEventListener('change', function(e) {
    const cuisine = e.target.value.toLowerCase();
    document.querySelectorAll('.restaurants-table tbody tr').forEach(row => {
        const rowCuisine = row.querySelector('.cuisine-tag').textContent.toLowerCase();
        row.style.display = cuisine === 'all' || rowCuisine === cuisine ? '' : 'none';
    });
});

// Add New Restaurant Handler
document.querySelector('.add-restaurant-btn').addEventListener('click', () => {
    // Add logic for new restaurant form
    console.log('Opening new restaurant form');
});
</script>
