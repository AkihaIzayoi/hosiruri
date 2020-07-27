                <footer>
                    <div id="footer"<?php echo ' style="background:rgba('.kratos_option('footer_color').')"'; ?>>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 footer-list text-center">
                                    <p style="font-size:12px"> © <?php echo date('Y'); ?> <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved. | <?php _e('已在风雨中度过','moedog'); ?> <span id="span_dt_dt">Loading...</span><br>Theme <a href="https://moedog.org/787.html" target="_blank" rel="nofollow">Kratos</a> Made by <a href="https://www.vtrois.com" target="_blank" rel="nofollow">Vtrois</a> Modified by <a href="https://moedog.org" target="_blank" rel="nofollow">Moedog</a><?php if(kratos_option('sitemap')) echo ' | <a href="'.get_option('home').'/sitemap.html" target="_blank">Sitemap</a>'; ?>
                                    <?php if(kratos_option('icp_num')) echo '<br><a href="http://beian.miit.gov.cn" rel="external nofollow" target="_blank">'.kratos_option('icp_num').'</a>';
                                          if(kratos_option('gov_num')) echo '<br><a href="'.kratos_option('gov_link').'" rel="external nofollow" target="_blank"><i class="govimg"></i>'.kratos_option('gov_num').'</a>'; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cd-tool text-center">
                            <?php if(kratos_option('site_girl')&&!wp_is_mobile()){ ?><div class="<?php if(kratos_option('cd_weixin')) echo 'waifu-btn2 '; ?>waifu-btn" title="Waifu"><span class="fa fa-venus"></span></div><?php } ?>
                            <div class="<?php if(kratos_option('cd_weixin')) echo 'gotop-box2 '; ?>gotop-box"><div class="gotop-btn"><span class="fa fa-chevron-up"></span></div></div>
                            <?php if(kratos_option('cd_weixin')) echo '<div id="wechat-img" class="wechat-img"><span class="fa fa-weixin"></span><div id="wechat-pic"><img src="'.kratos_option('weixin_image').'"></div></div>'; ?>
                            <div class="search-box">
                                <span class="fa fa-search"></span>
                                <form class="search-form" role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                                    <input type="text" name="s" id="search" placeholder="Search..." style="display:none"/>
                                </form>
                            </div>
                        </div>
                        <?php if(kratos_option('site_girl')&&!wp_is_mobile()){ ?>
                        <div class="waifu">
                            <div class="waifu-tips"></div>
                            <canvas id="live2d" width="220" height="250" class="live2d"></canvas>
                            <div class="waifu-tool">
                                <span class="fa fa-home"></span>
                                <span class="fa fa-comments"></span>
                                <span class="fa fa-drivers-license-o"></span>
                                <span class="fa fa-street-view"></span>
                                <span class="fa fa-camera"></span>
                                <span class="fa fa-info-circle"></span>
                                <span class="fa fa-close"></span>
                            </div>
                        </div>
                        <?php }if(kratos_option('ap_footer')){ ?>
                        <div class="aplayer-footer">
                            <div id="ap-footer" data-json="<?php echo kratos_option('ap_json'); ?>" data-autoplay="<?php echo kratos_option('ap_autoplay'); ?>" data-loop="<?php echo kratos_option('ap_loop'); ?>" data-order="<?php echo kratos_option('ap_order'); ?>"></div>
                        </div>
                        <?php }if(kratos_option('site_snow')&&(!wp_is_mobile()||wp_is_mobile()&&kratos_option('snow_xb2016_mobile'))){ ?>
                        <div class="xb-snow">
                            <canvas id="Snow" data-count="<?php echo kratos_option('snow_xb2016_flakecount'); ?>" data-dist="<?php echo kratos_option('snow_xb2016_mindist'); ?>" data-color="<?php echo kratos_option('snow_xb2016_snowcolor'); ?>" data-size="<?php echo kratos_option('snow_xb2016_size'); ?>" data-speed="<?php echo kratos_option('snow_xb2016_speed'); ?>" data-opacity="<?php echo kratos_option('snow_xb2016_opacity'); ?>" data-step="<?php echo kratos_option('snow_xb2016_stepsize'); ?>"></canvas>
                        </div>
                        <?php } ?>
                    </div>
                </footer>
            </div>
        </div>
        <?php if(kratos_option('background_mode')=='color' && kratos_option('background_index_ribbon')) { ?><script id="ribbon" zindex="-1" alpha="0.6" size="90">!function(){function a(a,b,c){return Number(a.getAttribute(b))||c}function p(){for(e.clearRect(0,0,g,h),j=[{x:0,y:.7*h+i},{x:0,y:.7*h-i}];j[1].x<g+i;)q(j[0],j[1])}function q(a,b){e.beginPath(),e.moveTo(a.x,a.y),e.lineTo(b.x,b.y);var c=b.x+(2*o()-.25)*i,d=r(b.y);e.lineTo(c,d),e.closePath(),l-=m/-50,e.fillStyle="#"+(127*n(l)+128<<16|127*n(l+m/3)+128<<8|127*n(l+2*(m/3))+128).toString(16),e.fill(),j[0]=j[1],j[1]={x:c,y:d}}function r(a){var b=a+(2*o()-1.1)*i;return b>h||0>b?r(a):b}var b,c,j,d,e,f,g,h,i,k,l,m,n,o;document.addEventListener("touchmove",function(a){a.preventDefault()}),b=document.getElementById("ribbon"),config={zindex:a(b,"zIndex",-1),alpha:a(b,"alpha",.6),ribbon_width:a(b,"size",90)},c=document.createElement("canvas"),c.style.cssText="position:fixed;top:0;left:0;z-index:"+config.zindex,document.getElementsByTagName("body")[0].appendChild(c),d=c,e=d.getContext("2d"),f=window.devicePixelRatio||1,g=window.innerWidth,h=window.innerHeight,i=config.ribbon_width,k=Math,l=0,m=2*k.PI,n=k.cos,o=k.random,d.width=g*f,d.height=h*f,e.scale(f,f),e.globalAlpha=config.alpha,document.onclick=p,document.ontouchstart=p,p()}();</script> <?php } ?>
        <?php wp_footer();if(kratos_option('script_tongji')||kratos_option('add_script')){ ?>
        <script type="text/javascript">
            <?php echo kratos_option('script_tongji');echo kratos_option('add_script'); ?>
        </script>
        <?php } ?>
    </body>
</html>