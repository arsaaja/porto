<?php
$activeFilter = isset($_GET['filter']) ? $_GET['filter'] : 'SEMUA';
$projects     = getProjects($activeFilter);
$tags         = getProjectTags();
?>
<section id="portofolio" class="projects">
    <h2>Proyek <span class="highlight">Terpilih</span></h2>

    <div class="filter-tabs">
        <?php foreach ($tags as $tag): ?>
            <a href="?filter=<?= urlencode($tag) ?>#portofolio"
               class="filter-btn <?= $tag === $activeFilter ? 'active' : '' ?>">
                <?= e($tag) ?>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="project-grid">
        <?php if (empty($projects)): ?>
            <p>Belum ada proyek untuk kategori ini.</p>
        <?php endif; ?>

        <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <div class="project-thumb">
                    <img src="<?= BASE_URL . e($project['image']) ?>" alt="<?= e($project['title']) ?>">
                </div>
                <div class="project-body">
                    <div class="project-tags">
                        <?php foreach ($project['tags'] as $t): ?>
                            <span class="tag"><?= e($t) ?></span>
                        <?php endforeach; ?>
                    </div>
                    <h3><?= e($project['title']) ?></h3>
                    <p><?= e($project['description']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
