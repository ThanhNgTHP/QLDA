
<div class="inline-block group">
    <button class="hover:opacity-75">
        <?php echo $content; ?>
    </button>
    <div class="hidden group-hover:block">
        <?php 
        foreach($options as $key => $option):
        ?>

        <div class="option">
            <?php echo $option?>
        </div>

        <?php endforeach; ?>
    </div>
</div>