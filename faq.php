<?php
require_once __DIR__ . '/includes/functions.php';

$page_title = 'Frequently Asked Questions (FAQ) | VRTM Global';
$meta_description = 'Find answers to common questions about VRTM Global Technology software engineering, careers, and services.';
$meta_keywords = 'VRTM FAQ, software company questions, IT consultation Tirupati';

$faqs = [
  [
    'q' => 'Where is VRTM Global Technology located?',
    'a' => 'Our global headquarters is in Tirupati, AP (D.No: 9, 2nd Floor, Tiruchanoor Rd, beside Rahul Convention Center, Yogimallavaram, 517503). We also operate development hubs in Visakhapatnam and serve enterprise clients worldwide.',
  ],
  [
    'q' => 'What core technologies does VRTM specialize in?',
    'a' => 'We specialize in React, Node.js, Python, Cloud Native microservices, artificial intelligence and LLM integration, DevOps automation, and mission-critical enterprise web and mobile applications.',
  ],
  [
    'q' => 'Does VRTM Global hire fresh graduates?',
    'a' => 'Yes! We actively nurture career beginners and freshers from Andhra Pradesh and across India. We provide intensive mentorship, modern hardware, and real-world project engagement.',
  ],
  [
    'q' => 'How do we initiate a technical project with VRTM?',
    'a' => 'You can submit an enquiry via our Contact page or message us directly on WhatsApp (+91 9989893225). Our solution architects will schedule a discovery consultation within 24 business hours.',
  ],
  [
    'q' => 'What security standards does your code follow?',
    'a' => 'Our software engineering lifecycle implements OWASP Top 10 defenses, strict input sanitization, least-privilege access controls, and automated vulnerability scanning.',
  ],
];

require_once __DIR__ . '/includes/header.php';
?>

<div class="section" style="max-width:900px;margin:0 auto;padding-bottom:6rem;">

  <div style="text-align:center;margin-bottom:3rem;">
    <h1 class="section-title centered fade-in-up">Frequently Asked Questions</h1>
    <p class="fade-in-up delay-100" style="color:var(--text-secondary);font-size:1.1rem;">
      Everything you need to know about partnering with or joining VRTM Global Technology.
    </p>
  </div>

  <div style="display:flex;flex-direction:column;gap:1.5rem;margin-bottom:4rem;">
    <?php foreach ($faqs as $i => $faq): ?>
    <div class="card faq-item fade-in-up" style="animation-delay:<?= ($i * 100) ?>ms;padding:0;overflow:hidden;">
      <button class="faq-toggle" style="width:100%;background:none;border:none;cursor:pointer;padding:1.5rem 2rem;text-align:left;display:flex;align-items:center;justify-content:space-between;gap:1rem;">
        <h3 class="faq-q" style="margin:0;font-size:1.15rem;">
          <span style="color:var(--accent-teal);flex-shrink:0;"><?= icon_help_circle() ?></span>
          <?= h($faq['q']) ?>
        </h3>
        <span class="faq-toggle-icon" style="color:var(--accent-teal);font-size:1.5rem;font-weight:300;flex-shrink:0;">+</span>
      </button>
      <div class="faq-answer" style="display:none;padding:0 2rem 1.5rem 2rem;">
        <p class="faq-a" style="padding-left:30px;"><?= h($faq['a']) ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="card fade-in-up" style="text-align:center;padding:3rem;border:1px solid rgba(100,255,218,0.2);">
    <h3 style="color:var(--text-primary);font-size:1.5rem;margin-bottom:1rem;">Have more questions?</h3>
    <p style="color:var(--text-secondary);margin-bottom:1.5rem;">Our engineering leadership team is always ready to assist you.</p>
    <a href="/contact.php" class="cta-button primary" style="display:inline-flex;align-items:center;gap:8px;">
      Reach Out to Us <?= icon_arrow_right() ?>
    </a>
  </div>

</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
