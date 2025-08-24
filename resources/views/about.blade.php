<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - My Pocket Therapist</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(100deg,rgb(52, 37, 69) 30%,rgb(159, 141, 179) 80%);
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
            font-size: 1.5rem;
            font-weight: 600;
            color: rgb(71, 46, 108);
            display: flex;
            align-items: center;
        }
        
        .logo img {
            margin-top:10px;
            height: 140px;
            width: auto;
        }

        .nav-links a {
            text-decoration: none;
            color: rgb(255, 255, 255);
            margin-left: 2rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: rgb(0, 0, 0);
        }

        .back-btn {
            background:rgb(52, 37, 69);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: rgb(159, 141, 179);
            transform: translateY(-2px);
        }

        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .hero-section {
            padding-top: 4rem;  
            margin-bottom: 2rem; 
            text-align: center;
            color: white;
           
        }

        .hero-section h1 {
            font-size: 3.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }


        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .content-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .content-card h3 {
            color: rgb(52, 37, 69);
            margin-bottom: 1rem;
            font-size: 1.8rem;
        }

        .content-card p {
            color: rgb(0, 0, 0);
            line-height: 1.8;
        }

        .mission-section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 3rem;
            border-radius: 20px;
            margin: 3rem 0;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .mission-section h2 {
            color: rgb(52, 37, 69);
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .mission-section p {
            font-size: 1.2rem;
            color: rgb(52, 37, 69);
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .team-section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 20px;
            margin: 3rem 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .team-section h2 {
            color: rgb(52, 37, 69);
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .team-member {
            text-align: center;
            padding: 1.5rem;
            border-radius: 15px;
            background: rgba(102, 126, 234, 0.1);
            transition: transform 0.3s ease;
            box-shadow:  5px 5px 0px rgba(0, 0, 0, 0.5);
        }

        .team-member:hover {
            transform: translateY(-3px);
        }

        .team-member h4 {
            color:rgb(52, 37, 69);
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }

        .team-member p {
            color: rgb(0,0,0);
            font-size: 0.8rem;
        }

        .footer {
            background: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section p {
                font-size: 1.1rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .content-grid {
                grid-template-columns: 1fr;
            }
            
            .main-content {
                padding: 1rem;
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
                <a href="{{ route('welcome') }}" class="back-btn">← Back to Home</a>
            </div>
        </nav>
    </header>

    <main class="main-content">
        <section class="hero-section">
            <h1>Know Our Story</h1>
        </section>

        <div class="content-grid">
            <div class="content-card">
                <h3>Our Inspiration</h3>
                <p>My Pocket Therapist was born from a simple yet powerful vision - to make mental health support accessible to everyone, everywhere. Seeking help can often be challenging,  we're here to shatter those barriers and lend you a hand to guide you out of the darkness.</p>
            </div>
            
            <div class="content-card">
                <h3>Our Aim</h3>
                <p>We aim to combine cutting-edge technology with evidence-based therapeutic practices to create a comprehensive mental wellness platform. Our approach is personalized, compassionate, and designed to help you heal at your own pace.</p>
            </div>
            
            <div class="content-card">
                <h3>Our Purpose</h3>
                <p>We're committed to providing a safe, secure, and supportive environment where you can explore your mental health needs, track your progress, and build lasting wellness habits that work for you.</p>
            </div>
        </div>

        <section class="mission-section">
            <h2>Our Mission</h2>
            <p>To democratize mental health care by providing accessible, affordable, and effective therapeutic support to individuals worldwide. We, at My Pocket Therapist, believe that everyone deserves access to quality mental health resources, regardless of their location, schedule, or financial situation.</p>
        </section>

        <section class="team-section">
            <h2>Get to know our Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <h4>Mental Health Professionals</h4>
                    <p>Licensed therapists, psychologists, and counselors dedicated to your well-being</p>
                </div>
                <div class="team-member">
                    <h4>Technology Experts</h4>
                    <p>Developers and designers creating intuitive, secure, and accessible platforms</p>
                </div>
                <div class="team-member">
                    <h4>Support Specialists</h4>
                    <p>Compassionate team members ready to assist you every step of the way</p>
                </div>
                <div class="team-member">
                    <h4>Research & Development</h4>
                    <p>Experts continuously improving our services based on the latest mental health research</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 My Pocket Therapist. All rights reserved.</p>
    </footer>
</body>
</html>
