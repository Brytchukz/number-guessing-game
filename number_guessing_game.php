<?php
declare(strict_types=1);

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;
const MAX_ATTEMPTS = 7;

function askForGuess(): int
{
    while (true) {
        $input = trim((string) readline("Enter your guess: "));

        if (filter_var($input, FILTER_VALIDATE_INT) === false) {
            echo "Invalid input. Please enter a whole number.\n";
            continue;
        }

        $guess = (int) $input;

        if ($guess < MIN_NUMBER || $guess > MAX_NUMBER) {
            echo "Please enter a number between " . MIN_NUMBER . " and " . MAX_NUMBER . ".\n";
            continue;
        }

        return $guess;
    }
}

function checkGuess(int $guess, int $secret): string
{
    return match (true) {
        $guess > $secret => "high",
        $guess < $secret => "low",
        default => "correct",
    };
}

function playGame(int $secret, int $maxAttempts): bool
{
    for ($attempt = 1; $attempt <= $maxAttempts; $attempt++) {
        $guess = askForGuess();
        $result = checkGuess($guess, $secret);

        if ($result === "correct") {
            echo "Correct! You got it in $attempt attempt(s).\n";
            return true;
        }

        echo $result === "high" ? "Too high\n" : "Too low\n";

        $left = $maxAttempts - $attempt;
        if ($left > 0) {
            echo "Attempts left: $left\n";
        }
    }

    return false;
}

function showResult(bool $won, int $secret): void
{
    if (!$won) {
        echo "Game over! The number was $secret.\n";
    }
}

function askPlayAgain(): bool
{
    while (true) {
        $input = strtolower(trim((string) readline("Play again? (y/n): ")));

        if ($input === "y") {
            return true;
        }

        if ($input === "n") {
            return false;
        }

        echo "Please enter y or n.\n";
    }
}

// main script
do {
    $secret = random_int(MIN_NUMBER, MAX_NUMBER);

    echo "\nI'm thinking of a number between " . MIN_NUMBER . " and " . MAX_NUMBER . ". ";
    echo "You have " . MAX_ATTEMPTS . " attempts.\n";

    $won = playGame($secret, MAX_ATTEMPTS);
    showResult($won, $secret);
} while (askPlayAgain());

echo "Thanks for playing!\n";
