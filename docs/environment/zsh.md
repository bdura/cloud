# Using a Decent Shell

Most distributions come with the Bourne Again Shell (bash). You can do better by using Zsh, an alternative to Bash that provides a myriad of bonuses.

## Primer on the Command Line

If this your first time using the command line, you should probably
read this [primer](https://ubuntu.com/tutorials/command-line-for-beginners)
by Ubuntu.

Although the tutorial is designed for Ubuntu users, you can follow along with
any Linux or Mac computer. On PC, you'll need the [Windows Subsystem for Linux](https://docs.microsoft.com/en-us/windows/wsl/install).
I have never done this since I do not own a PC, but I know this is a popular set up
among developers using PC.

## Zsh

### Installation

Follow the [instructions](https://github.com/ohmyzsh/ohmyzsh/wiki/Installing-ZSH).

### Install oh-my-zsh

oh-my-zsh is a package manager for Zsh. It can help you customize your shell with incredibly useful perks. Follow the [instructions](https://github.com/ohmyzsh/ohmyzsh#basic-installation).

### Install spaceship-prompt

There are other prompts out there, but Spaceship is a good way to start. Follow the [instructions](https://github.com/spaceship-prompt/spaceship-prompt#oh-my-zsh).

### Configuring your shell

The following `.zshrc` should be a good place to start.

```shell title="~/.zshrc"
--8<-- ".zshrc"
```
