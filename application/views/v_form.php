<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Membuat form validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Membuat Form Validation dengan CI</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('form/aksi'); ?>

        <label>Nama</label><br/>
        <input type="text" name="nama"><br/>
        <label>Email</label><br/>
        <input type="text" name="email"><br/>
        <label>Konfirmasi Email</label><br/>
        <input type="text" name="konfir_email"><br/>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>