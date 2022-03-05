<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Images_line extends CI_Migration
{
    protected $tableName  = 'images_line';

    public function up()
    {
        $this->dbforge->add_field([
            'recipe_id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE
            ],
            'image_id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE
            ]
        ]);
        $this->dbforge->add_key('recipe_id');
        $this->dbforge->add_key('image_id');
        $this->dbforge->add_field("updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP");
        $this->dbforge->add_field("created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (recipe_id) REFERENCES recipes(id) ON DELETE RESTRICT ON UPDATE CASCADE');
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (image_id) REFERENCES images(id) ON DELETE RESTRICT ON UPDATE CASCADE');

        // If you want to add a foriegn key.
        // role_id must be a column of this table, please add it above in the table. And make sure admin_roles table is added before this table. 
        // $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (role_id) REFERENCES admin_roles(id) ON DELETE RESTRICT ON UPDATE CASCADE');

        $this->dbforge->create_table($this->tableName);

        //Inserting first row
        // $this->db->insert($this->tableName, [
        //     'username'   => 'murad_ali',
        //     'phone'      => '123-123-7834',
        //     'password'   => password_hash('123456', PASSWORD_BCRYPT),
        // ]);
        
        //Inserting two rows
        // $data = [
        //      [
        //          'username'   => 'murad_ali',
        //          'phone'      => '123-123-7834',
        //          'password'   => password_hash('123456', PASSWORD_BCRYPT),
        //      ],
        //      [
        //          'username'   => 'murad_ali',
        //          'phone'      => '123-123-7834',
        //          'password'   => password_hash('123456', PASSWORD_BCRYPT),
        //      ]
        // ];

        // $this->db->insert_batch($this->tableName, $data);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tableName);
    }
}


/* End of file 20220304204117_images_line.php and path \application\migrations\20220304204117_images_line.php */
