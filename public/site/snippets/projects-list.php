<article class="article-style article-animated">
<div class="article-animated-content">
    <header>
        <h2 class="h5 anchor-item"><?= $project->headline()->or($project->title()) ?> </h2>
    </header>
    <?php if($project->illusintro()->isNotEmpty()):?>
   <?= $project->illusintro()->kt()?>
    <?php endif?>
    <a class="goProject" title="read all  <?= $project->headline()->or($project->title()) ?>" href="<?= $project->url()?>">
        <?= $project->headline()->or($project->title()) ?>
        </a>
    </div>
    <figure>
        <?php if($imgfront = $project->projectIllu()->toFile()):?>
        <img loading="lazy" class="thumb face" src="<?= $imgfront->crop(612,381)->url()?>" width="612" height="381" alt="<?= $project->title()?> presentation">
        <?php endif?>

        <?php if($imgback = $project->projectIlluBack()->toFile()):?>

        <?php if($imgback->type() == 'image'): ?>
        <?php if(!$imgback->extension() == 'gif'): ?>
        <img class="imgFull" src="<?= $imgback->crop(650,433)->url()?>" width="650" height="433" alt="<?= $project->title()?>
        presentation details">
        <?php else:?>
        <img class="imgFull" src="<?= $imgback->url()?>" width="<?= $imgback->width()?>" height="<?= $imgback->height()?>" alt="<?= $project->title()?> presentation details">
        <?php endif?>
        <?php endif?>

        <?php if($imgback->type() == 'video'): ?>
        <div class="imgFull video"> 
            <video class="html5"width="660" height="430" preload="none" controls poster="<?= $imgfront->crop(650,433)->url()?>">
                <source src="<?= $imgback->url()?>" type="video/<?= $imgback->extension()?>">
                <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
                    Voici <a href="<?= $imgback->url()?>">un lien pour télécharger la vidéo</a>.</p>
            </video>           
        </div>
        <?php endif?>

        <?php else:?>
        <img class="imgFull" src="<?= $imgfront->crop(650,433)->url()?>" width="650" height="433" alt="<?= $project->title()?> presentation details">
        <?php endif?>

        <figcaption>
            <h3><a class="anchor-item" title="Read article" href="<?= $project->url()?>"><?= $project->title()?></a></h3>
        </figcaption>
    </figure>

    

    <button title="Close window" aria-label="Close window" class="closeClone"></button>
    <button title="Open window" aria-label="Open window" class="btnOpenClone"></button>
</article>