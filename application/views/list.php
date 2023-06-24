<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    
        $success = $this->session->userdata('success');
        if($success!=''){
            ?>
            <div class="alert alert-success"><?php echo $success ?></div>
            <?php
        }
    
    
    
    ?>
    <div class="container" style="margin-top:10px;">
        <div class="row">
            <div class="col-md-8">

                <div class="row">
                    <div class="col">
                        <div class="row mt-3 mb-3">
                            <div class="col-md-4">
                                <h3><b>User List</b></h3>
                            </div>
                            <div class="col-md-7">
                                <a href="<?php echo base_url().'user/create'; ?>"
                                    class="btn btn-outline-primary float-end "><i class="fa-solid fa-circle-plus"></i> Create</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <table class="table-striped">

                        <tr>
                            <th>SR. No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php 
                        if(!empty($users)){
                            $i=1;
                            foreach ($users as $user){
                        ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td>
                                <a href="<?php echo base_url().'user/edit/'.$user['user_id']; ?>"
                                    class="btn btn-outline-primary my-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'user/delete/'.$user['user_id']; ?>"
                                    class="btn btn-outline-danger my-2"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <?php
                        $i++; }
                        } else {
                            echo "<tr><td colspan='5'>No user found.</td></tr>";
                        } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
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