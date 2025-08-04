<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - My Pocket Therapist</title>
    
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
            background: linear-gradient(120deg,rgb(72, 150, 206) 30%, #bbdefb 100%);
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
            box-shadow: 0 2px 20px rgba(33, 150, 243, 0.1);
            height: 80px;
            display: flex;
            align-items: center;
        }
        
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
            height: 100%;
            padding: 0 2rem;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 140px;
            width: auto;
            margin-top: 10px;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .user-menu a {
            text-decoration: none;
            color: rgb(10, 82, 141);
            font-weight: 800;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        
        .user-menu a:hover {
            background: rgb(33, 150, 243);
            color: white;
        }
        
        .main-content {
            margin-top: 100px;
            padding: 2rem;
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .welcome-section {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(33, 150, 243, 0.1);
            text-align: center;
        }
        
        .welcome-section h1 {
            font-size: 2rem;
            color: rgb(33, 150, 243);
            margin-bottom: 0.5rem;
        }
        
        .welcome-section p {
            color: #666;
            font-size: 1.1rem;
        }
        
        .features-nav {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .nav-item {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(33, 150, 243, 0.1);
            transition: all 0.3s ease;
            text-decoration: none;
            color: #333;
            display: block;
        }
        
        .nav-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(33, 150, 243, 0.2);
            background: linear-gradient(135deg, rgb(31, 51, 68) 0%, rgb(25, 118, 210) 100%);
            color: white;
        }
        
        .nav-item:hover .nav-icon {
            transform: scale(1.1);
        }
        
        .nav-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            transition: transform 0.3s ease;
        }
        
        .nav-item h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .nav-item p {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        .quick-actions {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(33, 150, 243, 0.1);
        }
        
        .quick-actions h2 {
            color: rgb(33, 150, 243);
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .quick-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, rgb(33, 150, 243) 0%, rgb(25, 118, 210) 100%);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(33, 150, 243, 0.3);
        }
        
        .btn-secondary {
            background: white;
            color: rgb(33, 150, 243);
            border: 2px solid rgb(33, 150, 243);
        }
        
        .btn-secondary:hover {
            background: rgb(33, 150, 243);
            color: white;
        }
        
        @media (max-width: 768px) {
            .features-nav {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
            
            .quick-buttons {
                flex-direction: column;
                align-items: center;
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
            <div class="user-menu">
                <a href="#profile">Profile</a>
                <a href="#settings">Settings</a>
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        </nav>
    </header>

    <main class="main-content">
        <div class="welcome-section">
            <h1>Welcome back, {{ Auth::user()->name }}! 👋</h1>
            <p>How are you feeling today? Let's check in with your mental wellness journey.</p>
        </div>

        <div class="features-nav">
            <a href="{{ route('mood_tracker') }}" class="nav-item">
                <div class="nav-icon">🤔</div>
                <h3>Mood Tracker</h3>
                <p>What mood are you in today?</p>
            </a>
            <a href="{{ route('journal_entry') }}" class="nav-item">
                <div class="nav-icon">📝</div>
                <h3>Personal Journal</h3>
                <p>Jot down your thoughts whenever you feel overwhelmed.</p>
            </a>
            <a href="{{ route('appointment_booking') }}" class="nav-item">
                <div class="nav-icon">📅</div>
                <h3>Book Therapy Appointment</h3>
                <p>Find and book sessions with professionals.</p>
            </a>
            <a href="{{ route('peer_support_chat') }}" class="nav-item">
                <div class="nav-icon">💬</div>
                <h3>Peer Support</h3>
                <p>Connect with others on similar journeys.</p>
            </a>
            <a href="{{ route('daily_emotion_log') }}" class="nav-item">
                <div class="nav-icon">📊</div>
                <h3>Daily Emotion Log</h3>
                <p>Track your emotional patterns.</p>
            </a>
            <a href="{{ route('daily_tips') }}" class="nav-item">
                <div class="nav-icon">💡</div>
                <h3>Daily Inspiration</h3>
                <p>Daily tips and quotes you will relate to.</p>
            </a>
            <a href="{{ route('educational_resources') }}" class="nav-item">
                <div class="nav-icon">📚</div>
                <h3>Learn & Grow</h3>
                <p>Access helpful articles and resources.</p>
            </a>
            <a href="{{ route('reminders') }}" class="nav-item">
                <div class="nav-icon">🔔</div>
                <h3>Daily Reminders</h3>
                <p>Stay on top of your daily tasks.</p>
            </a>
            <a href="{{ route('breathing_exercise') }}" class="nav-item">
                <div class="nav-icon">🫁</div>
                <h3>Breathing Exercise</h3>
                <p>Take a moment to breathe and center yourself.</p>
            </a>
        </div>

    </main>

    <script>
        // Simple mood selection
        document.querySelectorAll('.mood-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.mood-option').forEach(opt => opt.classList.remove('selected'));
                this.classList.add('selected');
            });
        });
    </script>
</body>
</html>


