module.exports = (mongoose) => {
    const Mahasiswa = mongoose.model(
      "mahasiswa",
      mongoose.Schema({
        nama: String,
        nim: String,
        alamat: String,
        asal_sekolah: String,
        jurusan_sekolah :String,
        jenis_kelamin:String,
        tanggal_lahir:String,
      }, {
        timestamps: true
      })
    );
     return Mahasiswa;
    };