module.exports = (req, res) => {
    const { name = 'World', age = '18' } = req.query
    res.writeHead(200, {"Content-Type": "text/html"});
    res.write('../index.html')
    // res.status(200).send(`Hello ${name}! You're ${age}`)
  }