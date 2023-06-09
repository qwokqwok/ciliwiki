<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Stok Barang - Beranda</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: rgb(150, 202, 196);
            font-family: sans-serif;
        }
        .wadah_flex {
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            height: auto
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #042331;
            box-shadow: 5px 0px 10px rgba(0, 0, 0, 0.3);
            color: white;
        }
        .sidebar header {
            font-size: 22px;
            line-height: 70px;
            text-align: center;
            background: #063146;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul a {
            display: block;
            text-decoration: none;
            font-size: 20px;
            color: white;
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: .4s;
        }
        .sidebar ul a:hover {
            padding-left: 30px;
        }
        .main {
            flex: 1;
            background-color: aliceblue;
            height: 100vh;
        }
        .atas {
            height: 70px;
            background: #042331;
            user-select: none;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 40px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
        }
        th,td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #042331;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .tambah {
            background-color: green;
            color: white;
            width: 180px;
            margin: 20px auto 0px 130px;
            padding: 10px;
            font-size: 16px;
        }
        .edit {
            background-color: green;
            color: white;
            width: 180px;
            margin: 20px auto 0px 130px;
            padding: 10px;
            font-size: 16px;
        }
        .form-container {
            color: white;
            position: fixed;
            top:50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #063146;
            border-radius: 15px;
        }

        .form-container.show {
            display: block;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-edit {
            color: white;
            position: fixed;
            top:50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #063146;
            border-radius: 15px;
        }

        .form-edit.show {
            display: block;
        }

        .form-edit h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            display: block;
            text-align: center;
            width: 40%;
            padding: 8px;
            background-color: #4caf50;
            border: none;
            color: white;
        }
        .form-group button:hover {
            background-color: green;
        }
        .tmbEdit {
            background-color: green;
            padding-left: 3px;
            padding-right: 3px;
            color: white;
        }
        .tmbHapus {
            background-color: red;
            padding-left: 3px;
            padding-right: 3px;
            color: white;
        }
    </style>

</head>
<body>
    <div id="form-container" class="form-container">
        <h2>Tambah Barang</h2>
        <form action="tambahBarang.php" method="POST">
            <div class="form-group">
                <label for="id">ID Barang :</label>
                <input type="text" id="id" name="idBarang">
            </div>
            <div class="form-group">
                <label for="nama">Nama Barang :</label>
                <input type="text" id="nama" name="namaBarang">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah :</label>
                <input type="text" id="jumlah" name="jumlah">
            </div>
            <div class="form-group">
                <button type="submit">Tambah</button>
            </div>
        </form>
    </div>
        <div id="form-edit" class="form-edit">
            <h2>Ubah Barang</h2>
        <form action="editBarang.php" method="POST">
            <div class="form-group">
                <label for="id">ID Barang :</label>
                <input type="text" id="id" name="idBarang">
            </div>
            <div class="form-group">
                <label for="nama">Nama Barang :</label>
                <input type="text" id="nama" name="namaBarang">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah :</label>
                <input type="text" id="jumlah" name="jumlah">
            </div>
            <div class="form-group">
                <button type="reset">Batal</button>
                <button type="submit">Ubah</button>
            </div>
        </form>
    </div>
    <div class="wadah_flex">
        <div class="sidebar">
            <header>PT. Maju Makmur</header>
            <ul>
                <li><a href="beranda.php">Dashboard</a></li>
                <li><a href="stokATK.php">Stok ATK</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="atas"></div>
            <div class="bawah">
                <h1>Stok Barang ATK diGudang</h1>
                <button onclick="toggleForm()" class="tambah">Tambah Barang Baru</button>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah /bj</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'koneksi.php';

                        $query = "SELECT * FROM stokbarang";
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $idBarang = $row["idBarang"];
                                $namaBarang = $row["namaBarang"];
                                $jumlah = $row["jumlah"];

                                echo "<tr>";
                                echo "<td>$no</td>";
                                echo "<td>$idBarang</td>";
                                echo "<td>$namaBarang</td>";
                                echo "<td>$jumlah</td>";
                                echo "<td>
                                        <a href='editBarang.php?idBarang=".$row['idBarang']."'onclick='toggleEditForm();'>
                                            <button type='button' name='edit' class='tmbEdit'>Edit</button>
                                        </a>
                                        <a href='hapusBarang.php?idBarang=".$row['idBarang']."' onclick='return confirmDelete();'>
                                            <button type='button' name='hapus' class='tmbHapus'>Hapus</button>
                                        </a>
                                      </td>";
                                echo "</tr>";

                                $no++;
                            }
                        } else {
                            echo "<tr>";
                            echo "<td colspan='4'>Tidak ada data stok ATK</td>";
                            echo "</tr>";
                        }

                        mysqli_close($con);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>