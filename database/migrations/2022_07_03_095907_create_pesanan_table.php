<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('idpesanan');
            $table->unsignedBigInteger('user_id_user');
            $table->unsignedBigInteger('paket_layanan_id_paket');
            $table->unsignedBigInteger('karyawan_idkaryawan_pembersih');
            $table->unsignedBigInteger('produk_idproduk')->nullable();
            $table->integer('jumlah_produk_pesanan')->nullable();
            $table->string('alamat');
            $table->enum('status_pesanan', ['Y', 'N']);
            $table->timestamp('waktu_pemesanan');
            $table->decimal('total_pembayaran', 9,0);
            $table->enum('cara_pembayaran', ['Cash', 'Debit']);
            $table->enum('status_pembayaran', ['Y', 'N']);
            
            $table->timestamps();
            
            $table->foreign('user_id_user')->references('id')->on('users');
            $table->foreign('paket_layanan_id_paket')->references('id_paket')->on('paketlayanan');
            $table->foreign('karyawan_idkaryawan_pembersih')->references('idkaryawan_pembersih')->on('karyawan');
            $table->foreign('produk_idproduk')->references('idproduk')->on('produk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
