        <form method="POST" enctype="multipart/form-data">
        <div class="admin_panel_content_wrapper">
            <div class="admin_panel_content">
                    <table class="table">
                        <tr>
                            <td colspan="2"><h2 style="text-align:center;"> Add Extra Product </h2></td>
                        </tr>
                        <tr>
                            <td> Image </td>
                            <td> <input type="file" name="product_image" id="product_image_upload" size="0" onchange="preview_image();"><div id="preview"><img src="<?php echo base_url(); ?>./Image/no_image_preview.png" id="image_show"></div> </td>
                        </tr>
                        <tr>
                            <td> Product Name </td>
                            <td> <input type="text" name="product_name" required> </td>
                        </tr>

                        <tr>
                            <td> Product Price </td>
                            <td> <input type="number" name="product_price" step="0.01" min="0" value="0"> </td>
                        </tr>
                       
                        <tr>
                            <td colspan="2"><button class="btn-success">Add </button></td>
                        </tr>
                    </table>
               
            </div>
        </div>
        </form>