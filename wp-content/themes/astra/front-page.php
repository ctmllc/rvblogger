<?php get_header(); ?>

<main id="main" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section">
        <img src="path/to/your/hero-image.jpg" alt="RV Lifestyle" class="hero-image">
        <div class="hero-content">
            <h1>Welcome to Our RV Blog!</h1>
            <p>Join us as we explore the world of RV travel, share tips, and document adventures of travellers.</p>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section class="blog-posts-section">
        <h2 class="section-title">Latest Blog Posts</h2>
        <?php get_search_form(); ?>

        <div class="blog-posts-container">
            <!-- Your custom WordPress loop to fetch and display blog posts -->
        </div>
    </section>

    <!-- Call-to-Action (CTA) Section -->
    <section class="cta-section">
        <h3>Don't Miss Out on Our Adventures!</h3>
        <p>Subscribe to our newsletter to get the latest blog posts, tips, and exclusive content.</p>
        <!-- Your newsletter subscription form or button -->
    </section>

</main>

<?php get_footer(); ?>

