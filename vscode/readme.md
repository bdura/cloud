# VSCode

This docker-compose uses the [Code Server](https://hub.docker.com/r/codercom/code-server) image.

To use it, I had to add the following to my `.zshrc` :

```shell
# UID/GID, useful for some Docker applications
export UID=$(id -u)
export GID=$(id -g)
```

Indeed, for some reason Docker cannot evaluate `$(id -u)` nor `$(id -g)` directly, at least on my distribution. Using `.zshrc` circumvents the issue.
