
                    <label>Users</label>
                        <select name="users" class="form-control field_type" >
                            <?php foreach($users->result() as $r) : ?>
                                <option value="<?php echo $r->userid ?>"><?php echo $r->username ?></option>
                            <?php endforeach; ?>
                        </select>
                 
                    <link href="<?php echo base_url() ?>scripts/libraries/chosen/chosen.min.css" rel="stylesheet" type="text/css">
            <script type="text/javascript" src="<?php echo base_url() ?>scripts/libraries/chosen/chosen.jquery.min.js"></script>
