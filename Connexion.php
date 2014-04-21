<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function Connexion ($pNom, $pMotPasse, $pBase, $pServeur)
 {
  // Connexion au serveur 
  $connexion = mysql_pconnect ($pServeur, $pNom, $pMotPasse);

  if (!$connexion) 
  {
    echo "Désolé, connexion au serveur $pServeur impossible\n";
    exit;
  }

  // Connexion à la base
  if (!mysql_select_db ($pBase, $connexion)) 
  {
    echo "Désolé, accès à la base $pBase impossible\n";
    echo "<B>Message de MySQL :</B> ". mysql_error($connexion);
    exit;
  }
  return $connexion;
 } 
