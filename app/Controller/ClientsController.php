<?php
    class ClientsController extends AppController{

        public function index(){
            /*debug($this->request->params);
            // redirect
            $this->response->header('location', 'http://etml-es.ch');
            $this->response->send();*/
            //die("Je suis l'index de Clients");

        }

        public function ajout($nom){
            //die("Je suis l'ajout de Clients");
            $this->set('nom', $nom);
            // préciser le layout de base a prendre
            $this->layouts='MonLayout';
        }
    }
?>