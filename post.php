<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
    <body>
        <div id="header-post">
            <a id="menu-icon" href="#">
                <i class="fa fa-bars fa-lg"></i>
            </a>
            <a id="menu-icon-tablet" href="#">
                <i class="fa fa-bars fa-lg"></i>
            </a>
            <a id="top-icon-tablet" href="#" onclick="$('html, body').animate({ scrollTop: 0 }, 'fast');" style="display:none;">
                <i class="fa fa-chevron-up fa-lg"></i>
            </a>
            <span id="menu">
                <span id="nav">
                    <ul>
                        <li>
                            <a href="<?php $this->options->siteUrl();?>">首页</a>
                        </li>
                        <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                        <?php if($this->options->github): ?><li>
                            <a href="<?php $this->options->github();?>" target="_blank">Github</a>
                        </li><?php endif; ?>
                    </ul>
                </span>
                <br>
                <span id="actions">
                    <ul>
					<li>
					<a id="search" class="search icon"href="javascript:;" onclick="$('html, body').animate({ scrollTop: 0 }, 'fast');">
					<i class="fa fa-search" aria-hidden="true" onmouseover='$("#i-search").toggle();' onmouseout='$("#i-search").toggle();'> 搜索</i></a>
					</li>
                        <li>
                            <?php $this->theNext('%s', '', array('title' => '<i class="fa fa-chevron-left" aria-hidden="true" onmouseover=\'$("#i-prev").toggle();\' onmouseout=\'$("#i-prev").toggle();\'></i>', 'tagClass' => 'icon')); ?>
                        </li>
                        <li> 
							<?php $this->thePrev('%s', '', array('title' => '<i class="fa fa-chevron-right" aria-hidden="true" onmouseover=\'$("#i-next").toggle();\' onmouseout=\'$("#i-next").toggle();\'> 下一篇</i>', 'tagClass' => 'icon')); ?>
                        </li>
                        <li>
                            <a class="icon" href="#" onclick="$('html, body').animate({ scrollTop: 0 }, 'fast');">
                                <i class="fa fa-chevron-up" aria-hidden="true" onmouseover='$("#i-top").toggle();' onmouseout='$("#i-top").toggle();'> 顶部</i></a>
                        </li>
                    </ul>
					 <span id="i-search" class="info" style="display:none;">Search</span>
                    <span id="i-prev" class="info" style="display:none;">Previous post</span>
                    <span id="i-next" class="info" style="display:none;">Next post</span>
                    <span id="i-top" class="info" style="display:none;">Back to top</span>
                    <span id="i-share" class="info" style="display:none;">Share post</span>
                </span>
                <br>
                
            </span>
        </div>
        <div class="content index width mx-auto px3 my3">
            <section id="wrapper" class="home">
                <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                    <header>
                        <h1 class="posttitle" itemprop="name headline"><a href="<?php $this->options->siteUrl();?>"><?php $this->title() ?></a></h1>
                        <div class="meta">
                            <div class="postdate">
                                <time datetime="<?php $this->date(); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
                            </div>
                            <div class="article-tag">
                                <i class="fa fa-eye"></i>
                                <span>
                                    <span><?php Postviews($this); ?></span>
                                </span>
                            </div>
                            <div class="article-tag">
                                <i class="fa fa-tag"></i>
                                <?php $this->category(' '); ?>
                            </div>
                            <div class="article-tag-box"></div>
                        </div>
                    </header>
                    <div class="content" itemprop="articleBody" id="post-content">
                        <?php parseContent($this); ?>
                        <h2>本文链接：</h2>
                        <a href="<?php $this->permalink() ?>" target="_blank"><?php $this->permalink() ?></a>
                    </div>
                </article>
                 <?php $this->need('comments.php'); ?>
            </section>
        </div>
 <?php $this->need('footer.php'); ?>
