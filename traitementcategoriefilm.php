<?php the_content();

							$ns = wp_create_nonce('vso_signalement'.$video['id']);
							// récupération de l'id de la source
							$diffuseur_id = $data ['wpvr_video_sourceId'][0];
							// récupération de l'id de la catégories
							$category = get_the_category();
							$mycat = $category[0]->cat_name;
							$cat_id = get_cat_id($mycat);
							// on set le diffuseur_name
						if ($service == "arvs")
						{
							$warning = 1;
							$diffuseur_name = "plate-forme <strong>« Archive.org »</strong>";

						}
						// on set le diffuseur_name
						else if ($diffuseur_id == DIFFUSEUR_IMINEO_DAILYMOTION_FILM_COM_ROM_ID)
						{
							$warning = 1;
							$diffuseur_name = "chaine <strong>Dailymotion « Imineo Film Comédie, Romance musicale»</strong>";
						}
						// on set le diffuseur_name
						else if ($diffuseur_id == DIFFUSEUR_IMINEO_DAILYMOTION_FILM_ENFANT_FAMILLE_ID)
						{
							$warning = 1;
							$diffuseur_name = "chaine <strong>Dailymotion « Imineo Film Enfant, Famille »</strong>";
						}
						// on set le diffuseur_name
						else if ($diffuseur_id == DIFFUSEUR_IMINEO_DAILYMOTION_FILM_COMEDIE_MUSICALE_ID)
						{
							$warning = 1;
							$diffuseur_name = "chaine <strong>Dailymotion « Imineo Film Comédie Musicale »</strong>";
						}
						// on set le diffuseur_name
						else if ($diffuseur_id == DIFFUSEUR_IMINEO_DAILYMOTION_FILM_MUETS_CLASSIQUES_ID)
						{
							$warning = 1;
							$diffuseur_name = "chaine <strong>Dailymotion « Imineo Film Muet Classique »</strong>";
						}
						// on set le diffuseur_name
						else if ($diffuseur_id == DIFFUSEUR_IMINEO_DAILYMOTION_FILM_HISTORIQUES_ID)
						{
							$warning = 1;
							$diffuseur_name = "chaine <strong>Dailymotion « Imineo Film Historique »</strong>";
						}
						// on set le diffuseur_name
						else if ($diffuseur_id == DIFFUSEUR_IMINEO_DAILYMOTION_FILM_ACTION_AVENTURE_SF_ID)
						{
							$warning = 1;
							$diffuseur_name = "chaine <strong>Dailymotion « Imineo Film Action, Aventure, Science Fiction »</strong>";
						}
						// on set le diffuseur_name
						else if ($diffuseur_id == DIFFUSEUR_IMINEO_DAILYMOTION_FILM_ROMANCE_ID)
						{
							$warning = 1;
							$diffuseur_name = "chaine <strong>Dailymotion « Imineo Film Romance »</strong>";
						}
						// on set le diffuseur_name
						else if ($diffuseur_id == DIFFUSEUR_IMINEO_YOUTUBE_FILM_ID)
						{
							$warning = 1;
							$diffuseur_name = "chaine <strong>Youtube « Imineo »</strong>";
						}
						// on set le diffuseur_name

						else if ($diffuseur_id == DIFFUSEUR_IMINEO_FILM_ACTU_FILM_ID)
						{
							$warning = 1;
							$diffuseur_name = "chaine <strong>Youtube « Filmsactu »</strong>";
						}
						// on vérifie que l'id de la catégorie est celle d'une des catégories de films
						else if ($cat_id == 1|| $cat_id == 2 || $cat_id == 3 || $cat_id == 4 || $cat_id == 5 || $cat_id == 6 || $cat_id == 7 || $cat_id == 8 || $cat_id == 9
						 && $diffuseur_id != DIFFUSEUR_IMINEO_YOUTUBE_FILM_ID && $diffuseur_id != DIFFUSEUR_IMINEO_FILM_ACTU_FILM_ID
						 && $diffuseur_id != DIFFUSEUR_IMINEO_DAILYMOTION_FILM_COM_ROM_ID && $diffuseur_id != DIFFUSEUR_IMINEO_DAILYMOTION_FILM_ENFANT_FAMILLE_ID
						 && $diffuseur_id != DIFFUSEUR_IMINEO_DAILYMOTION_FILM_COMEDIE_MUSICALE_ID && $diffuseur_id != DIFFUSEUR_IMINEO_DAILYMOTION_FILM_MUETS_CLASSIQUES_ID
						 && $diffuseur_id != DIFFUSEUR_IMINEO_DAILYMOTION_FILM_HISTORIQUES_ID && $diffuseur_id != DIFFUSEUR_IMINEO_DAILYMOTION_FILM_ACTION_AVENTURE_SF_ID
						 && $diffuseur_id != DIFFUSEUR_IMINEO_DAILYMOTION_FILM_ROMANCE_ID && $service != "arvs")
						{
							$message = '<div class="affiche-diffuseur">Avertissement : Cette vidéo est issue de la catégorie <strong>« Films »</strong>.
							Cette section est soumise à des règles spécifiques sur le droit d’auteur.
							<a target="_blank" href="yourlink.com"> En savoir plus…</a> /
							<a href="#" id="signalement3" data-id="'.$video['id'].'" data-nonce="'.esc_attr($ns).'"> Signaler ce contenu </a></div>';
							echo $message;
						}
						// on affiche le message et on fait varier le nom du diffuseur
						if ($warning == 1)
						{
								$message = '<div class="affiche-diffuseur">Avertissement : Cette vidéo n’est ni hébergée, ni diffusée par Videoty. Ce contenu est diffusé sur la '.$diffuseur_name.',
								qui s’engage à respecter scrupuleusement la législation.
								<a target="_blank" href="yourlink.com"> En savoir plus…</a> /
								<a href="#" id="signalement2" data-id="'.$video['id'].'" data-nonce="'.esc_attr($ns).'"> Signaler ce contenu </a></div>';
								echo $message;
						}
							?>
