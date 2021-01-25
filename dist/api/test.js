module.exports = (req, res) => {
    const { name = 'World', age = '18' } = req.query
    res.status(200).send(`Hello ${name}! You're ${age}`)
  }