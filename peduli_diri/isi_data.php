<?php

    if (isset($_POST['simpan'])){
        $tanggal=$_POST['tanggal'];
        $jam=$_POST['jam'];
        $lokasi=$_POST['lokasi'];
        $suhu=$_POST['suhu'];

        $file="file/".$nik."-". $nama.".txt";
        $fh=fopen($file,"a");
        $isi_data=$tanggal."|".$jam."|".$lokasi."|".$suhu."\n";
        fwrite($fh,$isi_data);
        fclose($fh);

        $alert="<div class='alert alert-success mb-4'>anda berhasil menambah data catatan perjalanan</div>";
        echo "<meta http-equiv='refresh', content='2; url='page=isi_data'>";    
    }
?>

<div class="card">
    <div class="card-header bg-secondary text-black">
        FORM TAMBAH DATA CATATAN PERJALANAN
    </div>
    <div class="card-body py-4">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <?php echo @$alert;?>
                <form action="" method="POST">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control mt-2 mb-4" required>
                    <label for="">Jam</label>
                    <input type="time" name="jam" class="form-control mt-2 mb-4" required>
                    <label for="">Lokasi yang dikunjungi</label>
                    <input type="text" name="lokasi" class="form-control mt-2 mb-4" required>
                    <label for="">Suhu Tubuh</label>
                    <input type="number" name="suhu" class="form-control mt-2 mb-4" required>
                    <div class="form-inline">
                        <button name="simpan" class="btn btn-secondary">Simpan</button>
                        <button name="reset" type="reset"class="btn btn-primary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>