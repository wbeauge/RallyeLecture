<!-- navigation -->
<div class="navigation">
    <a href="<?php echo base_url(); ?>">home</a>
    <?php foreach ($options as $o) { ?>
        <a href="<?php echo "{$o[0]}/{$o[1]}"; ?>"><?php echo $o[2]; ?></a>
    <?php } // end foreach?>
</div>