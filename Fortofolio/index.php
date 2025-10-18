<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="/FORTOFOLIO/user.png">
    <title>MY PORTFOLIO | Ziban Robani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      :root {
        --bg-primary: #0a0a0a;
        --bg-secondary: #111111;
        --text-primary: #ffffff;
        --text-secondary: #a0a0a0;
        --accent: #00d4ff;
        --accent-secondary: #ff006e;
        --border: rgba(255, 255, 255, 0.1);
        --glass: rgba(255, 255, 255, 0.05);
      }

      [data-theme="light"] {
        --bg-primary: #f8f9ff;
        --bg-secondary: #ffffff;
        --text-primary: #1a1a1a;
        --text-secondary: #666666;
        --accent: #0066cc;
        --accent-secondary: #cc0055;
        --border: rgba(0, 0, 0, 0.1);
        --glass: rgba(0, 0, 0, 0.05);
      }

      body {
        font-family: "Arial", sans-serif;
        background: var(--bg-primary);
        color: var(--text-primary);
        line-height: 1.6;
        overflow-x: hidden;
        transition: all 0.3s ease;
      }

      /* Navigation - IMPROVED RESPONSIVE */
      nav {
        position: fixed;
        top: 0;
        width: 100%;
        padding: 1rem 5%;
        background: rgba(10, 10, 10, 0.9);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid var(--border);
        z-index: 1000;
        transition: all 0.3s ease;
      }

      [data-theme="light"] nav {
        background: rgba(248, 249, 255, 0.9);
      }

      .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
      }

      .logo {
        font-size: 1.5rem;
        font-weight: bold;
        background: linear-gradient(45deg, var(--accent), var(--accent-secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        z-index: 1001;
      }

      .nav-links {
        display: flex;
        list-style: none;
        gap: 2rem;
        margin: 0;
        padding: 0;
        transition: all 0.3s ease;
      }

      .nav-links a {
        color: var(--text-primary);
        text-decoration: none;
        transition: color 0.3s ease;
        position: relative;
        padding: 0.5rem 0;
      }

      .nav-links a:hover,
      .nav-links a.active {
        color: var(--accent);
      }

      .nav-links a::after {
        content: "";
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--accent);
        transition: width 0.3s ease;
      }

      .nav-links a:hover::after,
      .nav-links a.active::after {
        width: 100%;
      }

      .nav-right {
        display: flex;
        align-items: center;
        gap: 1rem;
        z-index: 1001;
      }

      .theme-toggle {
        background: var(--glass);
        border: 1px solid var(--border);
        color: var(--text-primary);
        padding: 0.5rem 1rem;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 1rem;
      }

      .theme-toggle:hover {
        background: var(--accent);
        color: var(--bg-primary);
      }

      /* Mobile Menu */
      .mobile-menu {
        display: none;
        flex-direction: column;
        cursor: pointer;
        padding: 0.5rem;
        z-index: 1002;
      }

      .mobile-menu span {
        width: 25px;
        height: 3px;
        background: var(--text-primary);
        margin: 2px 0;
        transition: all 0.3s ease;
        transform-origin: center;
      }

      .mobile-menu.active span:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
      }

      .mobile-menu.active span:nth-child(2) {
        opacity: 0;
      }

      .mobile-menu.active span:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
      }

      /* Mobile Navigation Styles */
      @media (max-width: 768px) {
        .nav-links {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100vh;
          background: rgba(10, 10, 10, 0.98);
          backdrop-filter: blur(20px);
          flex-direction: column;
          justify-content: center;
          align-items: center;
          gap: 3rem;
          transform: translateX(-100%);
          opacity: 0;
          visibility: hidden;
          transition: all 0.3s ease;
        }

        [data-theme="light"] .nav-links {
          background: rgba(248, 249, 255, 0.98);
        }

        .nav-links.active {
          transform: translateX(0);
          opacity: 1;
          visibility: visible;
        }

        .nav-links a {
          font-size: 1.5rem;
          padding: 1rem 2rem;
          border-radius: 10px;
          transition: all 0.3s ease;
        }

        .nav-links a:hover {
          background: var(--glass);
          transform: translateY(-2px);
        }

        .mobile-menu {
          display: flex;
        }

        .theme-toggle {
          padding: 0.4rem 0.8rem;
          font-size: 0.9rem;
        }

        .nav-container {
          padding: 0;
        }
      }

      @media (max-width: 480px) {
        .theme-toggle {
          padding: 0.3rem 0.6rem;
          font-size: 0.85rem;
        }

        nav {
          padding: 0.8rem 5%;
        }
      }

      /* Sections */
      section {
        min-height: 100vh;
        padding: 100px 5% 50px;
        max-width: 1200px;
        margin: 0 auto;
      }

      .section-title {
        font-size: 3rem;
        margin-bottom: 3rem;
        background: linear-gradient(45deg, var(--accent), var(--accent-secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
      }

      /* Home Section */
      #home {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
      }

      .hero-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 2rem;
      }

      .profile-image {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--accent), var(--accent-secondary));
        padding: 4px;
        opacity: 0;
        animation: fadeInScale 1s ease forwards;
      }

      .profile-image img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
        background: var(--bg-secondary);
      }

      .hero-text h1 {
        font-size: 4rem;
        margin-bottom: 0.5rem;
        opacity: 0;
        animation: fadeInUp 1s ease 0.2s forwards;
      }

      .hero-text .name {
        font-size: 3.5rem;
        color: var(--accent);
        margin-bottom: 1rem;
        opacity: 0;
        animation: fadeInUp 1s ease 0.4s forwards;
      }

      .hero-text p {
        font-size: 1.3rem;
        color: var(--text-secondary);
        margin-bottom: 2rem;
        opacity: 0;
        animation: fadeInUp 1s ease 0.6s forwards;
      }

      .cta-button {
        display: inline-block;
        padding: 1rem 2rem;
        background: linear-gradient(45deg, var(--accent), var(--accent-secondary));
        color: white;
        text-decoration: none;
        border-radius: 50px;
        transition: transform 0.3s ease;
        opacity: 0;
        animation: fadeInUp 1s ease 0.8s forwards;
      }

      .cta-button:hover {
        transform: translateY(-5px);
        color: white;
      }

      /* About Section */
      .about-card {
        background: var(--glass);
        border: 1px solid var(--border);
        border-radius: 20px;
        padding: 2rem;
        backdrop-filter: blur(10px);
      }

      .about-content {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        align-items: flex-start;
      }

      .about-text {
        flex: 1 1 40%;
      }

      .skills-grid {
        flex: 1 1 50%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1.5rem;
      }

      .skill-category {
        background: var(--glass);
        border: 1px solid var(--border);
        border-radius: 15px;
        padding: 1rem;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .skill-category:hover {
        transform: translateY(-5px);
      }

      .skill-icon {
        font-size: 2rem;
        color: var(--accent);
        margin-bottom: 0.5rem;
      }

      /* Experience & Education Section */
      #experience {
        background: var(--bg-secondary);
      }

      .tab-container {
        display: flex;
        justify-content: center;
        margin-bottom: 3rem;
        gap: 1rem;
        flex-wrap: wrap;
      }

      .tab-button {
        background: transparent;
        border: 2px solid var(--border);
        color: var(--text-secondary);
        padding: 1rem 2rem;
        cursor: pointer;
        transition: all 0.3s ease;
        border-radius: 50px;
        font-size: 1.1rem;
        min-width: 150px;
      }

      .tab-button.active {
        background: var(--accent);
        color: white;
        border-color: var(--accent);
        transform: scale(1.05);
      }

      .tab-button:hover {
        border-color: var(--accent);
        color: var(--accent);
      }

      .tab-content {
        display: none;
        animation: fadeIn 0.5s ease;
      }

      .tab-content.active {
        display: block;
      }

      .timeline-item {
        background: var(--glass);
        border: 1px solid var(--border);
        border-radius: 20px;
        padding: 2.5rem;
        margin-bottom: 2rem;
        backdrop-filter: blur(10px);
        border-left: 4px solid var(--accent);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .timeline-item:hover {
        transform: translateX(5px);
        box-shadow: 0 10px 25px rgba(0, 212, 255, 0.1);
      }

      .timeline-item h3 {
        color: var(--accent);
        margin-bottom: 0.5rem;
        font-size: 1.5rem;
      }

      .timeline-item .date {
        color: var(--accent-secondary);
        font-weight: bold;
        margin-bottom: 1rem;
        font-size: 1.1rem;
      }

      .timeline-item p {
        color: var(--text-secondary);
        line-height: 1.6;
        margin-bottom: 0.5rem;
      }

      .timeline-item p strong {
        color: var(--text-primary);
      }

      .timeline-item ul {
        margin: 1rem 0;
        padding-left: 1.5rem;
      }

      .timeline-item li {
        color: var(--text-primary);
        line-height: 1.6;
        margin-bottom: 0.5rem;
        list-style-type: disc;
      }

      .timeline-item li::marker {
        color: var(--accent);
      }

      .badge-tech-alt {
        background: var(--glass);
        color: var(--accent);
        border: 1px solid var(--border);
        backdrop-filter: blur(10px);
        margin: 0.2rem;
        padding: 0.3rem 0.8rem;
        font-size: 0.85rem;
        border-radius: 15px;
        display: inline-block;
      }

      .badge-tech-alt:hover {
        background: var(--accent);
        color: white;
        border-color: var(--accent);
      }

      /* Projects Section */
      #projects {
        max-width: 1400px;
      }

      .projects-grid {
        display: flex;
        flex-wrap: nowrap;
        gap: 2.5rem;
        margin-top: 3rem;
        overflow-x: auto;
        padding-bottom: 1.5rem;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch; /* Untuk scroll halus di iOS */
      }

      .projects-grid::-webkit-scrollbar {
        height: 10px;
      }

      .projects-grid::-webkit-scrollbar-track {
        background: var(--bg-primary);
      }

      .projects-grid::-webkit-scrollbar-thumb {
        background: var(--accent);
        border-radius: 4px;
      }

      .project-card {
        flex: 0 0 auto;
        min-width: 380px; /* Lebar default untuk desktop */
        max-width: 380px;
        background: var(--glass);
        border: 1px solid var(--border);
        border-radius: 20px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        backdrop-filter: blur(10px);
      }


      .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 212, 255, 0.1);
      }

      /* Responsivitas untuk mobile */
      @media (max-width: 768px) {
        .project-card {
          min-width: 280px; /* Lebar lebih kecil untuk mobile */
          max-width: 90%; /* Maksimum 90% lebar layar untuk kenyamanan */
        }
      }

      @media (max-width: 480px) {
        .project-card {
          min-width: 250px; /* Lebih kecil lagi untuk layar sangat kecil */
          max-width: 95%;
        }
      }

      .project-image {
        width: 100%;
        height: 250px;
        background: linear-gradient(45deg, var(--accent), var(--accent-secondary));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        color: white;
        position: relative;
        overflow: hidden;
      }

      .project-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .project-content {
        padding: 2rem;
      }

      .project-content h3 {
        color: var(--accent);
        margin-bottom: 1rem;
        font-size: 1.5rem;
      }

      .project-content p {
        color: var(--text-primary);
        margin-bottom: 1rem;
      }

      /* Contact Section */
      #contact {
        text-align: center;
        background: var(--bg-primary);
      }

      .contact-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
      }

      .contact-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: var(--text-primary);
        transition: all 0.3s ease;
        background: var(--glass);
        padding: 2.5rem 2rem;
        border-radius: 20px;
        border: 1px solid var(--border);
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
        min-height: 200px;
      }

      .contact-item::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(0, 212, 255, 0.1), transparent);
        transition: left 0.5s ease;
      }

      .contact-item:hover::before {
        left: 100%;
      }

      .contact-item:hover {
        transform: translateY(-10px);
        color: var(--accent);
        border-color: var(--accent);
        box-shadow: 0 20px 40px rgba(0, 212, 255, 0.15);
        text-decoration: none;
      }

      .contact-icon {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        background: linear-gradient(45deg, var(--accent), var(--accent-secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
        z-index: 1;
      }

      .contact-item h3 {
        margin-bottom: 0.8rem;
        color: var(--accent);
        font-size: 1.4rem;
        font-weight: 600;
        position: relative;
        z-index: 1;
      }

      .contact-item p {
        color: var(--text-primary);
        font-size: 0.95rem;
        line-height: 1.5;
        text-align: center;
        position: relative;
        z-index: 1;
      }

      /* Footer */
      footer {
        background: var(--bg-secondary);
        padding: 3rem 5%;
        text-align: center;
        border-top: 1px solid var(--border);
      }

      .footer-content {
        max-width: 1200px;
        margin: 0 auto;
      }

      .footer-content p {
        color: var(--text-primary);
        margin-bottom: 1rem;
      }

      .footer-links {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
      }

      .footer-links a {
        color: var(--accent);
        text-decoration: none;
        transition: color 0.3s ease;
      }

      .footer-links a:hover {
        color: var(--accent-secondary);
      }

      /* Animations */
      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(50px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes fadeInScale {
        from {
          opacity: 0;
          transform: scale(0.8);
        }
        to {
          opacity: 1;
          transform: scale(1);
        }
      }

      @keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .hero-text h1 {
          font-size: 2.5rem;
        }

        .hero-text .name {
          font-size: 2rem;
        }

        .section-title {
          font-size: 2.5rem;
        }

        .about-content {
          flex-direction: column;
        }

        .about-text,
        .skills-grid {
          flex: 1 1 100%;
        }

        .skills-grid {
          grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        }

        .profile-image {
          width: 150px;
          height: 150px;
        }

        .projects-grid {
          grid-template-columns: 1fr;
        }

        .contact-links {
          grid-template-columns: 1fr;
          gap: 1.5rem;
          max-width: 400px;
        }

        .contact-item {
          min-height: 180px;
          padding: 2rem 1.5rem;
        }

        section {
          padding: 80px 5% 30px;
        }

        .tab-container {
          flex-direction: column;
          align-items: center;
        }

        .tab-button {
          min-width: 200px;
        }
      }

      @media (max-width: 480px) {
        .hero-text h1 {
          font-size: 2rem;
        }

        .hero-text .name {
          font-size: 1.5rem;
        }

        .hero-text p {
          font-size: 1.1rem;
        }

        .section-title {
          font-size: 2rem;
        }

        .profile-image {
          width: 120px;
          height: 120px;
        }

        .contact-item {
          min-height: 160px;
          padding: 1.8rem 1.2rem;
        }

        .contact-icon {
          font-size: 2.5rem;
          margin-bottom: 1rem;
        }

        .contact-item h3 {
          font-size: 1.2rem;
        }

        .contact-item p {
          font-size: 0.9rem;
        }

        section {
          padding: 70px 3% 20px;
        }

        .timeline-item {
          padding: 1.5rem;
        }

        .project-content {
          padding: 1.5rem;
        }
      }

      /* Scrollbar */
      ::-webkit-scrollbar {
        width: 8px;
      }

      ::-webkit-scrollbar-track {
        background: var(--bg-primary);
      }

      ::-webkit-scrollbar-thumb {
        background: var(--accent);
        border-radius: 4px;
      }

      /* Loading Animation */
      .loading {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
      }

      .loaded {
        opacity: 1;
        transform: translateY(0);
      }

      /* Overlay to prevent body scroll when mobile menu is open */
      body.menu-open {
        overflow: hidden;
      }

      /* Dropdown Menu Style */
      .dropdown-menu {
        background: var(--bg-secondary);
        border: 1px solid var(--border);
        border-radius: 10px;
        padding: 0.5rem 0;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      }

      /* Dropdown Item Style */
      .dropdown-menu .dropdown-item {
        color: var(--text-primary);
        transition: all 0.3s ease;
        padding: 0.7rem 1.2rem;
      }

      .dropdown-menu .dropdown-item:hover {
        background: var(--glass);
        color: var(--accent);
      }

      /* Untuk dark/light theme */
      [data-theme="light"] .dropdown-menu {
        background: var(--bg-secondary);
        border: 1px solid var(--border);
      }
    </style>
  </head>
  <body data-theme="dark">
    <nav>
      <div class="nav-container">
        <div class="logo">Ziban.</div>
        <ul class="nav-links" id="navLinks">
          <li><a href="#home" onclick="closeMenu()" class="">Home</a></li>
          <li><a href="#about" onclick="closeMenu()" class="">About</a></li>
          <li><a href="#experience" onclick="closeMenu()" class="active">Experience</a></li>
          <li><a href="#projects" onclick="closeMenu()" class="">Projects</a></li>
          <li><a href="#organization" onclick="closeMenu()" class="">organization</a></li>
          <li><a href="#contact" onclick="closeMenu()" class="">Contact</a></li>
        </ul>
        <div class="nav-right">
          <button class="theme-toggle" onclick="toggleTheme()">🌙</button>
          <div class="mobile-menu" id="mobileMenu" onclick="toggleMobileMenu()">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </nav>

    <!-- HOME SECTION -->
    <section id="home" class="loading loaded">
      <div class="hero-content">
        <div class="profile-image">
          <img src="../FORTOFOLIO/Foto_Terbaru.jpeg" alt="Profile Photo">
        </div>
        <div class="hero-text">
          <h1 class="name">Ziban Robani</h1>
          <p>Passionate Web Developer &amp; Software Engineer</p>
          <p>Bringing ideas to life with well-written code and thoughtful digital design</p>
          <a href="../FORTOFOLIO/doc/CV ZIBAN ROBANI_FIX3.pdf" class="cta-button" download="CV_ZIban RObani.pdf" target="_blank" rel="noopener noreferrer">Get My Resume</a>
        </div>
      </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="loading loaded">
      <h2 class="section-title">About Me</h2>
      <p style="text-align: center; font-size: 1.2rem; color: var(--accent); font-weight: bold; margin-bottom: 2rem">Dedicated to crafting exceptional digital experiences</p>
      <div class="about-card">
        <div class="about-content">
          <div class="about-text">
            <h3>Hello, I'm Ziban!</h3>
            <p>
             I am an active student in the Informatics Management Study Program at Politeknik Astra, with a strong interest in software development and systems analysis. Experienced in various web and mobile application projects,
              I am proficient in technologies such as Java, ASP.NET, PHP, and MySQL. Beyond technical skills.
            </p>
            <p>
             actively involved in campus organizations as the vice chairman of the Music Student Activity Unit and a member of the Rohis Asy-Syabab hadroh team, 
             which has strengthened my leadership, communication, and time management abilities. I am a quick learner, proactive, and capable of working both independently and collaboratively to achieve the best results.
            </p>
          </div>

          <div class="skills-grid">
            <div class="skill-category loading loaded" style="animation-delay: 0s;">
              <div class="skill-icon"><i class="bi bi-terminal"></i></div>
              <h6><strong>Languages</strong></h6>
              <p>Java, PHP, JavaScript, C#</p>
            </div>

            <div class="skill-category loading loaded" style="animation-delay: 0.1s;">
              <div class="skill-icon"><i class="bi bi-code-slash"></i></div>
              <h6><strong>Frontend</strong></h6>
              <p>HTML/CSS, JS, jQuery, React</p>
            </div>

            <div class="skill-category loading loaded" style="animation-delay: 0.2s;">
              <div class="skill-icon"><i class="bi bi-gear"></i></div>
              <h6><strong>Backend</strong></h6>
              <p>Laravel, .NET Core, CI</p>
            </div>

            <div class="skill-category loading loaded" style="animation-delay: 0.3s;">
              <div class="skill-icon"><i class="bi bi-database"></i></div>
              <h6><strong>Database</strong></h6>
              <p>MySQL, SQL Server, Oracle</p>
            </div>

            <div class="skill-category loading loaded" style="animation-delay: 0.4s;">
              <div class="skill-icon"><i class="bi bi-tools"></i></div>
              <h6><strong>Tools</strong></h6>
              <p>Git, Visual Studio, VS Code, Android Studio, Figma</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- EXPERIENCE SECTION -->
    <section id="experience" class="loading loaded">
      <h2 class="section-title">Experience &amp; Education</h2>
      <p style="text-align: center; font-size: 1.2rem; color: var(--accent); font-weight: bold; margin-bottom: 2rem">My professional journey and educational background</p>
      <div class="tab-container">
        <button class="tab-button active" onclick="showTab('experience-content')">Experience</button>
        <button class="tab-button" onclick="showTab('education-content')">Education</button>
      </div>

      <div id="experience-content" class="tab-content active">
        <div class="timeline-item">
          <h3>Application Developer Intern</h3>
          <div class="date">Jan 2025 - Sept 2025</div>
          <p><strong>PT. Aisin Takaoka Indonesia Indonesia</strong></p>
          <ul>
<li>Developed an internal website to support the work processes of the Safety, Environment, and Carbon Neutral (SE-CN) unit using web development technologies, with PHP Native for the frontend and SQL Server for the backend.</li>
<li>Created a WWTP (Waste Water Treatment Plant) monitoring checksheet system to document and provide real-time monitoring of pH, TDS, and flow, ensuring treated water quality meets standards and reducing recording errors.</li>
<li>Prepared technical documentation for the developed system and assisted the IT team in system maintenance and testing.</li>
<li>Coordinated with users across divisions to understand system requirements and implemented improvements based on user feedback.</li>
        </ul>
          <div class="d-flex flex-wrap gap-2">
           
            <span class="badge-tech-alt">PHP Native</span>
            <span class="badge-tech-alt">Sql Server</span>
          </div>
        </div>

        <div class="timeline-item">
          <h3>Library Inventory and Borrowing Website</h3>
          <div class="date">2025</div>
          <p><strong>Astra Polytechnic</strong></p>
          <ul>
            <li>
             Built and implemented a web-based system to manage library inventory and book borrowing processes effectively, efficiently, and in an integrated manner. The system aims to improve data accuracy, simplify transaction recording for borrowing and returning, and provide real-time access to information for both administrators and library users.
            </li>
           
          </ul>
          <div class="d-flex flex-wrap gap-2">
            <span class="badge-tech-alt">CI</span>
            <span class="badge-tech-alt">PHP</span>
            <span class="badge-tech-alt">MySql</span>
          </div>
        </div>
        <div class="timeline-item">
          <h3>Accreditation Information Website</h3>
          <div class="date">2024</div>
          <p><strong>Astra Polytechnic</strong></p>
          <ul>
            <li>
           Created a web platform that displays detailed accreditation data for each study program, easily accessible by internal campus users.
            </li>
           
          </ul>
          <div class="d-flex flex-wrap gap-2">
            <span class="badge-tech-alt">CI</span>
            <span class="badge-tech-alt">java</span>
            <span class="badge-tech-alt">Spring Boot</span>
          </div>
        </div>
        <div class="timeline-item">
          <h3>PolyVote Astra Android</h3>
          <div class="date">2024</div>
          <p><strong>Astra Polytechnic</strong></p>
          <ul>
            <li>
          Designed and developed a digital voting application for the election of HIMMA’s Chairman and Vice Chairman. The app also provides real-time organizational activity information to students.
            </li>
           
          </ul>
          <div class="d-flex flex-wrap gap-2">
            <span class="badge-tech-alt">Andorid</span>
            <span class="badge-tech-alt">java</span>
            <span class="badge-tech-alt">Spring Boot</span>
          </div>
        </div>
      </div>

      <div id="education-content" class="tab-content">
        <div class="timeline-item">
          <h3>Associate Degree (D3) in Information Management</h3>
          <div class="date">2022 - 2025</div>
          <p><strong>Astra Polytechnic</strong></p>
          <ul>
            <li>Educated in an industry-driven environment tailored to Astra Group's professional standards and practical demands.</li>
          </ul>
          <div class="d-flex flex-wrap gap-2">
            <span class="badge-tech-alt">GPA: 3.28/4.00</span>
          </div>
        </div>
      </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="section-projects">
  <h2 class="section-title">Featured Projects</h2>
  <p class="section-subtitle">
    Some of my recent work and achievements
  </p>

  <div class="projects-grid">
    <!-- Project 1 -->
    <div class="project-card" style="animation-delay: 0.5s;">
      <div class="project-image">
        <img src="/FORTOFOLIO/wwtp.jpeg" alt="Room & Equipment Borrowing System" />
      </div>
      <div class="project-content">
        <h3>Application Developer Intern</h3>
        <p>Developed an internal website to support the work processes of the Safety, Environment, and Carbon Neutral (SE-CN) unit using web development technologies, with PHP Native for the frontend and SQL Server for the backend.</p>
        <div class="mb-3">
          <span class="badge-tech-alt">PHP Native</span>
          <span class="badge-tech-alt">SQL Server</span>
        </div>
         <a href="https://github.com/Ziban12/Monitoring-WWTP.git" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
          View Project
        </a>
      </div>
    </div>

    <!-- Project 2 -->
    <div class="project-card" style="animation-delay: 0.6s;">
      <div class="project-image">
        <img src="/FORTOFOLIO/android.jpeg" alt="MI Savings App" />
      </div>
      <div class="project-content">
        <h3>PolyVote Astra Android</h3>
        <p>
          Designed and developed a digital voting application for the election of HIMMA’s Chairman and Vice Chairman. The app also provides real-time organizational activity information to students.
        </p>
        <div class="mb-3">
          <span class="badge-tech-alt">Java</span>
          <span class="badge-tech-alt">Android</span>
          <span class="badge-tech-alt">MySql</span>
          <span class="badge-tech-alt">Spring Boot</span>
        </div>
        <a href="https://github.com/Ziban12/PROJECT_MISAVINGS.git" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
          View Project
        </a>
      </div>
    </div>

    <!-- Project 3 -->
    <div class="project-card" style="animation-delay: 0.7s;">
      <div class="project-image">
        <img src="/FORTOFOLIO/toyota.jpeg" alt="Digital Logistic Transport Permit" />
      </div>
     <div class="project-content">
  <h3>Employee Monitoring System – Astrido Toyota Jaya Mobilindo</h3>
  <p>
    A web-based system designed to monitor and track daily customer visits and interactions, helping the company analyze employee performance and customer engagement more efficiently.
  </p>
  <div class="mb-3">
    <span class="badge-tech-alt">PHP Native/span>
    <span class="badge-tech-alt">Sql Server</span>
  </div>
  <a href="https://github.com/Ziban12/Employ.git" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
    View Project
  </a>
</div>

    </div>

    <!-- Project 4 -->

  <div class="text-center mt-4">
    <a href="https://github.com/Ziban12" class="btn btn-outline-primary" target="_blank" rel="noopener noreferrer">
      View All Code
    </a>
  </div>
</section>

 <section id="organization" class="loading loaded py-5">
  <h2 class="section-title text-center">Organization</h2>
  <p style="text-align: center; font-size: 1.2rem; color: var(--accent); font-weight: bold; margin-bottom: 2rem">
    My organizational experiences and contributions
  </p>

  <div class="projects-grid" tabindex="0">
    <!-- Card 1 -->
    <div class="project-card loading loaded" style="animation-delay: 0.3s;">
      <div class="project-image">
        <img src="/FORTOFOLIO/sanlat.jpg" alt="Remaja Masjid Al-Firdaus">
      </div>
      <div class="project-content">
        <h3>Chairperson of Al-Firdaus Mosque Youth Organization (2023 - Present)</h3>
        <p>Leading the youth organization of Al-Firdaus Mosque, focusing on strengthening community engagement through religious, social, and educational programs such as Ramadhan activities, charity events, and youth leadership development.</p>
        <div class="mb-3">
          <span class="badge-tech-alt">Leadership</span>
          <span class="badge-tech-alt">Community Service</span>
          <span class="badge-tech-alt">Event Coordination</span>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="project-card loading loaded" style="animation-delay: 0.4s;">
      <div class="project-image">
        <img src="/FORTOFOLIO/bph.jpg" alt="UKM Musik Politeknik Astra">
      </div>
      <div class="project-content">
        <h3>Vice Chairperson of the Music Student Activity Unit (UKM Musik) at Politeknik Astra (2023 - 2024)</h3>
        <p>Assisted the chairman in managing all music club activities, organizing live performances, mentoring new members, and promoting creativity through campus events and intercollegiate collaborations.</p>
        <div class="mb-3">
          <span class="badge-tech-alt">Teamwork</span>
          <span class="badge-tech-alt">Leadership</span>
          <span class="badge-tech-alt">Creative Management</span>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="project-card loading loaded" style="animation-delay: 0.5s;">
      <div class="project-image">
        <img src="/FORTOFOLIO/himma.jpg" alt="Himpunan Mahasiswa Manajemen Informatika">
      </div>
      <div class="project-content">
        <h3>Informatics Management Student Association (2022 - 2025)</h3>
        <p>Active member contributing to organizational digitalization by developing <strong>PolyAstraVote</strong>—a digital voting system designed to modernize student elections, improving efficiency, transparency, and reducing paper waste.</p>
        <div class="mb-3">
          <span class="badge-tech-alt">Innovation</span>
          <span class="badge-tech-alt">System Development</span>
          <span class="badge-tech-alt">Digital Transformation</span>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center mt-4">
    <a href="https://drive.google.com/drive/folders/1NM5dzdsV5DG85xtou80dzaCwmO11Ab_z?usp=sharing" class="btn btn-outline-primary" target="_blank" rel="noopener noreferrer">View All Activities</a>
  </div>
</section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="loading loaded">
      <h2 class="section-title">Contact Me</h2>
      <p style="text-align: center; font-size: 1.2rem; color: var(--accent); font-weight: bold; margin-bottom: 0.5rem">Let's connect and discuss opportunities to work together!</p>
      <p style="text-align: center; font-size: 1rem; color: var(--accent); font-weight: bold; margin-bottom: 2rem">📌 Click any box below to reach me directly</p>

      <div class="contact-links">
        <a href="https://github.com/Ziban12" class="contact-item loading loaded" target="_blank" rel="noopener noreferrer" style="animation-delay: 0.9s;">
          <div class="contact-icon">
            <i class="bi bi-github"></i>
          </div>
          <h3>GitHub</h3>
          <p>View my repositories and open source contributions</p>
        </a>
        <a href="https://www.linkedin.com/in/ziban-robani-00b52a36b/" class="contact-item loading loaded" target="_blank" rel="noopener noreferrer" style="animation-delay: 1s;">
          <div class="contact-icon">
            <i class="bi bi-linkedin"></i>
          </div>
          <h3>LinkedIn</h3>
          <p>Connect with me professionally</p>
        </a>
        <a href="mailto:zibanrobani123@gmail.com" class="contact-item loading loaded" style="animation-delay: 1.1s;">
          <div class="contact-icon">
            <i class="bi bi-envelope-fill"></i>
          </div>
          <h3>Email</h3>
          <p>zibanrobani123@gmail.com</p>
        </a>
        <a href="https://wa.me/62895386489870" class="contact-item loading loaded" target="_blank" rel="noopener noreferrer" style="animation-delay: 1.2s;">
          <div class="contact-icon">
            <i class="bi bi-whatsapp"></i>
          </div>
          <h3>WhatsApp</h3>
          <p>Send me a message</p>
        </a>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div class="footer-content">
        <div class="footer-links">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#experience">Experience</a>
          <a href="#projects">Projects</a>
           <a href="#organization">organization</a>
          
          <a href="#contact">Contact</a>
        </div>
        <p>© <span id="monthYear">Sep 2025</span> Bayu. All rights reserved.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        const now = new Date();
        document.getElementById("monthYear").textContent = `${monthNames[now.getMonth()]} ${now.getFullYear()}`;
      });

      // Theme Toggle
      function toggleTheme() {
        const body = document.body;
        const themeToggle = document.querySelector(".theme-toggle");

        if (body.getAttribute("data-theme") === "dark") {
          body.setAttribute("data-theme", "light");
          themeToggle.textContent = "☀️";
        } else {
          body.setAttribute("data-theme", "dark");
          themeToggle.textContent = "🌙";
        }
      }

      // Mobile Menu Toggle - IMPROVED
      function toggleMobileMenu() {
        const navLinks = document.getElementById("navLinks");
        const mobileMenu = document.getElementById("mobileMenu");
        const body = document.body;

        navLinks.classList.toggle("active");
        mobileMenu.classList.toggle("active");

        // Prevent body scroll when menu is open
        if (navLinks.classList.contains("active")) {
          body.classList.add("menu-open");
        } else {
          body.classList.remove("menu-open");
        }
      }

      // Close menu function
      function closeMenu() {
        const navLinks = document.getElementById("navLinks");
        const mobileMenu = document.getElementById("mobileMenu");
        const body = document.body;

        navLinks.classList.remove("active");
        mobileMenu.classList.remove("active");
        body.classList.remove("menu-open");
      }

      // Close menu when clicking outside
      document.addEventListener("click", function (event) {
        const navLinks = document.getElementById("navLinks");
        const mobileMenu = document.getElementById("mobileMenu");
        const navContainer = document.querySelector(".nav-container");

        if (navLinks.classList.contains("active") && !navContainer.contains(event.target)) {
          closeMenu();
        }
      });

      // Close menu on window resize to desktop size
      window.addEventListener("resize", function () {
        if (window.innerWidth > 768) {
          closeMenu();
        }
      });

      // Tab Switching
      function showTab(tabId) {
        const tabContents = document.querySelectorAll(".tab-content");
        tabContents.forEach((tab) => tab.classList.remove("active"));

        const tabButtons = document.querySelectorAll(".tab-button");
        tabButtons.forEach((button) => button.classList.remove("active"));

        document.getElementById(tabId).classList.add("active");
        event.target.classList.add("active");
      }

      // Smooth Scrolling
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute("href"));
          if (target) {
            target.scrollIntoView({
              behavior: "smooth",
              block: "start",
            });
          }
        });
      });

      // Intersection Observer for animations
      const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("loaded");
          }
        });
      }, observerOptions);

      // Initialize
      document.addEventListener("DOMContentLoaded", function () {
        const animatedElements = document.querySelectorAll("section, .skill-category, .project-card, .contact-item");
        animatedElements.forEach((element) => {
          element.classList.add("loading");
          observer.observe(element);
        });

        const cards = document.querySelectorAll(".skill-category, .project-card, .contact-item");
        cards.forEach((card, index) => {
          card.style.animationDelay = `${index * 0.1}s`;
        });
      });

      // Active navigation link highlighting
      window.addEventListener("scroll", function () {
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-links a");

        let current = "";
        sections.forEach((section) => {
          const sectionTop = section.offsetTop;
          const sectionHeight = section.clientHeight;
          if (scrollY >= sectionTop - 200) {
            current = section.getAttribute("id");
          }
        });

        navLinks.forEach((link) => {
          link.classList.remove("active");
          if (link.getAttribute("href") === `#${current}`) {
            link.classList.add("active");
          }
        });
      });

      // Add typing effect to name
      function typeWriter(element, text, speed = 100) {
        let i = 0;
        element.innerHTML = "";

        function type() {
          if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(type, speed);
          }
        }

        setTimeout(type, 1000);
      }

      // Initialize typing effect
      window.addEventListener("load", function () {
        const nameElement = document.querySelector(".name");
        if (nameElement) {
          typeWriter(nameElement, "Ziban Robani", 150);
        }
      });
    </script>
  

<div id="give-freely-root-ejkiikneibegknkgimmihdpcbcedgmpo" class="give-freely-root" data-extension-id="ejkiikneibegknkgimmihdpcbcedgmpo" data-extension-name="Volume Booster" style="display: block;"></div></body></html>