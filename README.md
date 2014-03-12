Shopavel Common
===============

**Common components for the Shopavel ecommerce package**



Collections
-----------

A laravel collection has the same behaviour as an array, with some helper methods, you can extend these to provide additional checks or functionality.

Collections use "dot" syntax for array access, for example: `$collection->put('foo.bar', 'baz')` is equivalent to `$collection['foo']['bar'] = 'baz'`.

### Immutable Collections

An immutable collection once created can not be changed, the `put()`, `pop()` etc. methods will throw a `CollectionException`.

### Collectors

A `Collector` is a trait that provides a `setCollection` method and allows access to the collection items via a magic `__get` method.



Controllers
-----------

All packaged shopavel controllers extend `Shopavel\Controllers\Controller`, which provides the same functionality as the default `BaseController`.


Presenters
----------

A presenter allows you to format a model's attributes when output to a view. For example, the `DatePresenterTrait` formats the `created_at` and `updated_at` attributes to use the localized `'%x'` flag ([php.net/strftime](http://php.net/strftime)).

To use a presenter you should pass your model into the constructor, for example `$foo = new FooPresenter($foo)` where `$foo` is a eloquent model. When you then call `{{ $foo->created_at }}` in your view, the method `created_at()` will be called on the presenter instead, giving you a chance to format the data.

You can convert multiple models into presenters using:

```php
$foos = $this->foo->all()->each(function($foo)
{
    return $this->presenter->newInstance($foo);
});
```



NestedSets
----------

Nested sets provide a fast way to create hierarchical relationships, e.g. categories. You can read more on [wikipedia](http://en.wikipedia.org/wiki/Nested_set_model) or at the [etrepat/baum github repo](https://github.com/etrepat/baum).



Transactions
------------

A transaction is any process or group of processes that can be taken on a database model. By extending `Shopavel\Transactions\Transaction` you can pass an array of validators when constructing your transaction. The `validate()` method can be called to check the object through these validators.



Validators
----------

Validators can be used to provide checks against objects prior to committing a transaction. If an issue is encountered an exception should be thrown.



Locations
---------

Locations are nested set nodes, this allows you to define any depth of location as needed from continents to states, districts or even any arbitrary non-geographical location.


### Addresses

Addresses allow you to define up to 4 additional lines along with a location.



License
-------

Shopavel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT). Dependanices may have their own licensing.