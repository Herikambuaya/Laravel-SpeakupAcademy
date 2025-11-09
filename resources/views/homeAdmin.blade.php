<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeakUp Academy - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary: #6366f1;
            --primary-light: #818cf8;
            --primary-dark: #4f46e5;
            --secondary: #8b5cf6;
            --accent: #f59e0b;
            --accent-light: #fbbf24;
            --success: #10b981;
            --success-light: #34d399;
            --warning: #f59e0b;
            --error: #ef4444;
            --light: #f8fafc;
            --light-gray: #f1f5f9;
            --gray: #64748b;
            --dark: #1e293b;
            --dark-light: #334155;
            --white: #ffffff;
            --glass: rgba(255, 255, 255, 0.25);
            --glass-border: rgba(255, 255, 255, 0.18);
            --shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
            --shadow-light: 0 8px 25px rgba(0, 0, 0, 0.08);
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            --border-radius: 20px;
            --border-radius-sm: 14px;
            --gradient-primary: linear-gradient(135deg, var(--primary), var(--secondary));
            --gradient-accent: linear-gradient(135deg, var(--accent), #f97316);
            --gradient-success: linear-gradient(135deg, var(--success), #34d399);
            --gradient-glass: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: var(--white); /* Changed to white for better contrast */
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
            animation: float 20s infinite linear;
            filter: blur(40px);
        }

        .floating-shape:nth-child(1) {
            width: 400px;
            height: 400px;
            top: 10%;
            left: 5%;
            animation-duration: 25s;
        }

        .floating-shape:nth-child(2) {
            width: 300px;
            height: 300px;
            top: 60%;
            right: 10%;
            animation-duration: 30s;
            animation-delay: -5s;
        }

        .floating-shape:nth-child(3) {
            width: 350px;
            height: 350px;
            bottom: 20%;
            left: 15%;
            animation-duration: 20s;
            animation-delay: -10s;
        }

        @keyframes float {
            0% {
                transform: translate(0, 0) rotate(0deg) scale(1);
            }

            25% {
                transform: translate(50px, 50px) rotate(90deg) scale(1.1);
            }

            50% {
                transform: translate(100px, 0) rotate(180deg) scale(1.05);
            }

            75% {
                transform: translate(50px, -50px) rotate(270deg) scale(1.1);
            }

            100% {
                transform: translate(0, 0) rotate(360deg) scale(1);
            }
        }

        /* Header & Navigation */
        .header {
            background: var(--glass);
            backdrop-filter: blur(20px);
            box-shadow: var(--shadow-light);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--glass-border);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .logo-icon {
            width: 48px;
            height: 48px;
            background: var(--gradient-primary);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 12px 30px rgba(99, 102, 241, 0.4);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                box-shadow: 0 12px 30px rgba(99, 102, 241, 0.4);
            }

            50% {
                transform: scale(1.05);
                box-shadow: 0 15px 40px rgba(99, 102, 241, 0.6);
            }
        }

        .logo-icon i {
            font-size: 22px;
            color: var(--white);
        }

        .logo-text {
            font-size: 24px;
            font-weight: 800;
            background: linear-gradient(135deg, #ffffff, #e2e8f0);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.5px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-menu {
            display: flex;
            gap: 1.5rem;
            margin-left: 3rem;
        }

        .nav-item {
            color: rgba(255, 255, 255, 0.9); /* Increased contrast */
            text-decoration: none;
            font-weight: 600;
            padding: 0.8rem 1.5rem;
            border-radius: var(--border-radius-sm);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .nav-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: var(--transition);
        }

        .nav-item:hover::before {
            left: 100%;
        }

        .nav-item:hover,
        .nav-item.active {
            color: var(--white);
            background: rgba(255, 255, 255, 0.15); /* Slightly darker on hover */
            transform: translateY(-2px);
        }

        .nav-user {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-info {
            text-align: right;
        }

        .user-name {
            font-weight: 700;
            color: var(--white);
            font-size: 16px;
        }

        .user-role {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.9); /* Increased contrast */
            font-weight: 500;
        }

        .user-avatar {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
            font-size: 20px;
            box-shadow: 0 12px 30px rgba(99, 102, 241, 0.4);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .user-avatar::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: var(--transition);
        }

        .user-avatar:hover::before {
            left: 100%;
        }

        .user-avatar:hover {
            transform: translateY(-3px) rotate(5deg);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.6);
        }

        /* Dashboard Container */
        .dashboard-container {
            max-width: 1400px;
            margin: 100px auto 0;
            padding: 2rem;
        }

        /* Dashboard Header */
        .dashboard-header {
            margin-bottom: 3rem;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 2rem;
        }

        .header-content {
            flex: 1;
        }

        .dashboard-title {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 12px;
            background: linear-gradient(135deg, #ffffff, #e2e8f0);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -1px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            animation: slideInDown 0.8s ease;
        }

        .dashboard-subtitle {
            color: rgba(255, 255, 255, 0.95); /* Increased contrast */
            font-size: 18px;
            line-height: 1.6;
            animation: slideInDown 0.8s ease 0.1s both;
        }

        .header-actions {
            display: flex;
            gap: 1rem;
            animation: slideInDown 0.8s ease 0.2s both;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .stat-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            padding: 2.5rem 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            border: 1px solid var(--glass-border);
            position: relative;
            overflow: hidden;
            animation: slideInUp 0.6s ease both;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
        }

        .stat-card.accent::before {
            background: var(--gradient-accent);
        }

        .stat-card.success::before {
            background: var(--gradient-success);
        }

        .stat-card.warning::before {
            background: var(--gradient-accent);
        }

        .stat-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--shadow);
        }

        .stat-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }

        .stat-icon {
            width: 64px;
            height: 64px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gradient-primary);
            color: var(--white);
            font-size: 28px;
            box-shadow: 0 12px 30px rgba(99, 102, 241, 0.4);
            transition: var(--transition);
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.1) rotate(10deg);
        }

        .stat-card.accent .stat-icon {
            background: var(--gradient-accent);
        }

        .stat-card.success .stat-icon {
            background: var(--gradient-success);
        }

        .stat-card.warning .stat-icon {
            background: var(--gradient-accent);
        }

        .stat-trend {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 15px;
            font-weight: 700;
            color: var(--success-light);
            background: rgba(16, 185, 129, 0.2);
            padding: 6px 12px;
            border-radius: 20px;
        }

        .stat-trend.down {
            color: var(--error);
            background: rgba(239, 68, 68, 0.2);
        }

        .stat-value {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 8px;
            color: var(--white);
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.9); /* Increased contrast */
            font-size: 16px;
            font-weight: 500;
        }

        /* Content Grid */
        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2.5rem;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        .sidebar-content {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        /* Cards */
        .card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            overflow: hidden;
            border: 1px solid var(--glass-border);
            transition: var(--transition);
            animation: slideInUp 0.6s ease both;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .card-header {
            padding: 1.8rem 2.5rem;
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, 0.08); /* Slightly darker background */
        }

        .card-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--white);
        }

        .card-link {
            color: var(--primary-light);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card-link:hover {
            color: var(--white);
            transform: translateX(6px);
        }

        .card-body {
            padding: 2.5rem;
        }

        /* Tables */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th {
            text-align: left;
            padding: 1.2rem 1.5rem;
            background: rgba(255, 255, 255, 0.1); /* Darker background for headers */
            color: var(--white); /* White text for headers */
            font-weight: 600;
            font-size: 13px;
            border-bottom: 1px solid var(--glass-border);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table td {
            padding: 1.5rem;
            border-bottom: 1px solid var(--glass-border);
            font-size: 14px;
            color: var(--white); /* White text for better readability */
            transition: var(--transition);
        }

        .table tr:last-child td {
            border-bottom: none;
        }

        .table tr:hover td {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }

        /* Buttons */
        .btn {
            padding: 14px 28px;
            border: none;
            border-radius: var(--border-radius-sm);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 15px;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: var(--transition);
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: var(--white);
            box-shadow: 0 12px 30px rgba(99, 102, 241, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.6);
        }

        .btn-outline {
            background: transparent;
            color: var(--white);
            border: 2px solid rgba(255, 255, 255, 0.5); /* Brighter border */
            backdrop-filter: blur(10px);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.8); /* Brighter border on hover */
            transform: translateY(-3px);
        }

        .btn-sm {
            padding: 8px 16px;
            font-size: 13px;
        }

        /* Status Badges */
        .status-badge {
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            backdrop-filter: blur(10px);
        }

        .status-success {
            background: rgba(16, 185, 129, 0.3); /* More opaque */
            color: var(--white);
            border: 1px solid rgba(16, 185, 129, 0.5);
        }

        .status-warning {
            background: rgba(245, 158, 11, 0.3); /* More opaque */
            color: var(--white);
            border: 1px solid rgba(245, 158, 11, 0.5);
        }

        .status-error {
            background: rgba(239, 68, 68, 0.3); /* More opaque */
            color: var(--white);
            border: 1px solid rgba(239, 68, 68, 0.5);
        }

        .status-info {
            background: rgba(99, 102, 241, 0.3); /* More opaque */
            color: var(--white);
            border: 1px solid rgba(99, 102, 241, 0.5);
        }

        /* Activity Cards */
        .activity-card {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.2rem;
            border-radius: var(--border-radius-sm);
            background: rgba(255, 255, 255, 0.1); /* Darker background */
            transition: var(--transition);
            margin-bottom: 1rem;
            border-left: 4px solid var(--primary);
        }

        .activity-card.warning {
            border-left-color: var(--warning);
        }

        .activity-card.success {
            border-left-color: var(--success);
        }

        .activity-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
        }

        .activity-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: var(--white);
            flex-shrink: 0;
            background: var(--gradient-primary);
        }

        .activity-card.warning .activity-icon {
            background: var(--gradient-accent);
        }

        .activity-card.success .activity-icon {
            background: var(--gradient-success);
        }

        .activity-details {
            flex: 1;
        }

        .activity-title {
            font-weight: 600;
            margin-bottom: 4px;
            color: var(--white);
            font-size: 14px;
        }

        .activity-desc {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.9); /* Increased contrast */
        }

        .activity-time {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.7); /* Increased contrast */
            margin-top: 4px;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        /* Animations */
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .content-grid {
                grid-template-columns: 1fr;
            }

            .sidebar-content {
                order: -1;
            }
        }

        @media (max-width: 768px) {
            .dashboard-container {
                padding: 1.5rem;
                margin-top: 90px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .nav-container {
                padding: 1rem;
            }

            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1.5rem;
            }

            .header-actions {
                width: 100%;
                justify-content: space-between;
            }

            .user-info {
                display: none;
            }

            .dashboard-title {
                font-size: 32px;
            }

            .nav-menu {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .stat-card {
                padding: 2rem 1.5rem;
            }

            .card-body {
                padding: 2rem 1.5rem;
            }

            .table {
                font-size: 12px;
            }

            .table th,
            .table td {
                padding: 1rem;
            }

            .btn {
                padding: 12px 20px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="animated-bg">
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
    </div>

    <!-- Header Navigation -->
    <header class="header">
        <div class="nav-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <div class="logo-text">SpeakUp Academy</div>
            </div>

            <div class="nav-menu">
                <a href="#" class="nav-item active">Dashboard</a>
                <a href="#" class="nav-item">Manajemen User</a>
                <a href="#" class="nav-item">Pembayaran</a>
                <a href="#" class="nav-item">Laporan</a>
                <a href="#" class="nav-item">Sertifikat</a>
            </div>

            <div class="nav-user">
                <div class="user-info">
                    <div class="user-name">Admin Utama</div>
                    <div class="user-role">System Administrator</div>
                </div>
                <div class="user-avatar">A</div>
            </div>
        </div>
    </header>

    <!-- Admin Dashboard -->
    <div class="dashboard-container">
        <div class="dashboard-header">
            <div class="header-content">
                <h1 class="dashboard-title">Admin Dashboard</h1>
                <p class="dashboard-subtitle">Kelola sistem akademik SpeakUp Academy dengan efisien</p>
            </div>
            <div class="header-actions">
                <button class="btn btn-outline">
                    <i class="fas fa-file-export"></i> Export Laporan
                </button>
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah User
                </button>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card" style="animation-delay: 0.1s">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-trend">
                        <i class="fas fa-arrow-up"></i> 8.2%
                    </div>
                </div>
                <div class="stat-value">150</div>
                <div class="stat-label">Total Peserta</div>
            </div>
            <div class="stat-card" style="animation-delay: 0.2s">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="stat-trend">
                        <i class="fas fa-arrow-up"></i> 5.1%
                    </div>
                </div>
                <div class="stat-value">12</div>
                <div class="stat-label">Total Mentor</div>
            </div>
            <div class="stat-card accent" style="animation-delay: 0.3s">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stat-trend">
                        <i class="fas fa-arrow-up"></i> 15.3%
                    </div>
                </div>
                <div class="stat-value">18</div>
                <div class="stat-label">Kelas Aktif</div>
            </div>
            <div class="stat-card success" style="animation-delay: 0.4s">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-cash-register"></i>
                    </div>
                    <div class="stat-trend">
                        <i class="fas fa-arrow-up"></i> 12.7%
                    </div>
                </div>
                <div class="stat-value">25Jt</div>
                <div class="stat-label">Pendapatan Bulan Ini</div>
            </div>
        </div>

        <div class="content-grid">
            <div class="main-content">
                <div class="card" style="animation-delay: 0.3s">
                    <div class="card-header">
                        <div class="card-title">Pembayaran Pending</div>
                        <a href="#" class="card-link">
                            Lihat Semua <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID Pembayaran</th>
                                    <th>Peserta</th>
                                    <th>Paket</th>
                                    <th>Jumlah</th>
                                    <th>Metode</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PMB-001</td>
                                    <td>Andi Lutfi</td>
                                    <td>IELTS Premium</td>
                                    <td>Rp 1.500.000</td>
                                    <td>Transfer Bank</td>
                                    <td><span class="status-badge status-warning">Pending</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button class="btn btn-outline btn-sm">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PMB-002</td>
                                    <td>Sari Dewi</td>
                                    <td>Business English</td>
                                    <td>Rp 1.200.000</td>
                                    <td>E-Wallet</td>
                                    <td><span class="status-badge status-warning">Pending</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button class="btn btn-outline btn-sm">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PMB-003</td>
                                    <td>Budi Santoso</td>
                                    <td>TOEFL Preparation</td>
                                    <td>Rp 2.000.000</td>
                                    <td>Transfer Bank</td>
                                    <td><span class="status-badge status-warning">Pending</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button class="btn btn-outline btn-sm">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card" style="animation-delay: 0.4s">
                    <div class="card-header">
                        <div class="card-title">Pendaftaran Baru</div>
                        <a href="#" class="card-link">
                            Lihat Semua <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID Pendaftaran</th>
                                    <th>Nama Peserta</th>
                                    <th>Paket</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Status Verifikasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PDF-015</td>
                                    <td>Rina Wijaya</td>
                                    <td>Conversation Basic</td>
                                    <td>10 Jun 2024</td>
                                    <td><span class="status-badge status-warning">Perlu Verifikasi</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button class="btn btn-outline btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PDF-016</td>
                                    <td>Fajar Nugroho</td>
                                    <td>Academic Writing</td>
                                    <td>09 Jun 2024</td>
                                    <td><span class="status-badge status-success">Terverifikasi</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-outline btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PDF-017</td>
                                    <td>Maya Sari</td>
                                    <td>IELTS Intensive</td>
                                    <td>08 Jun 2024</td>
                                    <td><span class="status-badge status-warning">Perlu Verifikasi</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button class="btn btn-outline btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card" style="animation-delay: 0.5s">
                    <div class="card-header">
                        <div class="card-title">Manajemen Paket</div>
                        <a href="#" class="card-link">
                            Kelola Paket <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID Paket</th>
                                    <th>Nama Paket</th>
                                    <th>Durasi</th>
                                    <th>Harga</th>
                                    <th>Peserta Aktif</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PKT-001</td>
                                    <td>IELTS Premium</td>
                                    <td>3 Bulan</td>
                                    <td>Rp 1.500.000</td>
                                    <td>24</td>
                                    <td><span class="status-badge status-success">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td>PKT-002</td>
                                    <td>Business English</td>
                                    <td>2 Bulan</td>
                                    <td>Rp 1.200.000</td>
                                    <td>18</td>
                                    <td><span class="status-badge status-success">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td>PKT-003</td>
                                    <td>TOEFL Preparation</td>
                                    <td>2 Bulan</td>
                                    <td>Rp 2.000.000</td>
                                    <td>15</td>
                                    <td><span class="status-badge status-success">Aktif</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="sidebar-content">
                <div class="card" style="animation-delay: 0.6s">
                    <div class="card-header">
                        <div class="card-title">Aktivitas Terbaru</div>
                    </div>
                    <div class="card-body">
                        <div class="activity-card">
                            <div class="activity-icon">
                                <i class="fas fa-money-bill"></i>
                            </div>
                            <div class="activity-details">
                                <div class="activity-title">Pembayaran Dikonfirmasi</div>
                                <div class="activity-desc">Andi Lutfi - IELTS Premium</div>
                                <div class="activity-time">10:30 • Hari ini</div>
                            </div>
                        </div>
                        <div class="activity-card success">
                            <div class="activity-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="activity-details">
                                <div class="activity-title">Peserta Baru</div>
                                <div class="activity-desc">Sari Dewi terdaftar</div>
                                <div class="activity-time">09:15 • Hari ini</div>
                            </div>
                        </div>
                        <div class="activity-card warning">
                            <div class="activity-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="activity-details">
                                <div class="activity-title">Sertifikat Diupload</div>
                                <div class="activity-desc">IELTS Batch 5</div>
                                <div class="activity-time">16:45 • Kemarin</div>
                            </div>
                        </div>
                        <div class="activity-card">
                            <div class="activity-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="activity-details">
                                <div class="activity-title">Pembayaran Gagal</div>
                                <div class="activity-desc">Budi Santoso - TOEFL Prep</div>
                                <div class="activity-time">14:20 • Kemarin</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" style="animation-delay: 0.7s">
                    <div class="card-header">
                        <div class="card-title">Quick Actions</div>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" style="width: 100%; margin-bottom: 1rem;">
                            <i class="fas fa-check-circle"></i> Verifikasi Pembayaran
                        </button>
                        <button class="btn btn-outline" style="width: 100%; margin-bottom: 1rem;">
                            <i class="fas fa-file-certificate"></i> Generate Sertifikat
                        </button>
                        <button class="btn btn-outline" style="width: 100%; margin-bottom: 1rem;">
                            <i class="fas fa-chart-bar"></i> Lihat Laporan
                        </button>
                        <button class="btn btn-outline" style="width: 100%;">
                            <i class="fas fa-cog"></i> Pengaturan Sistem
                        </button>
                    </div>
                </div>

                <div class="card" style="animation-delay: 0.8s">
                    <div class="card-header">
                        <div class="card-title">Statistik Sistem</div>
                    </div>
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
                            <span style="color: rgba(255, 255, 255, 0.9);">Pembayaran Pending:</span>
                            <span style="color: var(--white); font-weight: 600;">3</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
                            <span style="color: rgba(255, 255, 255, 0.9);">Pendaftaran Baru:</span>
                            <span style="color: var(--white); font-weight: 600;">2</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
                            <span style="color: rgba(255, 255, 255, 0.9);">Kelas Aktif:</span>
                            <span style="color: var(--white); font-weight: 600;">18</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: rgba(255, 255, 255, 0.9);">Sertifikat Tertunda:</span>
                            <span style="color: var(--white); font-weight: 600;">5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add click events to buttons
            const buttons = document.querySelectorAll('.btn-primary, .btn-outline');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const buttonText = this.textContent.trim();
                    alert(`Admin Action: ${buttonText}\n\nFitur admin akan diimplementasikan di backend.`);
                });
            });

            // Add table row click events
            const tableRows = document.querySelectorAll('.table tr');
            tableRows.forEach(row => {
                row.addEventListener('click', function() {
                    if (this.cells[0] && this.cells[0].textContent.includes('PMB-') || this.cells[0].textContent.includes('PDF-') || this.cells[0].textContent.includes('PKT-')) {
                        const id = this.cells[0].textContent;
                        const type = this.cells[0].textContent.includes('PMB-') ? 'Pembayaran' :
                            this.cells[0].textContent.includes('PDF-') ? 'Pendaftaran' : 'Paket';
                        alert(`Admin: Detail ${type} untuk ${id}\n\nAkan menampilkan detail lengkap.`);
                    }
                });
            });

            // Add hover effects to cards
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Add activity card click events
            const activityCards = document.querySelectorAll('.activity-card');
            activityCards.forEach(card => {
                card.addEventListener('click', function() {
                    const title = this.querySelector('.activity-title').textContent;
                    alert(`Admin: Detail aktivitas - ${title}\n\nAkan menampilkan detail aktivitas.`);
                });
            });

            // Simulate loading animation
            setTimeout(() => {
                const statCards = document.querySelectorAll('.stat-card');
                statCards.forEach(card => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                });
            }, 300);
        });
    </script>
</body>

</html>