Exec { path => ['/bin/', '/sbin/', '/usr/bin/', '/usr/sbin/'] }

exec { 'update system package definitions':
  command => 'apt-get update',
}

class composer {

  package { 'curl':
    ensure => present
  }

  package { 'php5-cli':
    ensure => present,
  }

  exec { 'install composer':
    command => 'curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin && mv /usr/local/bin/composer.phar /usr/local/bin/composer',
    creates => '/usr/local/bin/composer',
    require => [Package['curl'], Package['php5-cli']]
  }
}

include composer
