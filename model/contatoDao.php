<?php

namespace model;

require_once ('requires.php');

Class contatoDao {

    function createContato (Contato $c){

        // VERIFICAR SE OS NUMEROS SÃO VALIDOS E JÁ FORAM CADASTRADOS
        $celular = $c->getCelular();
        $ddd = substr($celular, 1, 2);
            switch($ddd){
                case 11:
                case 12:
                case 13:
                case 14:
                case 15:
                case 16:
                case 17:
                case 18:
                case 19:
                case 21:
                case 22:
                case 24:
                case 27:
                case 28:
                case 31:
                case 32:
                case 33:
                case 34:
                case 35:
                case 37:
                case 38:
                case 41:
                case 42:
                case 43:
                case 44:
                case 45:
                case 46:
                case 47:
                case 48:
                case 49:
                case 51:
                case 53:
                case 54:
                case 55:
                case 61:
                case 62:
                case 63:
                case 64:
                case 65:
                case 66:
                case 67:
                case 68:
                case 69:
                case 71:
                case 73:
                case 74:
                case 75:
                case 77:
                case 79:
                case 81:
                case 82:
                case 83:
                case 84:
                case 85:
                case 86:
                case 87:
                case 88:
                case 89:
                case 91:
                case 92:
                case 93:
                case 94:
                case 95:
                case 96:
                case 97:
                case 98:
                case 99:
                    // ADICIONAR O CONTATO AO DB
                    // ADICIONAR O ID NA CHAVE PRIMARIA DO CLIENTE
                    // ADICIONAR O ID NA CHAVE PRIMARIA DO FORNECEDOR
                        $sql = "SELECT * FROM contatos WHERE numero = ?";

                        $stmt = Conn::getConn()->prepare($sql);
                        $stmt->bindValue(1, $c->getCelular());

                        $stmt->execute();

                        // $resultado = $stmt->fetchAll();

                        $stmtRows = $stmt->rowCount();

                        // echo $stmtRows;
                        if($stmtRows == 0){
                            $sql = "INSERT INTO contatos (numero, tipoUsuario, idCliente_contato)
                            VALUES (?, ?, ?)";
                    
                            $stmt = Conn::getConn()->prepare($sql);
                            $stmt->bindValue(1, $c->getCelular());
                            $stmt->bindValue(2, '1');
                            $stmt->bindValue(3, $c->getIdCliente());

                            $resultado = $stmt->execute();

                            $stmtRows = $stmt->rowCount();

                            if($stmtRows == 0){
                                // REDIRECIONA COM ERRO PARA A PAGINA INICIAL
                                return $stmtRows;
                            }
                        } else {
                            
                        }

                    break;
                default:
                    $_SESSION['error'] = 5;
                    header('Location: ../view/pages/primeiroCadastroCliente.php');
                    break;
            }

    }

    function editContato (Contato $C){

    }

    function deleteContato (Contato $C){

    }
}