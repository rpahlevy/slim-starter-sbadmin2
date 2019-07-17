# SLIM STARTER SBADMIN2

This is a ready to use Slim skeleton with SBAdmin2 (compiled)

## What's Inside

1. Slim
2. DotENV
3. SBAdmin2

    Only /dist folder is included. You can find the templates in templates/layouts

## TODO

1. [x] Layout: layouts.master
2. [x] Layout: includes.flash
3. [ ] Layout: auth.master
4. [ ] Layout: auth.login
5. [ ] Layout: auth.register
6. [ ] Layout: auth.forget_password
7. [ ] Layout: errors.master
8. [ ] Layout: errors.404

## Setup

### 1. Clone Project

#### Using Git

You can clone this repository & rename it to your project

````
git clone https://github.com/rpahlevy/slim-starter-sbadmin2 your-project-name
````

#### Without Git

Click that green button on right top corner (Clone or download) -> Download ZIP
Extract it and rename to your project name

### 2. Install Dependencies

Change composer.json to your liking first (detail of your project). Make sure you have composer installed, then cd to the project folder and do the following

````
composer install
````

### 3. Setup .env

Clone .env.template or just rename it to .env then fill in the details & don't forget to setup your DB.

### 4. Serve Your Web

Serve locally using php built in and visit localhost:8080

````
composer start
````