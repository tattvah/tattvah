<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/products/products.css?a10'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/products/products.bundle.js?a10'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="main--container" style="min-height: 60vh;">
        <section class="section">
            <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 4rem 1rem;">
                <h1 style="font-size: 2.5rem; font-weight: 500; margin-bottom: 2rem; text-align: center;">Our Products</h1>
                
                <div class="products-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem;">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="product-card" style="border: 1px solid #eee; padding: 1rem; border-radius: 8px;">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', ['style' => 'width: 100%; height: auto; object-fit: cover; aspect-ratio: 1; border-radius: 4px;']); ?>
                                </a>
                            <?php endif; ?>
                            <h3 style="margin-top: 1rem; font-size: 1.25rem;"><a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a></h3>
                            <a href="<?php the_permalink(); ?>" style="display: inline-block; margin-top: 1rem; color: #d32f2f; font-weight: 500; text-decoration: none;">View Details →</a>
                        </div>
                    <?php endwhile; else: ?>
                        <p>No products found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
</body>
</html>
