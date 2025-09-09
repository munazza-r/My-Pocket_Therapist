# 🌸 My Pocket Therapist  

> A supportive and user-friendly mental health platform offering mood tracking, journaling, appointment booking, peer support, and more — all in one place.  

---

## 📑 Table of Contents
1. [✨ Features](#-features)
2. [👩‍⚕️ Our Team](#-our-team)
3. [🎨 Frontend Design](#-frontend-design)
4. [🚧 Current Limitations](#-current-limitations)
5. [🛠️ Tech Stack](#️-tech-stack)
6. [🚀 How to Run Locally](#-how-to-run-locally)
7. [🤝 Future Roadmap](#-future-roadmap)
8. [📜 License](#-license)

---

## ✨ Features

### 🔐 Authentication
- **Sign Up & Login:** Create and access a secure account.  
- **Forgot Password:** Currently a placeholder feature:
  - Prompts user for email and checks if it exists.  
  - Displays “reset link sent” or “no user found.”  
  - Reset links are **not functional yet** as email services aren’t configured.  
- **Profile Settings:** Change password, delete account, view booked appointments.  
- **Logout** button available at the top-right of the dashboard.  

---

### 🏠 Dashboard
Once logged in, users see **8 interactive feature cards**:  

#### 1. Mood Tracker  
- Choose from **6 moods**: 😊 Happy, 😌 Calm, 😐 Neutral, 😔 Sad, 😰 Anxious, 😡 Angry.  
- Saves moods with **date and time**.  
- Recent mood history shows the **last 10 entries**.

#### 2. Personal Journal  
- Write and save your thoughts with **date and time**.  
- Delete previous entries.  
- *(Future plan: Add “Edit” button for entries.)*

#### 3. Book Therapy Appointment  
- View **5 doctors** with:
  - Name, picture, title (Psychiatrist/Counselor/Psychologist), specialization, and location.  
- Book sessions **Sunday to Thursday, 12 PM – 7 PM**.  
- Add optional notes during booking.  
- *(Future plan: Add more doctors.)*

#### 4. Peer Support Forums  
- Categories: ADHD Support, Depression Support, Grief & Loss, Trauma Recovery.  
- Users can create posts and comment.  
- *(Future plan: Add more forums.)*

#### 5. Daily Inspiration  
- Randomly displays **1 of 20 uplifting images/messages** on refresh.  
- *(Future plan: Expand message/image library.)*

#### 6. Learn & Grow (Articles)  
- Browse **20 educational articles** by theme (Anxiety, Depression, Therapy, Mindfulness, Trauma, All Topics).  
- Search by **keyword, title, or theme**.  
- *(Future plan: Add more articles.)*

#### 7. Daily Reminders  
- Add reminders with:
  - Title, optional description, due date/time (default: 11:59 PM).  
- Features:
  - Edit, mark complete, or delete reminders.  
  - Smart time alerts:
    - “Due in X mins” (if <30 mins left)  
    - “Due now” (if <1 min left)  
    - “Overdue” (turns red if missed).  

#### 8. Breathing Exercises  
- Guided steps for:
  - 4-7-8 Method  
  - Box Breathing  
  - Cyclic Sighing  
- *(Future plan: Add visual timers.)*

---

## 👩‍⚕️ Our Team
- **Mental Health Professionals**  
  Licensed therapists, psychologists, and counselors dedicated to your well-being.  
- **Technology Experts**  
  Developers and designers creating intuitive, secure, and accessible platforms.  
- **Support Specialists**  
  Compassionate team members assisting every step of the way.  
- **Research & Development**  
  Experts improving services based on the latest mental health research.  

---

## 🎨 Frontend Design
- Cute, colorful, and inviting user interface.  
- Feature cards **pop up on hover**; buttons **change color on hover**.  

---

## 🚧 Current Limitations
- Password reset email system is **not functional yet** (requires hosting).  
- Limited doctors, articles, and forums.  
- Journal entries cannot be edited yet.  
- Breathing exercises lack visual timers (planned feature).

---

## 🛠️ Tech Stack
- **Frontend:** HTML, CSS (custom styling and hover effects)  
- **Backend:** PHP (Laravel or raw PHP scripts)  
- **Database:** MySQL  
- **Hosting:** Planned for deployment with email integration.  

---

## 🚀 How to Run Locally
1. Clone the repository:  
   ```bash
   git clone https://github.com/your-username/my-pocket-therapist.git
   cd my-pocket-therapist
   ```

2. Import the provided MySQL database schema.

3. Start a PHP server (XAMPP, Laragon, WAMP, etc).

4. Start the server using the command
```bash
php artisan serve
```



