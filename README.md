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

### Views

-   view method renders and sends a HTML response.
-   We can consume some data in the template.
-   We can make a data available in all templates.
-   view composers can be used rto fire a callback whenever a view is rendered.
-   cache the templates while deploying to production and clear the cache during prodcution

### Blade templates

Laravel's own template engine.

-   it has directives to render the data. they are built-in functions for common use cases.
    TODO:
-   learn to create laravel components and use them to build dynamic components.
-   learn to create a good website with the templating by laravel only. it should feel like a SPA.
-   how can I use vue.js to create something significant?

### Asset Bundling & URL Generation : Pending

### Sessions

Storing the sessions to persist user state.

flashed data
session storage implementations
making a counter for number of times this page was visited

reading more regarding how the session storage data is handled and lifespan of those items


---

## Doubts
Sessions:

Session hijacking

Session blocking

Validation:

XHR requests

Does @error directive will need to reload the page

Making validation service provider as per names and data model fields: have data fields and then define valuation rules for them

Skim through the validation rules once and built in validation functions

Global handler for errors as per type of errors

Making a custom validator and handle the error the same

Global error handlers for errors

Logging with custom data

Read more regarding the logging and how concurrent and high load logging is handled 

Making a command to send push notifications

Go through the code base of gavyam and sleek to check how she is making http requests


