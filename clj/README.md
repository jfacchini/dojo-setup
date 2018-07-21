# Minimal configuration

This is the minimal Clojure configuration in order to be able to
bootstrap a project for kata using TDD

## Technical configuration

Clojure runs on the Java virtual machine
```sh
brew cask install java
```

Using Leiningen is enough to bootstrap a project ready for TDD
```sh
brew install leiningen
```

Create a project
```sh
lein new kata
```
