Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist krok/asset-installer "*"
```

or add

```
"krok/asset-installer": "*"
```

to the require section of your `composer.json` file.

Please see the README for composer/installers

```json
{
    "extra": {
        "installer-paths": {
            "public/resources/{$vendor}/{$name}/": [
                "type:bower-asset",
                "type:npm-asset"
            ]
        }
    }
}
```
