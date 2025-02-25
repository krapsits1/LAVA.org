# Laravel Web Application

## 📌 Overview
This is a Laravel-based web application for **Latvijas AsinsVadu Asociācija (LAVA)**. It can be viewed using this link: [lavalatvija.org](https://lavalatvija.org) The application includes:
- A responsive frontend with Bootstrap.
- Google Maps integration.
- Language switching (Latvian and English).
- A contact form with email functionality.
- Security measures including CSRF protection and rate limiting.

---

## 🚀 Features
✅ **Fully Responsive Design** (Bootstrap 5)  
✅ **Language Switching** (Latvian & English)  
✅ **Google Maps Integration**  
✅ **Contact Form with Email Sending**  
✅ **Security Measures:**
  - CSRF Protection
  - Rate Limiting (`throttle:5,1`)
  - Google reCAPTCHA
✅ **Cookie Policy & Privacy Notice**

---

## 📧 Contact Form & Email Sending
The contact form allows users to send messages via email. Laravel's built-in **Mail** system is used.

---

## 🌎 Google Maps Integration
Google Maps is used to display an address marker.


## 🔐 Security Implementations
**1️⃣ CSRF Protection** – Prevents cross-site request forgery (Laravel handles it automatically).  
**2️⃣ Rate Limiting** – Limits form submissions to prevent spam (`throttle:5,1`).  
**3️⃣ Cookie Policy Compliance** – Users are informed about cookie usage.  

---

## 📜 Privacy Policy (GDPR & CCPA Compliance)
This application uses **session cookies** (`laravel_session`, `XSRF-TOKEN`) and **email submission data**. A privacy policy page is included.

---

## 👨‍💻 Contributors
- **Emīls Vētra** (Developer)


