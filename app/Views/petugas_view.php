<?=$this->extend('layouts/admin')?>
<?=$this->section('title')?>
Dashboard
<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="col">
    <div class="card">
        <div class="card-header">
        <a href="#" data-petugas="" class="btn btn-dark" data-target="#modalPetugas" data-toggle="modal"><i class="fas fa-fw fa-solid fa-user-plus"></i>Petugas Baru</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped" id="petugas">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Telp</th>
                        <th>Level</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=0;
                    foreach($petugas as $row){
                        $no++;
                        $data = $row ['id_petugas'].",".$row['nama_petugas'].",".$row['username'].",".$row['password'].",".$row['telp'].",".$row['level'].",".base_url('petugas/edit/'.$row['id_petugas']);
                    ?>
                    <tr>
                    <td><?=$no?></td>
                    <td><?=$row['nama_petugas']?></td>
                    <td><?=$row['username']?></td>
                    <td><?=$row['telp']?></td>
                    <td><?=$row['level']?></td>
                    <td>
                <a href="" data-petugas="<?=$data?>" data-target="#modalPetugas" data-toggle="modal" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <a href="<?=base_url('petugas/delete/'.$row['id_petugas'])?>" onclick="return confirm('yakin mau hapus')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
<div class="modal fade" id="modalPetugas" tab-index="-1" aria-labelledby="modalPetugasLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Petugas</h5>
                <button class="Close" aria-label="Close" data-dismiss="modal"></button>
                <span aria-hidden="true">&times;</span>
            </div>
            <form class="fPetugas" action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_petugas">nama petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" id="nama_petugas">
                    </div>
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="text" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="telp">telp</label>
                        <input type="text" name="telp" class="form-control" id="telp">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select name="level" id="level" class="form-control" required>
                            <option value="">== pilih hak akses ==</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
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
            $("#modalPetugas").on('show.bs.modal',function(event){
                var button = $(event.relatedTarget);
                  var data = button.data('petugas');
                if(data !=""){
                    const barisdata = data.split(",");
                    $('#nama_petugas').val(barisdata[1]);
                    $('#username').val(barisdata[2]);
                    $('#password').val(barisdata[3]);
                    $('#telp').val(barisdata[4]).change();
                    $('#level').val(barisdata[5]).change();
                    $('#fPetugas').attr('action',barisdata[6]);
                }else{
                    $('#nama_petugas').val('');
                    $('#username').val('');
                    $('#password').val('');
                    $('#telp').val('').change();
                    $('#level').val('').change();
                    $('#fPetugas').attr('action','/spetugas');
                }
            });
        })
        </script>
<?=$this->endSection()?>