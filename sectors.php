<?php
require_once __DIR__ . '/includes/functions.php';

$page_title = 'Industry Sectors & Solutions';
$meta_description = 'Software solutions for Healthcare, Education, Agriculture, E-commerce, and Logistics. We tailor technology for your industry.';
$meta_keywords = 'Healthcare IT, Education technology, AgriTech, E-commerce software, Logistics technology, VRTM Global Technology industries';

require_once __DIR__ . '/includes/header.php';

$sectors = [
  [
    'title'  => 'Healthcare IT',
    'icon'   => icon_heart_pulse(),
    'accent' => '#ff4d4f',
    'image'  => '/images/healthcare.jpg',
    'desc'   => 'We develop HIPAA-compliant software solutions that revolutionize patient care and hospital administration. From telemedicine platforms and robust Electronic Health Records (EHR) systems to AI-driven diagnostics, we ensure data integrity, ironclad security, and interoperability across the healthcare ecosystem.',
    'points' => ['HIPAA-Compliant Architecture', 'AI-Driven Diagnostics', 'EHR Integration'],
  ],
  [
    'title'  => 'EdTech Solutions',
    'icon'   => icon_graduation_cap(),
    'accent' => '#faad14',
    'image'  => '/images/education.jpg',
    'desc'   => 'Transforming the learning experience through scalable educational technology. We architect Learning Management Systems (LMS), virtual classrooms, and data-driven student performance analytics that are built to handle millions of concurrent users without latency.',
    'points' => ['Scalable LMS Platforms', 'Virtual Classrooms', 'Performance Analytics'],
  ],
  [
    'title'  => 'AgriTech Innovation',
    'icon'   => icon_sprout(),
    'accent' => '#52c41a',
    'image'  => '/images/agriculture.jpg',
    'desc'   => 'Bringing precision and intelligence to the agricultural sector. Our software integrates seamlessly with IoT sensors and drone networks to provide real-time crop analytics, predictive yield modeling, and automated supply chain tracking from farm to table.',
    'points' => ['IoT Sensor Integration', 'Predictive Yield Modeling', 'Supply Chain Tracking'],
  ],
  [
    'title'  => 'E-commerce &amp; FinTech',
    'icon'   => icon_shopping_cart(),
    'accent' => '#1890ff',
    'image'  => '/images/ecommerce.jpg',
    'desc'   => 'High-availability financial and retail platforms engineered for peak traffic events. We implement PCI-compliant payment gateways, advanced fraud detection algorithms, and highly optimized checkout flows that maximize conversion rates.',
    'points' => ['PCI-Compliant Gateways', 'High-Availability Retail', 'Fraud Detection Algorithms'],
  ],
  [
    'title'  => 'Global Logistics',
    'icon'   => icon_truck(),
    'accent' => '#722ed1',
    'image'  => '/images/logistics.jpg',
    'desc'   => 'Optimizing global supply chains with enterprise-grade tracking systems. We build algorithmic routing engines, warehouse management software (WMS), and real-time fleet telemetry dashboards that significantly reduce operational bottlenecks.',
    'points' => ['Algorithmic Routing Engines', 'Real-Time Telemetry', 'Warehouse Management (WMS)'],
  ],
];
?>

<div class="section">

  <div class="sectors-header">
    <h1 class="section-title text-gradient fade-in-up">Industries We Empower</h1>
    <p class="sectors-subtitle fade-in-up delay-100">
      We engineer specialized software solutions tailored to the unique regulatory, operational, and technical demands of key industry verticals. Our domain-driven design ensures transformative impact.
    </p>
  </div>

  <?php foreach ($sectors as $i => $sector):
    $is_even = ($i % 2 === 0);
  ?>
  <div class="sector-row <?= $is_even ? 'even' : 'odd' ?>">
    <?php if ($is_even): ?>
      <div class="fade-in-up" style="animation-delay:100ms;">
        <img src="<?= h($sector['image']) ?>" alt="<?= h($sector['title']) ?>"
             class="sector-img" style="border:1px solid <?= h($sector['accent']) ?>40;" />
      </div>
      <div class="sector-content fade-in-up" style="animation-delay:300ms;">
        <div class="sector-icon" style="color:<?= h($sector['accent']) ?>;"><?= $sector['icon'] ?></div>
        <h2><?= $sector['title'] ?></h2>
        <p><?= $sector['desc'] ?></p>
        <ul style="list-style:none;margin-bottom:2.5rem;">
          <?php foreach ($sector['points'] as $j => $point): ?>
          <li class="sector-point fade-in-up" style="animation-delay:<?= 400 + $j * 100 ?>ms;">
            <span class="sector-bullet" style="background:<?= h($sector['accent']) ?>;box-shadow:0 0 10px <?= h($sector['accent']) ?>;"></span>
            <?= h($point) ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php else: ?>
      <div class="sector-content fade-in-up" style="animation-delay:100ms;">
        <div class="sector-icon" style="color:<?= h($sector['accent']) ?>;"><?= $sector['icon'] ?></div>
        <h2><?= $sector['title'] ?></h2>
        <p><?= $sector['desc'] ?></p>
        <ul style="list-style:none;margin-bottom:2.5rem;">
          <?php foreach ($sector['points'] as $j => $point): ?>
          <li class="sector-point fade-in-up" style="animation-delay:<?= 300 + $j * 100 ?>ms;">
            <span class="sector-bullet" style="background:<?= h($sector['accent']) ?>;box-shadow:0 0 10px <?= h($sector['accent']) ?>;"></span>
            <?= h($point) ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="fade-in-up" style="animation-delay:300ms;">
        <img src="<?= h($sector['image']) ?>" alt="<?= h($sector['title']) ?>"
             class="sector-img" style="border:1px solid <?= h($sector['accent']) ?>40;" />
      </div>
    <?php endif; ?>
  </div>
  <?php endforeach; ?>

  <!-- CTA -->
  <div class="fade-in-up" style="background:linear-gradient(135deg,rgba(2,11,20,0.95) 0%,rgba(10,25,47,0.95) 100%);padding:6rem 4rem;border-radius:24px;margin-top:6rem;border:1px solid rgba(100,255,218,0.3);text-align:center;position:relative;overflow:hidden;box-shadow:0 30px 60px -15px rgba(0,198,255,0.2);">
    <div style="position:absolute;top:-50%;left:-10%;width:120%;height:200%;background:radial-gradient(circle,rgba(100,255,218,0.05) 0%,transparent 60%);z-index:0;"></div>
    <div style="position:relative;z-index:1;">
      <h2 style="font-size:3rem;color:var(--text-primary);margin-bottom:1.5rem;font-weight:800;letter-spacing:-1px;">
        Transform Your <span style="color:var(--accent-teal);">Industry.</span>
      </h2>
      <p style="color:var(--text-secondary);font-size:1.25rem;max-width:800px;margin:0 auto 3rem;line-height:1.8;">
        Our solutions are meticulously crafted for sector-specific challenges. Reach out to discuss how our software architecture can elevate your enterprise operations to the next level.
      </p>
      <a href="/contact.php" class="cta-button primary" style="display:inline-flex;align-items:center;gap:10px;font-size:1.1rem;padding:1.2rem 3rem;border-radius:50px;text-transform:uppercase;letter-spacing:1px;">
        Schedule an Industry Consultation <?= icon_arrow_right() ?>
      </a>
    </div>
  </div>

</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
