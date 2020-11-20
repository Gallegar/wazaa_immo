<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class UtilisateurModel extends CI_Model
{
   public function formulaire()
   {
      
   }

   public function connexion($login, $mdp)
   {
      $this->load->database();

         $results = $this->db->query("SELECT uti_mdp, uti_role, uti_id FROM utilisateur WHERE uti_login ='".$login."'")->row();
         if(password_verify($mdp, $results->uti_mdp))
         {
            return $results;
         }
         return false;
   }

   public function disconnect()
   {
      
   }
}