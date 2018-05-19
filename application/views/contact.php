<!DOCTYPE html> 
<html> 
    <head>
       <?php $this->load->view("head") ?>      
    </head>
    <body>
       <?php $this->load->view("nav") ?>
        
        <section id="contact">
            <div class="container col-md-5">
               
               <div class="card-header bg-info">
                <h1 class="text-center text-white"> Contact </h1>
               
               </div>
               <div class="card">
                    <form role="form">
                       <div class="card-body">
                        <div class="form-group">
                            <label> Name </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> Subject </label>
                            <input type="text" name="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> Email </label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> Message </label>
                            <textarea rows="10" class="form-control" name="message"></textarea>
                        </div>
                       </div>
                       <div class="card-footer">
                            <button class="btn btn-success" type="submit"> Submit </button>
                            <button class="btn btn-secondary" type="reset"> Reset </button>
                       </div>
                    </form>
               </div>
            </div>
            
        </section>
        <?php $this->load->view("footer") ?>


    </body>
</html>