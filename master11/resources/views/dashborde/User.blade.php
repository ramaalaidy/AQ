<!-- قسم إدارة المستخدمين -->
<div id="users" class="content-section">
    <div class="users-container">
        <div class="users-header">
            <h2>User Management</h2>
            <button class="add-user-btn">
                <i class="fas fa-user-plus"></i> Add New User
            </button>
        </div>

        <div class="user-controls">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search users..." id="searchInput">
            </div>
            <div class="filter-group">
                <select class="role-filter" id="roleFilter">
                    <option value="all">All Roles</option>
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="user">Regular User</option>
                </select>
            </div>
        </div>

        <div class="users-table-container">
            <table class="users-table">
                <thead>
                    <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="userTableBody">
                    <!-- سيتم تعبئته ديناميكيًا -->
                </tbody>
            </table>
        </div>

        <div class="pagination">
            <button class="pagination-btn"><i class="fas fa-chevron-left"></i></button>
            <span class="page-number">Page 1 of 3</span>
            <button class="pagination-btn"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</div>

<style>
/* أنماط صفحة المستخدمين */
.users-container {
    background: #fff;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.users-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.add-user-btn {
    background: var(--primary-color, #2563eb);
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.add-user-btn:hover {
    background: #1e4a76;
}

.user-controls {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
}

.search-box {
    flex: 1;
    position: relative;
}

.search-box input {
    width: 100%;
    padding: 0.75rem 2.5rem;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
}

.search-box i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
}

.role-filter {
    padding: 0.75rem 1rem;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    min-width: 200px;
}

.users-table {
    width: 100%;
    border-collapse: collapse;
}

.users-table th,
.users-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #f1f5f9;
}

.users-table th {
    background: var(--primary-color, #2563eb);
    color: white;
}

.user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.status-badge {
    display: inline-block;
    padding: 0.35rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.status-active { background: #dcfce7; color: #166534; }
.status-inactive { background: #fef9c3; color: #854d0e; }
.status-suspended { background: #fee2e2; color: #991b1b; }

.action-btns {
    display: flex;
    gap: 0.5rem;
}

.action-btn {
    padding: 0.5rem;
    border: none;
    background: none;
    cursor: pointer;
    border-radius: 6px;
    transition: all 0.2s ease;
}

.action-btn:hover {
    background: #f1f5f9;
}

@media (max-width: 768px) {
    .users-table-container {
        overflow-x: auto;
    }
    
    .user-controls {
        flex-direction: column;
    }
    
    .role-filter {
        width: 100%;
    }
}
</style>

<script>
// بيانات المستخدمين التجريبية
const users = [
    {
        id: 1,
        name: "John Doe",
        email: "john@example.com",
        role: "admin",
        status: "active",
        avatar: "avatar1.jpg"
    },
    {
        id: 2,
        name: "Jane Smith",
        email: "jane@example.com",
        role: "manager",
        status: "inactive",
        avatar: "avatar2.jpg"
    }
];

// دالة عرض المستخدمين
function renderUsers(filter = "") {
    const tbody = document.getElementById('userTableBody');
    tbody.innerHTML = '';

    const searchValue = filter.toLowerCase();
    const roleValue = document.getElementById('roleFilter').value;

    users.forEach(user => {
        const userData = `${user.name} ${user.email} ${user.role} ${user.status}`.toLowerCase();
        const matchesSearch = userData.includes(searchValue);
        const matchesRole = (roleValue === 'all' || user.role === roleValue);

        if (matchesSearch && matchesRole) {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>
                    <img src="${user.avatar}" class="user-avatar" alt="${user.name}" 
                         onerror="this.onerror=null; this.src='default-avatar.png';">
                </td>
                <td>${user.name}</td>
                <td>${user.email}</td>
                <td>${user.role}</td>
                <td><span class="status-badge status-${user.status}">${user.status}</span></td>
                <td>
                    <div class="action-btns">
                        <button class="action-btn edit-btn" data-id="${user.id}">
                            <i class="fas fa-edit text-blue-500"></i>
                        </button>
                        <button class="action-btn delete-btn" data-id="${user.id}">
                            <i class="fas fa-trash text-red-500"></i>
                        </button>
                    </div>
                </td>
            `;
            tbody.appendChild(row);
        }
    });
}

// تحميل البيانات الأولية بعد التحميل
document.addEventListener('DOMContentLoaded', () => {
    renderUsers();

    // زر إضافة مستخدم جديد
    document.querySelector('.add-user-btn').addEventListener('click', () => {
        alert("سيتم فتح نموذج إضافة مستخدم جديد...");
        // يمكن استدعاء modal أو form هنا لاحقًا
    });

    // البحث الفوري
    document.getElementById('searchInput').addEventListener('input', (e) => {
        renderUsers(e.target.value);
    });

    // تصفية الدور
    document.getElementById('roleFilter').addEventListener('change', () => {
        renderUsers(document.getElementById('searchInput').value);
    });
});
</script>
