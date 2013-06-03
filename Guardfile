# A sample Guardfile
# More info at https://github.com/guard/guard#readme

notification :off
interactor :off

# alas, phpunit doesn't let us disable code-coverage on the CLI,
# so there's a seperate .xml config that doesn't do code coverage
guard 'phpunit', :cli => '--colors --configuration phpunit-nocoverage.xml', :tests_path => 'tests',
        :keep_failed => true, :all_after_pass => true do
  watch(%r{^tests/.+Test\.php$})
  watch(%r{^src/(.+)\.php$}) { |m| "tests/#{m[1]}Test.php" }
  watch(%r{^application/(.+)\.php$}) { |m| "tests/#{m[1]}Test.php" }
end
