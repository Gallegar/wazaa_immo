<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class AnnonceModel extends CI_Model
{
    public function liste_annonce()
    { // -- cette fonction permet d'envoyer toutes les annonces au controller
        $this->load->database();
        $requete = $this->db->query("SELECT * FROM waz_annonces");
        $aAnnonce = $requete->result();
        return $aAnnonce;
    } // -- liste_annonce

    public function produit($id)
    { // -- cette fonction permet d'envoyer toutes les informations d'une annonce précise ($id) 
        $this->load->database();
        $results = $this->db->query("SELECT * FROM waz_annonces WHERE an_id = ?", $id)->row();
        return $results;
    } // -- produit($id)

    public function delete($id)
    { //delete d'un produit
        $this->load->database();
        $this->db->where('pro_id', $id);
        $this->db->delete('produits');
        /* on peut mettre un return dans la function delete pour vérifier que celle-ci ce soit bien éxecuter car la requête renvoie true en cas de réussite et false en cas d'échec. */
    } // -- delete($id)

    public function options()
    {
        $this->load->database();
        $categories = $this->db->query('SELECT * FROM was_options')->result();
        return $categories;
    } // -- options

    public function insertion($data)
    {
        $this->load->database();
        $verif = $this->db->insert('produits', $data);
        return $verif;
    } // -- insertion($data)

    public function modifier($data, $id)
    {
        $this->load->database();
        $this->db->where('an_id', $id);
        $this->db->update('waz_annonces', $data);
    } // -- modifier()
}