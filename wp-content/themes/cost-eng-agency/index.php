<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="logo">Cost<span class="accent-orange">.</span>Eng</div>
        </div>
    </header>

    <main class="container">
        <section class="hero">
            <h1>Precision in <br><span class="accent-orange">Cost Engineering.</span></h1>
            <p>We provide analytical solutions for complex infrastructure projects. Minimizing risks, maximizing efficiency.</p>
        </section>

        <div class="grid-line"></div>

        <section class="services">
            <div class="service-card">
                <h3>Cost Estimation</h3>
                <p>Detailed analysis of capital expenditures from early design to completion.</p>
            </div>
            <div class="service-card">
                <h3>Risk Management</h3>
                <p>Identifying and mitigating financial uncertainties in global projects.</p>
            </div>
            <div class="service-card">
                <h3>Value Engineering</h3>
                <p>Optimizing project value without compromising performance or quality.</p>
            </div>
        </section>
    </main>

    <?php wp_footer(); ?>
</body>
</html>
