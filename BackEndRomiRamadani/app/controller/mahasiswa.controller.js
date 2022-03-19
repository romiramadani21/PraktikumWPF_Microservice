const db = require("../models");
const Mahasiswa = db.mahasiswa;
 
exports.create = (req, res) => {
 const mahasiswa = new Mahasiswa({
   nama: req.body.nama,
   nim: req.body.nim,
   alamat: req.body.alamat,
   asal_sekolah: req.body.asal_sekolah,
   jurusan_sekolah: req.body.jurusan_sekolah,
   jenis_kelamin: req.body.jenis_kelamin,
   tanggal_lahir: req.body.tanggal_lahir,
 });
 
 // Save Mahasiswa in the database
 mahasiswa
   .save(mahasiswa)
   .then((data) => {
     res.send(data);
   })
   .catch((err) => {
     res.status(500).send({
       message: err.message || "Some error occurred while creating the Mahasiswa.",
     });
   });
};
 
exports.findAll = (req, res) => {
 const nama = req.query.nama;
 var condition = nama
   ? { nama: { $regex: new RegExp(nama), $options: "i" } }
   : {};
 
 Mahasiswa.find(condition)
   .then((data) => {
     res.send(data);
   })
   .catch((err) => {
     res.status(500).send({
       message: err.message || "Some error occurred while retrieving.",
     });
   });
};
 
exports.findOne = (req, res) => {
 const id = req.params.id;
 
 Mahasiswa.findById(id)
   .then((data) => {
     if (!data) res.status(404).send({ message: "Not found with id " + id });
     else res.send(data);
   })
   .catch((err) => {
     res.status(500).send({ message: "Error retrieving with id=" + id });
   });
};
 
exports.update = (req, res) => {
 const id = req.params.id;
 
 Mahasiswa.findByIdAndUpdate(id, req.body, { useFindAndModify: false })
   .then((data) => {
     if (!data) {
       res.status(404).send({
         message: `Cannot update Mahasiswa with id=${id}. Maybe Mahasiswa was not found!`,
       });
     } else res.send({ message: "Mahasiswa was updated successfully." });
   })
   .catch((err) => {
     res.status(500).send({
       message: "Error updating Mahasiswa with id=" + id,
     });
   });
};
exports.delete = (req, res) => {
 const id = req.params.id;
 
 Mahasiswa.findByIdAndRemove(id)
   .then((data) => {
     if (!data) {
       res.status(404).send({
         message: `Cannot delete Mahasiswa with id=${id}. Maybe Mahasiswa was not found!`,
       });
     } else {
       res.send({
         message: "Mahasiswa was deleted successfully!",
       });
     }
   })
   .catch((err) => {
     res.status(500).send({
       message: "Could not delete Mahasiswa with id=" + id,
     });
   });
};
 
exports.deleteAll = (req, res) => {};
 
exports.findAllPublished = (req, res) => {};
