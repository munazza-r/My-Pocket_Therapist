<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breathing Exercises - My Pocket Therapist</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(100deg,rgb(166, 95, 129) 20%,rgb(234, 191, 234) 100%);
            min-height: 100vh;
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
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }
        
        .logo img {
            height: 140px;
            width: auto;
            margin-top: 10px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .nav-links a {
            text-decoration: none;
            color: white;
            background: rgb(166, 95, 129);
            font-weight: 600;
            padding: 1rem 2rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        
        .nav-links a:hover {
            background: rgb(234, 191, 234);
            color: rgb(166, 95, 129);
        }

        .main-content {
            margin-top: 100px;
            padding: 2rem;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .page-header {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            margin-bottom: 2rem;
            box-shadow: 1px 1px 10px rgba(1,1,1, 0.5);
            text-align: center;
        }
        
        .page-header h1 {
            font-size: 2.5rem;
            color: rgb(166, 95, 129);
            margin-bottom: 0.5rem;
        }
        
        .page-header p {
            color: rgb(55, 28, 41);
            font-size: 1.1rem;
        }

        .page-header h1 {
            font-size: 2.5rem;
            color: rgb(166, 95, 129);
            margin-bottom: 0.5rem;
        }

        .steps-container {
            display: grid;
            gap: 1.5rem;
        }

        .step-card {
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: 1px 1px 10px rgba(1,1,1, 0.3);
            font-size: 1.1rem;
            color: rgb(55, 28, 41);
            transition: transform 0.2s ease, box-shadow 0.2s ease; 
        }

        .step-card:hover {
            transform: translateY(-5px); 
            box-shadow: 2px 2px 15px rgba(1,1,1,0.6); 
        }

        .back-btn {
            display: inline-block;
            float:right;
            margin-top: 2rem;
            text-decoration: none;
            background: rgb(234, 191, 234);
            color: rgb(166, 95, 129);
            padding: 1rem 2rem;
            border-radius: 25px;
            font-weight: bold;
            transition: all 0.3s ease;
            border: 2px solid white;

        }

        .back-btn:hover {
            background: rgb(166, 95, 129);
            color: white;
            border: 2px solid white;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="header-content">
        <div class="logo">
            <img src="{{ asset('images/mpt_logo.png') }}" alt="My Pocket Therapist Logo">
        </div>
        <div class="nav-links">
            <a href="{{route('dashboard')}}">Dashboard</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>  

    <div class="main-content">
        <div class="page-header">
            <h1>4-7-8 Method</h1>
        </div>

        <div class="steps-container">
            <div class="step-card">1. Find a comfortable position and place your tongue behind your front teeth.</div>
            <div class="step-card">2. Inhale silently through your nose for a count of four.</div>
            <div class="step-card">3. Hold your breath for a count of seven.</div>
            <div class="step-card">4. Exhale completely through your mouth for a count of eight, making a "whoosh" sound.</div>
            <div class="step-card">5. Repeat this cycle for a total of four breaths.</div>
        </div>

        <a href="{{ route('breathing_exercise') }}" class="back-btn">←Back to Breathing Exercises</a>
    </div>
</body>
</html>
