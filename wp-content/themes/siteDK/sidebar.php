
							<!-- begin left_bar-->
							<div class="left_bar">								
<!-- 
								 -->
								<div class="menu">
 								<img class="arrow_up" src="<?php bloginfo('template_url') ?>/img/arrow_up.png">
 								<?php wp_nav_menu(array('theme_location' => 'sidebar_menu', 'menu_class' => 'sf-menu-1', 'container' => false)); ?>
 								<ul class="sf-menu-1"><!-- 
 								<?php if(!dynamic_sidebar('sidebar')): ?>								
									
									
								<?php endif; ?> -->
									<!-- 
										<li><a href="#">О нас</a></li>
										<li><a href="#">Фотогалерея</a></li>
										<li><a href="#">Видеогалерея</a></li>
										<li><a href="#">Наши награды</a></li>
										<li><a href="#">Документы</a></li> -->
									</ul>
									<img class="arrow_down" src="<?php bloginfo('template_url') ?>/img/arrow_down.png">
								</div>
								<div class="social">
									<div class="social_join">Присоединяйтесь </br> к нашим группам</div>
									<a href="#" class="social_vk"><img class="social_i" src="<?php bloginfo('template_url') ?>/img/vk_logo.png" width="70" height="70"></a>
									<a href="#" class="social_fb"><img class="social_i" src="<?php bloginfo('template_url') ?>/img/fb_logo.png" width="70" height="70"></a>
								</div>
								<div class="partners">
									<div class="partners_text">Наши партнеры</div>
									<a href="#" class="partners_ktv"><img class="partners_img" src="<?php bloginfo('template_url') ?>/img/ktv_logo.jpg" width="80%" height="80%"></a>
									<a href="#" class="partners_photo"><img class="partners_img" src="<?php bloginfo('template_url') ?>/img/photo_logo.jpg" width="80%" height="90%"></a>
								</div>	
								<div class="search">
									<div class="search_text">Поиск по сайту:<input type="submit" class="sendsubmit" name="send" value="Отправить" /></div>
									<div class="search_logo"></div>
									<input type="text" size="15" class="search_stroka" name="s" placeholder="" id="">
								</br>
							</div>
							<div class="vote">
								<div class="vote_header">Опрос/голосование</div>
								<div class="vote_question">Как часто вы посещяете мероприятия Дворца Культуры</div>
								<div class="vote_all">


									<form>
										<label><input type="radio" name="vote" value="1" id="k" checked><span></span></label><p class="vote_text_1">Прихожу на каждое мероприятие</p>
										<label><input type="radio" name="vote" value="1" id="k"><span></span></label><p class="vote_text_2">Прихожу раз в месяц</p>
										<label><input type="radio" name="vote" value="1" id="k"><span></span></label><p class="vote_text_3">Посещяю раз в полгода</p>
										<label><input type="radio" name="vote" value="1" id="k"><span></span></label><p class="vote_text_4">Вообще не посещаю</p>
										<p><input class="submit" type="submit" value="Голосовать"></p>
									</form>
								</div>
							</div>

<?php get_footer(); ?>

						</div>
					</div>	
				</div>
				<!-- end left_bar-->