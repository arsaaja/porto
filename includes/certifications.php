<?php $certs = getCertifications(); ?>
<section id="sertifikat" class="certifications">
    <h2>Sertifikasi <span class="highlight">Profesional</span></h2>

    <div class="cert-grid">
        <?php foreach ($certs as $cert): ?>
            <div class="cert-card">
                <span class="cert-icon"><?= $cert['icon'] ?></span>
                <div class="cert-info">
                    <h4><?= e($cert['title']) ?></h4>
                    <p><?= e($cert['issuer']) ?></p>
                    <span class="cert-status"><?= e($cert['status']) ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
