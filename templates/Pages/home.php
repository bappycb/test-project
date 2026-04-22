<?php
/**
 * @var \App\View\AppView $this
 */
$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parallel Starter</title>
    <?= $this->Html->meta('icon') ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <?= $this->Html->css('landing-page') ?>
</head>
<body>
    <header class="site-header">
        <div class="logo">Parallel Starter</div>
        <nav class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#work">Gallery</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section id="home" class="panel hero">
        <div class="overlay"></div>
        <div class="content">
            <p class="tiny">Creative agency</p>
            <h1>Welcome To Our Studio</h1>
        </div>
    </section>

    <section id="about" class="panel about">
        <div class="overlay"></div>
        <div class="content">
            <h2>About Us</h2>
            <div class="cards">
                <article>
                    <h3>Who We Are</h3>
                    <p>We are a team of designers and developers focused on building clean digital experiences.</p>
                </article>
                <article>
                    <h3>Our Vision</h3>
                    <p>Simple interfaces, strong branding, and real performance that helps your business grow.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="services" class="panel services">
        <div class="overlay"></div>
        <div class="content">
            <h2>What We Do</h2>
            <div class="features">
                <div>Web Design</div>
                <div>Branding</div>
                <div>Development</div>
            </div>
        </div>
    </section>

    <section id="work" class="panel work">
        <div class="overlay"></div>
        <div class="content">
            <h2>Our Work</h2>
            <div class="stats">
                <div><strong>150+</strong><span>Projects</span></div>
                <div><strong>80+</strong><span>Clients</span></div>
                <div><strong>12</strong><span>Years</span></div>
            </div>
        </div>
    </section>

    <section id="contact" class="panel contact">
        <div class="overlay"></div>
        <div class="content">
            <h2>Get In Touch</h2>
            <p>Let's create something amazing together.</p>
            <a class="btn" href="mailto:hello@example.com">Send Message</a>
        </div>
    </section>
</body>
</html>
