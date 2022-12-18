<body>
<!-- awal dari top nav -->
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="<?php echo base_url().'admin'; ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    <span class="fs-4">BatikBuy</span>
  </a>

  <ul class="nav nav-pills">
    <li class="nav-item"><a href="<?php echo base_url().'user'; ?>" class="nav-link">Profile saya</a></li>
    <li class="nav-item"><a href="<?php echo base_url().'autentifikasi/logout'; ?>" class="nav-link">Sign Out</a></li>
  </ul>
</header>