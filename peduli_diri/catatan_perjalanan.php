<div class="card">
    <div class="card-header bg-secondary text-black">
        Data catatan perjalanan anda
    </div>
    <br>
    <button type="button" class="btn btn-outline-secondary" href="">Cetak Excel</button>

    <div class="card-body">
    	<div class="table-responsive">
    		<table id="data-table" class="table table-bordered">
    			<thead>
                    <th>No</th>
    				<th>Tanggal</th>
    				<th>Waktu</th>
    				<th>Lokasi</th>
    				<th>Suhu Tubuh</th>
                    <th>Aksi</th>
    			</thead>
    			<tbody>
    				<?php
    				$file="file/".$nik."-".$nama.".txt";
    				$fh=fopen($file, "r");
    				while(!feof($fh)){
    					$baris=fgets($fh);
    					if ($baris){
    						$string_data=explode("|",$baris);
    				?>
    				<tr>
                        <td></td>
    					<td><?php echo $string_data['0'] ?></td>
    					<td><?php echo $string_data['1'] ?></td>
    					<td><?php echo $string_data['2'] ?></td>
    					<td><?php echo $string_data['3'] ?></td>
                        <td>
                            <button class="btn btn-secondary" type="submit">
                            <a style="margin-bottom:5px;width:cover;">Update</a></button>
                            <button class="btn btn-dark" type="submit">
                            <a style="margin-bottom:5px;width:cover;" onClick="return confirm ('Apakah anda ingin menghapus data ini ?')">Delete</a></button>
                        </td>
    				</tr>                                                                                                                                                        
    				<?php }} ?>
    			</tbody>
                <style>
                    table {
                      counter-reset: row-num -1;
                    }
                    table tr {
                      counter-increment: row-num;
                    }
                    table tr td:first-child::before {
                        content: counter(row-num) " ";
                    }
                    input :: -webkit-outer-spin-button,
                    input :: -webkit-inner-spin-button {
                        -webkit-appearance:-none;
                        margin:30px;
                    }
                    input[type number] {
                        -moz-appearance:textfield;
                    }
                </style>

    		</table>
    	</div>
    </div>
</div>