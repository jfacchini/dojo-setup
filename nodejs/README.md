# Minimal configuration

This is the minimal Node.js configuration in order to be able 
to bootstrap a project for kata using TDD.

## Technical requirements

Here are few steps that are required for 
the machine environment used by this project. 

- nvm (node version manager)
```sh
curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.11/install.sh | bash
echo 'export NVM_DIR="$HOME/.nvm"' >> ~/.zshrc
echo '. "/usr/local/opt/nvm/nvm.sh"' >> ~/.zshrc
nvm install v10.5.0
brew install yarn --without-node
```
