<div style='padding:20px 0 20px 0'>
    <h3> Product List </h3>
    <br>

    <a class='btn btn-primary float-right' href="<?=base_url("index.php/admin/product/product_insert")?>"> + Add Product </a>
    <div class='clearfix'></div>
    <br>

    <table class='table table-bordered'>
        <thead>
            <th> Image </th>
            <th> Product Title </th>
            <th> Product Description </th>
            <th> Price </th>
            <th> Stock </th>
            <th> Action </th>
        </thead>
        <tbody>
            <?php foreach ($product as $row){ ?> 
            <tr>
                <td><?=$row["image"]?></td>
                <td><?=$row["product_title"]?></td>
                <td><?=$row["product_desc"]?></td>
                <td><?=$row["price"]?></td>
                <td><?=$row["stock"]?></td>
                <td>
                    <a href="<?=base_url("index.php/admin/product/product_update/$row[product_id]")?>" class='btn btn-primary text-white'> Edit </a> 
                    <form onSubmit="return confirm('Are You Sure want to delete <?=$row["product_title"]?> ? ')" method="post" action="<?=base_url("index.php/admin/product/delete_process")?>"> 
                        <input type="hidden" name="product_id" value="<?=$row["product_id"]?>">
                        <input value="Delete" type="submit" class="btn btn-danger">  
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>