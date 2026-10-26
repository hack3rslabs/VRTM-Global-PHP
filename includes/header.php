<?php
/**
 * VRTM Global Technology - Header Include
 * $page_title, $meta_description, $meta_keywords must be set before including
 */
$current_page = get_current_page();
$year = date('Y');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#0a192f" />

  <!-- SEO -->
  <title><?= h($page_title ?? 'VRTM Global Technology') ?> | VRTM Global Technology</title>
  <meta name="description" content="<?= h($meta_description ?? 'VRTM Global Technology - Top Software Company in Tirupati & Visakhapatnam, AP State, India.') ?>" />
  <meta name="keywords" content="<?= h($meta_keywords ?? 'software company Tirupati, VRTM Global Technology') ?>" />
  <meta name="author" content="VRTM Global Technology Private Limited" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://vrtmglobal.com/" />
  <meta property="og:title" content="VRTM Global Technology | Software Company in AP State, India" />
  <meta property="og:description" content="Top Software Company in Tirupati & Visakhapatnam. Delivering enterprise software solutions." />
  <meta property="og:image" content="/favicon.png" />

  <link rel="canonical" href="https://vrtmglobal.com/" />
  <link rel="icon" type="image/png" href="/favicon.png" />

  <!-- Fonts & Styles -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/assets/css/style.css" />
</head>
<body>
<div class="app-container">

<!-- HEADER -->
<header class="header">
  <a href="/" class="logo-link">
    <img src="/images/logo.png" alt="VRTM Global Technology Logo" class="logo-img" onerror="this.style.display='none'" />
    <div style="display:flex;flex-direction:column;align-items:flex-start;">
      <span class="logo-text-primary">VRTM <span>Global</span></span>
      <span class="logo-text-sub">Technology</span>
    </div>
  </a>

  <nav class="nav-links" id="nav-links">
    <a href="/" class="nav-link<?= active_class('index', $current_page) ?>">Home</a>
    <a href="/services.php" class="nav-link<?= active_class('services', $current_page) ?>">Our Services</a>
    <a href="/sectors.php" class="nav-link<?= active_class('sectors', $current_page) ?>">Sectors</a>
    <a href="/about.php" class="nav-link<?= active_class('about', $current_page) ?>">About Us</a>
  </nav>

  <button class="mobile-menu-btn" id="mobile-menu-btn" aria-label="Toggle Menu" onclick="toggleMenu()">
    <span id="menu-icon">&#9776;</span>
  </button>
</header>

<main class="main-content">
