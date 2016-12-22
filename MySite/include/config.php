<?php
	/*---общие настройки---*/
	/*
	UPDATE `item_template` SET `RequiredLevel`='1' WHERE `entry` IN (49623,51312,51314,51310,51311,51313,54578,54590,54581,54559,50620,50693,50363,50657,50459,50467);
	UPDATE `item_template` SET `RequiredLevel`='80' WHERE `entry` IN (49623,51312,51314,51310,51311,51313,54578,54590,54581,54559,50620,50693,50363,50657,50459,50467);

	*/
	$project_name = 'Titan-wow';                        //Имя сервера
	$site_path = 'test1.ru';                    		//Адрес сервера
	$site_realmlist = 'Trinity';     					//Реалмлист вашего сервера
	$site_title = 'World of Warcraft - '.$project_name; //Титул сайта вервера
	$refresh_status_time = '10';                        //Время обновления статистики сервера (в секундах)
	$realm_count = '1';                                 //Кол-во реалмов
	$page_count_online = '20';                          //Кол-во игроков онлайн, отображаемых на одной странице
	$page_count_ban = '20';                             //Кол-во забаненных персонажей, отображаемых на одной странице
	$mysql_cod = 'cp1251';                              //Кодировка mysql сервера
	$wmr = '';                             				//Кошелек
	$lang_count = '2';                                  //Кол-во языков
	$lang_name['1'] = 'Русский';                        //Названия языков
	$lang_name['2'] = 'English';
	
	$mysql_path['cms'] = '127.0.0.1';                   //Адрес mysql сервера
	$mysql_login['cms'] = 'root';                       //Логин mysql сервера
	$mysql_password['cms'] = '';                        //Пароль mysql сервера
	$mysql_db['cms'] = 'characters';                    //Название базы аккаунтов
	
	/*---Настройки базы данных---*/
	/*---Настройка всех реалмов аналогична*/
	
	$mysql_path['1'] = '127.0.0.1';                     //Адрес mysql сервера
	$mysql_login['1'] = 'root';                         //Логин mysql сервера
	$mysql_password['1'] = '';                          //Пароль mysql сервера
	$mysql_db_characters['1'] = 'characters';           //Название базы персонажей
	$mysql_db_realmd['1'] = 'auth';                     //Название базы аккаунтов
	$mysql_db_world['1'] = 'world';                     //Название базы мира
	$realm_title['1'] = 'Trinity';                		//Название сервера
	$mail_sender_guid['1'] = '1';                       //ID персонажа, от которого будут отправлены письма в донат системе. Если не уверены, то не меняйте это поле
	$server_path['1'] = '127.0.0.1';                    //Адрес сервера
	$server_port['1'] = '8085';                         //Порт сервера (8085 по умолчанию)
	$server_type['1'] = '0';                            //Тип сервера. 0 - trinity core, 1 - myth core
	$lk_shop_f['1'] = 4;                                //Константа цены в магазине. Для рейтов х1 ~ 3-4, для х100 ~ 15-20
	
	/*$mysql_path['2'] = '127.0.0.1';
	$mysql_login['2'] = 'root';
	$mysql_password['2'] = '';
	$mysql_db_characters['2'] = 'characters';
	$mysql_db_realmd['2'] = 'auth';
	$mysql_db_world['2'] = 'world';
	$realm_title['2'] = 'Ясеневый лес';
	$mail_sender_guid['2'] = '1';
	$server_path['2'] = '127.0.0.1';
	$server_port['2'] = '3306';
	$server_type['2'] = '0';
	$lk_shop_f['2'] = 4;*/
	
	
	/*---Настройки сис-мы голосований---*/
	$vote_count = '2';                                  //Кол-во серверов голосования
	$vote_bonuses = '5';                                //Кол-во бонусов за голос
	
	$vote_link['1'] = 'http://wow.mmotop.ru/vote/0/';   //Ссылка на голосовалку
	$vote_name['1'] = 'wow.mmotop.ru';                  //Название топа
	
	$vote_link['2'] = 'http://mwn-project.net/?do=vote&id=0';
	$vote_name['2'] = 'mwn-project.net';
?>