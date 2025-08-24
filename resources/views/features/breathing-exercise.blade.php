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


        .btn {
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
            margin-bottom: 2rem;
        }

        .btn-secondary {
            background: white;
            color: rgb(166, 95, 129);
            border: 2px solid rgb(234, 191, 234);
            padding: 1rem 2rem;
            border-radius: 25px;
        }
        
        .btn-secondary:hover {
            background: rgb(234, 191, 234);
            border: 2px solid rgb(234, 191, 234);
            color: black;
        }

        .exercise {
            background: white;
            padding: 3rem 3rem;
            border-radius: 20px;
            margin-bottom: 2rem;
            box-shadow: 1px 1px 10px rgba(1,1,1, 0.5);
            text-align: left;
            font-size: 1.5rem;
            color: rgb(166, 95, 129);
            text-decoration: none;  
            display: block;          
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            font-weight: bold;
        }

        .exercise:hover {
            transform: translateY(-5px);
            box-shadow: 2px 2px 15px rgba(1,1,1,0.6);
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
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>  

<div class="main-content">
    <div class="btn">
        <a href="{{ route('dashboard') }}" class="btn-secondary">← Back to Dashboard</a>
    </div>

    <div class="page-header">
        <h1>Breathing exercises</h1>
        <p>Try one of these to get rid of stress and regulate your nervous system.</p>
    </div> 

    <a href="{{ route('4-7-8') }}" class="exercise">4-7-8 Method</a>
    <a href="{{ route('box-breathing') }}" class="exercise">Box Breathing</a>
    <a href="{{ route('cyclic-sighing') }}" class="exercise">Cyclic Sighing</a>
</div>
</body>
