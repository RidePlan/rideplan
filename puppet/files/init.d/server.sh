#!/bin/sh

### BEGIN INIT INFO
# Required-Start:    $local_fs $remote_fs $network $syslog
# Required-Stop:     $local_fs $remote_fs $network $syslog
# Default-Start:     2 3 4 5
# Default-Stop:      0 1 6
# Short-Description: starts web server
# Description:       starts Symfony web application
### END INIT INFO

CONSOLE=/vagrant/app/console

test -x ${CONSOLE} || exit 0

case "$1" in
	start)
		${CONSOLE} server:start
		;;

	stop)
		${CONSOLE} server:stop
		;;

	status)
		${CONSOLE} server:status
		;;
	*)
		echo "Usage: $CONSOLE {start|stop|status}" >&2
		exit 1
		;;
esac

exit 0
