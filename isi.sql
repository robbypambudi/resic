
INSERT INTO `user` (password_user,email_user,nama_user,alamat_user,notelp_user,level_user) VALUES ('feijafa21', 'rizkylawati@gmail.com', 'snow', 'Sukoharjo', '08165479669', '3');
INSERT INTO `user` (password_user,email_user,nama_user,alamat_user,notelp_user,level_user) VALUES ('loqPhvl8Nn', 'hanan732@gmail.com', 'hanan', 'Surakarta', '081997102749', '1');
INSERT INTO `user` (password_user,email_user,nama_user,alamat_user,notelp_user,level_user) VALUES ('hz5URXDaEv', 'dafa149@gmail.com', 'dafa', 'Klaten', '081290693042', '1');
INSERT INTO `user` (password_user,email_user,nama_user,alamat_user,notelp_user,level_user) VALUES ('vJuDsZiZ4r', 'arif133@gmail.com', 'arif', 'Klaten', '081119519547', '1');
INSERT INTO `user` (password_user,email_user,nama_user,alamat_user,notelp_user,level_user) VALUES ('cqsdzawYb9', 'sinta735@gmail.com', 'sinta', 'Karanganyar', '081682961877', '1');
INSERT INTO `user` (password_user,email_user,nama_user,alamat_user,notelp_user,level_user) VALUES ('7LLRk3Im8A', 'sinta2122@gmail.com', 'sinta2', 'Sukoharjo', '081919163444', '1');
INSERT INTO `user` (password_user,email_user,nama_user,alamat_user,notelp_user,level_user) VALUES ('X5UjQ8N4Ma', 'adam332@gmail.com', 'adam', 'Sukoharjo', '081553012461', '1');
INSERT INTO `user` (password_user,email_user,nama_user,alamat_user,notelp_user,level_user) VALUES ('KsABqXXhZA', 'alisher83@gmail.com', 'alisher', 'Surakarta', '081913168802', '1');
INSERT INTO `user` (password_user,email_user,nama_user,alamat_user,notelp_user,level_user) VALUES ('iTIv3eoveE', 'sarah452@gmail.com', 'sarah', 'Surakarta', '081809456551', '1');
INSERT INTO `user` (password_user,email_user,nama_user,alamat_user,notelp_user,level_user) VALUES ('22kmDVEK71', 'alishernynxys889@gmail.com', 'alishernynxys', 'Surakarta', '081422506113', '1');
INSERT INTO `user` (password_user,email_user,nama_user,alamat_user,notelp_user,level_user) VALUES ('lcm7q8zQfs', 'snyxfre310@gmail.com', 'snyxfre', 'Surakarta', '081445901089', '1');

-- ----------------------------
-- Records of paketlayanan
-- ----------------------------
INSERT INTO `paketlayanan` (durasi_paket, tarif_paket, status_paket,nama_paketlayanan) VALUES ('1', '150000', '0', 'Paket Silver');
INSERT INTO `paketlayanan` (durasi_paket, tarif_paket, status_paket,nama_paketlayanan) VALUES ('2', '200000', '0', 'Paket Gold');
INSERT INTO `paketlayanan` (durasi_paket, tarif_paket, status_paket,nama_paketlayanan) VALUES ('2', '225000', '1', 'Paket Sterilisasi A');
INSERT INTO `paketlayanan` (durasi_paket, tarif_paket, status_paket,nama_paketlayanan) VALUES ('3', '275000', '1', 'Paket Sterilisasi B');
INSERT INTO `paketlayanan` (durasi_paket, tarif_paket, status_paket,nama_paketlayanan) VALUES ('4', '350000', '1', 'Paket Sterilisasi C');

-- ----------------------------
-- Records of fasilitas
-- ----------------------------
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Menyapu'); 
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Mengepel'); 
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Membersihkan Kaca'); 
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Vacuum Karpet');
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Fogging Disinfektan');
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Cuci Karpet');
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Memotong Rumput');
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Powerwashing');
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Cuci Piring');
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Gardening');

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES ('Pembersih lantai 2L','15000','36');
INSERT INTO `produk` VALUES ('Pembersih lantai 5L','35000','14');
INSERT INTO `produk` VALUES ('Deterjen 1 Kg','12500','21');
INSERT INTO `produk` VALUES ('Parfum laundry 500Ml','8000','5');
INSERT INTO `produk` VALUES ('Pembersih keramik 3L','21000','14');
INSERT INTO `produk` VALUES ('Sabun cuci piring 1L','17000','0');
INSERT INTO `produk` VALUES ('Pewangi pakaian 2L','28000','0');

