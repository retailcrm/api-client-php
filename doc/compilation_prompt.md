## Dealing with `civicrm/composer-compile-plugin` prompts

During installation you will see this prompt:
```sh
civicrm/composer-compile-plugin contains a Composer plugin which is currently not in your allow-plugins config. See https://getcomposer.org/allow-plugins
Do you trust "civicrm/composer-compile-plugin" to execute code and wish to enable it now? (writes "allow-plugins" to composer.json) [y,n,d,?]
```

And after almost any Composer operation you will see this prompt:
```sh
The following packages have new compilation tasks:
 - retailcrm/api-client-php has 1 task

Allow these packages to compile? ([y]es, [a]lways, [n]o, [l]ist, [h]elp)
```

That's because the API client utilizes code generation to speed up the serialization and deserialization of the requests. However,
these prompts may be annoying and sometimes can even break the application lifecycle pipeline (in the CI/CD environment). We can't just
disable it for everyone [because of security concerns](https://github.com/composer/composer/issues/1193). But you can disable it for your project.

There are three ways of disabling this prompt:
1. During the installation.
2. Automated way.
3. Manual way.

### Disable compilation prompts during the installation

Press `'y'` when you see this message:
```sh
civicrm/composer-compile-plugin contains a Composer plugin which is currently not in your allow-plugins config. See https://getcomposer.org/allow-plugins
Do you trust "civicrm/composer-compile-plugin" to execute code and wish to enable it now? (writes "allow-plugins" to composer.json) [y,n,d,?]
```

And when you see this prompt, press `'a'`:
```sh
The following packages have new compilation tasks:
 - retailcrm/api-client-php has 1 task

Allow these packages to compile? ([y]es, [a]lways, [n]o, [l]ist, [h]elp)
```

That's it. Code generation is now enabled.

### I've chosen something else, now API client doesn't work!

That happens. We provide special CLI utility which will automatically configure your `composer.json` to enable code generation. 
Just run this command inside your project after API client installation:
```sh
./vendor/bin/retailcrm-client compiler:prompt
```

You should see this message after running the command:
```sh
 ✓ Done, code generation has been enabled.
 ```

You may also want to run code generation manually once. It can be achieved by running this command:
```sh
composer compile --all
```

**Note:** `retailcrm-client` should be in your binary directory. By default it is set to `vendor/bin`. You can check `config.bin-dir` 
value in your `composer.json` and update paths in the commands above accordingly.
**Note (2):** `compiler:prompt` command has `--revert` flag. You can use it if you want to disable automatic code generation for some reason.

### Disabling compilation prompts manually

It is possible to replicate the same actions manually. First, you will need to enable compiler plugin. Add the plugin  
to the `config.allow-plugins` segment of your `composer.json` file:

```json
"allow-plugins": {
    "civicrm/composer-compile-plugin": true
}
```

After that add these params into the `extra` segment of your `composer.json`:

```json
"compile-mode": "whitelist",
"compile-whitelist": ["retailcrm/api-client-php"]
```

Your `composer.json` file should look like this:
```json
{
    "name": "author/some-project",
    "description": "Description of the project.",
    "type": "project",
    "license": "MIT",
    "require": {
        "php": ">=7.3.0",
        "symfony/http-client": "^5.2",
        "nyholm/psr7": "^1.4",
        "retailcrm/api-client-php": "~6.0"
    },
    "config": {
        "allow-plugins": {
            "civicrm/composer-compile-plugin": true
        }
    },
    "extra": {
        "compile-mode": "whitelist",
        "compile-whitelist": ["retailcrm/api-client-php"]
    }
}
```

Voilà! You won't see the annoying prompt again.
