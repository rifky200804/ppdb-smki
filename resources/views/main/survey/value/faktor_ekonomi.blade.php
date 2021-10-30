<div class="row">
    <div class="col-sm-12">
        <label for="status_rumah">Status Rumah</label><br>
            <input type="radio" name="status_rumah" id="Kontrakan Sederhana" value="Kontrakan Sederhana" <?php if($survey->status_rumah == 'Kontrakan Sederhana'){echo "checked";} ?> > <label for="Kontrakan Sederhana">Kontrakan Sederhana</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="status_rumah" id="Sendiri Sederhana/Numpang" value="Sendiri Sederhana/Numpang" <?php if($survey->status_rumah == 'Sendiri Sederhana/Numpang'){echo "checked";} ?> > <label for="Sendiri Sederhana/Numpang">Sendiri Sederhana/Numpang</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="status_rumah" id="Kontrakan Bagus" value="Kontrakan Bagus" <?php if($survey->status_rumah == 'Kontrakan Bagus'){echo "checked";} ?> > <label for="Kontrakan Bagus">Kontrakan Bagus</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="status_rumah" id="Sendiri dan Bagus" value="Sendiri dan Bagus" <?php if($survey->status_rumah == 'Sendiri dan Bagus'){echo "checked";} ?> > <label for="Sendiri dan Bagus" >Sendiri dan Bagus</label>&nbsp;&nbsp;&nbsp;
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-12">
        <label for="jumlah_tanggungan_ortu">Jumlah Tanggungan Orang Tua</label><br>
            <input type="radio" name="jumlah_tanggungan_ortu" id="5 - 10 Orang" value="5 - 10 Orang" <?php if($survey->jumlah_tanggungan_ortu == '5 - 10 Orang'){echo "checked";} ?> > <label for="5 - 10 Orang">5 - 10 Orang</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="jumlah_tanggungan_ortu" id="4 Orang" value="4 Orang" <?php if($survey->jumlah_tanggungan_ortu == '4 Orang'){echo "checked";} ?> > <label for="4 Orang">4 Orang</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="jumlah_tanggungan_ortu" id="2 - 3 Orang" value="2 - 3 Orang" <?php if($survey->jumlah_tanggungan_ortu == '2 - 3 Orang'){echo "checked";} ?>> <label for="2 - 3 Orang">2 - 3 Orang</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="jumlah_tanggungan_ortu" id="1 Orang" value="1 Orang" <?php if($survey->jumlah_tanggungan_ortu == '1 Orang'){echo "checked";} ?>> <label for="1 Orang"  >1 Orang</label>&nbsp;&nbsp;&nbsp;
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-12">
        <label for="status_tinggal">Status Tinggal Peserta</label><br>
            <input type="radio" name="status_tinggal" id="Bersama Orang Lain" value="Bersama Orang Lain" <?php if($survey->status_tinggal == 'Bersama Orang Lain'){echo "checked";} ?> > <label for="Bersama Orang Lain">Bersama Orang Lain</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="status_tinggal" id="Bersama Saudara" value="Bersama Saudara" <?php if($survey->status_tinggal == 'Bersama Saudara'){echo "checked";} ?> > <label for="Bersama Saudara">Bersama Saudara</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="status_tinggal" id="Bersama Kakek-Nenek" value="Bersama Kakek-Nenek" <?php if($survey->status_tinggal == 'Bersama Kakek-Nenek'){echo "checked";} ?>> <label for="Bersama Kakek-Nenek">Bersama Kakek-Nenek</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="status_tinggal" id="Bersama Kedua Ortu" value="Bersama Kedua Ortu" <?php if($survey->status_tinggal == 'Bersama Kedua Ortu'){echo "checked";} ?>> <label for="Bersama Kedua Ortu"  >Bersama Kedua Ortu</label>&nbsp;&nbsp;&nbsp;
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-12">
        <label for="pengeluaran_tiap_bulan">Pengeluaran Tiap Bulan</label><br>
            <input type="radio" name="pengeluaran_tiap_bulan" id="< Rp 500.000" value="< Rp 500.000" <?php if($survey->pengeluaran_tiap_bulan == '< Rp 500.000'){echo "checked";} ?> > <label for="< Rp 500.000">< Rp 500.000</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="pengeluaran_tiap_bulan" id="Rp 500.000 - Rp 700.000" value="Rp 500.000 - Rp 700.000" <?php if($survey->pengeluaran_tiap_bulan == 'Rp 500.000 - Rp 700.000'){echo "checked";} ?>> <label for="Rp 500.000 - Rp 700.000">Rp 500.000 - Rp 700.000</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="pengeluaran_tiap_bulan" id="Rp 700.000  - Rp 1.000.000" value="Rp 700.000  - Rp 1.000.000" <?php if($survey->pengeluaran_tiap_bulan == 'Rp 700.000  - Rp 1.000.000'){echo "checked";} ?> > <label for="Rp 700.000  - Rp 1.000.000" >Rp 700.000  - Rp 1.000.000</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="pengeluaran_tiap_bulan" id="> Rp 1.000.000" value="> Rp 1.000.000" <?php if($survey->pengeluaran_tiap_bulan == '> Rp 1.000.000'){echo "checked";} ?> > > <label for="> Rp 1.000.000" > Rp 1.000.000</label>&nbsp;&nbsp;&nbsp;
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-12">
        <label for="perabotan_rumah_tangga">Perabotan Rumah Tangga</label><br>
            <input type="radio" name="perabotan_rumah_tangga" id="Kompor Gas, TV Tabung" value="Kompor Gas, TV Tabung" <?php if($survey->perabotan_rumah_tangga == 'Kompor Gas, TV Tabung'){echo "checked";} ?>> <label for="Kompor Gas, TV Tabung">Kompor Gas, TV Tabung</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="perabotan_rumah_tangga" id="Kulkas, TV Tabung" value="Kulkas, TV Tabung" <?php if($survey->perabotan_rumah_tangga == 'Kulkas, TV Tabung'){echo "checked";} ?> > <label for="Kulkas, TV Tabung">Kulkas, TV Tabung</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="perabotan_rumah_tangga" id="TV LED, Oven" value="TV LED, Oven"> <label for="TV LED, Oven" <?php if($survey->perabotan_rumah_tangga == 'TV LED, Oven'){echo "checked";} ?>>TV LED, Oven</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="perabotan_rumah_tangga" id="AC, Mesin Cuci, TV LED" value="AC, Mesin Cuci, TV LED" <?php if($survey->perabotan_rumah_tangga == 'AC, Mesin Cuci, TV LED'){echo "checked";} ?>> <label for="AC, Mesin Cuci, TV LED">AC, Mesin Cuci, TV LED</label>&nbsp;&nbsp;&nbsp;
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-12">
        <label for="pengeluaran_perhari">Pengeluaran Per hari</label>
        <input type="text" name="pengeluaran_perhari" id="pengeluaran_perhari" value="{{$survey->pengeluaran_perhari}}" class="form-control"> 
    </div>
</div>
<br>