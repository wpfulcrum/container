# Container Module

[![Latest Stable Version](https://poser.pugx.org/wpfulcrum/container/v/stable)](https://packagist.org/packages/wpfulcrum/container) [![License](https://poser.pugx.org/wpfulcrum/container/license)](https://packagist.org/packages/wpfulcrum/container)

The Fulcrum DI Container Module provides a lean Dependency Injection Container. 

The primary purpose of a a DI Container is to manage objects.  By passing in a closure that wraps up the creation of objects, using the container, you can:

1. Create a new object without having to use `new` in your code or having to specify it's dependencies.
2. Get an object out of the container without having to use Singletons, statics, or globals. WooHoo!

The container also stores datasets.  Think of it like a big array where you add values into it by a unique key. Powerful.

Seriously, a DI Container makes you job so much easier.  Let it handle:

1. Object creation along with all of the object's dependencies.
2. Managing objects.
3. Storing datasets in memory.
4. Retrieving the object or dataset you need.

## Functionality

It extends [Pimple](https://pimple.symfony.com/) by providing the following functionality:

1. `has()` method to check if a unique key exists in the container.
2. `get()` method to fetch something out of the container by it's unique key.
3. `registerConcrete()` method - providing the ability to register a closure.

## Installation

The best way to use this component is through Composer:

```
composer require wpfulcrum/container
```

## Basic Usage

### Creating Objects

Using the `registerConcrete()` method, you can register a closure that then handles creating the object and its dependencies.

For example, let's say you have an object that has several dependencies.  For example, you are adding a Portfolio custom post type to your project using Fulcrum.

This might be the configuration for that CPT:

```
$concreteConfig = [
    'autoload' => true,
    'concrete' => function ($container) {
        $configObj = new Config(YOURPLUGIN_PATH . '/config/post-type/portfolio.php');

        return new PostType(
            $configObj,
            $configObj->postTypeName,
            new PostTypeSupports($configObj)
        );
    },
];
```

Let's stop and notice a few points:

1. There are multiple dependencies including:
    - a `Config` object
    - a post type name
    - PostTypeSupports` object.  
2. Everything you need to create the CPT object is wrapped up in that closure.
3. The `autoload` parameter is set to `true`.  Therefore, the object is created immediately upon registering it into the container.

Using the above configuration, it can be registered into the container like this:

```
$container = new DIContainer();
$portfolioCpt = $container->registerConcrete($concreteConfig, 'portfolio_cpt');
```

## Contributing

All feedback, bug reports, and pull requests are welcome.
