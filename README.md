PHASS
===========

A simple script to compile SASS to CSS automatically with pure PHP using the [scssphp](http://leafo.net/scssphp/) compiler written by [Leaf Corcoran](https://twitter.com/moonscript).

How to install
-----------------

You can download the repository files and installs the dependencies with the composer:

```bash
$ composer install
```

How to use
-----------------

Open the example folder and see an example of use:

```php
Phass::watch("scss/", "css/");
```

The first parameter is the *relative* path to your scss folder and the second parameter is the *relative* path to your css folder.

Tip
-----------------

To perform automatic compilation of css files in the terminal run the following command:

```bash
# Linux
$ watch -n 1 php watch.php
```

Read more about [watch command](http://www.linfo.org/watch.html).

```bash
# MacOS
$ while true; do php watch.php; sleep 1; done
```