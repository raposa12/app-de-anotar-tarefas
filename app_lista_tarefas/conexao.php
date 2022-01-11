<?php

class Conexao {

	/*AQUI ELE ESTA CRIANDO AS VARIAVES EM PRIVADOS PARA NÃO SEREM UTLIZADOS POR TERCEIROS */
	private $host = 'localhost';
	private $dbname = 'php_com_pdo';
	private $user = 'root';
	private $pass = '';

	public function conectar() {/*esse conectar sera acionado em outra pagina pos ele possiblita acesso ao banco */
		try {

				/*aqui ele esta chamando essas variaves criadas que são as mesma conexao do banco,
				atraves deles pode se conversar com o banco */
			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;/*retornando os dados do banco */


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>