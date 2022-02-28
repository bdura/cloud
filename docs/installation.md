# Setting up your server

Although this guide was written with the specific case of a Raspberry Pi, it will work with any Linux server.

## Creating a bootable USB

Download a distribution image. Use [Balena-Etcher](https://www.balena.io/etcher/) or the [RaspberryPi Imager](https://www.raspberrypi.com/software/) to create a bootable USB.

I lean towards the [Ubuntu distribution](https://ubuntu.com/download/raspberry-pi) rather than the Raspbian one, for no particular reason other than the fact that you're in good company with Ubuntu. You can follow the [official Ubuntu tutorial](https://ubuntu.com/tutorials/how-to-install-ubuntu-on-your-raspberry-pi#1-overview) (recommended whatever the distribution you end up choosing).

Make sure to enable ssh ! On the bootable medium :

```shell
touch ssh
```

Set up the wifi (you can skip this step if you intend to connect your Raspberry with ethernet) :

```yaml
wifis:
  # Wifi configuration, here with dynamic IP
  wlan0:
    dhcp4: true
    optional: true
    access-points:
      "home network":
        password: "123456789"
```

Insert the SD card and let the Raspberry boot. Provided the RPi is connected to the network, you should be able to access is via SSH :

```shell
ssh ubuntu@<IP-address>
```

## Creating a user

You should immediately create a new user, and delete the default `ubuntu` user.

```shell
# Create the user
sudo adduser newuser
# Give it superuser rights
sudo usermod -aG sudo newuser
```

Reconnect on your RPi using the new user, and delete `ubuntu`:

```shell
sudo userdel -r ubuntu
```

## Configuration

### Install Zsh

Zsh is an alternative to Bash, and provides a myriad of bonuses. Follow the [instructions](https://github.com/ohmyzsh/ohmyzsh/wiki/Installing-ZSH).

### Install oh-my-zsh

oh-my-zsh is a package manager for Zsh. It can help you customize your shell with incredibly useful perks. Follow the [instructions](https://github.com/ohmyzsh/ohmyzsh#basic-installation).

### Install spaceship-prompt

There are other prompts out there, but Spaceship is a good way to start. Follow the [instructions](https://github.com/spaceship-prompt/spaceship-prompt#oh-my-zsh).

### Install micro

Micro is a great terminal-based file editor. To install it, run :

```shell
curl https://getmic.ro | bash
```

Then put the executable in a usable folder :

```shell
# Create a .local/bin folder
mkdir -p .local/bin
# Move the executable to the new folder
mv micro .local/bin
```

`.local/bin` is added to the path in the following step.

### Configure Zsh

Modify you `.zshrc` to configure your new shell.

```shell
.local/bin/micro .zshrc
```

You may use this [configuration](https://github.com/bdura/cloud/blob/master/.zshrc). You'll need to install `zsh-syntax-highlighting` if you do (see [instructions](https://github.com/zsh-users/zsh-syntax-highlighting/blob/master/INSTALL.md#oh-my-zsh)).

## Generate a SSH key

See the [instructions from Github](https://docs.github.com/en/authentication/connecting-to-github-with-ssh).

```shell
ssh-keygen -t ed25519 -C "your_email@example.com"
```

Display your public kwy with :

```ssh
cat .ssh/id_ed25519.pub
```

This will be useful to add to your Github account, for example.

## Docker

See [instructions](https://docs.docker.com/engine/install/ubuntu/#install-using-the-repository).
And the [other instructions](https://docs.docker.com/engine/install/linux-postinstall/), to enable `docker` without `sudo`.

Then, install `docker-compose` through `pip` :

```shell
pip install docker-compose
```

You may need to reinstall Python :

```shell
sudo apt install python3-pip
```
