<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Tracker - My Pocket Therapist</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
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
            gap: 2rem;
            align-items: center;
        }
        
        .nav-links a {
            text-decoration: none;
            color: rgb(33, 150, 243);
            font-weight: 600;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: rgb(25, 118, 210);
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
            box-shadow: 0 10px 30px rgba(33, 150, 243, 0.1);
            text-align: center;
        }
        
        .page-header h1 {
            font-size: 2.5rem;
            color: rgb(33, 150, 243);
            margin-bottom: 0.5rem;
        }
        
        .page-header p {
            color: #666;
            font-size: 1.1rem;
        }
        
        .mood-tracker-container {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(33, 150, 243, 0.1);
            margin-bottom: 2rem;
        }
        
        .mood-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }
        
        .mood-option {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .mood-option:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(33, 150, 243, 0.2);
        }
        
        .mood-option.selected {
            background: linear-gradient(135deg, rgb(33, 150, 243) 0%, rgb(25, 118, 210) 100%);
            color: white;
            border-color: rgb(33, 150, 243);
        }
        
        .mood-emoji {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .mood-label {
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .mood-description {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 0.5rem;
        }
        
        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
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
        
        .mood-history {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(33, 150, 243, 0.1);
        }
        
        .history-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .history-item:last-child {
            border-bottom: none;
        }
        
        .history-mood {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .history-emoji {
            font-size: 2rem;
        }
        
        .history-details h4 {
            color: rgb(33, 150, 243);
            margin-bottom: 0.25rem;
        }
        
        .history-details p {
            color: #666;
            font-size: 0.9rem;
        }
        
        .history-date {
            color: #999;
            font-size: 0.9rem;
        }
        
        .back-btn {
            margin-bottom: 2rem;
        }
        
        .no-moods {
            text-align: center;
            color: #666;
            padding: 2rem;
            font-style: italic;
        }
        
        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .error-message {
            background: #f8d7da;
            color: #721c24;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        @media (max-width: 768px) {
            .mood-options {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            }
            
            .nav-links {
                gap: 1rem;
            }
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
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="back-btn">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">← Back to Dashboard</a>
        </div>

        <div class="page-header">
            <h1>😊 Mood Tracker</h1>
            <p>How are you feeling right now? Track your emotional state and patterns over time.</p>
        </div>

        <div class="mood-tracker-container">
            <h2>Today's Mood</h2>
            <p>Select how you're feeling today:</p>
            
            <div class="mood-options">
                <div class="mood-option" onclick="selectMood(this, 'Happy')">
                    <div class="mood-emoji">😊</div>
                    <div class="mood-label">Happy</div>
                    <div class="mood-description">Feeling good and positive</div>
                </div>
                <div class="mood-option" onclick="selectMood(this, 'Calm')">
                    <div class="mood-emoji">😌</div>
                    <div class="mood-label">Calm</div>
                    <div class="mood-description">Peaceful and relaxed</div>
                </div>
                <div class="mood-option" onclick="selectMood(this, 'Neutral')">
                    <div class="mood-emoji">😐</div>
                    <div class="mood-label">Neutral</div>
                    <div class="mood-description">Feeling okay, neither good nor bad</div>
                </div>
                <div class="mood-option" onclick="selectMood(this, 'Sad')">
                    <div class="mood-emoji">😔</div>
                    <div class="mood-label">Sad</div>
                    <div class="mood-description">Feeling down or blue</div>
                </div>
                <div class="mood-option" onclick="selectMood(this, 'Anxious')">
                    <div class="mood-emoji">😰</div>
                    <div class="mood-label">Anxious</div>
                    <div class="mood-description">Worried or nervous</div>
                </div>
                <div class="mood-option" onclick="selectMood(this, 'Angry')">
                    <div class="mood-emoji">😡</div>
                    <div class="mood-label">Angry</div>
                    <div class="mood-description">Frustrated or upset</div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <button class="btn btn-primary" onclick="saveMood()">Save Today's Mood</button>
            </div>
        </div>

        <div class="mood-history">
            <h2>Recent Mood History</h2>
            <div id="mood-history-container">
                @if($moods->count() > 0)
                    @foreach($moods as $mood)
                        <div class="history-item">
                            <div class="history-mood">
                                <div class="history-emoji">{{ \App\Helpers\MoodHelper::getMoodEmoji($mood->mood_type) }}</div>
                                <div class="history-details">
                                    <h4>{{ $mood->mood_type }}</h4>
                                    <p>{{ $mood->description ?? 'No description' }}</p>
                                </div>
                            </div>
                            <div class="history-date">{{ $mood->created_at->format('M j, Y g:i A') }}</div>
                        </div>
                    @endforeach
                @else
                    <div class="no-moods">
                        <p>No mood entries yet. Start tracking your mood!</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        let selectedMood = null;
        
        // Set CSRF token for AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        function selectMood(element, mood) {
            // Remove selected class from all options
            document.querySelectorAll('.mood-option').forEach(option => {
                option.classList.remove('selected');
            });
            
            // Add selected class to clicked option
            element.classList.add('selected');
            selectedMood = mood;
        }
        
        function getMoodEmoji(moodType) {
            const emojiMap = {
                'Happy': '😊',
                'Calm': '😌',
                'Neutral': '😐',
                'Sad': '😔',
                'Anxious': '😰',
                'Angry': '😡'
            };
            return emojiMap[moodType] || '😐';
        }
        
        function saveMood() {
            if (!selectedMood) {
                alert('Please select a mood first!');
                return;
            }
            
            // Get the description for the selected mood
            const moodDescriptions = {
                'Happy': 'Feeling good and positive',
                'Calm': 'Peaceful and relaxed',
                'Neutral': 'Feeling okay, neither good nor bad',
                'Sad': 'Feeling down or blue',
                'Anxious': 'Worried or nervous',
                'Angry': 'Frustrated or upset'
            };
            
            const formData = new FormData();
            formData.append('mood_type', selectedMood);
            formData.append('description', moodDescriptions[selectedMood]);
            
            fetch('{{ route("mood.store") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json',
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    showMessage('Mood saved successfully!', 'success');
                    
                    // Reset selection
                    document.querySelectorAll('.mood-option').forEach(option => {
                        option.classList.remove('selected');
                    });
                    selectedMood = null;
                    
                    // Refresh mood history
                    loadMoodHistory();
                } else {
                    showMessage('Error saving mood. Please try again.', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showMessage('Error saving mood. Please try again.', 'error');
            });
        }
        
        function showMessage(message, type) {
            const messageDiv = document.createElement('div');
            messageDiv.className = type === 'success' ? 'success-message' : 'error-message';
            messageDiv.textContent = message;
            
            const container = document.querySelector('.mood-tracker-container');
            container.insertBefore(messageDiv, container.firstChild);
            
            setTimeout(() => {
                messageDiv.remove();
            }, 3000);
        }
        
        function loadMoodHistory() {
            fetch('{{ route("mood.history") }}')
            .then(response => response.json())
            .then(moods => {
                const container = document.getElementById('mood-history-container');
                
                if (moods.length === 0) {
                    container.innerHTML = '<div class="no-moods"><p>No mood entries yet. Start tracking your mood!</p></div>';
                    return;
                }
                
                let html = '';
                moods.forEach(mood => {
                    const date = new Date(mood.created_at).toLocaleDateString('en-US', {
                        month: 'short',
                        day: 'numeric',
                        year: 'numeric',
                        hour: 'numeric',
                        minute: '2-digit',
                        hour12: true
                    });
                    
                    html += `
                        <div class="history-item">
                            <div class="history-mood">
                                <div class="history-emoji">${getMoodEmoji(mood.mood_type)}</div>
                                <div class="history-details">
                                    <h4>${mood.mood_type}</h4>
                                    <p>${mood.description || 'No description'}</p>
                                </div>
                            </div>
                            <div class="history-date">${date}</div>
                        </div>
                    `;
                });
                
                container.innerHTML = html;
            })
            .catch(error => {
                console.error('Error loading mood history:', error);
            });
        }
    </script>
</body>
</html> 