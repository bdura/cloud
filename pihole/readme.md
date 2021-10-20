# Pihole

Pihole is an ad-blocker that works by blocking advertisement-related DNS queries directly. That means that contrary to browser ad-blockers, your device **never actually receives any data from advertisement providers**, freeing your internet bandwidth.

Any device connected to your router get ad-blocking for free !

## Setting up pihole

To be honest, this is the black magic part.

Since the whole point of this repository is to direct services through a single point of entry, we need to assign a separate IP address to the container that will be used as a DNS server on the network. It turns out Docker provides a `macvlan` driver, which "assign a MAC address to each container’s virtual network interface, making it appear to be a physical network interface directly connected to the physical network" (from the [Docker documentation](https://docs.docker.com/network/macvlan/)).

The `docker-compose` file uses an environment file `.env`, that defines the `WEBPASSWORD` environment variable :

```
WEBPASSWORD=secret
```

## Setting up the router

I changed the DNS settings on my router to use `192.168.0.210`, as set in the [`docker-compose` configuration](docker-compose.yml#L21).

## References

On setting up Pihole itself :
- The [Pihole documentation](https://docs.pi-hole.net/docker/dhcp/)
- Tony Lawrence's [blog post](http://tonylawrence.com/posts/unix/synology/free-your-synology-ports/) (mentioned in the Pihole documentation)
- An [article](https://geekvisit.com/pi-hole-and-macvlan/) that gives some precisions on Tony Lawrence's blog post
- A useful [step-by-step guide](https://blog.ivansmirnov.name/set-up-pihole-using-docker-macvlan-network/) for the `macvlan` solution

On setting up the router :
- The [Pihole documentation](https://discourse.pi-hole.net/t/how-do-i-configure-my-devices-to-use-pi-hole-as-their-dns-server/245)