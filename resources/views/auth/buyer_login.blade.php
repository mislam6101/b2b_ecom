<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>ক্রেতা লগইন | BizConnect Pro</title>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0b2b4f 0%, #1e4a7a 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* অ্যানিমেটেড ব্যাকগ্রাউন্ড */
        .bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMzAgMTBhMjAgMjAgMCAwIDEgMjAgMjAgMjAgMjAgMCAwIDEtNDAgMCAyMCAyMCAwIDAgMSAyMC0yMHoiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=');
            opacity: 0.1;
            animation: float 20s linear infinite;
        }

        @keyframes float {
            from {
                transform: rotate(0deg) scale(1);
            }

            to {
                transform: rotate(360deg) scale(1.5);
            }
        }

        /* মূল কন্টেইনার */
        .login-wrapper {
            width: 100%;
            max-width: 1400px;
            position: relative;
            z-index: 2;
        }

        /* লগইন কার্ড */
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            animation: slideInUp 0.8s ease;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* বাম পাশ - লগইন ফর্ম */
        .login-form-section {
            padding: 60px 50px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #64748b;
            text-decoration: none;
            font-weight: 500;
            margin-bottom: 40px;
            transition: 0.3s;
        }

        .back-link:hover {
            color: #f6b83e;
            transform: translateX(-5px);
        }

        .buyer-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            padding: 8px 20px;
            border-radius: 40px;
            margin-bottom: 30px;
        }

        .buyer-badge i {
            color: #1976d2;
            font-size: 1.2rem;
        }

        .buyer-badge span {
            color: #0b2b4f;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .login-form-section h1 {
            font-size: 2.5rem;
            color: #0b2b4f;
            margin-bottom: 10px;
            font-weight: 800;
        }

        .welcome-text {
            color: #475569;
            font-size: 1.1rem;
            margin-bottom: 40px;
        }

        /* ফর্ম গ্রুপ */
        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #1e293b;
            font-size: 0.95rem;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 20px;
            color: #94a3b8;
            font-size: 1.1rem;
        }

        .input-wrapper input {
            width: 100%;
            padding: 18px 20px 18px 55px;
            border: 2px solid #e2e8f0;
            border-radius: 30px;
            font-size: 1rem;
            transition: all 0.3s;
            background: white;
        }

        .input-wrapper input:focus {
            border-color: #f6b83e;
            outline: none;
            box-shadow: 0 0 0 5px rgba(246, 184, 62, 0.1);
        }

        .password-toggle {
            position: absolute;
            right: 20px;
            color: #94a3b8;
            cursor: pointer;
            font-size: 1.1rem;
        }

        .password-toggle:hover {
            color: #f6b83e;
        }

        /* ফর্ম অপশন */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0 30px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #475569;
            cursor: pointer;
        }

        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #0b2b4f;
        }

        .forgot-link {
            color: #0b2b4f;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .forgot-link:hover {
            color: #f6b83e;
        }

        /* লগইন বাটন */
        .login-btn {
            width: 100%;
            background: linear-gradient(135deg, #0b2b4f, #1e4a7a);
            color: white;
            border: none;
            padding: 18px;
            border-radius: 40px;
            font-weight: 700;
            font-size: 1.2rem;
            cursor: pointer;
            transition: 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 25px;
            box-shadow: 0 10px 20px rgba(11, 43, 79, 0.3);
        }

        .login-btn:hover {
            background: linear-gradient(135deg, #1e4a7a, #0b2b4f);
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(11, 43, 79, 0.4);
        }

        .login-btn i {
            transition: 0.3s;
        }

        .login-btn:hover i {
            transform: translateX(5px);
        }

        /* সোশ্যাল লগইন */
        .social-login {
            text-align: center;
            margin: 30px 0;
        }

        .social-login p {
            color: #64748b;
            margin-bottom: 20px;
            position: relative;
        }

        .social-login p::before,
        .social-login p::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 30%;
            height: 1px;
            background: #e2e8f0;
        }

        .social-login p::before {
            left: 0;
        }

        .social-login p::after {
            right: 0;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.3rem;
            transition: 0.3s;
            cursor: pointer;
        }

        .social-icon.google {
            background: #db4437;
        }

        .social-icon.linkedin {
            background: #0077b5;
        }

        .social-icon.microsoft {
            background: #00a4ef;
        }

        .social-icon:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* রেজিস্টার লিংক */
        .register-link {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e2e8f0;
        }

        .register-link p {
            color: #475569;
        }

        .register-link a {
            color: #f6b83e;
            font-weight: 700;
            text-decoration: none;
            margin-left: 5px;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        /* ডান পাশ - বিজনেস ফিচার */
        .features-section {
            background: linear-gradient(135deg, #0b2b4f, #1e4a7a);
            padding: 60px 40px;
            color: white;
            display: flex;
            flex-direction: column;
        }

        .features-header {
            margin-bottom: 50px;
        }

        .features-header h2 {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .features-header p {
            opacity: 0.9;
            line-height: 1.6;
        }

        /* ফিচার লিস্ট */
        .feature-item-large {
            display: flex;
            gap: 20px;
            margin-bottom: 35px;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: #f6b83e;
        }

        .feature-content h4 {
            font-size: 1.2rem;
            margin-bottom: 8px;
        }

        .feature-content p {
            opacity: 0.8;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* টেস্টিমোনিয়াল */
        .testimonial {
            margin-top: auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 30px;
            backdrop-filter: blur(10px);
        }

        .testimonial i {
            color: #f6b83e;
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .testimonial p {
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 20px;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            background: #f6b83e;
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0b2b4f;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .author-info h5 {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .author-info p {
            font-size: 0.85rem;
            opacity: 0.7;
            margin: 0;
        }

        /* অ্যানিমেশন */
        .pulse-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        /* রেসপনসিভ */
        @media (max-width: 1024px) {
            .login-card {
                grid-template-columns: 1fr;
            }

            .features-section {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .login-form-section {
                padding: 40px 25px;
            }

            .login-form-section h1 {
                font-size: 2rem;
            }

            .form-options {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
        }

        @media (max-width: 480px) {
            .social-icons {
                flex-wrap: wrap;
            }

            .input-wrapper input {
                padding: 15px 15px 15px 50px;
            }
        }

        /* টোস্ট মেসেজ */
        .toast-container {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
        }

        .toast {
            background: white;
            padding: 15px 25px;
            border-radius: 50px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            margin-top: 10px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-left: 4px solid;
            animation: slideInRight 0.3s ease;
        }

        .toast.success {
            border-left-color: #2e7d32;
        }

        .toast.error {
            border-left-color: #d32f2f;
        }

        .toast.info {
            border-left-color: #0b2b4f;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* লোডিং স্পিনার */
        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <!-- অ্যানিমেটেড ব্যাকগ্রাউন্ড -->
    <div class="bg-pattern"></div>

    <div class="login-wrapper">
        <!-- লগইন কার্ড -->
        <div class="login-card">
            <!-- বাম পাশ - লগইন ফর্ম -->
            <div class="login-form-section">
                <a href="index.html" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>ভূমিকা নির্বাচনে ফিরে যান</span>
                </a>

                <div class="buyer-badge">
                    <i class="fas fa-shopping-bag"></i>
                    <span>ক্রেতা অ্যাকাউন্ট</span>
                </div>

                <h1>স্বাগতম ক্রেতা!</h1>
                <p class="welcome-text">আপনার BizConnect অ্যাকাউন্টে লগইন করুন</p>

                <form method="post" action="{{ route('buyer.login') }}">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }}
                        @endforeach
                    </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label>ইমেইল ঠিকানা / ব্যবসায়িক আইডি</label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" placeholder="your.company@email.com" value="{{ old('email')}}" name="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>পাসওয়ার্ড</label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" name="password" placeholder="********" required>
                            <i class="fas fa-eye password-toggle" onclick="togglePassword()" id="toggleIcon"></i>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox">
                            <span>মনে রাখুন</span>
                        </label>
                        <a href="#" class="forgot-link">পাসওয়ার্ড ভুলে গেছেন?</a>
                    </div>

                    <button type="submit" class="login-btn">
                        <span>লগইন করুন</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </form>

                <div class="social-login">
                    <p>অথবা লগইন করুন</p>
                    <div class="social-icons">
                        <div class="social-icon google" onclick="handleSocialLogin('google')">
                            <i class="fab fa-google"></i>
                        </div>
                        <div class="social-icon linkedin" onclick="handleSocialLogin('linkedin')">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                        <div class="social-icon microsoft" onclick="handleSocialLogin('microsoft')">
                            <i class="fab fa-microsoft"></i>
                        </div>
                    </div>
                </div>

                <div class="register-link">
                    <p>
                        নতুন ক্রেতা?
                        <a href="{{route('buyer.register')}}">BizConnect অ্যাকাউন্ট খুলুন</a>
                    </p>
                </div>
            </div>

            <!-- ডান পাশ - বিজনেস ফিচার -->
            <div class="features-section">
                <div class="features-header">
                    <h2>ক্রেতাদের জন্য বিশেষ সুবিধা</h2>
                    <p>BizConnect Pro-তে লগইন করে পাচ্ছেন:</p>
                </div>

                <div class="feature-item-large">
                    <div class="feature-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div class="feature-content">
                        <h4>স্মার্ট ড্যাশবোর্ড</h4>
                        <p>আপনার সব অর্ডার, কোটেশন এবং সরবরাহকারীদের রিয়েল-টাইম আপডেট দেখুন</p>
                    </div>
                </div>

                <div class="feature-item-large">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="feature-content">
                        <h4>ব্যয় বিশ্লেষণ</h4>
                        <p>পণ্য কেনার ট্রেন্ড, বাজেট এবং সেভিংসের বিস্তারিত রিপোর্ট</p>
                    </div>
                </div>

                <div class="feature-item-large">
                    <div class="feature-icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="feature-content">
                        <h4>স্মার্ট নোটিফিকেশন</h4>
                        <p>কোটেশন আপডেট, প্রাইস ড্রপ এবং নতুন সরবরাহকারীদের অ্যালার্ট</p>
                    </div>
                </div>

                <div class="feature-item-large">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="feature-content">
                        <h4>ট্রেড অ্যাসুরেন্স</h4>
                        <p>$১০০,০০০ পর্যন্ত পেমেন্ট প্রটেকশন এবং কোয়ালিটি গ্যারান্টি</p>
                    </div>
                </div>

                <!-- টেস্টিমোনিয়াল -->
                <div class="testimonial">
                    <i class="fas fa-quote-left"></i>
                    <p>
                        "BizConnect-এ যোগ দেওয়ার পর আমাদের সাপ্লাই চেইন অনেক সহজ হয়েছে।
                        শুধু এক ক্লিকেই পাইকারি সরবরাহকারীদের কাছ থেকে কোটেশন পাই।"
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <span>MR</span>
                        </div>
                        <div class="author-info">
                            <h5>মাহমুদুর রহমান</h5>
                            <p>সিইও, টেকস্পেক্ট্রা লিমিটেড</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- টোস্ট কন্টেইনার -->
    <div class="toast-container" id="toastContainer"></div>

    
</body>

</html>