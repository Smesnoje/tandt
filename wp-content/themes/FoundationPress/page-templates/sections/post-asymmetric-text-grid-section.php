<!-- post-asym-text-grid-section -->
<section class="post-asym-text-grid-section">

    <div class="post-asym-text-grid-container main-container">

        <div class="post-asym-text-grid-content">
            <!-- First -->
            <div class="post-asym-text-grid-content_item-1">
                <!-- heading -->
                <h3 class="post-asym-text-grid-content_item-1--title">
                    <?php if( get_field('post-asymmetric-text-grid-heading-1') ): ?>
                        <?php the_field('post-asymmetric-text-grid-heading-1'); ?>
                    <?php endif; ?>
                </h3>
                
                <div class="post-asym-text-grid-content_item-1--text">
                    <!-- text -->
                    <?php if( get_field('post-asymmetric-text-grid-text-1') ): ?>
                        <?php the_field('post-asymmetric-text-grid-text-1'); ?>
                    <?php endif; ?>

                </div>

            </div>

            <div class="post-asym-text-grid-content_item-2">
                <!-- heading -->
                <h3 class="post-asym-text-grid-content_item-2--title">
                    <?php if( get_field('post-asymmetric-text-grid-heading-2') ): ?>
                        <?php the_field('post-asymmetric-text-grid-heading-2'); ?>
                    <?php endif; ?>
                </h3>
                
                <div class="post-asym-text-grid-content_item-2--text">
                    <!-- text -->
                    <?php if( get_field('post-asymmetric-text-grid-text-2') ): ?>
                        <?php the_field('post-asymmetric-text-grid-text-2'); ?>
                    <?php endif; ?>
                    
                </div>

            </div>

        </div>

    </div>

</section>
