<p align="center">
	<img src="https://fixathon.io/assets/images/image01.png?v21097705510651" style='width:150px'>
</p>

## About 

Fixathon is a global hackathon for tech makers to help prevent the earth's climate from breaking down. 

It's a month-long (because Earth problems wouldn't be fixed in 2 days)  hackathon for tech professionals to use their skills to build impactful projects to help increase awareness of the climate change issue and people to take action. Any web or app-based project that aims to help restore a safe climate for our world is eligible.
It will be announced on 10th June and start on 2nd August lasting four weeks. Teams from around the world will compete in three tech climate challenges to win cash prizes.

- Awareness: Raise awareness of climate breakdown
- Action: Help people take action against climate breakdown.
- Facilitation: Make Climate Emergency projects easier to create in the future. 

## Installation & Setup

- Download the repo
- PHP & Composer is required for local development
- Run `composer install` && `npm install`
- Folders `/bootstrap/cache` & `/storage` should be writable 
- Create .env from .env.example and edit with your config (DB)
- Paste the App_Key from running: `php artisan key:generate` in the .env file
- Run `php artisan migrate` to auto-generate the DB
- Run `php artisan serve` to have a local dev server running on localhost:8000
- Run `npm run watch` to have auto generate css,js files

## Folders Structure

The main folder is 'resources' where all the views, JS & css resides.

- /app: The controllers (/app/http) & models (like User.php)
- /config: Configuration files for the Laravel framework
- /public: the generated files from Vue, Blade, SCSS... Do not edit
- /resources
	/js: The VueJs files. The components are loaded from app.js, the resulting file is 'public/js/app.js'.
	/sass: It mix the Bootstrap files + _variables.scss files with the inline css classes in the file. The resulting file is 'public/css/app.css'.
	/views: The frontend files
		- /auth: The login, register, remember password, etc. files
		- /layouts: app.blade.php the keystone file that loads the header, footer & content
		- /partials: reusable files (like Header, Footer, sections, etc)
- /routes: The web.php routes the HTTP request with the controller/view


## License
Fixathon is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
