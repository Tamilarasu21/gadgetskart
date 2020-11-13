<header>
    <nav class="navbar navbar-inverse" style="margin-left:-1px;margin-right:-1px;background:#b2bcc2;border:none;">

        <div class="navbar-header">
            <a href="#" class="navbar-brand"><img src="assets/cart.png" alt="" width="40" height="40" class="img-circle" style="background:snow;padding:0px;margin-top:-10px"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="menu" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'index.php') {
                                        echo 'active';
                                    } ?>"><a href="index.php" id="nl">Home</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'category.php') {
                                        echo 'active';
                                    } ?>"><a href="category.php" id="nl">Categories</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'offer.php') {
                                        echo 'active';
                                    } ?>"><a href="offer.php" id="nl">Offer</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'brands.php') {
                                        echo 'active';
                                    } ?>"><a href="brands.php" id="nl">Brands</a></li>
                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'terms.php') {
                                        echo 'active';
                                    } ?>"><a href="terms.php" id="nl">Terms</a></li>
            </ul>
            <ul class="nav navbar-nav" style="float:right;">
                <li class="nav-item"><a href="#" id="nl" data-toggle="modal" data-target="#myModal">Buy</a></li>
                <li class="nav-item"><a href="#" id="nl" data-toggle="modal" data-target="#seller">Sell</a></li>
            </ul>
        </div>
    </nav>
</header>
<!-- modal buyer start -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: whitesmoke">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <div class="text-center"><img src="assets/cart.png" alt="" class="img-circle" width="50" height="50"></div>
                <h2 class="text-center text-primary" style="font-weight: 600">Buyer</h2>
            </div>
            <br />
            <ul class="nav nav-tabs">
                <li class="active text-center" style="width: 50%">
                    <a href="#signin" data-toggle="tab">Sign In</a>
                </li>
                <li class="text-center" style="width: 50%">
                    <a href="#signup" data-toggle="tab">Sign Up</a>
                </li>
            </ul>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="signin">
                        <form action="user/login" method="post" class="well form-horizontal">
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="email" name="email" id="email" pattern="^[a-zA-Z0-9]+@gmail\.com+$" class="form-control" placeholder="Enter Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button name="login" class="btn btn-info btn-block">
                                        Sign In
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup">
                        <form action="user/register" method="post" class="well form-horizontal">
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="email" id="email" class="form-control" pattern="^[a-zA-Z0-9]+@gmail\.com+$" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="tel" name="mobile" id="mobile" class="form-control" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" placeholder="Mobile Number" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label for="male" class="radio-inline">
                                            <input type="radio" name="gender" id="male" value="male" />Male
                                        </label>
                                        <label for="female" class="radio-inline">
                                            <input type="radio" name="gender" id="female" value="female" />Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Atleast 6 characters" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Retype Password" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button name="register" class="btn btn-info btn-block">
                                    Sign Up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal buyer ends -->
<!-- modal seller start -->
<div class="modal fade" id="seller" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: whitesmoke">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <div class="text-center"><img src="assets/cart.png" alt="" class="img-circle" width="50" height="50"></div>
                <h2 class="text-center text-primary" style="font-weight: 600">Seller</h2>
            </div>
            <br />
            <ul class="nav nav-tabs">
                <li class="active text-center" style="width: 50%">
                    <a href="#ssignin" data-toggle="tab">Sign In</a>
                </li>
                <li class="text-center" style="width: 50%">
                    <a href="#ssignup" data-toggle="tab">Sign Up</a>
                </li>
            </ul>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="ssignin">
                        <form action="seller/login" method="post" class="well form-horizontal">
                          
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="email" id="email" class="form-control" pattern="^[a-zA-Z0-9]+@gmail\.com+$" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button name="login" class="btn btn-success btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="ssignup">
                        <form action="seller/register" method="post" class="well form-horizontal">
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="firmname" id="firmname" class="form-control" placeholder="Firm name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="owner" id="owner" class="form-control" placeholder="Owner name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                       <input type="email" name="email" id="email" class="form-control" pattern="^[a-zA-Z0-9]+@gmail\.com+$" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="tel" name="mobile" id="mobile" class="form-control" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" placeholder="Mobile Number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label for="male" class="radio-inline"><input type="radio" name="gender" id="male" value="male">Male</label>
                                        <label for="female" class="radio-inline"><input type="radio" name="gender" id="female" value="female">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Atleast 6 characters" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Retype Password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button name="register" class="btn btn-success btn-block">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal seller ends -->



                        

                        
                        