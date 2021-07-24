<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit file</title>
    <style media="screen">
        .link {
            font-family: sans-serif;
            color: blue;
        }
    </style>
</head>

<body>
    <h2>Edit file</h2>
    <?php echo form_open('Info/update/' . $res[0]['Id'], ['enctype' => 'multipart/form-data']); ?>
    <table>
        <tr>
            <td>Pilih file</td>
            <td>:</td>
            <td>
                <?php echo form_upload('file'); ?>
                <?php echo form_hidden('file_lama', $res[0]['nama_baru']); ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <?php echo form_submit('', 'Update'); ?>
                <input type="reset" name="" value="Reset">
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>
</body>

</html>