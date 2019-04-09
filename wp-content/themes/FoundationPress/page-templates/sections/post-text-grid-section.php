<!-- post-text-grid-section -->
<section class="post-text-grid-section">

    <div class="post-text-grid-container main-container">

        <div class="post-text-grid-content">

            <div class="post-text-grid-content_item">
                <!-- First -->
                <!-- heading -->
                <h3 class="post-text-grid-content_item--title">
                    <?php if( get_field('post-text-grid-section-heading-1') ): ?>
                        <?php the_field('post-text-grid-section-heading-1'); ?></p>
                    <?php endif; ?>
                </h3>
                <!-- text -->
                <div class="post-text-grid-content_item--text">
                    <?php if( get_field('post-text-grid-section-text-1') ): ?>
                        <?php the_field('post-text-grid-section-text-1'); ?></p>
                    <?php endif; ?>
                </div>
            
            </div>

            <div class="post-text-grid-content_item">
                <!-- Second -->
                <!-- heading -->
                <h3 class="post-text-grid-content_item--title">
                    <?php if( get_field('post-text-grid-section-heading-2') ): ?>
                        <?php the_field('post-text-grid-section-heading-2'); ?></p>
                    <?php endif; ?>
                </h3>
                <!-- text -->
                <div class="post-text-grid-content_item--text">
                    <?php if( get_field('post-text-grid-section-text-2') ): ?>
                        <?php the_field('post-text-grid-section-text-2'); ?></p>
                    <?php endif; ?>
                </div>
                
            </div>

            <div class="post-text-grid-content_item">
                <!-- Second -->
                <!-- heading -->
                <h3 class="post-text-grid-content_item--title">
                    <?php if( get_field('post-text-grid-section-heading-3') ): ?>
                        <?php the_field('post-text-grid-section-heading-3'); ?></p>
                    <?php endif; ?>
                </h3>
                <!-- text -->
                <div class="post-text-grid-content_item--text">
                    <?php if( get_field('post-text-grid-section-text-3') ): ?>
                        <?php the_field('post-text-grid-section-text-3'); ?></p>
                    <?php endif; ?>
                </div>

            </div>

        </div>

    </div>

</section>