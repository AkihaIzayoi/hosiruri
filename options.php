<?php
function optionsframework_option_name(){
    $themename = wp_get_theme();
    $themename = preg_replace("/\W/","_",strtolower($themename));
    $optionsframework_settings = get_option('optionsframework');
    $optionsframework_settings['id'] = $themename;
    update_option('optionsframework',$optionsframework_settings);
}
function optionsframework_options(){
    $imagepath = get_template_directory_uri().'/inc/theme-options/images/';
    $options = array();
    $options[] = array(
        'name'=>__('站点配置'),
        'type'=>'heading');
    $options[] = array(
        'name'=>__('站点图标'),
        'id'=>'site_ico',
        'std'=>'https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('通知设置'),
        'desc'=>__('选择后台主题通知 (更新/帮助等) 的出现位置'),
        'id'=>'kratos_notice',
        'std'=>'global',
        'type'=>'select',
        'class'=>'mini',
        'options'=>array(
            'global'=>__('后台全局'),
            'welcome'=>__('仪表盘首页'),
            'none'=>__('隐藏全部[不建议]')));
    $options[] = array(
        'name'=>__('Gravatar头像服务器地址'),
        'desc'=>__('不确定请勿更改'),
        'id'=>'gravatar_url',
        'std'=>'cn.gravatar.com/avatar',
        'type'=>'text');
    $options[] = array(
        'name'=>__('PJAX'),
        'desc'=>__('是否启用页面PJAX加载'),
        'id'=>'page_pjax',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('站点地图'),
        'desc'=>__('是否启用站点地图(更新文章时生成，需要/目录的写权限)'),
        'id'=>'sitemap',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('背景类型'),
        'desc'=>__('选择您喜欢的背景类型并修改其对应选项'),
        'id'=>'background_mode',
        'std'=>'color',
        'type'=>'select',
        'class'=>'mini',
        'options'=>array(
            'color'=>__('纯色'),
            'image'=>__('图片')));
    $options[] = array(
        'name'=>__('背景颜色'),
        'desc'=>__('整个站点背景颜色控制(背景类型选择为纯色才有效)'),
        'id'=>'background_index_color',
        'std'=>'#f5f5f5',
        'type'=>'color');
    $options[] = array(
        'name'=>__('背景图片'),
        'desc'=>__('整个站点背景图片控制(背景类型选择为图片才有效)'),
        'id'=>'background_index_image',
        'std'=>'/static/images/index_image.png',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('主页布局'),
        'desc'=>__('选择[主页]布局(显示左边栏，无边栏，右边栏)，默认显示右边栏'),
        'id'=>"home_side_bar",
        'std'=>"right_side",
        'type'=>"images",
        'options'=>array(
            'left_side'=>$imagepath.'col-left.png',
            'center'=>$imagepath.'col.png',
            'right_side'=>$imagepath.'col-right.png'));
    $options[] = array(
        'name'=>__('文章列表布局'),
        'desc'=>__('选择你喜欢的列表布局，默认显示新式列表布局'),
        'id'=>"list_layout",
        'std'=>"new_layout",
        'type'=>"images",
        'options'=>array(
            'old_layout'=>$imagepath.'old-layout.png',
            'new_layout'=>$imagepath.'new-layout.png'));
    $options[] = array(
        'name'=>__('主页文章摘要字数'),
        'desc'=>__('中文建议110，英文建议40，搭配文章内的more标签使用'),
        'id'=>'w_num',
        'std'=>'110',
        'type'=>'text');
    $options[] = array(
        'name'=>__('分类页面'),
        'desc' =>__('是否启用分类页面的名称以及简介功能'),
        'id'=>'show_head_cat',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('标签页面'),
        'desc' =>__('是否启用标签页面的名称以及简介功能'),
        'id'=>'show_head_tag',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('头像本地上传'),
        'desc'=>__('是否允许普通用户上传本地头像'),
        'id'=>'lo_ava',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('Gutenberg'),
        'desc'=>__('是否使用Gutenberg编辑器'),
        'id'=>'use_gutenberg',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('侧边栏随动'),
        'desc'=>__('是否启用侧边栏小工具随动功能'),
        'id'=>'site_sa',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('评论UA'),
        'desc'=>__('是否在评论区显示评论者UA信息'),
        'id'=>'comment_ua',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('复制弹窗'),
        'desc'=>__('是否启用复制文章内容后弹窗提醒'),
        'id'=>'copy_notice',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('页面伪静态'),
        'desc'=>__('是否启用自定义页面伪静态功能'),
        'id'=>'page_html',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('组件配置'),
        'type'=>'heading');
    $options[] = array(
        'name'=>__('自定义Font Awesome'),
        'desc'=>__('自定义Font Awesome 4.7字体库链接，留空将从本地加载'),
        'id'=>'fa_url',
        'std'=>'/static/css/font-awesome.min.css',
        'type'=>'text');
    $options[] = array(
        'name'=>__('自定义jQuery'),
        'desc'=>__('自定义jQuery链接，留空将从本地加载'),
        'id'=>'jq_url',
        'std'=>'https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js',
        'type'=>'text');
    $options[] = array(
        'name'=>__('主题JS'),
        'desc'=>__('从jsdelivr加载主题JS'),
        'id'=>'js_out',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('附加JS'),
        'id'=>'add_script',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>__('主题CSS'),
        'desc'=>__('从jsdelivr加载主题CSS'),
        'id'=>'css_out',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('附加CSS'),
        'id'=>'add_css',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>__('表情包'),
        'desc'=>__('从jsdelivr加载主题表情包'),
        'id'=>'owo_out',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('特色图片(仅针对新式布局)'),
        'desc'=>__('选择你喜欢的默认特色图片(留空使用随机图片20张)'),
        'id'=>'default_image',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('APlayer全局播放器'),
        'desc'=>__('启用页面左下角播放器(建议开启PJAX使用)'),
        'id'=>'ap_footer',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('歌单JSON地址'),
        'desc'=>__('借助API可解析网易云歌单，如https://api.fczbl.vip/163/?type=playlist&id=2003373695'),
        'id'=>'ap_json',
        'std'=>'https://api.fczbl.vip/163/?type=playlist&id=2003373695',
        'type'=>'text');
    $options[] = array(
        'name'=>__('自动播放'),
        'desc'=>__('启用APlayer自动播放，个人不喜欢'),
        'id'=>'ap_autoplay',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('循环模式'),
        'id'=>'ap_loop',
        'std'=>'all',
        'type'=>'select',
        'class'=>'mini',
        'options'=>array(
            'all'=>__('全部循环'),
            'one'=>__('单曲循环'),
            'none'=>__('未定义')));
    $options[] = array(
        'name'=>__('播放顺序'),
        'id'=>'ap_order',
        'std'=>'list',
        'type'=>'select',
        'class'=>'mini',
        'options'=>array(
            'list'=>__('列表'),
            'random'=>__('随机')));
    $options[] = array(
        'name'=>__('看板娘'),
        'desc'=>__('是否启用2233Live2D看板娘'),
        'id'=>'site_girl',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('微信展示'),
        'desc'=>__('是否启用微信展示按钮功能'),
        'id'=>'cd_weixin',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('微信二维码'),
        'desc'=>__('上传你的微信二维码图片，尺寸要大于等于150px'),
        'id'=>'weixin_image',
        'std'=>'https://cdn.jsdelivr.net/gh/AkihaIzayoi/hosiruri@'.HOSIRURI_VERSION.'/static/images/weixin.png',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('微信收款码'),
        'desc'=>__('上传你的微信收款二维码图片，图片尺寸要大于200px'),
        'id'=>'wechatpayqr_url',
        'std'=>'https://cdn.jsdelivr.net/gh/AkihaIzayoi/hosiruri@'.HOSIRURI_VERSION.'/static/images/wechatpayqr.png',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('支付婊收款码'),
        'desc'=>__('上传你的支付婊收款二维码图片，图片尺寸要大于200px'),
        'id'=>'alipayqr_url',
        'std'=>'https://cdn.jsdelivr.net/gh/AkihaIzayoi/hosiruri@'.HOSIRURI_VERSION.'/static/images/alipayqr.png',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('SEO配置'),
        'type'=>'heading');
    $options[] = array(
        'name'=>__('关键词'),
        'desc'=>__('每个关键词之间用英文逗号分割'),
        'id'=>'site_keywords',
        'type'=>'text');
    $options[] = array(
        'name'=>__('站点描述'),
        'id'=>'site_description',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>__('站点统计(不要包括SCRIPT标签)'),
        'id'=>'script_tongji',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>__('顶部配置'),
        'type'=>'heading');
    $options[] = array(
        'name'=>__('顶部显示模式'),
        'id'=>'head_mode',
        'std'=>'pic',
        'type'=>'select',
        'class'=>'mini',
        'options'=>array(
            'pic'=>__('图片'),
            'color'=>__('纯色')));
    $options[] = array(
        'name'=>__('以下为图片Header的设置'),
        'desc'=>__('只有顶部显示模式为图片才有效。'));
    $options[] = array(
        'name'=>__('顶部图片'),
        'id'=>'background_image',
        'std'=>'https://cdn.jsdelivr.net/gh/xb2016/kratos-pjax@'.HOSIRURI_VERSION.'/static/images/background.jpg',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('移动端顶部图片(可留空)'),
        'id'=>'background_image_mobi',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('图片文字-1(可做文字标题)'),
        'id'=>'background_image_text1',
        'std'=>'hosi Ruri',
        'type'=>'text');
    $options[] = array(
        'name'=>__('图片文字-2(可做站点描述)'),
        'id'=>'background_image_text2',
        'std'=>'kagayaki',
        'type'=>'text');
    $options[] = array(
        'name'=>__('移动端菜单显示模式'),
        'id'=>'mobi_mode',
        'std'=>'side',
        'type'=>'select',
        'class'=>'mini',
        'options'=>array(
            'top'=>__('顶部'),
            'side'=>__('侧栏')));
    $options[] = array(
        'name'=>__('以下为纯色Header设置'),
        'desc'=>__('只有顶部显示模式为纯色才有效。'));
    $options[] = array(
        'name'=>__('Nav Bar颜色'),
        'desc'=>__('请使用RGBA格式表示，默认22,23,26,.9'),
        'id'=>'banner_color',
        'std'=>'22,23,26,.9',
        'type'=>'text');
    $options[] = array(
        'name'=>__('移动端侧边栏菜单颜色'),
        'desc'=>__('请使用RGBA格式表示，默认42,42,42,.9'),
        'id'=>'mobi_color',
        'std'=>'42,42,42,.9',
        'type'=>'text');
    $options[] = array(
        'name'=>__('图片Logo'),
        'desc'=>__('高40px，宽最大200px，不设置将显示文字Logo'),
        'id'=>'banner_logo',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('底部配置'),
        'type'=>'heading');
    $options[] = array(
        'name'=>__('建站时间'),
        'desc'=>__('输入你的建站时间，格式MM/DD/YYYY hh:mm:ss'),
        'id'=>'createtime',
        'std'=>'01/25/2017 15:25:00',
        'type'=>'text');
    $options[] = array(
        'name'=>__('Footer颜色'),
        'desc'=>__('请使用RGBA格式表示，默认35,40,45,1'),
        'id'=>'footer_color',
        'std'=>'35,40,45,1',
        'type'=>'text');
    $options[] = array(
        'name'=>__('工信部备案信息'),
        'desc'=>__('输入您的工信部备案号，针对国际版没有备案信息栏目的功能'),
        'id'=>'icp_num',
        'type'=>'text');    
    $options[] = array(
        'name'=>__('公安网备案信息'),
        'desc'=>__('输入您的公安网备案号'),
        'id'=>'gov_num',
        'type'=>'text');    
    $options[] = array(
        'name'=>__('公安网备案连接'),
        'desc'=>__('输入您的公安网备案的链接地址'),
        'id'=>'gov_link',
        'type'=>'text');
    $options[] = array(
        'name'=>__('新浪微博'),
        'desc'=>__('连接前要带有 http:// 或者 https:// '),
        'id'=>'social_weibo',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('腾讯微博'),
        'desc'=>__('连接前要带有 http:// 或者 https:// '),
        'id'=>'social_tweibo',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('Twitter'),
        'desc'=>__('连接前要带有 http:// 或者 https:// '),
        'id'=>'social_twitter',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('FaceBook'),
        'desc'=>__('连接前要带有 http:// 或者 https:// '),
        'id'=>'social_facebook',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('LinkedIn'),
        'desc'=>__('连接前要带有 http:// 或者 https:// '),
        'id'=>'social_linkedin',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('GayHub'),
        'desc'=>__('连接前要带有 http:// 或者 https:// '),
        'id'=>'social_github',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('Mail'),
        'desc'=>__('连接前要带有mailto: '),
        'id'=>'social_mail',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('文章设置'),
        'type'=>'heading');
    $options[] = array(
        'name'=>__('文章页面布局'),
        'desc'=>__('选择[文章]页面布局(显示左边栏，无边栏，右边栏)，默认显示右边栏'),
        'id'=>"side_bar",
        'std'=>"right_side",
        'type'=>"images",
        'options'=>array(
            'left_side'=>$imagepath.'col-left.png',
            'center'=>$imagepath.'col.png',
            'right_side'=>$imagepath.'col-right.png'));
    $options[] = array(
        'name'=>__('版权声明'),
        'desc'=>__('是否启用 CC BY-SA 4.0 声明'),
        'id'=>'post_cc',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('分享按钮'),
        'desc'=>__('是否启用文章分享功能'),
        'id'=>'post_share',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('打赏按钮'),
        'desc'=>__('是否启用文章打赏功能'),
        'id'=>'post_like_donate',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('页面设置'),
        'type'=>'heading');
    $options[] = array(
        'name'=>__('页面布局'),
        'desc'=>__('选择[页面]布局(显示左边栏，无边栏，右边栏)，默认显示右边栏'),
        'id'=>"page_side_bar",
        'std'=>"right_side",
        'type'=>"images",
        'options'=>array(
            'left_side'=>$imagepath.'col-left.png',
            'center'=>$imagepath.'col.png',
            'right_side'=>$imagepath.'col-right.png'));    
    $options[] = array(
        'name'=>__('版权声明'),
        'desc'=>__('是否启用 CC BY-SA 4.0 声明'),
        'id'=>'page_cc',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('分享按钮'),
        'desc'=>__('是否启用页面分享功能'),
        'id'=>'page_share',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('打赏按钮'),
        'desc'=>__('是否启用页面打赏功能'),
        'id'=>'page_like_donate',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('轮播设置'),
        'type'=>'heading');
    $options[] = array(
        'name'=>__('主页轮播'),
        'desc'=>__('是否启用轮播功能'),
        'id'=>'kratos_banner',
        'std'=>'0',
        'type'=>'checkbox',);
    $options[] = array(
        'name'=>__('注意：'),
        'desc'=>__('图片宽度建议大于750px，所有图片比例须一致'));
    $options[] = array(
        'name'=>__('轮播图片-1'),
        'id'=>'kratos_banner1',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('轮播链接-1'),
        'desc'=>__('链接可以留空'),
        'id'=>'kratos_banner_url1',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('轮播图片-2'),
        'id'=>'kratos_banner2',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('链接2'),
        'desc'=>__('链接可以留空'),
        'id'=>'kratos_banner_url2',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('轮播图片-3'),
        'id'=>'kratos_banner3',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('链接3'),
        'desc'=>__('链接可以留空'),
        'id'=>'kratos_banner_url3',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('轮播图片-4'),
        'id'=>'kratos_banner4',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('链接4'),
        'desc'=>__('链接可以留空'),
        'id'=>'kratos_banner_url4',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('轮播图片-5'),
        'id'=>'kratos_banner5',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('链接5'),
        'desc'=>__('链接可以留空'),
        'id'=>'kratos_banner_url5',
        'std'=>'',
        'type'=>'text');
    $options[] = array(
        'name'=>__('邮件设置'),
        'type'=>'heading');
    $options[] = array(
        'name'=>__('SMTP服务'),
        'desc'=>__('是否启用SMTP邮件发送服务'),
        'id'=>'mail_smtps',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('发信人'),
        'desc'=>__('请填写发件人姓名'),
        'id'=>'mail_name',
        'std'=>'Moe-dog Services Team',
        'type'=>'text');
    $options[] = array(
        'name'=>__('邮件服务器'),
        'desc'=>__('请填写SMTP服务器地址'),
        'id'=>'mail_host',
        'std'=>'smtp.office365.com',
        'type'=>'text');
    $options[] = array(
        'name'=>__('服务器端口'),
        'desc'=>__('请填写SMTP服务器端口'),
        'id'=>'mail_port',
        'std'=>'587',
        'type'=>'text');
    $options[] = array(
        'name'=>__('邮箱帐号'),
        'desc'=>__('请填写邮箱账号'),
        'id'=>'mail_username',
        'std'=>'no_reply@fczbl.vip',
        'type'=>'text');
    $options[] = array(
        'name'=>__('邮箱密码'),
        'desc'=>__('请填写邮箱密码'),
        'id'=>'mail_passwd',
        'std'=>'123456789',
        'type'=>'password');
    $options[] = array(
        'name'=>__('启用SMTPAuth服务'),
        'desc'=>__('是否启用SMTPAuth服务'),
        'id'=>'mail_smtpauth',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('SMTPSecure设置'),
        'desc'=>__('若启用SMTPAuth服务则填写ssl，若不启用则留空；office365的邮箱请填写STARTTLS'),
        'id'=>'mail_smtpsecure',
        'std'=>'STARTTLS',
        'type'=>'text');
    $options[] = array(
        'name'=>__('雪花设置'),
        'type'=>'heading');
    $options[] = array(
        'name'=>__('站点雪花'),
        'desc'=>__('是否启用站点雪花功能'),
        'id'=>'site_snow',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('移动端是否显示'),
        'desc'=>__('配置移动端是否显示，默认是'),
        'id'=>'snow_xb2016_mobile',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('雪花数量'),
        'desc'=>__('数值越大雪花数量越多，默认150'),
        'id'=>'snow_xb2016_flakecount',
        'std'=>'150',
        'type'=>'text');
    $options[] = array(
        'name'=>__('雪花大小'),
        'desc'=>__('为基准值，数值越大雪花越大，默认2'),
        'id'=>'snow_xb2016_size',
        'std'=>'2',
        'type'=>'text');
    $options[] = array(
        'name'=>__('雪花距离'),
        'desc'=>__('雪花距离鼠标指针的最小值，小于这个距离的雪花将受到鼠标的排斥，默认100'),
        'id'=>'snow_xb2016_mindist',
        'std'=>'100',
        'type'=>'text');
    $options[] = array(
        'name'=>__('雪花速度'),
        'desc'=>__('为基准值，数值越大雪花速度越快，默认0.5'),
        'id'=>'snow_xb2016_speed',
        'std'=>'0.5',
        'type'=>'text');
    $options[] = array(
        'name'=>__('雪花横移度'),
        'desc'=>__('为基准值，数值越大雪花横移幅度越大，0为竖直下落，默认1'),
        'id'=>'snow_xb2016_stepsize',
        'std'=>'1',
        'type'=>'text');
    $options[] = array(
        'name'=>__('雪花颜色'),
        'desc'=>__('请用RGB格式表示，默认255,255,255'),
        'id'=>'snow_xb2016_snowcolor',
        'std'=>'255,255,255',
        'type'=>'text');
    $options[] = array(
        'name'=>__('雪花不透明度'),
        'desc'=>__('为基准值，范围0~1，1为不透明，默认0.3'),
        'id'=>'snow_xb2016_opacity',
        'std'=>'0.3',
        'type'=>'text');
    $options[] = array(
        'name'=>__('注册登录设置'),
        'type'=>'heading');
    $options[] = array(
        'name'=>__('注册登录页面背景'),
        'desc'=>__('因为默认使用了Bing每日美图API，所以这里只能手动写链接了...'),
        'id'=>'login_bak',
        'std'=>'https://api.fczbl.vip/bing',
        'type'=>'text');
    $options[] = array(
        'name'=>__('注册登录页面站点图标'),
        'id'=>'login_logo',
        'std'=>'https://cdn.jsdelivr.net/gh/AkihaIzayoi/hosiruri@'.HOSIRURI_VERSION.'/static/images/default-logo.png',
        'type'=>'upload');
    $options[] = array(
        'name'=>__('以下为用户注册部分的设置'));
    $options[] = array(
        'name'=>__('使用密码注册'),
        'desc'=>__('是否允许用户输入密码注册(免邮箱验证)'),
        'id'=>'mail_reg',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('域名限制模式'),
        'desc'=>__('如果不想限制邮箱，请将此部分设置保持默认。'),
        'id'=>'dmode',
        'std'=>'black',
        'type'=>'select',
        'class'=>'mini',
        'options'=>array(
            'white'=>__('白名单模式'),
            'black'=>__('黑名单模式')));
    $options[] = array(
        'name'=>__('域名白名单列表(一行一个)'),
        'id'=>'dwhite',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>__('域名黑名单列表(一行一个)'),
        'id'=>'dblack',
        'std'=>'',
        'type'=>'textarea');
    $options[] = array(
        'name'=>__('错误信息'),
        'desc'=>__('用户域名被阻止时的提示信息'),
        'id'=>'derror',
        'std'=>__('本站禁止此域名的邮箱注册，请更换邮箱再试。'),
        'type'=>'text');
    $options[] = array(
        'name'=>__('以下为用户登录限制部分设置'),
        'desc'=>__('默认不启用，但是建议手动启用此功能'));
    $options[] = array(
        'name'=>__('用户登录限制'),
        'desc'=>__('是否启用登录限制功能(只有启用此项，下面的设置才有效)'),
        'id'=>'login_limit',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('登录尝试机会'),
        'desc'=>__('允许输错密码的次数，默认3'),
        'id'=>'allowed_retries',
        'std'=>'3',
        'type'=>'text');
    $options[] = array(
        'name'=>__('初始锁定时间'),
        'desc'=>__('单位秒，不应小于60，默认1200(20分钟)'),
        'id'=>'lockout_duration',
        'std'=>'1200',
        'type'=>'text');
    $options[] = array(
        'name'=>__('增加锁定时间所需锁定次数'),
        'desc'=>__('默认3次'),
        'id'=>'allowed_lockouts',
        'std'=>'3',
        'type'=>'text');
    $options[] = array(
        'name'=>__('增加后的锁定时间'),
        'desc'=>__('单位秒，不应小于3600，默认86400(24小时)'),
        'id'=>'long_duration',
        'std'=>'86400',
        'type'=>'text');
    $options[] = array(
        'name'=>__('自动清除锁定IP的时间'),
        'desc'=>__('单位秒，默认43200(12小时)'),
        'id'=>'valid_duration',
        'std'=>'43200',
        'type'=>'text');
    $options[] = array(
        'name'=>__('控制Cookie登录'),
        'desc'=>__('是否控制Cookie登录'),
        'id'=>'cookies',
        'std'=>'1',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('邮件提醒'),
        'desc'=>__('是否启用锁定邮件提醒功能(请在下方设置提醒阈值)'),
        'id'=>'lockout_notify_m',
        'std'=>'0',
        'type'=>'checkbox');
    $options[] = array(
        'name'=>__('锁定提醒阈值'),
        'desc'=>__('默认2次(启用上方的邮件提醒功能才有效)'),
        'id'=>'notify_email_after',
        'std'=>'2',
        'type'=>'text');
    return $options;
}