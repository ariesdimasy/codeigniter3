<!DOCTYPE html> 
<html> 
    <head>
       <?php $this->load->view("head") ?>      
    </head>
    <body>
       <?php $this->load->view("nav") ?>
        
        <section id="post">
            <div class="container">
              <div class="row">
               <div class="col-md-9">
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
                    <span class="clearfix"></span>
                  </div>
               </div>
               <div class="col-md-3 right">
                  <div class="container">
                     <ul class="list-group">
                        <li class="list-group-item active">
                               Category
                            </li>
                        <li class="list-group-item">
                                <a href="#"> HTML </a>
                            </li>
                        <li class="list-group-item">
                                <a href="#"> PHP </a>
                            </li>
                        <li class="list-group-item">
                                <a  href="#"> Laravel </a>
                            </li>
                     </ul>
                  </div>
               </div>
               <div class="clearfix"></div>
               </div>
            </div>
            
        </section>
        <?php $this->load->view("footer") ?>


    </body>
</html>