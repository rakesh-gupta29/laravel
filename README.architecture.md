#### index.php file: entry point, check for maintenance mode, autoload the application. Capture the router, boot up and give the route to http kernel for handling and sending the response. shut down and clean up.

#### Maintenance mode:

-   down config file
-   headers for retry, refresh, secret, status code,
-   excluded routes from maintenance mode
-   custom template for maintenance mode
-   passing message to the template files 503.blade.php

#### app.php

    - bootstrap the application
    - binding the interfaces with their default implementations.

## Doubts:

-   how do I pass values to the 503.blade.php file.
-   how do I create custom implementations for basic interfaces in this class and utilise them.
-   read more regarding the autoload mechanism and how does it make some global variables available throughout the application.

#### Service Providers

-   basically they are classes to registering global features in the app
-   they come together to create a bootstrapped application.
-   they are called providers because they are executed quite early in the application lifecycle.

## Service containers

## Facades

They expose the static interface to service provider. basically they make it easier to work with providers.
