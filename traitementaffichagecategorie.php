<?php
function filter_wpseo_title( $title ) {
	//on verifie qu'on est sur une page et non une catégorie
	if (is_single()){
		//on récupère les informations de la video
		$video = vso_get_post_vignette_infos($id);
		$title = get_vty_title_fil($video,'TITRE',FALSE,FALSE,FALSE)." | Videoty";
		$cats_aff_streaming = unserialize(CATS_AFFICHE);
		if ($video['cat_id'] == 130)
		{
	$date_video = get_the_date($video['id']);;
	$date_video_now = substr($date_video, -4);
	$title = get_vty_title_fil($video,'TITRE',FALSE,FALSE,FALSE)." (".$date_video_now.") en streaming | Videoty";
	}
  //get_vty_title_fil permet de récuperer les infos sur la vidéo
	// on vérifie que la vidéo fait partie d'une des 9 catégories film
	elseif ($video['cat_id'] == $cats_aff_streaming[0] || $video['cat_id'] == $cats_aff_streaming[1] || $video['cat_id'] == $cats_aff_streaming[2]
	|| $video['cat_id'] == $cats_aff_streaming[3] || $video['cat_id'] == $cats_aff_streaming[4] || $video['cat_id'] == $cats_aff_streaming[5]
	|| $video['cat_id'] == $cats_aff_streaming[6] || $video['cat_id'] == $cats_aff_streaming[7] || $video['cat_id'] == $cats_aff_streaming[8])
	{
			$title = get_vty_title_fil($video,'TITRE',FALSE,FALSE,FALSE)." en streaming | Videoty";
	}
 }
 // on verifie qu'on est sur une catégorie et non une page
elseif (is_category())
{
	// on récupere les données de la catégorie
		$category = get_category( get_query_var( 'cat' ) );
		$cat_id = $category->cat_ID;
		$aff_titre = get_term_meta($cat_id,'cat_aff_titre',true);
		$cat_name = $category->cat_name;
			if ($aff_titre >= 1){
			$mother_cat = get_cat_name($category->category_parent);
		// on génére le titre
			$title = "<title>".$mother_cat." - ".$cat_name." | Videoty </title>";
			}


	}
	return $title;
};
?>
