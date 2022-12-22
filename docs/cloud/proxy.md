# Reverse Proxy Server

## What is a reverse proxy server?

The reverse proxy server is the gateway to your server. Every request made to your server will be routed to the proxy,
which will dispatch them to the relevant service.

For instance, my server hosts multiple websites located on different domain, but all point to a single server,
which analyse the domain that was requested, and passes the request on to the service that's dedicated to that domain.

## What should I use?

There are a few options: Traefik, NGINX, Apache..

Use Traefik: it's very simple to set up, incredibly customisable, formidably powerful... You won't regret it.

## Example config

See the docker-compose file :

```yaml
--8<-- "traefik/docker-compose.yml"
```

And the traefik configuration :

```yaml
--8<-- "traefik/traefik.yml"
```

I was able to score an A score on SSL Labs using this configuration :

```yaml
--8<-- "traefik/config/tls.yml"
```
