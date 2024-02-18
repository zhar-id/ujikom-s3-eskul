<?php
$koneksi = mysqli_connect("localhost","root","","sakatsports");
$statistik = query("SELECT anggota.*, eskul.NAMA_ESKUL
FROM anggota
JOIN eskul ON anggota.ID_ESKUL = eskul.ID_ESKUL
ORDER BY NAMA asc;
");

function query($data){
    global $koneksi;

    $hasil = mysqli_query($koneksi, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;
    }

    return $rows;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List Anggota Volly</title>
    <style>
      body {
        font-family: -apple-system, system-ui, -apple-system, BlinkMacSystemFont,
          "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans",
          "Helvetica Neue", sans-serif;
        background-color: #111013;
      }
      h1 {
        text-align: center;
        font-size: 40px;
        text-transform: uppercase;
        margin-top: 20px;
        color: white;
      }
      .tabel {
        box-shadow: 20px 20px 20px black;
      }
      table {
        width: 100%;
        table-layout: fixed;
      }
      .tbl-content {
        height: 400px;
        overflow-x: auto;
        margin-top: 0px;
      }
      th {
        background: #1d2428;
        color: #59c1a3;
        padding: 20px 15px;
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 16px;
      }
      td {
        padding: 15px;
        vertical-align: middle;
        font-weight: 300px;
        font-size: 14;
        text-align: center;
      }
      section {
        margin: 50px;
      }
      tr {
        color: whitesmoke;
      }
      tr:nth-child(even) {
        background-color: #2c383d;
        color: #59c1a3;
      }
      ::-webkit-scrollbar {
        width: 10px;
      }
      ::-webkit-scrollbar-thumb:hover {
        -webkit-box-shadow: inset 20px 20px 20px #1d2428;
      }
      ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 8px #1d2428;
      }
      ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 8px #1d2428;
      }
      input[type="text"] {
        width: 98.3%;
        padding: 10px;
        margin-bottom: 20px;
        font-size: 16px;
        border: none;
        background-color: #1d2428;
        color: #59c1a3;
      }
      @media screen and (max-width: 768px) {
        section {
          margin: 5px;
        }
        table {
          font-size: 12px;
        }

        th,
        td {
          padding: 10px;
        }

        h1 {
          font-size: 30px;
        }
      }
    </style>
  </head>
  <body>
    <section>
      <a href="../main/index.html"
        ><button style="position: absolute; top: 10px; left: 10px">
          Back
        </button></a
      >

      <h1>List Anggota Nekat Sports</h1>
      <div class="tabel">
        <input type="text" id="search" placeholder="Search by name" />
        <table class="content-table" border="0" cellspacing="0" cellspading="0">
          <tr>
            <th style="width: 3%">No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Eskul</th>
          </tr>
        </table>
        <div class="tbl-content">
          <table cellspacing="" border="0" cellspading="">
            <?php $y = 1; foreach($statistik as $data) : 
                ?>
            <tr class="active-row">
              <td style="width: 3%"><?php echo $y++ ?></td>
              <td><?php echo $data["NAMA"]; ?></td>
              <td><?php echo $data["KELAS"]; ?></td>
              <td><?php echo $data["NAMA_ESKUL"]; ?></td>
            </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </section>
    <script>
      document.getElementById("search").addEventListener("input", function () {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.querySelector(".tbl-content table");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      });
    </script>
  </body>
</html>
