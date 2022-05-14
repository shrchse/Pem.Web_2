<?php 
require("./Koneksi.php");

function show ($table){
    $state = connect()->prepare("SELECT * FROM $table");
    $state->execute();
    $res = $state->fetchAll();

    if(!empty($res)){
        if($table == "buku"){
            foreach ($res as $row){
                echo "<tr>";
                echo "<td>".$row['judul_buku']."</td>";
                echo "<td>".$row['penulis']."</td>";
                echo "<td>".$row['penerbit']."</td>";
                echo "<td>".$row['tahun_terbit']."</td>";
                echo "<td>";
                echo "<button><a href='FormBuku.php?id_buku=".$row['id_buku']."'>Edit</a></button>";
                echo "<button><a href='Buku.php?id_buku=" . $row['id_buku'] . "' onclick=\"return confirm('Hapus Data?')\">Hapus</a></button>";
                echo "</td>";
                echo "</tr>";
            } echo "Displaying ".count($res)." Data";
        }
        if($table == "member"){
            foreach ($res as $row){
                echo "<tr>";
                echo "<td>".$row['nama_member']."</td>";
                echo "<td>".$row['nomor_member']."</td>";
                echo "<td>".$row['alamat']."</td>";
                echo "<td>".$row['tgl_mendaftar']."</td>";
                echo "<td>".$row['tgl_terakhir_bayar']."</td>";
                echo "<td>";
                echo "<button><a href='FormMember.php?id_member=" .$row['id_member']."'>Edit</a></button>";
                echo "<button><a href='Member.php?id_member=" . $row['id_member'] . "' onclick=\"return confirm('Hapus Data?')\">Hapus</a>";
                echo "</tr>";
            } echo "Displaying ".count($res)." Data";
        }
        if($table == "peminjaman"){
            foreach ($res as $item){
                echo "<tr>";
                echo "<td>".$item['tgl_peminjaman']."</td>";
                echo "<td>".$item['tgl_pengembalian']."</td>";
                echo "<td>";
                echo "<button><a href='FormPeminjaman.php?id_peminjaman=".$item['id_peminjaman']."'>Edit</a></button>";
                echo "<button><a href='Peminjaman.php?id_peminjaman=" . $item['id_peminjaman'] . "'onclick=\"return confirm('Hapus Data?')\">Hapus</a></button>";
                echo "</td>";
                echo "</tr>";
            } echo "Displaying ".count($res)." Data";
        }
    }
}

function tambahBuku($judul_buku, $penulis, $penerbit, $tahun_terbit){
    $res = connect()->prepare("INSERT INTO `buku` (`judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) values (:judul_buku,:penulis,:penerbit,:tahun_terbit)")
    -> execute(array(':judul_buku' => $judul_buku, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun_terbit' => $tahun_terbit));
        if(!empty($res)){
            header('location:Buku.php');
        }
}
function tambahMember($nama_member, $nomor_member, $alamat, $tgl_daftar, $tgl_terakhir_bayar){
    $res = connect()->prepare("INSERT INTO `member` (`nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) values (:nama_member,:nomor_member,:alamat,:tgl_daftar,:tgl_terakhir_bayar)")
    -> execute(array(':nama_member' => $nama_member, ':nomor_member' => $nomor_member, ':alamat' => $alamat, ':tgl_daftar' => $tgl_daftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
        if(!empty($res)){
            header('location:Member.php');
        }
}
function tambahPeminjaman($tgl_peminjaman, $tgl_pengembalian){ 
    $res = connect()->prepare("INSERT INTO `peminjaman` (`tgl_peminjaman`, `tgl_pengembalian`) values (:tgl_peminjaman,:tgl_pengembalian)") 
    -> execute(array(':tgl_peminjaman' => $tgl_peminjaman, ':tgl_pengembalian' => $tgl_pengembalian));
        if(!empty($res)){
            header('location:Peminjaman.php');
        }   
}

function hapusBuku($id_buku){;
    if(connect()->prepare("DELETE FROM buku WHERE id_buku =".$id_buku)->execute()){
        header('location:Buku.php');
    }
}
function hapusMember($id_member){
    if(connect()->prepare("DELETE FROM member WHERE id_member =".$id_member)->execute()){
        header('location:Member.php');
    }
}
function hapusPeminjaman($id_peminjaman){
    if(connect()->prepare("DELETE FROM peminjaman WHERE id_peminjaman =".$id_peminjaman)->execute()){
        header('location:Peminjaman.php');
    }
}

function editBuku(){
    $a = connect()->prepare("SELECT * FROM buku WHERE id_buku = ".$_GET["id_buku"]);
    $a -> execute();
    $GLOBALS['res'] = $a->fetchAll();
}
function editMember(){
    $b = connect()->prepare("SELECT * FROM member WHERE id_member = ".$_GET["id_member"]);
    $b -> execute();
    $GLOBALS['res'] = $b->fetchAll();
}
function editPeminjaman(){
    $c = connect()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ".$_GET["id_peminjaman"]);
    $c->execute();
    $GLOBALS['res'] = $c->fetchAll();
}

function updateBuku($id, $jdl_buku, $penulis, $penerbit, $tahun_terbit){
    $res = connect()->prepare(
        "UPDATE buku SET judul_buku='". $jdl_buku ."', penulis='". $penulis ."', 
        penerbit='". $penerbit ."', tahun_terbit='". $tahun_terbit ."' where id_buku=".$id);
        $res->execute();
    if(!empty($res)){
        header('location:Buku.php');
    }
}
function updateMember($id, $nama_member, $nomor_member, $alamat, $tgl_daftar, $tgl_terakhir_bayar){
    $res = connect()->prepare(
        "UPDATE member SET nama_member='". $nama_member ."', nomor_member='". $nomor_member ."', 
        alamat='". $alamat ."', tgl_mendaftar='". $tgl_daftar ."', tgl_terakhir_bayar='". $tgl_terakhir_bayar ."' where id_member=".$id);
        $res->execute();
    if(!empty($res)){
        header('location:Member.php');
    }
}
function updatePeminjaman($id, $tanggal_peminjaman, $tanggal_pengembalian){
    $res = connect()->prepare(
        "UPDATE peminjaman SET tgl_peminjaman='". $tanggal_peminjaman ."', tgl_pengembalian='". $tanggal_pengembalian ."' where id_peminjaman=".$id);
        $res->execute();
    if(!empty($res)){
        header('location:Peminjaman.php');
    }
}

?>