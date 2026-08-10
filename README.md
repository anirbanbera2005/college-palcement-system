# 🎓 College Placement Information System

## 📖 About
The **College Placement Information System** is a lightweight, web-based platform designed specifically for B.Tech CSE students. It streamlines the campus placement process by allowing students to register securely, browse available job listings, and submit applications directly through the portal. Built as a streamlined application, it utilizes simple flat-file storage, making it incredibly fast to load, simple to understand, and easy to deploy on any standard PHP hosting.

## ✨ Features
* **Secure Student Registration:** Account creation utilizing PHP password hashing for security.
* **Dynamic Job Board:** View active job opportunities including job title, hiring company, and location.
* **Easy Application System:** Seamless form submission for students applying to desired job roles.
* **Lightweight Storage:** Uses flat-file text documents (`.txt`) for data management, removing the need for a complex SQL database setup.
* **Instant Feedback:** Browser alerts to confirm successful registrations and applications.

## 📂 File Structure
```text
college-placement-system/
├── index.html       # Main landing page and welcome screen
├── register.php     # Student registration form and data processing
├── jobs.php         # Tabular display of available job listings
├── apply.php        # Job application form and processing logic
├── students.txt     # Database file storing registered student credentials
└── applications.txt # Database file logging all submitted job applications

🚀 Setup & Procedure to Run (Local)

To run this project locally on your machine for testing or development, follow these steps:

Install a Local Web Server: Download and install software like XAMPP or WAMP to run PHP locally.

Setup the Directory: Clone or extract the project folder into your server's root directory:

For XAMPP: Place the folder in C:\xampp\htdocs\

Start the Server: Open your XAMPP/WAMP control panel and start the Apache service.

Run in Browser: Open your web browser and navigate to:
http://localhost/your-folder-name/index.html


🌐 Live Deployment
The project is deployed and currently hosted live. You can visit the working application here:

Live Link: http://college-placement-system.page.gd

**Author**
Anirban Bera

B.Tech in Computer Science & Engineering University of Engineering & Management, Kolkata


📄 License
This project is licensed under the MIT License. You are free to use, modify, and distribute this software for educational and personal projects.
