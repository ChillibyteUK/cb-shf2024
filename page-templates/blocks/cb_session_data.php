<?php
$sessionData = getSessionData();

echo 'Referrer: ' . htmlspecialchars($sessionData['referring_url']) . '<br>';
echo 'First Page: ' . htmlspecialchars($sessionData['current_page']) . '<br>';
echo 'URL parameters: ' . htmlspecialchars($sessionData['url_parameters']) . '<br>';

?>
