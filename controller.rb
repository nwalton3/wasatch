require 'compass'
require 'csv'
require 'ostruct'

# Compass support
Stasis::Options.set_template_option 'scss', { :load_paths => Compass.configuration.sass_load_paths }

# Layout
layout 'layout.html.slim'

root = Dir.pwd

# Scripts
before /.*html\.slim/ do
  @scripts = %w(jquery.min.js mediaelement-and-player.min.js plugins.js script.js)
end

# Index
before 'index.html.slim' do
  @title = "Wasatch Education"
  @css_file = "home"
  @detail_sections = []
  
  CSV.read("#{root}/data/index-details.csv").each do |row|
    detail = OpenStruct.new
    
    detail.class = row[0]
    detail.title = row[1]
    detail.desc = row[2]
    detail.link = row[3]
    detail.url = row[4]
    detail.img_src = row[5]
    detail.img_alt = row[6]
    
    @detail_sections << detail
  end
  
end