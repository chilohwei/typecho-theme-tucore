<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
        <div class="autopagerize_page_element">
            <div class="content">
                <div class="post_page">
                    <div class="post animated fadeInDown">
                        <div class="post_title post_detail_title">
                            <h2>
                                <a><?php $this->title() ?></a>

                            </h2>
                            <span class="date"><?php $this->date('F j, Y'); ?> by <?php $this->author(); ?></span>

                        </div>

                        <div class="post_content markdown">
                        <?php $this->content(); ?>
                        </div>

                        <div class="post_footer">
                            <div class="meta">
                                <div class="info">
                                    <!--隐藏标签
                                    <span class="field tags">
                                        <i class="fa fa-flask"></i>
                                        <?php //_e('标签: '); ?><?php //$this->tags(', ', true, 'none'); ?>
                                    </span>-->


                                </div>

                            </div>

                        </div>

                        <div class="share">

                            <div class="weibo">
                                <a href="javascript:void((function(s,d,e){try{}catch(e){}var f='http://service.weibo.com/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=',e(d.title),'&appkey=2924220432'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));"
                                    class="fa fa-weibo"></a>

                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>