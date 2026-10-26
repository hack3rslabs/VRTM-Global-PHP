<?php
/**
 * VRTM Global Technology - Footer Include
 */
$year = date('Y');
?>
</main><!-- /main-content -->

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-content">

    <!-- Brand Section -->
    <div class="footer-section">
      <div style="display:flex;align-items:center;margin-bottom:1.5rem;">
        <img src="/images/logo.png" alt="VRTM Global Technology" style="height:40px;width:auto;mix-blend-mode:screen;margin-right:10px;" onerror="this.style.display='none'" />
      </div>
      <p style="color:var(--text-secondary);line-height:1.6;margin-bottom:1.5rem;">
        A dynamic software engineering startup delivering premium enterprise technology solutions, AI integrations, and digital transformation services globally.
      </p>
      <a href="https://www.linkedin.com/company/vrtm-global" target="_blank" rel="noopener noreferrer" class="footer-social-link">
        <?= icon_linkedin() ?> Connect on LinkedIn
      </a>
    </div>

    <!-- Address & Contact -->
    <div class="footer-section">
      <h4>Global Headquarters</h4>
      <div class="footer-contact-row top">
        <span class="icon" style="color:var(--accent-teal)"><?= icon_map_pin() ?></span>
        <span style="line-height:1.6;">
          Head Office<br/>
          D.No: 9, 2nd Floor, Tiruchanoor Rd,<br/>
          Beside Rahul Convention Center,<br/>
          Yogimallavaram, Tirupati, AP - 517503.
        </span>
      </div>
      <div class="footer-contact-row">
        <span class="icon" style="color:var(--accent-teal)"><?= icon_mail() ?></span>
        <a href="mailto:help@vrtmglobal.com">help@vrtmglobal.com</a>
      </div>
      <div class="footer-contact-row">
        <span class="icon" style="color:var(--accent-teal)"><?= icon_phone() ?></span>
        <a href="https://wa.me/919989893225" target="_blank" rel="noopener noreferrer">WhatsApp: +91 9989893225</a>
      </div>
    </div>

  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="footer-nav-pill">
      <a href="/careers.php" class="footer-nav-link">Careers</a>
      <span class="footer-separator">|</span>
      <a href="/contact.php" class="footer-nav-link">Contact Us</a>
      <span class="footer-separator">|</span>
      <a href="/faq.php" class="footer-nav-link">FAQs</a>
      <span class="footer-separator">|</span>
      <a href="/privacy.php" class="footer-nav-link">Privacy Policy</a>
      <span class="footer-separator">|</span>
      <a href="/terms.php" class="footer-nav-link">Terms &amp; Conditions</a>
    </div>

    <div style="display:flex;flex-direction:column;gap:0.8rem;align-items:center;">
      <div class="footer-company-row">
        <span class="footer-company-name">VRTM GLOBAL TECHNOLOGY PRIVATE LIMITED</span>
        <span style="color:var(--text-secondary);">•</span>
        <span>CIN: U62013AP2025PTC119531</span>
      </div>
      <span style="color:var(--text-secondary);font-size:0.85rem;">
        &copy; <?= $year ?> VRTM Global Technology. All rights reserved.
      </span>
    </div>
  </div>
</footer>

</div><!-- /app-container -->

<!-- Mobile Menu JS -->
<script>
function toggleMenu() {
  var nav = document.getElementById('nav-links');
  var icon = document.getElementById('menu-icon');
  nav.classList.toggle('open');
  icon.innerHTML = nav.classList.contains('open') ? '&#10005;' : '&#9776;';
}

// Hero image slideshow
var heroSlides = document.querySelectorAll('.hero-image-slide');
if (heroSlides.length > 0) {
  var currentSlide = 0;
  setInterval(function() {
    heroSlides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % heroSlides.length;
    heroSlides[currentSlide].classList.add('active');
  }, 4000);
}

// Careers: show/hide experienced fields
var expSelect = document.getElementById('experience');
var expFields = document.getElementById('experienced-fields');
if (expSelect && expFields) {
  expSelect.addEventListener('change', function() {
    expFields.style.display = this.value === 'Experienced' ? 'grid' : 'none';
  });
}

// Careers: captcha & terms button toggle
var captchaInput = document.getElementById('captcha');
var termsCheck = document.getElementById('acceptedTerms');
var submitBtn = document.getElementById('submit-btn');
var captchaAnswer = parseInt(document.getElementById('captcha-answer') ? document.getElementById('captcha-answer').value : 0);

function updateSubmitBtn() {
  if (!submitBtn) return;
  var captchaOk = captchaInput && (parseInt(captchaInput.value) === captchaAnswer);
  var termsOk = termsCheck && termsCheck.checked;
  submitBtn.disabled = !(captchaOk && termsOk);
  submitBtn.style.opacity = (captchaOk && termsOk) ? '1' : '0.5';
  submitBtn.style.cursor = (captchaOk && termsOk) ? 'pointer' : 'not-allowed';
}

if (captchaInput) captchaInput.addEventListener('input', updateSubmitBtn);
if (termsCheck) termsCheck.addEventListener('change', updateSubmitBtn);

// Resume file name display
var resumeInput = document.getElementById('resume');
var resumeNameSpan = document.getElementById('resume-name-display');
if (resumeInput && resumeNameSpan) {
  resumeInput.addEventListener('change', function() {
    var file = this.files[0];
    resumeNameSpan.textContent = file ? file.name : 'No file chosen';
  });
}

// FAQ accordion toggle
document.querySelectorAll('.faq-toggle').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var answer = this.closest('.faq-item').querySelector('.faq-answer');
    var isOpen = answer.style.display === 'block';
    // Close all
    document.querySelectorAll('.faq-answer').forEach(function(a) { a.style.display = 'none'; });
    document.querySelectorAll('.faq-toggle-icon').forEach(function(i) { i.textContent = '+'; });
    if (!isOpen) {
      answer.style.display = 'block';
      this.querySelector('.faq-toggle-icon').textContent = '−';
    }
  });
});
</script>
</body>
</html>
