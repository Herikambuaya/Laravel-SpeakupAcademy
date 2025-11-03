<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeakUp Academy - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        :root {
            --primary: #667eea;
            --primary-light: #764ba2;
            --secondary: #f093fb;
            --accent: #ff6b6b;
            --accent-light: #ff9e9e;
            --gold: #f6d365;
            --light: #f8fafc;
            --light-gray: #e2e8f0;
            --dark: #2d3748;
            --dark-light: #4a5568;
            --white: #ffffff;
            --shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            --shadow-light: 0 10px 25px rgba(0, 0, 0, 0.05);
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            --border-radius: 16px;
            --gradient-primary: linear-gradient(135deg, var(--primary), var(--primary-light));
            --gradient-accent: linear-gradient(135deg, var(--accent), var(--secondary));
            --gradient-gold: linear-gradient(135deg, var(--gold), #fda085);
        }

        body {
            background: var(--light);
            color: var(--dark);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Header & Navigation */
        .header {
            background: var(--white);
            box-shadow: var(--shadow-light);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: var(--gradient-primary);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-icon i {
            font-size: 20px;
            color: var(--white);
        }

        .logo-text {
            font-size: 20px;
            font-weight: 700;
            background: var(--gradient-primary);
            background-clip: text;
            /* ✅ versi standar */
            -webkit-background-clip: text;
            /* ✅ versi WebKit (Chrome/Safari/Edge) */
            -webkit-text-fill-color: transparent;
        }

        .nav-user {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-info {
            text-align: right;
        }

        .user-name {
            font-weight: 600;
            color: var(--dark);
        }

        .user-role {
            font-size: 12px;
            color: var(--dark-light);
            font-weight: 500;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
            font-size: 18px;
        }

        /* Dashboard Container */
        .dashboard-container {
            max-width: 1400px;
            margin: 80px auto 0;
            padding: 2rem;
        }

        /* Dashboard Header */
        .dashboard-header {
            margin-bottom: 2rem;
        }

        .dashboard-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 8px;
            background: var(--gradient-primary);
            background-clip: text;
            /* ✅ versi standar */
            -webkit-background-clip: text;
            /* ✅ versi WebKit (Chrome/Safari/Edge) */
            -webkit-text-fill-color: transparent;
        }

        .dashboard-subtitle {
            color: var(--dark-light);
            font-size: 16px;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--white);
            padding: 1.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            border-left: 4px solid var(--primary);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .stat-card.accent {
            border-left-color: var(--accent);
        }

        .stat-card.gold {
            border-left-color: var(--gold);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            background: var(--gradient-primary);
            color: var(--white);
            font-size: 20px;
        }

        .stat-card.accent .stat-icon {
            background: var(--gradient-accent);
        }

        .stat-card.gold .stat-icon {
            background: var(--gradient-gold);
        }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 4px;
            color: var(--dark);
        }

        .stat-label {
            color: var(--dark-light);
            font-size: 14px;
            font-weight: 500;
        }

        /* Content Grid */
        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .sidebar-content {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* Cards */
        .card {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            overflow: hidden;
        }

        .card-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--light-gray);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark);
        }

        .card-link {
            color: var(--primary);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: var(--transition);
        }

        .card-link:hover {
            text-decoration: underline;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* Tables */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th {
            text-align: left;
            padding: 1rem;
            background: var(--light);
            color: var(--dark-light);
            font-weight: 600;
            font-size: 14px;
            border-bottom: 1px solid var(--light-gray);
        }

        .table td {
            padding: 1rem;
            border-bottom: 1px solid var(--light-gray);
            font-size: 14px;
        }

        .table tr:last-child td {
            border-bottom: none;
        }

        /* Progress Bars */
        .progress-bar {
            width: 100%;
            height: 8px;
            background: var(--light-gray);
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--gradient-primary);
            border-radius: 4px;
            transition: width 0.3s ease;
        }

        /* Buttons */
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: var(--white);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        /* Navigation Menu */
        .nav-menu {
            display: flex;
            gap: 2rem;
            margin-left: 3rem;
        }

        .nav-item {
            color: var(--dark-light);
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: var(--transition);
        }

        .nav-item:hover,
        .nav-item.active {
            color: var(--primary);
            background: var(--light);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .dashboard-container {
                padding: 1rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .nav-container {
                padding: 1rem;
            }

            .user-info {
                display: none;
            }

            .nav-menu {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Header Navigation -->
    <header class="header">
        <div class="nav-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <div class="logo-text">SpeakUp Academy</div>
            </div>

            <div class="nav-menu">
                <a href="#" class="nav-item active">Dashboard</a>
                <a href="#" class="nav-item">Users</a>
                <a href="#" class="nav-item">Courses</a>
                <a href="#" class="nav-item">Reports</a>
                <a href="#" class="nav-item">Settings</a>
            </div>

            <div class="nav-user">
                <div class="user-info">
                    <div class="user-name">Admin User</div>
                    <div class="user-role">Administrator</div>
                </div>
                <div class="user-avatar">A</div>
            </div>
        </div>
    </header>

    <!-- Admin Dashboard -->
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Dashboard Administrator</h1>
            <p class="dashboard-subtitle">Kelola sistem dan pantau aktivitas SpeakUp Academy</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-value">1,248</div>
                <div class="stat-label">Total Siswa</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="stat-value">42</div>
                <div class="stat-label">Mentor Aktif</div>
            </div>
            <div class="stat-card accent">
                <div class="stat-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="stat-value">156</div>
                <div class="stat-label">Kelas Berjalan</div>
            </div>
            <div class="stat-card gold">
                <div class="stat-icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="stat-value">Rp 98.5Jt</div>
                <div class="stat-label">Pendapatan Bulan Ini</div>
            </div>
        </div>

        <div class="content-grid">
            <div class="main-content">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Aktivitas Terbaru</div>
                        <a href="#" class="card-link">Lihat Semua</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pengguna</th>
                                    <th>Aktivitas</th>
                                    <th>Waktu</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sarah Johnson</td>
                                    <td>Mendaftar kelas Advanced</td>
                                    <td>10:30 AM</td>
                                    <td><span style="color: #10b981;">✓ Selesai</span></td>
                                </tr>
                                <tr>
                                    <td>Michael Chen</td>
                                    <td>Pembayaran kursus</td>
                                    <td>09:15 AM</td>
                                    <td><span style="color: #10b981;">✓ Selesai</span></td>
                                </tr>
                                <tr>
                                    <td>Lisa Wang</td>
                                    <td>Reset password</td>
                                    <td>08:45 AM</td>
                                    <td><span style="color: #f59e0b;">⏳ Pending</span></td>
                                </tr>
                                <tr>
                                    <td>David Brown</td>
                                    <td>Upload assignment</td>
                                    <td>08:30 AM</td>
                                    <td><span style="color: #10b981;">✓ Selesai</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Statistik Platform</div>
                        <<a href="#" class="card-link">Detail Laporan</a>
                    </div>
                    <div class="card-body">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                            <div>
                                <div style="margin-bottom: 1rem;">
                                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                        <span>Kelas Aktif</span>
                                        <span>85%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 85%;"></div>
                                    </div>
                                </div>
                                <div style="margin-bottom: 1rem;">
                                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                        <span>Kepuasan Siswa</span>
                                        <span>92%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 92%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div style="margin-bottom: 1rem;">
                                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                        <span>Mentor Aktif</span>
                                        <span>78%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 78%;"></div>
                                    </div>
                                </div>
                                <div style="margin-bottom: 1rem;">
                                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                        <span>Penyelesaian Kursus</span>
                                        <span>65%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 65%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sidebar-content">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Quick Actions</div>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" style="width: 100%; margin-bottom: 10px;">
                            <i class="fas fa-plus"></i> Tambah Mentor
                        </button>
                        <button class="btn btn-primary" style="width: 100%; margin-bottom: 10px;">
                            <i class="fas fa-book"></i> Buat Kelas Baru
                        </button>
                        <button class="btn btn-primary" style="width: 100%; margin-bottom: 10px;">
                            <i class="fas fa-chart-bar"></i> Generate Report
                        </button>
                        <button class="btn btn-primary" style="width: 100%;">
                            <i class="fas fa-cog"></i> System Settings
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Sistem Status</div>
                    </div>
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                            <span>Server</span>
                            <span style="color: #10b981;">● Online</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                            <span>Database</span>
                            <span style="color: #10b981;">● Optimal</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                            <span>API Services</span>
                            <span style="color: #10b981;">● Active</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span>Storage</span>
                            <span style="color: #f59e0b;">● 78% Used</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Recent Notifications</div>
                    </div>
                    <div class="card-body">
                        <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid var(--light-gray);">
                            <div style="font-weight: 600; margin-bottom: 4px;">New Student Registration</div>
                            <div style="font-size: 12px; color: var(--dark-light);">5 new students waiting approval</div>
                        </div>
                        <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid var(--light-gray);">
                            <div style="font-weight: 600; margin-bottom: 4px;">System Backup</div>
                            <div style="font-size: 12px; color: var(--dark-light);">Backup completed successfully</div>
                        </div>
                        <div>
                            <div style="font-weight: 600; margin-bottom: 4px;">Payment Received</div>
                            <div style="font-size: 12px; color: var(--dark-light);">15 new payments processed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple notification system
        document.addEventListener('DOMContentLoaded', function() {
            // Add click events to buttons
            const buttons = document.querySelectorAll('.btn-primary');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const buttonText = this.textContent.trim();
                    alert(`Action: ${buttonText}\n\nThis feature will be implemented in the backend.`);
                });
            });

            // Add hover effects to cards
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>

</html>