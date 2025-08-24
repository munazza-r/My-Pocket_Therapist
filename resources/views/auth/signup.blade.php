<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up - My Pocket Therapist</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Instrument Sans', sans-serif;
            background: rgb(240, 230, 220);
            min-height: 100vh;
        }
        
        .split-container {
            display: flex;
            min-height: 100vh;
        }
       
        
        .left-panel {
            flex: 1;
            background: rgb(235, 216, 209);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .left-panel img {
            max-width: 60%;
            height: auto;
            border-radius: 0;
            box-shadow: none;
        }
        
        .right-panel {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(255, 255, 255);
            padding: 15px;
        }
        .signup-container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 0px 40px rgba(139, 69, 19, 0.7);
            background: #fff;
        }
        .logo {
            font-size: 28px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }
        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 16px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: rgb(139, 69, 19);
            font-weight: 500;
            font-size: 14px;
        }
        .form-control {
            width: 85%;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 16px;
            color: rgb(139, 69, 19);
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        .form-control:focus {
            outline: none;
            border-color: rgb(139, 69, 19);
            background: white;
            box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.1);
        }
        .btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, rgb(160, 82, 45) 0%, rgb(139, 69, 19) 100%);
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
            color: rgb(139, 69, 19);
            background: rgba(160, 82, 45, 0.3);
        }
        .error-message {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
            text-align: left;
        }
        .login-link {
            margin-top: 20px;
            color: rgb(139, 69, 19);
            font-size: 14px;
            text-align: center;
        }
        .login-link a {
            color: rgb(160, 82, 45);
            text-decoration: none;
            font-weight: 500;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
        .back-link {
            margin-top: 20px;
            color: rgb(139, 69, 19);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .input-icon {
            position: relative;
        }
        .input-icon input {
            padding-left: 45px;
        }
        .input-icon::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            background-size: contain;
            background-repeat: no-repeat;
        }
        .name-icon::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23666' viewBox='0 0 24 24'%3E%3Cpath d='M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z'/%3E%3C/svg%3E");
        }
        .email-icon::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23666' viewBox='0 0 24 24'%3E%3Cpath d='M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z'/%3E%3C/svg%3E");
        }
        .password-icon::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23666' viewBox='0 0 24 24'%3E%3Cpath d='M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10z'/%3E%3C/svg%3E");
        }
        
        @media (max-width: 900px) {
            .split-container {
                flex-direction: column;
            }
            .left-panel, .right-panel {
                flex: none;
                width: 100%;
                min-height: 300px;
            }
            .left-panel {
                justify-content: flex-start;
                padding-top: 40px;
                padding-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="split-container">
        <div class="left-panel">
            <img src="{{ asset('images/signup_page.png') }}" alt="Encouragement" />
        </div>
        <div class="right-panel">
            <div class="signup-container">
                <div class="logo">My Pocket Therapist</div>
                <div class="subtitle">Your mental health journey starts here!</div>
                <form method="POST" action="{{ url('/signup') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <div class="input-icon name-icon">
                            <input 
                                type="text" 
                                id="name"
                                name="name" 
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter your full name" 
                                value="{{ old('name') }}"
                                required 
                            />
                        </div>
                        @error('name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="input-icon email-icon">
                            <input 
                                type="email" 
                                id="email"
                                name="email" 
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Enter your email" 
                                value="{{ old('email') }}"
                                required 
                            />
                        </div>
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-icon password-icon">
                            <input 
                                type="password" 
                                id="password"
                                name="password" 
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Create a password" 
                                required 
                            />
                        </div>
                        @error('password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <div class="input-icon password-icon">
                            <input 
                                type="password" 
                                id="password_confirmation"
                                name="password_confirmation" 
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                placeholder="Confirm your password" 
                                required 
                            />
                        </div>
                        @error('password_confirmation')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn">Sign Up</button>
                </form>
                <div class="login-link">
                    <a href="{{ route('login') }}">Already have an account? Login</a>
                </div>
                <div class="back-link">
                    <a href="{{ url('/') }}">← Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