-- -----------------------------------------------------
-- Table `resic_company`.`karyawan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `resic_company`.`karyawan` (
  `idkaryawan_pembersih` INT NOT NULL,
  `nama_karyawan` VARCHAR(45) NOT NULL,
  `ketersediaan_karyawan` BINARY(1) NULL,
  `tanggal_lahir` DATE NULL,
  `gaji` DECIMAL(7,0) NULL,
  `mulai_kerja` DATE NULL,
  `jabatan` TEXT(45) NULL,
  `gender` ENUM('L', 'P') NULL,
  PRIMARY KEY (`idkaryawan_pembersih`))
ENGINE = InnoDB;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `resic_company`.`karyawan` (`nama_karyawan`, `ketersediaan_karyawan`, `tanggal_lahir`, `gaji`, `mulai_kerja`, `jabatan`, `gender`) VALUES ('Yuki R', 'Y', '1996-02-11', '1000000', '2022-06-06', 'Admin', 'P');
INSERT INTO `resic_company`.`karyawan` (`nama_karyawan`, `ketersediaan_karyawan`, `tanggal_lahir`, `gaji`, `mulai_kerja`, `jabatan`, `gender`) VALUES ('Nina Stanley','Y','1990-10-20','2000000','2016-11-04','Pembersih','P');
INSERT INTO `resic_company`.`karyawan` (`nama_karyawan`, `ketersediaan_karyawan`, `tanggal_lahir`, `gaji`, `mulai_kerja`, `jabatan`, `gender`) VALUES ('Terrell Jones','Y','1987-07-22','1500000','2018-04-05','Penyimpanan','L');
INSERT INTO `resic_company`.`karyawan` (`nama_karyawan`, `ketersediaan_karyawan`, `tanggal_lahir`, `gaji`, `mulai_kerja`, `jabatan`, `gender`) VALUES ('Sam Soto','Y','1988-08-05','2000000','2021-08-06','Pembersih','L');
INSERT INTO `resic_company`.`karyawan` (`nama_karyawan`, `ketersediaan_karyawan`, `tanggal_lahir`, `gaji`, `mulai_kerja`, `jabatan`, `gender`) VALUES ('Vincent Diaz','N','1997-12-11','2000000','2015-07-02','Pembersih','L');
INSERT INTO `resic_company`.`karyawan` (`nama_karyawan`, `ketersediaan_karyawan`, `tanggal_lahir`, `gaji`, `mulai_kerja`, `jabatan`, `gender`) VALUES ('Lorena Long','N','1988-05-12','1500000','2019-08-07','Pembersih','P');

-- -----------------------------------------------------
-- Table `resic_company`.`pesanan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `resic_company`.`pesanan` (
  `idpesanan` INT(10) NOT NULL,
  `user_id_user` INT(16) NOT NULL,
  `paketlayanan_id_paket` INT(10) NOT NULL,
  `karyawan_idkaryawan_pembersih` INT NOT NULL,
  `produk_idproduk` INT NULL,
  `jumlah produk_pesanan` INT(255)NULL,
  `alamat` VARCHAR(45) NOT NULL,
  `status_pesanan` ENUM('Y','N') NOT NULL,
  `waktu_pemesanan` DATE NOT NULL,
  `total_pembayaran` DECIMAL(9,0) NOT NULL,
  `cara_pembayaran` ENUM('Cash','Debit') NOT NULL,
  `status_pembayaran` ENUM('Y','N') NOT NULL,
  PRIMARY KEY (`idpesanan`),
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
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- ----------------------------
-- Records of pesanan
-- ----------------------------
INSERT INTO `pesanan` VALUES ('1000000001','1000000001','1003','1000001','100000001','1','Surakarta','N','2022-04-05','240000','Cash','Y');
INSERT INTO `pesanan` VALUES ('1000000002','1000000002','1003','1000003','100000001','1','Surakarta','Y','2022-04-06','240000','Cash','N');
INSERT INTO `pesanan` VALUES ('1000000003','1000000003','1003','1000003','100000001','1','Surakarta','Y','2022-04-07','240000','Debit','Y');
-- -----------------------------------------------------
-- Table `resic_company`.`penilaian`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `resic_company`.`penilaian` (
  `idpenilaian` INT(10) NOT NULL,
  `user_id_user` INT(16) NOT NULL,
  `pesanan_idpesanan`INT(10) NOT NULL,
  `karyawan_idkaryawan_pembersih` INT(10) NOT NULL,
  `nilai_penilaian` INT(1) NOT NULL,
  `ulasan_penilaian` LONGTEXT NULL,
  PRIMARY KEY (`idpenilaian`),
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
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- ----------------------------
-- Records of penilaian
-- ----------------------------
INSERT INTO `penilaian` VALUES ('1000000001','1000000001','1000000001','1000000001','5','oke');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;