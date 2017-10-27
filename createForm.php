<?php
//une ouverture de balise form
  //Definir une action
function openForm($action = "#")
{
  return "<form action='".$action."'>";
}
//une fermeture de balise form
function closeTag($tag)
{
  return "</" . $tag . ">";
}
/*
  $type = string
  $name = string
  $value = string
  $label = string
*/
function createInput($type, $name, $value = "", $label)
{
  return "<label>" . $label . "</label><input type='" . $type . "' name='" . $name . "' value='" . $value ."'><br>";
}
//Mise en place d'un input
  //Avec un label


//Mise en place d'un select
function createSelect($name, $label, $options)
{
  $html = "<label>" . $label . "</label><br>";
  $html .= "<select name='" . $name . "'>";
  foreach ($options as $key => $value) {
    $html .=  "<option value='" . $value['value'] ."'>" . $value['content'] . "</option>";
  }
  $html .= "</select><br>";
  return $html;
}
function createSubmit($value)
{
  return "<input class='button' type='submit' value='" . $value . "'>";
}
// Generer un bouton Submit
