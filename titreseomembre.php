<?php
//verification de statut d'utilisateur
$pagemembre = bp_is_user();
if ($pagemembre == TRUE){
  add_action('wp_head','vso_put_og_desc_member'); //on cible la fonction vso_put_og_desc_member et on l'introduit dans le head
  //on verifie si il y a plus de 1 follower, plus de 1 personne suivie, plus de 1 catégorie suivie et plus de 1 playlist suivie et on ajoute un s dans ce cas
  function vso_put_og_desc_member (){
    $plurial;
    if(count(bp_follow_get_followers(bp_displayed_user_id())) > 1)
    {
      $plurial="s";
    }
    $plurial1;
    if((count(bp_follow_get_following(bp_displayed_user_id()))) > 1)
    {
      $plurial1="s";
    }
    $plurial2;
    if((count(vso_get_followed_cat(bp_displayed_user_id()))) > 1)
    {
      $plurial2="s";
    }
    $plurial3;
    if((count(vso_get_followed_playlist(bp_displayed_user_id()))) > 1)
    {
      $plurial3="s";
    }
    //mise en place de la meta description des membres
    // vso_get_mentionname permet de récupérer le nom du membre
    //vso_get_followed_cat permet de récupérer les catégories suivient par le membre
    //vso_get_followed_playlist permet de récupérer les playlists suivient par le membre
    $descmembre = vso_get_mentionname(bp_displayed_user_id())." est membre de Videoty / ".count(bp_follow_get_followers(bp_displayed_user_id()))." personne".$plurial." abonnée".$plurial." à "
    .vso_get_mentionname(bp_displayed_user_id())." / ".vso_get_mentionname(bp_displayed_user_id())." est abonné à ".count(bp_follow_get_following(bp_displayed_user_id())).
    " personne".$plurial1." / Suit ".count(vso_get_followed_cat(bp_displayed_user_id()))." catégorie".$plurial2." / Suit ".count(vso_get_followed_playlist(bp_displayed_user_id()))." playlist".$plurial3." / "
    .bp_get_last_activity( bp_displayed_user_id());
    echo '<meta property="og:description" content="'.$descmembre.'">';
    echo '<meta name="description" content="'.$descmembre.'">';
  }
}
wp_head();?>
