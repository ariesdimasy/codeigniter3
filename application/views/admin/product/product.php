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
                    <a href="" class='btn btn-primary text-white'> Edit </a> 
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>