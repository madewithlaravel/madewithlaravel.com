guard :coffeescript, :input => "app/assets/coffee", :output => "public/src/js"
guard :less, :all_on_start => true, :all_on_start => false, :output => 'public/src/css' do
  watch(%r[^app/assets/less/(.+\.less)$])
end
guard :concat, :type => "css", :files => %w[laravel], :input_dir => "public/src/css", :output => "public/assets/css/hello"
guard :concat, :type => "js", :files => %w[], :input_dir => "public/src/js", :output => "public/src/js/hello"
guard :concat, :type => "css", :files => %w[bootstrap], :input_dir => "public/src/css", :output => "public/assets/css/madewithlaravel"
guard :concat, :type => "js", :files => %w[], :input_dir => "public/src/js", :output => "public/src/js/madewithlaravel"

# Refresh the browser on save
guard 'livereload' do
  watch(%r{.+(?<!\.min)\.(css|html|js|blade\.php)$})
end

guard :phpunit, :all_on_start => false, :tests_path => 'app/tests/', :cli => '--colors -c phpunit.xml' do
  # Run any test in app/tests upon save.
  watch(%r{^.+Test\.php$})

  # When a view file is updated, run tests.
  # Tip: you probably only want to run your integration tests.
  watch(%r{app/views/.+\.php}) { Dir.glob('app/tests/**/*.php') }

  # When a file is edited, try to run its associated test.
  # Save app/models/User.php, and it will run app/tests/models/UserTest.php
  watch(%r{^app/(.+)/(.+)\.php$}) { |m| "app/tests/#{m[1]}/#{m[2]}Test.php"}
end
