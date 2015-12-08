# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "puppetlabs/debian-7.8-32-puppet"

  config.vm.network "private_network", ip: "192.168.15.5"
  config.vm.hostname = "rideplan.eu"

  config.vm.provision "shell", path: "puppet/modules.sh"

  config.vm.provision :puppet do |puppet|
    puppet.environment = "production"
    puppet.environment_path = "puppet/environments"
  end
end
