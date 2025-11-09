<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeakUp Academy - Premium Dashboard</title>
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
            color: var(--dark);
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
            color: rgba(255, 255, 255, 0.8);
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
            color: rgba(255, 255, 255, 0.9);
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

        .stat-trend {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 15px;
            font-weight: 700;
            color: var(--success-light);
            background: rgba(16, 185, 129, 0.1);
            padding: 6px 12px;
            border-radius: 20px;
        }

        .stat-trend.down {
            color: var(--error);
            background: rgba(239, 68, 68, 0.1);
        }

        .stat-value {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 8px;
            color: var(--white);
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.8);
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
            background: rgba(255, 255, 255, 0.05);
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
            background: rgba(255, 255, 255, 0.05);
            color: rgba(255, 255, 255, 0.8);
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
            color: rgba(255, 255, 255, 0.9);
            transition: var(--transition);
        }

        .table tr:last-child td {
            border-bottom: none;
        }

        .table tr:hover td {
            background: rgba(255, 255, 255, 0.05);
            transform: translateX(5px);
        }

        /* Progress Bars */
        .progress-bar {
            width: 100%;
            height: 10px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            background: var(--gradient-primary);
            border-radius: 10px;
            transition: width 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
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
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-3px);
        }

        /* Role Selector */
        .role-selector {
            position: fixed;
            bottom: 2.5rem;
            right: 2.5rem;
            z-index: 1000;
        }

        .role-btn {
            background: var(--gradient-primary);
            color: var(--white);
            border: none;
            padding: 16px 28px;
            border-radius: 50px;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        .role-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: var(--transition);
        }

        .role-btn:hover::before {
            left: 100%;
        }

        .role-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.6);
        }

        .role-dropdown {
            position: absolute;
            bottom: 100%;
            right: 0;
            margin-bottom: 15px;
            background: var(--glass);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 1.8rem;
            min-width: 320px;
            display: none;
            border: 1px solid var(--glass-border);
            animation: slideUp 0.4s ease;
        }

        .role-dropdown.show {
            display: block;
        }

        .role-option {
            padding: 1.2rem;
            border-radius: var(--border-radius-sm);
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 10px;
            border: 1px solid transparent;
            background: rgba(255, 255, 255, 0.05);
        }

        .role-option:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--glass-border);
            transform: translateX(5px);
        }

        .role-option.active {
            background: var(--gradient-primary);
            border-color: var(--primary-light);
        }

        .role-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 20px;
            transition: var(--transition);
        }

        .role-option.active .role-icon {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.1);
        }

        .role-info {
            flex: 1;
        }

        .role-name {
            font-weight: 700;
            margin-bottom: 4px;
            color: var(--white);
        }

        .role-desc {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.7);
        }

        .role-option.active .role-desc {
            color: rgba(255, 255, 255, 0.9);
        }

        /* Dashboard Specific Styles */
        .dashboard {
            display: none;
        }

        .dashboard.active {
            display: block;
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

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
            background: rgba(16, 185, 129, 0.2);
            color: var(--success-light);
            border: 1px solid rgba(16, 185, 129, 0.3);
        }

        .status-warning {
            background: rgba(245, 158, 11, 0.2);
            color: var(--accent-light);
            border: 1px solid rgba(245, 158, 11, 0.3);
        }

        .status-error {
            background: rgba(239, 68, 68, 0.2);
            color: #fca5a5;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        /* Special Elements */
        .floating-notification {
            position: fixed;
            top: 100px;
            right: 30px;
            background: var(--gradient-primary);
            color: white;
            padding: 15px 25px;
            border-radius: var(--border-radius-sm);
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 1001;
            transform: translateX(400px);
            transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .floating-notification.show {
            transform: translateX(0);
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

            .role-dropdown {
                min-width: 280px;
                right: -50px;
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

    <!-- Floating Notification -->
    <div class="floating-notification" id="welcomeNotification">
        <i class="fas fa-sparkles"></i>
        <span>Welcome to SpeakUp Academy Dashboard!</span>
    </div>

    <!-- Header Navigation -->
    <header class="header">
        <div class="nav-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="logo-text">SpeakUp Academy</div>
            </div>

            <div class="nav-user">
                <div class="user-info">
                    <div class="user-name" id="currentUserName">Alex Johnson</div>
                    <div class="user-role" id="currentUserRole">System Administrator</div>
                </div>
                <div class="user-avatar" id="currentUserAvatar">A</div>
            </div>
        </div>
    </header>

    <!-- Role Selector -->
    <div class="role-selector">
        <button class="role-btn" onclick="toggleRoleDropdown()">
            <i class="fas fa-magic"></i> Switch Role
        </button>
        <div class="role-dropdown" id="roleDropdown">
            <div class="role-option active" onclick="switchDashboard('admin')">
                <div class="role-icon">
                    <i class="fas fa-crown"></i>
                </div>
                <div class="role-info">
                    <div class="role-name">Administrator</div>
                    <div class="role-desc">Full system access & management</div>
                </div>
            </div>
            <div class="role-option" onclick="switchDashboard('mentor')">
                <div class="role-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="role-info">
                    <div class="role-name">Mentor</div>
                    <div class="role-desc">Teaching & student management</div>
                </div>
            </div>
            <div class="role-option" onclick="switchDashboard('student')">
                <div class="role-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div class="role-info">
                    <div class="role-name">Student</div>
                    <div class="role-desc">Learning & course progress</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Admin Dashboard -->
    <div class="dashboard active" id="adminDashboard">
        <div class="dashboard-container">
            <div class="dashboard-header">
                <div class="header-content">
                    <h1 class="dashboard-title">Administrator Dashboard</h1>
                    <p class="dashboard-subtitle">Comprehensive overview of platform performance and management</p>
                </div>
                <div class="header-actions">
                    <button class="btn btn-outline">
                        <i class="fas fa-download"></i> Export Report
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> New Campaign
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
                            <i class="fas fa-arrow-up"></i> 12.5%
                        </div>
                    </div>
                    <div class="stat-value">1,847</div>
                    <div class="stat-label">Total Active Students</div>
                </div>
                <div class="stat-card" style="animation-delay: 0.2s">
                    <div class="stat-header">
                        <div class="stat-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="stat-trend">
                            <i class="fas fa-arrow-up"></i> 8.2%
                        </div>
                    </div>
                    <div class="stat-value">68</div>
                    <div class="stat-label">Certified Mentors</div>
                </div>
                <div class="stat-card accent" style="animation-delay: 0.3s">
                    <div class="stat-header">
                        <div class="stat-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="stat-trend">
                            <i class="fas fa-arrow-up"></i> 15.3%
                        </div>
                    </div>
                    <div class="stat-value">243</div>
                    <div class="stat-label">Active Courses</div>
                </div>
                <div class="stat-card success" style="animation-delay: 0.4s">
                    <div class="stat-header">
                        <div class="stat-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-trend">
                            <i class="fas fa-arrow-up"></i> 22.8%
                        </div>
                    </div>
                    <div class="stat-value">Rp 128.7M</div>
                    <div class="stat-label">Monthly Revenue</div>
                </div>
            </div>

            <div class="content-grid">
                <div class="main-content">
                    <div class="card" style="animation-delay: 0.3s">
                        <div class="card-header">
                            <div class="card-title">Recent System Activities</div>
                            <a href="#" class="card-link">
                                View All <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Activity</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div style="display: flex; align-items: center; gap: 12px;">
                                                <div style="width: 40px; height: 40px; background: var(--gradient-primary); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; font-size: 14px; font-weight: 600;">SJ</div>
                                                <div>
                                                    <div style="font-weight: 600;">Sarah Johnson</div>
                                                    <div style="font-size: 12px; color: rgba(255, 255, 255, 0.7);">sarah.j@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Enrolled in Advanced Business English</td>
                                        <td>10:30 AM</td>
                                        <td><span class="status-badge status-success"><i class="fas fa-check"></i> Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="display: flex; align-items: center; gap: 12px;">
                                                <div style="width: 40px; height: 40px; background: var(--gradient-accent); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; font-size: 14px; font-weight: 600;">MC</div>
                                                <div>
                                                    <div style="font-weight: 600;">Michael Chen</div>
                                                    <div style="font-size: 12px; color: rgba(255, 255, 255, 0.7);">michael.c@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Course payment processed</td>
                                        <td>09:15 AM</td>
                                        <td><span class="status-badge status-success"><i class="fas fa-check"></i> Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="display: flex; align-items: center; gap: 12px;">
                                                <div style="width: 40px; height: 40px; background: var(--gradient-success); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; font-size: 14px; font-weight: 600;">LW</div>
                                                <div>
                                                    <div style="font-weight: 600;">Lisa Wang</div>
                                                    <div style="font-size: 12px; color: rgba(255, 255, 255, 0.7);">lisa.w@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Password reset requested</td>
                                        <td>08:45 AM</td>
                                        <td><span class="status-badge status-warning"><i class="fas fa-clock"></i> Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="sidebar-content">
                    <div class="card" style="animation-delay: 0.4s">
                        <div class="card-header">
                            <div class="card-title">Quick Actions</div>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-primary" style="width: 100%; margin-bottom: 15px;">
                                <i class="fas fa-user-plus"></i> Add New Mentor
                            </button>
                            <button class="btn btn-primary" style="width: 100%; margin-bottom: 15px;">
                                <i class="fas fa-book-medical"></i> Create Course
                            </button>
                            <button class="btn btn-primary" style="width: 100%; margin-bottom: 15px;">
                                <i class="fas fa-chart-pie"></i> Generate Reports
                            </button>
                            <button class="btn btn-outline" style="width: 100%;">
                                <i class="fas fa-cog"></i> System Settings
                            </button>
                        </div>
                    </div>

                    <div class="card" style="animation-delay: 0.5s">
                        <div class="card-header">
                            <div class="card-title">System Health</div>
                        </div>
                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 15px; background: rgba(255, 255, 255, 0.05); border-radius: 12px;">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 4px;">Server Status</div>
                                    <div style="font-size: 13px; color: rgba(255, 255, 255, 0.7);">All systems operational</div>
                                </div>
                                <span class="status-badge status-success">Optimal</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 15px; background: rgba(255, 255, 255, 0.05); border-radius: 12px;">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 4px;">Database</div>
                                    <div style="font-size: 13px; color: rgba(255, 255, 255, 0.7);">Response time: 42ms</div>
                                </div>
                                <span class="status-badge status-success">Healthy</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px; background: rgba(255, 255, 255, 0.05); border-radius: 12px;">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 4px;">API Services</div>
                                    <div style="font-size: 13px; color: rgba(255, 255, 255, 0.7);">1 service degraded</div>
                                </div>
                                <span class="status-badge status-warning">Warning</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mentor & Student Dashboards would continue here with similar structure -->

    <script>
        let currentRole = 'admin';

        // Show welcome notification
        setTimeout(() => {
            document.getElementById('welcomeNotification').classList.add('show');
        }, 1000);

        // Hide welcome notification after 5 seconds
        setTimeout(() => {
            document.getElementById('welcomeNotification').classList.remove('show');
        }, 6000);

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

            // Show role switch notification
            const notification = document.getElementById('welcomeNotification');
            notification.innerHTML = `<i class="fas fa-user-cog"></i> Switched to ${role} role`;
            notification.classList.add('show');

            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        function updateUserInfo(role) {
            const userName = document.getElementById('currentUserName');
            const userRole = document.getElementById('currentUserRole');
            const userAvatar = document.getElementById('currentUserAvatar');

            switch (role) {
                case 'admin':
                    userName.textContent = 'Alex Johnson';
                    userRole.textContent = 'System Administrator';
                    userAvatar.textContent = 'A';
                    break;
                case 'mentor':
                    userName.textContent = 'Sarah Wilson';
                    userRole.textContent = 'Senior English Mentor';
                    userAvatar.textContent = 'S';
                    break;
                case 'student':
                    userName.textContent = 'Michael Chen';
                    userRole.textContent = 'Advanced Student';
                    userAvatar.textContent = 'M';
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

        // Animate progress bars on scroll
        function animateProgressBars() {
            const progressBars = document.querySelectorAll('.progress-fill');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 500);
            });
        }

        // Initialize
        updateUserInfo('admin');

        // Animate progress bars after page load
        setTimeout(animateProgressBars, 1000);
    </script>
</body>

</html>