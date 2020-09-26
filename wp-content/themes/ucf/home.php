<?php get_header();

/* Template Name: ucf */

?>

<div class='background'>
    <div class='container'>
        <div class='logo-wrapper mb-md'>
            <img src='<?php echo the_field('logo'); ?>'>
        </div>
        <div class='mb-md'>

            <h1 class='heading-primary rob-slab-bold'>
                <?php echo the_field('heading'); ?>
            </h1>
        </div>
        <div class='mb-md'>
            <p class='paragraph'>
                <?php echo the_field('sub-heading'); ?>

            </p>
        </div>
        <div class='content mb-sm'>
            <div class='features'>
                <div class='feature mb-sm'>
                    <div class='check'>
                        <img src='<?php echo the_field('check-image'); ?>'>
                    </div>
                    <div class='feature-content rob-bold'>
                        <?php echo the_field('check-1'); ?>
                    </div>
                </div>
                <div class='feature mb-sm rob-bold'>
                    <div class='check'>
                        <img src='<?php echo the_field('check-image'); ?>'>
                    </div>
                    <div class='feature-content'>
                        <?php echo the_field('check-2'); ?>
                    </div>
                </div>
                <div class='feature mb-sm rob-bold'>
                    <div class='check'>
                        <img src='<?php echo the_field('check-image'); ?>'>
                    </div>
                    <div class='feature-content'>
                        <?php echo the_field('check-3'); ?>
                    </div>
                </div>
                <div class='feature mb-sm rob-bold'>
                    <div class='check'>
                        <img src='<?php echo the_field('check-image'); ?>'>
                    </div>
                    <div class='feature-content'>
                        <?php echo the_field('check-4'); ?>
                    </div>
                </div>
                <div class='black-bg white-font fit-content rob-slab-light stripe-upper'>
                    <?php echo the_field('black-stripe'); ?>
                </div>
                <div class='yellow-bg fit-content rob-slab-light stripe-lower'>
                    <?php echo the_field('yellow-stripe'); ?>
                </div>
            </div>
            <div class='consult-wrapper rob-bold'>
                <div onclick='togglePopup()' class='btn consult yellow-bg flex-center flex-col'>
                    <p class='consult-upper capitalize'><?php echo the_field('upper-text'); ?></p>
                    <p class='consult-middle capitalize'><?php echo the_field('middle-text'); ?></p>
                    <p class='consult-lower capitalize'><?php echo the_field('lower-text'); ?></p>
                </div>
            </div>

        </div>
        <div class='flex-center'>

            <div class='flex-center flex-col copyrights'>
                <div class='arrow mb-sm desktop-only'>
                    <img src='<?php echo the_field('picture'); ?>'>
                </div>
                <div class='flex-center mb-sm'>
                    <div class='university mr-md'>
                        <img src='<?php echo the_field('university-logo'); ?>'>
                    </div>
                    <div class='mr-md'>
                        <?php echo the_field('powered'); ?>
                    </div>
                    <div class='icon desktop-only'>
                        <img src='<?php echo the_field('hackeru-logo-desktop'); ?>'>
                    </div>
                    <div class='icon mobile-only'>
                        <img src='<?php echo the_field('hackeru-logo-mobile'); ?>'>
                    </div>
                </div>
                <div class='copy'>
                    <p class='mb-sm'><?php echo the_field('copyright'); ?></p>
                    <p>
                        <a class='link' href="<?php echo the_field('link-url'); ?>">
                            <?php echo the_field('link-text'); ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class='popup-wrapper'>
        <div class='blocker' onclick='togglePopup()'>

        </div>
        <div class='popup flex-center flex-col'>
            <div class='form-heading mb-md rob-slab-regular'>
                <h1><?php echo the_field('popup-head'); ?></h1>
            </div>
            <div class='form flex-center flex-col'>
                <div class='input-wrapper'>

                    <div class='mb-md'>
                        <label>Full Name</label>
                        <input>
                    </div>
                    <div class='mb-md'>
                        <label>Phone</label>
                        <input>
                    </div>
                    <div class='mb-md'>
                        <label>Email</label>
                        <input type="email">
                    </div>
                </div>

                <button class='btn form-btn yellow-bg' onclick="togglePopup()"><?php echo the_field('btn-text'); ?></button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>