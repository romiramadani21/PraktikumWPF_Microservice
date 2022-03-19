module.exports = (app) => {
    const mahasiswas = require("../controller/mahasiswa.controller.js");
    
    var router = require("express").Router();
    
    router.post("/", mahasiswas.create);
    
    router.get("/", mahasiswas.findAll);
    
    router.get("/:id", mahasiswas.findOne);
    
    router.put("/:id", mahasiswas.update);
    
    router.delete("/:id", mahasiswas.delete);
    
    app.use("/api/mahasiswa", router);
   };
    
   