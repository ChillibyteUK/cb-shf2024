<div class="container-xl py-5">
<?php
$sessionData = getSessionData();

echo 'Referrer: ' . htmlspecialchars($sessionData['referring_url']) . '<br>';
echo 'First Page: ' . htmlspecialchars($sessionData['first_page']) . '<br>';

foreach ($sessionData as $key => $value) {
    echo $key . ': ' . htmlspecialchars($value) . '<br>';
}

?>
</div>