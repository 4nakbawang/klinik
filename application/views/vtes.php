<table border="1">
    <tr>
        <th>access</th>
        <th>name</th>
        <th>role_menu</th>
    </tr>

    <?php
    $result = $this->db->query('select * from m_users')->result_array();
    
    $inisial = '';
    $no      = 1;
    foreach ($result as $r) {
        $result2 = $this->db->query('select * from m_users where access = "'.$r['access'].'" ');
        $total = $result2->num_rows();
        $source3 = $this->db->query('select * from m_users where access = "'.$r['access'].'" group by access = "'.$r['access'].'"')->result_array();       
        
        if(($inisial=='' && $no == 1) || $inisial != $r['access']){ // menampilkan looping pertama, menampilkan apabila inisial berganti
        ?>
            <tr>
                <td rowspan="<?php echo $total; ?>"><?php echo $r['access']; ?></td>                               
            
        <?php

        foreach ($source3 as $k) {
            ?>
                
                    <td><?php echo $k['name']; ?></td>
                    <td><?php echo $k['role_menu']; ?></td>
                
                </tr>
            <?php
        }
        
        $inisial = $r['access'];
        $no++;
    }
    }
    ?>
    
</table>