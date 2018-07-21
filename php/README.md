# Minimal configuration

This is the minimal PHP configuration 
in order to be able to bootstrap a project
for kata using TDD.

## Technical requirements

Here are few steps that are required for
the machine environment used by this project.

- PHP 7.1 (On Mac OS X using zsh)
```sh
brew install php@7.1
echo 'export PATH="/usr/local/opt/php@7.1/bin:$PATH"' >> ~/.zshrc
echo 'export PATH="/usr/local/opt/php@7.1/sbin:$PATH"' >> ~/.zshrc
```
- XDebug (debugging and code coverage)
```sh
/usr/local/opt/php@7.1/bin/pecl install xdebug
```
