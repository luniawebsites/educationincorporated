<?php

// Add unique string to URL to force refresh
$unique = time();

// =========================================================================
// Initialise cURL
// =========================================================================

set_time_limit(0);
$url = 'https://educationincorporated.tumblr.com/rss' . '/?' . $unique;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$cn = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);


// =========================================================================
// Get contents of file
// =========================================================================

if ($status == 200) {
	$feeds = file_get_contents($url);
	// $feeds = str_replace('<content:encoded>', '<contentEncoded>',$feeds);
	// $feeds = str_replace('</content:encoded>', '</contentEncoded>',$feeds);
	$xml = simplexml_load_string($feeds, 'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NOBLANKS);
}
else {
	$xml = "No XML";
};

// Construct article cards
foreach($xml->channel->item as $item) {
    echo '<div class="width-100-mob pad-xy-mob border-mob radius-mob">';
    echo '<div class="( blog-post-heading )"><a href="' . $item->link . '" target="_blank" rel="noopener">' . $item->title . '</a></div>';
    echo '<div class="( blog-post-date )">' . $item->pubDate . '</div>';
    // echo '<div class="( blog-post-description )">' . $item->description . '</div>';
    echo '</div>';
}

// =========================================================================
// Close cURL
// =========================================================================

curl_close($ch);
// header('Content-type: application/json');
// echo json_encode($xml_json, true);
