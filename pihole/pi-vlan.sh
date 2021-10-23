#!/usr/bin/env bash

ip link set eth0 promisc on
ip link add macvlan-shim link eth0 type macvlan mode bridge
ip addr add 192.168.0.42/28 dev macvlan-shim
ip link set macvlan-shim up
ip route add 192.168.0.210 dev macvlan-shim
