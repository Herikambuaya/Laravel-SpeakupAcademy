<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeakUp Academy - Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=InSter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
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

        /* User Role Selector */
        .role-selector {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 1000;
        }

        .role-btn {
            background: var(--gradient-primary);
            color: var(--white);
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .role-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .role-dropdown {
            position: absolute;
            bottom: 100%;
            right: 0;
            margin-bottom: 10px;
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 1rem;
            min-width: 200px;
            display: none;
        }

        .role-dropdown.show {
            display: block;
            animation: slideUp 0.3s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .role-option {
            padding: 12px 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
        }

        .role-option:hover {
            background: var(--light);
        }

        .role-option.active {
            background: var(--gradient-primary);
            color: var(--white);
        }

        /* Dashboard Specific Styles */
        .dashboard {
            display: none;
        }

        .dashboard.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Admin Specific */
        .admin-stats {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }

        /* Mentor Specific */
        .schedule-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border-bottom: 1px solid var(--light-gray);
        }

        .schedule-item:last-child {
            border-bottom: none;
        }

        .schedule-time {
            background: var(--gradient-primary);
            color: var(--white);
            padding: 8px 12px;
            border-radius: 8px;
            font-weight: 600;
            min-width: 80px;
            text-align: center;
        }

        .schedule-details {
            flex: 1;
        }

        .schedule-title {
            font-weight: 600;
            margin-bottom: 4px;
        }

        .schedule-students {
            font-size: 12px;
            color: var(--dark-light);
        }

        /* Student Specific */
        .course-card {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            border-bottom: 1px solid var(--light-gray);
        }

        .course-card:last-child {
            border-bottom: none;
        }

        .course-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 20px;
        }

        .course-details {
            flex: 1;
        }

        .course-title {
            font-weight: 600;
            margin-bottom: 4px;
        }

        .course-progress {
            font-size: 12px;
            color: var(--dark-light);
            margin-bottom: 8px;
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

            <div class="nav-user">
                <div class="user-info">
                    <div class="user-name" id="currentUserName">Admin User</div>
                    <div class="user-role" id="currentUserRole">Administrator</div>
                </div>
                <div class="user-avatar" id="currentUserAvatar">A</div>
            </div>
        </div>
    </header>

    <!-- Role Selector -->
    <div class="role-selector">
        <button class="role-btn" onclick="toggleRoleDropdown()">
            <i class="fas fa-user-cog"></i> Ganti Role
        </button>
        <div class="role-dropdown" id="roleDropdown">
            <div class="role-option active" onclick="switchDashboard('admin')">
                <i class="fas fa-crown"></i>
                <div>
                    <div>Administrator</div>
                    <small>Manage system & users</small>
                </div>
            </div>
            <div class="role-option" onclick="switchDashboard('mentor')">
                <i class="fas fa-chalkboard-teacher"></i>
                <div>
                    <div>Mentor</div>
                    <small>Teach & guide students</small>
                </div>
            </div>
            <div class="role-option" onclick="switchDashboard('student')">
                <i class="fas fa-user-graduate"></i>
                <div>
                    <div>Student</div>
                    <small>Learn & practice English</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Admin Dashboard -->
    <div class="dashboard active" id="adminDashboard">
        <div class="dashboard-container">
            <div class="dashboard-header">
                <h1 class="dashboard-title">Dashboard Administrator</h1>
                <p class="dashboard-subtitle">Kelola sistem dan pantau aktivitas SpeakUp Academy</p>
            </div>

            <div class="stats-grid admin-stats">
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
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Statistik Platform</div>
                            <a href="#" class="card-link">Detail Laporan</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mentor Dashboard -->
    <div class="dashboard" id="mentorDashboard">
        <div class="dashboard-container">
            <div class="dashboard-header">
                <h1 class="dashboard-title">Dashboard Mentor</h1>
                <p class="dashboard-subtitle">Kelola kelas dan bimbing siswa Anda</p>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="stat-value">48</div>
                    <div class="stat-label">Siswa Aktif</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <div class="stat-value">12</div>
                    <div class="stat-label">Kelas Hari Ini</div>
                </div>
                <div class="stat-card accent">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-value">6.5</div>
                    <div class="stat-label">Jam Mengajar</div>
                </div>
                <div class="stat-card gold">
                    <div class="stat-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-value">4.8</div>
                    <div class="stat-label">Rating</div>
                </div>
            </div>

            <div class="content-grid">
                <div class="main-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Jadwal Hari Ini</div>
                            <a href="#" class="card-link">Lihat Kalender</a>
                        </div>
                        <div class="card-body">
                            <div class="schedule-item">
                                <div class="schedule-time">09:00</div>
                                <div class="schedule-details">
                                    <div class="schedule-title">Business English - Intermediate</div>
                                    <div class="schedule-students">8 siswa • Ruang Virtual A</div>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <div class="schedule-time">11:00</div>
                                <div class="schedule-details">
                                    <div class="schedule-title">Conversation Practice</div>
                                    <div class="schedule-students">6 siswa • Ruang Virtual B</div>
                                </div>
                            </div>
                            <div class="schedule-item">
                                <div class="schedule-time">14:00</div>
                                <div class="schedule-details">
                                    <div class="schedule-title">Grammar Masterclass</div>
                                    <div class="schedule-students">10 siswa • Ruang Virtual C</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Progress Siswa</div>
                            <a href="#" class="card-link">Lihat Detail</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Siswa</th>
                                        <th>Kelas</th>
                                        <th>Progress</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Andi Wijaya</td>
                                        <td>Advanced Speaking</td>
                                        <td>
                                            <div class="progress-bar">
                                                <div class="progress-fill" style="width: 85%;"></div>
                                            </div>
                                        </td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>Budi Santoso</td>
                                        <td>Business English</td>
                                        <td>
                                            <div class="progress-bar">
                                                <div class="progress-fill" style="width: 65%;"></div>
                                            </div>
                                        </td>
                                        <td>B+</td>
                                    </tr>
                                    <tr>
                                        <td>Citra Dewi</td>
                                        <td>IELTS Preparation</td>
                                        <td>
                                            <div class="progress-bar">
                                                <div class="progress-fill" style="width: 45%;"></div>
                                            </div>
                                        </td>
                                        <td>B</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="sidebar-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tugas Menunggu</div>
                        </div>
                        <div class="card-body">
                            <div style="margin-bottom: 1rem;">
                                <div style="font-weight: 600; margin-bottom: 4px;">Review Tugas Writing</div>
                                <div style="font-size: 12px; color: var(--dark-light);">5 tugas belum direview</div>
                            </div>
                            <div style="margin-bottom: 1rem;">
                                <div style="font-weight: 600; margin-bottom: 4px;">Persiapan Materi</div>
                                <div style="font-size: 12px; color: var(--dark-light);">3 kelas besok</div>
                            </div>
                            <button class="btn btn-primary" style="width: 100%;">
                                <i class="fas fa-tasks"></i> Lihat Semua Tugas
                            </button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Pesan Baru</div>
                        </div>
                        <div class="card-body">
                            <div style="margin-bottom: 1rem;">
                                <div style="font-weight: 600; margin-bottom: 4px;">Andi Wijaya</div>
                                <div style="font-size: 12px; color: var(--dark-light);">Bisa dijelaskan tentang present perfect tense?</div>
                            </div>
                            <div style="margin-bottom: 1rem;">
                                <div style="font-weight: 600; margin-bottom: 4px;">Budi Santoso</div>
                                <div style="font-size: 12px; color: var(--dark-light);">Saya butuh bantuan untuk persiapan interview</div>
                            </div>
                            <button class="btn btn-primary" style="width: 100%;">
                                <i class="fas fa-inbox"></i> Buka Inbox
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Student Dashboard -->
    <div class="dashboard" id="studentDashboard">
        <div class="dashboard-container">
            <div class="dashboard-header">
                <h1 class="dashboard-title">Dashboard Siswa</h1>
                <p class="dashboard-subtitle">Tingkatkan kemampuan bahasa Inggris Anda</p>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stat-value">3</div>
                    <div class="stat-label">Kelas Aktif</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-value">24</div>
                    <div class="stat-label">Jam Belajar</div>
                </div>
                <div class="stat-card accent">
                    <div class="stat-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="stat-value">8</div>
                    <div class="stat-label">Tugas Selesai</div>
                </div>
                <div class="stat-card gold">
                    <div class="stat-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="stat-value">85%</div>
                    <div class="stat-label">Progress Keseluruhan</div>
                </div>
            </div>

            <div class="content-grid">
                <div class="main-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Kelas Saya</div>
                            <a href="#" class="card-link">Lihat Semua</a>
                        </div>
                        <div class="card-body">
                            <div class="course-card">
                                <div class="course-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <div class="course-details">
                                    <div class="course-title">Advanced Conversation</div>
                                    <div class="course-progress">Mentor: Sarah Johnson • Progress: 75%</div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 75%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-card">
                                <div class="course-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="course-details">
                                    <div class="course-title">Business English</div>
                                    <div class="course-progress">Mentor: Michael Chen • Progress: 60%</div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-card">
                                <div class="course-icon">
                                    <i class="fas fa-pen-fancy"></i>
                                </div>
                                <div class="course-details">
                                    <div class="course-title">Academic Writing</div>
                                    <div class="course-progress">Mentor: Lisa Wang • Progress: 45%</div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 45%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Jadwal Belajar</div>
                            <a href="#" class="card-link">Lihat Kalender</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Hari</th>
                                        <th>Waktu</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Advanced Conversation</td>
                                        <td>Senin & Rabu</td>
                                        <td>19:00 - 20:30</td>
                                        <td><span style="color: #10b981;">● Aktif</span></td>
                                    </tr>
                                    <tr>
                                        <td>Business English</td>
                                        <td>Selasa & Kamis</td>
                                        <td>20:00 - 21:30</td>
                                        <td><span style="color: #10b981;">● Aktif</span></td>
                                    </tr>
                                    <tr>
                                        <td>Academic Writing</td>
                                        <td>Jumat</td>
                                        <td>18:00 - 20:00</td>
                                        <td><span style="color: #f59e0b;">● Besok</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="sidebar-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tugas Terbaru</div>
                        </div>
                        <div class="card-body">
                            <div style="margin-bottom: 1rem;">
                                <div style="font-weight: 600; margin-bottom: 4px;">Writing Assignment</div>
                                <div style="font-size: 12px; color: var(--dark-light);">Due: 2 days left</div>
                            </div>
                            <div style="margin-bottom: 1rem;">
                                <div style="font-weight: 600; margin-bottom: 4px;">Speaking Practice</div>
                                <div style="font-size: 12px; color: var(--dark-light);">Due: Tomorrow</div>
                            </div>
                            <button class="btn btn-primary" style="width: 100%;">
                                <i class="fas fa-arrow-right"></i> Kerjakan Tugas
                            </button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Pencapaian</div>
                        </div>
                        <div class="card-body">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 1rem;">
                                <div style="width: 40px; height: 40px; background: var(--gradient-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fas fa-fire"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600;">5 Hari Berturut</div>
                                    <div style="font-size: 12px; color: var(--dark-light);">Belajar konsisten</div>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 40px; height: 40px; background: var(--gradient-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600;">Top Student</div>
                                    <div style="font-size: 12px; color: var(--dark-light);">Conversation Class</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentRole = 'admin';

        function toggleRoleDropdown() {
            const dropdown = document.getElementById('roleDropdown');
            dropdown.classList.toggle('show');
        }

        function switchDashboard(role) {
            // Hide all dashboards
            document.querySelectorAll('.dashboard').forEach(dash => {
                dash.classList.remove('active');
            });

            // Show selected dashboard
            document.getElementById(role + 'Dashboard').classList.add('active');

            // Update active role in dropdown
            document.querySelectorAll('.role-option').forEach(option => {
                option.classList.remove('active');
            });
            event.currentTarget.classList.add('active');

            // Update header info
            updateUserInfo(role);

            // Close dropdown
            document.getElementById('roleDropdown').classList.remove('show');

            currentRole = role;
        }

        function updateUserInfo(role) {
            const userName = document.getElementById('currentUserName');
            const userRole = document.getElementById('currentUserRole');
            const userAvatar = document.getElementById('currentUserAvatar');

            switch (role) {
                case 'admin':
                    userName.textContent = 'Admin User';
                    userRole.textContent = 'Administrator';
                    userAvatar.textContent = 'A';
                    break;
                case 'mentor':
                    userName.textContent = 'Sarah Johnson';
                    userRole.textContent = 'Senior Mentor';
                    userAvatar.textContent = 'S';
                    break;
                case 'student':
                    userName.textContent = 'Andi Wijaya';
                    userRole.textContent = 'Student - Advanced';
                    userAvatar.textContent = 'A';
                    break;
            }
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('roleDropdown');
            const button = document.querySelector('.role-btn');

            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.remove('show');
            }
        });

        // Initialize
        updateUserInfo('admin');
    </script>
</body>

</html>