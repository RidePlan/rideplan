# -*- mode: ruby -*-
# vi: set ft=ruby :

$script = <<SCRIPT
  if [ ! -d "/etc/puppet/modules/nginx" ]; then
    puppet module install example42-nginx
  fi
  if [ ! -d "/etc/puppet/modules/mysql" ]; then
    puppet module install puppetlabs-mysql
  fi
SCRIPT

Vagrant.configure(2) do |config|
  config.vm.box = "puphpet/debian75-x32"

  config.vm.network "forwarded_port", guest: 80, host: 8000
  config.vm.hostname = "rideplan.eu"

  config.vm.provision "shell", inline: $script

  config.vm.provision :puppet do |puppet|
    puppet.hiera_config_path = "puppet/hiera.yaml"
    puppet.manifests_path = "puppet/manifests"
  end
end
