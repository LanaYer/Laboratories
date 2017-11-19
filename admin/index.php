
<?php 
    session_start();
    include 'blocks/head.php'; 
?> 

<body>
<?php if ($_SESSION["auth"]!=1): ?> 

    <div class="biolab-admin-auth-form">
        <div class="form-group">
             <label for="login">Login</label>
             <input type="login" class="form-control" id="login" placeholder="Insert login" value="">
        </div>
            <div class="form-group">
             <label for="pass">Password</label>
             <input type="password" class="form-control" id="pass" placeholder="Insert password" value="">
            </div>
        <span class="btn btn-success" onclick="auth()">Enter</span>
    </div>

<?php else: ?> 
    <div class="biolab-admin-auth-form biolab-admin-auth-form-two">
        <a href="analytique.php" class="btn btn-success">Go to admin panel</a>
        <a href="ajax/logout.php"  class="btn btn-success">Logout</a>
    </div>
<?php endif; ?>
</body>
</html>