<?php
function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}   $signal_email = $_POST['signal_email']; // on récupere le mail de la personne qui signale
    $signal_comm = $_POST['signal_comm']; // on récupere le commentaire
    $to = "yourmail@mail.com";// l'adresse a laquelle le mail va etre envoyé
    $subject = "Signalement d'une vidéo par un utilisateur";//l'objet du signalement
    $motif = $_POST['motif']; //le motif du signalement
    $id_video_signal = $_POST['id_video_signal'];//la vidéo isolée par son id
    $message = "La vidéo avec l'ID ".$id_video_signal." a été signalé par: ".$signal_email."\n Motif: ".$motif."\n Commentaire: ".$signal_comm;// le message final
    // create email headers
    $headers = 'From: '.$signal_email."\r\n".
    'Reply-To: '.$signal_email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    wp_mail($to,$subject,$message,$headers);
?>
