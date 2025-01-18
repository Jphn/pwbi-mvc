<?php

class Conexao
{
    private static $instancia;

    public static function getConexao()
    {
        if (!isset(self::$instancia)) {
            try {
                self::$instancia = new PDO('mysql:host=mysql;dbname=barber4men', 'root', 'root');
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instancia->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                die("Erro na conexão: " . $e->getMessage());
            }
        }

        return self::$instancia;
    }
}
