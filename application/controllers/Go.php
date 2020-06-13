<?php

class Go extends CI_Controller{

    public function index()
    {
        $this->load->view('header');
        $this->load->view('pagina');
        $this->load->view('footer');        
    }

    public function login()
    {
        $this->load->view('login');
        $this->load->view('footer2');         
    }

    public function registrati(){ 
        $this->load->view('registrati');
        $this->load->view('footer2'); 
    }

    public function scheda()
    {
        $this->load->view('header');
        $this->load->view('partita');
        $this->load->view('footer');        
    }
    
    public function registraUtente(){

        $user = $this->input->post("user");
        $pass1 = $this->input->post("password1");
        $pass2 = $this->input->post("password2");

        if($user == null || $pass1 == null || $pass2 == null){
            $data['problem'] = "Non hai inserito tutte le credenziali";
                $this->load->view('registrati');
                $this->load->view('errore',$data);
                $this->load->view('footer2');
        }
        else
        {
            if($pass1 != $pass2){
                $data['problem'] = "La password di conferma non coincide con quella primaria";
                $this->load->view('registrati');
                $this->load->view('errore', $data);
                $this->load->view('footer2'); 
            }
            else
            {
                $result = $this->negozio_model->get_utente($user);

                if($result != null){
                    $data['problem'] = "Username già usato";
                    $this->load->view('registrati');
                    $this->load->view('errore', $data);
                    $this->load->view('footer2');
                }
                else
                {
                    $this->negozio_model->set_utente($user, $pass1);
                    $result = $this->negozio_model->get_money($user);
                    $data['money'] = $result->icoins;
                    $data['name'] = $user;
                    $this->load->view('header_exit', $data);
                    $this->load->view('pagina');
                    $this->load->view('footer');   
                } 
                
            }
        }
    }

    public function controllaUser(){
        $user = $this->input->post("user");
        $pass = $this->input->post("password");

        if($user == null || $pass == null){
            $data['problem'] = "Non hai inserito tutte le credenziali";
                $this->load->view('login');
                $this->load->view('errore',$data);
                $this->load->view('footer2');
        }
        else
        {
            $result = $this->negozio_model->get_utente($user);

                if($result != null){
                    $result = $this->negozio_model->get_password($user);
                    
                    if($result->password == $pass){
                        $result = $this->negozio_model->get_money($user);
                        $data['money'] = $result->icoins;
                        $data['name'] = $user;
                        $this->load->view('header_exit', $data);
                        $this->load->view('pagina');
                        $this->load->view('footer'); 
                    }
                    else
                    {
                        $data['problem'] = "Password non corretta";
                        $this->load->view('login');
                        $this->load->view('errore',$data);
                        $this->load->view('footer2');
                    }
                        
                }
                else
                {
                    $data['problem'] = "Username inesistente";
                    $this->load->view('registrati');
                    $this->load->view('errore', $data);
                    $this->load->view('footer2');
                }
        }
    }

}

?>