<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
    <body>
        <div class="content index width mx-auto px3 my4">
            <header id="header">
			<?php $today = today(); ?>
                <a href="<?php $this->options->siteUrl();?>">
					 </a>
                    <div id="title">
                        <h1><a href="<?php $this->options->siteUrl();?>"><?php $this->options->title(); ?></a></h1>
                    </div>
                <div id="nav">
                    <ul>
                        <li class="icon">
                            <a href="#">
                                <i class="fa fa-bars fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php $this->options->siteUrl();?>">首页</a>
                        </li>
                        <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                        <?php if($this->options->github): ?>
						<li>
                         <a href="<?php $this->options->github();?>" target="_blank">Github</a>
                        </li><?php endif; ?>
						
                    </ul>
                </div>
            </header>
            <section id="wrapper" class="home">
                
                <section id="writing">
                    <span class="h1">
                       <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
                    </span>
                    <ul class="post-list" id="post-list">
					 <?php if ($this->have()): ?>
					<?php while($this->next()): ?>
                        <li class="post-item">
                            <div class="meta">
                                <time datetime="<?php $this->date(); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
                            </div>
                            <span>
                                <a href="<?php $this->permalink() ?>"><?php $this->title(38,'...') ?></a>
                            </span>
                        </li>
					 <?php endwhile; ?>
					 <?php else: ?>
            <h2>没有找到相关内容</h2>
            
        <?php endif; ?>
                    </ul>
                </section>
                
            </section>
        </div>
 <?php $this->need('footer.php'); ?>