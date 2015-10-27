Exec { path => ['/bin/', '/sbin/', '/usr/bin/', '/usr/sbin/'] }

exec { 'update system package definitions':
  command => 'apt-get update',
}

class php-setup {

  package { 'php5-cli':
    ensure => present,
  }
}

class composer-setup {

  package { 'curl':
    ensure => present
  }

  exec { 'install composer':
    command => 'curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin && mv /usr/local/bin/composer.phar /usr/local/bin/composer',
    creates => '/usr/local/bin/composer',
    require => [Package['curl'], Package['php5-cli']]
  }
}

class nginx-setup {

  include 'nginx'

  file { '/etc/nginx/sites-available/default':
    owner   => root,
    group   => root,
    mode    => 644,
    source  => '/vagrant/puppet/files/nginx/default',
    require => Package["nginx"]
  }
}

class server-setup {

  file { '/etc/init.d/server':
    owner  => root,
    group  => root,
    mode   => 755,
    source => '/vagrant/puppet/files/init.d/server.sh'
  }

  file { '/etc/udev/rules.d/50-vagrant-mount.rules':
    owner   => root,
    group   => root,
    mode    => 644,
    source  => '/vagrant/puppet/files/udev/mount.rules',
  }

  exec { 'start server':
    command => '/etc/init.d/server start',
    require => [File['/etc/init.d/server'], Package['php5-cli']]
  }
}

class mysql-setup {

  class { '::mysql::server':
    root_password           => 'dbPwd123',
    remove_default_accounts => true,
  }

  mysql::db { 'rideplan':
    user     => 'rideplan',
    password => 'rideplanPwd123',
    host     => 'localhost',
  }
}

include php-setup
include composer-setup
include nginx-setup
include mysql-setup
include server-setup
