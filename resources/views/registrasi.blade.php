<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeakUp Academy - Registrasi</title>
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
            --primary-soft: rgba(102, 126, 234, 0.1);
            --secondary: #f093fb;
            --accent: #ff6b6b;
            --light: #f8fafc;
            --light-gray: #f1f5f9;
            --gray: #94a3b8;
            --dark: #1e293b;
            --dark-light: #475569;
            --white: #ffffff;
            --shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
            --shadow-light: 0 4px 12px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --border-radius: 16px;
            --border-radius-sm: 12px;
            --gradient-primary: linear-gradient(135deg, var(--primary), var(--primary-light));
            --gradient-accent: linear-gradient(135deg, var(--accent), var(--secondary));
            --success: #10b981;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: var(--dark);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* Floating Background Elements */
        .floating-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .float-element {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
            animation: float 15s infinite linear;
            filter: blur(40px);
        }

        .float-element:nth-child(1) {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 5%;
            animation-duration: 25s;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.15) 0%, rgba(118, 75, 162, 0.1) 100%);
        }

        .float-element:nth-child(2) {
            width: 400px;
            height: 400px;
            top: 60%;
            right: 10%;
            animation-duration: 30s;
            animation-delay: -5s;
            background: linear-gradient(135deg, rgba(240, 147, 251, 0.1) 0%, rgba(102, 126, 234, 0.15) 100%);
        }

        .float-element:nth-child(3) {
            width: 250px;
            height: 250px;
            bottom: 20%;
            left: 15%;
            animation-duration: 20s;
            animation-delay: -10s;
            background: linear-gradient(135deg, rgba(255, 107, 107, 0.1) 0%, rgba(240, 147, 251, 0.1) 100%);
        }

        .float-element:nth-child(4) {
            width: 350px;
            height: 350px;
            top: 20%;
            right: 20%;
            animation-duration: 35s;
            animation-delay: -15s;
            background: linear-gradient(135deg, rgba(118, 75, 162, 0.1) 0%, rgba(255, 107, 107, 0.1) 100%);
        }

        .float-element:nth-child(5) {
            width: 200px;
            height: 200px;
            bottom: 10%;
            right: 25%;
            animation-duration: 18s;
            animation-delay: -7s;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.15) 100%);
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

        .container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            min-height: 600px;
            max-height: 90vh;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            box-shadow: var(--shadow);
            overflow: hidden;
            position: relative;
            z-index: 1;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Hero Section */
        .hero-section {
            flex: 1;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%);
            color: var(--white);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 40px;
            position: relative;
            overflow: hidden;
            min-height: 600px;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
            animation: pulse 8s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.8;
            }
        }

        .logo-container {
            position: relative;
            z-index: 2;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 30px;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .logo-icon i {
            font-size: 24px;
            color: var(--white);
        }

        .logo-text h1 {
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .logo-text p {
            font-size: 14px;
            opacity: 0.9;
            font-weight: 400;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 400px;
        }

        .hero-content h2 {
            font-size: 32px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }

        .hero-content p {
            font-size: 16px;
            line-height: 1.6;
            opacity: 0.9;
            margin-bottom: 24px;
        }

        .features {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 30px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
        }

        .feature i {
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
        }

        /* Registration Section */
        .registration-section {
            flex: 1;
            padding: 30px;
            display: flex;
            flex-direction: column;
            background: var(--white);
            position: relative;
            overflow-y: auto;
        }

        .registration-container {
            max-width: 450px;
            width: 100%;
            margin: 0 auto;
        }

        .registration-header {
            margin-bottom: 25px;
            text-align: center;
        }

        .registration-header h2 {
            font-size: 28px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .registration-header p {
            color: var(--dark-light);
            font-size: 15px;
            line-height: 1.5;
        }

        /* Form Elements */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 14px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: var(--dark);
            font-size: 13px;
        }

        .form-input-container {
            position: relative;
        }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 12px 14px;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius-sm);
            font-size: 14px;
            transition: var(--transition);
            background: var(--white);
            color: var(--dark);
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px var(--primary-soft);
        }

        .form-textarea {
            min-height: 70px;
            resize: vertical;
            line-height: 1.5;
        }

        .input-icon {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            cursor: pointer;
            transition: var(--transition);
            font-size: 14px;
        }

        .input-icon:hover {
            color: var(--primary);
        }

        /* Password strength */
        .password-strength {
            height: 4px;
            background: var(--light-gray);
            border-radius: 2px;
            margin-top: 6px;
            overflow: hidden;
        }

        .password-strength-fill {
            height: 100%;
            width: 0;
            border-radius: 2px;
            transition: var(--transition);
        }

        .password-strength-text {
            font-size: 11px;
            margin-top: 4px;
            color: var(--gray);
        }

        /* Checkbox */
        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 16px 0;
            cursor: pointer;
        }

        .checkbox {
            width: 18px;
            height: 18px;
            border: 2px solid var(--light-gray);
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            flex-shrink: 0;
            margin-top: 2px;
        }

        .checkbox i {
            font-size: 10px;
            color: transparent;
            transition: var(--transition);
        }

        .checkbox-group input:checked+.checkbox {
            background: var(--gradient-primary);
            border-color: var(--primary);
        }

        .checkbox-group input:checked+.checkbox i {
            color: white;
        }

        .checkbox-group input {
            display: none;
        }

        .checkbox-text {
            font-size: 13px;
            color: var(--dark-light);
            line-height: 1.4;
        }

        .checkbox-text a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .checkbox-text a:hover {
            text-decoration: underline;
        }

        /* Register Button */
        .register-btn {
            width: 100%;
            padding: 14px;
            background: var(--gradient-primary);
            color: var(--white);
            border: none;
            border-radius: var(--border-radius-sm);
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(102, 126, 234, 0.4);
        }

        .register-btn:active {
            transform: translateY(0);
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            color: var(--dark-light);
            font-size: 14px;
        }

        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Footer */
        .footer {
            margin-top: 20px;
            padding-top: 16px;
            border-top: 1px solid var(--light-gray);
            text-align: center;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--gray);
            text-decoration: none;
            font-size: 12px;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .copyright {
            color: var(--gray);
            font-size: 12px;
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .container {
                flex-direction: column;
                max-height: none;
                min-height: auto;
            }

            .hero-section {
                min-height: 300px;
                padding: 30px;
            }

            .registration-section {
                padding: 25px;
            }

            .hero-content h2 {
                font-size: 28px;
            }
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .hero-section {
                padding: 25px 20px;
            }

            .registration-section {
                padding: 20px;
            }

            .registration-header h2 {
                font-size: 24px;
            }

            .hero-content h2 {
                font-size: 24px;
            }

            .hero-content p {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .container {
                border-radius: 20px;
            }

            .form-input,
            .form-select,
            .form-textarea {
                padding: 10px 12px;
            }

            .hero-section {
                padding: 20px 15px;
            }

            .registration-section {
                padding: 15px;
            }

            .logo {
                margin-bottom: 20px;
            }

            .logo-icon {
                width: 40px;
                height: 40px;
            }

            .logo-icon i {
                font-size: 20px;
            }

            .logo-text h1 {
                font-size: 24px;
            }
        }

        /* Custom Scrollbar */
        .registration-section::-webkit-scrollbar {
            width: 6px;
        }

        .registration-section::-webkit-scrollbar-track {
            background: var(--light-gray);
            border-radius: 3px;
        }

        .registration-section::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 3px;
        }

        .registration-section::-webkit-scrollbar-thumb:hover {
            background: var(--primary-light);
        }
    </style>
