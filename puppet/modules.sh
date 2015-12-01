#!/bin/sh

install_module () {
  if [ ! -d "/etc/puppetlabs/code/environments/production/modules/$1" ]; then
    puppet module install $2
  fi
}

install_module composer willdurand-composer
install_module nginx jfryman-nginx
install_module mysql puppetlabs-mysql
install_module php mayflower-php
