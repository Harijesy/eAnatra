<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Pages extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->helper('url') ;
            $this->load->helper('form') ;
            $this->load->library('session') ;
            $this->session ; 
	    }
        public function index(){
		    $this->load->view('home');
	    }
        public function signin(){
            $this->load->database() ; 
            $this->load->library('form_validation') ; 

            $this->form_validation->set_rules('s_nom','Votre nom','required') ; 
            $this->form_validation->set_rules('s_prenom','Votre prenom','required') ;
            $this->form_validation->set_rules('s_email','Votre email','required|min_length[10]') ; 
            $this->form_validation->set_rules('s_mdp','Votre mot de passe','required|min_length[8]|max_length[20]') ; 
            $this->form_validation->set_rules('s_cmdp','Votre confirmation de mot de passe','required|min_length[8]|max_length[20]') ; 

            if($this->form_validation->run() === TRUE ){
                $data = $this->db->get_where('user',['email'=>$this->input->post('s_email')])->result()  ;
                // SELECT * from user where email = 
                if(count($data) == 0){
                    $user = [
                        "nom" => $this->input->post('s_nom') ,
                        "prenom" => $this->input->post('s_prenom') ,
                        "email" => $this->input->post('s_email') ,  
                        "mdp" => sha1($this->input->post('s_mdp')) ,   
                    ] ; 
                    $this->db->insert("user",$user) ; 
                    echo "success" ; 
                }
                else{
                    echo "error" ; 
                }
            }
            else{
                echo "nosuccess" ; 
            }
           
        }

        public function classe(){
            $this->load->view('classe.php') ; 
        }
        public function finish(){
            $this->load->database() ; 
            $this->load->library('form_validation') ; 

            $this->form_validation->set_rules('s_section','lorem','required') ; 
            $this->form_validation->set_rules('s_college','lorem','required') ; 
            $this->form_validation->set_rules('s_lycee','lorem','required') ; 

            if($this->form_validation->run() === TRUE){
                $this->db->select_max('idUser') ; 
                $query = $this->db->get('user')->result() ; 

                // var_dump($query); 

                $this->db->set('section',$this->input->post('s_section')) ; 
                $this->db->where('idUser',$query[0]->idUser) ; 
                $this->db->update('user') ; 

                if($this->input->post('s_section') == 'Collège'){
                    $this->db->set('classe',$this->input->post('s_college')) ; 
                    $this->db->where('idUser' , $query[0]->idUser) ;
                    $this->db->update('user') ;
                }
                else if($this->input->post('s_section') == 'Lycée'){
                    $this->db->set('classe',$this->input->post('s_lycee')) ; 
                    $this->db->where('idUser' , $query[0]->idUser) ;
                    $this->db->update('user') ;
                }
                echo "success" ; 
            }
            else{
                echo "nosuccess" ; 
            }
        }
    }

?>