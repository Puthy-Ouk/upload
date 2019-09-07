<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="form">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="upload">Choose</label>
                    <input type="file" name="upload" id="upload">
                    <button type="submit" name="send" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>