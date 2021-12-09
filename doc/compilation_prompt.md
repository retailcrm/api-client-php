## Compilation prompt

After almost every Composer operation you will see this prompt:
```sh
The following packages have new compilation tasks:
 - retailcrm/api-client-php has 1 task

Allow these packages to compile? ([y]es, [a]lways, [n]o, [l]ist, [h]elp)
```

That's because the API client utilizes code generation to speed up the serialization and deserialization of the requests. However,
this prompt may be annoying and sometimes can even break the application lifecycle pipeline (in the CI/CD environment). We can't just
disable it for everyone [because of security concerns](https://github.com/composer/composer/issues/1193). But you can disable it for your project.

There are three ways of disabling this prompt:
1. During the installation.
2. Automated way.
3. Manual way.

### Disable compilation prompt during the installation

Just choose `[a]lways` option by pressing `a` followed by Enter. This will automatically edit your `composer.json` and will disable 
the compilation prompt for you. No additional steps are needed.

### Disable or enable compilation prompt via CLI

Alternatively, you can use `retailcrm-client` CLI utility. It will be in your binary directory. By default, it'll be in the
`vendor/bin` directory if not defined otherwise in the composer.json `config.bin-dir` entry.

The only benefit of this utility is the fact that it also can enable the prompt again.

#### Disabling compilation prompt

You can disable the compiler prompt by running this command:

```sh
./vendor/bin/retailcrm-client compiler:prompt
```

Replace `vendor/bin` with your bin directory path if it's different from the default.

You should see this message after that:
```sh
 ✓ Done, generator prompt is now enabled.
```

#### Enabling compilation prompt

If you want to revert this change and enable the compilation prompt then just run this command again with the `--activate` flag:

```sh
./vendor/bin/retailcrm-client compiler:prompt --activate
```

### Disable or enable compilation prompt manually

#### Enabling compilation prompt

It is possible to replicate the same actions manually. Add these params into the `extra` segment of your `composer.json` if
you want to execute code generation automatically after library installation or update.

```json
"compile-mode": "whitelist",
"compile-whitelist": ["retailcrm/api-client-php"]
```

Your `composer.json` file will look like this:
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
    "extra": {
        "compile-mode": "whitelist",
        "compile-whitelist": ["retailcrm/api-client-php"]
    }
}
```

Voilà! You won't see the annoying prompt again.

#### Enabling compilation prompt

Just remove `extra.compile-mode` and `extra.compile-whitelist` params from your `composer.json`.
