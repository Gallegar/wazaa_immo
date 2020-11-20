<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Utilisateur extends CI_Controller
{
   public function accueil()
   {
      // Chargement de l'assistant 'url'
      $this->load->helper('url');

      // Appel des vues
      $this->load->view('header');
      $this->load->view('accueil');
      $this->load->view('footer');
   }
   public function formulaire()
   {
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->library('form_validation');

      // Appel des vues
      $this->load->view('header');
      $this->load->view('formulaire');
      $this->load->view('footer');
   }
   public function connect()
   {
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->library('form_validation');  
      $this->load->model('UtilisateurModel');


      if ($this->input->post())
      {
         $this->form_validation->set_rules('login', 'login', 'required', array("required" => "La %s est obligatoire."));

         $this->form_validation->set_rules('mdp', 'mdp', 'required', array("required" => "La %s est obligatoire."));
         if ($this->form_validation->run() == TRUE)
         { // validation
            $login = $this->input->post('login');
            $mdp = $this->input->post('mdp');
            $results = $this->UtilisateurModel->connexion($login, $mdp);

            if ($results != false )
            {  
               $this->session->set_userdata('role', $results->uti_role);
               redirect($this->input->post('url'));
            }
            else
            {
               redirect();
            }
            redirect($this->input->post('url'));
         }
      }
      // Appel des vues
      redirect();
   }

   public function disconnect()
   {
      $this->load->helper('url');
      $this->load->model->
      $this->session->sess_destroy();
      redirect();
   }
}