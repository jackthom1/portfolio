module.exports = (req, res) => {
  const { name = 'World', email = '' } = req.query
  res.status(200).send(`Hello ${name}! Email me on ${email} with your messages`)
}