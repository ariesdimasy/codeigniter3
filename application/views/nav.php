<nav class="navbar navbar-expand-lg navbar-dark bg-primary"> 
    <a class="navbar-brand text-white">Yudhistira.id </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav col-md-8">
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url("index.php/home")?>"> Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url("index.php/product")?>"> Product </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url("index.php/contact")?>"> Contact </a>
            </li>
        </ul>
        <?php if(empty($this->session->userdata("email"))){ ?>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url("index.php/auth/login")?>"> Login </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url("index.php/auth/register")?>"> Register </a>
            </li>
        </ul>
        <?php }else{ ?>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
               
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?=$this->session->userdata("name")?> 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Cart</a>
                  
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=base_url("index.php/auth/logout")?>"> Logout </a>
                </div>
            </li>
           
        </ul>
        <?php } ?>

    </div>
</nav>