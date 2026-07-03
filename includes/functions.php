<?php
/**
 * Mengambil data proyek, dengan opsi filter berdasarkan tag
 */
function getProjects($filter = 'SEMUA')
{
    $projects = require __DIR__ . '/../data/projects.php';

    if ($filter === 'SEMUA' || empty($filter)) {
        return $projects;
    }

    return array_filter($projects, function ($project) use ($filter) {
        return in_array($filter, $project['tags']);
    });
}

/**
 * Mengambil semua tag unik dari daftar proyek untuk tombol filter
 */
function getProjectTags()
{
    $projects = require __DIR__ . '/../data/projects.php';
    $tags = ['SEMUA'];

    foreach ($projects as $project) {
        foreach ($project['tags'] as $tag) {
            if (!in_array($tag, $tags)) {
                $tags[] = $tag;
            }
        }
    }

    return $tags;
}

/**
 * Mengambil data keahlian teknis
 */
function getSkills()
{
    return require __DIR__ . '/../data/skills.php';
}

/**
 * Mengambil data sertifikasi
 */
function getCertifications()
{
    return require __DIR__ . '/../data/certifications.php';
}

/**
 * Helper untuk sanitasi output HTML
 */
function e($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
