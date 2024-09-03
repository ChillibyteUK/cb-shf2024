<section class="location_intro py-5">
    <div class="container-xl">
        <h2><?=get_field('title')?></h2>
        <div class="row g-4">
            <div class="col-lg-8 location_intro__content">
                <?=get_field('content')?>
            </div>
            <div class="col-lg-4">
                <div class="vimeo-embed ratio ratio-16x9" id="<?=get_field('vimeo_id')?>" title="<?=get_the_title()?>"></div>
                <a href="#" class="view-transcript" data-bs-toggle="collapse" data-bs-target="#transcriptCollapse" aria-expanded="false" aria-controls="transcriptCollapse">View Transcript <i class="fa-regular fa-plus"></i></a>
            </div>
        </div>
        <div class="collapse mt-4" id="transcriptCollapse">
            <div class="card card-body">
                <?=get_field('transcript') ?? null?>
            </div>
        </div>
    </div>
</section>
<?php
if (get_field('vimeo_id')) {
    $vimeo_id = get_field('vimeo_id');
    $transcript = get_field('transcript') ?? null;

    $vimeo_data = file_get_contents("https://vimeo.com/api/v2/video/{$vimeo_id}.json");
    $vimeo_data = json_decode($vimeo_data, true);

    $title = $vimeo_data[0]['title'];
    $description = $vimeo_data[0]['description'];
    $thumbnail = $vimeo_data[0]['thumbnail_large'];
    $uploadDate = $vimeo_data[0]['upload_date'];
    $duration = $vimeo_data[0]['duration']; // Duration in seconds - convert to ISO 8601

    // Convert duration to ISO 8601 format
    $duration_iso = new DateInterval("PT{$duration}S");

    $image = get_stylesheet_directory_uri() . '/img/shf-logo--dark.svg';

    // Generate the schema markup
    $schema_markup = [
        "@context" => "https://schema.org",
        "@type" => "VideoObject",
        "name" => $title,
        "description" => $description,
        "thumbnailUrl" => $thumbnail,
        "uploadDate" => $uploadDate,
        "contentUrl" => "https://vimeo.com/{$vimeo_id}",
        "embedUrl" => "https://player.vimeo.com/video/{$vimeo_id}",
        "duration" => $duration_iso->format('PT%hH%iM%sS'),
        "transcript" => $transcript,
        "publisher" => [
            "@type" => "Organization",
            "name" => "SellHouseFast.co.uk",
            "logo" => [
                "@type" => "ImageObject",
                "url" => $image
            ]
        ]
    ];

    echo '<script type="application/ld+json">' . json_encode($schema_markup) . '</script>';
}

add_action('wp_footer', function(){
    ?>
<script>
document.querySelectorAll('.vimeo-embed').forEach(v => {
  const poster = `vumbnail.com/${v.id}.jpg`;
  const src = 'player.vimeo.com/video';

  v.innerHTML = `<img loading="lazy" src="https://${poster}" alt="${v.title}" aria-label="Play">`;

  v.children[0].addEventListener('click', () => {
      v.innerHTML = `<iframe allow="autoplay" src="https://${src}/${v.id}?autoplay=1" allowfullscreen></iframe>`;
      v.classList.add('video-loaded');
  });
});
</script>
    <?php
});