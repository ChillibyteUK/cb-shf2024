<?php
$sessionData = getSessionData();

echo '<input type="text" name="referring_url" value="' . htmlspecialchars($sessionData['referring_url']) . '">';
echo '<input type="text" name="current_page" value="' . htmlspecialchars($sessionData['current_page']) . '">';
echo '<input type="text" name="url_parameters" value="' . htmlspecialchars($sessionData['url_parameters']) . '">';

?>
