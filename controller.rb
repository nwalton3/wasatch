require 'csv'
require 'ostruct'
require 'google_drive'
require 'json'
require 'pp'

layout 'layout.html.slim'
ignore /\/_.*/
root = Dir.pwd


# Index
before 'index.html.slim' do
  @title = "Wasatch Education"
  @css_file = "home"
  @detail_sections = []
  
  CSV.read(File.join(root, 'data/index-details.csv')).each do |row|
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


# Dashboard
before 'ib_dashboard.html.slim' do
  @title = "Wasatch Education: My Dashboard"
  @css_file = "dashboard"
  @standard_topics = get_topics('0Apki4sWS3XZydFo4R1ppVnFQakswZjVmdEdsMWNaM1E')
  @higher_topics = get_topics('0Apki4sWS3XZydFZhMF9pUEZpSUR2eHE5WjdUWHJUX3c')
end

before 'ap_dashboard.html.slim' do
  @title = "Wasatch Education: My Dashboard"
  @css_file = "dashboard"
  @topics = get_topics('0Apki4sWS3XZydHcyWGpwTDlIQkNPNUF2ZlVYU0RqZGc')
end

before 'a_dashboard.html.slim' do
  @title = "Wasatch Education: My Dashboard"
  @css_file = "dashboard"
  @as_topics = get_topics('0Apki4sWS3XZydEpub1BuVzN0NXF6UGRvX1hfMWFuZVE')
  @a2_topics = get_topics('0Apki4sWS3XZydFlWUHV1amY0emwxbm9KMlNCWG9ka2c')
end


# Individual Videos
before 'charles.html.slim' do
  @title = "Wasatch Education: Charle's Law"
  @standard_topics = get_topics('0Apki4sWS3XZydFo4R1ppVnFQakswZjVmdEdsMWNaM1E')
  @higher_topics = get_topics('0Apki4sWS3XZydFZhMF9pUEZpSUR2eHE5WjdUWHJUX3c')
end

before 'ideal.html.slim' do
  @title = "Wasatch Education: Ideal Gas Law"
  @standard_topics = get_topics('0Apki4sWS3XZydFo4R1ppVnFQakswZjVmdEdsMWNaM1E')
  @higher_topics = get_topics('0Apki4sWS3XZydFZhMF9pUEZpSUR2eHE5WjdUWHJUX3c')
end

before 'molar.html.slim' do
  @title = "Wasatch Education: Molar Volume"
  @standard_topics = get_topics('0Apki4sWS3XZydFo4R1ppVnFQakswZjVmdEdsMWNaM1E')
  @higher_topics = get_topics('0Apki4sWS3XZydFZhMF9pUEZpSUR2eHE5WjdUWHJUX3c')
end


# 404
before '404.html.slim' do
  @title = "Wasatch Education : 404 | Not found"
end


# Helpers
helpers do
  def recursive(i=0)
    $arr[i].each do |row|
      subs = []
    
      recursive(i+1) if $arr[i+1]
    
      if (i+1) < ($arr.length)      
        $arr[i+1].each do |sub_row|
          if sub_row["belongs_to"] == row["no"]
            subs << sub_row
          end
        end
      
        subs_hash = { "subs" => subs }
        row.merge!(subs_hash)
      end
    end
  end

  def get_topics(key)
    google_session = GoogleDrive.login('username@gmail.com', 'password')
    worksheets = google_session.spreadsheet_by_key(key).worksheets()
    $arr = []

    worksheets.each do |worksheet|
      arr = worksheet.list.to_hash_array
      $arr << arr
    end

    recursive()
    return $arr[0]
  end
end