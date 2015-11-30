# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "puphpet/debian75-x32"

  config.vm.network "private_network", ip: "192.168.15.5"
  config.vm.hostname = "rideplan.eu"

  config.vm.provision "shell", path: "puppet/modules.sh"

  config.vm.provision :puppet do |puppet|
    puppet.hiera_config_path = "puppet/hiera.yaml"
    puppet.manifests_path = "puppet/manifests"
  end
end
