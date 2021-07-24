<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Cara Upload Dengan Codeigniter</title>
    <style type="text/css">
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        form {
            position: relative;
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f1f1f1;
            border: 1px solid #eeeeee;
            margin: 0 auto;
            border-radius: 4px;
            text-align: center;
        }

        .alert-success,
        .alert-danger {
            border-radius: 4px;
            padding: 5px 20px;
            width: 50%;
            margin: 20px auto 0 auto;
            color: #ffffff;
        }

        .alert-success {
            background-color: #5cb85c;
        }

        .alert-danger {
            background-color: #d9534f;
        }

        .file-list {
            width: 50%;
            margin: 20px auto;
        }

        .file-list table {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .file-list table thead tr th {
            border-top: 1px solid #dddddd;
            border-bottom: 1px solid #dddddd;
            border-left: 1px solid #dddddd;
            background-color: #f1f1f1;
            padding: 5px 10px;
        }

        .file-list table thead tr th:last-child {
            border-right: 1px solid #dddddd;
        }

        .file-list table tbody tr td {
            border-bottom: 1px solid #dddddd;
            border-left: 1px solid #dddddd;
            padding: 5px 10px;
        }

        .file-list table tbody tr td:last-child {
            border-right: 1px solid #dddddd;
        }
    </style>
</head>

<body>
    <h1>Cara Upload Dengan Codeigniter</h1>
    <form method="POST" action="<?php echo base_url('Info/upload') ?>" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>
    <div class="file-list">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th style="width: 5%; text-align: center; vertical-align: middle;">No</th>
                    <th style="width: 80%; text-align: left; vertical-align: middle;">Nama File</th>
                    <th style="width: 15%; text-align: center; vertical-align: middle;">Download</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($uploads->num_rows() > 0) : ?>
                    <?php $nomor = 1; ?>
                    <?php foreach ($uploads->result() as $file) : ?>
                        <tr>
                            <td style="text-align: center; vertical-align: middle;"><?php echo $nomor++; ?></td>
                            <td style="text-align: left; vertical-align: middle;"><?php echo $file->Nama_File; ?></td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="<?php echo base_url('Info/' . $file->Nama_File) ?>" download>Download</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td style="text-align: center; vertical-align: middle;" colspan="3">Tidak ada data</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>