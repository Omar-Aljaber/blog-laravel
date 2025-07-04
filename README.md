# Laravel Basics – Task Management App

## ⚙️ Project Installation Steps

1. Clone the repository:

```bash
git clone https://github.com/HsoubAcademy/laravel_basics.git
cd laravel_basics
```

2. Create a `.env` file and set up your database connection:

```bash
cp .env.example .env
```

Edit `.env` and update the database settings:

```env
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

3. Install PHP dependencies:

```bash
composer install
```

4. Install Node.js dependencies:

```bash
npm install
```

5. Compile frontend assets:

```bash
npm run dev
```

6. Generate the application key:

```bash
php artisan key:generate
```

7. Run database migrations:

```bash
php artisan migrate
```

8. Create the storage symbolic link:

```bash
php artisan storage:link
```

---

## 🚀 Run the Project

Start the local development server:

```bash
php artisan serve
```

Open the URL shown in the terminal (usually `http://127.0.0.1:8000`) in your browser.

---

Happy coding! 🚀

