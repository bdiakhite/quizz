<?php
  $note = 0;
    if( $_GET['q1'] == "true"){
      $note = $note + 1;
    }if( $_GET['q2'] == "true"){
        $note = $note + 1;
      }if( $_GET['q3'] == "true"){
            $note = $note + 1;
          }if( $_GET['q4'] == "true"){
                $note = $note + 1;
              } if( $_GET['q5'] == "true"){
                    $note = $note + 1;
                  } if( $_GET['q6'] == "true"){
                        $note = $note + 1;
                      } if( $_GET['q7'] == "true"){
                            $note = $note + 1;
                          } if( $_GET['q8'] == "true"){
                                $note = $note + 1;
                              } if( $_GET['q9'] == "true"){
                                    $note = $note + 1;
                                  } if( $_GET['q10'] == "true"){
                                        $note = $note + 1;
                                      } if( $_GET['club'] == "ASVEL"){
                                            $note = $note + 10;
  }

  require_once('./template/head.html');
  if($note < 10){
    echo '<h1 class="resultat">tu as même pas eu la moyenne ta note est de '.$note.'/20.</h1>';
    }if($note == 10){
      echo '<h1 class="resultat">OUF tu a eu chaud pile la moyenne '.$note.'/20.</h1>';
        }if($note > 10){
          echo '<h1 class="resultat">félicitation votre note est de '.$note.'/20.</h1>';
  }
  require_once('./template/foot.html');
