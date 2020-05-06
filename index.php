<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
    <div class="container">
    <h4>Upload file .dat</h4>
        <form action="upload.php"el method="post" enctype="multipart/form-data">
            <fieldset>
                <input name="fileUpload" type="file" />
            </fieldset>
            <input type="submit" class="btn btn-success" value="Send Data">
        </form>
    </div>
    
</body>
</html>

