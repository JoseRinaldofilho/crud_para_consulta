<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'id_cliente' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'data_de_nascimento' => [
                'type' => 'DATE',
                
            ],

            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => 32
                
            ],

            'endereco' => [
                'type' => 'VARCHAR',
                'constraint' => 128
                
            ],

            'limite_de_credito' => [
                'type' => 'DOUBLE',
                
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_cliente', true);
        $this->forge->createTable('clientes');
    }


    public function down()
    {
        $this->forge->dropTable('clientesgit');
    }
}
