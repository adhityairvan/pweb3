<!-- Navigation -->
<nav class="nav-main">
    <ul class="main-menu" style="padding-left: 0">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#" id="ps4-btn">PS4</a></li>
        <li><a href="#" id="xbox-btn">Xbox</a></li>
        <li><a href="jual.php">Jual</a></li>
    </ul>
    <ul class="side-menu">
        <li><a href="#" id="login">Login</a></li>
        <li><a href="#" id="register">Register</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>


<!-- end nav -->

<!-- Start Login Form -->
<div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'"
                  class="close" title="Close Modal">&times;</span>
    <form class="modal-content animate" action="php/login.php" method="post">
        <div class="imgcontainer">
            <img src="src/img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>

<div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content animate" action="php/register.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="repeat"><b>Retype Password</b></label>
            <input type="password" placeholder="Repeat Password" name="repeat" required>

            <label for="email"><b>Email</b></label>\
            <input type="email" placeholder="Input Email" name="email" required>

            <label for="alamat"><b>Alamat</b></label>
            <input type="text" placeholder="Enter Username" name="alamat" required>

            <label for="number"><b>Type Phone Number</b></label>
            <input type="tel" name="number">

            <label for="image"><b>Upload Image</b></label>
            <input type="file" name="image">

            <button type="submit">register</button>

        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>

<!-- end Login Form -->
