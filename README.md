# Docker Compose Laravel
A pretty simplified Docker Compose workflow that sets up a LEMP network of containers for local Laravel development. You can view the full article that inspired this repo [here](https://dev.to/aschmelyun/the-beauty-of-docker-for-local-laravel-development-13c0).

## Usage

To get started, make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system, and then clone this repository.

Next, navigate in your terminal to the directory you cloned this, and spin up the containers for the web server by running `docker-compose up -d --build site`.

After that completes, follow the steps from the [src/README.md](src/README.md) file to get your Laravel project added in (or create a new blank one).

Bringing up the Docker Compose network with `site` instead of just using `up`, ensures that only our site's containers are brought up at the start, instead of all of the command containers as well. The following are built for our web server, with their exposed ports detailed:

- **nginx** - `:80`
- **mysql** - `:3306`
- **php** - `:9000`

Three additional containers are included that handle Composer, NPM, and Artisan commands *without* having to have these platforms installed on your local computer. Use the following command examples from your project root, modifying them to fit your particular use case.

- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate` 

## Persistent MySQL Storage

By default, whenever you bring down the Docker network, your MySQL data will be removed after the containers are destroyed. If you would like to have persistent data that remains after bringing containers down and back up, do the following:

1. Create a `mysql` folder in the project root, alongside the `nginx` and `src` folders.
2. Under the mysql service in your `docker-compose.yml` file, add the following lines:

```
volumes:
  - ./mysql:/var/lib/mysql
```"# docker_lemp" 

docker-compsoe up -f docker-compose-dev.yml -d --build
docker-compose run --rm artisan migrate
docker-compose run --rm composer update
docker-compose run --rm npm i

docker-compose-dev.yml

docker-compose run -d --build site
docker-compose run -d cron
docker-compose stop cron

docker-compose exec nginx /bin/sh

docker-compose ps
docker-compose -f docker-compose-prod.yml up -d --build site

docker-compose exec app composer update

docker run -dit --name my-running-app -p 8080:80 my-apache2


 docker-compose exec app php artisan migrate

guzzlehttp/guzzle to ^7.0.1
facade/ignition to ^2.3.6
laravel/framework to ^8.0
laravel/ui to ^3.0
nunomaduro/collision to ^5.0
phpunit/phpunit to ^9.0

Personal access client created successfully.
Client ID: 9240b742-4dad-4445-afbf-0a5ac06d4f6a
Client secret: 6xsSkcXeXWG8vwFqrAzU5JB83wpbAROEZvcdon0f
Password grant client created successfully.
Client ID: 9240b742-fa59-413f-9803-13a4f7708930
Client secret: lpML7hSPWch53i5i7GN4mdnu63IW4UfsPkxaADUl


SSH into the docker-compose container
```bach
docker-compose run $service /bin/bash
```

