<?php
require_once __DIR__ . '/includes/functions.php';

$page_title = 'Top Software Development Company in AP, India';
$meta_description = 'VRTM Global Technology builds custom software applications for all sectors in India. Based in Tirupati and Visakhapatnam, AP state.';
$meta_keywords = 'VRTM Global, software development, Tirupati, Visakhapatnam, AP state, India, build applications, custom software engineering';

require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO SECTION -->
<section class="hero">
  <div>
    <h1 class="fade-in-up">Architecting the Future of Enterprise Technology.</h1>
    <p class="fade-in-up delay-100">
      VRTM Global Technology engineers mission-critical software solutions, scalable AI integrations, and digital transformation strategies. We transform complex operational challenges into streamlined, high-performance systems.
    </p>
    <div class="hero-buttons fade-in-up delay-200">
      <a href="/contact.php" class="cta-button primary">Schedule a Consultation</a>
      <a href="/services.php" class="cta-button">Explore Capabilities</a>
    </div>
  </div>

  <div class="hero-image-wrapper fade-in-up delay-300">
    <img src="/images/hero.jpg"                  alt="Enterprise Technology and Cloud Data Center Infrastructure"       class="hero-image-slide active" />
    <img src="/images/hero_cloud_architecture.jpg" alt="High-Performance Cloud Architecture and Server Engineering"      class="hero-image-slide" />
    <img src="/images/hero_ai_development.jpg"    alt="Artificial Intelligence and Machine Learning Development"        class="hero-image-slide" />
  </div>
</section>

<!-- METRICS SECTION -->
<div class="section-full">
  <div class="section-full-inner">
    <div class="metrics-grid">
      <div class="metric fade-in-up delay-100">
        <h3>99.99%</h3>
        <p>System Uptime Guaranteed</p>
      </div>
      <div class="metric fade-in-up delay-200">
        <h3>ISO</h3>
        <p>Certified Security Standards</p>
      </div>
      <div class="metric fade-in-up delay-300">
        <h3>24/7</h3>
        <p>Dedicated Global Support</p>
      </div>
    </div>
  </div>
</div>

<!-- SERVICES GRID -->
<section class="section">
  <div style="text-align:center;margin-bottom:4rem;">
    <h2 class="section-title centered fade-in-up">Engineering Capabilities</h2>
    <p class="fade-in-up delay-100" style="color:var(--text-secondary);max-width:600px;margin:0 auto;font-size:1.1rem;">
      We deliver highly specialized IT services tailored for organizations that demand uncompromising quality and performance.
    </p>
  </div>

  <div class="grid grid-3">
    <?php
    $services = [
      ['title' => 'Custom Software Development',      'icon' => icon_code(),     'desc' => 'End-to-end bespoke software architecture. We build highly scalable, secure, and resilient enterprise applications designed to give your business a definitive competitive advantage.'],
      ['title' => 'Enterprise Web Applications',      'icon' => icon_layout(),   'desc' => 'High-performance, progressive web applications utilizing modern tech stacks. Engineered for blazing-fast load times, exceptional UX, and rigorous security standards.'],
      ['title' => 'IT Consulting &amp; Strategy',     'icon' => icon_server(),   'desc' => 'Strategic roadmap planning and digital transformation consulting. We align your complex IT infrastructure with your long-term operational and financial goals.'],
      ['title' => 'AI &amp; Machine Learning',        'icon' => icon_cpu(),      'desc' => 'Intelligent automation and predictive analytics. We integrate advanced AI models to optimize decision-making, forecast trends, and streamline manual workflows.'],
      ['title' => 'Business Process Automation',      'icon' => icon_workflow(), 'desc' => 'Replacing repetitive tasks with intelligent, automated systems. Significantly reduce human error, lower operational costs, and accelerate delivery timelines.'],
      ['title' => 'System Integration &amp; SLA Support', 'icon' => icon_wrench(), 'desc' => 'Seamless integration of disparate legacy systems with modern cloud infrastructure. Backed by our 24/7 dedicated support and 99.99% uptime guarantees.'],
    ];
    foreach ($services as $i => $s):
      $delay = ($i * 100 + 100);
    ?>
    <div class="card fade-in-up" style="animation-delay:<?= $delay ?>ms;">
      <h3>
        <span class="service-icon" style="color:var(--accent-teal)"><?= $s['icon'] ?></span>
        <?= $s['title'] ?>
      </h3>
      <p style="color:var(--text-secondary);"><?= $s['desc'] ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- QUALITY SECTION -->
<section class="section" style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;margin:4rem auto;">
  <div class="fade-in-up delay-100">
    <img src="/images/engineering.jpg" alt="Software Engineering Excellence"
         style="width:100%;border-radius:12px;box-shadow:0 20px 40px rgba(0,0,0,0.4);border:1px solid rgba(136,146,176,0.2);" />
  </div>
  <div>
    <h2 class="section-title fade-in-up" style="margin-bottom:1.5rem;margin-top:0;">Uncompromising Quality.</h2>
    <p class="fade-in-up delay-100" style="color:var(--text-secondary);margin-bottom:2rem;font-size:1.1rem;line-height:1.8;">
      At VRTM Global Technology, we don&apos;t just write code—we engineer solutions that drive measurable business outcomes. Our architects meticulously design systems that are resilient against cyber threats, effortlessly scalable under massive traffic loads, and optimized for unparalleled speed.
    </p>
    <ul class="fade-in-up delay-200" style="list-style:none;color:var(--text-primary);margin-bottom:2.5rem;">
      <li style="margin-bottom:1rem;display:flex;align-items:center;gap:1rem;">
        <span style="color:var(--accent-teal);"><?= icon_zap() ?></span> High-Performance Optimization
      </li>
      <li style="margin-bottom:1rem;display:flex;align-items:center;gap:1rem;">
        <span style="color:var(--accent-teal);"><?= icon_shield_check() ?></span> Bank-Grade Security Implementation
      </li>
      <li style="display:flex;align-items:center;gap:1rem;">
        <span style="color:var(--accent-teal);"><?= icon_globe() ?></span> Cloud-Native Scalability
      </li>
    </ul>
    <a href="/about.php" class="cta-button fade-in-up delay-300">Discover Our Methodology</a>
  </div>
</section>

<!-- CTA SECTION -->
<section class="section">
  <div class="cta-banner">
    <div class="cta-banner-bg"></div>
    <div class="cta-banner-content">
      <h2 class="section-title centered fade-in-up">Ready to Scale Your Operations?</h2>
      <p class="fade-in-up delay-100">
        Partner with our elite engineering team to architect, develop, and deploy your next major digital initiative. Get a comprehensive technical consultation today.
      </p>
      <div class="fade-in-up delay-200">
        <a href="/contact.php" class="cta-button primary" style="display:inline-flex;align-items:center;gap:0.75rem;padding:1.2rem 2.5rem;font-size:1.1rem;">
          Start the Conversation <?= icon_arrow_right() ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
