<?php
// Initialize curl
$ch = curl_init();
 
// URL for Scraping
curl_setopt($ch, CURLOPT_URL, 'https://noviclicks.com/');
 
// Return Transfer True
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$output = curl_exec($ch);
 
// Closing cURL
curl_close($ch);
 
// For web page display
echo '<head>';
echo '<meta http-equiv="content-type"
    content="text/html; charset=utf-8" />';
echo '</head>';
echo '<body>';
 
echo '<h1>Web Scraping using cURL</h1>';
// Checking for images
preg_match_all('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*\.(?:jpeg|gif|png)/i', $output, $matches);

foreach ($matches[0] as $list) { ?>
 <ul>
    <li><?php echo $list;?></li>
 </ul>   
<?php }
 
echo '</body>';
 
?>