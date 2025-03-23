# [WP Starter Boilerplate](https://handzel.dev/)

### WP Starter Theme Boilerplate for handzel developers.

ACF Starter Fields: acf-export-boilerplate.json
Plugins: plugins.zip

Install the latest version of WordPress. Clone the boilerplate into the /themes directory. Extract all the plugins from our starter package in the plugins.zip file. Auto-import acf json files from /acf-json is connected with your CMS in dev and production.

Then, update all the plugins to their latest versions.

#### First install commands:

```
yarn
```

and

```
composer install
```

Dev mode:

```
yarn start
```

Deploy project:

```
yarn build:production
```

#### Requirements

PHP 8.0+ <br />
Node >= 12.18
