<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload File Laravel</title>
</head>
<body>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">Tên file:</label>
        <input type="file" name="file" id="file" accept=".jpg, .jpeg, .gif" required>
        <button type="submit" name="uploadBtn">Upload file</button>
        <p> <h3>Ghi chú:</h3> Chỉ cho phép định dạng jpg, jpeg, gif và kích thước tối đa tệp tin là 5MB.</p>
    </form>
</body>
</html>