Exec { path => ['/bin/', '/sbin/', '/usr/bin/', '/usr/sbin/'] }

exec { 'apt-update':
  command => 'apt-get update'
}

Exec['apt-update'] -> Package <| |>

class nginx_setup {

  include 'nginx'

  nginx::resource::vhost { 'dev.rideplan.eu':
    proxy => 'http://127.0.0.1:8000',
  }
}

class mysql_setup {

  class { 'mysql::server':
    root_password           => 'dbPwd123',
    remove_default_accounts => true,
  }

  mysql::db { 'rideplan':
    user     => 'rideplan',
    password => 'rideplanPwd123',
    host     => 'localhost',
  }

  package { 'php5-mysql':
    ensure => present,
  }
}

class server_setup {

  file { '/etc/init.d/server':
    owner  => root,
    group  => root,
    mode   => '755',
    source => '/vagrant/puppet/files/init.d/server.sh'
  }

  file { '/etc/udev/rules.d/50-vagrant-mount.rules':
    owner   => root,
    group   => root,
    mode    => '644',
    source  => '/vagrant/puppet/files/udev/mount.rules',
  }

  exec { 'start server':
    command => '/etc/init.d/server start',
    require => [File['/etc/init.d/server'], Package['php5-cli']]
  }
}

include composer
include php
include nginx_setup
include mysql_setup
include server_setup
