<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>লগইন | BizConnect Pro</title>
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
        }

        /* মূল কন্টেইনার */
        .auth-wrapper {
            width: 100%;
            max-width: 1200px;
        }

        /* রোল সিলেক্টর কার্ড */
        .role-selector {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            padding: 60px 40px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
            text-align: center;
            animation: fadeInUp 0.6s ease;
        }

        .role-selector h1 {
            font-size: 3rem;
            color: #0b2b4f;
            margin-bottom: 15px;
            font-weight: 800;
        }

        .role-selector .subtitle {
            color: #475569;
            font-size: 1.2rem;
            margin-bottom: 50px;
        }

        /* রোল গ্রিড */
        .role-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin: 40px 0;
        }

        .role-item {
            background: white;
            border-radius: 40px;
            padding: 40px 30px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 3px solid transparent;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .role-item:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: #f6b83e;
            box-shadow: 0 20px 40px rgba(246, 184, 62, 0.3);
        }

        .role-item.selected {
            border-color: #0b2b4f;
            background: #f8fafc;
        }

        .role-icon {
            width: 140px;
            height: 140px;
            border-radius: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 4rem;
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
            font-size: 2.2rem;
            margin-bottom: 15px;
            color: #0b2b4f;
        }

        .role-item .role-desc {
            color: #64748b;
            font-size: 1.1rem;
            margin-bottom: 25px;
        }

        .feature-list {
            list-style: none;
            text-align: left;
            margin-top: 25px;
            padding: 20px;
            background: #f8fafc;
            border-radius: 20px;
        }

        .feature-list li {
            margin-bottom: 15px;
            color: #1e293b;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1rem;
        }

        .feature-list i {
            color: #f6b83e;
            font-size: 1.2rem;
        }

        .stats-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #f6b83e;
            color: #0b2b4f;
            padding: 8px 16px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        /* অ্যাকশন বাটন */
        .action-section {
            margin-top: 40px;
        }

        .continue-btn {
            background: linear-gradient(135deg, #0b2b4f, #1e4a7a);
            color: white;
            border: none;
            padding: 18px 50px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.3rem;
            cursor: pointer;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 10px 20px rgba(11, 43, 79, 0.4);
        }

        .continue-btn:hover:not(:disabled) {
            background: linear-gradient(135deg, #1e4a7a, #0b2b4f);
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 30px rgba(11, 43, 79, 0.6);
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
            transform: translateX(8px);
        }

        /* ফিচার গ্রিড */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 60px;
            padding-top: 40px;
            border-top: 2px solid rgba(255, 255, 255, 0.2);
        }

        .feature-item {
            text-align: center;
            color: white;
        }

        .feature-item i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #f6b83e;
        }

        .feature-item h4 {
            font-size: 1.2rem;
            margin-bottom: 8px;
        }

        .feature-item p {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* ট্রাস্ট ব্যাজ */
        .trust-badge {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 30px;
            color: rgba(255, 255, 255, 0.9);
        }

        .trust-badge span {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.95rem;
        }

        .trust-badge i {
            color: #f6b83e;
        }

        /* অ্যানিমেশন */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* রেসপনসিভ */
        @media (max-width: 992px) {
            .role-container {
                gap: 20px;
            }
            
            .role-item h3 {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 768px) {
            .role-container {
                grid-template-columns: 1fr;
            }
            
            .role-selector {
                padding: 40px 20px;
            }
            
            .role-selector h1 {
                font-size: 2.2rem;
            }
            
            .feature-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .trust-badge {
                flex-direction: column;
                gap: 15px;
                align-items: center;
            }
        }

        @media (max-width: 480px) {
            .role-icon {
                width: 100px;
                height: 100px;
                font-size: 2.5rem;
            }
            
            .continue-btn {
                width: 100%;
                justify-content: center;
            }
            
            .stats-badge {
                font-size: 0.8rem;
                padding: 5px 12px;
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
            font-weight: 500;
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

        /* লোডিং এনিমেশন */
        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="auth-wrapper">
        <!-- রোল সিলেক্টর -->
        <div class="role-selector" id="roleSelector">
            <h1>BizConnect Pro</h1>
            <p class="subtitle">আপনার ব্যবসায়িক অংশীদার নির্বাচন করুন</p>
            
            <div class="role-container">
                <!-- ক্রেতা কার্ড -->
                <div class="role-item" id="buyerRole" onclick="selectRole('buyer')">
                    <div class="stats-badge">২৫০০০+ পণ্য</div>
                    <div class="role-icon buyer-icon">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <h3>ক্রেতা</h3>
                    <p class="role-desc">পাইকারি পণ্য ক্রয় করুন সরাসরি প্রস্তুতকারকের কাছ থেকে</p>
                    
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> ৫০০০+ ভেরিফাইড সরবরাহকারী</li>
                        <li><i class="fas fa-check-circle"></i> ইনস্ট্যান্ট কোটেশন অনুরোধ</li>
                        <li><i class="fas fa-check-circle"></i> অর্ডার ট্র্যাকিং ও ব্যবস্থাপনা</li>
                        <li><i class="fas fa-check-circle"></i> বাল্ক অর্ডারে বিশেষ ডিসকাউন্ট</li>
                    </ul>
                    
                    <div style="margin-top: 20px; color: #0b2b4f; font-weight: 600;">
                        <i class="fas fa-arrow-right"></i> ক্রেতা হিসেবে লগইন করুন
                    </div>
                </div>

                <!-- সরবরাহকারী কার্ড -->
                <div class="role-item" id="sellerRole" onclick="selectRole('seller')">
                    <div class="stats-badge">১০০০০+ ক্রেতা</div>
                    <div class="role-icon seller-icon">
                        <i class="fas fa-store-alt"></i>
                    </div>
                    <h3>সরবরাহকারী</h3>
                    <p class="role-desc">আপনার পণ্য বিক্রি করুন দেশের শীর্ষ ক্রেতাদের কাছে</p>
                    
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> ১০০০০+ সক্রিয় ক্রেতা</li>
                        <li><i class="fas fa-check-circle"></i> পণ্য তালিকা আপলোড ও ব্যবস্থাপনা</li>
                        <li><i class="fas fa-check-circle"></i> কোটেশন ও অফার ম্যানেজমেন্ট</li>
                        <li><i class="fas fa-check-circle"></i> বিক্রয় বিশ্লেষণ ও রিপোর্ট</li>
                    </ul>
                    
                    <div style="margin-top: 20px; color: #0b2b4f; font-weight: 600;">
                        <i class="fas fa-arrow-right"></i> সরবরাহকারী হিসেবে লগইন করুন
                    </div>
                </div>
            </div>

            <!-- অ্যাকশন বাটন -->
            <div class="action-section">
                <button class="continue-btn" id="continueBtn" onclick="handleContinue()" disabled>
                    <span>চলুন শুরু করি</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

            <!-- ট্রাস্ট ব্যাজ -->
            <div class="trust-badge">
                <span><i class="fas fa-shield-alt"></i> ১২৮-বিট এনক্রিপশন</span>
                <span><i class="fas fa-clock"></i> ২৪/৭ সাপোর্ট</span>
                <span><i class="fas fa-handshake"></i> ১০০০০+ সন্তুষ্ট ব্যবহারকারী</span>
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
                showToast('ক্রেতা হিসেবে লগইন করবেন', 'info');
            } else {
                document.getElementById('sellerRole').classList.add('selected');
                showToast('সরবরাহকারী হিসেবে লগইন করবেন', 'info');
            }
            
            // কন্টিনিউ বাটন এনাবল
            document.getElementById('continueBtn').disabled = false;
        }

        // কন্টিনিউ হ্যান্ডলার - এখানেই রিডিরেক্ট হবে
        function handleContinue() {
            if (!selectedRole) {
                showToast('অনুগ্রহ করে আপনার ভূমিকা নির্বাচন করুন', 'info');
                return;
            }

            // কন্টিনিউ বাটন ডিজেবল এবং লোডিং দেখান
            const continueBtn = document.getElementById('continueBtn');
            const originalText = continueBtn.innerHTML;
            
            continueBtn.innerHTML = `
                <span class="loading-spinner"></span>
                <span>রিডিরেক্ট হচ্ছে...</span>
            `;
            continueBtn.disabled = true;

            // রিডিরেক্ট করার আগে টোস্ট দেখান
            if (selectedRole === 'buyer') {
                const buyerLogin = "{{ route('buyer.login') }}";
                
                // সিমুলেট API কল বা ডিলে - তারপর রিডিরেক্ট
                setTimeout(() => {
                    // অ্যাকচুয়াল রিডিরেক্ট - ক্রেতা ড্যাশবোর্ড
                    window.location.href = buyerLogin;
                    
                    // ডেমো হিসেবে এলার্ট (শুধু ডেভেলপমেন্টের জন্য)
                    // alert('রিডিরেক্ট টু: buyer-dashboard.html');
                }, 2000);
                
            } else {
                const sellerLogin = "{{ route('seller.login') }}";
                
                setTimeout(() => {
                    // অ্যাকচুয়াল রিডিরেক্ট - সরবরাহকারী ড্যাশবোর্ড
                    window.location.href = sellerLogin;
                    
                    // ডেমো হিসেবে এলার্ট (শুধু ডেভেলপমেন্টের জন্য)
                    // alert('রিডিরেক্ট টু: seller-dashboard.html');
                }, 2000);
            }
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

        // পেজ লোডে কোন রোল সিলেক্ট করা নেই
        window.onload = function() {
            console.log('BizConnect Pro - রোল সিলেক্টর রেডি');
        };
    </script>
</body>
</html>