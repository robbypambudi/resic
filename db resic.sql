
-- -------------------------------------------
-- Table user
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` INT(16) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `password_user` VARCHAR(12) NOT NULL,
  `email_user` VARCHAR(380) NOT NULL UNIQUE,
  `nama_user` CHAR(255) NOT NULL UNIQUE,
  `alamat_user` LONGTEXT NOT NULL,
  `notelp_user` VARCHAR(45) NOT NULL UNIQUE,
  `level_user` ENUM('1','2','3') NOT NULL DEFAULT ('1')
);
-- -----------------------------------------------------
-- Table 'resic_company'.'paketlayanan'
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `paketlayanan` (
  `id_paket` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `durasi_paket` DECIMAL(2,1) NOT NULL,
  `tarif_paket` DECIMAL(6,0) NOT NULL,
  `status_paket` BINARY(1) NOT NULL,
  `nama_paketlayanan` CHAR(20) NOT NULL UNIQUE
);
-- -----------------------------------------------------
-- Table 'resic_company'.'fasilitas'
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nama_fasilitas` TEXT NOT NULL UNIQUE
);
-- -----------------------------------------------------
-- Table 'resic_company'.'paket-fasilitas'
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `paket_fasilitas` (
  `id_paket_fasilitas` INT(10)NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_paket` INT(10) NOT NULL,
  `id_fasilitas` INT(10) NOT NULL,
  CONSTRAINT `fk_paketlayanan` FOREIGN KEY (id_paket)
    REFERENCES paketlayanan(id_paket)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk__fasilitas`
    FOREIGN KEY (id_fasilitas)
    REFERENCES fasilitas (id_fasilitas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);    

-- -----------------------------------------------------
-- Table `resic_company`.`produk`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nama_produk` VARCHAR(45) NOT NULL,
  `hargaproduk` DECIMAL(6,0) UNSIGNED NOT NULL,
  `jumlahproduk` REAL UNSIGNED NOT NULL
);

-- -----------------------------------------------------
-- Table `resic_company`.`karyawan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `resic_company`.`karyawan` (
  `idkaryawan_pembersih` INT (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nama_karyawan` TEXT NOT NULL,
  `ketersediaan_karyawan` BINARY(1) NULL,
  `tanggal_lahir` DATE NULL,
  `gaji` DECIMAL(7,0) NULL,
  `mulai_kerja` DATE NULL,
  `jabatan` TEXT(45) NULL,
  `gender` ENUM ('L', 'P') NULL
);

-- -----------------------------------------------------
-- Table `resic_company`.`pesanan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `resic_company`.`pesanan` (
  `idpesanan` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id_user` INT(16) NOT NULL,
  `paketlayanan_id_paket` INT(10) NOT NULL,
  `karyawan_idkaryawan_pembersih` INT NOT NULL,
  `produk_idproduk` INT NULL,
  `jumlah produk_pesanan` INT(255)NULL,
  `alamat` VARCHAR(45) NOT NULL,
  `status_pesanan` ENUM('Y','N') NOT NULL,
  `waktu_pemesanan` TIMESTAMP NOT NULL,
  `total_pembayaran` DECIMAL(9,0) NOT NULL,
  `cara_pembayaran` ENUM('Cash','Debit') NOT NULL,
  `status_pembayaran` ENUM('Y','N') NOT NULL,
  CONSTRAINT `fk_pesanan_produk`
    FOREIGN KEY (`produk_idproduk`)
    REFERENCES `resic_company`.`produk` (`idproduk`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesanan_paketlayanan`
    FOREIGN KEY (`paketlayanan_id_paket`)
    REFERENCES `resic_company`.`paketlayanan` (`id_paket`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesanan_user`
    FOREIGN KEY (`user_id_user`)
    REFERENCES `resic_company`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesanan_karyawan`
    FOREIGN KEY (`karyawan_idkaryawan_pembersih`)
    REFERENCES `resic_company`.`karyawan` (`idkaryawan_pembersih`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table `resic_company`.`penilaian`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `resic_company`.`penilaian` (
  `idpenilaian` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id_user` INT(16) NOT NULL,
  `pesanan_idpesanan`INT(10) NOT NULL,
  `karyawan_idkaryawan_pembersih` INT(10) NOT NULL,
  `nilai_penilaian` INT(1) NOT NULL,
  `ulasan_penilaian` LONGTEXT NULL,
  CONSTRAINT `fk_penilaian_user1`
    FOREIGN KEY (`user_id_user`)
    REFERENCES `resic_company`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_penilaian_karyawan1`
    FOREIGN KEY (`karyawan_idkaryawan_pembersih`)
    REFERENCES `resic_company`.`karyawan` (`idkaryawan_pembersih`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_penilaian_pesanan1`
    FOREIGN KEY (`pesanan_idpesanan`)
    REFERENCES `resic_company`.`pesanan` (`idpesanan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
)
