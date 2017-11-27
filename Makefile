all: composer bower styles minify

composer:
	composer install --no-dev --no-interaction

bower:
	bower install

composer-dev:
	composer install

minify:
	minify -o public/assets/css/landing-page.min.css public/assets/css/landing-page.css

styles:
	test -d public/lib && echo "lib folder exists...create css" || mkdir public/lib
	scss  public/assets/scss/landing-page.scss public/assets/css/landing-page.css 
	test -d public/lib/bootstrap && echo "bootstrap folder exists...copy css files" || mkdir public/lib/bootstrap
	cp -R vendor/twbs/bootstrap/dist/ public/lib/bootstrap/
	
static:
	php -f ./public/index.php > ./public/index.html
