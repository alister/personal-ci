#!/bin/sh

# Run the tests from ./tests
#
# You can run all the test (that are not excluded)
#   ./runTests.sh .
# or a subset (often by directory)
#   ./runTests.sh basics/

clear
date
#cd tests

#echo "only some of the tests here work right now."
#echo "the rest are blacklisted in phpunit.xml. Feel free to fix that."
mkdir -p ./build/logs ./build/coverage/ ./logs/ ./tmp/

TEST="$@"
#VERBOSE="--verbose "
#COVERAGE="--coverage-html=../build/coverage"
COLORS="--colors"
# config run by default, includes bootstrap
#CONF="--configuration phpunit.xml --bootstrap=bootstrap.php"
# Setting exclude-group here overrides the config
##GROUP="--exclude-group externalAPI,DontRunThisGroup"
#MORE="--stop-on-failure"

# Use the phpunit brought in by Composer
PHPUNIT="vendor/bin/phpunit"
#PHPUNIT="parallel-phpunit"   not for me right now.

time \
  $PHPUNIT $GROUP $COLORS $VERBOSE $CONF $MORE $COVERAGE $TEST

# http://stackoverflow.com/questions/911168/how-to-detect-if-my-shell-script-is-running-through-a-pipe
if [ -t 1 ] ; then 
  echo ""
  echo ""
  echo -n "press [Enter] to re-run:> "
  read x
  #cd ..

  exec $0 $@
fi
