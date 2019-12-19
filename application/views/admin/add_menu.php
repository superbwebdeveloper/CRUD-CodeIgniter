<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<section class="section_menu_form container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Add Menu
                <div class="pull-right">
                    <a class="btn btn-primary" href="<?php echo base_url('menu/add_menu') ?>"> Create New Menu Item</a>
                </div>
            </h2>
        </div>
        <div class="col-lg-12">
            <form method="post" action="<?php echo base_url('pageCreate'); ?>">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label class="col-md-3">Page Name</label>
                            <div class="col-md-9">
                                <input type="text" name="page_name" class="form-control">
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