</head>

<body>
    <!-- Floating Background Elements -->
    <div class="floating-bg">
        <div class="float-element"></div>
        <div class="float-element"></div>
        <div class="float-element"></div>
        <div class="float-element"></div>
        <div class="float-element"></div>
    </div>

    <div class="container">
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="logo-container">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="logo-text">
                        <h1>SpeakUp</h1>
                        <p>English Academy</p>
                    </div>
                </div>
            </div>

            <div class="hero-content">
                <h2>Mulai Perjalanan Bahasa Inggris Anda</h2>
                <p>Bergabung dengan ribuan siswa yang telah meningkatkan kemampuan bahasa Inggris mereka dengan metode pembelajaran terbaik.</p>

                <div class="features">
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Pengajar profesional bersertifikat</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Kurikulum terstruktur dan terpadu</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check"></i>
                        <span>Kelas interaktif dengan grup kecil</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registration Section -->
        <div class="registration-section">
            <div class="registration-container">
                <div class="registration-header">
                    <h2>Buat Akun Baru</h2>
                    <p>Isi data diri Anda untuk memulai pembelajaran</p>
                </div>

                <form id="registrationForm">
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="username">Username</label>
                            <div class="form-input-container">
                                <input type="text" class="form-input" id="username" placeholder="username" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="nisn">NISN</label>
                            <div class="form-input-container">
                                <input type="text" class="form-input" id="nisn" placeholder="Nomor NISN" required>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label" for="fullName">Nama Lengkap</label>
                            <div class="form-input-container">
                                <input type="text" class="form-input" id="fullName" placeholder="Nama lengkap siswa" required>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label" for="email">Email</label>
                            <div class="form-input-container">
                                <input type="email" class="form-input" id="email" placeholder="nama@email.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="password">Kata Sandi</label>
                            <div class="form-input-container">
                                <input type="password" class="form-input" id="password" placeholder="••••••••" required>
                                <i class="fas fa-eye input-icon toggle-password"></i>
                            </div>
                            <div class="password-strength">
                                <div class="password-strength-fill" id="passwordStrengthFill"></div>
                            </div>
                            <div class="password-strength-text" id="passwordStrengthText">Kekuatan kata sandi</div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="confirmPassword">Konfirmasi Sandi</label>
                            <div class="form-input-container">
                                <input type="password" class="form-input" id="confirmPassword" placeholder="••••••••" required>
                                <i class="fas fa-eye input-icon toggle-password"></i>
                            </div>
                            <div id="passwordMatchMessage" class="password-strength-text"></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="level">Level</label>
                            <select class="form-select" id="level" required>
                                <option value="" disabled selected>Pilih level</option>
                                <option value="beginner">Beginner</option>
                                <option value="elementary">Elementary</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="upper-intermediate">Upper Intermediate</option>
                                <option value="advanced">Advanced</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="education">Jenjang</label>
                            <select class="form-select" id="education" required>
                                <option value="" disabled selected>Pilih jenjang</option>
                                <option value="sd">SD / Sederajat</option>
                                <option value="smp">SMP / Sederajat</option>
                                <option value="sma">SMA / Sederajat</option>
                                <option value="diploma">Diploma</option>
                                <option value="sarjana">Sarjana</option>
                                <option value="pascasarjana">Pascasarjana</option>
                                <option value="umum">Umum</option>
                            </select>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label" for="reason">Alasan Ikut Kursus</label>
                            <textarea class="form-textarea" id="reason" placeholder="Jelaskan alasan Anda bergabung dengan SpeakUp Academy..." required></textarea>
                        </div>
                    </div>

                    <label class="checkbox-group">
                        <input type="checkbox" id="terms" required>
                        <span class="checkbox">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="checkbox-text">
                            Saya menyetujui <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a>
                        </span>
                    </label>

                    <button type="submit" class="register-btn">
                        <i class="fas fa-user-plus" style="margin-right: 8px;"></i>
                        Daftar Sekarang
                    </button>
                </form>

                <div class="login-link">
                    Sudah punya akun? <a href="\">Masuk di sini</a>
                </div>

                <div class="footer">
                    <div class="footer-links">
                        <a href="#">Syarat & Ketentuan</a>
                        <a href="#">Kebijakan Privasi</a>
                        <a href="#">Bantuan</a>
                    </div>
                    <div class="copyright">
                        © 2024 SpeakUp Academy. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
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

        // Password strength checker
        function checkPasswordStrength(password) {
            let strength = 0;
            const strengthFill = document.getElementById('passwordStrengthFill');
            const strengthText = document.getElementById('passwordStrengthText');

            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/\d/)) strength++;
            if (password.match(/[^a-zA-Z\d]/)) strength++;

            let color, text, width;
            switch (strength) {
                case 0:
                case 1:
                    color = '#ef4444';
                    text = 'Lemah';
                    width = '25%';
                    break;
                case 2:
                    color = '#f59e0b';
                    text = 'Cukup';
                    width = '50%';
                    break;
                case 3:
                    color = '#eab308';
                    text = 'Baik';
                    width = '75%';
                    break;
                case 4:
                    color = '#10b981';
                    text = 'Sangat Kuat';
                    width = '100%';
                    break;
            }

            strengthFill.style.width = width;
            strengthFill.style.background = color;
            strengthText.textContent = `Kekuatan: ${text}`;
            strengthText.style.color = color;
        }

        // Password match checker
        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const message = document.getElementById('passwordMatchMessage');

            if (confirmPassword === '') {
                message.textContent = '';
                return;
            }

            if (password === confirmPassword) {
                message.textContent = 'Kata sandi cocok';
                message.style.color = '#10b981';
            } else {
                message.textContent = 'Kata sandi tidak cocok';
                message.style.color = '#ef4444';
            }
        }

        // Registration form submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const nisn = document.getElementById('nisn').value;
            const fullName = document.getElementById('fullName').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const level = document.getElementById('level').value;
            const education = document.getElementById('education').value;
            const reason = document.getElementById('reason').value;
            const terms = document.getElementById('terms').checked;

            // Basic validation
            if (password !== confirmPassword) {
                alert('Kata sandi tidak cocok. Silakan periksa kembali.');
                return;
            }

            if (!terms) {
                alert('Anda harus menyetujui Syarat & Ketentuan dan Kebijakan Privasi.');
                return;
            }

            // Add loading animation
            const button = this.querySelector('.register-btn');
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
            button.disabled = true;

            // Simulate API call
            setTimeout(() => {
                button.innerHTML = '<i class="fas fa-check"></i> Pendaftaran Berhasil!';
                button.style.background = 'var(--success)';

                setTimeout(() => {
                    // Show success message and redirect
                    alert(`Pendaftaran berhasil!\n\nDetail Pendaftaran:\nUsername: ${username}\nNama: ${fullName}\nLevel: ${document.getElementById('level').options[document.getElementById('level').selectedIndex].text}\nJenjang: ${document.getElementById('education').options[document.getElementById('education').selectedIndex].text}`);

                    // Reset form
                    this.reset();
                    button.innerHTML = originalText;
                    button.disabled = false;
                    button.style.background = '';

                    // Redirect to login page
                    window.location.href = 'login.html';
                }, 1500);
            }, 2000);
        });

        // Event listeners for password strength and match
        document.getElementById('password').addEventListener('input', function() {
            checkPasswordStrength(this.value);
            checkPasswordMatch();
        });

        document.getElementById('confirmPassword').addEventListener('input', checkPasswordMatch);
    </script>
</body>

</html>