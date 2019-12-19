<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<section class="section_menu_form">
    <div class="container">
        <div class="row">
            <form method="post" action="<?php echo base_url('menu/update_menu/' . $menu->page_id); ?>">
                <div class="row">
                    <div class="col-md-12 col-md-offset-2">
                        <div class="form-group">
                            <label class="col-md-12">Page Name</label>
                            <div class="col-md-12">
                                <input type="text" name="page_name" class="form-control" value="<?php echo $menu->page_name; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2 pull-right">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>