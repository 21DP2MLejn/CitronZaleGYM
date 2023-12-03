// backend/routes/auth.js
const express = require('express');
const bcrypt = require('bcrypt');

const router = express.Router();

// User registration
router.post('/register', async (req, res) => {
  try {
    const { username, email, password } = req.body;
    const hashedPassword = await bcrypt.hash(password, 10);

    const newUser = new User({
      username,
      email,
      password: hashedPassword,
    });

    await newUser.save();
    res.status(201).json({ message: 'User registered successfully' });
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Registration failed' });
  }
});

// User login
router.post('/login', async (req, res) => {
  try {
    const { email, password } = req.body;
    const user = await User.findOne({ email });

    if (!user || !(await bcrypt.compare(password, user.password))) {
      res.status(401).json({ message: 'Invalid credentials' });
    } else {
      req.session.user = user;
      res.json({ message: 'Login successful', user });
    }
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Login failed' });
  }
});

module.exports = router;