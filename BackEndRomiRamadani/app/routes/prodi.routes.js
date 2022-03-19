module.exports = (app) => {
    const prodis = require("../controller/prodi.controller.js");
    
    var router = require("express").Router();
    
    router.post("/", prodis.create);
    
    router.get("/", prodis.findAll);
    
    router.get("/:id", prodis.findOne);
    
    router.put("/:id", prodis.update);
    
    router.delete("/:id", prodis.delete);
    
    app.use("/api/prodi", router);
   };
    
   