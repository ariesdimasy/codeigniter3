<!DOCTYPE html> 
<html> 
    <head>
       <?php $this->load->view("head") ?>      
    </head>
    <body>
       <?php $this->load->view("admin/nav") ?>
       <div class='container'> 
            <?php $this->load->view($content)?>
       </div>
       <?php $this->load->view("footer") ?>
    </body>
</html>