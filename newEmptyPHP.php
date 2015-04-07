{
  "name": "bower",
  "version": "1.3.12",
  "description": "The browser package manager",
  "author": "Twitter",
  "licenses": [
    {
      "type": "MIT",
      "url": "https://github.com/bower/bower/blob/master/LICENSE"
    }
  ],
  "repository": "bower/bower",
  "main": "lib",
  "homepage": "http://bower.io",
  "engines": {
    "node": ">=0.10.0"
  },
  "dependencies": {
    "abbrev": "^1.0.5",
    "archy": "1.0.0",
    "bower-config": "^0.5.2",
    "bower-endpoint-parser": "^0.2.2",
    "bower-json": "^0.4.0",
    "bower-logger": "^0.2.2",
    "bower-registry-client": "^0.2.1",
    "cardinal": "0.4.4",
    "chalk": "^1.0.0",
    "chmodr": "0.1.0",
    "decompress-zip": "^0.1.0",
    "fstream": "^1.0.3",
    "fstream-ignore": "^1.0.2",
    "glob": "^4.3.2",
    "graceful-fs": "^3.0.5",
    "handlebars": "^2.0.0",
    "inquirer": "0.8.0",
    "insight": "^0.5.0",
    "is-root": "^1.0.0",
    "junk": "^1.0.0",
    "lockfile": "^1.0.0",
    "lru-cache": "^2.5.0",
    "mkdirp": "0.5.0",
    "mout": "^0.11.0",
    "nopt": "^3.0.1",
    "opn": "^1.0.1",
    "p-throttler": "0.1.1",
    "promptly": "0.2.0",
    "q": "^1.1.2",
    "request": "^2.51.0",
    "request-progress": "0.3.1",
    "retry": "0.6.1",
    "rimraf": "^2.2.8",
    "semver": "^2.3.0",
    "shell-quote": "^1.4.2",
    "stringify-object": "^1.0.0",
    "tar-fs": "^1.4.1",
    "tmp": "0.0.24",
    "update-notifier": "^0.3.0",
    "user-home": "^1.1.0",
    "which": "^1.0.8"
  },
  "devDependencies": {
    "chai": "^1.10.0",
    "coveralls": "^2.11.2",
    "expect.js": "^0.3.1",
    "grunt": "^0.4.5",
    "grunt-cli": "^0.1.13",
    "grunt-contrib-jshint": "^0.10.0",
    "grunt-contrib-watch": "^0.6.1",
    "grunt-exec": "^0.4.6",
    "grunt-simple-mocha": "^0.4.0",
    "istanbul": "^0.3.5",
    "load-grunt-tasks": "^2.0.0",
    "mocha": "^2.1.0",
    "multiline": "^1.0.2",
    "nock": "^0.56.0",
    "node-uuid": "^1.4.2",
    "proxyquire": "^1.3.0"
  },
  "scripts": {
    "test": "grunt test"
  },
  "bin": {
    "bower": "bin/bower"
  },
  "preferGlobal": true
}