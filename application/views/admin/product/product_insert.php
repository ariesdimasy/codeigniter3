<div style="padding:20px 0 20px 0">
    
    <div class="card col-md-8 mx-auto">
        <div class="card-body">
           <h3> Product Insert </h3>
           <form method='post' action='<?=base_url("index.php/admin/product/insert_process")?>'>
                <div class='form-group'>
                    <label> Product Title </label>
                    <input type='text' name='product_title' class='form-control' >
                </div>
                <div class='form-group'>
                    <label> Price </label>
                    <input type='text' name='price' class='form-control'>
                </div>
                <div class='form-group'>
                    <label> Stock </label>
                    <input type='text' name='stock' class='form-control'>
                </div>
                <div class='form-group'>
                    <label> Product Description </label>
                    <textarea name='product_desc' class='form-control'></textarea>
                    
                </div>

                <button type='submit' class='btn btn-success'> Submit </button>
           </form>
        </div>
    </div>
</div>