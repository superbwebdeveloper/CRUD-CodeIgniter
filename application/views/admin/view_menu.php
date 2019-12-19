<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<section class="section_menu_form ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb-4">
                <h2>Page List
                    <div class="pull-right">
                        <a class="btn btn-primary" href="<?php echo base_url('menu/add_menu') ?>"> Create New Page</a>
                    </div>
                </h2>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Page Name</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $d) { ?>
                                <tr>
                                    <td><?php echo $d->page_name; ?></td>

                                    <td>
                                        <form method="DELETE" action="<?php echo base_url('menu/delete_menu/' . $d->page_id); ?>">
                                            <a class="btn btn-info btn-xs" href="<?php echo base_url('menu/edit_menu/' . $d->page_id) ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>