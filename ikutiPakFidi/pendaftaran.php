<?php include("header.php");?>
    <h1>Pendaftaran Anggota</h1>

    <div id="div_form">
        <form id="formDaftar" name="formDaftar" action="proses.php" method="POST">
            <div class="inputGroup" id="">
                <label for="">NIM:</label>
                <input type="text" id="txtNIM" name="txtNIM"></input>
            </div>
            <div class="inputGroup" id="">
                <label for="">Nama Lengkap:</label>
                <input type="text" id="txtNama" name="txtNama"></input>
            </div>
            <div class="inputGroup" id="">
                <label for="">Program Studi:</label>
                <input type="text" id="txtProdi" name="txtProdi"></input>
            </div>
            <div class="inputGroup" id="">
                <label for="">No HP:</label>
                <input type="text" id="txtHP" name="txtHP"></input>
            </div>
            <div class="inputGroup" id="">
                <label for="">Email:</label>
                <input type="text" id="txtEmail" name="txtEmail"></input>
            </div>
            <div class="inputGroup" id="">
                <button type="submit">Daftar</button>
            </div>
        </form>
    </div>
<?php include("footer.php");?>