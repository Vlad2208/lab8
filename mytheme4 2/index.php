<?php get_header(); ?>
      <main>
        <section id="tips" class="videos">
            <div class="video">
                <h2>Exercise Tips</h2>
                <video controls poster="http://site/wp-content/uploads/2024/12/video2.webp">
                    <source src="videos\10 Exercise Tips for a Fit and Focused Life.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="video">
                <h2>Healthy Meals</h2>
                <video controls poster="./img/video2.webp">
                    <source src="http://site/wp-content/uploads/2024/12/Ultra-Easy-Healthy-Meals-_-But-Cheaper.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>            
        </section>
        
        <section class="thumbnails">
            <div class="thumbnail">
                <a href="workout1.html">
                    <h3>Quick Home Workout</h3>
                    <img src="http://site/wp-content/uploads/2024/12/gum.jpg" alt="Workout 1">
                </a>
            </div>
            <div class="thumbnail">
                <a href="yoga.html">
                    <h3>Yoga for Beginners</h3>
                    <img src="http://site/wp-content/uploads/2024/12/work.jpg" alt="Workout 2">
                </a>
            </div>
            <div class="thumbnail">
                <a href="salad.html">
                    <h3>Fresh Summer Salad</h3>
                    <img src="http://site/wp-content/uploads/2024/12/meal.jpg" alt="Meal 1">
                </a>
            </div>
            <div class="thumbnail">
                <a href="smoothie.html">
                    <h3>Protein Smoothie</h3>
                    <img src="http://site/wp-content/uploads/2024/12/healty.jpg" alt="Meal 2">
                </a>
            </div>
        </section>
        
        <section class="image">
            <h2>Explore More About Healthy Lifestyle</h2>
            <a href="healthy_lifestyle.html">
                <img src="http://site/wp-content/uploads/2024/12/all.jpg" alt="Healthy Lifestyle Overview">
            </a>
        </section>
            




        
        <section id="about" class="text">
            <h2>Why Choose a Healthy Lifestyle?</h2>
            <p>A healthy lifestyle is more than just a choice—it’s a commitment to yourself. Feel energized, enhance your mental focus, and enjoy life to its fullest potential. With small, manageable changes, you can achieve a healthier, happier life.</p>
            
            <div class="about-block">
                <h3>Physical Health</h3>
                <p>Physical health is the foundation of a balanced life. Regular exercise not only helps you stay fit but also boosts your mood and energy. Whether it's going for a walk, doing yoga, or lifting weights, the key is consistency. A healthy body is a healthy mind.</p>
            </div>
            
            <div class="about-block">
                <h3>Mental Well-being</h3>
                <p>Mental health is just as important as physical health. Stress management, mindfulness, and regular relaxation practices are crucial in maintaining a positive mental state. A healthy lifestyle promotes mental clarity, emotional stability, and resilience in the face of challenges.</p>
            </div>
            
            <div class="about-block">
                <h3>The Benefits of a Healthy Lifestyle</h3>
                <p>Choosing a healthy lifestyle leads to numerous benefits: increased energy levels, improved mood, better sleep quality, a stronger immune system, and a greater sense of well-being. The positive effects of making health-conscious choices are profound and long-lasting.</p>
            </div>
        </section>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2 class="qazx"><?php the_title(); ?></h2>
        <?php endwhile; else: ?>
            <h2 class="qazx"> Записей нет.</h2>
        <?php endif; ?>

        <section id="contact" class="contact">
            <h2>Contact Us</h2>
            <div class="contact-info">
                <p>Email: vlad@gmail.com</p>
                <p>Phone: +375 29 679 39 10</p>
            </div>
        </section>
    </main>
<?php get_footer(); ?>