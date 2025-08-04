<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password - My Pocket Therapist</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Instrument Sans', sans-serif;
            background: rgb(221, 205, 200);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .forgot-container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 0px 40px rgba(168, 134, 134, 1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .logo {
            font-size: 28px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 16px;
        }
        .form-group {
            margin-bottom: 10px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: rgb(63, 41, 35);
            font-weight: 500;
            font-size: 14px;
        }
        .form-control {
            width: 80%;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 16px;
            color: rgb(63, 35, 45);
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        .form-control:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        .btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg,rgb(163, 70, 98) 0%,rgb(63, 35, 45) 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        .btn:hover {
            transform: translateY(-2px);
            color: rgb(63, 35, 45);
            background: rgba(204, 25, 52, 0.3);
        }
        .back-link {
            margin-top: 20px;
            color: rgb(63, 35, 45);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="forgot-container">
        <div class="logo">My Pocket Therapist</div>
        <div class="subtitle">Forgot your password? No big deal, here's the reset link.</div>
        
        <form method="POST" action="{{ url('/forgot-password') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input 
                    type="email" 
                    id="email"
                    name="email" 
                    class="form-control"
                    placeholder="Enter your email" 
                    required 
                />
            </div>
            
            <button type="submit" class="btn">Send Reset Link</button>
        </form>
        
        <div class="back-link">
            <a href="{{ url('/login') }}">← Back to Login</a>
        </div>
    </div>
</body>
</html> 