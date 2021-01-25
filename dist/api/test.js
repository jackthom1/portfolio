var fs = require('fs');



module.exports = (req, res) => {
    // const { name = 'World', age = '18' } = req.query
    let filename = "../" + req.query + ".html";
    fs.readFile(filename, function(err, data){
    if (err){
        res.writeHead(404, {"Content-Type": "text/html"});
        return res.end("404 not found");
    }
    res.writeHead(200, {"Content-Type": "text/html"});
    res.write(data);
    return res.end();


        // res.status(200).send(`Hello ${name}! You're ${age}`)
