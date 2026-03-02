<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title>অর্ডার ফর্ম | BizConnect Pro</title>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #1e293b;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        :root {
            --primary: #0b2b4f;
            --primary-dark: #061a30;
            --primary-light: #1e4a7a;
            --accent: #f6b83e;
            --accent-dark: #e5a42e;
            --success: #2e7d32;
            --danger: #d32f2f;
            --gray-50: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-600: #475569;
            --gray-800: #1e293b;
        }

        /* === নেভিগেশন === */
        .main-nav {
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo-icon {
            background: var(--accent);
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 1.2rem;
            color: var(--primary);
        }

        .logo-text h2 {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--primary);
            margin: 0;
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.8rem;
            color: var(--primary);
            cursor: pointer;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--gray-800);
            font-weight: 600;
            font-size: 0.95rem;
        }

        .nav-links a.active {
            color: var(--primary);
            border-bottom: 2px solid var(--accent);
            padding-bottom: 3px;
        }

        .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            padding: 8px 24px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-block;
        }

        /* === সিম্পল অর্ডার ফর্ম === */
        .order-section {
            margin: 40px 0;
        }

        .order-card {
            background: white;
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            max-width: 700px;
            margin: 0 auto;
        }

        .order-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .order-header h1 {
            font-size: 2.2rem;
            color: var(--primary);
            font-weight: 800;
            margin-bottom: 10px;
        }

        .order-header p {
            color: var(--gray-600);
            font-size: 1.1rem;
        }

        .order-header i {
            font-size: 3rem;
            color: var(--accent);
            margin-bottom: 15px;
        }

        /* প্রোডাক্ট প্রিভিউ (ছোট) */
        .product-info {
            background: var(--gray-50);
            border-radius: 15px;
            padding: 15px 20px;
            margin-bottom: 30px;
            border-left: 4px solid var(--accent);
        }

        .product-info p {
            margin: 5px 0;
            color: var(--gray-700);
        }

        .product-info strong {
            color: var(--primary);
        }

        /* ফর্ম গ্রুপ */
        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--gray-800);
        }

        .required-star {
            color: var(--danger);
            margin-left: 3px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-400);
        }

        .input-wrapper input,
        .input-wrapper textarea {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid var(--gray-200);
            border-radius: 15px;
            font-size: 0.95rem;
            background: white;
        }

        .input-wrapper textarea {
            padding-top: 15px;
            min-height: 100px;
        }

        .input-wrapper input:focus,
        .input-wrapper textarea:focus {
            border-color: var(--accent);
            outline: none;
        }

        .input-wrapper input[readonly] {
            background: var(--gray-100);
            cursor: not-allowed;
        }

        /* টার্মস */
        .terms-group {
            margin: 20px 0;
        }

        .terms-checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .terms-checkbox input[type="checkbox"] {
            width: 18px;
            height: 18px;
        }

        .terms-checkbox a {
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
        }

        /* বাটন */
        .form-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn-cancel {
            flex: 1;
            background: var(--gray-200);
            color: var(--gray-700);
            padding: 14px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            display: inline-block;
        }

        .btn-submit {
            flex: 2;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            border: none;
            padding: 14px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-submit i {
            font-size: 1.1rem;
        }

        /* ফুটার */
        footer {
            background: var(--primary-dark);
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links a {
            color: var(--gray-300);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* রেসপনসিভ */
        @media (max-width: 768px) {
            .order-card {
                padding: 25px;
            }

            .form-buttons {
                flex-direction: column;
            }

            .nav-menu {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }
        }
    </style>
</head>

<body>
    <!-- নেভিগেশন -->
    <nav class="main-nav">
        <div class="container nav-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="logo-text">
                    <h2>BizConnect</h2>
                </div>
            </div>

            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>

            <div class="nav-menu">
                <div class="nav-links">
                    <a href="{{ url('/') }}">হোম</a>
                    <a href="#">পণ্যসমূহ</a>
                    <a href="#" class="active">অর্ডার</a>
                    <a href="#">কোটেশন</a>
                </div>
                <div class="nav-buttons">
                    <a href="{{ url('buyer/dashboard') }}" class="btn-primary">ড্যাশবোর্ড</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- সিম্পল অর্ডার ফর্ম -->
    <div class="container">
        <div class="order-section">
            <div class="order-card">
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="order-header">
                    <i class="fas fa-shopping-cart"></i>
                    <h1>অর্ডার ফর্ম</h1>
                    <p>অর্ডার করতে নিচের তথ্য দিন</p>
                </div>

                <!-- প্রোডাক্ট তথ্য (ছোট) -->
                <div class="product-info">
                    <p><strong>পণ্য:</strong> {{ $product->name ?? 'পণ্যের নাম' }}</p>
                    <p><strong>সরবরাহকারী:</strong> {{ $product->seller->company ?? 'সরবরাহকারী' }}</p>
                    <p><strong>মূল্য:</strong> ৳{{ number_format($product->price ?? 0, 2) }} / ইউনিট</p>
                    <p><strong>MOQ:</strong> {{ $product->moq ?? 0 }} ইউনিট</p>
                </div>

                <form action="{{route('order.store')}}" method="POST">
                    @csrf

                    <!-- হিডেন ফিল্ড -->
                    <input type="hidden" name="product_id" value="{{ $product->id ?? '' }}">
                    <input type="hidden" name="buyer_id" value="{{ $buyer->id ?? '' }}">
                    <input type="hidden" name="unit_price" value="{{ $product->price ?? 0 }}">
                    <input type="hidden" name="company" value="{{ $buyer->company ?? '' }}">
                    <input type="hidden" name="seller_id" value="{{ $product->seller->id ?? '' }}">


                    <!-- ১. অর্ডার পরিমাণ -->
                    <div class="form-group">
                        <label>অর্ডার পরিমাণ <span class="required-star">*</span></label>
                        <div class="input-wrapper">
                            <i class="fas fa-calculator input-icon"></i>
                            <input type="number" 
                                   name="quantity" 
                                   min="{{ $product->moq ?? 1 }}" 
                                   value="{{ old('quantity', $product->moq ?? 1) }}" 
                                   placeholder="আপনার প্রয়োজনীয় পরিমাণ"
                                   required>
                        </div>
                        @error('quantity')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- ২. ডেলিভারি ঠিকানা -->
                    <div class="form-group">
                        <label>ডেলিভারি ঠিকানা <span class="required-star">*</span></label>
                        <div class="input-wrapper">
                            <i class="fas fa-map-marker-alt input-icon"></i>
                            <textarea name="delivery_address" 
                                      placeholder="আপনার সম্পূর্ণ ডেলিভারি ঠিকানা লিখুন" 
                                      required>{{ old('delivery_address', $buyer->address ?? '') }}</textarea>
                        </div>
                        @error('delivery_address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- ৩. বিশেষ নির্দেশনা (ঐচ্ছিক) -->
                    <div class="form-group">
                        <label>বিশেষ নির্দেশনা (ঐচ্ছিক)</label>
                        <div class="input-wrapper">
                            <i class="fas fa-comment input-icon"></i>
                            <textarea name="special_instructions" 
                                      placeholder="আপনার কোনো বিশেষ নির্দেশনা থাকলে লিখুন...">{{ old('special_instructions') }}</textarea>
                        </div>
                    </div>

                    <!-- টার্মস -->
                    <div class="terms-group">
                        <label class="terms-checkbox">
                            <input type="checkbox" name="terms" required>
                            <span>আমি <a href="#">শর্তাবলী</a> এবং <a href="#">গোপনীয়তা নীতি</a> মেনে চলতে সম্মতি জানাচ্ছি</span>
                        </label>
                        @error('terms')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- বাটন -->
                    <div class="form-buttons">
                        <a href="{{ url()->previous() }}" class="btn-cancel">বাতিল করুন</a>
                        <button type="submit" class="btn-submit">
                            <span>পরবর্তী ধাপ</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ফুটার -->
    <footer>
        <div class="container footer-grid">
            <div class="footer-links">
                <h4>কুইক লিংক</h4>
                <ul>
                    <li><a href="#">আমাদের সম্পর্কে</a></li>
                    <li><a href="#">সরবরাহকারী</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>সাপোর্ট</h4>
                <ul>
                    <li><a href="#">হেল্প সেন্টার</a></li>
                    <li><a href="#">প্রাইভেসি</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>যোগাযোগ</h4>
                <ul>
                    <li>ঢাকা, বাংলাদেশ</li>
                    <li>+৮৮০ ১৯৬৬-৭৭৮৮১১</li>
                </ul>
            </div>
        </div>
        <div class="container copyright">
            <p>© ২০২৬ BizConnect Pro</p>
        </div>
    </footer>

    <!-- মোবাইল মেনুর জন্য মিনিমাম JS (ঐচ্ছিক) -->
    <script>
        document.querySelector('.mobile-menu-btn')?.addEventListener('click', function() {
            const menu = document.querySelector('.nav-menu');
            menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
        });
    </script>
</body>

</html>