
<?php include "core/base.php"; ?>
<?php include "core/functions.php"; ?>
<?php require "template/header.php"; ?>

<div class="container-fluid">
<div class="col-12">
        <div class="row">
            
            <?php include "dashboard-menu.php";?>

            <div class="manage-admin-content my-5">
                <h3 class="fw-bolder my-3 fs-2">Manage order</h3>
                
                <div class="table-responsive">
                <table class="table table-hover table-bordered mt-1">
                    <thead class="">
                        <tr>
                            <td>#</td>
                            <td class="text-nowrap">Title</td>
                            <td class="text-nowrap">Price</td>
                            <td class="text-nowrap">Quantity</td>
                            <td class="text-nowrap">Total Price</td>
                            <td class="text-nowrap">Name</td>
                            
                            <td class="text-nowrap">Contact</td>
                            <td class="text-nowrap">Address</td>
                            <td class="text-nowrap">Order Time</td>
                            <td class="text-nowrap">Control</td>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        foreach(showOrder() as $f){ 
                            $time = date('J M Y',strtotime($f['order_date']));
                            
                            ?>
                            <tr>
                                <td><?php echo $f['id'] ?></td>
                                <td><?php echo $f['food']; ?></td>
                                <td><?php echo $f['price']; ?></td>
                                <td><?php echo $f['qty'] ?></td>
                                <td><?php echo $f['total'] ?></td>
                                <td><?php echo short( $f['customer_name'],10); ?></td>
                                
                                <td><?php echo $f['customer_contact'] ?></td>
                                <td><?php echo short($f['custom_address'] ,15);?></td>
                                <td><?php echo $time; ?></td>
                                <td class="text-nowrap">
                                    <a href="order-del.php?id=<?php echo $f['id']; ?>" class="btn btn-danger btn-sm">Cancel</a>
                                    <a class="btn btn-sm btn-info" href="food-update.php?id=<?php echo $f['id'] ?>">Update</a>
                                </td>
                            </tr>
                     <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
  </div>
</div>

<?php require "template/footer.php"; ?>

