# Medium Clone - A Laravel 12 Full-Stack Application

This is a full-stack clone of the popular blogging platform Medium. Built with Laravel 12, Tailwind CSS, and SQLite.

## Features

*   [ ] User Authentication (Login, Register, Logout)
*   [ ] Users can create, read, update, and delete their own articles.
*   [ ] Public article and author profile pages.
*   [ ] Markdown support for writing articles.
*   [ ] Article "clapping" (likes) and comments.
*   [ ] Following other authors.
*   [ ] A personalized feed for logged-in users.

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

*   PHP >= 8.2
*   Composer
*   Node.js & NPM

1.  **Clone the repository**
    ```sh
    git clone https://github.com/AbdelhafidRahab/medium-clone.git
    cd medium-clone
    ```

2.  **Install PHP Dependencies**
    ```sh
    composer install
    ```

3.  **Install NPM Dependencies**
    ```sh
    npm install
    ```

4.  **Create your environment file**
    ```sh
    cp .env.example .env
    ```

5.  **Generate an application key**
    ```sh
    php artisan key:generate
    ```

6.  **Set up the database**
    This project uses SQLite. Simply create the database file:
    ```sh
    touch database/database.sqlite
    ```

7.  **Run the database migrations**
    ```sh
    php artisan migrate
    ```

8.  **Run the development servers**
    In one terminal, run the Vite server:
    ```sh
    npm run dev
    ```
    In a second terminal, run the Laravel server:
    ```sh
    php artisan serve
    ```

Now visit `http://127.0.0.1:8000` in your browser.