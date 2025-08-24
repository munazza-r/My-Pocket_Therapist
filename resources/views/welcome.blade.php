<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Pocket Therapist - Your Mental Health Companion</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles -->
            <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Instrument Sans', sans-serif;
            background: linear-gradient(135deg, rgb(240, 230, 220) 0%, rgb(235, 216, 209) 100%);
            color: #333;
            line-height: 1.6;
        }
        
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 2rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(139, 69, 19, 0.1);
            height: 80px;
            display: flex;
            align-items: center;
        }
        
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            height: 100%;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 600;
            color: rgb(139, 69, 19);
            display: flex;
            align-items: center;
        }
        
        .logo img {
            margin-top:10px;
            height: 140px;
            width: auto;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
        }
        
        .nav-links a {
            text-decoration: none;
            color: rgb(87, 44, 13);
            font-weight: 700;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: rgb(139, 69, 19);
        }
        
        .hero {
            padding: 8rem 2rem 4rem;
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, rgb(65, 37, 24) 30%, rgb(209, 84, 149) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero p {
            font-size: 1.25rem;
            font-weight: 600;
            color: #000;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, rgb(69, 43, 31) 0%, rgb(139, 69, 19) 100%);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            background: rgb(191, 130, 101);
            color: white;
        }
        
        .btn-secondary {
            background: white;
            color: rgb(139, 69, 19);
            border: 2px solid rgb(139, 69, 19);
        }
        
        .btn-secondary:hover {
            background: rgb(139, 69, 19);
            color: white;
        }
        
        .features {
            padding: 4rem 2rem;
            background: white;
        }
        
        .features-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .features h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .feature-card {
            background: rgb(81, 46, 28);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            background: rgb(100, 63, 48);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(rgb(128, 86, 69));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.5rem;
        }

        
        .feature-card h3 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: white;
        }
        
        .feature-card p {
            color: #e0e0e0;
            line-height: 1.6;
        }
        
        .footer {
            background: rgb(77, 53, 36);
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 200px;
            }
            
            .nav-links {
                display: none;
            }
        }
            </style>
    </head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="logo">
                <img src="{{ asset('images/mpt_logo.png') }}" alt="My Pocket Therapist Logo">
            </div>
            <div class="nav-links">
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('login') }}">Already a member?</a>
                <a href="{{ route('register') }}">New to Therapy?</a>
            </div>
            </nav>
        </header>

    <main>
        <section class="hero">
            <h1>My Pocket Therapist</h1>
            <p>Your Mental Wellness Companion, always just a click away!<br> 
                Sign Up and embark on this journey with us today.</p>
            <div class="cta-buttons">
                <a href="{{ route('register') }}" class="btn btn-primary">Get Started Today</a>
                <a href="#features" class="btn btn-secondary">Learn More</a>
                </div>
        </section>

        <section class="features" id="features">
            <div class="features-container">
                <h2>Why Choose My Pocket Therapist?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">👨🏻‍⚕️</div>
                        <h3>Professional Support</h3>
                        <p>Connect with licensed therapists and mental health professionals who understand your unique needs and challenges.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📱</div>
                        <h3>Always Accessible</h3>
                        <p>Get 24/7 support, whenever you need it. Our platform is available on all devices, making help just a click away.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📊</div>
                        <h3>Progress Tracking</h3>
                        <p>Monitor your mental health journey with detailed progress reports and mood tracking tools to see your improvement over time.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🔒</div>
                        <h3>Complete Privacy</h3>
                        <p>Your mental health journey is private and secure. We use industry-standard encryption to protect your personal information.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🎯</div>
                        <h3>Personalized Care</h3>
                        <p>Receive tailored therapy approaches and recommendations based on your specific needs and preferences.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">💪</div>
                        <h3>Build Resilience</h3>
                        <p>Learn coping strategies, mindfulness techniques, and tools to build emotional resilience and mental strength.</p>
                    </div>
                </div>
            </div>
        </section>
            </main>

    <footer class="footer">
        <p>&copy; 2024 My Pocket Therapist. All rights reserved.</p>
    </footer>
    </body>
</html>
