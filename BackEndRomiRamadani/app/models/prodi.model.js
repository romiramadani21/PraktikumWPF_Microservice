module.exports = (mongoose) => {
    const Prodi = mongoose.model(
      "prodi",
      mongoose.Schema({
        nama: String,
        jurusan: String,
        akreditasi: String,
        status: Boolean,
      }, {
        timestamps: true
      })
    );
     return Prodi;
    };