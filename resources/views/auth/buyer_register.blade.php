<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>ক্রেতা রেজিস্ট্রেশন | BizConnect Pro</title>
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

        /* অ্যানিমেটেড ব্যাকগ্রাউন্ড (লগইন পেজের মতো) */
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
            from { transform: rotate(0deg) scale(1); }
            to { transform: rotate(360deg) scale(1.5); }
        }

        /* মূল কন্টেইনার - লগইন পেজের মতো */
        .register-wrapper {
            width: 100%;
            max-width: 1400px;
            position: relative;
            z-index: 2;
        }

        /* রেজিস্ট্রেশন কার্ড - লগইন পেজের মতো */
        .register-card {
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

        /* বাম পাশ - রেজিস্ট্রেশন ফর্ম (লগইন পেজের মতো) */
        .register-form-section {
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

        .register-form-section h1 {
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

        /* ফর্ম গ্রুপ - লগইন পেজের মতো */
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

        /* টার্মস চেকবক্স */
        .terms-group {
            margin: 30px 0;
        }

        .terms-checkbox {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #475569;
        }

        .terms-checkbox input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #0b2b4f;
        }

        .terms-checkbox a {
            color: #f6b83e;
            font-weight: 600;
            text-decoration: none;
        }

        .terms-checkbox a:hover {
            text-decoration: underline;
        }

        /* রেজিস্টার বাটন - লগইন পেজের মতো */
        .register-btn {
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

        .register-btn:hover {
            background: linear-gradient(135deg, #1e4a7a, #0b2b4f);
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(11, 43, 79, 0.4);
        }

        .register-btn i {
            transition: 0.3s;
        }

        .register-btn:hover i {
            transform: translateX(5px);
        }

        /* লগইন লিংক - লগইন পেজের মতো */
        .login-link {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e2e8f0;
        }

        .login-link p {
            color: #475569;
        }

        .login-link a {
            color: #f6b83e;
            font-weight: 700;
            text-decoration: none;
            margin-left: 5px;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* ডান পাশ - বিজনেস ফিচার (লগইন পেজের মতো) */
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

        /* টোস্ট মেসেজ - লগইন পেজের মতো */
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
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
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
            border: 3px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* রেসপনসিভ - লগইন পেজের মতো */
        @media (max-width: 1024px) {
            .register-card {
                grid-template-columns: 1fr;
            }
            
            .features-section {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .register-form-section {
                padding: 40px 25px;
            }
            
            .register-form-section h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .input-wrapper input {
                padding: 15px 15px 15px 50px;
            }
        }
    </style>
</head>
<body>
    <!-- অ্যানিমেটেড ব্যাকগ্রাউন্ড (লগইন পেজের মতো) -->
    <div class="bg-pattern"></div>

    <div class="register-wrapper">
        <!-- রেজিস্ট্রেশন কার্ড -->
        <div class="register-card">
            <!-- বাম পাশ - রেজিস্ট্রেশন ফর্ম -->
            <div class="register-form-section">
                <a href="index.html" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>ভূমিকা নির্বাচনে ফিরে যান</span>
                </a>

                <div class="buyer-badge">
                    <i class="fas fa-user-plus"></i>
                    <span>নতুন ক্রেতা অ্যাকাউন্ট</span>
                </div>

                <h1>রেজিস্ট্রেশন করুন</h1>
                <p class="welcome-text">BizConnect-এ পাইকারি কেনাকাটা শুরু করতে আপনার তথ্য দিন</p>

                <!-- রেজিস্ট্রেশন ফর্ম - ৬টি ফিল্ড -->
                <form action="{{route('buyer.register')}}" method="post">
                    @csrf
                    <!-- ১. কোম্পানির নাম -->
                    <div class="form-group">
                        <label>কোম্পানির নাম</label>
                        <div class="input-wrapper">
                            <i class="fas fa-building input-icon"></i>
                            <input type="text" name="company" placeholder="আপনার কোম্পানির নাম" id="companyName" required>
                        </div>
                    </div>

                    <!-- ২. ঠিকানা -->
                    <div class="form-group">
                        <label>ঠিকানা</label>
                        <div class="input-wrapper">
                            <i class="fas fa-map-marker-alt input-icon"></i>
                            <input type="text" name="address" placeholder="আপনার ব্যবসার ঠিকানা" id="address" required>
                        </div>
                    </div>

                    <!-- ৩. যোগাযোগ নম্বর -->
                    <div class="form-group">
                        <label>মোবাইল নম্বর</label>
                        <div class="input-wrapper">
                            <i class="fas fa-phone-alt input-icon"></i>
                            <input type="tel" name="contact" placeholder="+৮৮০ ১XXX-XXXXXX" id="contact" required>
                        </div>
                    </div>

                    <!-- ৪. ইমেইল -->
                    <div class="form-group">
                        <label>ইমেইল ঠিকানা</label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email"  name="email" placeholder="your.company@email.com" id="email" required>
                        </div>
                    </div>

                    <!-- ৫. পাসওয়ার্ড তৈরি করুন -->
                    <div class="form-group">
                        <label>পাসওয়ার্ড তৈরি করুন</label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password"  name="password" placeholder="********" id="password" required>
                            <i class="fas fa-eye password-toggle" onclick="togglePassword('password', this)"></i>
                        </div>
                    </div>

                    <!-- ৬. পাসওয়ার্ড নিশ্চিত করুন -->
                    <div class="form-group">
                        <label>পাসওয়ার্ড নিশ্চিত করুন</label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password"  name="password_confirmation" placeholder="********" id="confirmPassword" required>
                            <i class="fas fa-eye password-toggle" onclick="togglePassword('confirmPassword', this)"></i>
                        </div>
                    </div>

                    <!-- টার্মস চেকবক্স -->
                    <div class="terms-group">
                        <label class="terms-checkbox">
                            <input type="checkbox" id="terms" required>
                            <span>আমি <a href="#">শর্তাবলী</a> এবং <a href="#">গোপনীয়তা নীতি</a> মেনে চলতে সম্মতি জানাচ্ছি</span>
                        </label>
                    </div>

                    <!-- রেজিস্টার বাটন -->
                    <button type="submit" class="register-btn" >
                        <span>রেজিস্ট্রেশন সম্পন্ন করুন</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>

                    <!-- লগইন লিংক -->
                    <div class="login-link">
                        <p>
                            ইতিমধ্যে অ্যাকাউন্ট আছে? 
                            <a href="{{route('buyer.login')}}">লগইন করুন</a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- ডান পাশ - বিজনেস ফিচার (লগইন পেজের মতো) -->
            <div class="features-section">
                <div class="features-header">
                    <h2>ক্রেতাদের জন্য বিশেষ সুবিধা</h2>
                    <p>BizConnect Pro-তে যোগ দিয়ে পাচ্ছেন:</p>
                </div>

                <div class="feature-item-large">
                    <div class="feature-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div class="feature-content">
                        <h4>স্মার্ট ড্যাশবোর্ড</h4>
                        <p>আপনার সব অর্ডার, কোটেশন এবং সরবরাহকারীদের রিয়েল-টাইম আপডেট</p>
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

    <script>
        // পাসওয়ার্ড টগল ফাংশন (লগইন পেজের মতো)
        function togglePassword(inputId, element) {
            const input = document.getElementById(inputId);
            
            if (input.type === 'password') {
                input.type = 'text';
                element.classList.remove('fa-eye');
                element.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                element.classList.remove('fa-eye-slash');
                element.classList.add('fa-eye');
            }
        }

        // রেজিস্ট্রেশন হ্যান্ডলার
        function handleRegistration(event) {
            event.preventDefault();
            
            // ফর্ম ডাটা সংগ্রহ
            const companyName = document.getElementById('companyName').value;
            const address = document.getElementById('address').value;
            const contact = document.getElementById('contact').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const termsAccepted = document.getElementById('terms').checked;

            // ভ্যালিডেশন
            if (!companyName || !address || !contact || !email || !password || !confirmPassword) {
                showToast('সব ফিল্ড পূরণ করুন', 'error');
                return;
            }

            if (!termsAccepted) {
                showToast('অনুগ্রহ করে শর্তাবলী accept করুন', 'error');
                return;
            }

            // ইমেইল ভ্যালিডেশন
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                showToast('সঠিক ইমেইল ঠিকানা দিন', 'error');
                return;
            }

            // পাসওয়ার্ড ম্যাচ চেক
            if (password !== confirmPassword) {
                showToast('পাসওয়ার্ড মিলছে না', 'error');
                return;
            }

            // পাসওয়ার্ড length চেক
            if (password.length < 6) {
                showToast('পাসওয়ার্ড কমপক্ষে ৬ অক্ষরের হতে হবে', 'error');
                return;
            }

            // লোডিং স্টেট
            const registerBtn = document.getElementById('registerBtn');
            const originalContent = registerBtn.innerHTML;
            registerBtn.innerHTML = '<span class="loading-spinner"></span><span>প্রসেসিং...</span>';
            registerBtn.disabled = true;

            // সিমুলেট রেজিস্ট্রেশন
            setTimeout(() => {
                showToast('রেজিস্ট্রেশন সফল হয়েছে! লগইন পৃষ্ঠায় যাচ্ছেন...', 'success');
                
                setTimeout(() => {
                    window.location.href = 'buyer-login.html';
                }, 2000);
            }, 1500);
        }

        // টোস্ট ফাংশন (লগইন পেজের মতো)
        function showToast(message, type = 'success') {
            const container = document.getElementById('toastContainer');
            const toast = document.createElement('div');
            toast.className = `toast ${type}`;
            
            let icon = 'fa-info-circle';
            if (type === 'success') icon = 'fa-check-circle';
            if (type === 'error') icon = 'fa-exclamation-circle';
            
            toast.innerHTML = `
                <i class="fas ${icon}"></i>
                <span>${message}</span>
            `;
            
            container.appendChild(toast);
            
            setTimeout(() => {
                toast.remove();
            }, 3000);
        }

        // কন্টাক্ট নম্বর ফরম্যাটিং
        document.getElementById('contact').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 0) {
                if (value.length <= 3) {
                    value = '+৮৮০ ' + value;
                } else if (value.length <= 7) {
                    value = '+৮৮০ ' + value.slice(0,3) + '-' + value.slice(3);
                } else {
                    value = '+৮৮০ ' + value.slice(0,3) + '-' + value.slice(3,7) + '-' + value.slice(7,11);
                }
                e.target.value = value;
            }
        });
    </script>
</body>
</html>