# Monitoring

## Portainer

Portainer provides a UI for checking the health of docker containers running on the platform.

## Grafana

I use [Alex Hyatt's dashboard configuration](https://www.alexhyett.com/grafana-dashboard.json).

The environment variables necessary to the database administration container are defined in `grafana.env` :

```
GF_SECURITY_ADMIN_USER=<username>
GF_SECURITY_ADMIN_PASSWORD=<password>
```