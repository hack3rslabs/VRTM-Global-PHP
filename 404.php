<?php
require_once __DIR__ . '/includes/functions.php';

$page_title = '404 - Page Not Found';
$meta_description = 'The page you are looking for does not exist. Return to VRTM Global Technology home.';
$meta_keywords = '404, not found, VRTM Global';

http_response_code(404);
require_once __DIR__ . '/includes/header.php';
?>

<div class="section not-found-container">
  <div style="max-width:600px;margin:0 auto;text-align:center;">

    <div style="font-size:6rem;font-weight:900;line-height:1;color:var(--accent-teal);text-shadow:0 0 30px rgba(100,255,218,0.4);margin-bottom:1rem;">
      404
    </div>

    <h1 style="color:var(--text-primary);font-size:2rem;margin-bottom:1rem;">Page Not Found</h1>

    <p style="color:var(--text-secondary);font-size:1.1rem;margin-bottom:2.5rem;line-height:1.7;">
      The requested URL could not be found on our server. The resource may have been relocated or you might have followed an outdated link.
    </p>

    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
      <a href="/" class="cta-button primary" style="display:inline-flex;align-items:center;gap:8px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
        Return Home
      </a>
      <a href="/contact.php" class="cta-button" style="display:inline-flex;align-items:center;gap:8px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        Contact Support
      </a>
    </div>

  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
