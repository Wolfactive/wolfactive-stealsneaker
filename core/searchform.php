<form class="search-form" method="get" action="<?php echo esc_url(site_url('/')); ?>">
    <div class="header__search">
        <label for="inputHeaderSearch"><i class="fas fa-search" class="icon--text"></i></label>
        <input class="input s" type="search" id="inputHeaderSearch" name="s" value="" placeholder="Tìm kiếm">
        <input type="hidden" value="1" name="sentence" />
        <input type="hidden" value="san-pham" name="post_type" />
    </div>
</form>