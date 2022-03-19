const dbConfig = require("../db.config.js");
 
const mongoose = require("mongoose");
mongoose.Promise = global.Promise;
 
const db = {};
db.mongoose = mongoose;
db.url = dbConfig.url;
db.prodi = require("./prodi.model.js")(mongoose);
db.mahasiswa = require("./mahasiswa.model.js")(mongoose); 

module.exports = db;
