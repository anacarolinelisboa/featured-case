<?php
get_header();
?>

<div id="featured-cases">
    <h1>Featured Cases</h1>

    <?php if (have_posts()) : ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <h2><?php the_title(); ?></h2>

                    <p>
                        <strong>Case Type:</strong>
                        <?php echo esc_html(get_field('case_type')); ?>
                    </p>

                    <p>
                        <strong>Settlement Amount:</strong>
                        <?php echo esc_html(get_field('settlement_amount')); ?>
                    </p>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>No cases found.</p>
    <?php endif; ?>
</div>
 

<style>
#featured-cases {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px; 
}
#featured-cases h1 {
    font-size: 26px;
    margin-bottom: 30px;
}

#featured-cases ul {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}
#featured-cases ul li{ 
    width: 100%;
    border: black 1px solid;
    border-radius: 5px;
    padding: 20px;
}
@media (min-width: 770px){    
    #featured-cases ul li{ 
        width: calc(33% - 20px); 
    }
}
#featured-cases ul li h2 {
    font-size: 18px;
    margin-bottom: 15px;
}
</style>
<?php
get_footer();
