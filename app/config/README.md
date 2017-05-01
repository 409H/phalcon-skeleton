## app/config/loader.php

* This file helps your project classes be loaded automatically. Currently, it will load the following directories;
   * `/app/controllers`
   * `/app/models`
   
## app/config/services.php

* This will will register services on the [DI](https://docs.phalconphp.com/en/3.0.1/api/Phalcon_Di.html).

> Since Phalcon is highly decoupled, Phalcon\Di is essential to integrate the different components of the framework. The developer can also use this component to inject dependencies and manage global instances of the different classes used in the application.
>  
> Basically, this component implements the Inversion of Control pattern. Applying this, the objects do not receive their dependencies using setters or constructors, but requesting a service dependency injector. This reduces the overall complexity, since there is only one way to get the required dependencies within a component.