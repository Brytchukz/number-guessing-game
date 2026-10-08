# 🎯 PHP Number Guessing Game

A beginner-friendly **Number Guessing Game built with PHP**. The program generates a random number between 1 and 100 and challenges the player to guess the correct number within a limited number of attempts.

The project was created as a practical exercise to strengthen my understanding of **PHP fundamentals, functions, loops, input validation, conditional logic, and clean code organization**.

---

## 📌 Project Overview

The game generates a secret number between **1 and 100**.

The player has **7 attempts** to guess the number.

After every valid guess, the game provides feedback:

* **Too high** — the guess is greater than the secret number.
* **Too low** — the guess is smaller than the secret number.
* **Correct** — the player has guessed the number successfully.

Invalid inputs do not consume an attempt.

After the game ends, the player can choose whether to play another round.

---

## 🚀 Features

* Random number generation
* Maximum of 7 attempts per round
* Feedback after every guess
* Input validation
* Accepts only whole numbers
* Prevents numbers outside the range 1–100
* Invalid input does not reduce the number of attempts
* Displays remaining attempts
* Reveals the secret number when the player loses
* Play-again functionality
* New secret number generated for every round
* Organized code using reusable functions
* Strict type checking with PHP

---

## 🛠️ Technologies Used

* **PHP**
* **Command Line / Terminal**
* **Git**
* **GitHub**

---

## 📚 PHP Concepts Practiced

This project helped me practice several important PHP concepts.

### 1. Constants

The game uses constants for values that should remain fixed:

```php
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;
const MAX_ATTEMPTS = 7;
```

This makes the code easier to maintain because these values can be changed in one place.

---

### 2. Random Number Generation

PHP's `random_int()` function is used to generate the secret number:

```php
$secret = random_int(MIN_NUMBER, MAX_NUMBER);
```

---

### 3. Functions

The program is divided into smaller functions, with each function handling a specific responsibility.

Examples include:

```php
askForGuess()
checkGuess()
playGame()
showResult()
askPlayAgain()
```

This makes the program easier to understand, test, and maintain.

---

### 4. Input Validation

The program validates user input before accepting it.

```php
if (filter_var($input, FILTER_VALIDATE_INT) === false) {
    echo "Invalid input. Please enter a whole number.\n";
    continue;
}
```

The program also checks that the number is within the allowed range:

```php
if ($guess < MIN_NUMBER || $guess > MAX_NUMBER) {
    echo "Please enter a number between 1 and 100.\n";
    continue;
}
```

Invalid input does not consume an attempt.

---

### 5. Loops

The project uses different types of loops.

A `while` loop is used when the program needs to continue requesting valid input:

```php
while (true) {
    // request and validate input
}
```

A `for` loop controls the maximum number of attempts:

```php
for ($attempt = 1; $attempt <= $maxAttempts; $attempt++) {
    // game logic
}
```

A `do...while` loop allows the player to start another game after completing a round:

```php
do {
    // play game
} while (askPlayAgain());
```

---

### 6. Match Expression

The `match` expression determines whether the player's guess is too high, too low, or correct.

```php
return match (true) {
    $guess > $secret => "high",
    $guess < $secret => "low",
    default => "correct",
};
```

---

### 7. Strict Typing

The project uses:

```php
declare(strict_types=1);
```

This helps PHP enforce stricter type behavior and makes the code more predictable.

---

## 🎮 How the Game Works

The basic game flow is:

```text
Start Game
    ↓
Generate Random Number
    ↓
Ask Player for Guess
    ↓
Validate Input
    ↓
Is Guess Valid?
   ↙       ↘
 No         Yes
 ↓           ↓
Ask Again   Compare Guess
               ↓
        ┌──────┼──────┐
        ↓      ↓      ↓
      High    Low   Correct
        ↓      ↓      ↓
     Continue Attempts
               ↓
          Game Finished
               ↓
        Play Again?
          ↙       ↘
        Yes        No
         ↓          ↓
    New Number    Exit
```

---

## 💻 Example Gameplay

```text
I'm thinking of a number between 1 and 100. You have 7 attempts.

Enter your guess: 50
Too high
Attempts left: 6

Enter your guess: 25
Too low
Attempts left: 5

Enter your guess: 37
Too high
Attempts left: 4

Enter your guess: 32
Correct! You got it in 4 attempt(s).

Play again? (y/n): n

Thanks for playing!
```

---

## ⚠️ Input Validation Examples

### Invalid Text

```text
Enter your guess: hello

Invalid input. Please enter a whole number.
```

The attempt is not consumed.

### Number Outside the Range

```text
Enter your guess: 150

Please enter a number between 1 and 100.
```

The attempt is not consumed.

### Valid Input

```text
Enter your guess: 75

Too high
Attempts left: 6
```

The attempt is consumed because the input is valid.

---

## 📂 Project Structure

```text
number-guessing-game/
│
├── number_guessing_game.php
├── README.md
└── .gitignore
```

### `number_guessing_game.php`

Contains the complete PHP game logic.

### `README.md`

Contains the project documentation, setup instructions, features, and explanation of the project.

### `.gitignore`

Contains files and folders that should not be tracked by Git.

---

## 🔧 Installation and Setup

### 1. Clone the Repository

Clone the project from GitHub:

```bash
git clone YOUR_GITHUB_REPOSITORY_URL
```

Move into the project directory:

```bash
cd number-guessing-game
```

---

### 2. Check PHP Installation

Make sure PHP is installed on your computer.

Run:

```bash
php -v
```

You should see your installed PHP version.

---

### 3. Run the Game

Run the following command:

```bash
php number_guessing_game.php
```

The game will start in the terminal.

---

## 🧪 Testing

The game was tested with different types of input, including:

* Correct guesses
* Incorrect guesses
* Numbers higher than the secret number
* Numbers lower than the secret number
* Numbers outside the allowed range
* Text input
* Empty input
* Multiple rounds
* Winning within the allowed attempts
* Losing after all attempts are used

---

## 🧠 Function Responsibilities

| Function         | Responsibility                              |
| ---------------- | ------------------------------------------- |
| `askForGuess()`  | Requests and validates the player's guess   |
| `checkGuess()`   | Compares the guess with the secret number   |
| `playGame()`     | Controls the main guessing process          |
| `showResult()`   | Displays the final result                   |
| `askPlayAgain()` | Asks whether the player wants another round |

---

## 📈 Future Improvements

Possible improvements for future versions include:

* Difficulty levels
* Easy, Medium, and Hard modes
* Different number ranges
* High-score system
* Score calculation based on attempts
* Timer
* Player name
* Game statistics
* Leaderboard
* Graphical user interface
* Web-based version using HTML, CSS, and PHP

---

## 🎯 Learning Objective

The main purpose of this project was to move beyond learning PHP syntax and actually use PHP to build a functional application.

Through this project, I practiced:

* Problem solving
* Program structure
* Functions
* Loops
* Conditional statements
* Input validation
* Type handling
* User interaction
* Code organization
* Git and GitHub workflow

This project represents one of my practical steps toward becoming a professional software developer.

---

## 👨‍💻 Author

**CHUKWUEMEKA CHUKWUKA BRIGHT**

Software Developer

GitHub:
https://github.com/Brytchukz

LinkedIn:
https://www.linkedin.com/in/chukwuemeka-bright/

Email:
[brightchukwu2015@gmail.com](mailto:brightchukwu2015@gmail.com)

---

## 📄 License

This project is intended for educational and portfolio purposes.

You are welcome to study the code and use it as a reference for learning PHP.
