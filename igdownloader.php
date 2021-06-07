<?php
system('clear');
echo "


  ___ ____       ____   _____        ___   _ _     ___    _    ____  _____ ____  
 |_ _/ ___|     |  _ \ / _ \ \      / / \ | | |   / _ \  / \  |  _ \| ____|  _ \ 
  | | |  _ _____| | | | | | \ \ /\ / /|  \| | |  | | | |/ _ \ | | | |  _| | |_) |
  | | |_| |_____| |_| | |_| |\ V  V / | |\  | |__| |_| / ___ \| |_| | |___|  _ < 
 |___\____|     |____/ \___/  \_/\_/  |_| \_|_____\___/_/   \_\____/|_____|_| \_\
                                                                                                                                                                                                                     
              Instagram IMAGE/VIDEO Downloader                                                                        
                     Coded By WH173 5P1D3R

";
echo "Enter URL Post ( Ex: https://www.instagram.com/p/BDwuqbFBAcY ) : ";
$input = trim(fgets(STDIN));

// update link section on variables $url
$url = file_get_contents($input."/?__a=1");
$url2 = file_get_contents("https://api.instagram.com/oembed/?url=$input");
$data = json_decode($url2,true);

// get link Media
$getLink = json_decode($url);

if(isset($getLink->graphql->shortcode_media->video_url)){
    $fixedLink = $getLink->graphql->shortcode_media->video_url;
}else{
    $fixedLink = $getLink->graphql->shortcode_media->display_url;
}

echo "Post By : ";
echo $data['author_name'] ."\n";
echo "Caption : ";
echo $data['title'] ."\n\n";


// Response
echo "Link To Download Image/Video : "; echo $fixedLink."\n";
?>
