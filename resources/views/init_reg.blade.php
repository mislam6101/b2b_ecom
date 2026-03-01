<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>রেজিস্ট্রেশন | BizConnect Pro</title>
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

        /* অ্যানিমেটেড ব্যাকগ্রাউন্ড - লগইন পেজের মতো */
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

        /* মূল কন্টেইনার */
        .register-wrapper {
            width: 100%;
            max-width: 1400px;
            position: relative;
            z-index: 2;
        }

        /* রেজিস্ট্রেশন সিলেক্টর কার্ড */
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

        /* বাম পাশ - সিলেক্টর */
        .selector-section {
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

        .page-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #e2e2e2, #d1d5db);
            padding: 8px 20px;
            border-radius: 40px;
            margin-bottom: 30px;
        }

        .page-badge i {
            color: #0b2b4f;
            font-size: 1.2rem;
        }

        .page-badge span {
            color: #0b2b4f;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .selector-section h1 {
            font-size: 2.5rem;
            color: #0b2b4f;
            margin-bottom: 10px;
            font-weight: 800;
        }

        .subtitle {
            color: #475569;
            font-size: 1.1rem;
            margin-bottom: 40px;
        }

        /* রোল গ্রিড - লগইন পেজের মতো */
        .role-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin: 40px 0;
        }

        .role-item {
            background: white;
            border-radius: 40px;
            padding: 40px 30px;
            cursor: pointer;
            transition: all 0.4s ease;
            border: 3px solid transparent;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .role-item:hover {
            transform: translateY(-10px);
            border-color: #f6b83e;
            box-shadow: 0 20px 40px rgba(246, 184, 62, 0.3);
        }

        .role-item.selected {
            border-color: #0b2b4f;
            background: #f8fafc;
        }

        .role-icon {
            width: 100px;
            height: 100px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 3rem;
            transition: 0.3s;
        }

        .buyer-icon {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            color: #1976d2;
        }

        .seller-icon {
            background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
            color: #2e7d32;
        }

        .role-item:hover .role-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .role-item h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #0b2b4f;
        }

        .role-item p {
            color: #64748b;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .feature-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
        }

        .feature-tag {
            background: #f1f5f9;
            padding: 5px 12px;
            border-radius: 30px;
            font-size: 0.8rem;
            color: #475569;
        }

        .stats-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #f6b83e;
            color: #0b2b4f;
            padding: 5px 12px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 0.8rem;
        }

        /* কন্টিনিউ বাটন */
        .continue-btn {
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
            box-shadow: 0 10px 20px rgba(11, 43, 79, 0.3);
        }

        .continue-btn:hover:not(:disabled) {
            background: linear-gradient(135deg, #1e4a7a, #0b2b4f);
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(11, 43, 79, 0.4);
        }

        .continue-btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
            opacity: 0.5;
        }

        .continue-btn i {
            transition: 0.3s;
        }

        .continue-btn:hover:not(:disabled) i {
            transform: translateX(5px);
        }

        /* লগইন লিংক */
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

        /* রেসপনসিভ */
        @media (max-width: 1024px) {
            .register-card {
                grid-template-columns: 1fr;
            }
            
            .features-section {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .selector-section {
                padding: 40px 25px;
            }
            
            .selector-section h1 {
                font-size: 2rem;
            }
            
            .role-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- অ্যানিমেটেড ব্যাকগ্রাউন্ড -->
    <div class="bg-pattern"></div>

    <div class="register-wrapper">
        <!-- রেজিস্ট্রেশন সিলেক্টর কার্ড -->
        <div class="register-card">
            <!-- বাম পাশ - সিলেক্টর -->
            <div class="selector-section">
                <a href="{{url('/')}}" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>হোম পৃষ্ঠায় ফিরে যান</span>
                </a>

                <div class="page-badge">
                    <i class="fas fa-user-plus"></i>
                    <span>নতুন অ্যাকাউন্ট</span>
                </div>

                <h1>রেজিস্ট্রেশন</h1>
                <p class="subtitle">BizConnect-এ যোগ দিতে আপনার ভূমিকা নির্বাচন করুন</p>

                <!-- রোল সিলেক্টর -->
                <div class="role-container">
                    <!-- ক্রেতা কার্ড -->
                    <div class="role-item" id="buyerRole" onclick="selectRole('buyer')">
                        <div class="stats-badge">২৫০০০+ পণ্য</div>
                        <div class="role-icon buyer-icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <h3>ক্রেতা</h3>
                        <p>পাইকারি পণ্য ক্রয় করুন সরাসরি প্রস্তুতকারকের কাছ থেকে</p>
                        <div class="feature-tags">
                            <span class="feature-tag">৫০০০+ সরবরাহকারী</span>
                            <span class="feature-tag">কোটেশন সিস্টেম</span>
                            <span class="feature-tag">অর্ডার ট্র্যাকিং</span>
                        </div>
                    </div>

                    <!-- সরবরাহকারী কার্ড -->
                    <div class="role-item" id="sellerRole" onclick="selectRole('seller')">
                        <div class="stats-badge">১০০০০+ ক্রেতা</div>
                        <div class="role-icon seller-icon">
                            <i class="fas fa-store-alt"></i>
                        </div>
                        <h3>সরবরাহকারী</h3>
                        <p>আপনার পণ্য বিক্রি করুন দেশের শীর্ষ ক্রেতাদের কাছে</p>
                        <div class="feature-tags">
                            <span class="feature-tag">পণ্য তালিকা</span>
                            <span class="feature-tag">বিক্রয় বিশ্লেষণ</span>
                            <span class="feature-tag">ইনভেন্টরি</span>
                        </div>
                    </div>
                </div>

                <!-- কন্টিনিউ বাটন -->
                <button class="continue-btn" id="continueBtn" onclick="handleContinue()" disabled>
                    <span>চলুন শুরু করি</span>
                    <i class="fas fa-arrow-right"></i>
                </button>

                <!-- লগইন লিংক -->
                <div class="login-link">
                    <p>
                        ইতিমধ্যে অ্যাকাউন্ট আছে? 
                        <a href="login-selector.html">লগইন করুন</a>
                    </p>
                </div>
            </div>

            <!-- ডান পাশ - বিজনেস ফিচার -->
            <div class="features-section">
                <div class="features-header">
                    <h2>BizConnect Pro-তে যোগ দিন</h2>
                    <p>বাংলাদেশের সবচেয়ে বড় B2B মার্কেটপ্লেসে স্বাগতম</p>
                </div>

                <div class="feature-item-large">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="feature-content">
                        <h4>১০,০০০+ সক্রিয় ক্রেতা</h4>
                        <p>দেশের শীর্ষ ব্যবসায়ীরা এখানে কেনাকাটা করেন</p>
                    </div>
                </div>

                <div class="feature-item-large">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="feature-content">
                        <h4>২৪/৭ লজিস্টিক সাপোর্ট</h4>
                        <p>সারা দেশে ডোর-টু-ডোর ডেলিভারি</p>
                    </div>
                </div>

                <div class="feature-item-large">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="feature-content">
                        <h4>নিরাপদ লেনদেন</h4>
                        <p>$১০০,০০০ পর্যন্ত পেমেন্ট প্রটেকশন</p>
                    </div>
                </div>

                <!-- টেস্টিমোনিয়াল -->
                <div class="testimonial">
                    <i class="fas fa-quote-left"></i>
                    <p>
                        "BizConnect-এ যোগ দেওয়ার পর আমাদের ব্যবসা ৩ গুণ বেড়েছে। 
                        সেরা প্ল্যাটফর্ম B2B বাণিজ্যের জন্য।"
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <span>FH</span>
                        </div>
                        <div class="author-info">
                            <h5>ফারহানা হোসেন</h5>
                            <p>প্রতিষ্ঠাতা, ফ্যাশন হাব</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- টোস্ট কন্টেইনার -->
    <div class="toast-container" id="toastContainer"></div>

    <script>
        let selectedRole = null;

        // রোল সিলেক্ট ফাংশন
        function selectRole(role) {
            selectedRole = role;
            
            // UI আপডেট
            document.getElementById('buyerRole').classList.remove('selected');
            document.getElementById('sellerRole').classList.remove('selected');
            
            if (role === 'buyer') {
                document.getElementById('buyerRole').classList.add('selected');
                showToast('ক্রেতা হিসেবে রেজিস্ট্রেশন করবেন', 'info');
            } else {
                document.getElementById('sellerRole').classList.add('selected');
                showToast('সরবরাহকারী হিসেবে রেজিস্ট্রেশন করবেন', 'info');
            }
            
            // কন্টিনিউ বাটন এনাবল
            document.getElementById('continueBtn').disabled = false;
        }

        // কন্টিনিউ হ্যান্ডলার
        function handleContinue() {
            if (!selectedRole) {
                showToast('অনুগ্রহ করে আপনার ভূমিকা নির্বাচন করুন', 'info');
                return;
            }

            // লোডিং স্টেট
            const continueBtn = document.getElementById('continueBtn');
            const originalContent = continueBtn.innerHTML;
            continueBtn.innerHTML = '<span class="loading-spinner"></span><span>রিডিরেক্ট হচ্ছে...</span>';
            continueBtn.disabled = true;

            // রিডিরেক্ট
            setTimeout(() => {
                if (selectedRole === 'buyer') {
                    const buyerReg = "{{route('buyer.register')}}"
                    window.location.href = buyerReg;
                } else {
                    const sellerReg = "{{route('seller.register')}}"
                    window.location.href = sellerReg;
                }
            }, 1500);
        }

        // টোস্ট ফাংশন
        function showToast(message, type = 'info') {
            const container = document.getElementById('toastContainer');
            const toast = document.createElement('div');
            toast.className = `toast ${type}`;
            
            let icon = type === 'success' ? 'fa-check-circle' : 'fa-info-circle';
            
            toast.innerHTML = `
                <i class="fas ${icon}"></i>
                <span>${message}</span>
            `;
            
            container.appendChild(toast);
            
            setTimeout(() => {
                toast.remove();
            }, 3000);
        }

        // কিবোর্ড নেভিগেশন
        document.addEventListener('keydown', function(e) {
            if (e.key === '1') selectRole('buyer');
            if (e.key === '2') selectRole('seller');
            if (e.key === 'Enter' && selectedRole) handleContinue();
        });
    </script>
</body>
</html>