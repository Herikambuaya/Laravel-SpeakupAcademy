<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeakUp Academy - Mentor Dashboard</title>
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

        /* Schedule Items */
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
                <a href="#" class="nav-item">Schedule</a>
                <a href="#" class="nav-item">Students</a>
                <a href="#" class="nav-item">Materials</a>
                <a href="#" class="nav-item">Assessments</a>
            </div>

            <div class="nav-user">
                <div class="user-info">
                    <div class="user-name">Herman Tarigan</div>
                    <div class="user-role">Senior Mentor</div>
                </div>
                <div class="user-avatar">S</div>
            </div>
        </div>
    </header>

    <!-- Mentor Dashboard -->
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
                        <div class="schedule-item">
                            <div class="schedule-time">16:00</div>
                            <div class="schedule-details">
                                <div class="schedule-title">IELTS Preparation</div>
                                <div class="schedule-students">7 siswa • Ruang Virtual D</div>
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
                                <tr>
                                    <td>Dewi Sartika</td>
                                    <td>Conversation Practice</td>
                                    <td>
                                        <div class="progress-bar">
                                            <div class="progress-fill" style="width: 75%;"></div>
                                        </div>
                                    </td>
                                    <td>A-</td>
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
                        <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid var(--light-gray);">
                            <div style="font-weight: 600; margin-bottom: 4px;">Review Tugas Writing</div>
                            <div style="font-size: 12px; color: var(--dark-light);">5 tugas belum direview</div>
                        </div>
                        <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid var(--light-gray);">
                            <div style="font-weight: 600; margin-bottom: 4px;">Persiapan Materi</div>
                            <div style="font-size: 12px; color: var(--dark-light);">3 kelas besok</div>
                        </div>
                        <div style="margin-bottom: 1rem;">
                            <div style="font-weight: 600; margin-bottom: 4px;">Assessment Speaking</div>
                            <div style="font-size: 12px; color: var(--dark-light);">8 siswa menunggu</div>
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
                        <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid var(--light-gray);">
                            <div style="font-weight: 600; margin-bottom: 4px;">Andi Wijaya</div>
                            <div style="font-size: 12px; color: var(--dark-light);">Bisa dijelaskan tentang present perfect tense?</div>
                        </div>
                        <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid var(--light-gray);">
                            <div style="font-weight: 600; margin-bottom: 4px;">Budi Santoso</div>
                            <div style="font-size: 12px; color: var(--dark-light);">Saya butuh bantuan untuk persiapan interview</div>
                        </div>
                        <div style="margin-bottom: 1rem;">
                            <div style="font-weight: 600; margin-bottom: 4px;">Citra Dewi</div>
                            <div style="font-size: 12px; color: var(--dark-light);">Kapan kita bisa diskusi tentang writing task?</div>
                        </div>
                        <button class="btn btn-primary" style="width: 100%;">
                            <i class="fas fa-inbox"></i> Buka Inbox
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Kelas Saya</div>
                    </div>
                    <div class="card-body">
                        <div style="margin-bottom: 1rem;">
                            <div style="font-weight: 600; margin-bottom: 4px;">Business English</div>
                            <div style="font-size: 12px; color: var(--dark-light);">12 siswa • Mon & Wed</div>
                        </div>
                        <div style="margin-bottom: 1rem;">
                            <div style="font-weight: 600; margin-bottom: 4px;">Advanced Speaking</div>
                            <div style="font-size: 12px; color: var(--dark-light);">8 siswa • Tue & Thu</div>
                        </div>
                        <div style="margin-bottom: 1rem;">
                            <div style="font-weight: 600; margin-bottom: 4px;">IELTS Preparation</div>
                            <div style="font-size: 12px; color: var(--dark-light);">15 siswa • Fri</div>
                        </div>
                        <button class="btn btn-primary" style="width: 100%;">
                            <i class="fas fa-plus"></i> Buat Kelas Baru
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple interactivity for mentor dashboard
        document.addEventListener('DOMContentLoaded', function() {
            // Add click events to buttons
            const buttons = document.querySelectorAll('.btn-primary');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const buttonText = this.textContent.trim();
                    alert(`Action: ${buttonText}\n\nThis feature will be implemented in the backend.`);
                });
            });

            // Add schedule item click events
            const scheduleItems = document.querySelectorAll('.schedule-item');
            scheduleItems.forEach(item => {
                item.addEventListener('click', function() {
                    const title = this.querySelector('.schedule-title').textContent;
                    const time = this.querySelector('.schedule-time').textContent;
                    alert(`Class: ${title}\nTime: ${time}\n\nClick to join class or view details.`);
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