<?php
/**
 * Welcome Anzu backend Page.
 */
?>

<div class="wrap">

    <div class="anzu-heading mb-5">
        <h1 class="anzu-heading-welcome"><?php echo sprintf( __( 'Welcome to ', 'anzu' ) . 'Anzu' ).'! '.'&#127881;' ?></h1>
        <div class="anzu-heading-social-media">
            <a href="https://facebook.com/visualmodo/" target="_blank"><span class="dashicons dashicons-facebook-alt"></span></a>
            <a href="https://twitter.com/visualmodo/" target="_blank"><span class="dashicons dashicons-twitter"></span></a>
            <a href="https://instagram.com/visualmodo/" target="_blank"><span class="dashicons dashicons-instagram"></span></a>
            <a href="https://youtube.com/visualmodo/" target="_blank"><span class="dashicons dashicons-youtube"></span></a>
            <a href="https://www.visualmodo.com/blog/" target="_blank"><span class="dashicons dashicons-rss"></span></a>
        </div>
    </div>

    <div class="anzu-quick-start-guide">

        <h2><?php echo __( 'Your Quick Start Guide', 'anzu' ); ?></h2>
        <div class="anzu-quick-start-guide__items">

            <div class="anzu-quick-start-guide__item">
                <div class="anzu-quick-start-guide__item-left">
                    <div class="anzu-quick-start-guide__item-sequence">
                        <span>1</span>
                    </div>
                    <div class="anzu-quick-start-guide__item-content">
                        <h3><?php echo __( 'Essential Plugins', 'anzu' ); ?></h3>
                        <span><?php echo __( 'Install and active your Plugins', 'anzu' ); ?></span>
                    </div>
                </div>
                <div class="anzu-quick-start-guide__item-right">
                    <div class="anzu-quick-start-guide__item-link">
                        <a href="admin.php?page=anzu-install-plugins" class="button button-primary button-hero"><?php echo __( 'Install And Active Plugins', 'anzu' ); ?></a>
                    </div>
                </div>
            </div>

            <div class="anzu-quick-start-guide__item">
                <div class="anzu-quick-start-guide__item-left">
                    <div class="anzu-quick-start-guide__item-sequence">
                        <span>2</span>
                    </div>
                        <div class="anzu-quick-start-guide__item-content">
                            <h3><?php echo __( 'Prebuilt Websites', 'anzu' ); ?></h3>
                            <span><?php echo __( 'After installing Borderless, access our full library of beautiful full page layouts.', 'anzu' ); ?></span>
                        </div>
                </div>
                <div class="anzu-quick-start-guide__item-right">
                    <div class="anzu-quick-start-guide__item-link">
                        <a href="admin.php?page=borderless-templates-library" class="button button-primary button-hero"><?php echo __( 'Access Full Library', 'anzu' ); ?></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="anzu-quick-start-guide__system-requirements mt-5">

            <?php
            $php_version = phpversion();
            $memory_limit = (int)size_format( wp_convert_hr_to_bytes( ini_get( 'memory_limit' ) ) );
            $max_upload_size = (int)size_format( wp_max_upload_size() );
            $post_max_size = (int)size_format( wp_convert_hr_to_bytes( ini_get( 'post_max_size' ) ) );
            $icon_pass = '<span class="dashicons dashicons-yes-alt"></span>';
            $icon_warning = '<span class="dashicons dashicons-warning"></span>';
            $php_version__status = $php_version >= '7.4' ? $icon_pass : $icon_warning;
            $memory_limit__status = $memory_limit >= '128' ? $icon_pass : $icon_warning;
            $max_upload_size__status = $max_upload_size >= '128' ? $icon_pass : $icon_warning;
            $post_max_size__status = $post_max_size >= '128' ? $icon_pass : $icon_warning;
            ?>

            <div class="anzu-quick-start-guide__system-requirements-status">

                <h2><?php echo __( 'System Requirements', 'anzu' ); ?></h2>

                <div class="php-version">
                    <?php echo $php_version__status; ?>
                    <span>Version 7.4 or greater</span>
                </div>
                
                <div class="memory-limit">
                    <?php echo $memory_limit__status; ?>
                    <span>Memory Limit (128M)</span>
                </div>
                
                <div class="upload-max-filesize">
                    <?php echo $max_upload_size__status; ?>
                    <span>Upload Max. Filesize (128M)</span>
                </div>

                <div class="post-max-size">
                    <?php echo $post_max_size__status; ?>
                    <span>Max. Post Size (128M)</span>
                </div>

                <div class="anzu-quick-start-guide__system-requirements-info mt-5">
                    <h2><?php echo __( 'Best Web Hosting', 'anzu' ); ?></h2>
                    <div class="anzu-quick-start-guide__system-requirements-hosts">
                        <a href="https://www.bluehost.com/?utm_source=visualmodo.com&utm_medium=affiliate&utm_campaign=affiliate-link_claudiocamposp_notype" target="_blank">
                            <img src="https://cdn.visualmodo.com/aesir/assets/img/bluehost.svg" alt="BlueHost">
                        </a>
                        <a href="https://www.cloudways.com/en/?id=309377&a_bid=248d574c" target="_blank">
                            <img src="https://cdn.visualmodo.com/aesir/assets/img/cloudways.svg" alt="Cloudways">
                        </a>
                    </div>
                </div>
            
            </div>

            <div class="anzu-quick-start-guide__system-requirements-info">
                <p>Here are the system requirements you need in order to use Anzu. (If you are not sure whether or not your server supports this, contact your <strong>host</strong>). Note: These requirements are for Anzu. If you are using additional plugins on your site that also have minimum requirements such as WooCommerce, you may need to increase your memory to 512 MB to help avoid loading issues.</p>
            </div>

        </div>

        <h2 class="mt-5"><?php echo __( 'Still in doubt?', 'anzu' ); ?></h2>

        <div class="anzu-quick-start-guide-still-in-doubt">

            <div class="anzu-quick-start-guide-still-in-doubt__content">
                <p>When starting your website, you can choose two paths, create a <strong>Blank Website</strong> or with a <strong>Prebuilt Website</strong>. If you choose the second option, follow the two steps above. First, install all the essential plugins to get all the necessary functions to proceed, then select a Prebuilt Website that you like best to import to make your site looks like this prebuilt website, and you can customize it from there, and you're ready to go! You can also watch the <strong>Quick Start Guide</strong> video. &#128522;</p>
            </div>

            <div class="video-container">
                <iframe class="responsive-iframe" src="https://www.youtube.com/embed/zDyQsXi7ka8"></iframe>
            </div>

        </div>

    </div>

    <div class="anzu-news mt-5">
        <div class="anzu-advertising">
            <h2><?php echo __( 'Write For Us', 'anzu' ); ?></h2>
            <p class="anzu-advertising__description"><?php echo __( 'If you are a talented writer and have some valuable information, ideas or techniques to share, you are welcome to submit a guest post to us. &#9997;', 'anzu' ); ?></p>
            <a href="https://visualmodo.com/write-for-us/" class="button button-primary button-hero" target="_blank"><?php echo __( 'Submit An Article', 'anzu' ); ?></a>
        </div>
        <div class="anzu-feed">
            <h2><?php echo __( 'Visualmodo Blog', 'anzu' ); ?></h2>
            <?php
            include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
            $feed = fetch_rss('https://www.visualmodo.com/feed/'); // specify feed url
            $items = array_slice($feed->items, 0, 5); // specify first and last item
            ?>

            <?php if (!empty($items)) : ?>
            <?php foreach ($items as $item) : ?>

            <h2><a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></h2>

            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="anzu-useful-links mt-5">
        <h2 class="anzu-useful-links-title"><?php echo __( 'Useful Links', 'anzu' ); ?></h2>
        <div class="anzu-useful-links__items">
            <div class="anzu-useful-links__help-center">
                <h3><?php echo __( 'Help Center', 'anzu' ); ?></h3>
                <a href="https://visualmodo.com/help/" target="_blank"><?php echo __( 'Knowledge base', 'anzu' ); ?></a>
                <a href="https://visualmodo.com/documentation/" target="_blank"><?php echo __( 'Documentation', 'anzu' ); ?></a>
                <a href="https://visualmodo.com/acc/submit-ticket/" target="_blank"><?php echo __( 'Contact support', 'anzu' ); ?></a>
            </div>
            <div class="anzu-useful-links__x">
                <h3><?php echo __( 'Company', 'anzu' ); ?></h3>
                <a href="https://visualmodo.com/faq/" target="_blank"><?php echo __( 'FAQ', 'anzu' ); ?></a>
                <a href="https://visualmodo.com/about/" target="_blank"><?php echo __( 'About', 'anzu' ); ?></a>
                <a href="https://visualmodo.com/customers/" target="_blank"><?php echo __( 'Customers', 'anzu' ); ?></a>
            </div>
            <div class="anzu-useful-links__y">
                <h3><?php echo __( 'Articles', 'anzu' ); ?></h3>
                <a href="https://visualmodo.com/blog/" target="_blank"><?php echo __( 'Blog', 'anzu' ); ?></a>
                <a href="https://visualmodo.com/write-for-us/" target="_blank"><?php echo __( 'Write For Us', 'anzu' ); ?></a>
                <a href="https://visualmodo.com/category/wordpress/" target="_blank"><?php echo __( 'WordPress', 'anzu' ); ?></a>
            </div>
        </div>
    </div>

</div>
