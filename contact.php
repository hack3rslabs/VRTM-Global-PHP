<?php
require_once __DIR__ . '/includes/functions.php';

$page_title = 'Contact Us | Tirupati & Visakhapatnam';
$meta_description = 'Contact VRTM Global to discuss your software project requirements. We operate in Tirupati, Visakhapatnam, AP state, India.';
$meta_keywords = 'Contact VRTM Global, software development Tirupati, Visakhapatnam tech company, AP state India software, build application';

// Form processing
$form_submitted = false;
$wa_url = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name        = trim(htmlspecialchars(substr($_POST['name'] ?? '', 0, 80)));
    $email       = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $company     = trim(htmlspecialchars(substr($_POST['company'] ?? '', 0, 100)));
    $service     = trim(htmlspecialchars(substr($_POST['service'] ?? '', 0, 100)));
    $description = trim(htmlspecialchars(substr($_POST['description'] ?? '', 0, 2000)));

    if ($name && $email && $service && $description) {
        $text  = "New Project Enquiry:\n\n";
        $text .= "Name: $name\nEmail: $email\n";
        $text .= "Company: " . ($company ?: 'N/A') . "\n";
        $text .= "Service Required: $service\n\n";
        $text .= "Project Description:\n$description";
        $wa_url = 'https://wa.me/919989893225?text=' . rawurlencode($text);
        $form_submitted = true;
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="section">
  <h1 class="section-title">Contact Us</h1>

  <?php if ($form_submitted && $wa_url): ?>
  <!-- Auto-redirect to WhatsApp -->
  <script>window.open(<?= json_encode($wa_url) ?>, '_blank', 'noopener,noreferrer');</script>
  <div class="form-success" style="margin-bottom:2rem;padding:2rem;">
    <div style="font-size:3rem;margin-bottom:1rem;">💬</div>
    <h3 style="color:var(--accent-teal);margin-bottom:0.5rem;">WhatsApp Opened!</h3>
    <p style="color:var(--text-secondary);">A WhatsApp window has been opened with your details. If it didn't open, <a href="<?= h($wa_url) ?>" target="_blank" style="color:var(--accent-teal);">click here</a>.</p>
    <br/>
    <a href="/contact.php" class="cta-button" style="display:inline-flex;">Submit Another Enquiry</a>
  </div>
  <?php endif; ?>

  <div class="contact-grid">

    <!-- LEFT: Contact Info -->
    <div>
      <div>
        <h2 style="color:var(--text-primary);font-size:2rem;margin-bottom:1.5rem;">Let&apos;s Build Something Great.</h2>
        <p style="color:var(--text-secondary);margin-bottom:3rem;font-size:1.1rem;">
          Reach out to our technical team to discuss your project requirements, request a consultation, or learn more about our software engineering capabilities in AP state and across India.
        </p>

        <div style="display:flex;flex-direction:column;gap:2rem;margin-bottom:3rem;">
          <div class="contact-info-row">
            <div class="contact-icon-wrapper"><?= icon_phone() ?></div>
            <div>
              <h4 style="color:var(--text-primary);margin-bottom:0.25rem;">Phone / WhatsApp</h4>
              <a href="https://wa.me/919989893225" target="_blank" rel="noopener noreferrer" style="color:var(--text-secondary);">+91 9989893225</a>
            </div>
          </div>
          <div class="contact-info-row">
            <div class="contact-icon-wrapper"><?= icon_mail() ?></div>
            <div>
              <h4 style="color:var(--text-primary);margin-bottom:0.25rem;">Email</h4>
              <a href="mailto:help@vrtmglobal.com" style="color:var(--text-secondary);">help@vrtmglobal.com</a>
            </div>
          </div>
          <div class="contact-info-row top">
            <div class="contact-icon-wrapper" style="margin-top:2px;"><?= icon_map_pin() ?></div>
            <div>
              <h4 style="color:var(--text-primary);margin-bottom:0.25rem;">Global Headquarters</h4>
              <p style="color:var(--text-secondary);line-height:1.6;">
                Head Office<br/>
                D.No: 9, 2nd Floor, Tiruchanoor Rd,<br/>
                Beside Rahul Convention Center,<br/>
                Yogimallavaram, Tirupati, AP - 517503.
              </p>
            </div>
          </div>
          <div class="contact-identity-box">
            <h4 style="color:var(--text-primary);margin-bottom:0.5rem;">Corporate Identity</h4>
            <p style="color:var(--text-secondary);line-height:1.6;font-size:0.95rem;">
              <strong>Legal Name:</strong> VRTM GLOBAL TECHNOLOGY PRIVATE LIMITED<br/>
              <strong>CIN:</strong> U62013AP2025PTC119531
            </p>
          </div>
        </div>
      </div>

      <div style="position:relative;">
        <img src="/images/startup_teamwork.jpg" alt="VRTM Global Support Team"
             style="width:100%;border-radius:12px;box-shadow:0 20px 40px rgba(0,0,0,0.5);border:1px solid rgba(100,255,218,0.2);" />
      </div>
    </div>

    <!-- RIGHT: Enquiry Form -->
    <div class="card" style="padding:2.5rem;">
      <h3 style="margin-bottom:1.5rem;font-size:1.8rem;">Project Enquiry Form</h3>
      <p style="color:var(--text-secondary);font-size:0.95rem;margin-bottom:2rem;">
        <em>Note: Submitting this form will securely open WhatsApp on your device to send your project details.</em>
      </p>

      <form method="POST" action="/contact.php">
        <div class="form-group">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" id="name" name="name" class="form-control" required maxlength="80" placeholder="John Doe" />
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" id="email" name="email" class="form-control" required maxlength="100" placeholder="john@enterprise.com" />
        </div>
        <div class="form-group">
          <label for="company" class="form-label">Company / Organization</label>
          <input type="text" id="company" name="company" class="form-control" maxlength="100" placeholder="Acme Corp" />
        </div>
        <div class="form-group">
          <label for="service" class="form-label">Primary Service Required</label>
          <select id="service" name="service" class="form-control" required>
            <option value="">Select a Service...</option>
            <option>Custom Software Development</option>
            <option>Web App Development</option>
            <option>IT Consulting</option>
            <option>AI Integration</option>
            <option>Process Automation</option>
            <option>System Integration &amp; Support</option>
          </select>
        </div>
        <div class="form-group">
          <label for="description" class="form-label">Project Description</label>
          <textarea id="description" name="description" class="form-control" rows="4" maxlength="2000" required placeholder="Please describe your requirements briefly..."></textarea>
        </div>
        <input type="hidden" name="contact_submit" value="1" />
        <button type="submit" class="cta-button primary" style="width:100%;margin-top:1rem;justify-content:center;">
          Connect via WhatsApp <span style="font-size:1.2rem;">💬</span>
        </button>
      </form>
    </div>

  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
