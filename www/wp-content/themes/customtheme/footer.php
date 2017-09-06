<?php $sources = get_field('social_networks','options');?>
<div class="footer">
    <div class="copyright">
        &#169; 2014 Robb Armstrong,  All Rights Reserved
    </div>
    <div class="social-icons">
        <?php foreach ($sources as $src){?>
            <a class="footer-link" href="<?php echo $src['link_for_social_network'];?>" target="_blank">
                <i class="fa <?php echo $src['icon_for_social_network']; ?> fa-fw" aria-hidden="true"></i>
            </a>
        <?php }?>
    </div>
	</div>
    <?php wp_footer(); ?>
</body>
</html>