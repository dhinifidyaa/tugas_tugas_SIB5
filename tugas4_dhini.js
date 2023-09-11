function transaksi() {
    
    var namaPelanggan = document.querySelector('input[name="nama"]').value;
    var produkDibeli = document.querySelector('select[name="produk"]').value;
    var jumlahItem = parseInt(document.querySelector('input[name="jumlah"]').value);

    
    var hargaSatuan = 0;
    var diskon = 0;

   
    switch (produkDibeli) {
        case "tv":
            hargaSatuan = 2000000;
            break;
        case "ac":
            hargaSatuan = 3000000; 
            break;
        case "kulkas":
            hargaSatuan = 4000000; 
            break;
        default:
            hargaSatuan = 0;
    }

    
    var hargaKotor = hargaSatuan * jumlahItem;

    
    if (produkDibeli === "kulkas" && jumlahItem >= 3) {
        diskon = 0.3 * hargaKotor; 
    } else if (produkDibeli === "ac" && jumlahItem >= 3) {
        diskon = 0.2 * hargaKotor; 
    } else {
        diskon = 0.1 * hargaKotor; 
    }

   
    var ppn = 0.1 * (hargaKotor - diskon);
    var hargaBayar = (hargaKotor - diskon) + ppn;
  
    var hasilTransaksi = "Nama Pelanggan: " + namaPelanggan + "\n" +
        "Produk yang Dibeli: " + produkDibeli + "\n" +
        "Harga Satuan: Rp " + hargaSatuan + "\n" +
        "Jumlah Item: " + jumlahItem + "\n" +
        "Harga Kotor: Rp " + hargaKotor + "\n" +
        "Diskon: Rp " + diskon + "\n" +
        "PPN: Rp " + ppn + "\n" +
        "Harga Bayar: Rp " + hargaBayar;

    alert(hasilTransaksi);
}
