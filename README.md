Installation
Follow these steps to set up the project locally:

Clone the repository:

shell Command:
git clone https://github.com/AmaanBaig1/ms-task.git

Navigate to the project directory:

shell Command:
cd ms-task

Install composer dependencies:

shell Command:
composer install

Find copy.env file and rename it to .env:

Configure the .env file with your database credentials and other settings. Make sure to set the DB_DATABASE variable to the name of the database you want to use.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mstask
DB_USERNAME=root
DB_PASSWORD=

Create the database in your database server using the name specified in the .env file.

Generate an application key:

shell Command:
php artisan key:generate

Run database migrations:

shell Command:
php artisan migrate

Seed the database with initial data:

shell Command:
php artisan db:seed

Start the development server:

shell Command:
php artisan serve


Open your browser and visit http://localhost:8000 to see the application.

Note: Now you can Register 3 Users to view the Jobs Section.