<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Sheets</title>
</head>
<body>
    <form action="/saveUploadForm" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="uploadfile">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>