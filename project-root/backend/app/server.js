const express = require('express');
const db = require('./db');
const app = express();
const port = 3000;

app.get('/api/message', (req, res) => {
  res.json({ message: 'Hello from AWS Backend via EC2 + RDS!' });
});

app.get('/api/users', async (req, res) => {
  try {
    const [rows] = await db.query('SELECT * FROM users');
    res.json(rows);
  } catch (err) {
    res.status(500).json({ error: err.message });
  }
});

app.listen(port, () => {
  console.log(`Backend running on port ${port}`);
});
