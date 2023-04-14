<html>

<head>
    <title>My Form</title>
</head>
<style>
    body {
        background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='100%25' width='100%25'%3E%3Cdefs%3E%3Cpattern id='doodad' width='40' height='40' viewBox='0 0 40 40' patternUnits='userSpaceOnUse' patternTransform='rotate(135)'%3E%3Crect width='100%25' height='100%25' fill='rgba(203, 213, 224,1)'/%3E%3Cpath d='M0 20L20 40L40 20L20 0L0 20z' fill='rgba(203, 213, 224,1)'/%3E%3Cpath d='M0 20L20 40L40 20L20 38z' fill='rgba(26, 32, 44,1)'/%3E%3C/pattern%3E%3C/defs%3E%3Crect fill='url(%23doodad)' height='200%25' width='200%25'/%3E%3C/svg%3E ");
        text-align: center;
        margin: auto;
        width: 50%;
        padding: 10px;
        color: black;
    }
</style>
<body>
    <h3>Your form was successfully submitted!</h3>
    <p><?= anchor('pegawai/input', 'Tambah Data Pegawai') ?></p>
    <p><?= anchor('pegawai', 'Cetak List Pegawai') ?></p>

</body>

</html>