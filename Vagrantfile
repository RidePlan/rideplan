# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "puphpet/debian75-x32"

  config.vm.network "forwarded_port", guest: 80, host: 8000
  config.vm.hostname = "rideplan.eu"

  config.vm.provision :puppet do |puppet|
    puppet.hiera_config_path = "puppet/hiera.yaml"
    puppet.manifests_path = "puppet/manifests"
    puppet.module_path = "puppet/modules"
  end
end
