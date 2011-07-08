<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>Articles by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?>
</head>

<body id="article-landing" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div class="wrap">
	
    	<section id="content">

	        <div class="main">

        	    <hgroup>
            	    <h1 class="phark">Articles</h1>
            	    <?php /* ><h2>Yes, I know there&rsquo;s only one article here. I just launched this site; <a href="http://www.youtube.com/watch?v=1V7c-jZ4wbg&amp;feature=related">gimme a break</a>.</h2><?php */ ?>
            	    <h2>Signed, sealed, delivered&hellip; I&rsquo;m yours!</h2>
            	</hgroup>
                
                <?php /* ?>
            	<ol class="pagination easy-clearing no-marker">
            	    <li><mark>1</mark></li>
            	    <li><a href="/articles/2/" title="Page 2 of Articles"><b>Page</b> 2</a></li>
            	    <li><a href="/articles/3/" title="Page 3 of Articles"><b>Page</b> 3</a></li>
            	    <li><a href="/articles/4/" title="Page 4 of Articles"><b>Page</b> 4</a></li>
            	    <li><a href="/articles/5/" title="Page 5 of Articles"><b>Page</b> 5</a></li>
            	    <li><a href="/articles/6/" title="Page 6 of Articles"><b>Page</b> 6</a></li>
            	    <li><a href="/articles/7/" title="Page 7 of Articles"><b>Page</b> 7</a></li>
            	    <li><a href="/articles/8/" title="Page 8 of Articles"><b>Page</b> 8</a></li>
            	    <li><a href="/articles/9/" title="Page 9 of Articles"><b>Page</b> 9</a></li>
            	</ol><?php '/.pagination' */ ?>
            	
            	<ol class="articles no-marker">   
            	    <li>
            	        <article>
            	            <header>
            	                <h1><a href="/articles/why-i-love-the-netflix-redesign/">Why I Love the Netflix Redesign</a></h1>
            	            </header>
            	            <p>Netflix should be applauded for their bold redesign.</p>
            	            <ul class="meta easy-clearing no-marker">
            	                <li class="permalink"><a href="/articles/why-i-love-the-netflix-redesign/"><time datetime="2011-06-09T06:57:00">Jun 9, 2011</time></a></li>
            	                <li class="comments"><a href="/articles/why-i-love-the-netflix-redesign#disqus_thread" data-disqus-identifier="why-i-love-the-netflix-redesign"></a></li>
            	            </ul><!-- .meta -->
            	        </article>        	        
        	        </li>
            	    <li>
            	        <article>
            	            <header>
            	                <h1><a href="/articles/now-i-have-rss/">Now I Have <abbr title="Really Simple Syndication">RSS</abbr></a></h1>
            	            </header>
            	            <p>Happy?</p>
            	            <ul class="meta easy-clearing no-marker">
            	                <li class="permalink"><a href="/articles/now-i-have-rss/"><time datetime="2011-06-02T01:14:15">Jun 2, 2011</time></a></li>
            	                <li class="comments"><a href="/articles/now-i-have-rss#disqus_thread" data-disqus-identifier="now-i-have-rss"></a></li>
            	                <?php /* ?><li class="categories"><a href="/channel/C11">design</a>, <a href="http://mahogany.danielmall.com/channel/C10">html</a></li><?php */ ?>
            	            </ul><!-- .meta -->
            	        </article>
            	    </li>        	        
        	        <li>
            	        <article>
            	            <header>
            	                <h1><a href="/articles/five/">Five</a></h1>
            	            </header>
            	            <p>Wow. After five long years, it feels great to have a new site.</p>
            	            <ul class="meta easy-clearing no-marker">
            	                <li class="permalink"><a href="/articles/five/"><time datetime="2011-05-30T03:40:00">May 30, 2011</time></a></li>
            	                <li class="comments"><a href="/articles/five#disqus_thread" data-disqus-identifier="five"></a></li>
            	                <?php /* ?><li class="categories"><a href="/channel/C11">design</a>, <a href="http://mahogany.danielmall.com/channel/C10">html</a></li><?php */ ?>
            	            </ul><!-- .meta -->
            	        </article>
            	    </li>
        	    </ol>
            	
            	
            </div><!-- /.main -->
            
            
            <div class="sub">
                
                <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/carbon.php"); echo "\n"; ?>
                
                <?php /* ?>
                <header>
                    <h1 class="phark">Displaying</h1>
                </header>
                
                <ul class="no-marker">
                    <li><mark>All Categories</mark></li>
                    <li><a href="/articles/categories/design/">Design</a></li>
                    <li><a href="/articles/categories/typography/">Typography</a></li>
                    <li><a href="/articles/categories/conferences/">Conferences</a></li>
                </ul><?php */ ?>
                
            </div><!-- /.sub -->
	
	
    		<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
	
	
    	</section><!-- /#content -->
    	
    	
    </div><!-- .wrap -->
    
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'danielmall'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var s = document.createElement('script'); s.async = true;
            s.type = 'text/javascript';
            s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
        }());
    </script>
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>