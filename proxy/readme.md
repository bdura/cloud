# Proxy

This proxy utility uses [Jason Wilder](http://jasonwilder.com/blog/2014/03/25/automated-nginx-reverse-proxy-for-docker/)'s incredible [`nginx-proxy`](https://github.com/nginx-proxy/nginx-proxy) utility.

In a nutshell :

- `nginx-proxy` listens to spawning Docker containers
- If a container has its environment variable `VIRTUAL_HOST` set, then it will redirect all incoming traffic to it
- SSL certification with automatic renewal comes for free using `acme-companion` !
