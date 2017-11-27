# Simple Pre-Lunch Landingpage using Twig and Bootstrap 4

Simple project for quickly creating Pre-Launch Landingpages on PHP,
using the TWIG template engine 

# Create Project

It provides a new dummy project with open source template based on twitter bootstrap. 

You need to run the following command to get a nice landing page

    make

This is required for normal work of system.

## What does make do?

Four things getting done: 
1. composer: installs the required packages
2. bower: installs the librarys such as jquery
3. styles: opys the bootstrap css and js files from vendor to the public folder
and creates the css from scss
4. minify: minifies the css

## Small HOWTO

Create the project 

    make

Generate static HTML ( you actually dont need it ):

    make static

Minify CSS:
    
    make minify

Run Composer

    make composer

Run Bower

    make bower

Copy all Bootstrap Files (css and js) to public and create the css from srss files

    make styles

## If you need to change the stylesheets, change the public/assets/scss files 
and do 
    
    make styles

It creates the css-style in the folder public/assets/css and minify the srss
    
    make minify

## You need to have installed 

sass
go
minify
compser
bower

sudo gem install sass --no-user-install

go get github.com/tdewolff/minify/cmd/minify
see https://github.com/tdewolff/minify/tree/master/cmd/minify

## That Template based on
https://startbootstrap.com/template-overviews/landing-page/