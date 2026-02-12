# Leander Dylan Broñola's profile portfolio

### Project Description

A personal portfolio website built with the Laravel framework. This project showcases my professional identity, academic background, and technical work through a clean, multi-page web interface.

---

### Project Preview

#### **Main Portfolio Page**

*The landing page featuring my professional introduction.*

> **Leander Dylan Broñola**
> **BS Information Systems**
> *Welcome to my digital space where I showcase my journey and skills.*
> ![Main Portfolio Page](SS/ss1.jpg)

#### **Sub-Page: About Me**

*A detailed look at my background and aspirations.*

> **Biography:** [Brief text about your history and interests]
> **Skills:** [List of technologies and soft skills]

#### **Sub-Page: My First Project**

*A spotlight on my initial technical milestone.*

> **Project Title:** [Name of your first project]
> **Description:** [A short summary of what the project does and the tech stack used.]

---

### Installation & Local Setup

Follow these steps in the exact order provided to get the project running on your local machine.

#### **Step 1: Install PHP Dependencies**

Run the following command to install the required Laravel packages:

```bash
composer install

```

#### **Step 2: Install Frontend Dependencies**

Install the necessary Node.js modules for the UI:

```bash
npm install

```

#### **Step 3: Environment Setup**

Create your environment configuration file:

1. Copy `.env.example` and rename it to `.env`.
2. Generate your unique application key:
```bash
php artisan key:generate

```



#### **Step 4: Database Configuration**

Update your database credentials in the `.env` file, then run the migrations:

```bash
php artisan migrate

```

#### **Step 5: Compile Assets (Required)**

**Before running the local server**, you must start the Vite development server to compile your CSS and JavaScript:

```bash
npm run dev

```

#### **Step 6: Start the Local Server**

In a **separate** terminal window, start the Laravel development server:

```bash
php artisan serve

```

**Access the project at:** `http://127.0.0.1:8000`
