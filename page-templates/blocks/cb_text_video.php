<?php
$class = $block['className'] ?? 'py-5';

$containerBg = get_field('background') == 'grey-400' ? 'bg-grey-400' : 'bg-white';
$contentBg = get_field('background') == 'grey-400' ? 'bg-white' : 'bg-grey-400';

?>
<section class="text_video <?=$containerBg?> <?=$class?>">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-md-6 <?=$contentBg?> p-5">
                <?=get_field('text')?>
            </div>
            <div class="col-md-6 text_video__video">
                <div class="vimeo-embed ratio ratio-16x9" id="<?=get_field('vimeo_id')?>" title="VIDEO"></div>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function(){
    ?>
<script>
document.querySelectorAll('.vimeo-embed, .youtube-embed').forEach(v => {
  const [poster, src] = v.classList.contains('vimeo-embed') ?
    [`vumbnail.com/${v.id}.jpg`, 'player.vimeo.com/video'] :
    [`i.ytimg.com/vi/${v.id}/hqdefault.jpg`, 'www.youtube.com/embed'];

  v.innerHTML = `<img loading="lazy" src="https://${poster}" alt="${v.title}" aria-label="Play">`;

  v.children[0].addEventListener('click', () => {
      v.innerHTML = `<iframe allow="autoplay" src="https://${src}/${v.id}?autoplay=1" allowfullscreen></iframe>`;
      v.classList.add('video-loaded');
  });
});
</script>
    <?php
});