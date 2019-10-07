<!DOCTYPE html>
<form class="clearfix" id="form_signal" action="\...\...\recupformulairesignalement.php" method="post" >
    <input type="hidden" name="signal_title"  id="signal_title" value="<?php echo esc_html( $title ); ?>" />
    <h3>Quelle est la nature du problème ? (obligatoire)</h3>
    <div class="liste-radio clearfix">
      <div class="motif-radio">
        <input type="radio" name="motif" value="motif1"  required>
        <p class="label-radio">Je ne peux pas lire cette vidéo ou elle n'est plus disponible</p>
        <p class="icone-aide-motif"><span class="aide1">?</span><span class="aide2">Cette vidéo n’est pas ou plus disponible car elle a été retiré par son hébergeur, dites-le nous ou vous ne pouvez pas la lire sur votre écran ?</span></p>
      </div>
      <div class="motif-radio">
        <input type= "radio" name="motif" value="motif2"  required>
        <p class="label-radio">Cette vidéo n'est pas au bon endroit !</p>
        <p class="icone-aide-motif"><span class="aide1">?</span><span class="aide2">Cette vidéo n’est pas dans la bonne catégorie, pas placée dans la bonne saison, ou elle s’est simplement perdue dans les méandres de Videoty ? Précisez-nous pourquoi !</span></p>
      </div>
      <div class="motif-radio">
        <input type= "radio" name="motif" value="motif3"  required>
        <p class="label-radio">Son contenu a un caractère sexuel / violent / offensant</p>
        <p class="icone-aide-motif"><span class="aide1">?</span><span class="aide2">Cette vidéo comprend des scènes à caractère violent, offensant, ou des passages de nudités ou de sexualité explicites.</span></p>
      </div>
      <div class="motif-radio">
        <input type= "radio" name="motif" value="motif4"  required>
        <p class="label-radio">Problème relatif aux droits de la vidéo</p>
        <p class="icone-aide-motif"><span class="aide1">?</span><span class="aide2">Cette vidéo ne respecte pas les droits de son auteur ou vous êtes vous même l’auteur de cette vidéo ? Avant de signaler un contenu, souvenez-vous que videoty n’héberge aucune vidéo et n’hésitez pas à consulter <a href="#" title="lire les CGU">nos précisions concernant le droit des vidéos.</a></span></p>
      </div>
    </div>
    <div class="clearfix">
      <h3>Identifiant de la vidéo (non modifiable)</h3>
      <input type="text" name="id_video_signal" readonly="readonly" value="<?php echo $id_signal; ?>"/>
    </div>
    <div class="clearfix">
      <h3>Votre email (obligatoire)</h3>
      <input type="email" name="signal_email" placeholder="email" required="" oninvalid="this.setCustomValidity('Veuillez indiquer votre email')"  oninput="setCustomValidity('')" data-action="wp_ajax_vso_signal_vid_ll_ajax" />
    </div>

    <div class="clearfix">
    <h3>Précisez le problème ? (facultatif)</h3>
    <textarea name="signal_comm"  id="signal_comm" /></textarea>

    </div>
  <input type="submit" name="submit_signal" value="Signaler" id="submit_signal"/>
  </form>
  <p class="precisions-signalement">Les vidéos sont suggérées par les utilisateurs et hébergées sur des plateformes externes.
  Videoty n'héberge aucune vidéo. Nos équipes modèrent les suggestions des utilisateurs et traitent les demandes de signalement dans les meilleurs délais.
  Pour plus d'informations, n'hésitez pas à consulter nos <a href="#" title="lire les CGU">Conditions Générales d'Utilisation</a>.</p>
</html>
