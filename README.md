# Plastic Patrol Craft

Craft 3 powered site for Plastic Patrol

This project uses:

1. [Craft 3](https://buildwithcraft.com) for content management
2. PHP 7.1 [with the following PHP extensions installed](https://buildwithcraft.com/docs/requirements)
3. MySQL 5.6
4. [Git flow](http://nvie.com/posts/a-successful-git-branching-model/) as a branching model
5. [Webpack](https://webpack.js.org) for asset bundling
6. [Sass](http://sass-lang.com) for stylesheet preprocessing
7. [Nanobox](https://nanobox.io/) for local development
8. [Fractal](https://fractal.build/guide) for the core design system
9. [Fractal Nunjucks Adapter](https://github.com/frctl/nunjucks) for nunjucks templating within Fractal
10. [Node.js](https://nodejs.org/en/) v4.4.7+ to run Fractal
11. [gulp-theo](https://github.com/salesforce-ux/theo) to handle design tokens
12. [Blendid](https://github.com/vigetlabs/blendid) build task tool and asset pipeline
13. [Yarn](https://yarnpkg.com/lang/en/) for dependency management 


## Getting set up

Install the Nanobox CLI tool. You will need a (free) [account](https://dashboard.nanobox.io/users/register)

One time setup
```bash
# branching strategy, accept all default options
git flow init 

# Add local DNS alias
nanobox dns add local riverbend.craft.localdev
nanobox run

# Run from inside the server
composer install
```

To start the server
server not already running:
```bash
nanobox run php-server
```
server already running:
```bash
# Run from inside the server
php-server
```

To start the build task tool
```bash
# Add all dependencies
yarn
# Start the local server and build watch command
yarn start
```

## Structure

#### Styles
`assets/components/***`
#### Style Docs
`assets/docs/***`
#### Design Tokens
`design/***` these are parsed via gulp-theo and pushed into both styles (as maps at `assets/components/design`) and JS (`assets/js/design`)
#### Build Config
`build/***`

## Resources

* **Craft Docs:** Installation instructions and much more: https://docs.craftcms.com/v3
* **Craft Updates:** Release notes with bug fixes, improvements and additions. https://buildwithcraft.com/updates
* **Craft Stack Exchange:** https://craftcms.stackexchange.com/
