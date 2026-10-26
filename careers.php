<?php
require_once __DIR__ . '/includes/functions.php';

$page_title = 'Careers | Join Our Startup in AP State';
$meta_description = 'Launch your tech career with VRTM Global Technology in Visakhapatnam & Tirupati. We are hiring freshers and experienced developers.';
$meta_keywords = 'Careers at VRTM Global, software developer jobs AP, freshers jobs Visakhapatnam, tech startup hiring, career beginners Tirupati';

// Math captcha (generate server-side for security)
session_start();
if (!isset($_SESSION['captcha_num1'])) {
    $_SESSION['captcha_num1'] = rand(1, 10);
    $_SESSION['captcha_num2'] = rand(1, 10);
}
$captcha_num1 = $_SESSION['captcha_num1'];
$captcha_num2 = $_SESSION['captcha_num2'];

$form_submitted = false;
$error = '';
$mailto_url = '';
$resume_name = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['career_submit'])) {
    $name           = trim(htmlspecialchars(substr($_POST['name'] ?? '', 0, 100)));
    $email          = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $phone          = trim(htmlspecialchars(substr($_POST['phone'] ?? '', 0, 20)));
    $qualification  = trim(htmlspecialchars(substr($_POST['qualification'] ?? '', 0, 50)));
    $passout_year   = trim(htmlspecialchars(substr($_POST['passoutYear'] ?? '', 0, 4)));
    $experience     = trim(htmlspecialchars(substr($_POST['experience'] ?? 'Fresher', 0, 20)));
    $domain         = trim(htmlspecialchars(substr($_POST['domain'] ?? '', 0, 60)));
    $years_exp      = trim(htmlspecialchars(substr($_POST['yearsOfExperience'] ?? '', 0, 5)));
    $current_ctc    = trim(htmlspecialchars(substr($_POST['currentCtc'] ?? '', 0, 30)));
    $expected_ctc   = trim(htmlspecialchars(substr($_POST['expectedCtc'] ?? '', 0, 30)));
    $captcha_answer = (int)($_POST['captcha'] ?? -1);
    $accepted_terms = isset($_POST['acceptedTerms']);
    $resume_name    = preg_replace('/[^a-zA-Z0-9._-]/', '_', substr($_POST['resumeName'] ?? 'your_resume.pdf', 0, 100));

    // Validate captcha
    if ($captcha_answer !== ($captcha_num1 + $captcha_num2)) {
        $error = 'Incorrect math calculation. Please try again.';
        // Regenerate captcha
        $_SESSION['captcha_num1'] = rand(1, 10);
        $_SESSION['captcha_num2'] = rand(1, 10);
        $captcha_num1 = $_SESSION['captcha_num1'];
        $captcha_num2 = $_SESSION['captcha_num2'];
    } elseif (!$accepted_terms) {
        $error = 'You must accept the Terms and Conditions to apply.';
    } elseif (!$name || !$email || !$phone || !$qualification || !$passout_year || !$domain) {
        $error = 'Please fill in all required fields.';
    } else {
        $subject = "Job Application: $domain - $name";
        $body  = "======================================\r\n";
        $body .= "        CANDIDATE DETAILS             \r\n";
        $body .= "======================================\r\n";
        $body .= "Name:               $name\r\n";
        $body .= "Email:              $email\r\n";
        $body .= "Phone:              $phone\r\n";
        $body .= "Qualification:      $qualification\r\n";
        $body .= "Year of Passout:    $passout_year\r\n";
        $body .= "Domain:             $domain\r\n";
        $body .= "Experience Level:   $experience\r\n";
        if ($experience !== 'Fresher') {
            $body .= "Years of Exp:       $years_exp\r\n";
            $body .= "Current CTC:        $current_ctc\r\n";
            $body .= "Expected CTC:       $expected_ctc\r\n";
        }
        $body .= "\r\n\r\n*** PLEASE ATTACH YOUR RESUME ($resume_name) TO THIS EMAIL BEFORE SENDING ***";

        $mailto_url = 'mailto:hr@vrtmglobal.com?subject=' . rawurlencode($subject) . '&body=' . rawurlencode($body);
        $form_submitted = true;

        // Reset captcha
        $_SESSION['captcha_num1'] = rand(1, 10);
        $_SESSION['captcha_num2'] = rand(1, 10);
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="section">

  <!-- Page Header -->
  <div style="text-align:center;margin-bottom:4rem;" class="fade-in-up">
    <h1 class="section-title centered" style="margin-bottom:1rem;">Join the Engineering Team</h1>
    <p style="color:var(--accent-teal);font-size:1.2rem;font-weight:500;text-transform:uppercase;letter-spacing:2px;">
      Build the Future from AP State
    </p>
  </div>

  <!-- Culture Section -->
  <div style="margin-bottom:6rem;">

    <div class="culture-two-col">
      <div>
        <img src="/images/female_graduate_startup.jpg" alt="Young Fresher Graduate in Startup"
             style="width:100%;border-radius:16px;box-shadow:0 20px 40px -15px rgba(0,0,0,0.8);border:1px solid rgba(100,255,218,0.2);" />
      </div>
      <div>
        <h2 style="font-size:2.5rem;color:var(--text-primary);margin-bottom:1.5rem;">Empowering <span style="color:var(--accent-teal);">Freshers.</span></h2>
        <p style="color:var(--text-secondary);font-size:1.1rem;line-height:1.8;margin-bottom:1.5rem;">
          We believe the next generation of tech leaders shouldn&apos;t have to leave AP State to find world-class opportunities. We actively hire brilliant fresh graduates and provide them with a state-of-the-art workspace, top-tier mentorship, and the freedom to innovate.
        </p>
        <p style="color:var(--text-secondary);font-size:1.1rem;line-height:1.8;">
          From day one, you are treated as a core contributor. We provide the hardware, the environment, and the guidance—you bring the passion and the code.
        </p>
      </div>
    </div>

    <div class="culture-two-col">
      <div style="order:2;">
        <img src="/images/startup_teamwork.jpg" alt="Collaborative Teamwork at VRTM"
             style="width:100%;border-radius:16px;box-shadow:0 20px 40px -15px rgba(0,0,0,0.8);border:1px solid rgba(100,255,218,0.2);" />
      </div>
      <div style="order:1;">
        <h2 style="font-size:2.5rem;color:var(--text-primary);margin-bottom:1.5rem;">A Culture of <span style="color:var(--accent-teal);">Collaboration.</span></h2>
        <p style="color:var(--text-secondary);font-size:1.1rem;line-height:1.8;margin-bottom:1.5rem;">
          Our work culture thrives on open communication and whiteboard sessions. We tackle complex enterprise challenges as a unified team. There are no silos here—just cross-functional pods of UI/UX designers, backend architects, and data scientists working in sync.
        </p>
        <ul class="checklist">
          <li><span class="check">✔</span> Fast-paced Agile methodology</li>
          <li><span class="check">✔</span> Continuous Learning &amp; Skill Upgradation</li>
          <li><span class="check">✔</span> Inclusive, zero-politics environment</li>
          <li><span class="check">✔</span> An innovative launchpad where the value of your thoughts shapes our products</li>
        </ul>
      </div>
    </div>

    <div class="culture-two-col">
      <div>
        <img src="/images/team_celebration.jpg" alt="Team Celebration and Support"
             style="width:100%;border-radius:16px;box-shadow:0 20px 40px -15px rgba(0,0,0,0.8);border:1px solid rgba(100,255,218,0.2);" />
      </div>
      <div>
        <h2 style="font-size:2.5rem;color:var(--text-primary);margin-bottom:1.5rem;">Training, Support &amp; <span style="color:var(--accent-teal);">Celebrations.</span></h2>
        <p style="color:var(--text-secondary);font-size:1.1rem;line-height:1.8;margin-bottom:1.5rem;">
          We know that producing great work requires a healthy, joyful, and supported team. That is why we heavily invest in continuous <strong>Team Training and Development</strong> through sponsored certifications, weekly internal workshops, and hackathons.
        </p>
        <p style="color:var(--text-secondary);font-size:1.1rem;line-height:1.8;">
          But it is not all work. We believe in taking time to celebrate our wins. From successful project launches to work anniversaries and cultural festivals, our workspace is vibrant, supportive, and deeply connected.
        </p>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="grid grid-2" style="gap:4rem;align-items:flex-start;">

    <!-- Left: Benefits -->
    <div class="fade-in-up delay-100">
      <h2 style="color:var(--text-primary);font-size:2.5rem;margin-bottom:1.5rem;line-height:1.2;">
        A Launchpad for <span style="color:var(--accent-teal);">Elite Talent.</span>
      </h2>
      <p style="color:var(--text-secondary);margin-bottom:1.5rem;font-size:1.1rem;line-height:1.8;">
        At VRTM Global Technology, we believe that world-class software is built by passionate individuals. As a fast-growing startup in Visakhapatnam and Tirupati, we welcome <strong>young mindsets and innovative thoughts</strong>. We are heavily invested in fostering elite talent, mentoring driven individuals to become true experts in business intelligence, project planning, and architectural design.
      </p>
      <div style="display:flex;flex-direction:column;gap:1.5rem;margin-top:3rem;">
        <div class="benefit-item">
          <div class="benefit-icon"><?= icon_graduation_cap() ?></div>
          <div>
            <h4 style="color:var(--text-primary);font-size:1.2rem;margin-bottom:0.25rem;">Strategic Problem Solving</h4>
            <p style="color:var(--text-secondary);">Intensive project engagement designed to sharpen your business intelligence and shape our core products.</p>
          </div>
        </div>
        <div class="benefit-item">
          <div class="benefit-icon"><?= icon_code() ?></div>
          <div>
            <h4 style="color:var(--text-primary);font-size:1.2rem;margin-bottom:0.25rem;">Architectural Mastery</h4>
            <p style="color:var(--text-secondary);">Master React, Node.js, Cloud Native platforms, and state-of-the-art AI integrations.</p>
          </div>
        </div>
        <div class="benefit-item">
          <div class="benefit-icon"><?= icon_briefcase() ?></div>
          <div>
            <h4 style="color:var(--text-primary);font-size:1.2rem;margin-bottom:0.25rem;">High-Value Impact</h4>
            <p style="color:var(--text-secondary);">Your innovative ideas will directly translate into code that solves complex, real-world enterprise challenges.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Right: Application Form -->
    <div class="card fade-in-up delay-200" style="padding:3rem 2.5rem;">
      <?php if ($form_submitted && $mailto_url): ?>
      <!-- Success + Mailto Redirect -->
      <script>window.location.href = <?= json_encode($mailto_url) ?>;</script>
      <div class="success-card">
        <div class="success-icon"><?= icon_check_circle() ?></div>
        <h3>Submission Successful!</h3>
        <p>
          Your email client is opening now with your details.<br/><br/>
          <span class="warning-text">WAIT! YOU ARE NOT DONE YET:</span><br/>
          Please drag and drop your resume <strong>(<?= h($resume_name) ?>)</strong> into the email window before clicking Send!
        </p>
        <a href="/careers.php" class="cta-button" style="margin-top:2rem;display:inline-flex;">Submit Another</a>
      </div>

      <?php else: ?>

      <h3 style="font-size:1.8rem;color:var(--text-primary);margin-bottom:1rem;text-align:center;">Apply Now</h3>
      <p style="color:var(--text-secondary);text-align:center;margin-bottom:2rem;font-size:0.95rem;">
        Fill out the details below. This will prepare an application directly to <span style="color:var(--accent-teal);">hr@vrtmglobal.com</span>
      </p>

      <?php if ($error): ?>
      <div class="form-error"><?= h($error) ?></div>
      <?php endif; ?>

      <form method="POST" action="/careers.php" enctype="multipart/form-data">

        <div class="form-group">
          <label for="name" class="form-label">Full Name *</label>
          <input type="text" id="name" name="name" class="form-control" required placeholder="John Doe"
                 value="<?= h($_POST['name'] ?? '') ?>" />
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
          <div class="form-group">
            <label for="email" class="form-label">Email Address *</label>
            <input type="email" id="email" name="email" class="form-control" required placeholder="john@example.com"
                   value="<?= h($_POST['email'] ?? '') ?>" />
          </div>
          <div class="form-group">
            <label for="phone" class="form-label">Mobile Number *</label>
            <input type="tel" id="phone" name="phone" class="form-control" required placeholder="+91 9000000000"
                   value="<?= h($_POST['phone'] ?? '') ?>" />
          </div>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
          <div class="form-group">
            <label for="qualification" class="form-label">Qualification *</label>
            <select id="qualification" name="qualification" class="form-control" required>
              <option value="" disabled selected>Select Qualification</option>
              <?php foreach (['B.Tech/B.E.','M.Tech/M.E.','MCA','BCA','B.Sc (Computer Science)','Other'] as $q): ?>
              <option <?= (($_POST['qualification'] ?? '') === $q) ? 'selected' : '' ?>><?= h($q) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="passoutYear" class="form-label">Year of Pass Out *</label>
            <input type="number" id="passoutYear" name="passoutYear" class="form-control" required
                   placeholder="e.g. 2026" min="2010" max="<?= date('Y') + 4 ?>"
                   value="<?= h($_POST['passoutYear'] ?? '') ?>" />
          </div>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
          <div class="form-group">
            <label for="experience" class="form-label">Experience Level *</label>
            <select id="experience" name="experience" class="form-control">
              <option value="Fresher" <?= (($_POST['experience'] ?? 'Fresher') === 'Fresher') ? 'selected' : '' ?>>Fresher (0 Years)</option>
              <option value="Experienced" <?= (($_POST['experience'] ?? '') === 'Experienced') ? 'selected' : '' ?>>Experienced</option>
            </select>
          </div>
          <div class="form-group">
            <label for="domain" class="form-label">Domain Applied For *</label>
            <select id="domain" name="domain" class="form-control" required>
              <option value="" disabled selected>Select Domain</option>
              <?php foreach (['Frontend Development','Backend Development','Full Stack Development','UI/UX Design','Quality Assurance (QA)','DevOps / Cloud','Data Science / AI'] as $d): ?>
              <option <?= (($_POST['domain'] ?? '') === $d) ? 'selected' : '' ?>><?= h($d) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <!-- Experienced Fields -->
        <div id="experienced-fields" style="display:<?= (($_POST['experience'] ?? 'Fresher') === 'Experienced') ? 'grid' : 'none' ?>;grid-template-columns:1fr 1fr 1fr;gap:1rem;" class="experience-fields">
          <div class="form-group">
            <label for="yearsOfExperience" class="form-label">Years of Exp *</label>
            <input type="number" id="yearsOfExperience" name="yearsOfExperience" class="form-control"
                   placeholder="e.g. 3" min="1" max="40" step="0.5"
                   value="<?= h($_POST['yearsOfExperience'] ?? '') ?>" />
          </div>
          <div class="form-group">
            <label for="currentCtc" class="form-label">Current CTC *</label>
            <input type="text" id="currentCtc" name="currentCtc" class="form-control" maxlength="30"
                   placeholder="e.g. 6.5 LPA" value="<?= h($_POST['currentCtc'] ?? '') ?>" />
          </div>
          <div class="form-group">
            <label for="expectedCtc" class="form-label">Expected CTC *</label>
            <input type="text" id="expectedCtc" name="expectedCtc" class="form-control" maxlength="30"
                   placeholder="e.g. 9.0 LPA" value="<?= h($_POST['expectedCtc'] ?? '') ?>" />
          </div>
        </div>

        <!-- Resume Upload -->
        <div class="form-group">
          <label class="form-label">Resume Upload (PDF, DOCX) *</label>
          <div class="resume-upload-area">
            <div class="upload-btn-wrapper">
              <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required />
              <div class="upload-btn">
                <?= icon_upload() ?> Upload Resume
              </div>
            </div>
            <div style="display:flex;flex-direction:column;">
              <span class="resume-name" id="resume-name-display">No file chosen</span>
              <span class="resume-hint">* Must manually re-attach in email client</span>
            </div>
          </div>
          <!-- Hidden field to pass filename -->
          <input type="hidden" id="resumeName" name="resumeName" value="" />
        </div>

        <!-- Math Captcha -->
        <div class="form-group">
          <label for="captcha" class="form-label">
            Security Check: What is <?= $captcha_num1 ?> + <?= $captcha_num2 ?>? *
          </label>
          <input type="number" id="captcha" name="captcha" class="form-control" required placeholder="Enter the sum" />
          <input type="hidden" id="captcha-answer" value="<?= ($captcha_num1 + $captcha_num2) ?>" />
        </div>

        <!-- Terms -->
        <div class="form-group" style="display:flex;align-items:flex-start;gap:10px;margin:2rem 0;">
          <input type="checkbox" id="acceptedTerms" name="acceptedTerms" style="margin-top:4px;width:auto;cursor:pointer;" />
          <label for="acceptedTerms" style="color:var(--text-secondary);font-size:0.85rem;line-height:1.5;cursor:pointer;">
            I accept the terms and conditions. I consent to VRTM Global Technology utilizing my submitted data for future business purposes, background screening, and sharing with partner companies strictly for future hiring opportunities.
          </label>
        </div>

        <div class="submit-btn">
          <input type="hidden" name="career_submit" value="1" />
          <button type="submit" id="submit-btn" class="cta-button primary" disabled style="opacity:0.5;cursor:not-allowed;">
            <?= icon_send() ?> Submit Application
          </button>
        </div>

      </form>

      <?php endif; ?>
    </div>

  </div>
</div>

<!-- JS: sync file input to hidden name field -->
<script>
var resumeFileInput = document.getElementById('resume');
var resumeHidden = document.getElementById('resumeName');
var resumeNameDisplay = document.getElementById('resume-name-display');
if (resumeFileInput) {
  resumeFileInput.addEventListener('change', function() {
    var file = this.files[0];
    var safeName = file ? file.name.replace(/[^a-zA-Z0-9._-]/g, '_') : '';
    if (resumeHidden) resumeHidden.value = safeName;
    if (resumeNameDisplay) resumeNameDisplay.textContent = file ? file.name : 'No file chosen';
    updateSubmitBtn();
  });
}
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
