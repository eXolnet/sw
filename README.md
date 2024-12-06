# Star Wars

## Requirements

* Docker

## Environment provided by Docker

* PHP 8.3
* Mysql 8.x
* Redis
* Mailpit (http://localhost:8026/)

## Installation steps

### 1 - Windows only - Before running command, you need to enter wsl2
```
wsl
```

### 2 - Copy .env.example to .env
```
cp .env.example .env
```

### 3 - Install dependencies with Docker 

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

### 4 - Start dev server with Docker
```
./vendor/bin/sail up -d
```

### 5 - Possible errors
If you are getting a mysql error like this `Another process with pid <id> is using unix socket file` when starting sail. You can try this command and restart sail.
```
docker-compose down --volumes
./vendor/bin/sail up
```

If you are getting a error like `open /Users/{USER}/.docker/buildx/current: permission denied` when starting sail. You can try this command and restart sail.
```
sudo chown -R $(whoami) ~/.docker
./vendor/bin/sail up
```
reference: https://stackoverflow.com/questions/75686903/open-users-user-docker-buildx-current-permission-denied-on-macbook

## Project setup
```
./vendor/bin/sail php artisan key:generate
./vendor/bin/sail composer install
./vendor/bin/sail php artisan migrate
./vendor/bin/sail php artisan db:seed
./vendor/bin/sail yarn install
```

### Compiles for development
```
./vendor/bin/sail yarn dev
```

### Compiles and minifies for production
```
./vendor/bin/sail yarn build
```

### Access the application
```
http://localhost:8084/
```

## Debugging (PHPStorm)
To make sure xdebug is working, you need to properly map your path.
In Settings > PHP > Servers, add a new server with the following settings:
```
Name: localhost
Host: 0.0.0.0
Port: 80
Debugger: Xdebug
Use path mapping: Yes
Project files
Your repository path: /path/to/your/sw_project (ex: /home/user/sw)
Absolute path on the server: /var/www/html
Make sure there is no other path mapped.
```

## Testing

To test the application:

* Backend (using PHPUnit): `./vendor/bin/sail composer test`
* PHPStan: `./vendor/bin/sail composer phpstan`
* Lint: `./vendor/bin/sail composer lint`

### Directives
- Do not stress with the time, it is normal that you will not be able to finish everything. 
- We are more interested in the quality of the code than the quantity of the features.
- Everything is allowed, you can change the structure of the project, add packages, etc.
- You can use the internet or any other tools to search for solutions.
- You can ask questions if you have any.
- You can use any IDE you want (we suggest PHPStorm).
- Everything should work out of the box with the laravel Sail docker setup. (https://laravel.com/docs/10.x/sail)

### Context
One of your colleague started to work on a project for a client, but he left the company before finishing it. The client is not happy, he wants the project to be finished as soon as possible.

That's where you come in! to fix these issues and implement what you think is best for the client need.
Here is a ***sample*** list of things that needs doing but ultimately it's your decision as to what to tackle first.

- [ ] We need to fix the obvious bugs and errors
- [ ] Client lost his password and saying that he can't reset it, he never received an email. His email is `admin@example.com`
- [ ] Client is saying that the page Movies is working but not shown in the menu
- [ ] Client is saying that there should be 6 movies listed in the Movie page. (Maybe a problem with the application setup?) 
- [ ] He also wanted to see only 3 movies per page? Is there a way to add a pagination on the Movie page?
- [ ] Client is saying the search is not working. He wants to be able to search for a movie by title.
- [ ] Client wants to be able to see the details of each movie in a new page. He wants to be able to access it from the list of movies.
- [ ] One of your colleague started to implement a feature to fetch the data of the Star wars movies using the Laravel Jobs system. He didn't finish it, can you do it?
- [ ] Client is saying that he can't add a movie to his list, he's getting an error.
- [ ] Client want a new feature, he wants to be able to generate an image of custom Star wars badge from a form.
- [ ] In the company we make sure that all backend code is tested with a coverage of at least 80%.
