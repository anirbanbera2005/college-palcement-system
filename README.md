# Placement Information System

This project is a web-based Placement Information System designed to help B.Tech CSE students find and apply for job opportunities. It utilizes PHP for backend logic and HTML/CSS for the frontend interface.

## Features and File Structure

*   **`index.html` (Home):** The main landing page welcoming users to the system and providing a "Register Now" button alongside a top navigation bar.
*   **`register.php` (Student Registration):** Provides a form for students to create an account using their Full Name, Email, and Password. Upon submission, the system hashes the user's password for security before storing the information.
*   **`jobs.php` (Job Listings):** Displays a tabular list of available job opportunities, showing the Job Title, Company, and Location.
*   **`apply.php` (Apply for Jobs):** Features an application form where users input their name, email, and select a job role from a dropdown menu (Software Developer, Data Analyst, or Web Designer). Upon successful submission, a JavaScript alert confirms the application.

## Data Storage

The system currently uses flat text files to store data rather than a traditional relational database:

*   **`students.txt`:** This file stores registered user accounts in a comma-separated format. Each entry records the student's name, email address, and a hashed version of their password.
*   **`applications.txt`:** This file logs all submitted job applications in a comma-separated format. Each entry records the applicant's name, email address, and the specific job role they applied for.

## Current Job Openings

The `jobs.php` page currently lists the following open positions:

| Title | Company | Location |
| :--- | :--- | :--- |
| Software Developer | Tech Corp | New York |
| Data Analyst | Data Inc | San Francisco |
| Web Designer | Creative Solutions | London |
| java developer | Elevance | kolkata |