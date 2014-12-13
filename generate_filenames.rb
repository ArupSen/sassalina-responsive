# create downcased underscore separated filenames
class Filename
  def php_file str
    str.downcase.gsub(" ", "_") + ".php"
  end
  def jpg_file str
    str.downcase.gsub(" ", "_")
  end
end
