<?php require('partials/head.php'); ?>
<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
        <h1 class="text-primary">Sign Up</h1>
        <form action="/signup" method="post" role="form">
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <input class="form-control" name="firstname" placeholder="First Name" type="text"
                    required autofocus />
            </div>
            <div class="col-xs-6 col-md-6">
                <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
            </div>
        </div>
        <input class="form-control" name="email" placeholder="Your Email" type="email" />
        <input class="form-control" name="password" placeholder="Password" type="password" />
        <input class="form-control" name="re_password" placeholder="Re-Password" type="password" />
        <!-- Birth Date
        <div class="row">
            <div class="col-xs-4 col-md-4">
                <select name="month" class="form-control">
                    <option value="" disabled selected>Month</option>
                    <?php
                        for ($month = 1; $month <= 12; $month++) :
                    ?>
                    <option value="<?=$month ?>"><?= $month ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="col-xs-4 col-md-4">
                <select name="day" class="form-control">
                    <option value=""  disabled selected>Day</option>
                    <?php
                        for ($day = 1; $day <= 31; $day++) :
                    ?>
                    <option value="<?=$day ?>"><?= $day ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="col-xs-4 col-md-4">
                <select name="year" class="form-control">
                    <option value=""  disabled selected>Year</option>
                    <?php
                        for ($year = 1980; $year <= 2018; $year++) :
                    ?>
                    <option value="<?=$year ?>"><?= $year ?></option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>
            <div class="form-check">
                <input type="radio" name="gender" id="defaultCheck1"  value="male" >
                <label class="form-check-label" for="defaultCheck1">
                    Male
                </label>
                <input type="radio" name="gender" id="defaultCheck2" value="female">
                <label class="form-check-label" for="defaultCheck2">
                    Female
                </label>
            </div> -->
      
        <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign up</button>
        </br>
        </form>
        You really have an account? <a href="#" data-wow-delay="0.4s" data-toggle="modal" data-target="#login-modal">Log in</a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 well well-sm">
        <h1>Share your life!</h1>
        <img class="img-fluid" src="public/pictures/picture1.jpg" alt="Girl in a jacket">
    </div>
</div>
</div>
<?php require('login_modal.php'); ?>
<?php require('partials/footer.php'); ?>
