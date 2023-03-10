<?=$this->extend('layouts/admin')?>
<?=$this->section('title')?>
Dashboard
<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="col">
    <div class="card">
        <div class="card-header">
        <a href="#" data-masyarakat="" class="btn btn-dark" data-target="#modalMasyarakat" data-toggle="modal"><i class="fas fa-fw fa-solid fa-user-plus"></i>Masyarakat Baru</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped" id="masyarakat">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Telp</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=0;
                    foreach($masyarakat as $row){
                        $no++;
                        $data = $row ['id_masyarakat'].",".$row['nik'].",".$row['nama'].",".$row['username'].",".$row['password'].",".$row['telp'].",".base_url('masyarakat/edit/'.$row['id_masyarakat']);
                    ?>
                    <tr>
                    <td><?=$no?></td>
                    <td><?=$row['nik']?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['username']?></td>
                    <td><?=$row['password']?></td>
                    <td><?=$row['telp']?></td>
                    <td>
                        <a href="<?=base_url('masyarakat/delete/'.$row['id_masyarakat'])?>" onclick="return confirm('yakin mau hapus')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php if (!empty(session()->getFlashdata("message"))) : ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata("message");?>
                </div>
                <?php endif ?>
        </div>
    </div>
</div>
<div class="modal fade" id="modalMasyarakat" tab-index="-1" aria-labelledby="modalMasyarakatLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Masyarakat</h5>
                <button class="Close" aria-label="Close" data-dismiss="modal"></button>
                <span aria-hidden="true">&times;</span>
            </div>
            <form class="fMasyarakat" action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nik">Nik</label>
                        <input type="text" name="nik" class="form-control" id="nik">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="telp">Telp</label>
                        <input type="text" name="telp" class="form-control" id="telp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?=$this->endSection()?>
<?=$this->Section('script')?>
    <script>
        $(document).ready(function(){
            $("#modalMasyarakat").on('show.bs.modal',function(event){
                var button = $(event.relatedTarget);
                  var data = button.data('masyarakat');
                if(data !=""){
                    const barisdata = data.split(",");
                    $('#nik').val(barisdata[1]);
                    $('#nama').val(barisdata[2]);
                    $('#username').val(barisdata[3]);
                    $('#password').val(barisdata[4]).change();
                    $('#telp').val(barisdata[5]).change();
                    $('#fmasyarakat').attr('action',barisdata[6]);
                }else{
                    $('#nik').val('');
                    $('#nama').val('');
                    $('#username').val('');
                    $('#password').val('').change();
                    $('#telp').val('').change();
                    $('#fmasyarakat').attr('action','/smasyarakat');
                }
            });
        })
        </script>
<?=$this->endSection()?>