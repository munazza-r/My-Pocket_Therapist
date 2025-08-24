<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Journal - My Pocket Therapist</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(100deg,rgb(172, 208, 196) 30%,rgb(206, 225, 240) 100%);
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
            background: rgb(74, 141, 124);
            font-weight: 600;
            padding: 1rem 2rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        
        .nav-links a:hover {
            background: rgb(75, 135, 184);
            color: white;
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
            color: rgb(39, 137, 218);
            margin-bottom: 0.5rem;
        }
        
        .page-header p {
            color: black;
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
            color: rgb(35, 144, 117);
            border: 2px solid rgb(35, 144, 117);
            padding: 1rem 2rem;
            border-radius: 25px;
        }
        
        .btn-secondary:hover {
            background: rgb(97, 163, 218);
            border: 2px solid white;
            color: white;
        }

        .entry-box textarea {
            width: 100%;          
            height: 150px;
            padding: 1rem;
            font-size: 1rem;
            color: rgb(10, 72, 57);
            border: 2px solid rgb(35, 144, 117);
            border-radius: 10px;
            resize: vertical;
            outline: none;
            transition: border 0.3s ease;
            placeholder-color : black;
        }

        .entry-box textarea:focus {
            border: 2px solid rgb(40, 102, 152);   
        }

        .entry-box textarea::placeholder {
            color: black;
            opacity: 1.0;
        }

        .button-container {
            text-align: right;
            margin-top: 1rem;
        }

        .btn-primary {
            background: rgb(35, 144, 117);
            color: white;
            border: 2px solid rgb(35, 144, 117);
            padding: 1rem 2rem;
            border-radius: 25px;
        }

        .btn-primary:hover {
            background: rgb(40, 102, 152);
            border: 2px solid rgb(40, 102, 152);
        }

        .alert {
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            text-align: center;
        }

        .alert-success {
            background: rgba(76, 175, 80, 0.1);
            color: #2e7d32;
            border: 1px solid #4caf50;
        }

        .alert-error {
            background: rgba(244, 67, 54, 0.1);
            color: #c62828;
            border: 1px solid #f44336;
        }

        .previous-entries {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            margin-top: 2rem;
            box-shadow: 1px 1px 10px rgba(1,1,1, 0.5);
        }

        .previous-entries h2 {
            color: rgb(39, 137, 218);
            margin-bottom: 1.5rem;
            text-align: center;
            font-size: 2rem;
        }

        .entries-list {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .entry-item {
            background: rgba(172, 208, 196, 0.1);
            padding: 1.5rem;
            border-radius: 15px;
            border-left: 4px solid rgb(35, 144, 117);
        }

        .entry-content {
            color: #333;
            line-height: 1.6;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        .entry-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
            color: #666;
        }

        .entry-info {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .entry-actions {
            display: flex;
            align-items: center;
        }

        .delete-form {
            margin: 0;
        }

        .btn-delete {
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 50%;
            transition: all 0.3s ease;
            color: #666;
        }

        .btn-delete:hover {
            background: rgba(244, 67, 54, 0.1);
            color: #f44336;
            transform: scale(1.1);
        }

        .entry-date {
            font-weight: 600;
            color: rgb(35, 144, 117);
        }

        .entry-time {
            color: #888;
        }

        .no-entries {
            text-align: center;
            color: #666;
            font-style: italic;
            padding: 2rem;
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
            <h1>Journal Entries</h1>
            <p>Feeling Overwhelmed? Jot down your thoughts here.</p>
        </div>
    
        <div class="entry-box">
            <form action="{{ route('journal.store') }}" method="POST">
                @csrf
                <textarea name="content" placeholder="What's on your mind?" required></textarea>
                <div class="button-container">
                    <button type="submit" class="btn btn-primary">Enter</button>
                </div>
            </form>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        <div class="previous-entries">
            <h2>Previous Journal Entries</h2>
            @if($journals->count() > 0)
                <div class="entries-list">
                    @foreach($journals as $journal)
                        <div class="entry-item">
                            <div class="entry-content">{{ $journal->content }}</div>
                            <div class="entry-meta">
                                <div class="entry-info">
                                    <span class="entry-date">{{ $journal->created_at->format('F j, Y') }}</span>
                                    <span class="entry-time">{{ $journal->created_at->format('g:i A') }}</span>
                                </div>
                                <div class="entry-actions">
                                    <form action="{{ route('journal.destroy', $journal) }}" method="POST" class="delete-form" onsubmit="return confirm('Are you sure you want to delete this journal entry?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete" title="Delete entry">
                                            🗑️
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="no-entries">No journal entries yet. Start writing to see your entries here!</p>
            @endif
        </div>
    </div>