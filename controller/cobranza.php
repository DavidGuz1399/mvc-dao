<?php 

require_once 'model/cobranza.php';

class cobranzaController{
	public $page_title;
	public $view;

	public function __construct() {
		$this->view = 'list_cobranza';
		$this->page_title = '';
		$this->cobranzaObj = new Cobranza();
	}

	/* List all cobranzas */
	public function list(){
		$this->page_title = 'Listado de cobranzas';
		return $this->cobranzaObj->getCobranzas();
	}

	/* Load cobranza for edit */
	public function edit($id = null){
		$this->page_title = 'Editar cobranza';
		$this->view = 'edit_cobranza';
		/* Id can from get param or method param */
		if(isset($_GET["id"])) $id = $_GET["id"];
		return $this->cobranzaObj->getCobranzaById($id);
	}

	/* Create or update cobranza */
	public function save(){
		$this->view = 'edit_cobranza';
		$this->page_title = 'Editar cobranza';
		$id = $this->cobranzaObj->save($_POST);
		$result = $this->cobranzaObj->getCobranzaById($id);
		$_GET["response"] = true;
		return $result;
	}

	/* Confirm to delete */
	public function confirmDelete(){
		$this->page_title = 'Eliminar cobranza';
		$this->view = 'confirm_delete_cobranza';
		return $this->cobranzaObj->getCobranzaById($_GET["id"]);
	}

	/* Delete */
	public function delete(){
		$this->page_title = 'Listado de cobranzas';
		$this->view = 'delete_cobranza';
		return $this->cobranzaObj->deleteCobranzaById($_POST["id"]);
	}

}

?>