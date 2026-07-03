// Enhancement opsional: smooth scroll untuk anchor link
document.querySelectorAll('a[href^="#"]').forEach((link) => {
  link.addEventListener("click", function (e) {
    const targetId = this.getAttribute("href");
    if (targetId.length > 1 && document.querySelector(targetId)) {
      e.preventDefault();
      document.querySelector(targetId).scrollIntoView({ behavior: "smooth" });
    }
  });
});

// Catatan:
// Filter proyek (SEMUA / Laravel / REST API / IoT) sudah ditangani
// secara server-side lewat query string (?filter=...) di includes/projects.php,
// jadi tetap berfungsi walau JavaScript dimatikan.
