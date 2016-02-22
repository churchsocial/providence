            </div>
        </div>
        <div class="sidebar">
            <?php if (get_theme_mod('service_times')): ?>
                <div class="service_times">
                    <h2>Join Us!</h2>
                    <p><?=get_theme_mod('service_times')?></p>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>
<div class="footer">
    <div class="center">
        <div class="pages">
            <?php wp_list_pages(['title_li' => null, 'depth'=> 1]) ?>
        </div>
        <div class="contact">
            <h2><?php bloginfo('blogname')?></h2>
            <?php if (get_theme_mod('church_address')): ?>
                <p><?=get_theme_mod('church_address')?></p>
            <?php endif ?>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="center">
        <p class="church">&copy; Copyright <?=date('Y')?> <?php bloginfo('blogname')?></p>
        <p class="software">Powered by <a href="http://churchsocialapp.com" title="Church Management Software">Church Social</a></p>
    </div>
</div>

<script src="<?php bloginfo('template_url') ?>/js/all.min.js"></script>

<?php wp_footer() ?>

</body>
</html>