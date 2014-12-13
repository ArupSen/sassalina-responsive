#!/usr/bin/ruby
# supply each string as command line arguments
ARGV.each {|x| puts x.downcase.gsub(/[-\s]/," " => "_", "-" => "_")}
