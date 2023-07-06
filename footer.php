<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div>

<div class="footer">
    <a href="/about.html">About Me</a>
    <a href="/archives.html">Archives</a>
    <a href="/privacy.html">Privacy</a>
    <a href="/feed">RSS</a>

    <div class="powered_by">
    <a href="https://typecho.org" target="_blank"> &copy;<?php echo date('Y'); ?> Typecho</a> <a href="https://chiloh.cn"">By Chiloh Wei</a>

    </div>

    <div class="footer_slogan">
        <img src="<?php $this->options->themeUrl(); ?>images/font.svg" alt="重拾写作的乐趣" />
    </div>

</div>
<script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/fonts.js"></script>
<?php $this->footer(); ?>
</body>

</html>