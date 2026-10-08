# 🎯 PHP Number Guessing Game

A command-line number guessing game built with PHP.

The computer randomly selects a number between 1 and 100, and the player has a maximum of 7 valid attempts to guess it. The game provides feedback after every guess and allows the player to start a new round after completing a game.

This project was built as part of my PHP learning journey to practice programming fundamentals, functions, input validation, loops, conditional logic, constants, and basic code organization.

---

## 📌 Features

- 🎲 Random number generation
- 🔢 Number range from 1 to 100
- 🎯 Maximum of 7 valid attempts per round
- ⬆️ "Too high" feedback
- ⬇️ "Too low" feedback
- ✅ Correct guess detection
- 🛡️ Input validation
- 🚫 Rejects non-integer input
- 🚫 Rejects numbers outside the allowed range
- 🔄 Invalid input does not consume an attempt
- 🔁 Play again functionality
- 🔤 Accepts uppercase and lowercase `Y/N`
- 🧩 Organized using reusable functions
- 📦 Uses constants for game configuration
- 🎲 Generates a new secret number for every round

---

## 🛠️ Technologies Used

- **PHP**
- PHP CLI
- VS Code
- Git
- GitHub

---

## 📚 PHP Concepts Practiced

This project helped me practice several important PHP concepts:

### Variables

```php
$secret = random_int(MIN_NUMBER, MAX_NUMBER);
