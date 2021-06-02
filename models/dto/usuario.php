<?php  

	namespace Models\DTO;

	/**
	*  Clase DTO para el manejo de usuarios
	*/
	class UsuarioDTO {

		/**
		 * @var $id identificador del usuario
		 */
		private $_id;

		/**
		 * @var $username nombre de usuario
		 */
        private $_username;
        
		/**
		 * @var $email email del usuario
		 */
		private $_email;

		/**
		 * @var $pass contraseña del usuario
		 */
		private $_pass;
		
		function __construct($username, $email, $pass) {
			$this->_username = $username;
			$this->_email = $email;
			$this->_pass = $pass;
			
		}

		/* Metodos Guetters y Setters */

		public function getUsername() {
			return $this->_username;
		}

		public function setUsername($name) {
			$this->_username = $name;
		}

		public function getEmail() {
			return $this->_email;
		}

		public function setEmail($email) {
			$this->_email = $email;
		}

		public function getPass() {
			return $this->_pass;
		}

		public function setPass($pass) {
			$this->_pass = $pass;
		}

	}