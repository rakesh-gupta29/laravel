## ABMVS Website

Experiments with Laravel: Going old school

# Basics

### Routing

-   View routes
-   Redirection: redirect and permanentRedirect
-   Parameters:
    -   Required and optional parameters
    -   Routes with dependency injection
    -   Routes with multiple variable parameters
    -   regex constraints for parameters
    -   some filters for paramters: where laravel has builtin funtions to limit the accepted parameters.
    -   including global constraints e.g. all parameters names id should be uuid.
-   named routes
-   route groups
-   controller group e.g. one controller for a group of routes
-   subdomain routing
-   rate limiting: by endpoint or by group of routes

### Middlewares

Functions which form a link in the chain of functions from request to response.

-   we can define classes too as middlewares
-   before and after middlewares
-   assigning one middleware to a group of routes
-   withoutMiddleware function helps to exclude the middleware from a group.
-   multiple middlewares can be grouped together and applied at once. e.g. web and api middleware groups.
-   to determine the order in which they are executed, we can decide their priority
    in an array called middlewarePriority in kernel file.
-   passing additional parameter to the middlewares and then retreiving them in the controller functions

### CSRF Protection

Includes sending actions (ususally form actions) from a bad website to a good one - with data relevant to good ones.

### Request

represents current request being handled. It is injected by default.

-   it provides a series of methods, properties to inspect and consume the current request object.

### Response

`All controllers should return a valid response.`
A valid response includes:

-
