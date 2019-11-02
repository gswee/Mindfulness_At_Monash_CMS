# Final Year Project - Mindfulness At Monash CMS

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

Built in [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Description

Mindfulness At Monash CMS (Content Management System) is a web application that allows approved users to manage articles which may or may not be displayed on the CMS's website.

Users need only their username & password, as well as email for password recovery. All will be given by the person in charge of the system. There are no other pre-requisites.

This application was built in the CakePHP MVC (Model-View-Controller) framework, which reduces the time needed to build websites with front & backend functionality, allowing developers to focus on web design and implementation. CakePHP also simplifies the process of displaying content from a database. 

Features include:

- CRUD (Create, Read, Update, Delete) functionality with corresponding template pages
- Built-in validation & handling components (cookie, security, email, session, request)
- PHP templating (for view files)
- View helpers 
- MVC architecture (folders & files)

This readme manual is for first-time users of this CMS (Content Management System) and details included files, instructions on installation and login details.

For more information on carrying out certain functionalities and understanding how the CMS works, please refer to the User and Technical Documentation Files located in the Documentations folder.

## Files Included 

*\Mindfulness_at_Monash_CMS\..*

Folders that are relevant to the scope of this application are marked with an asterisk (\*). Do not change any files in irrelevant folders and only make changes specified in the Documentations to files in the relevant folders.

    ..\.github   -  contains files automatically created during the Git commit process.
    ..\.idea     -  contains files automatically created while the application was created in PHPStorm.
    ..\bin*      -	contains the main CakePHP file, cake.php.
    ..\config*   - 	contains configuration files for database connections, URL routes, etc.
    ..\databaseScripts*   -	contains .sql files for creating database tables and adding values to them.
    ..\logs      -   contains error and debugging .log files.
    ..\plugins   -   should contain 3rd party plugins for the CakePHP application. At the moment, this folder is empty.
    ..\vendor    -   contains 3rd party vendor files

**DO NOT EDIT THE OTHER FILES IN THE FOLDER.

*\Mindfulness_at_Monash_CMS\src\..*

Contains all files required for CakePHP functionality to be properly executed. 

*\Mindfulness_at_Monash_CMS\webroot\..*

Contains images, JavaScript, CSS & other files which increase the number of options provided for designing CakePHP layouts.

    \css    -   	contains .css files which alter the layout
    \img 	- 	    contains image files (jpg, png, etc.)
    \font   -   	contains different types of files that provide a font
    \js     -	    contains .js files which provide JavaScript functionality

## Instructions before running

1. Navigate to root folder ``
2. Enter `composer self-update` in command line.
3. Start up the built-in webserver with:

```bash
bin/cake server
```

3. Visit `http://localhost:8765` to see the welcome page.

## Update

You have to update manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
