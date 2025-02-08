# Laravel Web Application

## 📌 Overview
This is a Laravel-based web application for **Latvijas AsinsVadu Asociācija (LAVA)**. It can be viewed using this link: [lavalatvija.org](https://lavalatvija.org) The application includes:
- A responsive frontend with Bootstrap.
- Google Maps integration.
- Language switching (Latvian and English).
- A contact form with email functionality.
- Security measures including CSRF protection and rate limiting.

---

## ⚙️ Installation Guide
### **1️⃣ Clone the Repository**
```sh
git clone https://github.com/your-repo/laravel-app.git
cd laravel-app
```

### **2️⃣ Install Dependencies**
```sh
composer install
npm install
```

### **3️⃣ Configure Environment**
Copy the example `.env` file and set up your environment variables:
```sh
cp .env.example .env
```
Edit the `.env` file:
```ini
APP_NAME="LAVA Website"
APP_URL=http://localhost

# Database (Optional if using database)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db
DB_USERNAME=your_user
DB_PASSWORD=your_password

# Google Maps API Key
GOOGLE_MAPS_API_KEY=your_google_maps_key

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="LAVA Website"
```

### **4️⃣ Generate Application Key**
```sh
php artisan key:generate
```

### **5️⃣ Run Migrations (If using database)**
```sh
php artisan migrate
```

### **6️⃣ Serve the Application**
```sh
php artisan serve

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

### **Mail Configuration (`.env` settings required)**
```ini
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="LAVA Website"
```

To send an email, use the following command:
```php
Mail::to('your-email@gmail.com')->send(new ContactFormMail($validatedData));
```

---

## 🌎 Google Maps Integration
Google Maps is used to display an address marker.

### **Google Maps API Key (`.env`)**
```ini
GOOGLE_MAPS_API_KEY=your_google_maps_key
```
Make sure the API key is **restricted to your domain** for security.

---

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


