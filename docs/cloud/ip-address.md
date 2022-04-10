# IP Address

Example configuration to reserve a static address :

```yaml
network:
  version: 2
  renderer: networkd
  ethernets:
    eth0:
      addresses:
        # The address you'd like to reserve
        - 192.168.0.12/24
      # The address of the router
      gateway4: 192.168.0.1
      nameservers:
        addresses:
          # I just copied this from the router...
          - 8.8.8.8
```

## References

\bibliography
