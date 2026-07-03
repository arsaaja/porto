<?php $skillGroups = getSkills(); ?>
<section id="keahlian" class="skills">
    <h2>Keahlian <span class="highlight">Teknis</span></h2>

    <div class="skills-container-box">
        <?php foreach ($skillGroups as $group): ?>
            <div class="skill-group">
                <h4><?= $group['icon'] ?>     <?= e($group['category']) ?></h4>
                <div class="skill-chips">
                    <?php foreach ($group['items'] as $item): ?>
                        <span class="chip"><?= e($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>