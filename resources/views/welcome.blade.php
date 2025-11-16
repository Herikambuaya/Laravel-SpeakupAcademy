<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeakUp Academy - Login</title>
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
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Section - Optimal Position */
        .sidebar {
            width: 40%;
            background: var(--gradient-primary);
            color: var(--white);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding: 60px 40px 40px;
        }

        .sidebar::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            animation: float 8s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            50% {
                transform: translate(-20px, 20px) rotate(5deg);
            }
        }

        .logo-container {
            text-align: center;
            position: relative;
            z-index: 2;
            animation: slideInUp 1s ease-out;
            margin-top: 20px;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo-icon {
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            backdrop-filter: blur(20px);
            border: 3px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .logo-icon::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0) 70%);
            animation: logoGlow 3s ease-in-out infinite;
        }

        @keyframes logoGlow {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.5;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
        }

        .logo-icon:hover {
            transform: scale(1.05) rotate(5deg);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .logo-icon i {
            font-size: 50px;
            color: var(--white);
            background: var(--gradient-accent);
            background-clip: text;
            /* ✅ versi standar */
            -webkit-background-clip: text;
            /* ✅ versi WebKit (Chrome/Safari/Edge) */
            -webkit-text-fill-color: transparent;
            position: relative;
            z-index: 2;
        }

        .logo-text h1 {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 15px;
            letter-spacing: -1px;
            background: linear-gradient(135deg, #ffffff, #f0f0f0);
            background-clip: text;
            /* ✅ versi standar */
            -webkit-background-clip: text;
            /* ✅ versi WebKit (Chrome/Safari/Edge) */
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            line-height: 1.1;
        }

        .logo-text p {
            font-size: 20px;
            opacity: 0.9;
            font-weight: 300;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
        }

        .tagline {
            font-size: 16px;
            opacity: 0.8;
            font-weight: 400;
            max-width: 300px;
            line-height: 1.5;
            margin-top: 10px;
        }

        /* Floating Elements */
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .floating-element {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: floatElement 15s infinite linear;
        }

        @keyframes floatElement {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-1000px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Login Section */
        .login-section {
            width: 60%;
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: var(--white);
            position: relative;
            overflow: hidden;
        }

        .login-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(102, 126, 234, 0.03) 0%, rgba(255, 255, 255, 0) 70%);
            z-index: 0;
        }

        .login-container {
            max-width: 450px;
            margin: 0 auto;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .login-header {
            margin-bottom: 50px;
            animation: slideInRight 1s ease-out 0.2s both;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .login-header h2 {
            font-size: 36px;
            color: var(--dark);
            margin-bottom: 12px;
            font-weight: 700;
            background: var(--gradient-primary);
            background-clip: text;
            /* ✅ versi standar */
            -webkit-background-clip: text;
            /* ✅ versi WebKit (Chrome/Safari/Edge) */
            -webkit-text-fill-color: transparent;
        }

        .login-header p {
            color: var(--dark-light);
            font-size: 17px;
            line-height: 1.5;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 30px;
            position: relative;
            animation: slideInRight 1s ease-out 0.4s both;
        }

        .form-label {
            display: block;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--dark);
            font-size: 15px;
            letter-spacing: 0.5px;
        }

        .form-input-container {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 20px 25px;
            border: 2px solid var(--light-gray);
            border-radius: 14px;
            font-size: 16px;
            transition: var(--transition);
            background: var(--white);
            color: var(--dark);
            box-shadow: var(--shadow-light);
            position: relative;
            z-index: 2;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
            transform: translateY(-2px);
        }

        .form-input::placeholder {
            color: #a0aec0;
            transition: var(--transition);
        }

        .form-input:focus::placeholder {
            opacity: 0.7;
            transform: translateX(5px);
        }

        .input-icon {
            position: absolute;
            right: 25px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--dark-light);
            cursor: pointer;
            transition: var(--transition);
            z-index: 3;
            background: var(--white);
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
        }

        .input-icon:hover {
            color: var(--primary);
            background: var(--light-gray);
            transform: translateY(-50%) scale(1.1);
        }

        /* Checkbox */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
            animation: slideInRight 1s ease-out 0.6s both;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            cursor: pointer;
            position: relative;
        }

        .checkbox-group input {
            display: none;
        }

        .checkmark {
            width: 22px;
            height: 22px;
            border: 2px solid var(--light-gray);
            border-radius: 6px;
            margin-right: 12px;
            position: relative;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--white);
            box-shadow: var(--shadow-light);
        }

        .checkbox-group input:checked+.checkmark {
            background: var(--gradient-primary);
            border-color: var(--primary);
        }

        .checkbox-group input:checked+.checkmark::after {
            content: '✓';
            color: white;
            font-size: 12px;
            font-weight: bold;
        }

        .checkbox-group:hover .checkmark {
            border-color: var(--primary);
            transform: scale(1.05);
        }

        .forgot-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            position: relative;
        }

        .forgot-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            transition: var(--transition);
        }

        .forgot-link:hover::after {
            width: 100%;
        }

        /* Login Button */
        .login-btn {
            width: 100%;
            padding: 20px;
            background: var(--gradient-primary);
            color: var(--white);
            border: none;
            border-radius: 14px;
            font-size: 17px;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            letter-spacing: 0.5px;
            animation: slideInRight 1s ease-out 0.8s both;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: var(--transition);
        }

        .login-btn:hover::before {
            left: 100%;
        }

        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.6);
        }

        .login-btn:active {
            transform: translateY(-1px);
        }

        .register-link {
            text-align: center;
            margin-top: 35px;
            color: var(--dark-light);
            font-size: 16px;
            animation: slideInRight 1s ease-out 1s both;
        }

        .register-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 700;
            transition: var(--transition);
            position: relative;
        }

        .register-link a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            transition: var(--transition);
        }

        .register-link a:hover::after {
            width: 100%;
        }

        /* Footer */
        .footer {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid var(--light-gray);
            text-align: center;
            color: var(--dark-light);
            font-size: 14px;
            animation: slideInRight 1s ease-out 1.2s both;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: var(--dark-light);
            text-decoration: none;
            transition: var(--transition);
            font-weight: 500;
        }

        .footer-links a:hover {
            color: var(--primary);
            transform: translateY(-2px);
        }

        .language-selector {
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .language-selector select {
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            padding: 8px 15px;
            background: var(--white);
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
            cursor: pointer;
        }

        .language-selector select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        /* Business Description Section */
        .business-section {
            padding: 100px 60px;
            background: var(--light);
            position: relative;
        }

        .business-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .business-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .business-header h2 {
            font-size: 48px;
            color: var(--dark);
            margin-bottom: 25px;
            font-weight: 800;
            background: var(--gradient-primary);
            background-clip: text;
            /* ✅ versi standar */
            -webkit-background-clip: text;
            /* ✅ versi WebKit (Chrome/Safari/Edge) */
            -webkit-text-fill-color: transparent;
        }

        .business-header p {
            font-size: 20px;
            color: var(--dark-light);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.7;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 50px;
            margin-bottom: 80px;
        }

        .feature-card {
            background: var(--white);
            padding: 50px 35px;
            border-radius: 20px;
            text-align: center;
            transition: var(--transition);
            box-shadow: var(--shadow-light);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient-primary);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow);
        }

        .feature-icon {
            width: 90px;
            height: 90px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            color: white;
            font-size: 36px;
            transition: var(--transition);
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
            background: var(--gradient-accent);
        }

        .feature-card h3 {
            font-size: 24px;
            color: var(--dark);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .feature-card p {
            color: var(--dark-light);
            line-height: 1.7;
            font-size: 16px;
        }

        .stats-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 50px;
            margin-bottom: 80px;
        }

        .stat-item {
            text-align: center;
            padding: 40px 25px;
            background: var(--white);
            border-radius: 16px;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .stat-number {
            font-size: 52px;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 15px;
            display: block;
            background: var(--gradient-primary);
            background-clip: text;
            /* ✅ versi standar */
            -webkit-background-clip: text;
            /* ✅ versi WebKit (Chrome/Safari/Edge) */
            -webkit-text-fill-color: transparent;
        }

        .stat-label {
            font-size: 17px;
            color: var(--dark-light);
            font-weight: 600;
        }

        .cta-section {
            text-align: center;
            padding: 80px 50px;
            background: var(--gradient-primary);
            border-radius: 24px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            animation: float 10s ease-in-out infinite;
        }

        .cta-section h3 {
            font-size: 42px;
            margin-bottom: 25px;
            font-weight: 800;
            position: relative;
            z-index: 2;
        }

        .cta-section p {
            font-size: 20px;
            margin-bottom: 40px;
            opacity: 0.95;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
            position: relative;
            z-index: 2;
        }

        .cta-button {
            display: inline-block;
            padding: 20px 50px;
            background: var(--white);
            color: var(--primary);
            text-decoration: none;
            border-radius: 14px;
            font-weight: 700;
            transition: var(--transition);
            font-size: 18px;
            position: relative;
            z-index: 2;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            letter-spacing: 0.5px;
        }

        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            background: var(--light);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .container {
                flex-direction: column;
            }

            .sidebar,
            .login-section {
                width: 100%;
            }

            .sidebar {
                padding: 60px 40px 40px;
                min-height: 350px;
            }

            .login-section {
                padding: 60px 40px;
            }
        }

        @media (max-width: 768px) {
            .features-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .stats-section {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }

            .business-section {
                padding: 80px 40px;
            }

            .business-header h2 {
                font-size: 36px;
            }
        }

        @media (max-width: 480px) {
            .sidebar {
                padding: 50px 30px 30px;
            }

            .login-section {
                padding: 50px 30px;
            }

            .business-section {
                padding: 60px 30px;
            }

            .logo-text h1 {
                font-size: 36px;
            }

            .stats-section {
                grid-template-columns: 1fr;
            }

            .footer-links {
                flex-direction: column;
                gap: 15px;
            }

            .cta-section {
                padding: 60px 30px;
            }

            .cta-section h3 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="floating-elements" id="floatingElements"></div>
            <div class="logo-container">
                <div class="logo-icon">
                    <div class="logo-symbol">
                        <i class="fas fa-book-open book-icon"></i>
                        <i class="fas fa-graduation-cap graduation-cap"></i>
                    </div>
                </div>
                <div class="logo-text">
                    <h1>SpeakUp Herman<br>Academy</h1>
                    <p>Premium English Learning</p>
                    <div class="tagline">Transform your English speaking skills with expert guidance</div>
                </div>
            </div>
        </div>

        <div class="login-section">
            <div class="login-container">
                <div class="login-header">
                    <h2>Masuk</h2>
                    <p>Masuk ke akun SpeakUp Academy Anda dan mulai perjalanan belajar bahasa Inggris</p>
                </div>

                <form id="loginForm">
                    <div class="form-group">
                        <label class="form-label" for="email">Alamat Email</label>
                        <div class="form-input-container">
                            <input type="email" class="form-input" id="email" placeholder="nama@email.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Kata Sandi</label>
                        <div class="form-input-container">
                            <input type="password" class="form-input" id="password" placeholder="Masukkan kata sandi Anda" required>
                            <i class="fas fa-eye input-icon toggle-password"></i>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="checkbox-group">
                            <input type="checkbox" id="remember">
                            <span class="checkmark"></span>
                            Ingat saya
                        </label>
                        <a href="#" class="forgot-link">Lupa kata sandi?</a>
                    </div>

                    <button type="submit" class="login-btn">
                        <i class="fas fa-sign-in-alt" style="margin-right: 10px;"></i>
                        Masuk ke Akun
                    </button>
                </form>

                <div class="register-link">
                    Belum punya akun? <a href="/registrasi">Daftar sekarang</a>
                </div>

                <div class="footer">
                    <div>© 2024 SpeakUp Academy. All rights reserved.</div>
                    <div class="footer-links">
                        <a href="#">Syarat & Ketentuan</a>
                        <a href="#">Kebijakan Privasi</a>
                        <a href="#">Hubungi Kami</a>
                    </div>
                    <div class="language-selector">
                        <span>Bahasa Indonesia</span>
                        <select>
                            <option>English</option>
                            <option selected>Bahasa Indonesia</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Description Section -->
    <div class="business-section">
        <div class="business-container">
            <div class="business-header">
                <h2>Mengapa Memilih SpeakUp Academy?</h2>
                <p>Kami menyediakan solusi pembelajaran bahasa Inggris terbaik dengan metode yang terbukti efektif dan pengajar berkualitas internasional</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3>Pengajar Profesional</h3>
                    <p>Belajar dari pengajar bersertifikat dengan pengalaman mengajar internasional dan metode komunikatif yang efektif untuk hasil maksimal</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Kurikulum Terstruktur</h3>
                    <p>Kurikulum terstruktur dari level dasar hingga mahir dengan materi yang selalu diperbarui sesuai perkembangan terbaru dalam pembelajaran bahasa</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Kelas Interaktif</h3>
                    <p>Kelas interaktif dengan grup kecil untuk memaksimalkan perhatian individu dan praktik langsung berbicara dengan feedback personal</p>
                </div>
            </div>

            <div class="stats-section">
                <div class="stat-item">
                    <span class="stat-number">5,000+</span>
                    <div class="stat-label">Siswa Lulus</div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">98%</span>
                    <div class="stat-label">Tingkat Keberhasilan</div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <div class="stat-label">Pengajar Bersertifikat</div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">10</span>
                    <div class="stat-label">Tahun Pengalaman</div>
                </div>
            </div>

            <div class="cta-section">
                <h3>Siap Memulai Perjalanan Bahasa Inggris Anda?</h3>
                <p>Bergabunglah dengan ribuan siswa yang telah berhasil meningkatkan kemampuan bahasa Inggris mereka. Dapatkan konsultasi gratis dan kelas percobaan sekarang!</p>
                <a href="#" class="cta-button">Mulai Sekarang</a>
            </div>
        </div>
    </div>

    <script>
        // Create floating elements
        function createFloatingElements() {
            const container = document.getElementById('floatingElements');
            const count = 15;

            for (let i = 0; i < count; i++) {
                const element = document.createElement('div');
                element.classList.add('floating-element');

                const size = Math.random() * 60 + 20;
                const left = Math.random() * 100;
                const duration = Math.random() * 20 + 15;
                const delay = Math.random() * 5;
                const opacity = Math.random() * 0.4 + 0.1;

                element.style.width = `${size}px`;
                element.style.height = `${size}px`;
                element.style.left = `${left}%`;
                element.style.animationDuration = `${duration}s`;
                element.style.animationDelay = `${delay}s`;
                element.style.opacity = opacity;

                container.appendChild(element);
            }
        }

        // Password toggle functionality
        document.querySelectorAll('.toggle-password').forEach(icon => {
            icon.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
        });

        // Form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (email && password) {
                // Add loading animation
                const button = this.querySelector('.login-btn');
                const originalText = button.innerHTML;
                button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
                button.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    button.innerHTML = '<i class="fas fa-check"></i> Login Berhasil!';
                    button.style.background = 'var(--gradient-accent)';

                    setTimeout(() => {
                        button.innerHTML = originalText;
                        button.disabled = false;
                        button.style.background = '';
                        alert('Selamat datang di SpeakUp Academy!');
                    }, 1500);
                }, 2000);
            }
        });

        // // Register link functionality
        // document.querySelector('.register-link a').addEventListener('click', function(e) {
        //     e.preventDefault();
        //     alert('Fitur pendaftaran akan segera diimplementasikan');
        // });

        // CTA Button functionality
        document.querySelector('.cta-button').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.register-link a').click();
        });

        // Initialize
        createFloatingElements();
    </script>
</body>

</html>