<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Register Form</title>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="../assets/css/index.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/slider.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/main-content.css" type="text/css" rel="stylesheet">
    <link href="../assets/css/footer.css" type="text/css" rel="stylesheet">
</head>
<body>
<div style="background: url('../assets/img/bck.jpg');width:100%;height:700px">
    <div style="border: 1px dotted #000;width:230px;padding:30px;position:relative;top:100px;left:300px">
        <h1>Register</h1>
        <br />
        <form action="" method="post">
            <div class="form_field">
                <input type="text" name="name" size="20"  placeholder="Username" required />
            </div>
            <div class="form_field">
                <input type="email" name="email" size="20"  placeholder="Email" required />
            </div>
            <div class="form_field">
                <input type="text" name="phone" size="20"  placeholder="Phone" required />
            </div>
            <div class="form_field">
                <input type="password" name="pass" size="20"  placeholder="Password" required />
            </div>
            <div class="form_field">
                <input type="password" name="pass_2" size="20"  placeholder="Retype Password" required />
            </div>
            <br /><br />
            <input type="submit" name="submit" value="Push" class="fg-button teal"/>
        </form>
    </div>

</div>

</body>

</html>

