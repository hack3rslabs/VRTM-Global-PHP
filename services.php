<?php
require_once __DIR__ . '/includes/functions.php';

$page_title = 'Our IT Services & Custom Solutions';
$meta_description = 'Explore VRTM Global Technology\'s software development services including Web Design, IT Consulting, AI integration, and Business Process Automation.';
$meta_keywords = 'IT services, software consulting, AI integration, process automation, web design, API integration, VRTM Global Technology services';

require_once __DIR__ . '/includes/header.php';

$services = [
  [
    'title' => 'Custom Software Development',
    'icon'  => icon_code(),
    'desc'  => 'End-to-end software development lifecycle management. We architect and build scalable, secure, and custom software systems designed specifically for your enterprise requirements.',
    'deliverables' => ['Requirements Engineering', 'Software Architecture Design', 'Full-Stack Implementation', 'Quality Assurance'],
  ],
  [
    'title' => 'Web Design &amp; Application Development',
    'icon'  => icon_layout(),
    'desc'  => 'Creating robust, responsive, and high-performance web applications. Our engineering team focuses on state-of-the-art frameworks to deliver premium user experiences.',
    'deliverables' => ['UI/UX Design Systems', 'Frontend Engineering', 'Backend API Development', 'Progressive Web Apps'],
  ],
  [
    'title' => 'IT Consulting &amp; Project Management',
    'icon'  => icon_server(),
    'desc'  => 'Strategic technology consulting to align IT infrastructure with business objectives. We provide technical leadership and agile project management for complex deliveries.',
    'deliverables' => ['Technology Audits', 'Cloud Strategy', 'Agile Delivery Management', 'Risk Assessment'],
  ],
  [
    'title' => 'AI-Enabled Applications',
    'icon'  => icon_cpu(),
    'desc'  => 'Integrating artificial intelligence into existing workflows. We develop intelligent features that leverage data to automate tasks, predict trends, and enhance software capabilities.',
    'deliverables' => ['Machine Learning Integration', 'Data Pipeline Engineering', 'Predictive Analytics', 'Natural Language Processing'],
  ],
  [
    'title' => 'Business Process Automation',
    'icon'  => icon_workflow(),
    'desc'  => 'Digitizing and automating manual operational processes to increase efficiency, reduce human error, and lower operational costs across your organization.',
    'deliverables' => ['Workflow Optimization', 'RPA Implementation', 'Custom Scripting', 'Monitoring Dashboards'],
  ],
  [
    'title' => 'System Integration, Support &amp; Maintenance',
    'icon'  => icon_wrench(),
    'desc'  => 'Ensuring your legacy and modern systems communicate seamlessly. We provide ongoing support, monitoring, and proactive maintenance for critical software infrastructure.',
    'deliverables' => ['API Development &amp; Integration', 'Legacy System Modernization', '24/7 SLA Support', 'Performance Tuning'],
  ],
];
?>

<div class="section">
  <h1 class="section-title fade-in-up">Our Services</h1>
  <p class="fade-in-up delay-100" style="color:var(--text-secondary);margin-bottom:3rem;font-size:1.1rem;max-width:800px;">
    VRTM Global Technology offers a comprehensive suite of software engineering and IT consulting services.
    We specialize in building sophisticated technology solutions for enterprise clients.
  </p>

  <div class="grid grid-2">
    <?php foreach ($services as $i => $s):
      $delay = $i * 100 + 200;
    ?>
    <div class="card fade-in-up" style="animation-delay:<?= $delay ?>ms;">
      <h3 style="font-size:1.5rem;margin-bottom:1.5rem;">
        <span class="service-icon" style="color:var(--accent-teal);"><?= $s['icon'] ?></span>
        <?= $s['title'] ?>
      </h3>
      <p style="margin-bottom:1.5rem;font-size:1rem;line-height:1.7;color:var(--text-secondary);"><?= $s['desc'] ?></p>
      <h4 style="color:var(--text-primary);margin-bottom:1rem;">Key Deliverables:</h4>
      <ul style="color:var(--text-secondary);list-style-type:circle;padding-left:1.5rem;margin-bottom:1rem;">
        <?php foreach ($s['deliverables'] as $d): ?>
        <li style="margin-bottom:0.5rem;"><?= $d ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- CTA -->
  <div class="fade-in-up" style="animation-delay:600ms;background:linear-gradient(135deg,rgba(2,11,20,0.95) 0%,rgba(10,25,47,0.95) 100%);padding:3rem 2rem;border-radius:16px;margin-top:3rem;border:1px solid rgba(100,255,218,0.3);text-align:center;position:relative;overflow:hidden;box-shadow:0 15px 30px -10px rgba(0,198,255,0.2);">
    <div style="position:absolute;top:-50%;left:-10%;width:120%;height:200%;background:radial-gradient(circle,rgba(100,255,218,0.05) 0%,transparent 60%);z-index:0;"></div>
    <div style="position:relative;z-index:1;">
      <h2 style="font-size:2rem;color:var(--text-primary);margin-bottom:1rem;font-weight:800;letter-spacing:-0.5px;">
        Initiate a <span style="color:var(--accent-teal);">Technical Consultation.</span>
      </h2>
      <p style="color:var(--text-secondary);font-size:1.05rem;max-width:700px;margin:0 auto 1.5rem;line-height:1.6;">
        Engage our senior engineering team to discuss your enterprise requirements. Whether you are looking for end-to-end architecture or specialized API integrations, we deliver uncompromising results.
      </p>
      <a href="/contact.php" class="cta-button primary" style="display:inline-flex;align-items:center;gap:8px;font-size:1rem;padding:0.8rem 2rem;border-radius:50px;text-transform:uppercase;letter-spacing:1px;">
        Request a Proposal
      </a>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
