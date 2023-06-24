<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar bg-dark border-bottom border-bottom-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Crud-Application</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <?php
        if(!empty($user)){
            foreach($user as $record){
              
           
    ?>
    <!-- form start -->
    <div class="container mt-5">
        <h2 style="margin-top:10px;">Update User</h2>
        <form action="<?php echo base_url().'user/edit/'.$record['user_id'] ?>" method="post">
            <div class="row ">
                <div class="col-md-6 border">
                    <div class="form-group mt-3">
                        <label for="uname" class="form-control-label font-weight-bold "><b>Username :</b></label>
                        <input type="text" name="uname" id="uname" value="<?php echo set_value('uname',$record['name']); ?>" placeholder="Enter Username" class="form-control">
                    
                    </div>
                    <div class="form-group mt-3">
                        <label for="email" class="form-control-label"><b>Email :</b></label>
                        <input type="text" name="email" id="email" value="<?php echo set_value('email',$record['email']); ?>" placeholder="Enter Email" class="form-control">
                        
                    </div>
                    <div>
                        <button class="btn btn-outline-primary my-3 mr-2">Update</button>
                        <a href="<?php echo base_url().'user/index/list'; ?>" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php  }
        }
        ?>
    <!-- form end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</body>

</html>