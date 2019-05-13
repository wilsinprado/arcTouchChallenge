This project was bootstrapped with [Create Lumen App](https://lumen.laravel.com/docs/5.8).


First run composer install

## Available Scripts

In the project directory, you can run:

### `php -S localhost:8000 -t public`

Runs the app in the development mode.<br>
Open [http://localhost:8000](http://localhost:3000) to view it in the browser.


## Heroku

To access the project from heroku open [https://polar-waters-94846.herokuapp.com]

## Architecture

    ├── app                                      # Source files
        ├── Htttp                                # Source files
            ├── Controllers                      # Source files
                ├── MovieController.php          # Controller reponsible to respond the api requests
    ├── routes                                   # Source files
        ├── web.php                              # File that contains the application routes
                
                
## Third-party libs

In this project i used

### `guzzlehttp/guzzle`

To facilitate http requests