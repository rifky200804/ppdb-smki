<div class="row">
    <div class="col-sm-12">
        <label for="prestasi_yang_dicapai">Pengeluaran Tiap Bulan</label><br>
            <input type="radio" name="prestasi_yang_dicapai" id="Juara Tingkat Kabupaten" value="Juara Tingkat Kabupaten"  <?php if($survey->prestasi_yang_dicapai == 'Juara Tingkat Kabupaten'){echo "checked";} ?>> <label for="Juara Tingkat Kabupaten">Juara Tingkat Kabupaten</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="prestasi_yang_dicapai" id="Juara Tingkat Kecamatan" value="Juara Tingkat Kecamatan" <?php if($survey->prestasi_yang_dicapai == 'Juara Tingkat Kecamatan'){echo "checked";} ?> > <label for="Juara Tingkat Kecamatan">Juara Tingkat Kecamatan</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="prestasi_yang_dicapai" id="Juara Tingkat Kelas/Sekolah" value="Juara Tingkat Kelas/Sekolah" <?php if($survey->prestasi_yang_dicapai == 'Juara Tingkat Kelas/Sekolah'){echo "checked";} ?> > <label for="Juara Tingkat Kelas/Sekolah">Juara Tingkat Kelas/Sekolah</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="prestasi_yang_dicapai" id="Biasa" value="Biasa" <?php if($survey->prestasi_yang_dicapai == 'Biasa'){echo "checked";} ?>> <label for="Biasa">Biasa</label>&nbsp;&nbsp;&nbsp;
    </div>
</div>
<br>