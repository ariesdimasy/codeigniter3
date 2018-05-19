<!DOCTYPE html> 
<html> 
    <head>
       <?php $this->load->view("head") ?>      
    </head>
    <body>
       <?php $this->load->view("nav") ?>
        <section id="header">
           <div class="container" style="height:100%; display:table; padding:0">
            <div style="height:100%; display:table-cell; vertical-align:middle">
            <center>
            <h1 class="text-white"> Yudhistira.id </h1>
            <p class="text-white"> the easiest way to learn something new </p>
            </center>
            </div>
           </div>
        </section>
        <section id="post">
            <div class="container">
               <center>
                <h1> Latest Post </h1>
                <p> most updated post </p>
               </center>
               <div class="row">
               <div class="col-md-4">
                    <div class="card ">
                            <img class="card-img-top" src="<?=base_url("assets/img/thumb.jpg")?>">
                            <div class="card-body">
                                <h4 class="card-title"> My Title Post </h4>
                                <p class="card-text"> Lorem ipsum sit dolor amet puerto roco adios </p>
                            </div>
                    </div>
               </div>

               <div class="col-md-4">
                    <div class="card ">
                            <img class="card-img-top" src="<?=base_url("assets/img/thumb.jpg")?>">
                            <div class="card-body">
                                <h4 class="card-title"> My Title Post </h4>
                                <p class="card-text"> Lorem ipsum sit dolor amet puerto roco adios </p>
                            </div>
                    </div>
               </div>

               <div class="col-md-4">
                    <div class="card ">
                            <img class="card-img-top" src="<?=base_url("assets/img/thumb.jpg")?>">
                            <div class="card-body">
                                <h4 class="card-title"> My Title Post </h4>
                                <p class="card-text"> Lorem ipsum sit dolor amet puerto roco adios </p>
                            </div>
                    </div>
               </div>
               </div>

            </div>
            
        </section>
        <?php $this->load->view("footer") ?>


    </body>
</html>