const mongoose = require("mongoose");
 
const url = `mongodb://Romi:fwin6gCD6ZFlMMnY@cluster0-shard-00-00.zfchi.mongodb.net:27017,cluster0-shard-00-01.zfchi.mongodb.net:27017,cluster0-shard-00-02.zfchi.mongodb.net:27017/romimongodb?ssl=true&replicaSet=atlas-yhqaay-shard-0&authSource=admin&retryWrites=true&w=majority`;
 
const connectionParams = {
   useNewUrlParser: true,
   useCreateIndex: true,
   useUnifiedTopology: true,
};
mongoose
   .connect(url, connectionParams)
   .then(() => {
       console.log("Connected to database ");
   })
   .catch((err) => {
       console.error(`Error connecting to the database. \n${err}`);
   });
