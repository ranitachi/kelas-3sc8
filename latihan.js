// alert('Peringatan')
// var res=confirm("Yakin Ingin Di Hapus?")
// if(res==true)
//     document.write("Anda Menekan Tombol OK")
// else
//     document.write("Anda Menekan Tombol Cancel")


var name=prompt("Masukan Nama Anda")
if(name!=null && name!='')
    document.write('Nama Anda : '+ name)

function cetaknama()
{
    var nama = document.getElementById('nama').value
    alert("Selamat Pagi : " + nama)
}