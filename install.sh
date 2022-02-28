# Install zsh
sudo apt install -y zsh

# Install oh-my-zsh
sh -c "$(curl -fsSL https://raw.githubusercontent.com/ohmyzsh/ohmyzsh/master/tools/install.sh)"

# Install spaceship-prompt
git clone https://github.com/spaceship-prompt/spaceship-prompt.git "$ZSH_CUSTOM/themes/spaceship-prompt" --depth=1
ln -s "$ZSH_CUSTOM/themes/spaceship-prompt/spaceship.zsh-theme" "$ZSH_CUSTOM/themes/spaceship.zsh-theme"

# Install micro
curl https://getmic.ro | bash
# Create a .local/bin folder
mkdir -p $HOME/.local/bin
# Move the executable to the new folder
mv micro $HOME/.local/bin

# Copy .zshrc
rm $HOME/.zshrc
cp .zshrc $HOME
source $HOME/.zshrc
